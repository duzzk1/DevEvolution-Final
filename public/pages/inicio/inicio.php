<!-- Início da página -->
<?php
// Importa o arquivo header.php
require_once('../header/header.php');
?>

<!-- Seção de Inicio -->
<section id='inicio'>
    <div class='imgInicio'><img src='../../assets/img/phplogo.png' alt=''></div>
    <div class='descInicio'>
        <h1><span class='fancy'>DevEvolution</span></h1>
        <h3>Seja bem-vindo</h3>
        <p>By: <strong>Eduardo</strong></p>
    </div>
</section>
<!-- Seção de Sobre -->
<section id="sobre">
    <div>
        <p>Projeto final do Curso apresentado pela IXC-Soft, onde o assunto tratado foi PHP, desde logica de programação até POO na linguagem. </p>
    </div>
</section>
<!-- Seção de contato -->
<section id="contato">
    <div class="contato-container">
        <h2>Entre em contato</h2>
        <?php
        // Verifica se o formulário foi submetido e exibe uma mensagem de agradecimento
        if (isset($_POST['mensagem'])) {
        ?>
            <p style="color: green;"><?php echo "Obrigado pelo contato!" ?></p>
        <?php } ?>

        <!-- Formulário de contato -->
        <form action="#contato" method="post">
            <input type="hidden" name="enviaEmail">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</section>

<!-- Botão para voltar ao topo -->
<button onclick="backTop()" id="btnTopo" title="Voltar ao topo">↑</button>

<!-- Script para exibir ou ocultar o botão de voltar ao topo conforme o usuário faz scroll -->
<script>
    window.onscroll = function() {
        returnTop()
    };

    function returnTop() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            // Se a posição atual da página for maior que 20, mostre o botão
            document.getElementById("btnTopo").style.display = "block";
        } else {
            // Caso contrário, oculte o botão
            document.getElementById("btnTopo").style.display = "none";
        }
    }

    // Quando o usuário clicar no botão, role para o topo da página
    function backTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<?php
// Importa o arquivo footer.php
require_once('../footer/footer.php');
?>