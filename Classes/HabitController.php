<?php

class HabitController {
    private $command;
    
    public function __construct($command){
        $this -> command = $command;
        $this -> db = new Database();
    }

    # Run function, calls correct function based on current command
    public function run(){
        switch($this -> command){
            case "home":
                $this -> homepage();
                break;
            case "addGroup":
                $this -> addGroup();
                break;
            case "addGroupPHP":
                $this -> addGroupPHP();
                break;
            default:
                $this -> login();
        }
    }

    # Login Function
    private function login(){
        if (isset($_POST["Username"])){
            $data = $this->db->query("select * from hh_users where Username = ?;", "s", $_POST["Username"]);
            # Load Data, if Found Check Password
            if ($data === false){
                $errorMessage = "Error Looking for User";
            }  elseif(!empty($data)) {
                    if (password_verify($_POST["Password"], $data[0]["Password"])){
                        setcookie("Username", $data[0]["Username"], time() + 3600);
                        header("Location: ?command=home");
                    }else {
                        $errorMessage = "Wrong Password";
                    }
            } else {
                $insert = $this->db->query("insert into hh_users (Username, Password) values (?, ?);", "ss", $_POST["Username"], password_hash($_POST["Password"], PASSWORD_DEFAULT));
                if ($insert === false) {
                    $errorMessage = "Error Inserting New User";
                }else{
                    setcookie("Username", $_POST["Username"], time() + 3600);
                    header("Location: ?command=home");
                }
            }

        }
        include("templates/login.php");
    }

    # Add Group Function
    private function addGroup(){
        include ("templates/addGroup.php");
    }

    private function addGroupPHP(){
        $groupName = $_POST["GroupNameInput"];
        $db = new mysqli(Config::$db["host"], Config::$db["user"], Config::$db["pass"], Config::$db["database"]);
        $db->query("drop table if exists $groupName;");
        $db->query("create table $groupName (
            Members text,
            PointHistory text
			);"
		);
        $thisUser = $_COOKIE["Username"];
        $userGroups = $db->query("SELECT `MyGroups` FROM `hh_users` WHERE 'Username' is $thisUser");
        if ($userGroups === ""){
            $userGroups = $groupName;
        }else{
            $userGroups += ", " . $groupName;
        }
        $db->query("UPDATE `hh_users` SET `MyGroups`=$userGroups WHERE 'Username' is $thisUser");
        header("Location: ?command=home");
    }

    private function homepage(){
        include("templates/Homepage.php");
    }
}