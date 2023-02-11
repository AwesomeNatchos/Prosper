<?php

if(isset($_POST['sumbit'])){
    $username = $_POST['username'];
    $message = $_POST['message'];

    echo "<h1>welcome " . $username . "</h1>";
    echo "<br><br>";
    echo $message;

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
        <label for="name">User name</label>
        <input type="text" name="username" placeholder="Enter username" >
        <input type="password" name="password" placeholder="Password">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button type="sumbmit" name="sumbit">sumbmit</button>
    </form>
    
</body>
</html>