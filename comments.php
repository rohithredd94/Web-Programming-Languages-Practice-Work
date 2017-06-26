<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
  $err = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $err = "This is a required field";
    } else {
  	 echo "Name: ".test_input($_POST["name"])."<br>";
    }
  	echo "Email: ".test_input($_POST["email"])."<br>";

    echo "Website: ".test_input($_POST["website"])."<br>";

    echo "Comments: ".test_input($_POST["comments"])."<br>";

    echo "Gender: ".test_input($_POST["gender"]);
	}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
