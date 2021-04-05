<?php 
$title = 'Index';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
$article = $connection->query("SELECT * FROM content WHERE content_id=" . $_GET['id'])->fetchObject();
?>


<h3 class="text-center"><?php echo $article->title ?></h3>
<p class="text-end fst-italic"><?php echo $article->section."\n" ?> </p>
<p><?php echo $article->text."\n" ?></p>
<p><?php echo $article->user_id . " " . $article->date ?></p>
<img src="https://placekitten.com/200/100" class="img-fluid">


<?php 
require_once 'includes/footer.php';
?>