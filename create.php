<?php
//send value in database comments table
include "templates/connect.php";
//$connection = mysqli_connect('localhost','root','vivify','blog');
if(mysqli_connect_errno($connection)){
    echo 'Faild conect!';
}

if (!empty($_POST)) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $date = $_POST['created_at'];


    $sql = "INSERT INTO posts (title,body,author,created_at) VALUES ('$title','$content','$author','$date')";
    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
header("Location: http://localhost/vivifyacademy-basic-blog-boilerplate/index.php ");

?>