<?php 
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
$article = DB::run("SELECT content.content_id, content.title, users.name, sections.section_name, content.text, content.date, content.image_url FROM content INNER JOIN sections ON content.section_id=sections.section_id INNER JOIN users ON content.user_id=users.user_id WHERE content_id=" . $_GET['id'])->fetchObject();
//$title = $article->section;
$date = date_create($article->date);
?>


<h3 class="text-center"><?php echo $article->title ?></h3>
<p class="text-end fst-italic"><?php echo $article->section_name."\n" ?> </p>
<p><?php echo $article->text."\n" ?></p>
<p><?php echo $article->name . " " . date_format($date, 'd.m.Y') ?></p>
<img src="https://placekitten.com/200/100" class="img-fluid">

<div class="gallery-container">
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/bridge.jpg">
                    <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/bridge.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/park.jpg">
                    <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/park.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/tunnel.jpg">
                    <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/tunnel.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg">
                    <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg">
                    <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg" alt="Coast">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg">
                    <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg" alt="Rails">
                </a>
            </div>

        </div>

    </div>

</div>

<?php 
require_once 'includes/footer.php';
?>