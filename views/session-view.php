<nav class="content" name="content">
    <?php
    require 'logic/mstr_categorias.php';
    while($mostar=mysqli_fetch_array($result)){
    ?>
        <div class="navbar-default" name="navbar-default">
        <a class="navlink-title" href="<?php echo SERVERURL; ?>cat/"><?php echo $mostar['nombre']?></a> 
            
    </div>
    <div class="contenido" name="contenido">
        <?php echo $mostar['descripcion']?>
   
    </div>
    <?php 
    }
    ?>
</nav>