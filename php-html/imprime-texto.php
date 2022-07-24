<?php
$usuarios = array(
    array(
        'nombre' => 'Juan',
        'apellido' => 'Perez',
        'edad' => '23'
    ),
    array(
        'nombre' => 'Pedro',
        'apellido' => 'Perez',
        'edad' => '25'
    ),
    array(
        'nombre' => 'Maria',
        'apellido' => 'Perez',
        'edad' => '27'
    )
);

$edad = 12;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas PHP</title>
</head>
<body>
    <?php echo "Esto es PHP desde HTML 🎈"; ?>

    <?= "<i>Esto es PHP desde HTML 🎈</i>" ?>
  

    <script>
        let users =JSON.parse('<?php echo json_encode($usuarios); ?>'); 
        console.log(users);
        let edad = <?= $edad ?>;
        console.log(edad);

    </script>


</body>
</html>