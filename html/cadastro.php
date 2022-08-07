

<?php
if(isset($_POST['submit'])) 
{
    include_once('conexao.php');  
 
    
    $nome = $_POST['nome'];
    $nick = $_POST['nickname'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

   $result = mysqli_query($conn, "INSERT INTO cadastro(email,senha,nome,nick) VALUES('$nome','$nick','$email','$senha' )");
   echo"<script language='javascript' type='text/javascript'>
   alert('Cadastrado com sucesso.');window.location
   .href='login.html';</script>";
}
?>