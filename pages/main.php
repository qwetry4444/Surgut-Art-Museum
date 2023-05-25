<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/auth_style.css">
    <link rel="stylesheet" href="../css/kingal_style.css">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/spain_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <link rel="stylesheet" href="../css/header_style.css">

    <title>Сургутский художественный музей</title>
</head>
<body>
    <?php
    require('header.php');
    ?>

    <?php
        if(!isset($_GET['page']))
            require("home.php");
        else
        {
            switch($_GET['page'])
            {
                case 'home':
                    require('home.php');
                    break;
            
                case 'kingal':
                    require('kingal.php');
                    break;
                
                case 'spain':
                    require('spain.php');
                    break;
                    
                case 'login':
                    require('login_page.php');
                    break;

                case 'register':
                    require('register_page.php');
            }
        }
    ?>

    <?php
    require('footer.php');
    ?>
</body>
</html>