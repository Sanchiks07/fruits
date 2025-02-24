<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Izveido bloga ierakstu</h1>

    <p>
        Kā tu šodien jūties?<br>
        Par ko tu domā?<br>
        Kāds ir šodienas "daily meme"?<br>
        Kādu jaunu faktu uzzināji?
    </p>

    <form method="POST">
        <label><input class="ieraksts" name="name" value="<?= $_POST['name'] ?? "" ?>" placeholder="Izveidot augli.." ></input></label>
        <br><button class="search_save">Saglabāt</button>

        <?php if(isset($errors["name"])) { ?>
            <p class="error"><?= $errors["name"] ?></p>
        <?php } ?>
    </form>
</div>

<?php require "views/components/footer.php" ?>