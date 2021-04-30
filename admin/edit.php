<?php 
$title = 'Admin';
require_once '../includes/header.php';
?>

<div style="width: 200%">
<form action="" method="post" class="editForm">
    <input type="text" name="title" placeholder="Titel">
    <select name="section">        
        <option value=""></option>
        <option value="">Ortsbürgermeister</option>
        <option value="">Gemeinde Huy</option>
        <option value="">Wegekonzept Huy</option>
        <option value="">Grundschule</option>
        <option value="">Heimatverein</option>
        <option value="">Freiwillige Feuerwehr</option>
        <option value="">Männerchor</option>
        <option value="">Sportverein</option>
        <option value="">Pfadfinder</option>
        <option value="">Schützenverein</option>
        <option value="">Jagdgenossenschaft</option>
        <option value="">Kleintierzuchtverein</option>
        <option value="">Gewerbetreibende</option>
        <option value="">Partnergemeinde Laer</option>
        <option value="">Ärzte</option>
        <option value="">Evangelische Kirche</option>
        <option value="">Katholische Kirche</option>
    </select>
    <textarea name="text" rows="10" cols="30" placeholder="Text"></textarea>
    <input type="file" name="pictures">
    <input type="date" name="date">
    <button type="submit" name="preview">Vorschau</button>
</form>
<?php 
require_once '../includes/footer.php';
?>