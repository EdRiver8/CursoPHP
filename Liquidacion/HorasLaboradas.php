<?php

/*
    Dados los conceptos que indican hora de inicio y hora de fin de las horas ordinarias (HO), horas extras (HED) y horas extras nocturnas (HEN), se requiere determinar el total de horas ordinarias (HO), horas extras (HED) y horas extras nocturnas (HEN) laboradas por un empleado de acuerdo con las marcaciones de entrada y salida.

Un concepto será de la forma: 

{"name":"HO","start":"08:00","end":"17:59","id":"HO"}
Esto indica que el concepto HO inicia desde las 08:00 y termina a las 17:59

Se tendrá una función que recibirá los conceptos, a la que se le indicará una hora de inicio y una hora de fin, en ese rango horario se debe sacar la lista de los conceptos con su duración total.

Esta será la firma de la función:
function classifyAttendances($concepts, $attendanceIn,
$attendanceOut)

Es decir, que si le pasamos estos parámetros a la función:
concepts:[
  {
    "id": "HO",
    "name": "HO",
    "start": "08:00",
    "end": "17:59"
  },
  {
    "id": "HED",
    "name": "HED",
    "start": "18:00",
    "end": "20:59"
  },
  {
    "id": "HEN",
    "name": "HEN",
    "start": "21:00",
    "end": "05:59"
  }
]
attendanceIn: 08:00
attendanceOut: 11:30

El JSON entregado por la función con la lista de conceptos y horas correspondientes sería:
{"HO":3.5}

Mientras que si variamos el rango de consulta con estos valores:

concepts:[
  {
    "name": "HO",
    "id": "HO",
    "start": "08:00",
    "end": "17:59"
  },
  {
    "id": "HED",
    "name": "HED",
    "start": "18:00",
    "end": "20:59"
  },
  {
    "id": "HEN",
    "name": "HEN",
    "start": "21:00",
    "end": "05:59"
  }
]
attendanceIn: 14:00
attendanceOut: 21:30

El JSON de salida de la función debiera ser:
{"HO":4, "HED":3, "HEN":0.5}

Nota
En caso de tener varios conceptos en la respuesta, seguir el orden: HO,
HED, HEN
*/

$concepts = '[
    {
      "name": "HO",
      "id": "HO",
      "start": "08:00",
      "end": "17:59"
    },
    {
      "id": "HED",
      "name": "HED",
      "start": "18:00",
      "end": "20:59"
    },
    {
      "id": "HEN",
      "name": "HEN",
      "start": "21:00",
      "end": "05:59"
    }
  ]';


function classifyAttendances($concepts, $attendanceIn, $attendanceOut)
{
    $decodeConcepts = json_decode($concepts, true);
    $horaInicio = new DateTime($attendanceIn);
    $horaFin = new DateTime($attendanceOut);

    $totalHorasLaboradas = floatval($horaInicio->diff($horaFin)->format('%H'));
    $minutosFinales = floatval($horaInicio->diff($horaFin)->format('%i'));
    if ($minutosFinales > 0) {
        $minutosFinales = 1 * $minutosFinales / 60;
    }
    echo $minutosFinales . '<br>';
    $totalHorasLaboradas += $minutosFinales;
    echo $totalHorasLaboradas . '<br>';
    $calculoHoras = [];
    $horaAux = $horaInicio;

    foreach ($decodeConcepts as $value) {
        $inicioRango = new DateTime($value['start']);
        $finalRango = new DateTime($value['end']);

        switch ($value['id']) {
            case 'HO':
                if ($horaInicio <= $finalRango) {
                    $ho = floatval($horaInicio->diff($finalRango)->format('%H'));
                    $min = floatval($horaInicio->diff($finalRango)->format('%i'));
                    if ($min > 0) {
                        $ho += 1 * $min / 59;
                    }
                    $totalHorasLaboradas -= $ho;
                    if ($totalHorasLaboradas > 0) {
                        $horaAux = $finalRango;
                    };
                    $calculoHoras[$value['id']] = $ho;
                }
                break;
            case 'HED':
                if ($totalHorasLaboradas > 0 and $horaInicio <= $finalRango) {
                    $hed = floatval($horaAux->diff($finalRango)->format('%H'));
                    $min = floatval($horaAux->diff($finalRango)->format('%i'));
                    if ($min > 0) {
                        $hed += 1 * $min / 59;
                    }
                    $totalHorasLaboradas -= $hed;
                    if ($totalHorasLaboradas > 0) {
                        $horaAux = $finalRango;
                    };
                    $calculoHoras[$value['id']] = $hed;
                }
                break;
            case 'HEN':
                if ($totalHorasLaboradas > 0) {
                    $hen = $totalHorasLaboradas;
                }
                $calculoHoras[$value['id']] = $hen;
                break;
        }
    }
    return $calculoHoras;
};

$objHoras = classifyAttendances($conceptos, '21:00', '21:30');
print_r($objHoras);
