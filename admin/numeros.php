<?php

  //guardar numa variável a ligação à base de dados
  $ligacao = mysqli_connect('localhost','root','','ecotuga_dados');
  //definir a codificação de caracteres de ligação à base de dados (BD) - para ser possivel ver todos os caracteres iguais, ex: acentosm etc
  mysqli_set_charset($ligacao,'utf8');

  //verificar se existe o parametro id_apagar no URL
if(isset($_GET['id_apagar']) ){
  $id = $_GET['id_apagar'];
  //apagar registo da vase de dados
  mysqli_query($ligacao, "DELETE FROM numeros WHERE id = $id");
}

//verificar se existe informação no array $_POST
if(count($_POST) > 0){

//guardar em variáveis a informação proveniente do formulário
  $numero = $_POST['numero'];
  $descricao = $_POST['descricao'];

//inserir novo registo na tabela de artigos
mysqli_query($ligacao, "INSERT INTO numeros
(numero,descricao)
VALUES
('$numero','$descricao') ")or die(mysqli_error($ligacao));

  };

//guardar numa variável uma consulta à base de dados
  $consulta = mysqli_query($ligacao, "SELECT * FROM numeros ORDER BY id");

$numeros = array();
while($linha = mysqli_fetch_assoc($consulta)){
  $numeros[] = $linha;
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
            <h1>Editar Novidades - numeros</h1>

            <?php for($i=0;$i<count($numeros);$i++){ ?>
            <div class="item">

                <div class="lista-index">
                      
                      <h2>
                        <?php echo $numeros[$i]['numero']; ?>
                      </h2>
                  <div class="icones">
                      <a href=" numeros_editar.php?id=<?php echo $numeros[$i]['id']; ?>" class="botao_editar">
                      <img title="Editar" class="right" src="img/edit.png">
                      </img>
                    </a>
                    <a href="numeros.php?id_apagar=<?php echo $numeros[$i]['id']; ?>" title="Apagar" class="delete"><img class="delete-icon" src="img/delete.png"></img></a>
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

        <label>Número</label>
        <input type="text" name="numero"/>

        <label>Descrição</label>
        <textarea name="descricao"></textarea>

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
