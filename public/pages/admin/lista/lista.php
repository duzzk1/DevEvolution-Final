<!-- Inclui o arquivo de estilo para a lista -->
<link rel="stylesheet" href="../../../styles/Lista/lista.css">
<?php
// Inicia a sessão
session_start();

// Verifica se o usuário é administrador
if (@$_SESSION['admin'] == 1) {

    // Inclui o arquivo de conexão com o banco de dados
    include('../../db/conn.php');

    // Atualiza os dados do usuário
    if (isset($_POST['editar'])) {
        $id = $_POST['id'];
        $user = $_POST['usuario'];
        if (isset($_POST['setAdmin'])) {
            if ($user == $_SESSION['usuario']) {
                echo "<script>alert('Você não pode alterar seu próprio usuário!'); location.href='./admin.php';</script>";
            } else {
                $isAdmin = 1;
                $sql = "UPDATE users SET isAdmin = $isAdmin WHERE id = $id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            }
        } else {
            if ($user == $_SESSION['usuario']) {
                echo "<script>alert('Você não pode alterar seu próprio usuário!'); location.href='./admin.php';</script>";
            } else {
                $isAdmin = 0;
                $sql = "UPDATE users SET isAdmin = $isAdmin WHERE id = $id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            }
        }
    }

    // Seleciona os dados dos usuários
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Exclui o usuário selecionado
    include('../../db/conn.php');

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $user = $_POST['usuario'];
        if ($user == $_SESSION['usuario']) {
            echo "<script>alert('Você não pode excluir seu próprio usuário!'); location.href='./admin.php';</script>";
        } else {
            $sql = "DELETE FROM users WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            echo "<script>location.href='./admin.php';</script>";
        }
    }
?>

    <!-- Tabela de usuários -->
    <div class="containerTable">
        <div>
            <div class="edit">
                <form action="" method="post">
                    <div class="inputEdit">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" id="usuario" required readonly>
                        <label for="setAdmin">Admin</label>
                        <input type="checkbox" name="setAdmin" id="setAdmin" value="1">
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="editar">
                    </div>
                    <div class="submitEdit">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="containerLista">
            <h2>Lista</h2>
            <table>
                <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>Senha</th>
                        <th>Administrador</th>
                        <th colspan="2">Editar</th>
                    </tr>
                </thead>
                <!-- Código responsável por criar a tabela com a lista de usuários cadastrados -->
                <tbody>
                    <?php foreach ($result as $row) { ?>
                        <tr>
                            <td><?php echo $row['user']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <!-- Verifica se o usuário é administrador, exibindo o ícone de "check" ou "x" -->
                            <td><?php if ($row['isAdmin'] == 1) {
                                    echo '<i class="fa fa-check"></i>';
                                } else {
                                    echo '<i class="fa fa-xmark"></i>';
                                }; ?>
                            </td>
                            <!-- Botão de edição de usuário, que chama a função setEditData com os dados do usuário a ser editado -->
                            <td><a href="#" onclick="setEditData(<?php echo $row['id']; ?>, '<?php echo $row['user']; ?>', <?php echo $row['isAdmin']; ?>)"><i class="fa fa-user-pen"></i></a></td>
                            <!-- Botão de exclusão de usuário, que mostra um popup de confirmação antes de enviar o formulário de exclusão -->
                            <td>
                                <form action="" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="usuario" value="<?php echo $row['user']; ?>">
                                    <input type="hidden" name="delete" value="delete">
                                    <button type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <!-- Script que define a função setEditData, responsável por preencher o formulário de edição com os dados do usuário a ser editado -->
                <script>
                    sset($_SESSION['admin'])

                    function setEditData(id, usuario, isAdmin) {
                        document.getElementById('usuario').value = usuario;
                        document.getElementById('id').value = id;
                        document.getElementById('setAdmin').checked = isAdmin == 1;
                    }
                </script>
            <?php
            // Verifica se o usuário é administrador, caso contrário redireciona para a página inicial
        } else {
            echo "<script>location.href='../index.php';</script>";
        }
            ?>