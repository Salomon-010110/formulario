<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>
    
    <form action="formularios.php" method="$_POST">
        <?php

        /*
        $nombre=isset($_REQUEST['nombre'])? $_REQUEST['nombre']:"";
        $password=isset($_REQUEST['password'])? $_REQUEST['nombre']:"";
        $email=isset($_REQUEST['email'])? $_REQUEST['nombre']:"";
        */

        #verificacion de campos vacios
       
        $nombre= recogerdato('nombre');
        $password= recogerdato('password');
        $email= recogerdato('email');

        function recogerdato($dato){
            return (isset($_REQUEST[$dato]))? $_REQUEST[$dato]:"";
                    #(condición)?acción :acción 02
                    
        }
        $nombre= recogerdato('nombre');
        $password= recogerdato('password');
        $email= recogerdato('email');


        $error= FALSE; 

        if ($nombre == "") {
            $error= TRUE;
            echo "<p class=\"error\">No has introducido tu nombre.</p>\n";
        }



        ?>
        <p>Nombre</br>
            <input type="text" name="nombre" id="#">
        </p>
        <p>Password</br>
            <input type="password" name="password" id="#">
        </p>
        <p>Correo</br>
            <input type="email" name="email" id="#">
        </p>
        <input type="submit" name="enviar" id="#">
    </form>
</body>

</html>
