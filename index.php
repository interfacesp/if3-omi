<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Interface3 - Home</title>
</head>
<body>
        <header>

            <div class="style-logo">
                <a href="index.php">   
                    <img src="medias/images/logo-if3.png" alt="Logo Interface3">
                </a>
            </div>

        <?php
           include("nav.php");
        ?>
        </header>
    
        
        <?php

            include("Formation.php");
            include("FormationModel.php");

            if(isset($_GET["page"])){
                $maPage= $_GET["page"];

                switch ($maPage) {
                    case 'formation':
                        $model = new FormationModel();
                        $toutesFormations = $model->getAllTrainings(); 
                        include("formations.php");
                        break;

                    case 'recrutement':
                        include("recrutement.html");
                        break;

                    case 'sensibiliser':
                        include("sensibiliser.html");
                        break;
                    
                    case 'contact':
                        include("contact.html");
                        break;

                    default:
                        include("home.php");
                        break;
                }   


            }else {
                include("home.php");
            }
        ?>

        
        <footer>
            <div class="style-footer">
                <p>
                    Fait avec amour par OMI 14! 
                </p>
                <p>
                    L'informatique au Féminin
                </p>
                <p>
                    OMI 14 - 2022
                </p>
            </div>
     
        </footer>
</body>
</html>