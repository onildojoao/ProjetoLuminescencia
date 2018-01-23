

<html>
    <head>

        <meta charset="UTF-8">

        <title>Sistema de Controle de Luminescência - Ficha de Campo</title>

        <link rel="stylesheet" type="text/css" href="../../includes/css/bootstrap.min.css">

        <link rel="stylesheet" href="../../includes/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../../includes/css/style.css">

    </head>
    <body>
        <div class="area_campo">

            <!--<h1 class="chamada-home txt-ao-centro oxygen-regular">Olá <?php if (!$_SESSION['usu_nome']) { echo $_SESSION['usu_nome']; } else { echo 'Colaborador!'; } ?></h1>-->


            <div class="texto chamada-home txt-ao-centro oxygen-regular">
                Preencha a Ficha de Campo abaixo.
            </div> 

            <div class="ficha_campo">

                <form class="form center-block" action="acao_formulario.php" method="POST">
                    
                    <!-- DADOS GEOGRÁFICOS -->
                    <label>Dados Geográficos</label>
                    <div class="form-group">
                        <label for="dg_endereco">Endereço:</label>
                        <input type="text" name="dg_enderenco" id="dg_endereco" required>
                    </div>
                    
                    <label>Região Administrativa(RA):</label>
                    <div class="form-group">
                        <input type="text" name="dg_regiao_administrativa" id="dg_regiao_administrativa" required>
                    </div>

                    <label>Classe da Via</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dg_classe_via" value="V1">V1</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dg_classe_via" value="V2">V2</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dg_classe_via" value="V3">V3</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dg_classe_via" value="V4">V4</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dg_classe_via" value="V5">V5</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dg_classe_via" value="P1">P1</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dg_classe_via" value="P2">P2</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dg_classe_via" value="P3">P3</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dg_classe_via" value="P4">P4</label>
                        </div>
                    </div>
                    
                    <label>Coordenada Georreferênciada</label>
                    <div class="form-group">
                        <label>P1</label>
                        <label>UTM-X:</label>
                        <input type="text" name="dg_cg_p1_x">
                        <label>UTM-Y:</label>
                        <input type="text" name="dg_cg_p1_y">

                        <label>P2</label>
                        <label>UTM-X:</label>
                        <input type="text" name="dg_cg_p2_x">
                        <label>UTM-Y:</label>
                        <input type="text" name="dg_cg_p2_y">

                        <label>P3</label>
                        <label>UTM-X:</label>
                        <input type="text" name="dg_cg_p3_x">
                        <label>UTM-Y:</label>
                        <input type="text" name="dg_cg_p3_y">

                        <label>P4</label>
                        <label>UTM-X:</label>
                        <input type="text" name="dg_cg_p4_x">
                        <label>UTM-Y:</label>
                        <input type="text" name="dg_cg_p4_y">

                        <label>P5</label>
                        <label>UTM-X:</label>
                        <input type="text" name="dg_cg_p5_x">
                        <label>UTM-Y:</label>
                        <input type="text" name="dg_cg_p5_y">

                        <label>P6</label>
                        <label>UTM-X:</label>
                        <input type="text" name="dg_cg_p6_x">
                        <label>UTM-Y:</label>
                        <input type="text" name="dg_cg_p6_y">
                    </div>
                    
                    <!-- DADOS TÉCNICOS -->
                    <label>Dados Técnicos</label>
                    <br>
                    <label>Pontência da Lâmpada (W)</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="20">20</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="40">40</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="60">60</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="100">100</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="150">150</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="250">250</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="400">400</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="600">600</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="1000">1.000</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="26">26</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="56">56</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="70">70</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="125">125</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="160">160</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="300">300</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="500">500</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="800">800</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_potencia_lampada" value="2000">2.000</label>
                        </div>
                    </div>

                    <label>Tipo da Lâmpada</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_lampada" value="compacta">Compacta</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_lampada" value="fluorescente">Fluorescente</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_lampada" value="multi vapor metalico">Multi Vapor Metálico</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_lampada" value="mista">Mista</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_lampada" value="halogena">Halógena</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_lampada" value="vapor de sodio">Vapor de Sódio</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_lampada" value="vapor de mercurio">Vapor de Mercúrio</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_lampada" value="led">LED</label>
                        </div>
                    </div>
                    
                    <label>Tipo de Luminária</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_luminaria" value="aberta">Aberta</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_luminaria" value="decorativa">Decorativa</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_luminaria" value="faixa de pedestre">Faixa de Pedrestre</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_luminaria" value="projetor">Projetor</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_luminaria" value="fechada">Fechada</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_luminaria" value="petala">Pétala</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_luminaria" value="fechada ornamental">Fechada Ornamental</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_luminaria" value="Outra">Outra</label>
                        </div>
                    </div>
                    
                    <label>Tipo de Braço</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="cruzeta n1.1">Cruzeta N1.1</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="cruzeta n2.1">Cruzeta N2.1</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="pesado 48">Pesado 48</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="meio pesado">Meio Pesado</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="suporte petala">Suporte Pétala</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="cruzeta n1.2">Cruzeta N1.2</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="cruzeta n2.2">Cruzeta N2.2</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="pesado 60">Pesado 60</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="sem cruzeta">Sem cruzeta</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="sem braco">Sem Braço</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_braco" value="leve">Leve</label>
                        </div>
                    </div>
                    
                    <label>Altura do Poste (m)</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="0.0">0.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="5.0">5.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="7.5">7.5</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="9.5">9.5</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="10.3">10.3</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="11.0">11.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="13.0">13.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="14.0">14.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="20.0">20.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="4.8">4.8</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="7.0">7.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="9.0">9.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="10.0">10.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="10.5">10.5</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="12.0">12.0</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="13.8">13.8</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_altura_poste" value="16.0">16.0</label>
                        </div>
                    </div>
                    
                    <label>Material do Poste</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="abrigo projetor alvenaria">Abrigo Projetor Alvenaria</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="aco">Aço</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="aco faixa pedestre">Aço Faixa Pedestre</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="concreto s/c (rl-35)">Concreto S/C (RL-35)</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="concreto s/c (l-30)">Concreto S/C (L-30)</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="concreto s/c (l-35)">Concreto S/C (L-35)</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="concreto s/c (r-30)">Concreto S/C (R-30)</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="concreto dt">Concreto DT</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="concreto s/c">Concreto S/C</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="aco c/ sapata">Aço c/ Sapata</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="madeira">Madeira</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_material_poste" value="nao informado">Não informado</label>
                        </div>
                    </div>

                    <label>Uso do Poste</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_uso_poste" value="exclusivo para ilumincacao publica">Exclusivo para Iluminação Pública</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_uso_poste" value="compatilhado com outros servicos">Compartilhado com Outros Serviços</label>
                        </div>
                    </div>
                    
                    <label>Tipo de Relê</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_rele" value="fotoeletrico">Fotoelétrico</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_rele" value="foto-eletronico">Foto=eletrônico</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_rele" value="sem rele">Sem Relê</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_rele" value="nao informado">Não informado</label>
                        </div>
                    </div>
                    
                    <label>Tipo de Reator</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_reator" value="externo">Externo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_reator" value="iterno">Interno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_reator" value="sem reator">Sem Reator</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_tipo_reator" value="nao informado">Não informado</label>
                        </div>
                    </div>
                    
                    <label>Forma de Distribuição de Energia</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="dt_forma_distribuicao_energia" value="aerea">Aérea</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="dt_forma_distribuicao_energia" value="subterranea">Subterrânea</label>
                        </div>
                    </div>
                    
                    <!-- DADOS FÍSICOS -->
                    <label>Dados Físicos</label>
                    <br>
                    <label>Aparência do Ponto Luminoso</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="df_aparencia_ponto_luminoso" value="bem instalado">Bem Instalado</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_aparencia_ponto_luminoso" value="mal instalado">Mal Instalado</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_aparencia_ponto_luminoso" value="sujo">Sujo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_aparencia_ponto_luminoso" value="corroido">Corroído</label>
                        </div>
                    </div>
                    
                    <label>Estado da Lâmpada</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="df_estado_lampada" value="acesa">Acesa</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_estado_lampada" value="apagada">Apagada</label>
                        </div>
                    </div>
                    
                    <label>Árvore Ofuscando a Iluminação</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="df_arvore_ofuscando_iluminacao" value="sim">Sim</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_arvore_ofuscando_iluminacao" value="nao">Não</label>
                        </div>
                    </div>
                    
                    <label>Posicionamento do Poste</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="df_posicionamento_poste" value="Normal">Normal</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_posicionamento_poste" value="desaprumado">Desaprumado</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_posicionamento_poste" value="Fletido">Fletido</label>
                        </div>
                    </div>
                    
                    <label>Proximidade da Luminária em Relação à Rede de Energia</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="df_proximidade_luminaria_rede_energia" value="normal">Normal</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_proximidade_luminaria_rede_energia" value="proxima">Próxima</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_proximidade_luminaria_rede_energia" value="distante">Distante</label>
                        </div>
                    </div>
                    
                    <label>Local de Difícil Acesso</label>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="df_local_dificil_acesso" value="sim">Sim</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="df_local_dificil_acesso" value="nao">Não</label>
                        </div>
                    </div>
                    
                    <!-- MEDIÇÕES -->
                    <label>Medições</label>
                    <br>
                    
                    
                    <div class="form-group">
                        <button class="btn btn-primary btn-acessar fonte-bold transition mukta-bold transition hover">Confirmar</button>
                        <div class="clearfix"></div>
                    </div>
                </form>

            </div>

        </div>
    </body>
</html>