<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Rediģē savu ierakstu</h1>

    <form method="POST">
        <label>
            <input type="hidden" name="id" value="<?= $post["id"] ?>" />
        </label>

        <label>
            <input class="ieraksts" name="name"><?= $fruit["name"] ?? "" ?></input>
            <br><button type="submit">Saglabāt</button>
        </label>

        <?php if(isset($errors["name"])) { ?>
            <p class="error"><?= $errors["name"] ?></p>
        <?php } ?>
        
    </form>
</div>
    
<?php require "views/components/footer.php" ?>