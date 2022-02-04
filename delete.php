<?php
    include 'db.php';
    query('DELETE FROM students WHERE id='.$_GET['id']);
    header('location:index.php');
