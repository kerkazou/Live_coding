<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include('db.php');
    if (isset($_GET['id'])) {
        $result=query('SELECT * FROM students WHERE id='.$_GET['id']);
        $student_edit = $result->fetch_assoc();
    }
?>
<body>
<h1>Edit student</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $student_edit['id'] ; ?>">
        <input type="text" placeholder="Name" name="name" value="<?php echo $student_edit['name'] ; ?>">
        <input type="text" placeholder="Email" name="email" value="<?php echo $student_edit['email'] ; ?>">
        <input type="date" placeholder="date" name="birthday" value="<?php echo $student_edit['birthday'] ; ?>">
        <input type="submit" value="save">
    </form>
</body>
</html>

<?php
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['birthday'])){

        query('UPDATE students SET name="'.$_POST['name'].'" , email="'.$_POST['email'].'" , birthday="'.$_POST['birthday'].'" WHERE id='.$_POST['id']);
        
        echo "
            <script>
            window.location.href = 'index.php';
            </script>
        ";
    }
?>