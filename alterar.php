	
<?php 

	


	include_once 'conexao/conexao.php';
	// Header
	include_once'includes/header.php';
	
	
	$id = $_GET['id'];
	
	$consulta = $pdo->query("SELECT * FROM cliente where idCliente = $id;");
	
	while ($result = $consulta->fetch(PDO::FETCH_ASSOC)) {													
	
		$pdo = null;	
		
		
		$nome = $result['nome'];
		$sobrenome = $result['sobrenome'];
		$idade = $result['idade'];
		$email = $result['email'];
		$endereco = $result['endereco'];
		$pagamento = $result['pagamento'];
	}
	
	
	
	
	
echo"
	
<div class ='row'>
	<div class='col s12 m6 push-m3'>
		<h3 class ='light'> Editar Cliente </h3>
		
		<form action = 'update.php' method='POST'>
			<input type='hidden' name ='idCliente' value =" . $id . ">
			<div class ='input-field col s12'>
			
				<input type='text' name='nome' id ='nome' value =" . $nome . ">
			
				<label for='nome'>Nome</label>
			</div>
			
			<div class ='input-field col s12'>
				<input type='text' name='sobrenome' id ='sobrenome' value=" . $sobrenome . ">
				<label for='sobrenome'>Sobrenome</label>
			</div>
			
			<div class ='input-field col s12'>
				<input type='text' name='idade' id ='idade' value =" . $idade .">
				<label for='idade'>Idade</label>
			</div>
			<div class ='input-field col s12'>
				<input type='email' name='email' id ='email' value=" . $email . ">
				<label for='email'>E-mail</label>
			</div>
			<div class ='input-field col s12'>
				<input type='text' name='endereco' id ='endereco' value =".$endereco.">
				<label for='endereco'>Endereço</label>
			</div>
			<div class ='input-field col s12'>
				<input type='text' name='pagamento' id ='pagamento' value =". $pagamento. ">
				<label for='pagamento'>Forma de Pagamento </label>
			</div>
			
			<a href='clientes.php' name='btn-atualizar' class = 'btn'> Atualizar </a>
			 
			<a href='clientes.php' class = 'btn pink'> Lista de Clientes  </a>
		</form>
	</div>
</div>";

?>



<?php 
	// Header
	include_once'includes/footer.php';
?>