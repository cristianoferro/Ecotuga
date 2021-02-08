-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 07-Jan-2018 às 18:29
-- Versão do servidor: 5.5.38-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `ecotuga_dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `centro`
--

CREATE TABLE IF NOT EXISTS `centro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar` text NOT NULL,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  `outro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `centro`
--

INSERT INTO `centro` (`id`, `lugar`, `titulo`, `descricao`, `texto`, `imagem`, `outro`) VALUES
(1, 'Guarda', 'Entre as 1730 novas espécies de plantas de 2016 há alimentos e curas', 'É a segunda edição do relatório anual produzido pelos Jardins Botânicos Reais de Kew sobre o Estado das Plantas do Mundo que envolveu 128 cientistas de 12 países diferentes.', 'Os cientistas descobriram 1730 espécies novas de plantas em 2016, uma delas encontra-se em alguns locais da Península Ibérica onde se inclui a serra da Estrela, em Portugal. Mais de 28 mil espécies têm os seus usos medicinais documentados e o número de plantas com genomas completos sequenciados aumentou 60% em relação ao ano anterior, chegando agora às 225 espécies. Todos estes dados e muitos outros estão na segunda edição do relatório anual sobre o Estado das Plantas do Mundo (State of the World’s Plants), elaborado pelos Jardins Botânicos Reais de Kew, perto de Londres, divulgado esta semana.<br>\r\n\r\n Entre as mais de 1700 espécies de plantas descritas pela primeira vez em 2016 há algumas que podem começar a fazer parte da nossa dieta. É o caso das cinco novas espécies brasileiras que pertencem ao género Manihot, o mesmo da conhecida e consumida mandioca.\r\n                       ', 'novidade-4.jpg', ''),
(2, 'Abrantes', 'Rio Tejo está em risco de secar completamente', 'Os níveis das barragens espanholas encontram-se nos 11% por causa da seca no país.', 'O rio Tejo está em risco de secar completamente. Pelo menos é o que diz Miguel Ángel Sánchez, porta-voz da organização Plataforma em Defesa do Tejo. O rio está em perigo por causa de uma “combinação das alterações climáticas, da transferência de água e dos resíduos poluentes provenientes de Madrid”, denuncia Miguel Ángel Sánchez, citado pelo jornal “The Guardian”. <br>\r\n\r\nA quantidade de água disponível foi mal calculada e as secas cíclicas em Espanha não foram tidas em conta. Hoje, apenas 47% dos recursos hídricos estão disponíveis e os níveis das barragens encontram--se nos 11%, um valor muito baixo para se proceder a transferências.\r\n                      ', 'novidade-5.png', ''),
(3, 'Coimbra', 'Cascais doa árvores e ovelhas ao concelho da Pampilhosa da Serra', 'O município de Cascais entregou hoje 1.500 árvores e 15 ovelhas à população da Pampilhosa da Serra.', ' O presidente da Câmara de Cascais, Carlos Carreiras, salientou a importância de “todos apoiarem os concelhos mais afetados pelos incêndios”, para que a vida das pessoas “regresse rapidamente à normalidade” e possa avançar a reflorestação das áreas ardidas.<br>\r\n\r\n   “Temos de voltar a dar vida a estas terras”, disse o autarca do PSD, que quis testemunhar pessoalmente a solidariedade de Cascais ao município liderado por José Brito.\r\n\r\n   Na sua opinião, “há uma dívida que todo o país tem em relação aos territórios afetados” pelos fogos dos últimos meses.\r\n                       ', 'novidade-6.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE IF NOT EXISTS `destaques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destaque` text NOT NULL,
  `imagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `destaque`, `imagem`) VALUES
(1, 'Clique no mapa para aceder às novidades de cada zona do país.', 'destaque-1.jpg'),
(2, 'É importante tomar uma posição. Assine petições e apoie as causas!', 'destaque-2.jpg'),
(3, 'Veja também algumas curiosidades do país na secção números.', 'destaque-3.jpg'),
(4, 'O EcoTuga é um guia para quem tem vontade de ajudar o ambiente.', 'destaque-4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `norte`
--

CREATE TABLE IF NOT EXISTS `norte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar` text NOT NULL,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  `outro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `norte`
--

INSERT INTO `norte` (`id`, `lugar`, `titulo`, `descricao`, `texto`, `imagem`, `outro`) VALUES
(1, 'Bragança', 'Há um novo mamífero em Portugal', 'Espécie vive nas montanhas do Parque de Montesinho, em Bragança, e foi observada pela primeira vez por um fotógrafo de vida selvagem.', 'Trata-se de um roedor com "longos bigodes (vibrissas) brancos, patas posteriores muito\r\n                       desenvolvidas e cauda comprida, é pardo, com tons que variam entre o cinzento e o branco\r\n                       e concentra-se exclusivamente em regiões montanhosas". <br>\r\n\r\n                      A espécie cientificamente chamada ''Chionomys nivalis'' acaba de dar entrada no registo de mamíferos em Portugal,\r\n                        graças à colaboração do Centro de Investigação e de Tecnologias Agroambientais e Biológicas\r\n                        (CITAB) e do Centro de Investigação em Biodiversidade e Recursos Genéticos (CIBIO-InBIO) da UTAD,\r\n                        como divulgou hoje a universidade.', 'novidade-1.jpg', ''),
(2, 'Viana do Castelo', 'Reflorestação das áreas ardidas na Peneda-Gerês', 'Programa-piloto pretende recuperar as áreas mais icónicas do parque que ficaram afectadas pelos incêndios.', ' O ministro do Ambiente, João Pedro Matos Fernandes, declarou esta terça-feira que,\r\n                         no âmbito do programa-piloto de combate estrutural aos incêndios, foram lançados\r\n                         concursos para o Parque Nacional da Peneda-Gerês, cujo financiamento total ronda\r\n                         os 8,6 milhões de euros.<br>\r\n\r\n                         "Foram lançados ontem [segunda-feira] os concursos para a recuperação de algumas das\r\n                         áreas mais emblemáticas do parque que foram afectadas por fogos florestais.\r\n                         Refiro-me, concretamente, à recuperação das matas do Mezio e do Ramiscal e também\r\n                         aos programas de recuperação das matas de teixos e de prevenção estrutural da Mata\r\n                         Nacional do Gerês (...)", afirmou o ministro.', 'novidade-2.jpg', ''),
(3, 'Viana do Castelo', 'Dois milhões para promover a Peneda-Gerês', 'O Projecto Europeu de Dinamização da Reserva da Biosfera Transfronteiriça Gerês-Xurés visa promover os territórios de Portugal e de Espanha em conjunto para atrair mais turismo à região.', '“A ideia é, por um lado, preservar e conservar aquele património cultural e natural, mas, por outro, é promover o desenvolvimento socio-económico, com um turismo que se pretende sustentável, mas que garanta a manutenção de pessoas na região”, resumiu ao PÚBLICO Ester Gomes da Silva, vice-presidente da CCDR do Norte, uma das instituições lusas que integra o projecto, a par da Adere Peneda-Gerês e do Turismo do Porto e Norte de Portugal, e que é a habitual interlocutora da Xunta de Galicia em projectos comuns às duas regiões.<br>\r\n\r\n                        Com implementação prevista até 31 de dezembro de 2019 e financiamento oriundo do Programa Operacional de Cooperação Transfronteiriça Espanha-Portugal, a iniciativa prevê a atribuição de 900 mil euros à zona portuguesa da Reserva e os restantes 1,1 milhões à zona espanhola, visando não só promover a reserva aos visitantes, mas também aos habitantes e às escolas de ambos os lados da fronteira, reiterou Sónia Almeida, administradora delegada da Adere Peneda-Gerês, que apresentou o projecto na Galiza.', 'novidade-3.jpg', ''),
(4, 'Douro', 'União Internacional para a Conservação da Natureza', 'União Internacional para a Conservação da Natureza considera que Portugal e Espanha "devem coordenar esforços para promover o uso sustentável da água e a proteção de ecossistemas aquáticos".', 'A União Internacional para a Conservação da Natureza considera que Portugal e Espanha “devem coordenar esforços para promover o uso sustentável da água e a proteção de ecossistemas aquáticos”. A recomendação consta no relatório, divulgado nesta quinta-feira, “Áreas-chave da biodiversidade de água doce na sub-região do noroeste do Mediterrâneo” e tem como um dos enfoques os recursos ribeirinhos transfronteiriços de Portugal e Espanha, como os rios Douro e Tejo.', '23083627_770x433_acf_cropped.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `numeros`
--

CREATE TABLE IF NOT EXISTS `numeros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` text NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `numeros`
--

INSERT INTO `numeros` (`id`, `numero`, `descricao`) VALUES
(1, '330', 'Patentes Europeias verdes em 2016'),
(2, '8', 'Espécies da flora portuguesa em perigo crítico'),
(3, '159', 'Espécies de animais estão em perigo de extinção em Portugal'),
(4, '43', 'Espécies de animais vulneráveis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `peticoes`
--

CREATE TABLE IF NOT EXISTS `peticoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `imagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `peticoes`
--

INSERT INTO `peticoes` (`id`, `titulo`, `descricao`, `imagem`) VALUES
(1, 'Por um circo livre de animais', 'É tempo de evoluirmos e de deixarmos de usar animais como forma de entretenimento, pervertendo toda a sua natureza e, consequentemente, fazendo de nós uma sociedade menos civilizada e atrasada no tempo.', 'peticao-1.jpg'),
(2, 'Por um Portugal Livre de Incêndios', 'Os tempos apocalípticos, em termos ecológicos e sociais, vividos nas últimas semana e meses em Portugal obrigam-me a escrever esta carta aos mais altos responsáveis pelo nosso querido país, jardim à beira-mar plantado, e que tem sido tão maltratado pelos seus sucessivos governos e presidências, e também, em parte, pelo seu povo.', 'peticao-2.jpg'),
(3, 'Pela Construção de Paisagens de Retenção de Água', 'Muitas áreas florestais em Portugal, por exemplo, estão dominadas por monoculturas de pinheiro e eucalipto que são muito susceptíveis a incêndios e erosão, como também não oferecem espaço para a existência outras espécies.', 'peticao-3.jpg'),
(4, 'Pela Protecção dos Animais em Portugal', 'As cidadãs e os cidadãos abaixo assinados vêm, pedir à Assembleia da República o seguinte: Que aprove e implemente uma Nova Lei de Protecção dos Animais, que considere todos os pontos,ou o maior número de pontos possível, do Projecto-Lei apresentado pela Associação ANIMAL.', 'peticao-4.jpg'),
(5, 'Pela suspensão das obras na Ponta da Piedade', 'A Ponta da Piedade representa o mais emblemático ex-líbris de Lagos e um dos mais notáveis do Algarve, face aos seus reconhecidos atributos paisagísticos, geológicos, geomorfológicos, paleontológicos, naturais e históricos.', 'peticao-5.jpg'),
(6, 'Pela abolição do Plástico descartável em Portugal', 'Importa minimizar o impacto ecológico que estes produtos têm no meio ambiente e na vida marinha. Estamos a chegar ao limite do impacto ambiental com possível não retrocesso. É urgente mudar.', 'peticao-6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sul`
--

CREATE TABLE IF NOT EXISTS `sul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar` text NOT NULL,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  `outro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `sul`
--

INSERT INTO `sul` (`id`, `lugar`, `titulo`, `descricao`, `texto`, `imagem`, `outro`) VALUES
(1, 'Faro', 'Descobertas duas novas espaçoecies em Faro e Albufeira', 'Pertencem ao filo Kinorhyncha, as primeiras descritas em Portugal, duas delas totalmente novas e foram encontradas em amostragens realizadas no Algarve.', 'São espécies do filo Kinorhyncha, as primeiras descritas em Portugal, duas delas são totalmente novas para a ciência e foram encontradas em amostragens realizadas na costa algarvia, por um biólogo que contou com o apoio de investigadores do Centro de Ciências do Mar (CCMAR). <br>\r\n\r\nA meiofauna é composta por animais com dimensões entre um milímetro e 38 micrómetros, que vivem entre os grãos de areia ou no lodo dos ecossistemas aquáticos. Tendo representantes de vários grupos de animais – os designados filos – esta comunidade é importantíssima para o estudo da biodiversidade e, até, para a tomada de decisões políticas em prol de um desenvolvimento ambiental sustentado.\r\n                  ', 'novidade-7.jpg', ''),
(2, 'Lagos', 'Camaleões há muitos, mas os do Algarve são únicos', 'O camaleão, que já serviu de argumento para não se deitarem casas clandestinas abaixo — as mesmas que o ameaçam — é a estrela de uma exposição para celebrar os 39 anos do Parque Natural da Ria Formosa.', '   O camaleão-comum (Chamaeleo chamaeleon) é uma espécie que, em Portugal, só existe no Algarve, correndo risco extinção. A maior ameaça aos habitats deste réptil, lembra o Parque Natural da Ria Formosa (PNRF), é a “incessante pressão urbanística e turística existente em toda a faixa costeira algarvia”. Com o objectivo de chamar a atenção para este e outros problemas relacionados com a conservação da natureza, o PNRF abre o programa das comemorações do 39.º aniversário daquela área protegida, a 2 de Maio, com a abertura de uma exposição de pintura sobre os “ciclos de vida do camaleão”, da autoria de Manuela Santos — uma arquitecta paisagista que projecta na tela sentimentos e preocupações ambientais.<br>\r\n\r\nNesta altura do ano, ainda não dão sinais de avistamento de camaleões no pinhal da Quinta do Marim ou na vegetação das dunas. Porém, as 15 aguarelas de Manuela Santos mostram, pela expressão plástica, alguns aspectos curiosos do animal. Um exemplo: durante o Verão, entre Junho e Setembro, os machos não param de “piscar o olho” às fêmeas, em busca do acasalamento.\r\n                    ', 'novidade-8.jpg', ''),
(3, 'Beja', 'Alentejo sustentável: um objetivo, uma estratégia', 'Os aumentos da temperatura e a diminuição da precipitação fazem do Alentejo uma das regiões da Europa mais afetadas pelas alterações climáticas.', ' A necessária Estratégia Regional de Adaptação às Alterações Climáticas no Alentejo (ERAACA) foi agora lançada, numa parceria entre a Comissão de Coordenação Regional do Alentejo (CCDRA) e a Universidade de Évora.<br>\r\n\r\nA candidatura ERAACA, liderada pela CCDRA, apresentada ao Programa Operacional Sustentabilidade e Eficiência no Uso de Recursos (POSEUR), dispõe de 1 milhão de Euros de financiamento para dotar a região do Alentejo das estratégias e competências e capacidades institucionais necessárias para promover a adaptação às alterações climáticas com base na articulação de medidas transversais, setoriais e territoriais.\r\n                      ', 'novidade-9.jpg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
