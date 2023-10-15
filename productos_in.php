<?php include("template/cabecera_in.php"); ?>	
<?php include("admi/conexion/conexion.php"); ?>	
<!-- Team Section -->
<section id="gtco-team" class="bg-white section-padding">
<div class="heading-section text-center">
                <span class="subheading">
                    Our
                </span>
                <h2>
                    Products
                </h2>
            </div>
    <div class="container">
        <div class="row">
           
            <!-- Comienza la divicion de las columnas  -->
            <?php 
            $result =select("productos","*"); 
            ?>
            <?php foreach($result as $productos) {?>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/<?php echo $productos['imagen']; ?>" height="250" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $productos['nombre']; ?></h4>
                        <h4 class="card-title"><?php echo $productos['precio']; ?></h4>
                        <div>
                        <a href="cuenta.php" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <?php } ?>
            <!-- Finde la divicionde las columnas -->
        </div>
    </div>
</section>
<!-- End of Team Section -->		
<?php include("template/pie_in.php"); ?>