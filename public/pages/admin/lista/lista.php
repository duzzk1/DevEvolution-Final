<link rel="stylesheet" href="../../../styles/Lista/lista.css">
<?php
include('../../db/conn.php');
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $user = $_POST['usuario'];

    if (isset($_POST['setAdmin'])) {
        if ($user == $_SESSION['usuario']) {
            echo "<script>alert('Você não pode alterar seu proprio usuário!'); location.href='./admin.php';</script>";
        } else {
            $isAdmin = 1;
            $sql = "UPDATE users SET isAdmin = $isAdmin WHERE id = $id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        }
    } else {
        if ($user == $_SESSION['usuario']) {
            echo "<script>alert('Você não pode alterar seu proprio usuário!'); location.href='./admin.php';</script>";
        } else {
            $isAdmin = 0;
            $sql = "UPDATE users SET isAdmin = $isAdmin WHERE id = $id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        }
    }
}

$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="containerTable">
    <div>
        <div class="edit">
            <h3>Editar</h3>
            <form action="" method="post">
                <div class="inputEdit">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" required>
                    <label for="setAdmin">Admin</label>
                    <input type="checkbox" name="setAdmin" id="setAdmin" value="1">
                    <input type="hidden" name="id" id="id">
                </div>
                <div class="submitEdit">
                    <input type="submit" value="Editar" name="editar">
                </div>
            </form>
        </div>
    </div>
    <div class="containerLista">
        <h2>Lista</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuário</th>
                    <th>Senha</th>
                    <th>Administrador</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['user']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php if ($row['isAdmin'] == 1) {
                                echo '<i class="fa fa-check"></i>';
                            } else {
                                echo '<i class="fa fa-xmark"></i>';
                            }; ?>

                        </td>
                        <td><a href="#" onclick="setEditData(<?php echo $row['id']; ?>, '<?php echo $row['user']; ?>', <?php echo $row['isAdmin']; ?>)">Editar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function setEditData(id, usuario, isAdmin) {
        document.getElementById('usuario').value = usuario;
        document.getElementById('id').value = id;
        document.getElementById('setAdmin').checked = isAdmin == 1;
    }
</script>