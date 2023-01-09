<?php
spl_autoload_register(function ($classname){
    include "Classes/$classname.php";
});

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$db = new mysqli(Config::$db["host"], Config::$db["user"], Config::$db["pass"], Config::$db["database"]);

$db->query("drop table if exists HH_users;");
$db->query("create table HH_users (
			id int not null auto_increment,
			Username text not null,
			Password text not null,
			MyGroups text not null,
			primary key (id)
			);"
		);


		