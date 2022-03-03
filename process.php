<!DOCTYPE html>
<head>
    <title>Free Coupons</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Welcome <?=ucfirst($_POST['name']);?>!</h1>
    <p>We're giving away free coupons</p>
    <p>as token of appreciation</p>
    
    <div class="container-1">
        <p class="discount">50% Discount</p>
        <h1><?= random_int(1111111,9999999); ?></h1>
        <input type="button" value="Reset Count" class="reset">
        <a href="index.php">
            <input type="button" value="Claim Again" class="claim">
        </a>
    </div>
</div>
</body>
</html>