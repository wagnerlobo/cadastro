<?php 

if(isset($_POST['submit'])) {

   // print_r('Nome: ' . $_POST['nome']);
   //print_r('<br>');
   // print_r('Email: ' . $_POST['email']);
   // print_r('<br>');
   // print_r('Telefone: ' . $_POST['telefone']);
   //print_r('<br>');
   //  print_r('Gênero: ' . $_POST['genero']);
   // print_r('<br>');
   //print_r('Cidade: ' . $_POST['cidade']);
   // print_r('<br>');
   // print_r('Estado: ' . $_POST['estado']);
   // print_r('<br>');
   // print_r('Endereço: ' . $_POST['endereco']);

   include_once(config.php)

   $nome = $_POST ['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $genero = $_POST['genero'];
   $data_nascimento = $_POST['data_nascimento'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $endereco = $_POST['endereco'];
     
   $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco) VALUES('$nome', '$email', '$telefone', '$genero',
   '$data_nascimento', '$cidade', '$estado', '$endereco')");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend> <b>Formulário de Clientes</b> </legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputuser" required >
                    <label for="nome" class="labelnput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputuser" required >
                    <label for="email"class="labelnput" >Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputuser" required >
                    <label for="telefone"class="labelnput" >Telefone</label>
                </div>
                <br>
                <p>Sexo :</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required >
                    
                    <br><br>  
                    <div class="inputbox">
                        <input type="text" name="cidade" id="cidade" class="inputuser" required >
                        <label for="cidade"class="labelnput" >Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputbox">
                        <input type="text" name="estado" id="estado" class="inputuser" required >
                        <label for="estado" class="labelnput">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputbox">
                        <input type="text" name="endereco" id="endereco" class="inputuser" required >
                        <label for="endereco" class="labelnput">Endereço</label>
                    </div>
               
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>