<?php
function titulo() {
    $carpeta = basename($_SERVER['REQUEST_URI']);
    if ($carpeta == 'mesa') {
        echo 'Mesa de Entradas';
    }
    elseif ($carpeta == 'secretaria') {
        echo 'Secretaría';
    }
    elseif ($carpeta == 'presidencia') {
        echo 'Presidencia';
    }
    elseif ($carpeta == 'prosecretaria') {
        echo 'Prosecretaría';
    }
    elseif ($carpeta == 'labor') {
        echo 'Labor Parlamentaria';
    }
    elseif ($carpeta == 'comisiones') {
        echo 'Secretaría de Comisiones';
    }
    else {
        echo 'HCD';
    }
    
}
?>