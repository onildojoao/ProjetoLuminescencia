

<html>
    <head>

        <meta charset="UTF-8">

        <title>Sistema de Controle de Luminescência - Ficha de Campo</title>

        <link rel="stylesheet" type="text/css" href="../../includes/css/bootstrap.min.css">

        <link rel="stylesheet" href="../../includes/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../../includes/css/style.css">

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />

        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>

        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    dateFormat: 'dd/mm/yy',
                    showButtonPanel:true,
                    currentText: 'Hoje',
                    closeText: 'Confirmar',
                    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
                });
            } );
        </script>

    </head>
    <body>
        <div class="area_campo">

            <div class="texto chamada-home txt-ao-centro oxygen-regular">
                Preencha a Ficha de Campo abaixo.
            </div> 

            <div class="ficha_campo txt-ao-centro oxygen-regular">
                <br>
                <form class="form center-block" action="acao_formulario.php" method="POST">

                    <!-- ENDEREÇO -->
                    <label class="subtitulo-dados">Endereço:</label>
                    <div class="form-group">
                        <input class="inputs-iniciais" type="text" name="dg_enderenco" required>
                    </div>

                    <!-- REGIÃO ADMINISTRATIVA -->
                    <label class="subtitulo-dados">Região Administrativa(RA):</label>
                    <div class="form-group">
                        <input type="text" name="dg_regiao_administrativa" id="dg_regiao_administrativa" required>
                    </div>

                    <!-- DADOS GEOGRÁFICOS -->
                    <label class="titulo-dados">Dados Geográficos</label>
                    <br>

                    <!-- CLASSE DA VIA -->
                    <label class="subtitulo-dados">Classe da Via</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dg_classe_via" value="V1">V1</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dg_classe_via" value="V2">V2</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dg_classe_via" value="V3">V3</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dg_classe_via" value="V4">V4</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dg_classe_via" value="V5">V5</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dg_classe_via" value="P1">P1</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dg_classe_via" value="P2">P2</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dg_classe_via" value="P3">P3</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dg_classe_via" value="P4">P4</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- COORDENADA GEORREFERÊNCIADA -->
                    <div class="form-group">
                        <table class="teste" border="1px solid black">
                            <tr>
                                <td class="v-align" rowspan="6">
                                    <label class="subtitulo-dados ">Coordenada Georreferênciada</label>
                                </td>
                                <td class="v-align" rowspan="2">
                                    <label>P1</label>
                                </td>
                                <td>
                                    <label>UTM-X:</label>
                                    <input type="text" name="dg_cg_p1_x">
                                </td>
                                <td class="v-align" rowspan="2">
                                    <label>P2</label>
                                </td>
                                <td>
                                    <label>UTM-X:</label>
                                    <input type="text" name="dg_cg_p2_x">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>UTM-Y:</label>
                                    <input type="text" name="dg_cg_p1_y">
                                </td>
                                <td>
                                    <label>UTM-Y:</label>
                                    <input type="text" name="dg_cg_p2_y">
                                </td>
                            </tr>
                            <tr>
                                <td class="v-align" rowspan="2"><label>P3</label></td>
                                <td><label>UTM-X:</label>
                                    <input type="text" name="dg_cg_p3_x"></td>
                                <td class="v-align" rowspan="2"><label>P4</label></td>
                                <td><label>UTM-X:</label>
                                    <input type="text" name="dg_cg_p4_x"></td>
                            </tr>
                            <tr>
                                <td><label>UTM-Y:</label>
                                    <input type="text" name="dg_cg_p3_y"></td>
                                <td><label>UTM-Y:</label>
                                    <input type="text" name="dg_cg_p4_y"></td>
                            </tr>
                            <tr>
                                <td class="v-align" rowspan="2"> <label>P5</label></td>
                                <td><label>UTM-X:</label>
                                    <input type="text" name="dg_cg_p5_x"></td>
                                <td class="v-align" rowspan="2"><label>P6</label></td>
                                <td> <label>UTM-X:</label>
                                    <input type="text" name="dg_cg_p6_x"></td>
                            </tr>
                            <tr>
                                <td><label>UTM-Y:</label>
                                    <input type="text" name="dg_cg_p5_y"></td>

                                <td> <label>UTM-Y:</label>
                                    <input type="text" name="dg_cg_p6_y"></td>
                            </tr>
                        </table>
                    </div>

                    <!-- DADOS TÉCNICOS -->
                    <label class="titulo-dados">Dados Técnicos</label>
                    <br>

                    <!-- POTÊNCIA DA LÂMPADA -->
                    <label class="subtitulo-dados">Potência da Lâmpada (W)</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="20">20</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="40">40</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="60">60</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="100">100</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="150">150</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="250">250</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="400">400</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="600">600</label>
                                    </div>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="1000">1.000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="26">26</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="56">56</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="70">70</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="125">125</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="160">160</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="300">300</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="500">500</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="800">800</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_potencia_lampada" value="2000">2.000</label>
                                    </div>
                                </td>
                            </tr>
                        </table>










                    </div>

                    <!-- TIPO DA LÂMPADA -->
                    <label class="subtitulo-dados">Tipo da Lâmpada</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_lampada" value="compacta">Compacta</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_lampada" value="fluorescente">Fluorescente</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_lampada" value="multi vapor metalico">Multi Vapor Metálico</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_lampada" value="mista">Mista</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_lampada" value="halogena">Halógena</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_lampada" value="vapor de sodio">Vapor de Sódio</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_lampada" value="vapor de mercurio">Vapor de Mercúrio</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_lampada" value="led">LED</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- TIPO DE LUMINÁRIA -->
                    <label class="subtitulo-dados">Tipo de Luminária</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>

                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_luminaria" value="aberta">Aberta</label>
                                    </div></td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_luminaria" value="decorativa">Decorativa</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_luminaria" value="faixa de pedestre">Faixa de Pedrestre</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_luminaria" value="projetor">Projetor</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_luminaria" value="fechada">Fechada</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_luminaria" value="petala">Pétala</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_luminaria" value="fechada ornamental">Fechada Ornamental</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_luminaria" value="Outra">Outra</label>
                                    </div></td>
                            </tr>
                        </table>
                    </div>

                    <!-- TIPO DE BRAÇO -->
                    <label class="subtitulo-dados">Tipo de Braço</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="cruzeta n1.1">Cruzeta N1.1</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="cruzeta n2.1">Cruzeta N2.1</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="pesado 48">Pesado 48</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="meio pesado">Meio Pesado</label>
                                    </div>
                                </td>
                                <td colspan="2">
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="suporte petala">Suporte Pétala</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="cruzeta n1.2">Cruzeta N1.2</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="cruzeta n2.2">Cruzeta N2.2</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="pesado 60">Pesado 60</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="sem cruzeta">Sem cruzeta</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="sem braco">Sem Braço</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_braco" value="leve">Leve</label>
                                    </div>
                                </td>
                            </tr>
                        </table>  
                    </div>

                    <!-- ALTURA DO POSTE -->
                    <label class="subtitulo-dados">Altura do Poste (m)</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="0.0">0.0</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="5.0">5.0</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="7.5">7.5</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="9.5">9.5</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="10.3">10.3</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="11.0">11.0</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="13.0">13.0</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="14.0">14.0</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="20.0">20.0</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="4.8">4.8</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="7.0">7.0</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="9.0">9.0</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="10.0">10.0</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="10.5">10.5</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="12.0">12.0</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="13.8">13.8</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_altura_poste" value="16.0">16.0</label>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    <!-- MATERIAL DO POSTE -->
                    <label class="subtitulo-dados">Material do Poste</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td colspan="2">
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="abrigo projetor alvenaria">Abrigo Projetor Alvenaria</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="concreto s/c (l-30)">Concreto S/C (L-30)</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="concreto dt">Concreto DT</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="madeira">Madeira</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="aco">Aço</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="aco faixa pedestre">Aço Faixa Pedestre</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="concreto s/c (l-35)">Concreto S/C (L-35)</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="concreto s/c">Concreto S/C</label>
                                    </div>
                                </td>
                                <td rowspan="2">
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="nao informado">Não informado</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td colspan="2">
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="concreto s/c (rl-35)">Concreto S/C (RL-35)</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="concreto s/c (r-30)">Concreto S/C (R-30)</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_material_poste" value="aco c/ sapata">Aço c/ Sapata</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- USO DO POSTE -->
                    <label class="subtitulo-dados">Uso do Poste</label>
                    <div class="form-group">

                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_uso_poste" value="exclusivo para ilumincacao publica">Exclusivo para Iluminação Pública</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_uso_poste" value="compatilhado com outros servicos">Compartilhado com Outros Serviços</label>
                                    </div>
                                </td>
                            </tr>
                        </table>                        
                    </div>

                    <!-- TIPO DE RELÊ -->
                    <label class="subtitulo-dados">Tipo de Relê</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_rele" value="fotoeletrico">Fotoelétrico</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_rele" value="foto-eletronico">Foto-eletrônico</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_rele" value="sem rele">Sem Relê</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_rele" value="nao informado">Não informado</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- TIPO DE REATOR -->
                    <label>Tipo de Reator</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_reator" value="externo">Externo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_reator" value="iterno">Interno</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_reator" value="sem reator">Sem Reator</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_tipo_reator" value="nao informado">Não informado</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- FORMA DE DISTRIBUIÇÃO DE ENERGIA -->
                    <label class="subtitulo-dados">Forma de Distribuição de Energia</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_forma_distribuicao_energia" value="aerea">Aérea</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="dt_forma_distribuicao_energia" value="subterranea">Subterrânea</label>
                                    </div>
                                </td>
                            </tr>
                        </table>


                    </div>

                    <!-- DADOS FÍSICOS -->
                    <label class="titulo-dados">Dados Físicos</label>
                    <br>

                    <!-- APARÊNCIA DO PONTO LUMINOSO -->
                    <label class="subtitulo-dados">Aparência do Ponto Luminoso</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_aparencia_ponto_luminoso" value="bem instalado">Bem Instalado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_aparencia_ponto_luminoso" value="mal instalado">Mal Instalado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_aparencia_ponto_luminoso" value="sujo">Sujo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_aparencia_ponto_luminoso" value="corroido">Corroído</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- ESTADO DA LÂMPADA -->
                    <label class="subtitulo-dados">Estado da Lâmpada</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_estado_lampada" value="acesa">Acesa</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_estado_lampada" value="apagada">Apagada</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- ÁRVORE OFUSCANDO A ILUMINAÇÃO -->
                    <label class="subtitulo-dados">Árvore Ofuscando a Iluminação</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_arvore_ofuscando_iluminacao" value="sim">Sim</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_arvore_ofuscando_iluminacao" value="nao">Não</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- POSICIONAMENTO DO POSTE -->
                    <label class="subtitulo-dados">Posicionamento do Poste</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_posicionamento_poste" value="Normal">Normal</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_posicionamento_poste" value="desaprumado">Desaprumado</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_posicionamento_poste" value="Fletido">Fletido</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- PROXIMIDADE DA LUMINÁRIA EM RELAÇÃO À REDE DE ENERGIA -->
                    <label class="subtitulo-dados">Proximidade da Luminária em Relação à Rede de Energia</label>
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_proximidade_luminaria_rede_energia" value="normal">Normal</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_proximidade_luminaria_rede_energia" value="proxima">Próxima</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="df_proximidade_luminaria_rede_energia" value="distante">Distante</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- LOCAL DE DIFÍCIL ACESSO -->
                    <label class="subtitulo-dados">Local de Difícil Acesso</label>
                    <div class="form-group">
                        <table class="teste">
                            <td>
                                <div class="radio">
                                    <label><input type="radio" name="df_local_dificil_acesso" value="sim">Sim</label>
                                </div>
                            </td>
                            <td>
                                <div class="radio">
                                    <label><input type="radio" name="df_local_dificil_acesso" value="nao">Não</label>
                                </div>
                            </td>
                        </table>
                    </div>

                    <!-- MEDIÇÕES -->
                    <label class="titulo-dados">Medições</label>
                    <br>
                    <!-- FALTA FAZER A TABELA - ESTUDAR COMO FAZER -->

                    <label class="subtitulo-dados">Medições métricas com equipamento a laser de precisão 0,1 metro:</label>
                    <br>

                    <!-- DISTÂNCIA ENTRE POSTES -->
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td class="v-align" rowspan="3">
                                    <label class="subtitulo-dados">Distância entre Postes (m)</label>
                                </td>
                                <td><label>P1-P3:</label></td>
                                <td>
                                    <input type="text" name="md_distancia_postes_p1_p3">
                                </td>
                                <td><label>P3-P5:</label></td>
                                <td>
                                    <input type="text" name="md_distancia_postes_p3_p5">
                                </td>
                            </tr>
                            <tr>
                                <td><label>P2-P4:</label></td>
                                <td>
                                    <input type="text" name="md_distancia_postes_p2_p4">
                                </td>
                                <td><label>P4-P6:</label></td>
                                <td>
                                    <input type="text" name="md_distancia_postes_p4_p6">
                                </td>
                            </tr>
                            <tr>
                                <td><label>P1-P2:</label></td>
                                <td>
                                    <input type="text" name="md_distancia_postes_p1_p2">
                                </td>
                                <td><label>P5-P6:</label></td>
                                <td>
                                    <input type="text" name="md_distancia_postes_p5_p6">
                                </td> 
                            </tr>
                        </table>
                    </div>

                    <!-- ALTURA DAS LUMINÁRIAS -->
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td class="v-align" rowspan="2">
                                    <label class="subtitulo-dados">Altura das Luminárias (m)</label>
                                </td>
                                <td><label>A1:</label></td>
                                <td>
                                    <input type="text" name="md_altura_luminarias_a1">
                                </td>
                                <td><label>A3:</label></td>
                                <td>
                                    <input type="text" name="md_altura_luminarias_a3">
                                </td>
                                <td>
                                    <label>A5:</label>
                                </td>
                                <td>
                                    <input type="text" name="md_altura_luminarias_a5">
                                </td>
                            </tr>
                            <tr>

                                <td><label>A2:</label></td>
                                <td>
                                    <input type="text" name="md_altura_luminarias_a2">
                                </td>
                                <td><label>A4:</label></td>
                                <td>
                                    <input type="text" name="md_altura_luminarias_a4">
                                </td>
                                <td><label>A6:</label></td>
                                <td>
                                    <input type="text" name="md_altura_luminarias_a6">
                                </td>
                            </tr>
                        </table> 
                    </div>

                    <!-- LARGURA DA VIA PÚBLICA -->
                    <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td>
                                    <label class="subtitulo-dados">Largura da Via Pública (m)</label>
                                </td>
                                <td><label>L1-L2:</label></td>
                                <td>
                                    <input type="text" name="md_largura_via_publica_l1_l2">
                                </td>
                                <td><label>L5-L6:</label></td>
                                <td>
                                    <input type="text" name="md_largura_via_publica_l5_l6">
                                </td>
                            </tr>
                        </table>
                    </div>

                    <label class="subtitulo-dados">Dados e Assinatura do Inspetor:</label>
                    <br>

                    <label>Data:</label>
                    <input type="text" id="datepicker">


                    <label>Nome:</label>
                    <input type="text" name="usu_nome">

                    <label>RG:</label>
                    <input type="text" name="usu_rg">

                    <div class="form-group">
                        <button class="btn btn-primary btn-acessar fonte-bold transition mukta-bold transition hover center-block h-align">Confirmar</button>
                        <div class="clearfix"></div>
                    </div>
                </form>

            </div>

        </div>
    </body>
</html>