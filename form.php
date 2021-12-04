<?php
	if(isset($_POST["concordo"])){
		$data=$_POST["data"];
		$numero=$_POST["numero"];
        $firma=$_POST["firma"];
		$estados=$_POST["estados"];
        $cidade=$_POST["cidade"];
		$cep=$_POST["cep"];
        $bairro=$_POST["bairro"];
		$endereco=$_POST["endereco"];
		$complemento=$_POST["complemento"];
		$cnpj=$_POST["cnpj"];
		$inscricao=$_POST["inscricao"];
		$email=$_POST["email"];
        $celular=$_POST["celular"];
		$telefone=$_POST["telefone"];
		$obs=$_POST["obs"];

		file_put_contents("dados.csv", "$data,$numero,$firma,$estados,$cidade,$cep,$bairro,$endereco,$complemento,$cnpj,$inscricao,$email,$celular,$telefone,$obs\n", FILE_APPEND);
    }
	else{
		echo "Para registrar, é necessário aceitar os termos e condições de uso!";
	}
?>