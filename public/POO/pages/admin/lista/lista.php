<?php 
 include_once("../../db/conexao/Conn.php"); 
 ?>

<!-- Inclui o arquivo de estilo para a lista -->
<link rel="stylesheet" href="../../../styles/Lista/lista.css">

    <!-- Tabela de usuários -->
    <div class="containerTable">
        <div>
            <div class="edit">
                <form action="../../../db/controller/usersController.php" method="post">
                    <div class="inputEdit">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" id="usuario" required readonly>
                        <label for="setAdmin">Admin</label>
                        <input type="checkbox" name="setAdmin" id="setAdmin" value="1">
                        <input type="hidden" name="id" id="id" required>
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
                    <?php 
                    $sql = "SELECT * FROM users ORDER BY isAdmin DESC";
                    $stmt = Conexao::getConexao()->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row) { ?>
                        <tr>
                            <td><?php echo $row['usuario']; ?></td>
                            <td><?php echo md5($row['password']); ?></td>
                            <!-- Verifica se o usuário é administrador, exibindo o ícone de "check" ou "x" -->
                            <td><?php if ($row['isAdmin'] == 1) {
                                    echo '<i class="fa fa-check"></i>';
                                } else {
                                    echo '<i class="fa fa-xmark"></i>';
                                }; ?>
                            </td>
                            <!-- Botão de edição de usuário, que chama a função setEditData com os dados do usuário a ser editado -->
                            <td><a href="#" onclick="setEditData(<?php echo $row['id']; ?>, '<?php echo $row['usuario']; ?>', <?php echo $row['isAdmin']; ?>)"><i class="fa fa-user-pen"></i></a></td>
                            <!-- Botão de exclusão de usuário, que mostra um popup de confirmação antes de enviar o formulário de exclusão -->
                            <td>
                                <form action="../../../db/controller/usersController.php" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="usuario" value="<?php echo $row['usuario']; ?>">
                                    <input type="hidden" name="delete" value="delete">
                                    <button type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <!-- Script que define a função setEditData, responsável por preencher o formulário de edição com os dados do usuário a ser editado -->
                <script>

                    function setEditData(id, usuario, isAdmin) {
                        document.getElementById('usuario').value = usuario;
                        document.getElementById('id').value = id;
                        document.getElementById('setAdmin').checked = isAdmin == 1;
                    }
                </script>
  