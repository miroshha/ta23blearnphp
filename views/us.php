<?php
$posts = [
  ['title' => "U.S news 1", "published" => '26.09.2025', 'author' => "Miron", 'body' => "Some kind of news1"],
  ['title' => "U.S news 2", "published" => '27.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news2"],
  ['title' => "U.S news 3", "published" => '28.09.2025', 'author' => "Miron", 'body' => "Some kind of news3"],
  ['title' => "U.S news 4", "published" => '29.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news4"],
  ['title' => "U.S news 5", "published" => '30.09.2025', 'author' => "Miron", 'body' => "Some kind of news5"],
]
?>

<?php include __DIR__ . '/partials/header.php'; ?>

  <main class="container">
   
    <div class="row g-5">
      <div class="col-md-8">
        <?php include __DIR__ . '/partials/posts.php'; ?>
      </div>
      <div class="col-md-4">
        <?php include __DIR__ . '/partials/sidebar.php'; ?>
      </div>
    </div>
  </main>
<?php include __DIR__ . '/partials/footer.php'; ?>