<?php

  //guardar numa variável a ligação à base de dados
  $ligacao = mysqli_connect('localhost','root','','ecotuga_dados');
  //definir a codificação de caracteres de ligação à base de dados (BD) - para ser possivel ver todos os caracteres iguais, ex: acentosm etc
  mysqli_set_charset($ligacao,'utf8');


/*
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
mysqli_query($ligacao, "INSERT INTO centro
(lugar,titulo,descricao,texto,imagem)
VALUES
('$lugar','$titulo','$descricao','$texto','$imagem') ")or die(mysqli_error($ligacao));

  };
*/

//banner-destaques
//guardar numa variável uma consulta à base de dados
$consulta_destaques = mysqli_query($ligacao, "SELECT * FROM destaques ORDER BY id");

//Array que irá guardar a informação da base de dados
$destaques = array();

while($linha_destaques = mysqli_fetch_assoc($consulta_destaques)){
  $destaques[] = $linha_destaques;
};
  


//norte
//guardar numa variável uma consulta à base de dados
$consulta_norte = mysqli_query($ligacao, "SELECT * FROM norte ORDER BY id");

//Array que irá guardar a informação da base de dados
$norte = array();

while($linha_norte = mysqli_fetch_assoc($consulta_norte)){
  $norte[] = $linha_norte;
};

//centro
//guardar numa variável uma consulta à base de dados
  $consulta_centro = mysqli_query($ligacao, "SELECT * FROM centro ORDER BY id");

$centro = array();
while($linha_centro = mysqli_fetch_assoc($consulta_centro)){
  $centro[] = $linha_centro;
};

//sul
//guardar numa variável uma consulta à base de dados
  $consulta_sul = mysqli_query($ligacao, "SELECT * FROM sul ORDER BY id");

$sul = array();
while($linha_sul = mysqli_fetch_assoc($consulta_sul)){
  $sul[] = $linha_sul;
};

//numeros
//guardar numa variável uma consulta à base de dados
  $consulta_numeros = mysqli_query($ligacao, "SELECT * FROM numeros ORDER BY id");

$numeros = array();
while($linha_numeros = mysqli_fetch_assoc($consulta_numeros)){
  $numeros[] = $linha_numeros;
};

//peticoes
//guardar numa variável uma consulta à base de dados
  $consulta_peticoes = mysqli_query($ligacao, "SELECT * FROM peticoes ORDER BY id");

$peticoes = array();
while($linha_peticoes = mysqli_fetch_assoc($consulta_peticoes)){
  $peticoes[] = $linha_peticoes;
};

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>EcoTuga</title>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- Barra do Topo -->
<header id="top">

      <!-- Menu -->
      <nav id="menu">
            <div class="contentor">

            <!-- Logo -->
            <h1 class="left" href="#contentor" id="logo">EcoTuga</h1>
							
            <img id="triple_bar" class="right" src="img/triple_bar.png"></img>
            <a class="right" href="#peticoes-lista">Petições</a>
            <a class="right" href="#section-numeros">Números</a>
            <a class="right" href="#seccao_norte">Novidades</a>


            </div>
      </nav>

      <div class="clear"></div>
</header>

<!-- Conteúdo introdutório -->
<section id="intro_conteudo">
<h1 id="titulo_conteudo">A BIODIVERSIDADE EM PORTUGAL</h1>
	
	<!-- animacao -->
<div id="animacao_intro">
  <br/>
        <?php for($i=0; $i<count($destaques); $i++){ ?>
				<div class="anim_txt">
				<h2> <?php echo $destaques[$i]['destaque']; ?> </h2>
				<img class="destaques_img" src="img/<?php echo $destaques[$i]['imagem']; ?>" ></img>
				</div>
				<?php } ?>
						
</div>
      <!-- Mapa de Portugal -->
      <figure id="mapa">
                <!-- Sobreposição de imagens -->
                <img id="sul_img_back" src="img/Portugal_sul_back.svg"></img>
                <img id="sul_img" src="img/Portugal_sul.svg"></img>
                <img id="centro_img_back" src="img/Portugal_centro_back.svg"></img>
                <img id="centro_img" src="img/Portugal_centro.svg"></img>
                <img id="norte_img_back" src="img/Portugal_norte_back.svg"></img>
                <img id="norte_img" src="img/Portugal_norte.svg"></img>
      <div class="clear"></div>

      </figure>

<br/>
</section>

<!-- seccao norte -->
<div id="seccao_norte">


                 <!-- notícia completa -->
    <div id="janela_novidade_norte">

          <img src="img/fechar-janela.png" id="janela_botao_norte"></img>

          <div class="janela-conteudo">
          ____________________________
          </div>
    </div>

    <img id="seta_dir_norte" class="seta_direita" src="img/seta_dir.png"></img>
    <img id="setas_esq_norte" class="seta_esquerda" src="img/seta_esq.png"></img>




    <div class="novidades_overflow">
         <!-- Novidade 1 -->
         <?php for($i=0; $i<count($norte); $i++){ ?>
         <div class="novidade_norte <?php if($norte[$i]['id'] == 1){echo 'primeira_novidade';}?>">

             <div class="imagem">
                 <img src="img/<?php echo $norte[$i]['imagem']; ?>"></img>
             </div>
             <div class="novidade-texto">


             	   <h1 class="distrito">
               	 <?php echo $norte[$i]['lugar']; ?>
               	 </h1>
                 <h2>
                 <?php echo $norte[$i]['titulo']; ?>
                 </h2>

                 <h4>
                 <?php echo $norte[$i]['descricao']; ?>
                 </h4>

                 <p>
                 <?php echo $norte[$i]['texto']; ?>
                 </p>
             </div>
               <div class="clear"></div>
         </div>
         <?php } ?>
         <!-- Fim novidade -->

    </div>
    <div class="clear"></div>
</div>


<!-- seccao centro -->
<div id="seccao_centro">


                 <!-- notícia completa -->
    <div id="janela_novidade_centro">

          <img src="img/fechar-janela.png" id="janela_botao_centro"></img>

          <div class="janela-conteudo">
          ____________________________
          </div>
    </div>

    <img id="seta_dir_centro" class="seta_direita" src="img/seta_dir.png"></img>
    <img id="setas_esq_centro" class="seta_esquerda" src="img/seta_esq.png"></img>




    <div class="novidades_overflow">
         <!-- Novidade 1 -->
				 <?php for($i=0; $i<count($centro); $i++){ ?>
         <div class="novidade_centro <?php if($centro[$i]['id'] == 1){echo 'primeira_novidade';}?>">

             <div class="imagem">
                 <img src="img/<?php echo $centro[$i]['imagem']; ?>"></img>
             </div>
             <div class="novidade-texto">


                <h1 class="distrito">
                <?php echo $centro[$i]['lugar']; ?>
                </h1>
                 <h2>
                 <?php echo $centro[$i]['titulo']; ?>
                 </h2>

                 <h4>
                 <?php echo $centro[$i]['descricao']; ?>
                 </h4>

                 <p>
                   <?php echo $centro[$i]['texto']; ?>
                 </p>
             </div>
               <div class="clear"></div>
         </div>
				 <?php } ?>
         <!-- Fim novidade -->

    </div>
    <div class="clear"></div>
</div>


<!-- seccao sul -->
<div id="seccao_sul">


                 <!-- notícia completa -->
    <div id="janela_novidade_sul">

          <img src="img/fechar-janela.png" id="janela_botao_sul"></img>

          <div class="janela-conteudo">
          ____________________________
          </div>
    </div>

    <img id="seta_dir_sul" class="seta_direita" src="img/seta_dir.png"></img>
    <img id="setas_esq_sul" class="seta_esquerda" src="img/seta_esq.png"></img>




    <div class="novidades_overflow">
         <!-- Novidade 1 -->
				 <?php for($i=0; $i<count($sul); $i++){ ?>
         <div class="novidade_sul <?php if($sul[$i]['id'] == 1){echo 'primeira_novidade';}?>">

             <div class="imagem">
                 <img src="img/<?php echo $sul[$i]['imagem']; ?>"></img>
             </div>
             <div class="novidade-texto">


                <h1 class="distrito">
                <?php echo $sul[$i]['lugar']; ?>
                </h1>
                 <h2>
                   <?php echo $sul[$i]['titulo']; ?>
                 </h2>

                 <h4>
                 <?php echo $sul[$i]['descricao']; ?>
                 </h4>

                 <p>
                   <?php echo $sul[$i]['texto']; ?>
                 </p>
             </div>
               <div class="clear"></div>
         </div>
				 <?php } ?>
         <!-- Fim novidade -->

    </div>
    <div class="clear"></div>
</div>


<section id="section-numeros">
    <h1 id="titulo-numeros">NÚMEROS</h1>
    <br/>
    <br/>
      <div id="contentor-numeros">
				
				<?php for($i=0; $i<count($numeros); $i++){ ?>
        <div class="artigo-numero">
        <div class="numero" data-count="<?php echo $numeros[$i]['numero']; ?>"> 0 </div>
        <div class="subtitulo-numero"> <?php echo $numeros[$i]['descricao']; ?> </div>
        </div>
				<?php } ?>
      </div>
         <div class="clear"></div>
</section>

<!-- Petições  -->
	<!--<div id="peticoes-janela">

               <img src="img/fechar-janela.png" id="janela-botao"/>

               <div id="peticoes-conteudo">
              __________________________


               </div>
           </div>  --->

       <div id="peticoes-lista">
 <h1 id="titulo-peticoes">PETIÇÕES</h1>
         <!-- petição 1 -->
				 <?php for($i=0; $i<count($peticoes); $i++){ ?>
         <div class="peticao">
					 <div class="peticao_menos">
						 <div class="peticao_scroll">-</div>
						</div>
					 <div class="peticao_mais">
						 <div class="peticao_scroll">+</div>
						</div>
					 
             <div class="imagem">
                 <img src="img/<?php echo $peticoes[$i]['imagem']; ?>" />
             </div>
					 	 <div class="contentor_scroll">
             <div class="peticao-texto">
                 <h3>
                   <?php echo $peticoes[$i]['titulo']; ?>
                 </h3>

                 <h4>
                  <?php echo $peticoes[$i]['descricao']; ?>
                 </h4>
									
							 
                    <div class="peticao-formulario">
                        <p>Apoie esta Petição. Assine e divulgue. O seu apoio é muito importante.</p>
                        <form action="index.html" method="post" class="subscribe-form">
                          <input type="email" name="email" class="subscribe-input-peticao" placeholder="Email" />
                          <input type="text" name="email" class="subscribe-input-peticao" placeholder="Número de c.c." />
                          <input type="text" name="email" class="subscribe-input-peticao" placeholder="NIF" />
													<div class="peticao_gradient">
													<button type="submit" class="subscribe-submit">Assinar Petição</button>
													</div>
												</form>
                    </div>
							 
             </div>
					 </div>
					 
         </div>
				 <?php } ?>

         <!-- fim petição -->

        </div>

  <div class="clear"></div>

    </div>

<section class="subscribe">
    <div class="subscribe-pitch">
      <h3 class="titulo-newsletter"> NEWSLETTER </h3>
      <p class="texto-newsletter">Subscreve a nossa Newsletter para ficares sempre a par das últimas novidades.</p>

    </div>


 <form action="index.html" method="post" class="subscribe-form">
      <input type="email" name="email" id="subscribe-input-news" placeholder="Email"/>
      <button type="submit" id="subscribe-submit-news">Subscrever</button>
    </form>


  </section>

   <footer id="rodape">
        	Copyright © 2018 <b>EcoTuga</b> by Cristiano Ferro 9234 | Joana Perre 9272 | Matilde Reis 9261
        </footer>



<!-- javascript -->
<script type="application/javascript" src="js/jquery.js"></script>
<script type="application/javascript" src="js/script.js"></script>
</body>
</html>