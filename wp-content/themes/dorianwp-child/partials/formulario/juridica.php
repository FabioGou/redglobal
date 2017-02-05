<div class="row">
    <div class="col-sm-6">

        <div class="form-group">
            <label for="tipo" class="control-label">Tipo de pessoa:</label>

            <div class="">
                <div class="radio radio-inline radio-danger">
                    <input type="radio" id="juridica" class="tipo_pessoa" name="tipo_pessoa" value="juridica"
                           checked>
                    <label for="tipo_pessoa" style="padding-left: 5px">Jurídica</label>
                </div>
                <div class="radio radio-inline radio-danger">
                    <input type="radio" id="fisica" class="tipo_pessoa" name="tipo_pessoa" value="fisica">
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
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-titulo jurid">
                    <i class="fa fa-bank fa-2x" aria-hidden="true"></i>
                    <h3>EMPRESA</h3>
                </div>
            </div>

        </div>

        <div class="espaco-20"></div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group has-feedback">
                    <label class="control-label" for="cnpj">CNPJ</label>

                    <input id="cnpj" type="text" class="form-control input-lg red-control" name="cnpj"
                           value="" placeholder="digite o nº do CNPJ da empresa">
                    <i class="fa fa-id-card fa-lg form-control-feedback"
                       aria-hidden="true"></i>
                </div>
            </div>

        </div>

        <!-- RAZAO SOCIAL NOME FANTASIA -->
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group has-feedback">
                    <label class="control-label" for="razao_social">Razão Social</label>

                    <input type="text" class="form-control input-lg red-control"
                           name="razao_social" value="" placeholder="digite o nome completo da razão social">
                    <i class="fa fa-id-card fa-lg form-control-feedback"
                       aria-hidden="true""></i>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="form-group has-feedback">
                    <label class="control-label" for="fantasia">Nome Fantasia</label>
                    <input type="text" class="form-control input-lg red-control" name="fantasia" value=""
                           placeholder="digite o nome da marca ou título do estabelecimento">
                    <i class="fa fa- fa-lg form-control-feedback" aria-hidden="true"></i>
                </div>
            </div>

        </div>

        <!-- TEL 1 -->
        <div class="row">

            <!--<div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label" for="ddd1">DDD</label>
                    <div>
                        <input type="text" class="form-control input-lg red-control" name="ddd1"
                               value="" placeholder="Digite o DDD">
                    </div>
                </div>
            </div>-->

            <div class="col-sm-12">
                <div class="form-group has-feedback">
                    <label class="control-label" for="tel1">Telefone da Empresa</label>

                    <input type="text" class="form-control input-lg red-control telefone" name="tel1"
                           value="" placeholder="digite o nº telefônico fixo da empresa">
                    <i class="fa fa-phone-square fa-lg form-control-feedback"
                       aria-hidden="true"></i>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group has-warning1 has-feedback">
                    <label class="control-label" for="email">E-mail da Empresa</label>
                    <input type="text" class="form-control input-lg red-control" name="email"
                           value="" placeholder="digite o principal e-mail de contato da empresa">
                    <i class="fa fa-envelope fa-lg form-control-feedback"
                       aria-hidden="true"></i>

                </div>
            </div>


        </div>
    </div>


    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-titulo jurid">
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                    <h3>RESPONSÁVEL</h3>
                </div>
            </div>
        </div>

        <div class="espaco-20"></div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label" for="cpf_responsavel">CPF do Responsável</label>
                    <input id="cpf" type="text" class="form-control input-lg red-control" name="cpf_responsavel" value=""
                           placeholder="digite o nº de CPF do responsável">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label" for="nome_responsavel">Nome do Responsável</label>
                    <input type="text" class="form-control input-lg red-control" name="nome_responsavel" value=""
                           placeholder="digite o nome completo do responsável">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                    <label for="tipo" class="control-label">Sexo do Responsável</label>

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
        </div>
        <div style="height: 25px"></div>
        <div class="row">
<!--            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label" for="ddd2">DDD</label>

                    <input type="text" class="form-control input-lg red-control" name="ddd2"
                           value="" placeholder="Digite o DDD">

                </div>
            </div>-->

            <div class="col-sm-12">
                <div class="form-group has-feedback">
                    <label class="control-label" for="tel2">Telefone do Responsável</label>
                    <input type="text" class="form-control input-lg red-control telefone" name="tel2"
                           value="" placeholder="digite o nº telefônico celular do responsável">
                    <i class="fa fa-phone-square fa-lg form-control-feedback"
                       aria-hidden="true"></i>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="form-group has-warning1 has-feedback">
                    <label class="control-label" for="email2">E-mail do Responsável</label>
                    <input type="text" class="form-control input-lg red-control" name="email2"
                           value="" placeholder="digite o principal e-mail de contato do responsável">
                    <i class="fa fa-envelope fa-lg form-control-feedback"
                       aria-hidden="true"></i>

                </div>
            </div>
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