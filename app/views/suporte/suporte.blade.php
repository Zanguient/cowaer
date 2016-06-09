<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <title>Suporte</title>
    <meta name="description" content="Documentação do Sistema Du Cheff">
    <meta name="author" content="Jean Fabricio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('favicon.ico')}}"/>
    <link href="{{url('plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
    
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="http://code.jquery.com/jquery.js"></script>-->
    <script src="{{url('plugins/jquery/jquery-2.1.0.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All functions for this theme + document.ready processing -->
    <script src="{{url('js/devoops.js')}}"></script>
    <style type="text/css">
	#messages-list{background-color: #fff;padding: 15px;}
	blockquote p, blockquote ul li , blockquote ol li{font-size: 14px;}
	blockquote ul li, blockquote ol li{margin: 10px;}

	</style>
  </head>

<body>

<div id="messages" class="container-fluid">
<div class="row" id="test">
	<div class="col-xs-12">
		<div class="row">
				<ul id="messages-menu" class="nav msg-menu">
					<li>
						<a href="#geral">
							Informações Gerais
						</a>
					</li>
					<li>
						<a href="#dashboard">
							Dashboard
						</a>
					</li>
					<li>
						<a href="#usuarios">
							Usuários
						</a>
					</li>
					<li>
						<a href="#clientes">
							Clientes
						</a>
					</li>
					<li>
						<a href="#cardapio">
							Cardápio
						</a>
					</li>
					<li>
						<a href="#bebidas">
							Bebidas
						</a>
					</li>
					<li>
						<a href="#produtos">
							Produtos
						</a>
					</li>
					<li>
						<a href="#categorias">
							Categorias
						</a>
					</li>
					<li>
						<a href="#adicionais">
							Adicionais
						</a>
					</li>
					<li>
						<a href="#variedades">
							Variedades
						</a>
					</li>
					<li>
						<a href="#tipos_prato">
							Tipos de Pratos
						</a>
					</li>
					<li>
						<a href="#pratos">
							Pratos
						</a>
					</li>
					<li>
						<a href="#pedidos">
							Pedidos
						</a>
					</li>
					<li>
						<a href="#estoque_produtos">
							Estoque Produtos
						</a>
					</li>
					<li>
						<a href="#estoque_bebidas">
							Estoque Bebidas
						</a>
					</li>
				</ul>
			<div id="messages-list" class="col-xs-10 col-xs-offset-2">
				<h1><i class="fa fa-life-ring fa-fw"></i> Suporte Du Cheff</h1>
				<hr><br><br>
				<div id="geral">
					<h2>Informações Gerais</h2>
					<hr>
					<p>
					    O Sistema Web Du Cheff é um sistema de gestão de pedidos multiplataforma
					    desenvolvido pela TECHMOB - Empresa Júnior da Universidade Federal de Uberlândia.
					    <br>
					    O sistema possuí mecanismos de notificações de novos pedidos e de novas mensagens
					    (Sugestões, Reclamações, Elogios). Para visualizar as novas notificações em um computador
					    desktop você poderá clicar nos ícones <i class="fa fa-bell"></i> e <i class="fa fa-envelope"></i> 
					    na 'Barra de Navegação' no topo do sistema.
					    <br>
					    <h4>Tablets</h4>
					    O sistema foi construido para ser utilizado também em Tablets, seu layout se ajusta para
					    diversos tipos e tamanhos de telas, desse modo você conseguirá visualizar suas notificações
					    no menu de acesso na Barra de Navegação no canto superior direito.<br>
					    <br>
					    <h4>Perfil</h4>
					    Para editar seu perfil clique no menu de acesso no canto superior direito e selecione '<i class="fa fa-user"></i> Perfil',
					    Todos seus dados serão exibidos em um painel, para tornar suas informações editáveis, clique
					    no icone <i class="fa fa-pencil"></i> na Barra de Ícones do painel e os campos se tornarão 
					    editaveis assim que terminar de atualizar suas informações clique em 
					    <button type="button" class="btn btn-primary btn-label-left">
						<span><i class="fa fa-check"></i></span>
							Salvar
						</button>.
						Caso deseja desfazer a edição de perfil clique no ícone <i class="fa fa-undo"></i>.
						<h4>Logout</h4>
						Para fazer o logout clique no menu de acesso no canto superior direito e selecione '<i class="fa fa-power-off"></i> Sair'.
				    </p>
				</div>
				<div id="dashboard">
					<h2>Dashboard</h2>
					<hr>
					<p>
					    O Dashboard é uma area de trabalho onde o usuário pode acessar mais rapidamente
					    algumas informações do sistema. Por exemplo: Informações de Pedidos, Clientes,
					    e widgets como calendário e outros.
				    </p>
				    <br>
					<blockquote>
						<h4 class="text-primary">Painéis de Resumo</h4>
						<p>
							Os painéis de resumo informam os principais resumos relevantes do sistema.
						</p>
						<ul>
							<li>
								O painél de cor verde escuro representa a quantidade de pedidos recebidos do dia corrente.
							</li>
							<li>
								O painél de cor amarelo representa os total de pedidos recebidos do mês.
							</li>
							<li>
								O painél de cor vermelho representa o prato mais pedido atualmente.
							</li>
						</ul>
					</blockquote>
					<br>
					<blockquote>
						<h4 class="text-primary">Dados Estatísticos</h4>
						<p>
							No dashboard na direita da tela você encontrará o menu lateral de acesso.
							Na Tab Estatísticas você encontrará os gráficos do seu sistema, para acompanhar
							seus pedidos e clientes.
							São quatro gráficos disponiveis: Gráfico de Pedidos, Graficos de Pedidos do Aplicativo, 
							Gráfico de Novos Clientes, Gráficos de pratos mais pedidos do Mês.
							<ul>
								<li><b>Gráfico de Pedidos:</b> Representa a quantidade de pedidos recebidos durante o 
									período anual. Para visualizar as informações basta posicionar o cursos do mouse
									sobre o os pontos do gráfico que uma pequena caixa de descrição irá mostrar as informações.
								</li>
								<li><b>Gráfico de Pedidos via Aplicativo:</b> 
									Representa os mesmos tipos de informação do Gráfico de Pedidos porém restringe apenas
									ao pedidos que foram recebidos via Aplicativo Mobile.
									Para visualizar as informações basta posicionar o cursos do mouse
									sobre o os pontos do gráfico que uma pequena caixa de descrição irá mostrar as informações.
								</li>
								<li><b>Gráfico Novos Clientes:</b> 
									Esse é um gráfico tipo Colunas, ele representa o volume de novos clientes cadastrados em
									cada mês no ano atual.
									Para visualizar as informações basta posicionar o cursos do mouse
									sobre o as colunas do gráfico que uma pequena caixa de descrição irá mostrar as informações.
								</li>
								<li><b>Gráfico pratos mais pedidos do mês</b>
									Esse é um gráfico tipo Pizza, ele representa em porcentagem quais são os pratos mais pedidos
									do mês até a data atual, de modo que o adminitrador pode analizar os melhores pratos.
									Para visualizar as informações basta posicionar o cursos do mouse
									sobre o gráfico que uma pequena caixa de descrição irá mostrar as informações.
								</li>
							</ul>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Clientes X Pedidos</h4>
						<p>
							Nessa área você conseguirá visualizar os dez melhores clientes.
							Você poderá acompanhar quantos pedidos o cliente tem ao todo e qual foi
							o último pedido que ele solicitou.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Calendário</h4>
						<p>
							O calendário é um Widget do sistema para auxiliar o administrador.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div> 
				<!-- Fim Dashboard -->

				<div id="usuarios">
					<h2>Usuários</h2>
					<hr>
					<p>
					    Você pode gerenciar seus usuários de modo fácil e rápido, cadastrando
					    novos registros utilizando a Aba de Cadastro, você pode consultar
					    seus dados na Aba de Pesquisa e também editar, visualizar e excluir algum
					    registro.
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessível,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Novo Usuário</h4>
						<p>
							Para cadastrar um novo usuário basta informar os campos obrigatórios
							marcados com um asterísco(*). Os campos obrigatórios para um usuário
							do sistema são: Nome, Login, Senha, Confirmação da Senha (de modo que 
							a senha e a confirmação da senha precisam ser idênticos).
							O nível de acesso representa a hierarquia que seu usuário possuirá.
							<ol>
								<li><b>Administrador:</b> Maior nível de acesso, 
									tem total controle sobre o sistema;
								</li>
								<li><b>Atendente:</b> Nível de acesso menor que o administrador porém
									possuí acesso a informações de cadastro e exclusões de registro.
								</li>
							</ol>
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Usuários</h4>
						<p>
							Para consultar um registro de usuário basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pelo usuário código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>
							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Visualização de Usuários</h4>
						<p>
							Para visualizar um usuário basta clicar no ícone <i class="fa fa-eye"></i> na coluna Ação
							da tabela de resultados, apenas as informações que não estão disponíveis nas colunas da
							tabela serão mostradas. Para ocultar os detalhes do usuário basta clicar novamente no ícone
							<i class="fa fa-eye-slash"></i>.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Edição de Usuário</h4>
						<p>
							Para editar um usuário clique no ícone <i class="fa fa-pencil-square-o"></i> uma caixa
							de modo irá aparecer com as informações do usuário já preenchidas, altere apenas os campos
							de sua preferência. Para salvar clique em <b>Salvar</b>, caso deseje cancelar a edição clique em
							<b>Cancelar</b>. Na edição apenas o <i>Nome</i> e <i>Login</i> são obrigatórios.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Usuário</h4>
						<p>
							Para excluir um usuário clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Usuarios -->
				<div id="clientes">
					<h2>Clientes</h2>
					<hr>
					<p>
					    Você pode gerenciar seus clientes de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Novo Cliente</h4>
						<p>
							O cadastro de um novo cliente pode ser realizado tanto no sistema
							Web quanto no Aplicativo.
							Para cadastrar um novo cliente basta informar os campos obrigatórios
							marcados com um asterísco(*). Os campos obrigatórios para um cliente
							são: Nome, Endereço Completo (Ex.: Rua Antonio Gomes de Marques Nº494 - Santa Helena),
							Cidade, Telefone.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Clientes</h4>
						<p>
							Para consultar um registro de cliente basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pelo cliente código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Visualização de Clientes</h4>
						<p>
							Para visualizar um cliente basta clicar no ícone <i class="fa fa-eye"></i> na coluna Ação
							da tabela de resultados, apenas as informações que não estão disponíveis nas colunas da
							tabela serão mostradas. Para ocultar os detalhes do cliente basta clicar novamente no ícone
							<i class="fa fa-eye-slash"></i>.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Edição de Cliente</h4>
						<p>
							Para editar um cliente clique no ícone <i class="fa fa-pencil-square-o"></i> uma caixa
							modal irá aparecer com as informações do cliente já preenchidas, altere apenas os campos
							de sua preferência. Para salvar clique em <b>Salvar</b>, caso deseje cancelar a edição clique em
							<b>Cancelar</b>. Na edição o <i>Nome, Endereço, Cidade, Telefone</i> são obrigatórios.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Cliente</h4>
						<p>
							Para excluir um cliente clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
							Se o cliente estiver relacionado a algum pedido, suas informações não são excluídas definitivamente
							ele apenas fica com um status de inativo, suas informações poderão ser recuperadas nos relatórios
							posteriormente.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim clientes -->
				<div id="cardapio">
					<h2>Cardápio</h2>
					<hr>
					<p>
						No gerenciamento do Cardápio você consegue cadastrar, editar, excluir e
						consultar todas as informações de pratos, bebidas e adicionais.
						Nesse módulo você consegue criar qualquer prato para o seu negócio, mas antes
						de começar você precisar entender os conceitos de: Prato, Variedades, Adicionais,
						Tipos de Pratos, Categorias.

						<ul>
							<li><b>Variedade:</b>
								A Variedade consiste em todo produto que o cliente poderá escolher em seu
								prato. Para os pratos que possuem mais de uma opção de variedade o cliente 
								poderá escolher ou todas variedades ao mesmo tempo para um mesmo prato ou quantas ele
								desejar segundo as opções pré configuradas.
								<br><br>
								<ol>
									<li>
										Exemplo: Se você criar um prato com três variedades: Penne, Espaguete, Gravatinha
										o cliente ao adicionar esse prato específico em seu pedido, poderá ou selecionar apenas um dos 
										três, ou os três ao mesmo tempo.
										Se você deseja que seu prato não permita multiplas variedades basta cadastrar diversos
										pratos com apenas uma única variedade.
									</li>
									<li>
										Exemplo: Se você deseja criar um prato uni-variedade basta criar o prato e adicionar apenas
										uma variedade para o prato.
									</li>
								</ol><br>
							</li>
							<li>
								<b>Tipo Prato:</b>
								O tipo do prato é a classe de um conjunto de pratos que você poderá criar,
								você poderá agrupar seu cardápio em tipos de pratos para melhor visualização de
								seu cliente.
								<br><br>
								Exemplo de Tipos de Pratos: Massas Comum, Massa Fresca, Mexidão, etc...
							</li>
							<li><b>Categorias:</b>
								As categorias são as classes de adicionais, você poderá agrupar seus adicionais
								em categorias, de modo que se você configurar um prato para aceitar uma categoria
								específica também aquele prato permitirá todos os adicionais cadastrados naquela 
								categoria.
								<br><br>
								Exemplo: Molhos, Guarnições, Temperos, etc...
							</li>
							<li><b>Adicional:</b>
								O adicional é o extra que seu cliente poderá escolher ao montar seu prato,
								<strong>lembra-se que o adicional não incrementa valor no total do prato,
									todo adicional que for configurado no prato já estará incluido no valor
									do mesmo.
								</strong>
								Tanto o Adicional quanto a Categoria são utilizados se você quiser permitir
								que seu cliente monte seu próprio prato escolhendo as opções disponíveis.
							</li>
							<li><b>Pratos:</b>
								O prato consiste no prato propriamente dito que você pode cadastrar, juntamente
								com o tipo do prato, ou seja, a classe que ele está relacionado no cardápio,
								e as categorias de adicionais que não são obrigatórias.
								<br><br>
								Exemplo: O prato "Macarrão Du Cheff" foi classificado como o tipo de prato "Massa Comum",
								e permite que seu cliente escolha em um mesmo prato três tipos de variedades diferentes
								"Espaguete, Penne, Gravatinha", esse prato permite as seguintes categorias "Molhos, Guarnições"
								sendo que para os Molhos o cliente poderá escolher todos os adicionais classificados como
								"Molho" (Molho 4 Queijos, Molho Vermelho, etc...) e todos os adicionais classificados como "Guarnições"
								 (Milho, Ervilha, Bacon).
							</li>
						</ul>
					</p>
				</div>
				<!-- Fim Cardapio -->
				<div id="bebidas">
					<h2>Bebidas</h2>
					<hr>
					<p>
					    Você pode gerenciar suas bebidas de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Nova Bebida</h4>
						<p>
							Para cadastrar uma nova bebida basta informar os campos obrigatórios
							marcados com um asterísco(*). Os campos obrigatórios para uma bebida
							são: Marca, Preço.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Bebidas</h4>
						<p>
							Para consultar um registro de bebida basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pela bebida código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>


						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Edição de Bebida</h4>
						<p>
							Para editar uma bebida clique no ícone <i class="fa fa-pencil-square-o"></i> uma caixa
							modal irá aparecer com as informações da bebida já preenchidas, altere apenas os campos
							de sua preferência. Para salvar clique em <b>Salvar</b>, caso deseje cancelar a edição clique em
							<b>Cancelar</b>. Na edição a <i>Marca e Preço</i> são obrigatórios.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Bebida</h4>
						<p>
							Para excluir uma bebida clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
							Se a bebida estiver relacionada a algum pedido, suas informações não são excluídas definitivamente
							ela apenas fica com um status de inativo, suas informações poderão ser recuperadas nos relatórios
							posteriormente.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Bebidas -->
				<div id="produtos">
					<h2>Produtos</h2>
					<hr>
					<p>
						O produto é o item base do sistema, tudo está relacionado com ele.
						Desde itens de estoque, até uma variedade específica é considerado produto, 
						assim se você deseja adicionar em seu estoque por exemplo Arroz, Leite, você
						precisará cadastrar o produto Arroz e Leite. Até mesmo os adicionais que você
						for criar é considerado um produto para o sistema.<br><br>

					    Você pode gerenciar seus produtos de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Novo Produto</h4>
						<p>
							Para cadastrar um novo produto basta informar os campos obrigatórios
							marcados com um asterísco(*). Os campos obrigatórios para um produto
							são: Nome do Produto.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Produto</h4>
						<p>
							Para consultar um registro de produto basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pelo produto código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>


						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Edição de Produto</h4>
						<p>
							Para editar um produto clique no ícone <i class="fa fa-pencil-square-o"></i> uma caixa
							modal irá aparecer com as informações do produto já preenchidas, altere apenas os campos
							de sua preferência. Para salvar clique em <b>Salvar</b>, caso deseje cancelar a edição clique em
							<b>Cancelar</b>. Na edição apenas o <i>Nome do Produto</i> é obrigatório.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Produto</h4>
						<p>
							Para excluir um produto clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
							Se o produto estiver relacionado a algum pedido, suas informações não são excluídas definitivamente
							ela apenas fica com um status de inativo, suas informações poderão ser recuperadas nos relatórios
							posteriormente.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Produtos -->
				<div id="categorias">
					<h2>Categorias</h2>
					<hr>
					<p>
						
					    Você pode gerenciar suas categorias de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Nova Categoria</h4>
						<p>
							Para cadastrar uma nova categoria basta informar os campos obrigatórios
							marcados com um asterísco(*). Os campos obrigatórios para uma categoria
							são: Nome da Categoria.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Categorias</h4>
						<p>
							Para consultar um registro de categoria basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pela categoria código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>


						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Edição de Categoria</h4>
						<p>
							Para editar uma categoria clique no ícone <i class="fa fa-pencil-square-o"></i> uma caixa
							modal irá aparecer com as informações da categoria já preenchidas, altere apenas os campos
							de sua preferência. Para salvar clique em <b>Salvar</b>, caso deseje cancelar a edição clique em
							<b>Cancelar</b>. Na edição apenas o <i>Nome do Categoria</i> é obrigatório.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Categoria</h4>
						<p>
							Para excluir uma categoria clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
							Se a categoria estiver relacionado a algum prato, suas informações não são excluídas definitivamente
							ela apenas fica com um status de inativo, suas informações poderão ser recuperadas nos relatórios
							posteriormente.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Categoria -->
				<div id="adicionais">
					<h2>Adicionais</h2>
					<hr>
					<p>
						
					    Você pode gerenciar seus adicionais de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Novo Adicional</h4>
						<p>
							Para cadastrar um novo adicional basta selecionar no seletor os campos obrigatórios
							marcados com um asterísco(*). Os campos obrigatórios para um adicional
							são: Categoria do Adicional, Produto.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Adicional</h4>
						<p>
							Para consultar um registro de adicional basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pelo adicional código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>


						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Edição de Adicional</h4>
						<p>
							Para editar um adicional clique no ícone <i class="fa fa-pencil-square-o"></i> uma caixa
							modal irá aparecer com as informações do adicional já preenchidas, altere apenas os campos
							de sua preferência. Para salvar clique em <b>Salvar</b>, caso deseje cancelar a edição clique em
							<b>Cancelar</b>. Na edição a <i>Categoria e o Produto</i> são obrigatórios.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Adicional</h4>
						<p>
							Para excluir um adicional clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
							Se o adicional estiver relacionado a alguma categoria, suas informações não são excluídas definitivamente
							ela apenas fica com um status de inativo, suas informações poderão ser recuperadas nos relatórios
							posteriormente.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Adicional -->
				<div id="variedades">
					<h2>Variedades</h2>
					<hr>
					<p>
						
					    Você pode gerenciar suas variedades de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Nova Variedade</h4>
						<p>
							Para cadastrar uma nova variedade basta informar os campos obrigatórios
							marcados com um asterísco(*). Os campos obrigatórios para uma variedade
							são: Nome da Variedade.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Variedades</h4>
						<p>
							Para consultar um registro de variedade basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pela variedade código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>


						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Edição de Variedade</h4>
						<p>
							Para editar uma variedade clique no ícone <i class="fa fa-pencil-square-o"></i> uma caixa
							modal irá aparecer com as informações da variedade já preenchidas, altere apenas os campos
							de sua preferência. Para salvar clique em <b>Salvar</b>, caso deseje cancelar a edição clique em
							<b>Cancelar</b>. Na edição apenas o <i>Nome do Variedade</i> é obrigatório.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Variedade</h4>
						<p>
							Para excluir uma variedade clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
							Se a variedade estiver relacionado a algum pedido ou prato, suas informações não são excluídas definitivamente
							ela apenas fica com um status de inativo, suas informações poderão ser recuperadas nos relatórios
							posteriormente.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Variedade -->
				<div id="tipos_prato">
					<h2>Tipos de Pratos</h2>
					<hr>
					<p>
						Você pode gerenciar seus tipos de pratos de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Novo Tipo de Prato</h4>
						<p>
							Para cadastrar um novo tipo de prato basta informar os campos obrigatórios
							marcados com um asterísco(*). Os campos obrigatórios para um tipo de prato
							são: Nome do tipo de prato.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Tipo de Prato</h4>
						<p>
							Para consultar um registro de tipo de prato basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pelo tipo de prato código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>


						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Edição de Tipo de Prato</h4>
						<p>
							Para editar um tipo de prato clique no ícone <i class="fa fa-pencil-square-o"></i> uma caixa
							modal irá aparecer com as informações do tipo de prato já preenchidas, altere apenas os campos
							de sua preferência. Para salvar clique em <b>Salvar</b>, caso deseje cancelar a edição clique em
							<b>Cancelar</b>. Na edição apenas o <i>Nome do tipo de prato</i> é obrigatório.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Tipo de Prato</h4>
						<p>
							Para excluir um tipo de prato clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
							Se o tipo de prato estiver relacionado a algum prato, suas informações não são excluídas definitivamente
							ela apenas fica com um status de inativo, suas informações poderão ser recuperadas nos relatórios
							posteriormente.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Tipo de Prato -->
				<div id="pratos">
					<h2>Pratos</h2>
					<hr>
					<p>
						É nesse módulo que você apenas irá configurar seu prato, visto que todas as informações
						necessárias de um prato já foram devidamente cadastradas, você poderá montar seu prato
						escolhendo as opções de Variedades, Tipo de Prato, Categorias.
						<br><br>
						Você pode gerenciar seus pratos de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Novo Prato</h4>
						<p>
							Para cadastrar um novo prato basta selecionar o tipo do prato e
							informar  os campos obrigatórios marcados com um asterísco(*). 
							Os campos obrigatórios para um prato são: Tipo do Prato,
							Nome do Prato, Preço.
							<br><br>
							<b>Fica a Dica!</b><br>
							<b>A descrição do prato não é obrigatório mas é recomendado pois
								será por meio dessa descrição que seus clientes poderão
								conhecer melhor seu prato no Aplicativo.</b>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Configurar Variedades do Prato</h4>
						<p>
							Na Aba Variedades do Prato você consegue configurar quais
							variedades um prato específico disponibilizará.
							Para fazer a configuração basta selecionar no seletor
							o prato previamente cadastrado, e a variedade também previamente
							cadastrada.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Pesquisa e Exclusão Variedades do Prato</h4>
						<p>
							A Pesquisa da Aba Variedades do Prato é um pouco diferente, você
							tem no canto superior esquerdo da tabela de informações o filtro de
							sua pesquisa, selecione o filtro desejado e digite sua consulta na
							caixa de texto no canto superior direito da tabela.
							<br>
							Para excluir a configuração de uma variedade com um prato, basta
							selecionar a configuração na tabela e clicar no ícone <i class="fa fa-trash"></i>.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Configurar Adicionais do Prato</h4>
						<p>
							Na Aba Adicionais do Prato você consegue configurar quais
							adicionais um prato específico disponibilizará.
							Para fazer a configuração basta selecionar no seletor
							o prato previamente cadastrado, e a categoria do adicional também previamente
							cadastrada e informar o limite que o cliente poderá selecionar de adicionais
							para aquela categoria, dessa forma ao salvar, aquele prato permitirá
							opções de todos os adicionais daquela categoria.
							<br>
							Se você não quiser impor um limite de adicionais, basta selecionar o Checkbox
							'Sem valor Máximo', assim seu prato permitirá escolher todas as opções daquela
							categoria de adicional.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Pesquisa e Exclusão Adicionais do Prato</h4>
						<p>
							A Pesquisa da Aba Adicionais do Prato é um pouco diferente, você
							tem no canto superior esquerdo da tabela de informações o filtro de
							sua pesquisa, selecione o filtro desejado e digite sua consulta na
							caixa de texto no canto superior direito da tabela.
							<br>
							Para excluir a configuração de um adicional com um prato, basta
							selecionar a configuração na tabela e clicar no ícone <i class="fa fa-trash"></i>.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Pesquisa de Prato</h4>
						<p>
							Para consultar um registro de prato basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							<br>
							Você também pode consultar os pratos por intervalos de preços,
							se você informar apenas o 'Valor Mínimo' sua busca retornará
							todos os valores <b>maiores que</b> o valor informado, se você informar
							o 'Valor Mínimo e o Valor Máximo' sua busca retornará todos os valores
							dentro do intervalo informado.<br>
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pelo prato código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>


						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Visualização de Prato</h4>
						<p>
							Para visualizar um prato basta clicar no ícone <i class="fa fa-eye"></i> na coluna Ação
							da tabela de resultados, apenas as informações que não estão disponíveis nas colunas da
							tabela serão mostradas. Para ocultar os detalhes do prato basta clicar novamente no ícone
							<i class="fa fa-eye-slash"></i>.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Edição de Prato</h4>
						<p>
							Para editar um prato clique no ícone <i class="fa fa-pencil-square-o"></i> uma caixa
							modal irá aparecer com as informações do prato já preenchidas, altere apenas os campos
							de sua preferência. Para salvar clique em <b>Salvar</b>, caso deseje cancelar a edição clique em
							<b>Cancelar</b>. Na edição o <i>Nome do prato, Tipo do prato e Preço</i> são obrigatórios.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Prato</h4>
						<p>
							Para excluir um prato antes você precisa excluir as referências de categorias e
							variedades daquele prato, clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
							Se o prato estiver relacionado a algum prato, suas informações não são excluídas definitivamente
							ela apenas fica com um status de inativo, suas informações poderão ser recuperadas nos relatórios
							posteriormente.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Tipo de Prato -->
				<div id="pedidos">
					<h2>Pedidos</h2>
					<hr>
					<p>
						Alem de receber pedidos via aplicativo, o sistema permite também 
						o usuário criar um pedido. Você poderá criar os pedidos de seus
						clientes que estão presenciais no estabelecimento.
						<br><br>
						Você pode gerenciar seus pedidos de modo fácil e rápido, utilize a Aba
						Cadastrar para criar um novo pedido. E utilize a Aba Pesquisar para 
						visualizar os pedidos enviados, Aceitar Pedido, Concluir Pedido, Rejeitar,
						Pagar.

					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i>
					    	<i class="fa fa-check"></i>
					    	<i class="fa fa-usd"></i>
					    	<i class="fa fa-times"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Cadastro de Novo Pedido</h4>
						<p>
							Para criar um novo Pedido você passará por três etapas, de modo que se 
							o pedido for do tipo entrega é necessário especificar um cliente para ele
							se o pedido for presencial, basta preencher os dados da mesa.
							O campo <i>Observações</i> é utilizado para especificar qualquer necessidade
							que o cliente deseje diretamente ao cheff na cozinha.<br><br>
							<b>Importante: No pedido é obrigatório os dados do cliente, e no mínimo
								um prato adicionado ao pedido. Se o pedido for do tipo 'Mesa' o número
								da mesa é obrigatório também.
							</b>
							<ul>
								<li><b>Dados do Cliente</b>
									Você precisará informar qual cliente está solicitando o pedido
									porém para facilitar, na medida em que você escreve o nome do cliente
									se ele já for um cliente cadastrado o sistema irá exibir uma caixa de
									sugestão para que você selecione o nome do mesmo. Ao selecionar o nome
									o sistema carrega todas as informações do cliente preenchendo automaticamente
									os campos para você.<br>
									Se o seu cliente ainda não é cadastrado, você precisará informar os campos obrigatórios
									(Nome Cliente, Endereço Completo, Telefone) que o sistema na medida em que o pedido
									é finalizado cadastrará automaticamente para você.
								</li>
								<li><b>Pedidos Presencial</b>
									Quando seu cliente está no estabelecimento físico, bastar informa o número da mesa
									que o pedido foi solicitado.
								</li>
								<li><b>Itens do Pedido</b>
									Para adicionar os pratos em seu pedido utilize das opções do painel "Adicionar pratos ao pedido",
									você selecionará o tipo do prato no primeiro seletor a esquerda e de acordo com
									o tipo selecionado, o segundo seletor carregará os pratos específicos daquele tipo de prato
									escolhido.
									Uma vez que você selecionar o prato no seletor da direita, as variedades configuradas daquele
									prato serão carregadas, informe quais variedades o cliente deseja em seu prato, e em seguida
									informa a quantidade de pratos solicitados.<br>
									para adicionar o item ao pedido clique no botão
									<button type="button" id="add_item" class="btn btn-primary btn-label-left">
									<span><i class="fa fa-plus"></i></span>
										Adicionar
									</button>.
								</li>
								<li><b>Selecionando os Adicionais de um Prato</b>
									Após você adicionar um prato ao seu pedido, ele irá aparecer na tabela de itens do pedido logo abaixo,
									na ultima coluna da direita, você visualizará a opção <i class="fa fa-eye"></i>, clique para abrir
									os detalhes do prato. Uma caixa de Modo irá exibir todas as categorias de adicionais que o prato
									disponibiliza, selecione os adicionais marcando os checkbox no canto direito segundo o limite
									permitido para a categoria de adicionais.<br>
									Para remover um item do seu pedido clique no ícone <i class="fa fa-times"></i> na tabela de itens,
									e seu prato será removido do pedido, se desejar limpar todos os itens clique no ícone <i class="fa fa-trash"></i>.
								</li>
								<li><b>Adicionando Bebidas</b>
									Para adicionar uma bebida ao seu pedido selecione o seletor no painel "Adicionar bebidas ao pedido",
									e escolha a quantidade, para adicionar clique no botão 
									<button type="button" class="btn btn-primary">
									<span><i class="fa fa-plus"></i></span>
									</button>.
									<br>
									Para remover uma bebida do seu pedido clique no ícone <i class="fa fa-times"></i> na tabela de bebidas,
									e a bebida será removida do pedido, se desejar limpar todas as bebidas clique no ícone <i class="fa fa-trash"></i>.
								</li>
							</ul>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Pesquisa de Pedidos</h4>
						<p>
							Para consultar um registro de pedido basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pelo pedido código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Aceitar Pedido</h4>
						<p>
							Quando um pedido é finalizado ele passa a estar com o status de 'ENVIADO',
							isso significa que o pedido já foi registrado no sistema, para que o Cheff
							possa atender aquele pedido é necessário 'Aceitar' o mesmo.
							Na Tabela de Pedidos clique no ícone <i class="fa fa-eye"></i> para visualizar os detalhes
							do pedido do cliente.
							Uma caixa modal irá exibir todas as informações do pedido do cliente e inclusive os adicionais
							que ele escolheu. Para aceitar o pedido clique no botão
							<button type="button" class="btn btn-primary">
							<span>Aceitar</span>
							</button>
							no final da tabela. Para cancelar clique no botão 
							<button type="button" class="btn btn-default">
							<span>Cancelar</span>
							</button>.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Concluir Pedido</h4>
						<p>
							Após o pedido ser 'Aceito' ele passa a ter o status de 'Aceito e Preparando' assim
							depois que o Cheff terminar de fazer o pedido do cliente, será necessário concluir
							o pedido para que o cliente saiba que seu pedido já está à caminho.
							Para concluir o pedido basta clicar no ícone <i class="fa fa-check"></i> e o pedido
							será concluído.
							<br>
							<b>Importante: Só é possivel concluir um pedido se o mesmo for aceito.</b>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Pagar Pedido</h4>
						<p>
							Após o pedido ser 'Concluido' ele passa a ter o status de 'Pronto' assim
							depois que entregador receber o pagamento do pedido e repassar para o atendente,
							o mesmo terá que finalizar o pedido do cliente. Para efetuar o pagamento do pedido
							no sistema clique no ícone <i class="fa fa-usd"></i> e o pedido será pago.
							<br>
							<b>Importante: Só é possivel pagar um pedido se o mesmo for concluído.</b>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Rejeitar Pedido</h4>
						<p>
							A qualquer momento o Macarrão Du Cheff poderá rejeitar um pedido que foi solicitado
							via aplicativo. Utilize essa opção caso o serviço não pode ser atendido.<br>
							Para rejeitar o pedido clique no ícone <i class="fa fa-times"></i>, uma caixa modal
							irá solicitar que você informe o motivo da rejeição do pedido ao cliente, para concluir
							a rejeição clique no botão 
							<button type="button" class="btn btn-danger">
							<span>Rejeitar</span>
							</button>.<br>
							<b>Importante: O motivo da rejeição é obrigatório.</b>
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Pedidos -->
				<div id="estoque_produtos">
					<h2>Estoque Produtos</h2>
					<hr>
					<p>
						O estoque de produtos permite você gerenciar os recursos de seu negócio, e fazer
						o acompanhamento durante o período em que os mesmos recursos forem se esgotando.
					    Você pode gerenciar seu estoque de produtos de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    <br><br>
					    Lembre-se que todos os lotes de seu estoque que estiverem <i>Vencidos</i> ficarão com a cor
					    de destaque em vermelho.<br><br>
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Inserindo Entrada de Estoque</h4>
						<p>
							Para inserir uma nova entrada no estoque de produtos basta informar
							os campos obrigatórios. Os campos obrigatórios do estoque de produtos
							são:Produto, Quantidade de Entrada, Medida, Data de Entrada, Data de Vencimento.
							<br>
							Utilize as observações para acrescentar alguma informação como: maneira de estocar
							um dado produto perecivel, lembretes, etc...
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Estoque de Produtos</h4>
						<p>
							Para consultar um registro no estoque basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							<br>
							O estoque também permite você realizar pesquisa por quantidade disponível,
							basta você informar a partir de qual valor (Valor Mínimo) você deseja consultar,
							ou se preferir, poderá informar um intervalo de valores (Valor Mínimo e Valor Máximo)
							para seus resultados.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pelo estoque de produto código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Visualização de Estoque de Produtos</h4>
						<p>
							Para visualizar o estoque de produto basta clicar no ícone <i class="fa fa-eye"></i> na coluna Ação
							da tabela de resultados, apenas as informações que não estão disponíveis nas colunas da
							tabela serão mostradas. Para ocultar os detalhes do estoque basta clicar novamente no ícone
							<i class="fa fa-eye-slash"></i>.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Atualização de Estoque</h4>
						<p>
							O estoque no sistema não é atualizado automaticamente, ou seja, o administrador ou
							atendente <u>semanalmente</u> deverão fazer os lançamentos de saída no estoque.
							Para fazer os lancamentos clique no ícone <i class="fa fa-pencil-square-o"></i>, uma
							caixa modal irá exibir os dados daquele lote, se desejar fazer alguma correção de alguma
							informação incorreta basta alterar o campo desejado, <b>para fazer os lançamentos de saída
							de estoque altere apenas a Quantidade Atual do lote selecionado.</b><br>
							Os campos obrigatórios na atualização de estoque são: Produto, Quantidade Atual, 
							Medida, Data de Entrada, Data de Vencimento.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Estoque</h4>
						<p>
							Para excluir um lote de seu estoque de produtos clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Estoque Produtos -->
				<div id="estoque_bebidas">
					<h2>Estoque Bebidas</h2>
					<hr>
					<p>
						O estoque de bebidas permite você gerenciar os recursos de seu negócio, e fazer
						o acompanhamento durante o período em que os mesmos recursos forem se esgotando.
					    Você pode gerenciar seu estoque de bebidas de modo fácil e rápido, cadastrando novos registros utilizando
					    a Aba de Cadastro, você pode consultar seus dados na Aba de Pesquisa e também editar,
					    visualizar e excluir algum registro.
					    <br><br>
					    Lembre-se que todos os lotes de seu estoque que estiverem <i>Vencidos</i> ficarão com a cor
					    de destaque em vermelho.<br><br>
					    Todo os módulos de gerenciamento possuem uma interface amigável e acessivel,
					    você poderá entender qualquer funcionalidade ou opção visualizando os ícones
					    de acessibilidade do sistema:
					    <span class="text-primary">
					    	<i class="fa fa-eye"></i> 
					    	<i class="fa fa-pencil-square-o"></i> 
					    	<i class="fa fa-trash"></i>
					    	<i class="fa fa-chevron-up"></i>
					    	<i class="fa fa-expand"></i>
					    	<i class="fa fa-question-circle"></i>
					    </span><br><br>

					    <b>Opções de Janelas</b><br>
					    Para minimizar o painel basta clicar no ícone no canto superior direito <i class="fa fa-chevron-up"></i>, e para 
					    maximizar o painel afim de facilitar a visibilidade clique no ícone <i class="fa fa-expand"></i>.

				    </p>
				    <p><strong class="text-danger">Nota: Todo o sistema possuí mensagens de alertas informando se sua operação
				    	foi realizada com sucesso ou se ocorreu algum erro durante o processo.</strong> <br><br>
				    	Exemplo:
				    	<div class="alert-success" role="alert">Sucesso</div><br>
						<div class="alert-info" role="alert">Informação</div><br>
						<div class="alert-warning" role="alert">Atenção</div><br>
						<div class="alert-danger" role="alert">Erro!</div><br>
				    </p>
				    <br>
				    <blockquote>
						<h4 class="text-primary">Inserindo Entrada no Estoque</h4>
						<p>
							Para inserir uma nova entrada no estoque de bebidas basta informar
							os campos obrigatórios. Os campos obrigatórios do estoque de bebidas
							são:Bebida, Quantidade de Entrada, Medida, Data de Entrada, Data de Vencimento.
							<br>
							Utilize as observações para acrescentar alguma informação como: maneira de estocar
							um dado produto perecivel, lembretes, etc...
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Pesquisa de Estoque de Bebidas</h4>
						<p>
							Para consultar um registro no estoque basta digitar sua pesquisa
							na caixa texto no canto superior direito da tabela de informações.
							<br>
							O estoque também permite você realizar pesquisa por quantidade disponível,
							basta você informar a partir de qual valor (Valor Mínimo) você deseja consultar,
							ou se preferir, poderá informar um intervalo de valores (Valor Mínimo e Valor Máximo)
							para seus resultados.
							A pesquisa não é sensível a maiúsculas ou minúsculas, ou seja, não
							importa se sua pesquisa for com maiúsculas ou minúsculas, o sistema
							recuperará todas as informações que coinscidem com a pesquisa.
							Para consultar um registro pelo código do mesmo, basta digitar o zero
							antes do código. Sua pesquisa é feita sobre todas colunas ordenáveis
							de modo que o sistema busca qualquer informação que cruze com alguma
							coluna da base de dados.<br>
							
							<b>Exemplo pesquisa pelo estoque de bebidas código 2: {<i>02</i>}</b><br><br>

							<b>Ordenando os Dados</b><br>

							Você pode ordenar os seus dados de acordo com uma coluna específica,
							basta clicar na coluna para ordenar ou por ordem crescente <i class=" text-danger fa fa-sort-asc"></i>
							ou por ordem decrescente <i class=" text-danger fa fa-sort-desc"></i><br><br>

							<b>Limitando a quantidade de resultado por página</b><br>

							Você também poderá limitar a quantidade de resultados por página, basta selecionar o seletor
							no canto superior esquerdo, o valor padrão do seletor é 10, porém você pode escolher
							outro valor dentre eles: { 25, 50, Todos}.<br><br>

							<b>Paginando os resultados</b><br>

							Todos seus resultados são paginados, para navegar de um página a outra, basta selecionar o
							número da página que você deseja ir localizado no canto inferior direito,
							ou se desejar navegar de modo sequencial você poderá apenas clicar nas setas &gt; para ir para
							a próxima página ou &lt; para voltar.
							No canto inferior esquerdo você encontrará as etiquetas de resultados, elas
							informam o total de resultados da busca e qual o intervalo de resultado que
							você está visualizando.<br><br>
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Visualização de Estoque de Bebidas</h4>
						<p>
							Para visualizar o estoque de bebidas basta clicar no ícone <i class="fa fa-eye"></i> na coluna Ação
							da tabela de resultados, apenas as informações que não estão disponíveis nas colunas da
							tabela serão mostradas. Para ocultar os detalhes do estoque basta clicar novamente no ícone
							<i class="fa fa-eye-slash"></i>.
						</p>
					</blockquote>

					<blockquote>
						<h4 class="text-primary">Atualização de Estoque</h4>
						<p>
							O estoque no sistema não é atualizado automaticamente, ou seja, o administrador ou
							atendente <u>semanalmente</u> deverão fazer os lançamentos de saída no estoque.
							Para fazer os lancamentos clique no ícone <i class="fa fa-pencil-square-o"></i>, uma
							caixa modal irá exibir os dados daquele lote, se desejar fazer alguma correção de alguma
							informação incorreta basta alterar o campo desejado, <b>para fazer os lançamentos de saída
							de estoque altere apenas a Quantidade Atual do lote selecionado.</b><br>
							Os campos obrigatórios na atualização de estoque são: Bebida, Quantidade Atual, 
							Medida, Data de Entrada, Data de Vencimento.
						</p>
					</blockquote>
					<blockquote>
						<h4 class="text-primary">Exclusão de Estoque</h4>
						<p>
							Para excluir um lote de seu estoque de bebidas clique no ícone <i class="fa fa-trash"></i> uma mensagem de confirmação
							será emitida, para confirmar a exclusão clique em <b>Sim</b> caso contrário clique em <b>Não</b>.
						</p>
					</blockquote>
					<h4><a class="pull-right" href="javascript:history.back()" title="Voltar"><i class="fa fa-chevron-circle-left"></i> Voltar</a></h4>
				</div>
				<!-- Fim Estoque Produtos -->
			</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
// Add listener for redraw menu when windows resized
window.onresize = MessagesMenuWidth;
$(document).ready(function() {
	// Add class for correctly view of messages page
	$('#content').addClass('full-content');
	// Run script for change menu width
	MessagesMenuWidth();
	
});
</script>
</body>
</html>
