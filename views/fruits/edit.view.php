<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Rediģē savu augli</h1>

    <form method="POST">
        <label>
            <input type="hidden" name="id" value="<?= $fruit["id"] ?>" />
        </label>

        <label>
            <input class="ieraksts" name="name" value="<?= $fruit["name"] ?? "" ?>" />
            <br><button type="submit">Saglabāt</button>
        </label>

        <?php if(isset($errors["name"])) { ?>
            <p class="error"><?= $errors["name"] ?></p>
        <?php } ?>
        
    </form>
</div>
    
<?php require "views/components/footer.php" ?>