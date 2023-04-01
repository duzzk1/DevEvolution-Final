<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo Frontend - DevEvolution</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <header>
        <nav>
            <a href="../index.php"><img class="logoHeader" src="../assets/img/Ixcssoft.png" alt="Logo da IXCSoft"></a>
            <div class="headerLinks">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li>Materiais</li>
                <li>Exercícios</li>
            </ul>
            <?php 
            if(@$_SESSION['usuario'] == null){
            print '<a href="../pages/login.php" class="entrarBtn">Entrar</a>';
            }else{
            print "<a href='../pages/closeSession.php' class='entrarBtn'>".$_SESSION['usuario']."</a>";
            }
            ?>
            </div>
        </nav>
    </header>
