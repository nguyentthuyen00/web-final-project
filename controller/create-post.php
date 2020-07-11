<?php
	require_once('config.php');

	$db = new DataAccessHelper();
  	$db->connect();
    function add($NameExam,$Link,$IdSubject)
    {
    	global $db;
    $sql = "INSERT INTO exam(NameExam,Link,IdSubject) VALUES('$NameExam','$Link','$IdSubject')";
    $db->executeNonQuery($sql);
	}
?>