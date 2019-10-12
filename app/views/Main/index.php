<h1>Hello, World!</h1>

<?= $name; ?><br>
<?= $field; ?><br>
<?= debug($names); ?>
<?php foreach($posts as $post): ?>

    <h3><?= $post['title']; ?></h3>
<?php endforeach; ?>
