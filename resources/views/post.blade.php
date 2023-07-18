<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="app.css">
<body>
    <article>
      <h1><?= $post->title; ?></h1>
    </article>
    <div>
      <?= $post->body; ?>
    </div>
    <a href="/">Go Back</a>
</body>