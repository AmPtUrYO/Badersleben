<?php 
$title = 'Index';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<h1 class="text-center">Informationsportal Badersleben</h1>
<p>Aktueller Brief des Ortsbügermeisters <a href="http://badersleben.de/ob/Infoblattob.pdf">hier</a></p>
<h2 class="text-center">+++Neuigkeiten+++</h2>
<?php
$result = DB::run("SELECT content.content_id, content.title, sections.section_name FROM content INNER JOIN sections ON content.section_id=sections.section_id ORDER BY date DESC LIMIT 5");
 foreach($result as $row){?>
    <div class="card">
        <?php include 'card.php' ?>
    </div>
 <?php };?>

<?php 
require_once 'includes/footer.php';
?>
