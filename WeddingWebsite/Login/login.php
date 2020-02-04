//Add <?php require_once('login.php'); ?> to top of HTML page

<?php require_once('protect.php'); ?>

<?php
function showForm($error=""){
?>

<!DOCTYPE html>
<html>
<title>Justin & Liz</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href = "eboard/swe_gear.jpg" type = "image/icon" rel = "shortcut icon" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #000000;
    line-height: 1.8;
    scroll-behavior: smooth;
}

@font-face {
  font-family: "charger-regular";
  src: url("Charger-Regular.otf")
}

h2 {
  font-size: 100px;
}

/* If the screen size is 601px wide or more, set the font-size of <div> to 80px */
@media screen and (min-width: 601px) {
  .sectionTitle {
    font-size: 100px;
  }
}

/* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
  .sectionTitle {
    font-size: 75px;
  }
}

/* Create a Parallax Effect */
.bgimg-1{
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('picture1.JPG');
    min-height: 100%;
}

.main-color{
  color:#000000!important;
  background-color:#FFFFFF!important;
}

.main-hover-color:hover{
  color: #FFFFFF!important;
  background-color: #000000!important;
}


</style>

<body>

	<div class="bgimg-1 w3-display-container w3-opacity-min w3-center">
		<div class="w3-display-middle" style="white-space:nowrap;">
      <h2 class="w3-center w3-animate-opacity sectionTitle w3-hide-small" style="font-family:charger-regular; margin-bottom:-50px; margin-top:-40px; color: white; text-shadow: 2px 2px black;">Access the Wedding Details</h2>
      <?php echo $error; ?>
			<form action="WeddingWebsite.php" method="post" name="pwd">
        <h3 style="color: white; text-shadow: 2px 2px black;">Enter the Code</h3>
        <input type="password" name="passwd" maxlength="8" required="required" autofocus="autofocus">
        <br>
        <button type="submit" name="submit_pwd" value="Login" class="w3-button main-color main-hover-color" style="margin-top: 10px; box-shadow: 2px 2px black;">Join In!</button>
      </form>
</body>

<?php   
}
?>

</html>