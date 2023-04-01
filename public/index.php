<?php
session_start();
    include('./pages/header.php');
  
    ?>
    <main>
        <?php 
        if(isset($_SESSION['usuario'])){
            include('./pages/main.php');
        }else{
            include('./pages/notLogged.php');
        }
    
        ?>
    </main>
</body>
</html>