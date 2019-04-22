<!--<div class="fimTela"></div>-->
<div id="formulario">

    <div id="faleconoscotitulo">

        <div style="float: left">Fale Conosco</div>
        <div id="carta"><img src="imagens/carta.png"></div>
    </div>

   <div id="divForm"> <form action="controller/salvarFaleConosco.php?inserir" method="POST">
        <label>Nome:</label>
        <div><input class="input" type="text" name="txtNome" size="100%" value=""  required maxlength="100"/></div>

        <label>E-mail:</label>
        <div><input class="input" type="text" name="txtEmail" size="100%" value=""  required maxlength="100"/></div>

        <label>Assunto:</label>
        <div><input class="input" type="text" name="txtAssunto" size="100%" value=""  required maxlength="100"/></div>

        <label>Mensagem:</label>
        <div><textarea name="txtMensagem" required rows="8" cols="90%"></textarea></div>


        <input id="botaoFaleConosco" type="submit" value="Enviar" />
    </form></div>

    <div id="contato">
        <div class="redesocial"><a href="https://www.facebook.com" target="_blank"><img src="imagens/facebook.png" width="100%"/></a></div>
<div class="redesocial"><a href="https://www.instagram.com/"target="_blank"><img src="imagens/instagram.png" width="100%"></a></div>
<div class="redesocial"><a href="https://twitter.com/" target="_blank"><img src="imagens/tt.png" width="100%"/></a></div>
<div class="redesocial"><a href="https://web.whatsapp.com/" target="_blank"><img src="imagens/whatsapp.png" width="100%"/></a></div>
<div class="limparFloat"></div>
        <ul>
            <li>Nosso Endereço</li>
            <li>Rua Coronel Bordini, 000</li>
            <li>Auxiliadora</li>
            <li>99999-000</li>
            <li>Porto Alegre/RS<li>
        </ul>

        <ul>
            <li>Telefones</li>
            <li>51 3333.2222</li>
            <li>51 ​3333.5555</li>
        </ul>

        <ul>
            <li>Horário de Atendimento</li>
            <li>Das 08:00 às 18:00</li>
        </ul>
    </div>

    <!--<div class="limparFloat"></div>-->
    

</div>
