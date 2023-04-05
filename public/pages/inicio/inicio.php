<?php
require_once('../header/header.php');
// SE NÃO FOR ADMIN VAI APARECER ESSE CONTEUDO!
?>
<section id='inicio'>
    <div class='imgInicio'><img src='../../assets/img/phplogo.png' alt=''></div>
    <div class='descInicio'>
        <h1><span class='fancy'>Projeto final DEVevolution</span></h1>
        <h3>Seja bem-vindo</h3>
        <p>By: <strong>Eduardo</strong></p>
    </div>

</section>
<section id="sobre">
    <div>
        <p>Projeto final do Curso apresentado pela IXC-Soft, onde o assunto tratado foi PHP, desde logica de programação até POO na linguagem. </p>
    </div>
</section>
<section id="contato"> <!-- ESSA SEÇÃO É APENAS ILUSTRATIVA, POIS NÃO TENHO UM SERVIDOR DE EMAIL PARA REALMENTE CONSEGUIR ENVIAR! -->
    <div class="contato-container">
        <h2>Entre em contato</h2>
        <?php
        if (isset($_POST['mensagem'])) {
        ?>
            <p style="color: green;"><?php echo "Obrigado pelo contato!" ?></p>
        <?php }

        ?>
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
<button onclick="backTop()" id="btnTopo" title="Voltar ao topo">&#8593;</button>
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




require_once('../footer/footer.php');
