<?php
    $alert = "";
    if(!empty($_POST))
    {
        if(empty($_POST['usuario']) || empty($_POST['clave']))
        {
            $alert = "ingresar usuario y clave ";
        }else{

            //require_once "../conexion.php";
            $db_host ="localhost";
	        $db_user = "root";
	        $db_pass = "";
	        $db_name = "base_ips";

            $conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

            $user = $_POST['usuario'];
            $pass = $_POST['clave'];
            
            $query = mysqli_query($conexion, "SELECT * FROM tb_usuarios WHERE nom_usuario = '$user' AND clave = '$pass'");
            $result = mysqli_num_rows($query);

            if($result > 0 )
            {
                $data = mysqli_fetch_array($query);
                session_start();
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['id_usuario'];
                $_SESSION['nombre'] = $data['nom_usuario'];
                $_SESSION['clave'] = $data['clave'];

                header('location : inicio.php');


            }else
            {
                $alert = "el usuario o la clave son incorrectos  ";
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../IPS_CECEP/css/style.css">
    <title>PAGINA PRINCIPAL IPS CECEP</title>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 formulario">
                <form action="" method ="post">
                    <div class="form-group text-center">
                        <h1 class="text-light ">Iniciar sesion</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control " placeholder="ingrese el usuario" name = "usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" class="form-control " placeholder="ingrese la contraseña" name ="clave ">
                        <div class="alert"> <?php echo isset($alert)? $alert : '' ;  ?> </div>
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="submit" class="btn btn-blcok ingresar" value="Ingresar " >
                    </div>
                </form>
            </div>
        </div>
    </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>