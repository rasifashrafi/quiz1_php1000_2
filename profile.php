
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Your Profile</h1>
<?php
function displayRandomPhotoArea() {
    $photoAreas = array("https://images.pexels.com/photos/207962/pexels-photo-207962.jpeg?cs=srgb&dl=artistic-blossom-bright-207962.jpg&fm=jpg","https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg","https://cdn.pixabay.com/photo/2016/06/18/17/42/image-1465348_960_720.jpg");

    $randomNumber = rand(0, (count($photoAreas) - 1));

    echo '<img src="' . $photoAreas[$randomNumber] . '">';
}

// Display a random image here
displayRandomPhotoArea();
?>
Name: <?php echo $_POST["name"]; ?><br>
Your date of birth: <?php echo $_POST["date"]; ?><br>
Age:
<?php
function birthday($birthday) {
    $age = date_create($birthday)->diff(date_create('today'))->y;
    
    return $age;
}
echo birthday($_POST['date']); 
?>
<br>
short biography: <?php echo $_POST["shortBio"]; ?><br>

<?php
    $date = $_POST['date'];
    $name = $_POST['name'];
    $dob = date('d-m',strtotime($date));
    $today = date('d-m');
    if($dob == $today)
    {
       echo "<p>Happy Birthday $name!</p>\n";
    } else 
    {
       echo "";
    }
?>

</body>
</html>