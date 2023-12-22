<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $address = $_POST['address'];
    echo $name;
    echo '<br/>';
    echo $surname;
    echo '<br/>';
    echo $phone;
    echo '<br/>';
    echo $password;
    echo '<br/>';
    echo $repassword;
    echo '<br/>';
    echo $address;
    ?>
</body>
</html>