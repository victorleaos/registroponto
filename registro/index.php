<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registro de Ponto</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/undraw_time_management_re_tk5w.svg">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Registre seu ponto!</h1>
                    </div>
                </div>
                <div class="horarioatual">
                        <p id="horario"><?php echo date("d/m/Y H:i:s"); ?></p>
                        <script>
                            function atualizarHorario() {
                                var data = new Date().toLocaleString("pt-br", {
                                timeZone: "America/Sao_Paulo"
                                });
                                document.getElementById("horario").innerHTML = data.replace(", " , " - ");
                                }
                            setInterval(atualizarHorario, 1000);
                        </script>
                        <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>
                    </div>
                
                <div class="register-button">
                    <button><a href="registrar_ponto.php">Registrar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>