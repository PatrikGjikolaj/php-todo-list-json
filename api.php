<?php

header('Content-Type: application/json');

$toDo = file_get_contents("dati.json");

$todoListDati = json_decode($toDo, true);


if( isset($_POST['newTask']) ) {

    $taskName = $_POST["newTask"];

    $newTaskObj = array (
        'name' => $taskName,
        'status' => false
    );

    $todoListDati[] = $newTaskObj;
    file_put_contents("dati.json", json_encode($todoListDati) );

} else if( isset($_POST['deleteAll']) ) {

    $todoListDati = [];
    file_put_contents("dati.json", json_encode($todoListDati) );

} else if( isset($_POST['deleteIndex'] )) {

    $indice = $_POST['deleteIndex'];
    array_splice($todoListDati,$indice,1);
    file_put_contents("dati.json", json_encode($todoListDati) );

}

$toDo = json_encode($todoListDati);

echo $toDo;

?>