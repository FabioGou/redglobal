<?php $sidebar = dorian_edge_sidebar_layout(); ?>
<?php get_header(); ?>
<?php dorian_edge_get_title(); ?>
<?php get_template_part('slider'); ?>
<div class="edgtf-container">
    <?php do_action('dorian_edge_after_container_open'); ?>
    <div class="edgtf-container-inner clearfix">

        <div class="ibootstrap">
            <div class="container-fluid">

                <!-- Tabs de navegação -->
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <div class="navegacao">
                            <ul class="nav-form">
                                <li>
                                    <a id="nav-passo1">
                                        <div class="nav-img">
                                            <span id="icone-passo1" class="icone ativo"><i class="fa fa-user fa-lg"
                                                                   aria-hidden="true""></i></span>

                                        </div>
                                        <div class="nav-titulo">1 Dados</div>
                                        <div class="nav-desc">escolha pessoa jurídica ou física e preencha todos os campos abaixo</div>
                                    </a>
                                </li>
                                <li>
                                    <a id="nav-passo2">
                                        <div class="nav-img">
                                            <span id="icone-passo2" class="icone"><i class="fa fa-address-card fa-lg"
                                                                   aria-hidden="true""></i></span>

                                        </div>
                                        <div class="nav-titulo">2 Endereço</div>
                                        <div class="nav-desc">informe o endereço titular preenchendo os campos abaixo</div>
                                    </a>
                                </li>
                                <li>
                                    <a id="nav-passo3">
                                        <div class="nav-img">
                                            <span id="icone-passo3" class="icone"><i class="fa fa-check fa-lg"
                                                                   aria-hidden="true""></i></span>

                                        </div>
                                        <div class="nav-titulo">3 Confirme</div>
                                        <div class="nav-desc">revise todas informações abaixo e após confirme seguindo ou volte para corrigir.</div>
                                    </a>
                                </li>
                                <li>
                                    <a id="nav-passo4">
                                        <div class="nav-img">
                                            <span id="icone-passo4" class="icone"><i class="fa fa-shield fa-lg"
                                                                   aria-hidden="true""></i></span>

                                        </div>
                                        <div class="nav-titulo">4 Senha</div>
                                        <div class="nav-desc">crie os dados de acesso preenchendo os campos abaixo</div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <form action="" name="cadastro" method="post">

                    <!-- PASSO 1 Pessoa Jurídica -->
                    <div class="row" id="passo1">
                        <div class="col-md-10 col-md-offset-1">

                            <!-- PASSO 1 CONTAINER ===================================================== -->
                            <div id="passo1-container">

                                <?php echo do_shortcode('[juridica]'); ?>

                            </div>
                            <!-- PASSO 1 CONTAINER ===================================================== -->

                        </div>
                    </div>
                    <!-- FIM DO PASSO 1 Pessoa Jurídica -->


                    <!-- PASSO 2 Endereço -->

                    <div class="row" id="passo2">
                        <div class="col-md-10 col-md-offset-1">

                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-6">
                                    <div class="form-titulo pull-right"><h3>Passo 2 - 4</h3></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-titulo jurid">
                                        <i class="fa fa-address-card fa-2x" aria-hidden="true"></i>
                                        <h3>ENDEREÇO</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="espaco-20"></div>

                            <!-- CEP -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label" for="cep">CEP</label>
                                        <input id="cep" type="text" class="form-control input-lg red-control" name="cep" value=""
                                               placeholder="digite o nº do CEP">
                                    </div>
                                </div>
                            </div>


                            <!-- ENDEREÇO -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label" for="endereco">Endereço</label>
                                        <input id="endereco" type="text" class="form-control input-lg red-control" name="endereco"
                                               value="" placeholder="digite o logradouro, rua, avenida, etc...">
                                    </div>
                                </div>
                            </div>


                            <!-- BAIRRO -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label" for="bairro">Bairro</label>
                                        <input id="bairro" type="text" class="form-control input-lg red-control" name="bairro"
                                               value=""
                                               placeholder="digite o bairro">
                                    </div>
                                </div>
                            </div>

                            <!-- NUMERO e COMPLEMENTO -->
                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label" for="numero">Número</label>
                                        <input type="text" class="form-control input-lg red-control" name="numero"
                                               value="" placeholder="digite o nº do estabelecimento">
                                    </div>
                                </div>

                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label class="control-label" for="complemento">Complemento</label>
                                        <input type="text" class="form-control input-lg red-control" name="complemento"
                                               value=""
                                               placeholder="digite o complemento do endereço. ex.: sala, ap, etc.">
                                    </div>
                                </div>

                            </div>

                            <!-- ESTADO e CIDADE -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label" for="estado">Estado</label>
                                        <input id="estado" type="text" class="form-control input-lg red-control" name="estado"
                                               value="" placeholder="digite por extenso o nome do estado brasileiro">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label" for="cidade">Cidade</label>
                                        <input id="cidade" type="text" class="form-control input-lg red-control" name="cidade"
                                               value="" placeholder="digite por extenso o nome do município">
                                    </div>
                                </div>

<!--                                <span class="formulario-desc">* Campos obrigatórios</span>-->

                            </div>
                            <div class="espaco-20"></div>

                            <div class="row">

                                <div class="col-sm-1">
                                    <a class="btn btn-success btn-prosseguir" id="btn-passo2a">
                                        <div class="btn-ico">
                                            <i class="fa fa-long-arrow-left fa-lg" aria-hidden="true"></i>
                                        </div>
                                        <div class="btn-tit esq">
                                            Voltar
                                            <div class="btn-desc esq">dados</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-1 col-sm-offset-9">
                                    <a class="btn btn-success btn-prosseguir" id="btn-passo2b">
                                        <div class="btn-tit dir">
                                            Próximo passo
                                            <div class="btn-desc dir">revisar tudo</div>
                                        </div>
                                        <div class="btn-ico">
                                            <i class="fa fa-long-arrow-right fa-lg" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- FIM DO PASSO 2 Endereço -->


                    <!-- PASSO 3 Confirmar Dados -->

                    <div class="row" id="passo3">
                        <div class="col-md-10 col-md-offset-1">

                            <div class="row">

                                <div class="col-sm-6 col-sm-offset-6">
                                    <div class="form-titulo pull-right"><h3>Passo 3 - 4</h3></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-titulo jurid">
                                        <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                                        <h3>CONFIRME SUAS INFORMAÇÕES</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="espaco-20"></div>

                            <div id="confirmar-dados"></div>

                            <div class="espaco-20"></div>

                            <div class="row">

                                <div class="col-sm-1">
                                    <a class="btn btn-success btn-prosseguir" id="btn-passo3a">
                                        <div class="btn-ico">
                                            <i class="fa fa-long-arrow-left fa-lg" aria-hidden="true"></i>
                                        </div>
                                        <div class="btn-tit esq">
                                            Voltar
                                            <div class="btn-desc esq">endereço</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-1 col-sm-offset-9">
                                    <a class="btn btn-success btn-prosseguir" id="btn-passo3b">
                                        <div class="btn-tit dir">
                                            Próximo passo
                                            <div class="btn-desc dir">criar acesso</div>
                                        </div>
                                        <div class="btn-ico">
                                            <i class="fa fa-long-arrow-right fa-lg" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- FIM DO PASSO 3 Confirmar Dados -->

                    <!-- PASSO 4 Senha -->

                    <div class="row" id="passo4">
                        <div class="col-md-10 col-md-offset-1">

                            <div class="row">

                                <div class="col-sm-6 col-sm-offset-6">
                                    <div class="form-titulo pull-right"><h3>Passo 4 - 4</h3></div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-titulo jurid">
                                        <i class="fa fa-shield fa-2x" aria-hidden="true"></i>
                                        <h3>CRIE SEU ACESSO</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="espaco-20"></div>

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="usuario">Usuário</label>
                                        <input type="text" class="form-control input-lg red-control" name="usuario"
                                               value="" placeholder="digite para criar o nome de usuário do seu acesso">
                                        <i class="fa fa-user fa-lg form-control-feedback" aria-hidden="true"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="senha">Senha</label>
                                        <input type="text" class="form-control input-lg red-control" name="senha"
                                               value="" placeholder="digite para criar sua senha de acesso">
                                        <i class="fa fa-shield fa-lg form-control-feedback"
                                           aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label" for="senha">Confirmar senha</label>
                                        <input type="text" class="form-control input-lg red-control" name="senha"
                                               value="" placeholder="digite novamente para confirmar sua senha">
                                    </div>
                                </div>
                                <span class="formulario-desc">* Campos obrigatórios</span>
                            </div>
                            <div class="espaco-20"></div>
                            <div class="row">

                                <div class="col-sm-1">
                                    <a class="btn btn-success btn-prosseguir" id="btn-passo4a">
                                        <div class="btn-ico">
                                            <i class="fa fa-long-arrow-left fa-lg" aria-hidden="true"></i>
                                        </div>
                                        <div class="btn-tit esq">
                                            Voltar
                                            <div class="btn-desc esq">confirmação</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-1 col-sm-offset-9">
                                    <a class="btn btn-success btn-prosseguir" id="btn-passo4b">
                                        <div class="btn-tit dir">
                                            Finalizar
                                            <div class="btn-desc dir">concluir o cadastro</div>
                                        </div>
                                        <div class="btn-ico">
                                            <i class="fa fa-long-arrow-right fa-lg" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- FIM DO PASSO 4 Senha -->

                </form>

            </div>

        </div>


        <!--        --><?php //the_content(); ?>
        <?php do_action('dorian_edge_page_after_content'); ?>

    </div>
    <?php do_action('dorian_edge_before_container_close'); ?>
</div>
<?php do_action('dorian_edge_after_container_close'); ?>
<?php get_footer(); ?>
