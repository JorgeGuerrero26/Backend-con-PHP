<?php




if (isset($_POST['personas'])) {
    if (empty($_POST['personas'])) {
        echo "No ingreso nada p";
    }else{
        var_dump(($_POST['personas']));
    }
    
}else{
    echo "No hay datos";
}



//var_dump($_POST['persona']);
/* var_dump($_POST['list1']);
var_dump($_POST['list2']);
var_dump($_POST['list3']); */
/* var_dump($_POST['pais']); */
//var_dump($_FILES['galeria']);





?>


