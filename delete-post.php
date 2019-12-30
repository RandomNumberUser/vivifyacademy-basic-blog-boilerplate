<?php
       include "templates/connect.php"; 
     //  $com_id = (int) $_GET['post_id'];
      // var_dump($_POST);
    // $sql = "DELETE FROM posts WHERE id = $com_id";
        $sql = "DELETE FROM posts WHERE id = {$_POST['id']};";
       $statement = $connection->prepare($sql);
       $statement->execute();
    // $sql = "DELETE FROM comments WHERE post_id = $com_id";
        $sql = "DELETE FROM comments WHERE post_id = {$_POST['id']};";
       $statement = $connection->prepare($sql);
       $statement->execute();
       $statement->setFetchMode(PDO::FETCH_ASSOC);
       
       header("Location: http://localhost/vivifyacademy-basic-blog-boilerplate/index.php");
?>


<?php

// include "templates/connect.php";


// // sql to delete a record
// $sql = "DELETE FROM posts WHERE id = {$_POST['id']};"; 

//     if ($connection->query($sql) === TRUE) {
//         echo "Record deleted successfully";
//     } else {
//         echo "Error deleting record: " . $connection->error;
//     }

// $sql = "DELETE FROM comments WHERE post_id = {$_POST['id']};";

//     if ($connection->query($sql) === TRUE) {
//         echo "Record deleted successfully";
//     } else {
//         echo "Error deleting record: " . $connection->error;
//     }

// $connection->close();

?>

<?php

//     include "templates/connect.php";

// 	if(mysqli_connect_errno($connection)) {
// 		echo 'Faild conect!';
// 	}

// if (!empty($_POST)) {
//     //echo "test ";  var_dump($_POST['id']);
//     // $sql = "DELETE FROM posts WHERE id = {$_POST['id']};";
//     // $sql = "DELETE FROM comments WHERE post_id = {$_POST['id']};";
//     var_dump(1);
//     $a=1;
//     $sql = "DELETE FROM posts WHERE id = {$_POST['id']};";
//    // var_dump($sql);
// //    $statement = $connection->prepare($sql);
// //    $statement->execute();
// //    $statement->setFetchMode(PDO::FETCH_ASSOC);
   
// //    $posts = $statement->fetchAll();

//        $sql = "DELETE FROM comments WHERE post_id = {$_POST['id']};";
//        $statement = $connection->prepare($sql);
//        $statement->execute();   var_dump($statement);
//        $statement->setFetchMode(PDO::FETCH_ASSOC);
    
//        $posts = $statement->fetchAll();
//    ;


//     if ($connection->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $connection->error;
//     }
// }
// header("Location: http://localhost/vivifyacademy-basic-blog-boilerplate/index.php");

?>
