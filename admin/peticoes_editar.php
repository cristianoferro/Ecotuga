

<?php

    //Ligar à base de dados
    $ligacao = mysqli_connect('localhost','root','','ecotuga_dados');
    //Definir codificação de caracteres
    mysqli_set_charset($ligacao,'utf8');

    //Guardar numa variável o parametro id do URL
    $id = $_GET['id'];

    //Verificar se existem elementos guardados no array $_POST
    if( count($_POST) > 0 ){

        //Guardar em variáveis os valores enviados pelo formulário
        $titulo = mysqli_real_escape_string($ligacao,$_POST['titulo']);
        $descricao = mysqli_real_escape_string($ligacao,$_POST['descricao']);

        //Actualizar registo na base de dados
        mysqli_query($ligacao,"UPDATE peticoes SET titulo = '$titulo' , descricao = '$descricao'
        WHERE id = $id ")or die();


        //Verificar se foi enviada uma nova imagem
        if( $_FILES['imagem']['error'] == 0 ){

            //Guardar numa variável o nome do ficheiro original
            $imagem = $_FILES['imagem']['name'];
            //Guardar numa variável o caminho para o ficheiro temporário
            $temp_file = $_FILES['imagem']['tmp_name'];

            //Mover o ficheiro carregado para a pasta das imagens
            move_uploaded_file( $temp_file  , '../img/'.$imagem );

            //Actualizar a base de dados
            mysqli_query($ligacao,"UPDATE peticoes SET imagem = '$imagem' WHERE id = $id");

        }

    }

    //Fazer consulta à base de dados
    $consulta = mysqli_query($ligacao , "SELECT * FROM peticoes WHERE id = $id");
    //Guardar numa variável o registo encontrado pela consulta
    $peticoes = mysqli_fetch_assoc($consulta);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Administração</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
</head>
<body>

  <header id="top">

        <!-- Menu -->
        <nav id="menu">
              <div class="contentor">
              <!-- Logo -->
              <a href="index.php"><h1 class="left" id="logo">EcoTuga</h1></a>
              <h2 class="left" id="logo">Gestor de conteúdos</h2>

              </div>
        </nav>

        <div class="clear"></div>
  </header>

        <div class="janela_editar">
          <a href="peticoes.php" class="fechar_janela right">X</a>
          <div class="item-insert">

            <form  enctype="multipart/form-data" action="" method="post">

                <label>Título</label>
                <input type="text" name="titulo" value="<?php echo $peticoes['titulo']; ?>"/>

                <label>Descrição</label>
                <textarea name="descricao"><?php echo $peticoes['descricao']; ?></textarea>

                <label>Imagem</label>
                  <?php if($peticoes['imagem'] != ''){ ?>
                     <img src="../img/<?php echo $peticoes['imagem']; ?>" accept="image/*"/>
                  <?php } ?>
                <input type="file" name="imagem"/>

                <input type="submit" value="Inserir" class="submit_button"/>

            </form>
          </div>
        </div>


    </div>

    <!-- Ficheiros JS -->
    <script type="application/javascript" src="js/jquery.js"></script>
    <script type="application/javascript" src="js/script.js"></script>




</body>
</html>
