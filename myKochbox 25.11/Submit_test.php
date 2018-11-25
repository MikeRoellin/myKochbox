<?php
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $input = $_POST['inputText']; //get input text
  $message = "Success! You entered: ".$input;
}
?>

<html>
<body>
<p></p>
<form action="" method="post">

  <p></p>
  <input type="text" name="inputText"/>
  <input type="submit" name="SubmitButton"/>
</form>
<?php if(isset($input)){echo $message;}; ?>
</body>
</html>
