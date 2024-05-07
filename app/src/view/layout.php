<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="asset/styles/_reset.css">
    <link rel="stylesheet" href="asset/styles/_globalStyle.css">
    <?php echo '<link rel="stylesheet" href="asset/styles/' . $page . '.css">' ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <?php require_once 'src/view/components/navbar.php' ?>
    <header>
        <img src="asset/image/header.jpg" alt="header image" />
    </header>
    <main>
        <?php require_once 'src/view/pages/' . $page . '.php' ?>
    </main>
    <?php require_once 'src/view/components/footer.php' ?>
    <script src="asset/js/globalScript.js"></script>
</body>

</html>