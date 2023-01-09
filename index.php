<?php
spl_autoload_register(function ($classname){
    include "Classes/$classname.php";
});

# Sets default command to login, or if a command is given, sets it to be that.
$command = "login";
if (isset($_GET["command"])){
    $command = $_GET["command"];
}

# Runs Controller
$habits = new HabitController($command);
$habits -> run();