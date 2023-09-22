<?php include('cabecera.php'); ?>
<?php include('menu.php'); ?>

    <main class="container my-3">

        <form method="post" action="ingreso">
            
            <div class="mb-3">
                <input type="email" name="correo" class="form-control" placeholder="Correo electrónico">
            </div>

            <div class="mb-3">
                <input type="password" name="clave" class="form-control" placeholder="Contraseña">
            </div>

            <div class="mb-3">
                <input type="submit" value="Ingresar" class="btn btn-primary">
            </div>
                
        </form>

    </main>

<?php include('pie.php'); ?>