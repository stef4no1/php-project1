<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio PHP</title>
</head>
<body>
    <h1>Suma de numeros</h1>
    <form action="" method="POST">
        <input type="text" name="num[]" placeholder="ingrese un valor">
        <br>
        <input type="text" name="num[]" placeholder="ingrese otro valor">
        <br>
        <input type="text" name="num[]" placeholder="ingrese el ultimo valor">
        <br>
        <input type="submit" value="Calcular" name="guardar">
    </form>
    <?php 
        if(isset($_POST['guardar'])){
            $vector = $_POST['num'];
            $acum = 0;

            foreach ($vector as $key => $value){
                $acum = $acum + $value; // aca se puede cambiar el simbolo y se puede usar para otras operaciones
            }
            print "<p>La suma de los elementos es: {$acum}</p>" ;
        }
    ?>
</body>
</html>