<?php 
$title = ucfirst($_GET['id']);
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
$result = DB::run("SELECT * FROM content INNER JOIN sections ON content.section_id=sections.section_id WHERE content.section_id='" . $_GET['id']."' ORDER BY date DESC");
$header = $result->fetchObject()->section_name;
?>


<h1 class="text-center text-capitalize"><?php echo $header; ?></h1>

<?php
 foreach($result as $row){?>
    <div class="card">
        <?php include 'card.php' ?>
    </div>
 <?php };?>

<?php 
require_once 'includes/footer.php';
?>