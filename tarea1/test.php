
<?php
    $total_puntos = 100;
    $num_preguntas = 10;
    $puntos_por_pregunta = $total_puntos / $num_preguntas;
    $puntaje_total = 0;

    // Pregunta 1 (Radio)
    if (isset($_POST["q1"])) {
        $puntaje_total += $_POST["q1"] * $puntos_por_pregunta;
    }

    // Pregunta 2 (Texto)
    if (isset($_POST["q2"])) {
        if (strtolower(trim($_POST["q2"])) == "río mamoré") {
            $puntaje_total += $puntos_por_pregunta;
        }
    }

    // Pregunta 3 (Selección)
    if (isset($_POST["q3"])) {
        $puntaje_total += $_POST["q3"] * $puntos_por_pregunta;
    }

    // Pregunta 4 (Checkbox múltiple)
    if (isset($_POST["q4"])) {
        $correctas_q4 = array_sum($_POST["q4"]);
        $total_respuestas_q4 = 2;  // Hay dos respuestas correctas
        $puntaje_total += ($correctas_q4 / $total_respuestas_q4) * $puntos_por_pregunta;
    }

    // Pregunta 5 (Número)
    if (isset($_POST["q5"])) {
        if ($_POST["q5"] == 1548) {
            $puntaje_total += $puntos_por_pregunta;
        }
    }

    // Pregunta 6 (Slider)
    if (isset($_POST["q6"])) {
        $puntaje_total += ($_POST["q6"] / 10) * $puntos_por_pregunta;
    }

    // Pregunta 7 (Radio)
    if (isset($_POST["q7"])) {
        $puntaje_total += $_POST["q7"] * $puntos_por_pregunta;
    }

    // Pregunta 8 (Texto)
    if (isset($_POST["q8"])) {
        if (strtolower(trim($_POST["q8"])) == "carnaval de oruro") {
            $puntaje_total += $puntos_por_pregunta;
        }
    }

    // Pregunta 9 (Selección)
    if (isset($_POST["q9"])) {
        $puntaje_total += $_POST["q9"] * $puntos_por_pregunta;
    }

    // Pregunta 10 (Radio)
    if (isset($_POST["q10"])) {
        $puntaje_total += $_POST["q10"] * $puntos_por_pregunta;
    }

    // Mostrar puntaje total
    echo "Tu puntaje es: " . round($puntaje_total, 2) . " puntos";
?>
