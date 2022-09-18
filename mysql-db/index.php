<?php
    //starta file
    require "__ini.php";
    //   
    $tasks = QueryBuilder::get('tasks');
    //
    QueryBuilder::delete('tasks','0','completed','>');
    //
    foreach ($tasks as $task) {
        # code...
        echo "{$task->description}" . "<br>";
    }
    