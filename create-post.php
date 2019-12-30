<!doctype html>

<html lang="en">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="icon" type="image/png" href="images/images1.png"/>

 <link rel="stylesheet" type="text/css" href="styles/blog.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
	
<title>Blog</title>
</head>

<style>
    .contact {
        width: 100%;
        margin: 0 auto  ;
        background-color: #f9f9f9;
    }

    input[type=text]:hover {
        background-color: lightgoldenrodyellow;
        cursor: auto;
    }
    input[type=email]:hover {
        background-color: lightgoldenrodyellow;
    }

    textarea:hover {
        background-color: lightgoldenrodyellow;
        cursor: auto;
    }

    input[type=email]{
        width: 100%;
        padding: 12px;
        border: 1px solid #b34848;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
    }

    input[type=password]{
        width: 100%;
        padding: 12px;
        border: 1px solid #b34848;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
    }

    input[type=text]{
        width: 100%;
        padding: 12px;
        border: 1px solid #b34848;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
    }

    input[type=datetime-local]{
        width: 100%;
        padding: 12px;
        border: 1px solid #b34848;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
    }

    input[type=submit] {
        background-color: 	#b34800;
        width: 25%;
        float: right;
        color: white;
        padding: 12px 20px;
        border: none;
        margin-bottom: 6%;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #b34848;
    }

    textarea {
        width: 100%;
        height: 150px;
        padding: 12px;
        border: 1px solid #b34848;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        cursor: pointer;
        resize: none;
    }
</style>

<body>
<?php include "templates/header.php"; ?>    

<main role="main" class="container">  

<div class="row">

<div class="col-sm-8 blog-main">

    <div class="contact">
        <h2>Create post:</h2>
        <form action="create.php" method="POST">
            <label for="title">Title</label>
            <input type="text" id="title" name="title">

            <label for="content">Content</label>
            <textarea type="text" id="content" name="content"></textarea>

            <label for="author">Author</label>
            <input type="text" id="author" name="author">

            <label for="date">Created At</label>
            <input id="datetime" type="datetime-local" name="created_at">


            <input type="submit" name="submit" value="Add Data">
        </form>
    </div>

        </div><!-- /.blog-main -->

            <?php require "templates/sidebar.php" ?>
     <!-- sidebar -->

</div><!-- /.row -->

</main><!-- /.container -->
<?php require "templates/footer.php" ?>
</body>
 

</html>