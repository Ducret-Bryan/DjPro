<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="asset/styles/_reset.css">
    <link rel="stylesheet" href="asset/styles/_globalStyle.css">
</head>

<body>
    <?php require_once 'src/view/components/navbar.php' ?>
    <header>
        <img src="asset/image/header.jpg" alt="header image" />
    </header>
    <main>
        <?php echo 'Page_content' ?>
    </main>
    <?php require_once 'src/view/components/footer.php' ?>
    <script src="asset/js/globalScript.js"></script>
</body>

</html>