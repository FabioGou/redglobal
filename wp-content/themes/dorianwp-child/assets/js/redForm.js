jQuery(document).ready(function ($) {

    $(document).on('click', '#btn-passo1', function(e){
        passo2();
    });

    $('#btn-passo2a').click(function(e){
        passo1();
    });

    $('#btn-passo2b').click(function(e){
        passo3();
    });

    $('#btn-passo3a').click(function(e){
        passo2();
    });

    $('#btn-passo3b').click(function(e){
        passo4();
    });

    $('#btn-passo4a').click(function(e){
        passo3();
    });

    $('#btn-passo4b').click(function(e){
        finalizar();
    });

    $('#nav-passo1').click(function(e){
        passo1();
    });

    $('#nav-passo2').click(function(e){
        passo2();
    });

    $('#nav-passo3').click(function(e){
        passo3();
    });

    $('#nav-passo4').click(function(e){
        passo4();
    });


    function passo1()
    {
        escondePassos();
        iconePassos(1);
        $('#passo1').show();
    }

    function passo2()
    {
        escondePassos();
        iconePassos(2);
        $('#passo2').show();
    }

    function passo3()
    {
        escondePassos();
        carregaPasso3();
        iconePassos(3);
        $('#passo3').show();
    }

    function passo4()
    {
        escondePassos();
        iconePassos(4);
        $('#passo4').show();
    }

    function escondePassos()
    {
        $('#passo1').hide();
        $('#passo2').hide();
        $('#passo3').hide();
        $('#passo4').hide();
    }

    function iconePassos(passo)
    {
        var sel = '#icone-passo' + passo;

        $('.icone').each( function(){
           $(this).removeClass('ativo').removeClass('feito');
        });

        $(sel).addClass('ativo');

        for(i=1; i<5; i++){
            if(i < passo){
                $('#icone-passo'+i).addClass('feito');
            }
        }
    }

    function finalizar()
    {
        alert('Não implementado!');
    }

    // FISICA / JURIDICA ===============================================

    $(document).on('click', '#fisica', function(e){
        tipoPessoa();
    });

    $(document).on('click', '#juridica', function(e){
        tipoPessoa();
    });

    function tipoPessoa()
    {
        var tipo = $('.tipo_pessoa:checked').val();

        var caminho = caminho_partial + 'formulario/' + tipo + '.php';

        // var conteudo = $.load(caminho);

        $('#passo1-container').empty().load(caminho);


    }

    //==================================================================

    // CARREGA PASSO 3 -> CONFIRMAR DADOS ==============================

    function carregaPasso3()
    {
        var dados = '';
        var tipo = $('.tipo_pessoa:checked').val();

        if(tipo == 'fisica') dados = carregaFisica();
        if(tipo == 'juridica') dados = carregaJuridica();

        htmlPasso3(dados);

    }

    function carregaFisica()
    {
        var dados = [];
        var temp = '';

        temp = $('input[name="nome"]').val() + ' ' + $('input[name="sobrenome"]').val();
        dados[0] = {tag:'Nome Completo', valor:temp};

        temp = $('input[name="nome_fantasia"]').val();
        dados[1] = {tag:'Nome Fantasia', valor:temp};

        temp = $('input[name="cpf"]').val();
        dados[1] = {tag:'CPF', valor:temp};

        temp = $('input[name="rg"]').val();
        dados[2] = {tag:'RG', valor:temp};

        temp = $('input[name="email"]').val();
        dados[3] = {tag:'E-mail', valor:temp};

        temp = $('input[name="sexo"]').val();
        dados[4] = {tag:'Sexo', valor:temp};

        temp = $('input[name="nascimento"]').val();
        dados[5] = {tag:'Data de Nascimento', valor:temp};

        temp = $('select[name="estado_civil"]').val() || '';
        dados[6] = {tag:'Estado Civil', valor:temp};

        temp = $('select[name="escolaridade"]').val() || '';
        dados[7] = {tag:'Escolaridade', valor:temp};

        temp = '(' + $('input[name="ddd1"]').val() + ')' + $('input[name="tel1"]').val();
        if(temp == '()') temp = '';
        dados[8] = {tag:'Telefone', valor:temp};

        temp = '(' + $('input[name="ddd2"]').val() + ')' + $('input[name="tel2"]').val();
        if(temp == '()') temp = '';
        dados[9] = {tag:'Celular', valor:temp};

        temp = $('input[name="endereco"]').val() + ', ' + $('input[name="numero"]').val();
        temp += ' - ' + $('input[name="cidade"]').val() + ' - ' + $('input[name="bairro"]').val();
        temp += ' - ' + $('input[name="complemento"]').val();

        if(temp == ',  -  -  - ') temp = '';

        dados[10] = {tag:'Endereço', valor:temp};

        return dados;

    }

    function carregaJuridica()
    {

        var dados = [];
        var temp = '';

        temp = $('input[name="cnpj"]').val();
        dados[0] = {tag:'CNPJ', valor:temp};

        temp = $('input[name="razao_social"]').val();
        dados[1] = {tag:'Razão Social', valor:temp};

        temp = '(' + $('input[name="ddd1"]').val() + ')' + $('input[name="tel1"]').val();
        if(temp == '()') temp = '';
        dados[2] = {tag:'Telefone 1', valor:temp};

        temp = '(' + $('input[name="ddd2"]').val() + ')' + $('input[name="tel2"]').val();
        if(temp == '()') temp = '';
        dados[3] = {tag:'Telefone 2', valor:temp};

        temp = $('input[name="email"]').val();
        dados[4] = {tag:'E-mail', valor:temp};

        temp = $('input[name="endereco"]').val() + ', ' + $('input[name="numero"]').val();
        temp += ' - ' + $('input[name="cidade"]').val() + ' - ' + $('input[name="bairro"]').val();
        temp += ' - ' + $('input[name="complemento"]').val();

        if(temp == ',  -  -  - ') temp = '';

        dados[5] = {tag:'Endereço', valor:temp};

        return dados;
    }

    function htmlPasso3(dados)
    {
        html ='';

        html += '<table class="formulario-tabela">';

        for(i=0; i < dados.length; i++){
            html += '<tr><td class="esq">'+ dados[i].tag +'</td><td class="dir">'+ dados[i].valor +'</td></tr>';
        }

        html += '</table>';

        $('#confirmar-dados').empty().html(html);
    }

    // =================================================================


    ////////////////////////////////////////////////////////////
    // Mascara Telefone ======================================= //
    ////////////////////////////////////////////////////////////
    $('form').on('blur', '.telefone', function(e){

        //alert($(this).val().length);
        var eu = $(this);
        teste = eu.val().slice(-2);
        teste = teste.slice(0,1);
        if(!isNaN(teste)){
            $(this).unmask();
        }
        var tel = eu.val();
        if(tel.slice(-1)=='_'){
            tel = tel.slice(0, (tel.length - 1));
        }
        var tel2 = tel.slice(-4);
        tel = tel.slice(0, (tel.length - 4));
        //var tel = tel1 + '-' + tel2;
        eu.val(tel + '-' + tel2);

    });

    $('form').on('focusin', '.telefone', function(){
        $(this).mask('(99) 99999999?9');
    });
    // =======================================================
    $('form').on('focusin', '#cpf', function() {
        $(this).mask('999.999.999-99');
    });

    $('form').on('focusin', '#cnpj', function() {
        $(this).mask('99.999.999/0001-99');
    });

    $('#cep').mask('99999-999', {completed:function(){cep();}});

    function cep(){
        // alert($('#cep').val());
        //return false;
        var url = controller_url;
        var $post = {};
        $post.action = 'cep';
        $post.cep = $('#cep').val();

        $.ajax({
            type: "POST",
            url: url, //process to mail
            data: $post,
            dataType: 'json',
            success: function(data){
                console.log(data);
                preencheEndereco(data);
                //cidades(data);

            },
            error: function(){
                alert("Falha na busca do CEP.");
            }
        });

    }

    function preencheEndereco(endereco){
        if(endereco == false){
            alert('Cep não encontrado! Digite o endereço manualmente.');
        }else{
            // $('#local').val(endereco.cidade + ', ' + endereco.estado);
            $('#cidade').val(endereco.cidade);
            $('#estado').val(endereco.estado);
            $('#endereco').val(endereco.logradouro);
            $('#bairro').val(endereco.bairro);
        }
    }

});