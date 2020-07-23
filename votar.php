<?php


/* De acordo com a documentação do PHP, deve-se usar FILTER_INPUT ao acessar variaveis super globais */
$escolhido = filter_input(INPUT_GET, 'minha_escolha', FILTER_SANITIZE_SPECIAL_CHARS);
$correto =  filter_input(INPUT_GET, 'correto', FILTER_SANITIZE_SPECIAL_CHARS);


/* Nos ifs, usaremos ucfirst para por para "UpperCase" a primeira letra, visto que o valor lá não é o mesmo que aqui, o inverso também seria válido */
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Resultado!</title>

        <style> 
            html {
                overflow: hidden !important;
            }
        </style>
  </head>
    <body>
        <div class="container-fluid  p-4 pb-2" style=" background: <?=ucfirst($escolhido) == $correto ? "lightgreen": "darkred"?>">
            <div class="row d-flex align-items-center justify-content-center vh-100" >
            <div class="col-lg-6 my-auto">
            <?php
                if(ucfirst($escolhido) === $correto) {
                 ?> 
                    <div class="card">
                        <div class="card-header text-center">
                        <h1> 🥳  </h1>
                          </div>
                          <div class="card-body">
                        <h3 class="display text-center mb-2">Você acertou, parabéns!</h3>
                        <div class="card text-center">
                            <div class="card-body">Você escolheu: <strong><?=$escolhido?></strong>. A opção correta é: <strong><?=$correto?></strong>. </div>
                        </div> 
                        </div>
                        <div class="card-footer">
                        <a href="/"> Clique aqui para Jogar novamente </a>
                        </div>
                    </div>
                 <?php   
                } else { 
                    ?> 
                    <div class="card">
                        <div class="card-header text-center">
                        <h1> 😢  </h1>
                          </div>
                          <div class="card-body">
                        <h3 class="display text-center mb-2">Errou feio, errou rude!</h3>
                        <div class="card text-center">
                            <div class="card-body">Você escolheu:<strong> <?=$escolhido?></strong>. A opção correta é: <strong><?=$correto?></strong>. </div>
                        </div> 
                        </div>
                        <div class="card-footer">
                        <a href="/"> Clique aqui para Jogar novamente </a>
                        </div>
                    </div>

                    <?php
                }
            ?> 
            </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
