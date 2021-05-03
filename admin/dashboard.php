<?php 
require_once '../includes/header.php';
$result = DB::run("SELECT * FROM users WHERE section_id='" . $_SESSION["section_id"]."' ORDER BY date DESC");
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



<h1 class="text-center text-capitalize">Hallo <?php echo $_SESSION["name"]; ?></h1>

<?php
 foreach($result as $row){?>
    <div class="card">
        <?php include '../card.php' ?>
    </div>
 <?php };?>

<?php 
require_once '../includes/footer.php';
?>