<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Obrigado</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {

            $("#voltar").click(function(){
                window.location.href = "index.php"
            });

        });
        setInterval(function(){ window.location.href = "index.php" }, 4000);
    </script>
</head>

<body>

    <div class="container">

        <div class="logo">
            <img src="./img/logo.svg" alt="Compre & Retire" class="logo-svg">
        </div>

        <div class="content">


            <div class="input-group medium">
                <div class="input-group">
                    <p class="text bold">Olá,</p>

                    <p class="text bold">Uhu! seu pedido já foi separado</p>

                    <p class="text bold">Espera só um pouquinho que um atendente já vai trazer o seu pedido para você</p>

                    <button class="btn-primary" id="voltar">Voltar</button>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
