<?php

  //guardar numa variável a ligação à base de dados
  $ligacao = mysqli_connect('localhost','root','','ecotuga_dados');
  //definir a codificação de caracteres de ligação à base de dados (BD) - para ser possivel ver todos os caracteres iguais, ex: acentosm etc
  mysqli_set_charset($ligacao,'utf8');

  //verificar se existe o parametro id_apagar no URL
if(isset($_GET['id_apagar']) ){
  $id = $_GET['id_apagar'];
  //apagar registo da vase de dados
  mysqli_query($ligacao, "DELETE FROM destaques WHERE id = $id");
}

//verificar se existe informação no array $_POST
if(count($_POST) > 0){

//guardar em variáveis a informação proveniente do formulário
  $lugar = $_POST['lugar'];
  $titulo = $_POST['titulo'];
  $descricao = $_POST['descricao'];
  $texto = $_POST['texto'];
  $imagem = '';

  //verificar se existiu upload de ficheiro bem sucedido
  if( $_FILES['imagem']['error'] == 0 ){

   //guardar nome original do ficheiro
   $imagem = $_FILES['imagem']['name'];

    //guardar nome do ficheiro temporário
    $ficheiro_temporario = $_FILES['imagem']['tmp_name'];

    //mover o ficheiro para a pasta das imagens
    move_uploaded_file( $ficheiro_temporario, '../img/'.$imagem );

  }

//inserir novo registo na tabela de artigos
mysqli_query($ligacao, "INSERT INTO destaques
(lugar,titulo,descricao,texto,imagem)
VALUES
('$lugar','$titulo','$descricao','$texto','$imagem') ")or die(mysqli_error($ligacao));

  };

//guardar numa variável uma consulta à base de dados
  $consulta = mysqli_query($ligacao, "SELECT * FROM destaques ORDER BY id");

$destaques = array();
while($linha = mysqli_fetch_assoc($consulta)){
  $destaques[] = $linha;
};


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

<div class="contentor">

      <div class="lista">
      <br/>
            <h1>Editar Destaques</h1>

            <?php for($i=0;$i<count($destaques);$i++){ ?>
            <div class="item">

                <div class="lista-index">
                  
                      
                      <h3>
                        <?php echo $destaques[$i]['destaque']; ?>
                      </h3>
                        <div class="icones">
                        <a href=" destaques_editar.php?id=<?php echo $destaques[$i]['id']; ?>" class="botao_editar">
                      <img title="Editar" class="right" src="img/edit.png">
                      </img>
                    </a>
                    <a href="destaques.php?id_apagar=<?php echo $destaques[$i]['id']; ?>" title="Apagar" class="delete"><img class="delete-icon" src="img/delete.png"></img></a>
              </div>
                    <div class="lista-img">
                        <img src="../img/<?php echo $destaques[$i]['imagem']; ?>"></img>
                    </div>
                </div>
                  <div class="clear">
              </div>
            </div>
            <?php } ?>
  <img src="../img/botao-mais.png" id="adicionar_artigo"></img>
      </div>

</div>
<!-- Inserir artigo -->

<div class="janela_insert">
    <div class="fechar_janela right">X</div>
  <div class="item-insert">

    <form  enctype="multipart/form-data" action="" method="post">

        <label>Destaque</label>
        <input type="text" name="destaque"/>

        <label>Imagem</label>
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
