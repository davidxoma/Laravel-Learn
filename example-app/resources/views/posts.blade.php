<!doctype html>
<title>MNy blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<?php foreach ( $posts as $post) : ?>
<article>
   <?= $post; ?>

</article>
<?php endoforeach; ?>


</body>
</html>
