<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Izveido augli</h1>

    <form method="POST">
        <label><input class="ieraksts" name="name" value="<?= $_POST['name'] ?? "" ?>" placeholder="Izveidot augli.." ></input></label>
        <br><button class="search_save">Saglabāt</button>

        <?php if(isset($errors["name"])) { ?>
            <p class="error"><?= $errors["name"] ?></p>
        <?php } ?>
    </form>
</div>

<?php require "views/components/footer.php" ?>