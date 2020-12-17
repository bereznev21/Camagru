<h3>My profile</h3>
<div id="profile">
<p>
    <img id="avatar" src="/public/img/no_avatar.png">
    Name
    <br>
    Surname
    <br>
    status
    <br>
</p>
</div>

<div id="gallery">
<?php
for ($i = 1; $i <= 6; $i++) {
?>
    <img id="gallery_image" src="/public/img/no_image.png">
    <?php
    if ($i % 3 == 0) {
        echo '<br>';
    }
}
?>
</div>

