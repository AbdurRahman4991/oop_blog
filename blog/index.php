<?php include 'inc/header.php';?>	
<?php include 'inc/slider.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>

<?php 
    $db = new Database(); 
?>

<div class="contentsection contemplete clear">
    <div class="maincontent clear">
        <?php 
            $query =  "SELECT * FROM tbl_post";
            $post = $db->select($query);

            if ($post) {
                while ($result = $post->fetch_assoc()) {
        ?>
                    <div class="samepost clear">
                        <h2><a href=""><?php echo $result['title']; ?></a></h2>
                        <h4><?php echo $result['date']; ?>, By <a href="#"><?php echo $result['author']; ?></a></h4>
                        <a href="#"><img src="images/<?php echo $result['image']; ?>" alt="post image"/></a>
                        <p>
                            <?php echo $result['body']; ?>
                        </p>
                        <div class="readmore clear">
                            <a href="post.php?id=<?php echo $result['id']; ?>">Read More</a>
                        </div>
                    </div>
        <?php 
                }
            } else {
                echo "<p>No posts found.</p>";
            }
        ?>
    </div>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/footer.php'; ?>
