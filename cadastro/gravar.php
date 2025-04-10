<link rel="stylesheet" href="style.css">
<title>Arte de Cozinhar</title>
        <?php include ('conecta.php') ?>
    
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $logo = $_POST['logo'];
        $icone = $_POST['icone'];
        $instagram = $_POST['instagram'];
        $twitter = $_POST['twitter'];
        $linkedin = $_POST['linkedin'];
        $facebook = $_POST['facebook'];
        $youtube = $_POST['youtube'];
        $cor = $_POST['cor'];
        $titulo_servicos = $_POST['titulo_servicos'];
        $subtitulo_servicos = $_POST['subtitulo_servicos'];
        $titulo_trabalhos = $_POST['titulo_trabalhos'];
        $subtitulo_trabalhos = $_POST['subtitulo_trabalhos'];
        $titulo_equipe = $_POST['titulo_equipe'];
        $titulo_contato = $_POST['titulo_contato'];
        $subtitulo_contato = $_POST['subtitulo_contato'];
        $texto_rodape = $_POST['texto_rodape'];
    
        $mysqli = new mysqli($host, $login, $password, $bd);

        $query = "INSERT INTO $tabela (nome, email, senha, telefone, endereco, logo, icone, instagram, twitter, linkedin, facebook, youtube, cor, titulo_servicos, subtitulo_servicos, titulo_trabalhos, subtitulo_trabalhos, titulo_equipe, titulo_contato, subtitulo_contato, texto_rodape) 

        VALUES ('$nome', '$email', '$senha', '$telefone', '$endereco', '$logo', '$icone', '$instagram', '$twitter', '$linkedin', '$facebook', '$youtube', '$cor', '$titulo_servicos', '$subtitulo_servicos', '$titulo_trabalhos', '$subtitulo_trabalhos', '$titulo_equipe', '$titulo_contato', '$subtitulo_contato', '$texto_rodape')";


    // $query = "INSERT INTO $tabela VALUES ('NULL',
    //     '$nome',
    //     '$email',
    //     '$senha',
    //     '$telefone',
    //     '$endereco',
    //     '$logo',
    //     '$icone',
    //     '$instagram',
    //     '$twitter',
    //     '$linkedin',
    //     '$facebook',
    //     '$youtube',
    //     '$cor',
    //     '$titulo_servicos',
    //     '$subtitulo_servicos',
    //     '$titulo_trabalhos',
    //     '$subtitulo_trabalhos',
    //     '$titulo_equipe',
    //     '$titulo_contato',
    //     '$subtitulo_contato',
    //     '$texto_rodape')";
    
    
    if ($mysqli->connect_error) {
        die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
      }
      
      $resultado = $mysqli->query($query);
      
      if ($resultado) {
        echo '<p class="that"> "Cadastro feito com sucesso, enviaremos  <br> um email pra confirmar seu login!!!"</p>';
        echo '<p class="ryan"> <img src="PluV.gif" width="400" height="300" display="flex" justify-content = "center"> </p>';      
      } else {
        echo "Erro na consulta: " . $mysqli->error; 
      }
      
      $mysqli->close();
      ?> 
   
