<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php require_once("../Main/mainhead.php") ?>
    <title>Kondomatik - Login</title>

</head>

<body class="h-100">
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <!-- <a href="" class="logo float-left">
                <img src="../../public/img/logo.png" height="70" alt="Porto Admin" />
            </a> -->

          
            <h3 class="m-b-10">Sistema de Administracion de Condominios</h3>

            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-end">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i>Iniciar Sesion</h2>
                </div>
                <div class="card-body">
                    <form id="loginform" method="post">
                        <div class="form-group mb-3">
                            <label class="mb-1 text-black">Usuario</label>
                            <div class="input-group">
                                <i class="prefix-icon anticon anticon-user"></i>
                                <input type="text" class="form-control" id="usuario" placeholder="Usuario" autocomplete="off">
                                <span class="input-group-text">
                                    <i class="bx bx-user text-4"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="clearfix">
                                <label class="font-weight-semibold" for="password">Contraseña</label>

                                <!-- <a href="pages-recover-password.html" class="float-end">Lost Password?</a> -->
                            </div>
                            <div class="input-group">
                                <i class="prefix-icon anticon anticon-lock"></i>
                                <input type="password" class="form-control" id="clave" placeholder="Contraseña" autocomplete="off">
                                <span class="input-group-text">
                                    <i class="bx bx-lock text-4"></i>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <!-- <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="rememberme" type="checkbox" />
                                    <label for="RememberMe">Remember Me</label>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <div class="d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn btn-primary" id="btningresar">Ingresar</button>
                                </div>
                            </div>
                        </div>

                        <!-- <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                            <span>or</span>
                        </span>

                        <div class="mb-1 text-center">
                            <a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-twitter mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
                        </div>

                        <p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a></p> -->

                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2023. Derechos Reservados.</p>
        </div>
    </section>
    <!-- end: page -->

    <?php require_once("../Main/mainjs.php") ?>
    <script src="./login.js"></script>
</body>

</html>