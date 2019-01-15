<?php
include("validation.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
img{
    height: 50px;
    width: 50px;
    border-radius: 50%;
}
</style>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Date of Birth: <input type="date" name="date" value="<?php echo $age;?>">
  <span class="error">* <?php echo $ageErr;?></span>
  <br><br>
  Short Bio: <textarea name="shortBio" rows="5" cols="40"><?php echo $shortBio;?></textarea>
  <span class="error"><?php echo $shortBioErr;?></span>
  <br><br>
  Interest:
  <input type="radio" name="interest" <?php if (isset($interest) && $interest=="Movie") echo "checked";?> value="female">Movie
  <input type="radio" name="interest" <?php if (isset($interest) && $interest=="Game") echo "checked";?> value="male">Game
  <input type="radio" name="interest" <?php if (isset($interest) && $interest=="Party") echo "checked";?> value="other">Party
  <input type="radio" name="interest" <?php if (isset($interest) && $interest=="Eat") echo "checked";?> value="other">Eat  
  <span class="error">* <?php echo $interestErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>
<?php

include_once("profile.php");
?>
</body>
</html>