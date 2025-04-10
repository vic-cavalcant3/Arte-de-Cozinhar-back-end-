<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Arte de Cozinhar</title>
</head>
<body>
    <center>
    <!-- <header>
        <div class="top">
            <h1>Arte de Cozinhar</h1>
            <img src="image-12.png" alt="" class = "soon">
            </div>

        <div class="nav">
            <a href="/PAGINA1/index.html">HOME</a>
            <a href="/PAGINA2/index.html">RECEITAS</a>
            <a href="">SOBRE NÓS</a>
            <a href="">CONTATO</a>
            <a href="">O QUE EU TENHO?</a>
        </div>
    </header> -->

<div>

<form action="gravar.php" method="post">
    <h1> Sistema de Cadastro </h1>
         <h3>Digite as informações necessárias: </h3>

        <div class="texts">
     <input id="firstname" type="text" name="nome" placeholder="Digite o seu nome: " required>  <br> <br>
     
        <input type="text" name="email" placeholder="Digite o seu email: " required>
        <input type="text" name="senha" placeholder="Digite a senha desejada: " required> <br><br>
        <input type="int" name="telefone" placeholder="Digite seu telefone" required> <br><br>
        <input type="text" name="endereco" placeholder="Digite o seu endereco: " required>
     </div>
                 
    


     <div class="redes">
        <input type="text" name="instagram" placeholder="Digite o seu instagram: " required>
        <input type="text" name="twitter" placeholder="Digite o seu twitter: " required>
        <input type="text" name="linkedin" placeholder="Digite o seu linkedin: " required>
        <input type="text" name="facebook" placeholder="Digite o seu facebook: " required>
        <input type="text" name="youtube" placeholder="Digite o seu youtube: " required>
        <input type="text" name="cor" placeholder="Digite uma cor: " required>
    </div>

    <div class="resto">
    <input type="text" name="titulo_servicos" placeholder= "titulo_servicos: " required>
    <input type="text" name="subtitulo_servicos" placeholder= "subtitulo_servicos: " required>
    <input type="text" name="titulo_trabalhos" placeholder= "titulo_trabalhos: " required>
    <input type="text" name="subtitulo_trabalhos" placeholder= "subtitulo_trabalhos: " required>
    <input type="text" name="titulo_equipe" placeholder= "titulo_equipe: " required>
    </div> 

    <div class="file">
    <input type="text" name="subtitulo_equipes" placeholder= "subtitulo_equipe: " required>
    <input type="text" name="titulo_contato" placeholder= "titulo_contato: " required>
    <input type="text" name="subtitulo_contato" placeholder= "subtitulo_contato: " required>
    <input type="text" name="texto_rodape" placeholder= "texto_rodape: " required>
     </div>    
    
    <div class="arquivo">
         <div>
             <h6>Escolha Sua logo</h6>
             <input type="file" name="logo" placeholder="Escolha Sua logo" id="filer"  class="manu"> <br> <br>
         </div>

         <div>
             <h6>Escolha Seu Icone</h6>
             <input type="file" name="icone" placeholder="Escolha Seu Icone" > <br><br>
         </div>
    </div>

     <button>  Concluir Cadastro </button>

</form>




</div>

    </center>
</body>
</html>