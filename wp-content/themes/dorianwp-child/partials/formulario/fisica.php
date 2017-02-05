<div class="row">
    <div class="col-sm-6">

        <div class="form-group">
            <label for="tipo" class="control-label">Tipo de pessoa</label>

            <div class="">

                <div class="radio radio-inline radio-danger">
                    <input type="radio" id="juridica" class="tipo_pessoa" name="tipo_pessoa" value="juridica">
                    <label for="tipo_pessoa" style="padding-left: 5px">Jurídica</label>
                </div>

                <div class="radio radio-inline radio-danger">
                    <input type="radio" id="fisica" class="tipo_pessoa" name="tipo_pessoa" value="fisica" checked>
                    <label for="tipo_pessoa" style="padding-left: 5px">Física</label>
                </div>

            </div>

        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-titulo pull-right"><h3>Passo 1 - 4</h3></div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-titulo jurid">
            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
            <h3>DADOS PESSOAIS</h3>
        </div>
    </div>

</div>

<div class="espaco-20"></div>

<!-- NOME e SOBRENOME -->
<div class="row">

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label" for="nome">Nome</label>
            <input type="text" class="form-control input-lg red-control" name="nome" value=""
                   placeholder="digite o primeiro nome do responsável">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label" for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control input-lg red-control" name="sobrenome" value="" placeholder="digite o restante do nome do responsável">
        </div>
    </div>

</div>

<!-- NOME FANTASIA -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label class="control-label" for="nome_fantasia">Nome Fantasia</label>
            <input type="text" class="form-control input-lg red-control" name="nome_fantasia" value="" placeholder="digite o nome da marca ou título do negócio">
        </div>
    </div>
</div>


<!-- CNPJ -->
<div class="row">
    <div class="col-sm-6">
        <div class="form-group has-feedback">
            <label class="control-label" for="cpf">CPF</label>

            <input id="cpf" type="text" class="form-control input-lg red-control" name="cpf"
                   value="" placeholder="digite o nº do CPF do responsável">
            <i class="fa fa-id-card fa-lg form-control-feedback"
               aria-hidden="true"></i>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label" for="rg">RG</label>
            <input type="text" class="form-control input-lg red-control" name="rg" value="" placeholder="digite o nº de RG do responsável">
        </div>
    </div>

</div>

<!-- SEXO -->
<div class="row">
    <div class="col-sm-6">

        <div class="form-group">
            <label for="tipo" class="control-label">Sexo</label>

            <div class="">
                <div class="radio radio-inline radio-danger">
                    <input type="radio" name="sexo" value="masculino">
                    <label for="sexo" style="padding-left: 5px">Masculino</label>
                </div>

                <div class="radio radio-inline radio-danger">
                    <input type="radio" name="sexo" value="feminino">
                    <label for="sexo" style="padding-left: 5px">Feminino</label>
                </div>
            </div>

        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label" for="nascimento">Data de nascimento</label>
            <input type="text" class="form-control input-lg red-control" name="nascimento" value="" placeholder="digite a data de nascimento do responsável">
        </div>
    </div>

</div>


<!-- TEL -->
<div class="row">

<!--    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label" for="ddd1">DDD</label>
            <div>
                <input type="text" class="form-control input-lg red-control" name="ddd1"
                       value="" placeholder="Digite o DDD">
            </div>
        </div>
    </div>-->

    <div class="col-sm-6">
        <div class="form-group has-feedback">
            <label class="control-label" for="tel1">Telefone fixo</label>

            <input type="text" class="form-control input-lg red-control telefone" name="tel1"
                   value="" placeholder="digite o nº fixo do responsável">
            <i class="fa fa-phone-square fa-lg form-control-feedback"
               aria-hidden="true"></i>
        </div>
    </div>

<!--    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label" for="ddd2">DDD</label>

            <input type="text" class="form-control input-lg red-control" name="ddd2"
                   value="" placeholder="Digite o DDD">

        </div>
    </div>-->

    <div class="col-sm-6">
        <div class="form-group has-feedback">
            <label class="control-label" for="tel2">Celular</label>
            <input type="text" class="form-control input-lg red-control telefone" name="tel2"
                   value="" placeholder="digite o nº celular do responsável">
            <i class="fa fa-phone-square fa-lg form-control-feedback"
               aria-hidden="true"></i>

        </div>
    </div>

</div>


<!-- EMAIL -->
<div class="row">
    <div class="col-sm-6">
        <div class="form-group has-warning1 has-feedback">
            <label class="control-label" for="email">E-mail 1</label>
            <input type="text" class="form-control input-lg red-control" name="email"
                   value="" placeholder="digite o principal e-mail de contato do responsável">
            <i class="fa fa-envelope fa-lg form-control-feedback"
               aria-hidden="true"></i>

        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group has-warning1 has-feedback">
            <label class="control-label" for="email2">E-mail 2</label>
            <input type="text" class="form-control input-lg red-control" name="email2"
                   value="" placeholder="digite outro e-mail de contato do responsável">
            <i class="fa fa-envelope fa-lg form-control-feedback"
               aria-hidden="true"></i>

        </div>
    </div>

</div>
<!--<span class="formulario-desc">* Campos obrigatórios</span>-->
<div class="espaco-20"></div>
<div class="row">
    <div class="col-sm-1 col-sm-offset-10">
        <a class="btn btn-success btn-prosseguir" id="btn-passo1">
            <div class="btn-tit dir">
                Próximo passo
                <div class="btn-desc dir">endereço comercial</div>
            </div>
            <div class="btn-ico">
                <i class="fa fa-long-arrow-right fa-lg" aria-hidden="true"></i>
            </div>
        </a>
    </div>
</div>