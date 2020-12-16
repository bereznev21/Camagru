<h3>My profile</h3>
<div id="profile">
<p>
    <img id="avatar" src="/img/no_avatar.png">
    Name
    Surname
    status
</p>
</div>

<div id="gallery">
<?php
for ($i = 1; $i <= 6; $i++) {
?>
    <img id="gallery_image" src="/img/no_image.png">
    <?php
    if ($i % 3 == 0) {
        echo '<br>';
    }
}
?>
</div>

