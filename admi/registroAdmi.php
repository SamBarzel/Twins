<?php include("template/cabecera_in.php");?>
<?php include("conexion/conexion.php");?>
<section id="gtco-team" class="bg-white section-padding text-center text-lg-start">
    <div class="container">
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Register now</h2>
                            <form id="form1" name="form1" action="validar_usu.php" method="POST" onsubmit="return validarForm(this);">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" name="nom" class="form-control"/>
                                            <label for="nom" class="form-label">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" name="apellidos" class="form-control">
                                            <label for="apellidos" class="form-label">Surnames</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Correo input-->
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" class="form-control"/>
                                    <label for="email" class="form-label">Email</label>
                                </div>
                                <!-- Contraseña input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="pass" class="form-control"/>
                                    <label for="pass" class="form-label">Password</label>
                                </div>
                                <!-- Radios Sexo -->
                                <div class=" d-flex"><p>Sex</p></div>
                                <div class="form-check d-flex">
                                 <input class="form-check-input" type="radio" name="mujer" id="flexRadioDefault1" value="mujer"/>
                                 <label class="form-check-label" for="flexRadioDefault1">
                                 Woman
                                 </label>
                                </div><br>
                                <div class="form-check d-flex">
                                <input class="form-check-input" type="radio" name="hombre"  id="flexRadioDefault2" value="hombre"/>
                                <label class="form-check-label" for="flexRadioDefault2">
                                Man
                                </label>
                                </div>
                                <div>
                                    <input name="rol" type="hidden" value="admi">
                                </div>
                                <br>
                                <!-- Boton de Enviar -->
                                <button type="submit" class="btn btn-primary btn-block mb-4" name="registrar">Check in</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <!-- Pon una iamgen de fondo para el  -->
        <img src="#" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
            </div>
        </div>
    </div>
</section>
<?php include("template/pie_in.php"); ?>