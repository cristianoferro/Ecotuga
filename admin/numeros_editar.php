
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
        $numero = mysqli_real_escape_string($ligacao,$_POST['numero']);
        $descricao = mysqli_real_escape_string($ligacao,$_POST['descricao']);

        //Actualizar registo na base de dados
        mysqli_query($ligacao,"UPDATE numeros SET numero = '$numero' , descricao = '$descricao'
        WHERE id = $id ")or die();


    }

    //Fazer consulta à base de dados
    $consulta = mysqli_query($ligacao , "SELECT * FROM numeros WHERE id = $id");
    //Guardar numa variável o registo encontrado pela consulta
    $numeros = mysqli_fetch_assoc($consulta);

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
          <a href="numeros.php" class="fechar_janela right">X</a>
          <div class="item-insert">

            <form  enctype="multipart/form-data" action="" method="post">

                <label>Número</label>
                <input type="text" name="numero" value="<?php echo $numeros['numero']; ?>"/>

                <label>Descrição</label>
                <textarea name="descricao"><?php echo $numeros['descricao']; ?></textarea>

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
