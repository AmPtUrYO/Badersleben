<?php 
$title = 'Index';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<h1 class="text-center">Informationsportal Badersleben</h1>
<p>Aktueller Brief des Ortsbügermeisters <a href="http://badersleben.de/ob/Infoblattob.pdf">hier</a></p>
<h2 class="text-center">+++Neuigkeiten+++</h2>
<?php
 foreach($result as $row){?>
    <div class="card">
        <?php include 'card.php' ?>
    </div>
 <?php };?>

<?php 
require_once 'includes/footer.php';
?>