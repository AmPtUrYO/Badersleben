<?php 
$title = 'Admin';
require_once '../includes/header.php';
?>

<div style="width: 200%">
<h4>Neuer Beitrag in der Rubrik <?php echo '"einfügen"' ?></h4>
<form action="" method="post" class="editForm" style="widht:100%">
    <input type="text" name="title" placeholder="Titel">
    <textarea name="text" rows="10" cols="30" placeholder="Text"></textarea>
    <span class="dragBox">
        Bilder hochladen (Drag and Drop oder auswählen)
        <input type="file" name="pictures" onchange="dragNdrop(event)" ondragover="drag()" ondrop="drop()">
    </span>
    <input type="date" name="date">
    <button type="submit" name="preview">Vorschau</button>
</form>
<?php 
require_once '../includes/footer.php';
?>