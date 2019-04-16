<div id="formulario">

    <div id="faleconoscotitulo">
        
        <div style="float: left">Fale Conosco</div>
        
        <div id="carta"><img src="imagens/carta.png"></div>
        <div class="limparFloat"></div>
    </div>

    <form action="controller/salvarFaleConosco.php?inserir" method="POST">
        <div><label>Nome: </label></div>
        <div><input class="input" type="text" name="txtNome" size="100%" value=""  required maxlength="100"/></div>

        <div><label>E-mail: </label></div>
        <div><input class="input" type="text" name="txtEmail" size="100%" value=""  required maxlength="100"/></div>

        <div><label>Assunto: </label></div>
        <div><input class="input" type="text" name="txtAssunto" size="100%" value=""  required maxlength="100"/></div>

        <div><label>Mensagem: </label></div>
        <div><textarea name="txtMensagem" required rows="8" cols="90%"></textarea></div>

        <div id="btnEnviar"><input id="botaoFaleConosco" type="submit" value="Enviar"></div>
    </form>



</div>
<header id="contato">
    <ul><li>Nosso Endereço</li>
    <li>Rua Coronel Bordini, 000</li>
    <li>Auxiliadora</li>
    <li>99999-000</li>
    <li>Porto Alegre/RS<li></ul>

    <ul><li>Telefones</li>
    <li>51 3333.2222</li>
    <li>51 ​3333.5555</li></ul>

    <ul><li>Horário de Atendimento</li>
        <li>Das 08:00 às 18:00</li></ul>
</header>

<style>
    li{
        list-style-type: none;
    }
    #carta img{
        margin-left:10px; 
    }
</style>













