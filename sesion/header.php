<?php
$base_path = "http://" . $_SERVER["HTTP_HOST"] . "/lab_08";
?>

<nav>
    <ul>
        <li><a href="<?php echo $base_path . "/index.php"?>">Ver Perfil</a></li>
        <li><a href="<?php echo $base_path . "/php/new.php" ?>">Agregar Usuario</a></li>
    </ul>
</nav>