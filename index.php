<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funcion Mail</title>
        <link rel="stylesheet" href="includes/css/estilos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="cabecera">
                <img src="includes/img/tech.jpg"/>
            </div>
            <div class="cuerpo">
                <br>
                <h1>Datos de correo</h1><br>
                <form action="datos.php" method="POST" enctype="multipart/from-data" class="formulario">
                    <label for="destino">
                        Destinatario:
                        <input type="email" name="destino" class="form-control"/>
                    </label>
                    <br>
                    <label for="asunto">
                        Asunto:
                        <input type="text" name="asunto" class="form-control"/>
                    </label>
                    <br>
                    <label for="mensaje">
                        Mensaje:
                        <textarea name="mensaje" class="form-control"></textarea>
                    </label>
                    <br>
                    <input type="submit" class="btn-success" value="Enviar"/>                        
                </form>
            </div>
        </div>
        <footer>
            <hr/>
            &copy csrDeveloper <?php echo date ('Y');?>
        </footer>

        
    </body>
</html>
