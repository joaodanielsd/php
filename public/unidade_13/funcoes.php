<?php
    function enviarMensagem($dados){
        //dados do formulario
        $nome_usuario = $dados['nome'];
        $email_usuario = $dados['email'];
        $mensagem_usuario = $dados['mensagem'];

        //criar variavel de envio

        $destino = "joao_daniel_jd@yahoo.com.br";
        $remetente = "cti@lumen.com.br";
        $assunto = "mensagem do site";

        //montar o corpo

        $mensagem = "O usuário" . $nome_usuario . "enviou uma mensagem." . "</BR>";
        $mensagem .= "email do usuário: " . $email_usuario . "</BR>";
        $mensagem .= "mensagem" . "</BR>";
        $mensagem .= $mensagem_usuario;

        return mail($destino, $assunto, $mensagem, $remetente);
    }
?>