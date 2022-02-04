<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add new student</h1>
    <form action="" method="POST">
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Email" name="email">
        <input type="date" placeholder="date" name="birthday">
        <input type="submit" value="save">
    </form>
</body>
</html>

<?php
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['birthday'])){
        include 'db.php';
        query("INSERT INTO students(name,email,birthday) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['birthday']."')");
    
        
        echo "
            <script>
            window.location.href = 'index.php';
            </script>
        ";
    }
?>