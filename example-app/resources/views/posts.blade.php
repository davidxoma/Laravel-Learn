<!doctype html>
<title>MNy blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<?php foreach ( $posts as $post) : ?>
<article>
    <h1>
        <a href="posts/<?= $post->slug; ?>">View</a>
        <?= $post->title; ?>
    </h1>
    <br>
    <div>
        <?= $post->excerpt; ?>
    </div>
    <br>
    <?= $post->date; ?>

</article>
<?php endforeach; ?>


</body>
</html>
