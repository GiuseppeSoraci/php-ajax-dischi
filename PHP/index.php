<?php
require_once __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- Header -->
    <header>
        <section class="container">
            <img class="logo" src="./img/logo.png" alt="logo">
        </section>
    </header>

    <!-- Main -->
    <main class="main">
        <section class="container flex">

            <!-- Card -->
            <?php foreach ($database as $data) { ?>
                <div class="card flex">
                    <img src=<?php echo $data["poster"] ?> alt="poster">
                    <h3> <?php echo $data["title"]; ?></h3>
                    <p> <?php echo $data["author"]; ?></p>
                    <p> <?php echo $data["year"]; ?></p>
                    <p> <?php echo $data["genre"]; ?></p>
                </div>
            <?php } ?>

        </section>
    </main>

</body>

</html>