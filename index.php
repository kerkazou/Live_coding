<?php
    require('db.php');
    
    $result=query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students list<a href="add.php" style="float: right; font-size: 18px;">Add new student</a>
</h1>
    <table width="100%" style="text-align: center;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Options</th>
            </tr>

        </thead>
        <tbody>
            <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                        while($row = $result->fetch_assoc()){
                            echo '<tr>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['birthday'].'</td>
                                <td>
                                    <a href="edit.php?id='.$row['id'].'">Edit</a>
                                    <a href="delete.php?id='.$row['id'].'">Delete</a>
                                </td>
                            </tr>';

                        }
                    } else {
                         echo "0 results";
                    }
            ?>
        </tbody>
    </table>
    <form action="import.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" name="submit" value="import student">
    </form>
</body>
</html>