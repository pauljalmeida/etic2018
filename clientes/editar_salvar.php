<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
</head>
<body>
    <div class="container">

        <div class="row">
			<div class="col-md-3 padeador">
				<a href="../clientes">
					<div class="btn btn-success btn-lg center-block">Clientes</div>
				</a>
			</div>			
			
			<div class="col-md-3 padeador">
				<a href="../produtos">
					<div class="btn btn-primary btn-lg center-block">Produtos</div>
				</a>
			</div>	
			
			<div class="col-md-3 padeador">
				<a href="../fornecedores">
					<div class="btn btn-warning btn-lg center-block" href="cad_fornecedor">Fornecedores</div>
				</a>
			</div>
			<div class="col-md-3 padeador">
				<a href="../vendas">
					<div class="btn btn-danger btn-lg center-block" href="venda">Vendas</div>
				</a>
			</div>			
		</div>   

        <h3>Editar Cliente</h3>
        
        <?php
        require_once('../conn/conn.php');        
        $query = "UPDATE clientes SET nome = :nome, cpf = :cpf, endereco = :endereco, cidade = :cidade, estado = :estado, telefone = :telefone, email = :email, ativo = :ativo WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->bindValue(':nome', $_POST['nome']);
        $stmt->bindValue(':cpf', $_POST['cpf']);
        $stmt->bindValue(':endereco', $_POST['endereco']);
        $stmt->bindValue(':cidade', $_POST['cidade']);
        $stmt->bindValue(':estado', $_POST['estado']);
        $stmt->bindValue(':telefone', $_POST['telefone']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':ativo', $_POST['ativo']);
        
        if ($stmt->execute()){
            echo "Os dados foram atualizados com sucesso.";
        } else {
            echo "Ocorreu um erro ao atualizars os dados.";
        }
        ?>
        <a href="../clientes">Voltar</a></p>
             
    </div>
</body>
</html>
                
    
