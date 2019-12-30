<?php require "connect.php" ?>

            <!-- PHP -->

<?php
include "connect.php";
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$statement = $connection->prepare($sql);
// izvrsavamo upit
$statement->execute();
// zelimo da se rezultat vrati kao asocijativni niz.
// ukoliko izostavimo ovu liniju, vratice nam se obican, numerisan niz
$statement->setFetchMode(PDO::FETCH_ASSOC);
// punimo promenjivu sa rezultatom upita
$posts = $statement->fetchAll();
// koristite var_dump kada god treba da proverite sadrzaj neke promenjive
// echo '<pre>';
//var_dump($posts);
// echo '</pre>';*/
foreach ($posts as $post) {
    ?>

    <div class="blog-post">

        <h2 class="blog-post-title">
            <a style="color: #b34848" href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo($post['title']) ?></a>
        </h2>

        <p class="blog-post-meta"><?php echo($post['created_at']) ?> by 
            <a style="color: #b34848; text-decoration: none" href="#"><?php echo($post['author']) ?></a>
        </p>

        <p><?php echo($post['body']) ?></p>

    </div><!-- /.blog-post -->


    <?php
}
?>