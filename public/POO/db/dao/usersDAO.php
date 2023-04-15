<?php
/*
    Criação da classe Usuario com o CRUD
*/
class UsuarioDAO
{

    public function create(Usuario $usuario)
    {
        try {
            $sql = "SELECT * FROM users WHERE usuario = :usuario";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":usuario", $usuario->getUsuario());
            $p_sql->execute();
            if ($p_sql->rowCount() == 0) {

                $sql = "INSERT INTO users (                   
                    usuario,password)
                    VALUES (
                    :usuario,:password)";

                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":usuario", $usuario->getUsuario());
                $p_sql->bindValue(":password", $usuario->getPassword());
                $p_sql->execute();
                return $p_sql->execute();
            } else {

                print "<script>alert('Usuário ou senha já cadastrado!'); location.href = '../../';</script>";
            }
        } catch (Exception $e) {
            print "Erro ao Inserir usuário <br>" . $e . '<br>';
        }
    }

    public function login(Usuario $usuario)
    {
        try {
            $sql = "SELECT * FROM users WHERE usuario = :usuario and password = :password";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":usuario", $usuario->getUsuario());
            $p_sql->bindValue(":password", $usuario->getPassword());
            $p_sql->execute();
            if ($p_sql->rowCount() > 0) {
                $usuario = $p_sql->fetch(PDO::FETCH_ASSOC);

                $_SESSION['usuario'] = $usuario['usuario'];
                print "<script>location.href = '../../';</script>";
                $_SESSION['admin'] = $usuario['isAdmin'];
            } else {

                print "<script>alert('Usuario ou senha inexistentes!'); location.href = '../../';</script>";
            }
        } catch (Exception $e) {
            print "Erro ao fazer login! <br>" . $e . '<br>';
        }
    }


    public function update(Usuario $usuario)
    {
        try {
            if (@$_SESSION['admin'] == 1) {

                // Atualiza os dados do usuário
                if (isset($_POST['editar'])) {
                    $id = $_POST['id'];
                    $user = $_POST['usuario'];
                    if ($user !== "") {
                        if (@$_SESSION['usuario'] !== $user) {
                            if (isset($_POST['setAdmin'])) {
                                $isAdmin = 1;
                                $sql = "UPDATE users SET isAdmin = $isAdmin WHERE id = $id";
                                $stmt = Conexao::getConexao()->prepare($sql);
                                $stmt->execute();
                            } else {

                                $isAdmin = 0;
                                $sql = "UPDATE users SET isAdmin = $isAdmin WHERE id = $id";
                                $stmt = Conexao::getConexao()->prepare($sql);
                                $stmt->execute();
                            }
                        } else {
                            echo "<script>alert('Você não pode editar seu proprio usuário');</script>";
                            echo "<script>location.href='../../pages/admin/admin.php';</script>";
                        }
                    } else {
                        echo "<script>alert('Você precisa selecionar um usuário');</script>";
                        echo "<script>location.href='../../pages/admin/admin.php';</script>";
                    }
                }
            }
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Usuario $usuario)
    {
        try {
            if (@$_SESSION['usuario'] !== $usuario->getUsuario()) {
                $sql = "DELETE FROM users WHERE id = :id";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":id", $usuario->getId());
                return $p_sql->execute();
            } else {
                print "<script>alert('Você não pode excluir seu próprio usuário!'); location.href = '../../pages/admin/admin.php';</script>";
            }
        } catch (Exception $e) {
            echo "Erro ao Excluir usuario<br> $e <br>";
        }
    }
}
