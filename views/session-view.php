<nav class="content" name="content">
    <?php
    require 'logic/mstr_categorias.php';
    while($mostar=mysqli_fetch_array($result)){
    ?>
        <div class="content_title" name="content_title">
        <a class="navlink-title" href="<?php echo SERVERURL; ?>cat/"><?php echo $mostar['nombre']?></a> 
            
    </div>
    <div class="content_description" name="content_description">
        <?php echo $mostar['descripcion']?>
   
    </div>
    <?php 
    }
    ?>
</nav>