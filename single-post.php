<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="icon" type="image/png" href="images/images1.png"/>
<link href="styles/blog.css" rel="stylesheet">
<link rel="stylesheet" href="styles/styles.css">
<title>Blog</title>


<body>

<?php
include "templates/header.php"; ?>


<main role="main" class="container">

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <?php
                include "templates/connect.php";
                //get post with same id
               if (isset($_GET['post_id'])) { 
                   $post_id = $_GET['post_id'];
                $sql = "SELECT * FROM posts WHERE posts.id = $post_id";
               
                $statement = $connection->prepare($sql);

                $statement->execute();

                $statement->setFetchMode(PDO::FETCH_ASSOC);

                $singlePost = $statement->fetch();
               }
                ?>
                <h2 class="blog-post-title">
                    <a style="color: #b34848; text-decoration:hover: underline" href="#">
                        <?php if (isset($_GET['post_id'])) { echo($singlePost['title']); } ?>
                    </a>
                </h2>
                
                <p class="blog-post-meta">
                <?php
                    if (isset($_GET['post_id'])) {
                        echo($singlePost['created_at']); 
                    } 
                ?> by <a style="color: #b34848; text-decoration: none" href="#">
                            <?php 
                                if (isset($_GET['post_id'])) {
                                    echo($singlePost['author']);
                                }
                            ?>
                       </a>
                </p>

                <!-- comments -->

                <p><?php if (isset($_GET['post_id'])) {  echo($singlePost['body']); } ?></p>
                <?php include "comments.php"; ?>
                <?php
                //get comment with foreign key
                if (isset($_GET['post_id'])) {
                $com_id = $_GET['post_id'];
                $sql = "SELECT * FROM comments WHERE comments.post_id = " . $com_id;

                $com = $connection->prepare($sql);
                $com->execute();
                $com->setFetchMode(PDO::FETCH_ASSOC);
                $comments = $com->fetchAll();
                
                foreach ($comments as $comment) { ?>
                  
                  

                    <ul class="list" style="list-style-type: none;">
                        <hr>
                        <li class="li"><p><?php echo($comment['text']) ?></p></li>
                        <li class="li">
                            <h6 style="color: #b34848; "><i>Author by </i><?php echo($comment['author']) ?></h6>
                        </li>
                    </ul>

                    <form  id="delete-comment-form" method="POST" action="delete-comment.php">
                        <input  id="delete-comment" type="submit" value="Delete" class="btn btn-primary" >
                        <input type="hidden" name="id" value="<?php echo $comment['id']; ?>"/>
                        <input type="hidden" name="post_id" value="<?php echo $comment['post_id']; ?>"/>
                    </form>
                    
                  <?php var_dump((int)$comment['id']);  ?>
                  <?php // if (isset($_GET['id'])) { echo $a = (int) $comment['id']; }  ?>
                    
                <?php }} ?>

          




                <hr>
            </div><!-- /.blog-post -->
            
           

            <!-- delete post section -->
           
               <div>
                   
                    <form id="delete-post-form" method="POST" action="delete-post.php">
                        <input  id="delete-post" type="submit" value="Delete this post" class="btn btn-primary" >
                        <input type="hidden" name="id" value="<?php if (isset($_GET['post_id'])) { echo $a = (int) $com_id;  }  ?>" />
                        <!-- $post['id']  echo($post['id']) --> <!-- echo $post['id'] ; --> <?php var_dump($a); ?>  
                        <!-- $com_id = (int) $_GET['post_id']; --> <!-- $post_id = $_GET['post_id']; -->
                        <!-- value from string is converted to int with (int) and stored to $a -->
                        <!-- $a keep info about post_id  -->
                        <!-- from this form we sending data to server with method="POST" we will send $a  >>> 
                                    server carry value globaly and to delete-post.php >>> this method takes data from global variable 
                                             {$_POST['id']}; and pass it to sql id = -->
                    </form>
                </div>

            <!-- !delete post section -->

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
        </div><!-- /.row -->
        <?php include "templates/sidebar.php"; ?>
    </div><!-- /.blog-main -->
    <?php require "templates/footer.php" ?>
</main><!-- /.container -->

</body>
<script type="text/javascript" src="js/script.js"></script>

