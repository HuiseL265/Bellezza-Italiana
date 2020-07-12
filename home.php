<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" >
      <title>SOS Alimentos(Brasil)</title>
      <link rel="shortcut icon" type="image/png" href="css/img/logo/logo.ico">
      <link rel="stylesheet" href="css/home.css">
   </head>
   <body>
      <header id="header">
         <a href="#"><img src="css/img/logo/logo2.svg" alt="logo" height="80px"></a>

          <ul id="header-container">
             <li><a href=""><h1>Home</h1></a></li>
             <li><a href=""><h1>Sobre</h1></a></li>
             <li><a href=""><h1>Contato</h1></a></li>
             <form id="form-login" method="post" action="php/logar.act.php">
               <input type="email" name="email" placeholder="Login">
               <input type="password" name="senha" placeholder="Senha">
               <input type="submit" value="LOGAR">
               

               <?php
                if(isset($_SESSION['usuario_invalido'])){
               ?>
                <p>Email e/ou senha invalidos</p>
               <?php
                    };
                    unset($_SESSION['usuario_invalido']);
               ?>

               <?php
                    if(isset($_SESSION['campo_vazio'])){
               ?>
                <p>Preencha todos os campos</p>

               <?php
                    };
                    unset($_SESSION['campo_vazio']);
               ?>
             </form>
          </ul>
      </header>
      <div id="central">
         <div id="info">
            <img src="css/img/the-rock-alimenta-namorada 1.svg" alt="SOS alimentos" height="400px">
            <p>TEXTO GENERICO SOBRE SITE DE DOAÇÃO DE ALIMENTOS KKKJ</p>
         </div>
         <div id="registrar">
            <form action="php/incluir.act.php" method="post">
               <div class="items">
               <table>
                       <tr>
                           <td>Nome</td>
                           <td><input type="text" name="nome"></td>
                       </tr>
                       <tr>
                           <td>Email</td>
                           <td><input type="email" name="email"></td>
                       </tr>
                       <tr>
                           <td>CPF (Resp.)</td>
                           <td><input type="text" maxlength="11" name="cpf"></td>
                       </tr>
                       <tr>
                           <td>Telefone</td>
                           <td><input type="text" maxlength="11" name="telefone"></td>
                       </tr>
                       <tr>
                           <td>Telefone(2)</td>
                           <td><input type="text" maxlength="11" name="telefone2"></td>
                       </tr>
                       <tr>
                           <td>Senha</td>
                           <td><input type="password" name="senha"></td>
                       </tr>
                       <tr>
                           <td>Confirme Senha</td>
                           <td><input type="password" name="senha2"></td>
                       </tr>
                       <tr>
                           <td colspan="2">
                               <button type="submit" id="confirm">REGISTRAR</button>
                           </td>
                       </tr>
               </table>
               </div>
           </form>
         </div>
      </div>
   </body>
</html>