<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por POST</title>
</head>

<body>
    <form action="./server.php" method="post" enctype="multipart/form-data">
        <!--  <! -- Input Simple -- >
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> -->

        <! -- Arreglos -- >
        <label for="personas">Personas:</label>
        <input type="text" name="personas[]">
 

        <!-- <! -- Arreglo asociativos 
        <label>Personas:</label>
        <input type="text" name="persona[nombre]">
        <input type="email" name="persona[email]">
        <input type="number" name="persona[edad]">
        -->
        <!-- <! -- Checkbox 
        <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="Este lista 2 fue clickeado">
        <input type="checkbox" name="list3"> -->
     <!--    <! -- Radios 
        <label for="mexico">Mexico</label>
        <input type="radio" name="pais" value="Mexico">
        <label for="mexico">Colombia</label>
        <input type="radio" name="pais" value="Colombia">
        <label for="mexico">Peru</label>
        <input type="radio" name="pais" value="Peru"> -->
<!-- 
        <! -- Multiples archivos -- >
        <label for="archivo">Carga tus imaganes</label>
        <input type="file" multiple name="galeria[]"> -->




        <button type=" submit">Mandar formulario</button>

    </form>


</body>

</html>