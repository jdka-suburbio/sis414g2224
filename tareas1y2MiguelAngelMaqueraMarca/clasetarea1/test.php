<?php
    $total_puntos = 100;
    $num_preguntas = 10;
    $puntos_por_pregunta = $total_puntos / $num_preguntas;
    $puntaje_total = 0;
    for ($i = 1; $i <= 5; $i++) {
        if (isset($_POST["q$i"])) {
            $puntaje_total += $_POST["q$i"] * $puntos_por_pregunta;
        }
    }
    if (isset($_POST['q6'])) {
        $correctas_q6 = array_sum($_POST['q6']);
        $total_respuestas_q6 = 2;  
        $puntaje_total += ($correctas_q6 / $total_respuestas_q6) * $puntos_por_pregunta;
    }
    for ($i = 7; $i <= $num_preguntas; $i++) {
        if (isset($_POST["q$i"])) {
            $puntaje_total += $_POST["q$i"] * $puntos_por_pregunta;
        }
    }

    echo "Tu puntaje es: " . round($puntaje_total, 2) . " puntos";
?>

