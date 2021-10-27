<?php
require ("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Usuários</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
</head>
<body>
	<div id="cadastro">
    	<form name="signup" method="post" action="cadastro.php">
    		<table id="tab_cadastro">
            	<tr>
                	<td>Nome:</td>
                    <td><input type="text" name="nome" required placeholder="Nome Completo" id="nome" class="txt" /></td>
                </tr>
                <tr>    
                    <td>E-mail:</td>
                    <td><input type="text" name="email" required placeholder="E-mail" id="email" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Endereço:</td>
                    <td><input type="text" name="endereco" required placeholder="Endrereço" id="endereco" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Número:</td>
                    <td><input type="text" name="numero" required placeholder="Número" id="numero" class="txt" /></td>
                </tr>
                <tr>    
                    <td>CEP:</td>
                    <td><input type="text" name="cep" required placeholder="CEP" id="cep" class="txt" /></td>
                </tr>
                <tr>    
                    <td colspan="2"><input type="submit" value="Cadastrar" name="go" id="botao_cad"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>