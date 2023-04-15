<?php include('../header/header.php');
$_SESSION['config'] = 'false';
?>
<style>
	/* Definição de variáveis */
	:root {
		--primary-color: #2BA2F6;
		--secondary-color: #1B1B1B;
		--background-color: #FFFFFF;
		--text-color: #1B1B1B;
		--border-color: #E9EBEE;
		--hover-color: #E2F2FF;
	}

	/* Estilos globais */
	body {
		margin: 0;
		font-family: 'Roboto', sans-serif;
		font-size: 16px;
		color: var(--text-color);
		background-color: var(--background-color);
	}

	a {
		text-decoration: none;
		color: var(--primary-color);
	}

	h1 {
		margin: 0;
		text-align: center;
		color: #2BA2F6;
	}

	h2,
	h3,
	h4,
	h5,
	h6 {
		margin: 0;
		text-align: center;
	}

	ul,
	ol {
		margin: 0;
		padding: 0;
		list-style: none;
	}

	/* Estilos do cabeçalho */
	header {
		background-color: var(--primary-color);
		padding: 20px;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	header img {
		height: 50px;
	}

	header nav ul {
		display: flex;
	}

	header nav li {
		margin-left: 20px;
	}

	/* Estilos do conteúdo principal */
	main {
		padding: 10px 20px;
	}

	.page-section {
		margin-bottom: 50px;
		border: 1px solid var(--border-color);
		padding: 20px;
	}

	.page-section h2 {
		font-size: 24px;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.page-section p {
		margin-bottom: 10px;
	}

	/* Estilos da tabela */
	.table {
		border-collapse: collapse;
		width: 100%;
		max-width: 800px;
		margin: 0 auto;
		margin-bottom: 20px;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
		cursor: all-scroll;

	}

	.table thead {
		background-color: var(--primary-color);
		color: var(--background-color);
	}

	.table th {
		padding: 12px 15px;
		text-align: center;
		border-bottom: 1px solid var(--border-color);
	}

	.table td {
		padding: 12px 15px;
		text-align: left;
		border-bottom: 1px solid var(--border-color);
	}

	.table tbody tr:hover {
		background-color: var(--hover-color);
	}

	/* Estilos do rodapé */
	footer {
		background-color: var(--secondary-color);
		color: var(--background-color);
		padding: 20px;
		text-align: center;
	}

	.zoom {
		font-size: 26px;
		max-width: 1024px;
	}
</style>


<body>
	<main>
		<section class="page-section" id="index">
			<h1>Documentação:</h1>

			<table class="table">
				<thead>
					<tr>
						<th colspan="2" style="text-align:center;">Criar banco de dados:</th>
					</tr>
					<tr>
						<th>Tipo</th>
						<th>Nome:</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Database:</td>
						<td>crudDevEvolution</td>
					</tr>
					<tr>
						<td>Tabela:</td>
						<td>users</td>
					</tr>
					<tr>
						<td>Colunas:</td>
						<td>usuario, password e isAdmin</td>
					</tr>
					<tr>
						<td>Tipo:</td>
						<td>id: INT PRIMARY KEY usuario VARCHAR(255) password VARCHAR(255) e isAdmin BIT DEFAULT 0</td>
					</tr>
					<tr>
						<td>Query:</td>
						<td>CREATE TABLE users (
							id INT PRIMARY KEY,
							user VARCHAR(255),
							password VARCHAR(255),
							isAdmin BIT DEFAULT 0
							);</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th colspan="2" style="text-align:center;">Criar usuário admin:</th>
					</tr>
				
					</thead>
					<tbody>
					<tr>
						<td>Query:</td>
						<td>INSERT INTO users (user, password, isAdmin)
							VALUES ('admin', 'admin', 1);
						</td>
					</tr>
					</tbody>
				
			</table>


			<a href="../header/header.php" target="_blank">
				<table class="table">
					<thead>
						<tr>
							<th colspan="2" style="text-align:center;">Arquivo: header.php</th>
						</tr>
						<tr>
							<th>Ação</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Define o fuso horário para São Paulo</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Define o cabeçalho da página</td>
							<td>Contém o logotipo do projeto e o menu de navegação, que inclui links para as páginas Início, Sobre e Contato</td>
						</tr>
						<tr>
							<td>Verifica se há uma sessão ativa</td>
							<td>Mostra o nome do usuário e, se o usuário for um administrador, mostra o botão de configurações</td>
						</tr>
					</tbody>
				</table>
			</a>

			<a href="../../index.php" target="_blank">
				<table class="table">
					<thead>
						<tr>
							<th colspan="2" style="text-align:center;">Arquivo: index.php</th>
						</tr>
						<tr>
							<th>Ação</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Inicia a sessão do usuário</td>
							<td>Verifica se o usuário está logado e, se estiver, inclui o arquivo de início. Caso contrário, inclui o arquivo de login.</td>
						</tr>
					</tbody>
				</table>
			</a>
			<a href="../login/login.php" target="_blank">
				<table class="table">
					<thead>
						<tr>
							<th colspan="2" style="text-align:center;">Arquivo: login.php</th>
						</tr>
						<tr>
							<th>Ação</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Inclui o arquivo usersDAO.php</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Define a página de login</td>
							<td>Contém um formulário para entrada de usuário e senha</td>
						</tr>
						<tr>
							<td>Envia os dados do formulário</td>
							<td>Para usersController.php para realizar a autenticação do usuário</td>
						</tr>
					</tbody>
				</table>
			</a>
			<a href="../registro/registro.php" target="_blank">
				<table class="table">
					<thead>
						<tr>
							<th colspan="2" style="text-align:center;">Arquivo: registro.php</th>
						</tr>
						<tr>
							<th>Ação</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Inclui o arquivo usersDAO.php</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Define a página de registro</td>
							<td>Contém um formulário para entrada de usuário e senha</td>
						</tr>
						<tr>
							<td>Envia os dados do formulário</td>
							<td>Para usersController.php para realizar o registro do usuário</td>
						</tr>
					</tbody>
				</table>
			</a>
			<a href="../inicio/inicio.php" target="_blank">
				<table class="table">
					<thead>
						<tr>
							<th colspan="2" style="text-align:center;">Arquivo: inicio.php</th>
						</tr>
						<tr>
							<th>Ação</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Importa o arquivo header.php</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Define a seção de início da página</td>
							<td>Contém informações sobre o projeto, como o logotipo do PHP, o título do projeto, uma descrição e uma imagem do PHP.</td>
						</tr>
					</tbody>
				</table>
			</a>
			<a href="../admin/admin.php" target="_blank">
				<table class="table">
					<thead>
						<tr>
							<th colspan="2" style="text-align:center;">Arquivo: admin.php</th>
						</tr>
						<tr>
							<th>Ação</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Inclui um cabeçalho e uma lista de usuários</td>
							<td>Verifica se o usuário que está acessando é um admin. Caso o usuário não seja um admin, o código redireciona o usuário para a página inicial.</td>
						</tr>
					</tbody>
				</table>
			</a>
			<table class="table">
				<thead>
					<tr>
						<th colspan="2" style="text-align:center;">Arquivo: lista.php</th>
					</tr>
					<tr>
						<th>Ação</th>
						<th>Descrição</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mostra uma tabela de usuários com seus respectivos dados</td>
						<td>A lista é gerada a partir de um SQL query e inclui os dados dos usuários cadastrados no banco de dados. O código também inclui um formulário que permite editar e excluir usuários. Quando um usuário é selecionado para edição, o formulário de edição é preenchido com os dados do usuário a ser editado. Quando o formulário de exclusão é enviado, uma confirmação de popup aparece antes de enviar a solicitação de exclusão.</td>
					</tr>
				</tbody>
			</table>
			<table class="table">
				<thead>
					<tr>
						<th colspan="2" style="text-align:center;">Arquivo: conexao.php</th>
					</tr>
					<tr>
						<th>Ação</th>
						<th>Descrição</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Cria uma classe de conexão ao banco de dados</td>
						<td>Usa PDO para estabelecer a conexão e também define atributos de erro e nulos vazios.</td>
					</tr>
				</tbody>
			</table>
			<table class="table">
				<thead>
					<tr>
						<th colspan="2" style="text-align:center;">Arquivos: usersController.php e closeSession.php</th>
					</tr>
					<tr>
						<th>Ação</th>
						<th>Descrição</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Gerencia operações relacionadas a usuários</td>
						<td>Cadastro, edição e exclusão, utilizando classes de usuário e usuário DAO, e coleta dados de formulário com filter_input_array()</td>
					</tr>
					<tr>
						<td>Encerra sessão de usuário</td>
						<td>Remove variável de sessão 'usuario', destrói sessão atual com session_destroy() e redireciona para página inicial com header()</td>
					</tr>
				</tbody>
			</table>

			<button onclick="backTop()" id="btnTopo" title="Voltar ao topo">↑</button>

			<!-- Script para exibir ou ocultar o botão de voltar ao topo conforme o usuário faz scroll -->

			<script>
				document.querySelectorAll('table').forEach(function(table) {
					table.addEventListener('mouseenter', function() {
						this.classList.toggle('zoom');
					});
					table.addEventListener('mouseleave', function() {
						this.classList.toggle('zoom');
					});
				});


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