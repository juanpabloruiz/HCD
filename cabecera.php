<?php include('conexion.php'); ?>
<?php include('funciones.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php titulo(); ?></title>
    <?php
$servidor =  dirname($_SERVER['PHP_SELF']);
echo $servidor.'<br>';
$archivo_css = '/css/bootstrap.min.css';
echo $servidor.$archivo_css;
?>
<?php echo $_SERVER['ORIG_PATH_INFO']; ?>
<link rel="stylesheet" href="<?php echo 'http://localhost/'.$servidor.$archivo_css; ?>">

    
</head>