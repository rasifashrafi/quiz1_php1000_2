<?php
// define variables and set to empty values
$nameErr = $ageErr = $shortBioErr = $interestErr = "";
$name = $age = $shortBio  = $interest = "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "The field name is invalid. Please try again";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed"; 
      }
    }

    if (empty($_POST["date"])) {
        $ageErr = "Enter valid Date";
      } else {
        $age = test_input($_POST["date"]);
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$age)) {
            return true;
		}
      }


    if (empty($_POST["interest"])) {
        $interestErr = "Interest is required";
      } else {
        $interest = test_input($_POST["interest"]);
      }


      if (empty($_POST["shortBio"])) {
        $shortBio = "Your bio is important";
      } else {
        $shortBio = test_input($_POST["shortBio"]);
      }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

