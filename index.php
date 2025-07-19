<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/body.css">
    <link rel="stylesheet" href="CSS/dialog.css">
    <link rel="stylesheet" href="CSS/faq.css">
    <link rel="stylesheet" href="CSS/gallery.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/parallax.css">
    <link rel="stylesheet" href="CSS/program.css">
    <link rel="stylesheet" href="CSS/reservation.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <title>Kaszi vendégház</title>
</head>
<body>
    <?php include 'Main/header.php'; ?>
    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'main';
        $allowed_pages = ['Main/main', 'Page/gallery', 'Page/program'];
        
        if (in_array($page, $allowed_pages)) {
            include $page . '.php';
        } else {
            include 'Main/main.php';
        }
    ?>
    <?php include 'Main/footer.php'; ?>
</body>
</html>
