<?php

include_once('../util/config.php');

if(!isset($_SESSION['nome']))
    header('Location: '.PATH.'index.php');



?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Compre & Retire</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>


        function sendMessage(){
            var data = $( '#form').serializeArray();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                data: { 'form':data },
                url: "<?php echo '../control/usuarioController.php'; ?>",
                success: function(result){
                    //ChargerBox( true );
                    window.location.href = "loading.php"

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert('a sessão expirou faça o login');
                    window.location.href = "../index.php"
                }
            });

            $('#texto').val('');
            $('#texto').focus();
            return false;
        }

        $( function() {
            $('#texto').focus();
            $("#button").click(function(e){
                e.preventDefault();
                sendMessage();
            });

        });

    </script>
</head>

<body>
<form method="post" id="form">
    <p style="font-size: 10px"><?php echo 'LOJA: '.$_SESSION['senha']; ?></p>
    <div class="container">

        <div class="logo">
            <img src="./img/logo.svg" alt="Compre & Retire" class="logo-svg">
        </div>

        <div class="content">

            <h2 class="title-content">Quer retirar seu pedido <br> com praticidade?</h2>

            <div class="input-group">

                <label class="text" for="cpf">digite o <b>nº do pedido</b> ou <b>CPF</b></label>
                <input type="hidden" name="action" value="2" />
                <input class="input"type="tel" name="texto" id="texto">

                <button class="btn-primary" id="button">Consultar</button>

            </div>

        </div>
    </div>
</form>
</body>

</html>
