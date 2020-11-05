<?php
  session_start();

  if(isset($_GET["cerrar_session"]) and $_GET["cerrar_session"]==true){
    session_destroy();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IpsCecep | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Recursos/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
 
  <!-- Ionicons -->
  <link rel="stylesheet" href="Recursos/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Recursos/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Recursos/css/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- 
      Este codigo CSS se pondra en el login.php temporlmente mientras se hacen pruebas 
      Despues se usara un archivo externo CSS para la organizacion del codigo de forma limpia 
  -->
  <!-- Nota: El codigo se hizo aqui porque el enlace CSS con styleIndex.css no resultaba... -->

<style>
*{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
}

section{
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
}

section .imgBx{
    position: relative;
    width: 50%;
    height: 100vh;
}

section .imgBx::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(225deg, #3498db, #1abc9c);
    z-index: 2;
    mix-blend-mode: screen;
}

section .imgBx img.fondo{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

section .contentBx{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    height: 100vh;
}

section .contentBx .formBx{
    width: 50%;
} 

section .contentBx .formBx h2{
    color: #607d8b;
    font-weight: 600;
    font-size: 1.5em;
    text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #3498db;
    display: inline-block;
    letter-spacing: 1px;
}

section .contentBx .formBx .inputBx{
    margin-bottom: 20px;
}

section .contentBx .formBx .inputBx span{
    font-size: 16px;
    margin-bottom: 5px;
    display: inline-block;
    color: #607d8b;
    font-weight: 300;
    font-size: 16px;
    letter-spacing: 1px;
}

section .contentBx .formBx .inputBx input,
section .contentBx .formBx .inputBx button{
    width: 100%;
    padding: 10px 20px;
    outline: none;
    font-weight: 400;
    border: 1px solid #607d8b;
    font-size: 16px;
    letter-spacing: 1px;
    color: #607d8b;
    background: transparent;
    border-radius: 30px;
}

section .contentBx .formBx .inputBx button[type="submit"]{
    background: #3498db;
    color: #fff;
    outline: none;
    border: none;
    font-weight: 600;
    cursor: pointer;
}

section .contentBx .formBx .inputBx button[type="submit"]:hover{
    background: #2980b9;
}

section .contentBx .formBx .remember{
    margin-bottom: 10px;
    color: #607d8b;
    font-weight: 400;
    font-size: 14px;
}

section .contentBx .formBx .inputBx p{
    color: #607d8b;
}

section .contentBx .formBx .inputBx p a{
    color: #3498db;
}

section .contentBx .formBx .inputBx p a:hover{
  color: #2980b9;
}

section .contentBx .formBx h3{
    color: #607d8b;
    text-align: center;
    margin: 80px 0 10px;
    font-weight: 500;
}

section .contentBx .formBx .sci{
    display: flex;
    justify-content: center;
    align-items: center;
}

section .contentBx .formBx .sci li{
    list-style: none;
    font-size: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #607d8b;
    border-radius: 50%;
    margin: 0 15px;
    padding: 5px;
    cursor: pointer;
    transition: .3s linear;
}

section .contentBx .formBx .sci li:nth-child(1){
    padding: 5px 10px;
}

section .contentBx .formBx .sci li:hover{
    background: #3498db;
    transform: scale(1.1)
}

section .contentBx .formBx .sci li i{
    transform: scale(0.5);
    filter: invert(1);
}

@media (max-width: 768px){
    section .imgBx{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    section .contentBx{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        z-index: 1;
    }

    section .contentBx .formBx{
        width: 100%;
        padding: 40px 50px;
        background: rgb(255, 255, 255, 0.9);
        margin: 50px;
    }

    section .contentBx .formBx h3{
        color: #607d8b;
        text-align: center;
        margin: 30px 0 10px;
        font-weight: 500;
    }
}
  </style>


</head>
<body>

<section>
        <div class="imgBx">
            <img src="img/info-img (3).jpg" alt="" class="fondo">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Iniciar Sesion</h2>
                <form id="login-form" action="" method="post">
                    <div class="inputBx">
                        <span>Usuario</span>
                        <input type="text" id="usuario" name="usuario" class="form-control"
                        placeholder="Usuario">
                    </div>
                    <div class="inputBx">
                        <span>Contraseña</span>
                        <input type="password" id="password" name="password" class="form-control"
                        placeholder="Contraseña">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="" id="">Recordar</label>
                    </div>
                    <div class="inputBx">
                    <button type="submit" id="ingresar" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div>

                    <input type="hidden" value="login" name="accion">

                    <div class="inputBx">
                        <p>No tienes una cuenta?<a href="#">Regístrate</a></p>
                    </div>
                </form>
                <h3>Iniciar con redes sociales</h3>
                <ul class="sci">
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                </ul>
            </div>
        </div>
    </section>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
  
<script src="././Recursos/js/funcionesUsuario.js"></script>
<!-- Funciones de Lógica de neogcio -->
<script>
    $(document).ready(usuario);
</script>


</body>
</html>
