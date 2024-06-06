<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PINHALNEWS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <header>
            <img src="img/logo.png" alt="Logo PinhalNews" class="logo">
            <div class="titulos">
                <spam class="titulo1">PINHALNEWS</spam>
                <p class="titulo2">seu site de notícias da cidade e do mundo.</p>
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">PRIMEIRA PAGINA</a></li>
                <li><a href="manchetes.php">MANCHETES</a></li>
                <li><a href="quem.php">QUEM SOMOS</a></li>
                <li><a href="contato.php">CONTATO</a></li>
                <li><a href="area.php">Area Restrita</a></li>
            </ul>
        </nav>
        <main id="main-padrao">
            <?php
            $id_noticia = @$_GET['id_noticia'];
            if($id_noticia)
            {
                 $sql = "SELECT * FROM tb_noticia WHERE id_noticia = $id_noticia;";
                 $resultado = mysqli_execute_query($conexao, $sql);
                 $dados = mysqli_fetch_array($resultado);
                 echo "<p class= 'titulo'> ".$dados['titulo'].'<br>';
                 echo "<p class='data e hora'>: ".$dados['datahora'].'<br>';
                 echo "fonte: ".$dados['fonte']. '<br>';
                 echo "autor: ".$dados['autor'].'<p>';
                 echo "<p class='titulo'><img src'='img/".$dados['imagem']."' class='imagem-noticia'></p>";
                 echo "<p class='noticia'>".$dados['noticia']."</p>";
                 echo "<a href='index.php'><span class='endereco'>voltar pagina inicial</span></a>";
                    
            }else{
                echo 'nao tem conteudo';
            }

            ?>
          
           
        </main>
        <footer>
            <a href="#"><img src="img/whats.png" alt="whatsapp" width="226"></a>
            <p>Copyright © 2024 Pinhal News - Desenvolvido e otimizado por Alunos Etec INFO.</p>
            <a href="#"><img src="img/redes.png" alt="redes social" width="148"></a>
        </footer>
    </div>
</body>
</html>  
    
</body>
</html>