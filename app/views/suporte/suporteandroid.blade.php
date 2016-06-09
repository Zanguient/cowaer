<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <title>Ajuda</title>
    <meta name="description" content="Suporte Aplicativo Du Cheff">
    <meta name="author" content="Jean Fabricio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('favicon.ico')}}"/>
    <link href="{{url('plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="http://code.jquery.com/jquery.js"></script>-->
    <script src="{{url('plugins/jquery/jquery-2.1.0.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('plugins/bootstrap/bootstrap.min.js')}}"></script>
    
  </head>

<body>

<div class="container">
	<h2 class="text-primary">Ajuda</h2>
	<br>
	<h4>Selecione abaixo qual assunto você deseja tratar.</h4>
	<hr>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	  <div class="panel panel-primary">
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#perfil" aria-expanded="false" aria-controls="perfil">
	         Como visualizar e atualizar meus dados?
	        </a>
	      </h4>
	    </div>
	    <div id="perfil" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">
	        <p class="text-justify">
	        	<h5>Ver Perfil</h5>
	        	<ul>
	        		<li>Clique no ícone ( <i class="text-primary fa fa-bars"></i> )
	        			selecione a opção <b>'Meu Perfil'</b> no menu lateral.
	        		</li>
	        		<li>Altere as informações que você julgar necessárias</li>
	        		<li>clique no botão <b>'Atualizar'</b> no final da página.</li>
	        	</ul>
	        	Caso nenhuma informação seja modificada a seguinte mensagem será exibida: <i>'Nenhum dado foi alterado!'</i>, 
	        	se a atualização ocorrer com sucesso a seguinte mensagem será exibida: <i>'Os dados foram atualizados com sucesso!'</i>.
	        	<br><br>
	        	<b>IMPORTANTE: O Macarrão Du Cheff utiliza dos dados dos clientes para fazer as entregas com qualidade
	        		e rapidez, é importante que seus dados sejam sempre atualizados.</b>
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-primary">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#perda_senha" aria-expanded="false" aria-controls="perda_senha">
	          Esqueci meu Login e Senha
	        </a>
	      </h4>
	    </div>
	    <div id="perda_senha" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	        <p>
	        	Você pode resgatar seu login e senha recebendo em seu email, para isso
	        	siga os passos abaixo:
	        	<ul>
	        		<li>Navegue até a tela de <b>'Login'</b></li>
	        		<li>Clique em 'Recuperar informações'</li>
	        		<li>Preencha seu Email e clique em <b>'Recuperar'</b></li>
	        		<li>Um email será encaminhado para você com seu login e senha redefinidos</li>
	        	</ul>
	        	<b>Importante: Altere seu login e senha assim que possível</b>
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-primary">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#login" aria-expanded="false" aria-controls="login">
	          Manter-se sempre logado
	        </a>
	      </h4>
	    </div>
	    <div id="login" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	        <p>
	        	O Macarrão Du Cheff cria uma sessão de acesso privado e seguro para seus clientes, uma vez logado
	        	os seus dados são armazenados somente no seu aparelho, assim você não precisará ficar efetuando
	        	a login para cada vez que desejar utilizar o Aplicativo Du Cheff.
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-primary">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#logout" aria-expanded="false" aria-controls="logout">
	          Como fazer o Logout?
	        </a>
	      </h4>
	    </div>
	    <div id="logout" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	        <p>
	        	<h5>Logout</h5>
	        	<ul>
	        		<li>Navegue para a tela <b>'Home'</b> do aplicativo.</li>
	        		<li>Clique no ícone <i class="fa fa-power-off"></i>.</li>
	        	</ul>
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-primary">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#acompanhamento" aria-expanded="false" aria-controls="acompanhamento">
	          Como visualizar e acompanhar meus pedidos?
	        </a>
	      </h4>
	    </div>
	    <div id="acompanhamento" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	        <p>
	        	O Macarrão Du Cheff permite que você acompanhe seu pedido desde o envio até a entrega em sua residência.
	        	<h5>Acompanhar Pedido</h5>
	        	<ul>
	        		<li>Navegue para a tela <b>'Home'</b> do aplicativo.</li>
	        		<li>Clique no ícone ( <i class="text-primary fa fa-bars"></i> )
	        			selecione a opção <b>'Meus Pedidos'</b> no menu lateral.
	        		</li>
	        		<li>Selecione o pedido que você deseja visualizar.</li>
	        	</ul>
	        	
	        	<h5>Cancelar Pedido</h5>
	        	<ul>
	        		<li>Navegue para a tela <b>'Home'</b> do aplicativo.</li>
	        		<li>Clique no ícone ( <i class="text-primary fa fa-bars"></i> )
	        			selecione a opção <b>'Meus Pedidos'</b> no menu lateral.
	        		</li>
	        		<li>Selecione o pedido que você deseja visualizar.</li>
	        		<li>Clique no botão <b>'Cancelar Pedido'</b> no final da página.</li>
	        		<li>Confirme o cancelamento clicando na opção <b>'Sim'</b></li>
	        	</ul>
	        	<h5>Ver Detalhes dos Pratos</h5>
	        	<ul>
	        		<li>Na tela <b>'Acompanhamento'</b> após selecionar um pedido clique sobre
	        		o prato na lista <i>'Detalhes do Pedido'</i> e uma caixa de dialogo irá
	        		exibir os detalhes do prato selecionado. </li>
	        	</ul>

	        	<b>Todas as informações são carregadas apenas uma única vez, para visualizar novas atualizações
	        		volte para a tela 'Home' e selecione seu pedido novamente, e as atualizações serão exibidas.
	        	</b>
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-primary">
	    <div class="panel-heading" role="tab" id="headingThree">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#preferencias" aria-expanded="false" aria-controls="preferencias">
	          Como adicionar um pedido em Minhas Prefêrencias?
	        </a>
	      </h4>
	    </div>
	    <div id="preferencias" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	      <div class="panel-body">
	        <p>
	        	<h5>Adicionar Pedido as Preferências</h5>
	        	<ul>
	        		<li>Na tela de <b>'Pedidos'</b> clique no ícone ( <i class="fa fa-ellipsis-v"></i> )
	        			no canto superior à direita, ou clique no botão 'Menu' de seu aparelho.
	        		</li>
	        		<li>Selecione Adicionar Preferência</li>
	        	</ul>
	        	<h5>Visualizando Minhas Preferências</h5>
	        	<ul>
	        		<li>Navegue para a tela <b>'Home'</b> do aplicativo.</li>
	        		<li>Clique no ícone ( <i class="text-primary fa fa-bars"></i> )
	        			Selecione a opção <b>'Preferências'</b>
	        		</li>
	        		<li>Selecione uma preferência</li>
	        	</ul>

	        	Após selecionar uma de suas preferências ela será carregada na tela
	        	pedidos, caso deseje poderá adicionar um novo item ao seu pedido.
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-primary">
	    <div class="panel-heading" role="tab" id="headingThree">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#sugestoes" aria-expanded="false" aria-controls="sugestoes">
	          Reclamações, Elogios, Sugestões
	        </a>
	      </h4>
	    </div>
	    <div id="sugestoes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	      <div class="panel-body">
	        <p>
	        	O Macarrão Du Cheff busca oferecer o melhor serviço de atendimento para seus clientes, você poderá
	        	enviar ou sua reclamação, elogio ou sugestão no próprio aplicativo.

	        	<h5>Enviando Sugestões</h5>
	        	<ul>
	        		<li>Navegue para a tela <b>'Home'</b> do aplicativo.</li>
	        		<li>Clique no ícone ( <i class="text-primary fa fa-bars"></i> )
	        			Selecione a opção <b>'Sugestões'</b>
	        		</li>
	        		<li>Selecione o Tipo de Mensagem para Sugestão</li>
	        		<li>Após preencher sua mensagem clique no botão <b>'Enviar'</b></li>
	        	</ul>

	        	<h5>Enviando Reclamações</h5>
	        	<ul>
	        		<li>Navegue para a tela <b>'Home'</b> do aplicativo.</li>
	        		<li>Clique no ícone ( <i class="text-primary fa fa-bars"></i> )
	        			Selecione a opção <b>'Sugestões'</b>
	        		</li>
	        		<li>Selecione o Tipo de Mensagem para Reclamação</li>
	        		<li>Após preencher sua mensagem clique no botão <b>'Enviar'</b></li>
	        	</ul>

	        	<h5>Enviando Elogios</h5>
	        	<ul>
	        		<li>Navegue para a tela <b>'Home'</b> do aplicativo.</li>
	        		<li>Clique no ícone ( <i class="text-primary fa fa-bars"></i> )
	        			Selecione a opção <b>'Sugestões'</b>
	        		</li>
	        		<li>Selecione o Tipo de Mensagem para Elogio</li>
	        		<li>Após preencher sua mensagem clique no botão <b>'Enviar'</b></li>
	        	</ul>

	        	<b>O cliente receberá uma mensagem em seu Email com nossa resposta.</b>
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-primary">
	    <div class="panel-heading" role="tab" id="headingThree">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#pedidos" aria-expanded="false" aria-controls="pedidos">
	          Como fazer um Pedido?
	        </a>
	      </h4>
	    </div>
	    <div id="pedidos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	      <div class="panel-body">
	        <p>
	        	<h5>Acessando a tela de Pedidos</h5>
	        	<ul>
	        		<li>Navegue para a tela <b>'Home'</b> do aplicativo.</li>
	        		<li>Clique no botão <b>'Fazer Pedido'</b></li>
	        	</ul>

	        	<h5>Adicionando uma Bebida ao seu pedido</h5>
	        	<ul>
	        		<li>
	        			Na tela de Pedido clique no botão <b>'Adicionar Bebida'</b>
	        			na categoria bebidas (Faixa Amarelo).
	        		</li>
	        		<li>
	        			Após clicar você será direcionado para a tela de Bebidas, selecione uma bebida
	        			de sua preferência, caso não encontre você poderá utilizar a pesquisa
	        			clicando no ícone ( <i class="fa fa-search"></i> ) no canto superior 
	        			à direita.
	        		</li>
	        		<li>Ao clicar sobre a bebida você será direcionado para o detalhes da bebida,
	        			informe a quantidade em unidades que você deseja adicionar.
	        		</li>
	        		<li>Para finaliar clique no botão <b>'Adicionar bebida'</b></li>
	        	</ul>

	        	<h5>Adicionando um Prato ao seu pedido</h5>
	        	<ul>
	        		<li>
	        			Na tela de Pedido clique no botão <b>'Adicionar Prato'</b>
	        			na categoria pratos (Faixa Vermelho Escuro).
	        		</li>
	        		<li>
	        			Após clicar você será direcionado para a tela de Cardápio, selecione uma categoria,
	        			caso não encontre você poderá utilizar a pesquisa clicando no ícone
	        			 ( <i class="fa fa-search"></i> ) no canto superior 
	        			à direita.
	        		</li>
	        		<li>Ao clicar sobre o cardápio você será direcionado para a lista de pratos
	        			da categoria do cardápio escolhida. Selecione um prato de sua preferência,
	        			caso não encontre você poderá utilizar a pesquisa clicando no ícone
	        			 ( <i class="fa fa-search"></i> ) no canto superior 
	        			à direita.
	        		</li>
	        		<li>Ao clicar sobre o prato você será direcionado para o detalhes da prato,
	        			onde você poderá montar seu prato a seu gosto.
	        		</li>
	        		<li> Veja <b>'Montando meu Prato'</b></li>
	        	</ul>

	        	<h5>Montando meu Prato</h5>
	        	<ul>
	        		<li>Na tela de Detalhes do prato, após selecionar a categoria do cardápio
	        			e o prato, você visualizará todas as variedades e adicionais do prato
	        			escolhido.
	        		</li>
	        		<li>Selecione as variedades que deseja misturar em seu prato.</li>
	        		<li>Em seguida, selecione os adicionais como acompanhamentos de seu
	        			prato segundo os limites de adicionais para cada categoria.
	        		</li>
	        		<li>Após montar seu prato selecione a quantidade de unidades e 
	        			clique no botão <b>'Adicionar Prato'</b> no final da página.
	        		</li>
	        	</ul>

	        	<h5>Finalizando Pedido</h5>
	        	<ul>
	        		<li>Você poderá informar ao Cheff alguma restrição a seu gosto, basta
	        			inserir sua observação no pedido, no final da página.
	        		</li>
	        		<li>Para finalizar seu pedido clique no botão <b>'Finalizar'</b></li>
	        	</ul>
	        	<h5>Limpar Pedido</h5>
	        	<ul>
	        		<li>Para você limpar os itens de seu pedido afim de começar um
	        			novo clique no ícone ( <i class="fa fa-trash"></i> ) no canto superior
	        			direito.
	        		</li>
	        	</ul>

	        	<h5>Removendo um item específico</h5>
	        	<ul>
	        		<li>Para remover um item específico do seu pedido como bebida ou prato
	        			clique no ícone ( <i class="fa fa-minus-circle"></i> ) no canto direito
	        			do item.
	        		</li>
	        	</ul>
	        	<h5>Visualizando detalhes do prato</h5>
	        	<ul>
	        		<li>Para visualizar os detalhes de seu prato em seu pedido clique sobre o item
	        			prato e uma caixa de dialogo irá exibir as variedades e adicionais do
	        			prato selecionado.
	        		</li>
	        	</ul>

	        	<b>Observações: Seu pedido é salvo no carrinho, assim mesmo depois de finalizar o
	        		aplicativo todos os itens que você começou a montar em seu pedido ficarão
	        		salvos para que você possa concluir seu pedido depois.
	        	</b>
	        </p>
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
