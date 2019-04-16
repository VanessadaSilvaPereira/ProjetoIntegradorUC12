<div id="formulario">

    <div class="tituloPagina" id="faleconoscotitulo">
        
        <div style="float: left">Fale Conosco</div>
        
        <div id="carta"><img src="imagens/carta.png"></div>
        <div class="limparFloat"></div>
    </div>

    <form action="controller/salvarFaleConosco.php?inserir" method="POST">
        <label>Nome: </label><br>
        <input class="input" type="text" name="txtNome" size="100%" value=""  required maxlength="100"/><br><br>

        <label>E-mail: </label><br>
        <input class="input" type="text" name="txtEmail" size="100%" value=""  required maxlength="100"/><br><br>

        <label>Assunto: </label><br>
        <input class="input" type="text" name="txtAssunto" size="100%" value=""  required maxlength="100"/><br><br>

        <label>Mensagem: </label><br>
        <textarea name="txtMensagem" required rows="8" cols="90%"></textarea><br>

        <input id="botaoFaleConosco" type="submit" value="Enviar" 
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













