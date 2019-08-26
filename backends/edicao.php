<?php 

// Buscar informações do cliente
if (isset($id_cliente)) {
	$sql = "SELECT * FROM clientes WHERE id = $id_cliente";
	$queryClientes = mysqli_query($con, $sql);
	$resultadoCliente = mysqli_fetch_array($queryClientes);

		// Verificar se o cliente existe
	if (is_null($resultadoCliente)) {
		die("Cliente não encontrado.");
	}
	} // Buscar informações da empresa
	elseif (isset($id_empresa)) {
		$sql = "SELECT * FROM empresas WHERE id = $id_empresa";
		$queryEmpresas = mysqli_query($con, $sql);
		$resultadoEmpresa = mysqli_fetch_array($queryEmpresas);

		// Verificar se a empresa existe
		if (is_null($resultadoEmpresa)) {
			die("Empresa não encontrada.");
		}
	} // Buscar informações do restaurante
	else (isset($id_empresa)) {
		$sql = "SELECT * FROM empresas WHERE id = $id_empresa";
		$queryEmpresas = mysqli_query($con, $sql);
		$resultadoEmpresa = mysqli_fetch_array($queryEmpresas);

		// Verificar se a empresa existe
		if (is_null($resultadoEmpresa)) {
			die("Empresa não encontrada.");
		}
	}
	
	// Buscar informações dos cursos
	$sqlCursos = "SELECT * FROM cursos";
	$queryCursos = mysqli_query($con, $sqlCursos);

	// Verificando ação de SALVAR
	if (isset($_POST['btnSalvar'])) {
		// Recebimento dos campos
		$nome = $_POST['nomeAluno'];
		$email = $_POST['emailAluno'];
		$senha = $_POST['senhaAluno'];
		$descricao = $_POST['descricaoAluno'];
		$periodo = $_POST['periodoAluno'];
		$cursos = $_POST['cursos'];
		$ativo = $_POST['alunoAtivo'];

		// Identificando se é UPDATE ou INSERT
		if (isset($id_aluno)) {
			$sql = "UPDATE alunos SET nome = '$nome', email = '$email', senha = '$senha', descricao = '$descricao', periodo = '$periodo', ativo = '$ativo' WHERE id = $id_aluno";
		} else {
			$sql = "INSERT INTO alunos VALUES (DEFAULT, '$nome', '$email', '$senha', '$descricao', '$periodo', '$ativo')";
		}	

		?>