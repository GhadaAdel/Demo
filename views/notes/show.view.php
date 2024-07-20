<?php require "views/partials/header.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/Demo/notes" class="text-blue-500 underline">Go Home ...</a>
    </p>
      <p> <?= $note['body'] ?> </p>
  </div>
</main>

<?php require "views/partials/footer.php" ?>
