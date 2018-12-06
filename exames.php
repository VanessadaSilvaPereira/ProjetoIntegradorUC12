<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exames</title>
        
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>
        <br><br><br><br>
        <h1 align="center"> <i>Exames</i> </h1>
        
        <?php
        echo '<h3>Exame de Retina:</h3>
                 O mapeamento de retina, também conhecido como exame de fundo de olho ou fundoscopia.<br>
                  É um exame em que o oftalmologista consegue observar os nervos, 
                 vasos sanguíneos e o tecido do olho responsável pela captação das imagens, 
                 podendo detectar alterações e permitir a indicação do tratamento.';
        
        echo '<h3>Exame de Refração:</h3>
        Também conhecido como exame de visão, é o teste mais comum realizado por oftalmologistas,
        pois ele indica como está a 
        visão do paciente e se é necessário o uso de lentes corretivas.<br>
        Esse teste pode identificar problemas como miopia, hipermetropia e astigmatismo.
        Ele é realizado por meio de um projetor e do Refrator de Greens.<br>
         O primeiro apresenta imagens e letras a uma determinada distância para que o paciente tente identificá-los.
         O segundo encontra a lente adequada para corrigir o problema.<br>
         Esse exame é bem simples e indicado como avaliação inicial para todas as pessoas que apresentam alguma dificuldade visual, 
         o ideal é que seja realizado anualmente.';
        
        echo '<h3>Avaliação Extena:</h3>
        Esse exame é o primeiro contato do médico com o paciente.<br>
              Nele, é possível identificar vermelhidão, edemas nas pálpebras, secura nos olhos ou qualquer outra alteração externa.<br>
              Por meio desse contato inicial, 
              o profissional poderá ditar a continuidade do tratamento com os exames oftalmológicos adequados. <br><br>';
        
        echo '<h3>Teste Ortóptico:</h3>
        Esse exame testa os músculos ligados à movimentação dos olhos e identifica alterações sensoriais, 
        podendo reconhecer sinais de estrabismo e ambliopia.<br>
        Ele é indicado para avaliar o alinhamento dos olhos e a posição do olhar.<br>
        Pacientes com suspeitas das condições mencionadas e que apresentam visão dupla 
        ou embaçada devem procurar um médico para realização do teste.';
      
        echo '<h3>Oftalmoscopia:</h3>
        A oftalmoscopia — conhecida também como exame de fundo de olho — checa as condições do fundo do globo ocular.<br>
            Por meio dela é possível verificar regiões como a retina, vasos sanguíneos e o disco óptico.<br>
           Para a realização desse exame, o médico dilata a pupila do paciente e projeta um feixe de luz no interior do olho.<br>
           O objetivo é identificar doenças como glaucoma, diabetes ou hipertensão ocular.<br>
           Ele deve ser realizado anualmente, no entanto, 
           o ideal é que seja estipulada uma frequência com o oftalmologista, de acordo com o histórico e necessidade do paciente.';
        
        echo '<h3>Topografia Corneana:</h3>
        Por meio desse exame, é possível fazer o mapeamento topográfico do relevo da córnea e determinar a curvatura corneana.<br>
        Ele é indicado a pacientes pré-operatórios de cirurgias corretivas — miopia, hipermetropia, astigmatismo e cataratas —,
        afinal, é importante conhecer erros refrativos da córnea antes de ir para a mesa de operação.<br>
        Esse exame é essencial para identificar doenças de maneira precoce e também é importante para pacientes em adaptação de lentes de contato.';
        
        echo '<h3>EXAMES COMPLEMENTARES:</h3>
       Em consultas regulares são solicitados exames de rotina, como os apresentados.<br>
       No entanto, nem sempre é possível chegar a um diagnóstico apenas com eles. Em alguns casos específicos, 
       o médico solicitará exames complementares — ultrassom, topografia, tonometria, tomografias, angiografia, entre outros.<br>
       Por meio desses exames oftalmológicos, o médico pode chegar a um diagnóstico detalhado e, assim, escolher o melhor tratamento para devolver a saúde ocular do paciente.<br>
       Em caso de algum dos sintomas citados, é necessário procurar um médico para um tratamento adequado.'
        
        ?>
        
    </body>
     <?php
        require_once './frmFaleConosco.php';
        ?>
</html>
