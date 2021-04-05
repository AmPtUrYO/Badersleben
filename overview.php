<?php 
$title = ucfirst($_GET['id']);
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
$result = $connection->query("SELECT * FROM content WHERE section='" . $_GET['id']."' ORDER BY date DESC");
?>


<h1 class="text-center text-capitalize"><?php echo $_GET['id']; ?></h1>

<?php
 foreach($result as $row){?>
    <div class="card">
        <?php include 'card.php' ?>
    </div>
 <?php };?>

<?php 
require_once 'includes/footer.php';
?>