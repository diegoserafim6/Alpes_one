<?php
/* Conexão com o servidor . */
$servidor = 'localhost';
$banco    = 'alpes_one';
$usuario  = 'root';
$senha    = '';
$link     = mysqli_connect($servidor, $usuario, $senha);
$db       = mysqli_select_db($link, $banco);
if (!$link) {
    echo "erro ao conectar ao banco de dados!";
}

/* Valida usuario e senha na tela de login */
if (isset($_POST['submits'])) {
    
    $Nome_Completo = mysqli_real_escape_string($link, $_POST['Nome_Completo']);
    $Senha         = mysqli_real_escape_string($link, $_POST['Senha']);
    
    if ($Nome_Completo == "" || $Nome_Completo == null) {
        echo "Informe o nome do usuário ";
    }
    
    elseif ($Senha == "" || $Senha == null) {
        echo "Informe a senha de acesso ";
    }
    
    else {
        
        $sql       = "SELECT * FROM usuario WHERE Nome_Completo = '$Nome_Completo' AND Senha = '$Senha'";
        $resultado = mysqli_query($link, $sql);
        
        if (mysqli_num_rows($resultado) == true):
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($link);
            $_SESSION['logado']     = true;
            $_SESSION['id_usuario'] = $dados['id'];
            echo 'logado';
            header('Location:Pesquisar.php');
        else:
            echo "Usuário e senha não localizados";
            header('Location:Pesquisar.php');
        endif;
    }
}

/*Cria novos usuarios ao banco de dados*/
if (isset($_POST['Cadastrar_usuario'])) {
    
    $Nome_Completo    = $_POST['Nome_Completo'];
    $CPF              = $_POST['CPF'];
    $Sexo             = $_POST['Sexo'];
    $Setor            = $_POST['Setor'];
    $E_mail           = $_POST['E_mail'];
    $Telefone_Fixo    = $_POST['Telefone_Fixo'];
    $Telefone_Celular = $_POST['Telefone_Celular'];
    $Usuario          = $_POST['Usuario'];
    $Senha            = $_POST['Senha'];
    $sql              = "INSERT INTO usuario(Nome_Completo,CPF,Sexo,Setor,E_mail,Telefone_Fixo,Telefone_Celular,Usuario,Senha) VALUES('$Nome_Completo','$CPF','$Sexo','$Setor','$E_mail','$Telefone_Fixo','$Telefone_Celular','$Usuario','$Senha')";
    
    
    if (mysqli_query($link, $sql)) {
        echo " <p> Cadastro realizado  com sucesso! </br>";
        header("Refresh: 1;url=cadastrar.php");
    } else {
        echo " <p>  Falha ao realizar o cadastro   </br>";
    }
    header("Refresh: 1;url=cadastrar.php");
}


/*Deleta os usuarios do banco de dados*/


if (isset($_POST['deletar_usuario'])) {
    $Usuario = $_POST['Usuario'];
    $CPF     = $_POST['CPF'];
    $sql     = "DELETE FROM usuario WHERE Usuario ='$Usuario' OR CPF='$CPF'";
    
    if (mysqli_query($link, $sql)) {
        echo " <p> Exclusão realizada com sucesso! </br>";
        header("Refresh: 1;url=deletar.php");
    } else {
        echo " <p>  Falha ao Deletar o usuário certifique se foram digitados dados válidos   </br>";
    }
    header("Refresh: 1;url=deletar.php");
}

/*Altera os usuarios do banco de dados*/


if(isset($_POST['Alterar_Cadastro'])){

    
    if($Nome_Usuario == "" || $Nome_Usuario == null ){
    
               echo "Usuario não localizado ";}
    
          else{
    
    $sql = "UPDATE usuario SET Nome_Completo = '$Nome_Completo' ,CPF = '$CPF',Sexo = '$Sexo',E_mail = '$E_mail',Telefone_Fixo = '$Telefone_Fixo',Telefone_Celular = '$Telefone_Celular',Usuario = '$Usuario',Senha = '$Senha' WHERE Nome_Usuario = '$Nome_Usuario' ";
    
    if (mysqli_query($link, $sql)) {
          echo " <p> Atualização do cadastro realizada com sucesso";
    
    } else {
          echo "Error ao realizar o cadastro " . $sql . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
    
    }	}






?>