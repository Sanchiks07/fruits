<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

    <div class="container">
        <h1>Augļi</h1>

        <form>
            <label>
            Nosaukums satur: 
            <input name="search_query" value="<?= $_GET["search_query"] ?? "" ?>" placeholder="Atlasīt.." />
            </label>
            
            <button class="search_save">Atlasīt</button>
        </form>

        <?php if (count($fruits) == 0) { ?>
            <p>Netika atrasts neviens ieraksts</p>
        <?php } ?>

        <ol>
            <?php foreach ($fruits as $fruit) { ?>
                <li><a href="show?id=<?= $fruit["id"] ?>"> <?= htmlspecialchars($fruit["name"]) ?> </a></li>
            <?php } ?>
        </ol>
    </div>
<?php require "views/components/footer.php" ?>