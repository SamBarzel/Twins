<?php session_start(); ?>
<?php include("template/cabecera.php"); ?>		
<?php include("admi/conexion/conexion.php"); ?>

<div id="header">
        <!-- ************  MENU  *************** -->
        <?php
        if(isset($_SESSION['rol'])){
            switch ($_SESSION['rol']) {
                case 'admin':
                    //include('php/menu_admin.php');
                    break;
                case "usuario":
                    //include('php/menu_gerente.php');; 
                    break;
            }
        }else
        ?>
    </div>
<!-- Inicio del section de login -->
<section >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="validacionU.php" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <a  href="#">
                    <img class="imglog footer-logo mb-2" src="img/logo.png" alt="">
                    </a>
                    <span class="h1 fw-bold mb-0">Bienvenido a Twins</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia sesión en tu cuenta</h5>

                  <div class="form-outline mb-4">
                    <input name="email" type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Correo Electronico</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="pass" type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Contraseña</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block fa fa-address-book-o" type="submit" value="Iniciar Sesion"> INICIAR SESION <i class="fa-regular fa-circle-user"></i> </button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes una Cuenta? <a href="registro.php"
                      style="color: #393f81;">Regístrese aquí</a></p>
                      <label class="checkbox-inline"><input type="checkbox" value=""> Acepta Terminos Y Condiciones </label>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>	
<!-- Fin del el section del login -->	

<?php include("template/pie.php"); ?>