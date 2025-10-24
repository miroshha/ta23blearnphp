<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container my-2">
    <form action="/users/edit?id=<?= $user->id ?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="<?= $user->email ?>" name="email" type="text" class="form-control" id="email" placeholder="Email" require>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>