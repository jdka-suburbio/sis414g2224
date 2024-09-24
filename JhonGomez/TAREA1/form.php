<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>10 preguntas</h1>
    <form action="test.php" method="post">
        <label for="q1">¿Cuánto es 2 + 2?</label><br>
        <input type="text" name="q1" id="q1" required><br><br>

        <label for="q2">¿Cuál es el lenguaje que estamos usando?</label><br>
        <input type="text" name="q2" id="2" required><br><br>

        <label for="q3">¿cual es la capital de bolivia?</label><br>
        <select name="q3" id="q3">
            <option   value="la paz" >La paz</option>
            <option   value="sucre" >Sucre</option>
            <option  value="cochabamba">Cochabamba</option>
        </select>
        <br>
        <label for="q4">3:¿ cuando es el dia de la madre? </label><br>
        <input type="checkbox"  name="q4" value="marzo" id="marzo" >"8 de marzo"
        <br>
        <input type="checkbox"  name="q4" value="marzo1" id="marzo1">"11 de marzo"
        <br>
        <input type="checkbox"  name="q4" value="marzo2" id="marzo2">"2 de marzo"
        <br>
        <label for="q5">4:¿ que año se fundo Bolivia? </label><br>
       
        <input type="radio"  name="q5" value="1826">"1826"
        <input type="radio"  name="q5" value="2024">"2024"
        <input type="radio"  name="q5" value="1722">"1722"
        <br>
        <label for="q6"> 6: cuando es el dia del padre</label>
        <br>
        <input type="radio"  name="q6" value="marzo">"14 de marzo"
        <input type="radio"  name="q6" value="abril">"19 de abril"
        <input type="radio"  name="q6" value="enero">"10 de enero"
        <br>
        <label for="q7"> 6: cuantos planetas tiene el sistema solar</label>
        <br>
        <select name="q7" >
            <option value="11">11</option>
            <option value="8">8</option>
            <option value="2">2</option>

        </select><br>
        <label for="q8">8:cuanto es 5*5</label><br>
        <input type="text" name="q8" id="q8" required ><BR>
           <br>  
           <label for=" q9">9:cuales son los colores primarios</label><br>
        <input type="checkbox"  name="q9" value="rojoamarilloazul">"rojo,amarillo,azul"
        <br>
        <input type="checkbox"  name="q9" value="verderojonegro">"verde,rojo,negro"
        <br>
        <input type="checkbox"  name="q9" value="amarillorojoverde">"amarillo,rojo,verde"
        <br>
        <label for="q10">10: un año cuantos dias tiene </label><br>
        <input type="radio"  name="q10" value="365">"365"
        <input type="radio"  name="q10" value="367">"367"
        <input type="radio"  name="q10" value="500">"500"
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
