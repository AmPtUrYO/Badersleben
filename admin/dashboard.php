<?php 
require_once '../includes/header.php';
$result = DB::run("SELECT users.name, content.content_id, content.title, sections.section_name, sections.section_id FROM content INNER JOIN sections ON content.section_id=sections.section_id INNER JOIN users ON content.user_id=users.user_id WHERE users.user_id='" . $_SESSION["user_id"]."' ORDER BY date DESC");
$otherResult = $result->fetchObject();
$content = DB::run("SELECT * FROM content INNER JOIN sections ON content.section_id=sections.section_id WHERE content.section_id='" . $otherResult->section_id."' ORDER BY date DESC");
var_dump($otherResult);
?>
<div class="nav">
        <nav class="d-flex navbar navbar-expand-md bg-light navbar-light flex-column"> 
            <div class="nav nav-pills mb-auto flex-column navbar-nav" style="width: 100%">
                <div class="nav-item">
                    <a class="nav-link" href="index.php">Startseite</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">Neuer Beitrag</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">Beschreibung bearbeiten</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">Ausloggen</a>
                </div>
                
            </div>
        </nav>
    </div>
    <div class="body">



<h1 class="text-center text-capitalize">Hallo <?php echo $otherResult->name; ?></h1>

<?php
 foreach($content as $row){?>
    <div class="card">
    <i class="fas fa-pen"></i>
        <?php include '../card.php' ?>
    </div>
 <?php };?>

<?php 
require_once '../includes/footer.php';
?>