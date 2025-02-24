<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1><?= htmlspecialchars($fruit["name"]) ?></h1>

    <button class="edit" onclick="location.href='edit?id=<?= $fruit['id'] ?>'">Rediģēt</button>

    <form method="POST" action="/delete">
        <input name="id" value="<?= $fruit["id"] ?>" type="hidden" />
        <button class="delete">Dzēst</button>
    </form>
</div>
    
<?php require "views/components/footer.php" ?>