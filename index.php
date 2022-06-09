<?php


include_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio - PHP AJAX DISCHI</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav></nav>
    <main>
        <div class="container">

            <div class="row">

                <!-- Single Card -->
                <div class="my-container text-center d-flex justify-content-evenly flex-row flex-wrap">
                    <?php foreach ($db as $card => $value) :?>
                        <div class="image">
                            <img src="<?php echo $value['poster'] ?>" alt="<?php echo $value['author'] ?>">
                        </div>
                        <div class="title">
                        <?php echo $value['title'] ?>
                            </div>
                        <div class="author">
                            <?php echo $value['author'] ?>
                        </div>
                        <div class="year">
                            <?php echo $value['year'] ?>
                        </div>
                    <?php endforeach;?>
                </div>
                <!-- /Single Card -->

            </div>

        </div>
    </main>

    <script src="db.js"></script>
</body>
</html>