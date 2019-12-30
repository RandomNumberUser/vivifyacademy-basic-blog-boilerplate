<header>

  <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
             <?php // var_dump($_SERVER["PHP_SELF"]);  ?>  <!-- check url that you get -->
            <a class="nav-link <?php if($_SERVER["PHP_SELF"]=='/vivifyacademy-basic-blog-boilerplate/index.php'){echo 'active';}?>"  href="index.php">Home</a>
            <a class="nav-link <?php if($_SERVER["PHP_SELF"]=='/vivifyacademy-basic-blog-boilerplate/create-post.php'){echo 'active';}?>" href="create-post.php">Create New Post</a>
            <a class="nav-link <?php if($_SERVER["PHP_SELF"]=='/vivifyacademy-basic-blog-boilerplate/posts.php'){echo 'active';}?>" href="posts.php">Posts</a>
        
            </nav>
        </div>
    </div>

    <!-- <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-link active" href="index.php">Home</a>
                <a class="nav-link" href="create-post.php">Create New Post</a>
                <a class="nav-link" href="posts.php">Posts</a>
                <a class="nav-link" href="#">New hires</a>
                <a class="nav-link" href="#">About</a>
            </nav>
        </div>
    </div> -->

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
    </div>
</header>