<?php
    require 'banco.php';
    include "classesFunc/Site.php";
    $visitas = new classeVisitas();
    $visitas-> InserirVisitas();
    $visitas->Visitas();

$pagi = (['home'=>'Texas Grill', 'textop'=>'A<br>P<br>R<br>O<br>V<br>E<br>I<br>T<br>E<br>!!!']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php echo $pagi['home']; ?></title>

    <script>
        function acao(){
            alert('Funncionou!!!')
        }
    </script>
</head>
<body>


    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 prim">

                <div class="col-3">
                    <h1 class="tx">
                     <a href="index.php" class="link-home">
                        
                     </a>   
                    </h1>
                </div>    

                <div class="col-6">

                </div>

                <div class="col-3 login">
                    <a href="index.php?pg=Cardápio" class="link">Cardápio</a>
                    <a href="index.php?pg=Contato" class="link">Contato</a>
                    <a href="index.php?pg=Entrar" class="link">Entrar</a>
                </div>

                </div>
            </div>
        </div> 
    </header>

    <?php

        require "rotas/rotas.php"

    ?>
    

    

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>