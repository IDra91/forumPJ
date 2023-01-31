<nav class="content" name="content">
    <?php
        require 'logic/suche_kategorien.php';
        require 'logic/anzeig_diskussionen.php';
        while ($mostrar=mysqli_fetch_array($q)) {
        ?>
            <div class="navbar-default" name="navbar-default">
                <a class="navlink-title" href="<?php echo SERVERTOPIC.$mostrar['titulo']; ?>"><?php echo $mostrar['titulo']?></a>
            </div>
            <div class="contenido" name="contenido">
                <?php echo $mostrar['fecha']?>
                &nbsp;
                <?php echo $mostrar['texto']?>
                &nbsp;
                <?php echo $mostrar['estado']?>
            </div>
            <?php
        }
    ?>
</nav>