<?php
session_start();

if(!isset($_SESSION['submit'])){
    $_SESSION['submit'] = 10;
}
else{
    $_SESSION['submit'] = $_SESSION['submit']-1;
}

?>
<!DOCTYPE html>
<head>
    <title>Free Coupons</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action='process.php' method='POST' class="container">
    <h1>Welcome Customer</h1>
    <p>We're giving away free coupons</p>
    <p>as token of appreciation</p>
    <p>for first <?= $_SESSION['submit']; 
        if ($_SESSION['submit'] <= 0) {
            header('Location: sold.php');
        }
    ?> customer(s)</p>
    <h2>Kindly type your name:</h2>
    <input type="text" name="name" class="text">
    <input type="submit" value="Submit" class="submit">
</form>
</body>
</html>