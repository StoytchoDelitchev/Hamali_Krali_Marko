<!DOCTYPE HTML>  
<html>
<head>
  <title>Записване на регистрацията</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<!--

Добре дошли <?php echo $_POST["Name"]; ?><p>
Вашият email address е: <?php echo $_POST["Email"]; ?><p>
Вашето съощение е: <?php echo $_POST["Message"]; ?><p>
-->
<script>
    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 </script>
<?php
// the message

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$email = "delitchev@gmail.com";
$subject = "Добре дошли " . $_POST["Name"] . "; е-мейл:" . $_POST["Email"];

// send email
mail($email,$subject,$_POST["Message"]);

?>
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>

<button onclick="setTimeout(myFunction, 3000)">Message sended. Please click button.</button>

<script>
function myFunction() {
    alert('Hello');
    Window.close();
}
</script>

 <script> 
 <!--
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
}
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
-->
function leave() {
  var myWindow = window.open("", "_self");
  myWindow.document.write("");
  setTimeout (function() {myWindow.close();},1000);
}
<a href="#" onclick="javascript:window.close();opener.window.focus();" >Close Window</a>
leave();
 <!--  --> window.close();
  
  </script>
</body>
</html>
