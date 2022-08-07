<?php
if(isset($_POST['submit'])) 
{
    include_once('conexao.php');  
 
    //$email = $_POST['email'];
    //$senha = $_POST['senha'];

    $email = 'rafaedasrefreitas@gmail.com';
    $senha = '12345';

    echo "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";

   $verifica = mysqli_query($conn,"SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
    }
    else {
        header("Location:..\index.html");
      }
    
}
?>