<nav class="content" name="content">
    <?php
       require 'logic/suche_profile.php';
       require 'logic/profil-anzeigen.php';
       $mostrar=mysqli_fetch_array($q)
    ?>
        <div class="navbar-default" name="navbar-default">
            <div class="contenido" name="contenido">
                <?php echo $mostrar['usuario']?> &nbsp;
                <?php echo $mostrar['fecha_reg']?> &nbsp;
                <?php echo $mostrar['nombre']?> &nbsp;
                <?php echo $mostrar['apellido']?> &nbsp;
                <?php echo $mostrar['correo']?> &nbsp;
                <?php echo $mostrar['avatar']?> &nbsp;
            </div>
        </div>

</nav>