<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
  
<form action="simple.php" method= "get">
  Name: <input type="text" name="first_name">
  Age:  <input type="text" name="age">
  Email: <input type="text" name="email">
  <input type="submit">
</form>
  
<br>

<?php   $name = $_GET["first_name"];
        $age = $_GET['age'];
        $email = $_GET['email];
        echo "My name is $name !";
        echo "I'm $age years old";
        echo "and my email is $email ."
?>
  

</body>
</html>
