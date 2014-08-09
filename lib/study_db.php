<?php
class StudyDB {

    var $db;

    function __construct($host, $user, $passwd, $db) {
        $this->db = mysqli_connect($host, $user, $passwd, $db) or die('db connection failed');
    }

    function query($query) {
        $result = mysqli_query($this->db, $query);
        $value = Array();

        if($result == NULL) {
            echo "query Error.".$query." Error:".mysqli_error($this->db);
        }

        while($row = mysqli_fetch_assoc($result)){
            array_push($value, $row);
        }

        return $value;
    }
}

//$DB = "elvis";
//$HOST= "localhost";
//$USER = "root";
//$PASS = "php123!@#";
#$password = "#"
$db = new StudyDB("localhost", "root", "php123!@#", "elvis");
$value = $db->query("SELECT *FROM email_list");

//foreach($value AS $key => $val) {
//    foreach($val AS $field => $data) {
//        echo $field.": ".$data."<br/>";
//    }
//}
?>