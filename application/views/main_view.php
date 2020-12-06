<h3>My profile</h3>
<div id="profile">
<p>
    <img id="avatar" src="/img/no_avatar.png">
    Name
    <br>
    Surname
    <h4>status</h4>
</p>
</div>

<?php
for ($i = 0; $i < 6; $i++) {
?>
    <img src="/img/no_image.png">
    <?php
    if ($i % 3 == 0) {
        echo '<br>';
    }
}
