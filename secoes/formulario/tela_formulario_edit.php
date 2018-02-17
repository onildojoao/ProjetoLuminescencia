<?php 
//Include para conexão com o banco.
include "../../utilidades/conexao/conexao.php";

//Inicia a Sessão
session_start();

//Verifica se o usuário está logado
if ($_SESSION["usu_logado"] != "ok")
{
    header ('Location: ../login/tela_login.php');
} 

$id_edit = $_GET['id_poste'];

$sql_buscaposte = "SELECT pp_id, pp_Estado, pp_Cidade, pp_Endereco, pp_Endereco_Observacao, pp_Regiao_Administrativa, pp_LAT_DD, pp_LNG_DD FROM pp_posteprincipal WHERE pp_id = '$id_edit'";

$retorno_buscaposte = $conexao->query($sql_buscaposte);

if ($retorno_buscaposte == true) {
    if ($retorno_buscaposte->num_rows > 0)
    {
        while($registro = $retorno_buscaposte->fetch_array())
        {
            $Estado = $registro['pp_Estado'];
            $Cidade = $registro['pp_Cidade'];
            $Endereco = $registro['pp_Endereco'];
            $Endereco_Observacao = $registro['pp_Endereco_Observacao'];
            $Regiao_Administrativa = $registro['pp_Regiao_Administrativa'];
            $LAT_DD = $registro['pp_LAT_DD'];
            $LNG_DD = $registro['pp_LNG_DD'];
        }
    }
} else {
    echo "<script>
          alert('Poste não encontrado!');
          </script>";
}

?>

<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Controle de Luminescência - Ficha de Campo</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
                    dateFormat: 'yy/mm/dd',
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
        <script type="text/javascript">
            function showfieldTipoLuminaria(name){
                if(name=='otherTipoLuminaria')document.getElementById('outraTipoLuminaria').innerHTML='<div class="form-group col-lg-12 col-md-12 col-sm-12"><label for="otherTipoLuminaria">Outra:</label> <input type="text" class="form-control" id="otherTipoLuminaria" name="otherTipoLuminaria" />';
                else document.getElementById('outraTipoLuminaria').innerHTML='';
            }
        </script>
        <script> 
            $(function(){
                $("#navbar").load("../navbar.html"); 
            });
        </script> 
        <script>
            function resetForm(){
                $('#form').trigger("reset");    
            }
        </script>
    </head>
    <body>
        <div id="navbar"></div>
        <form method="POST" id="form" action="acao_formulario_edit.php">
            <div class="form-group">

                <!-- DADOS GEOGRÁFICOS -->
                <label class="titulo-dados">Dados Geográficos</label>
                <!-- CLASSE DA VIA --> 
                <div class="row">
                    <div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <label for="idPoste">ID do Poste</label>
                        <input type="number" class="form-control" id="idPoste" name="id_poste" value="<?php echo $id_edit ?>" required>
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <label for="dg_classe_via">Classe da Via</label>
                        <select class="form-control" name="dg_classe_via" id="dg_classe_via">
                            <option value="V1">V1</option>
                            <option value="V2">V2</option>
                            <option value="V3">V3</option>
                            <option value="V4">V4</option>
                            <option value="V5">V5</option>
                            <option value="P1">P1</option>
                            <option value="P2">P2</option>
                            <option value="P3">P3</option>
                            <option value="P4">P4</option>
                        </select>
                    </div>
                    <!-- ESTADO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <label for="pp_estado">Estado</label>
                        <input type="text" class="form-control" id="pp_estado" name="pp_estado" value="<?php echo $Estado ?>" required>
                    </div>
                    <!-- CIDADE -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <label for="pp_cidade">Cidade</label>
                        <input type="text" class="form-control" id="pp_cidade" name="pp_cidade" value="<?php echo $Cidade ?>" required>
                    </div>
                </div>

                <div class="row">
                    <!-- RA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <label for="pp_regiao_administrativa">Região Administrativa</label>
                        <input type="text" class="form-control" id="pp_regiao_administrativa" name="pp_regiao_administrativa" value="<?php echo $Regiao_Administrativa ?>" >
                    </div>
                    <!-- ENDEREÇO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <label for="pp_endereco">Endereço</label>
                        <input type="text" class="form-control" id="pp_endereco" name="pp_endereco" value="<?php echo $Endereco ?>" required>
                    </div>
                    <!-- OBSERVAÇÃO ENDEREÇO -->
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="pp_endereco_observacao">Observação Endereço</label>
                        <input type="text" class="form-control" id="pp_endereco_observacao" name="pp_endereco_observacao" value="<?php echo $Endereco_Observacao ?>" required>
                    </div>
                </div>

                <!-- COORDENADA GEORREFERÊNCIADA -->
                <label class="subtitulo-dados ">Coordenada Georreferênciada</label>
                <div class="form-group">
                    <table class="teste" border="1px solid black">
                        <tr>
                            <td class="v-align" rowspan="2">
                                <label>P1</label>
                            </td>
                            <td>
                                <label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p1_lat" value="<?php echo $LAT_DD ?>">
                            </td>
                            <td class="v-align" rowspan="2">
                                <label>P2</label>
                            </td>
                            <td>
                                <label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p2_lat" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p1_lng" value="<?php echo $LNG_DD ?>">
                            </td>
                            <td>
                                <label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p2_lng" >
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align" rowspan="2"><label>P3</label></td>
                            <td><label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p3_lat" ></td>
                            <td class="v-align" rowspan="2"><label>P4</label></td>
                            <td><label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p4_lat" ></td>
                        </tr>
                        <tr>
                            <td><label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p3_lng" ></td>
                            <td><label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p4_lng" ></td>
                        </tr>
                        <tr>
                            <td class="v-align" rowspan="2"> <label>P5</label></td>
                            <td><label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p5_lat" ></td>
                            <td class="v-align" rowspan="2"><label>P6</label></td>
                            <td> <label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p6_lat" ></td>
                        </tr>
                        <tr>
                            <td><label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p5_lng" ></td>

                            <td> <label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p6_lng" ></td>
                        </tr>
                    </table>
                </div>

                <!-- DADOS TÉCNICOS -->
                <label class="titulo-dados">Dados Técnicos</label>
                <br>
                <div class="row">
                    <!-- POTÊNCIA DA LÂMPADA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_potencia_lampada">Potência da Lâmpada (W)</label>                    
                        <select class="form-control" id="dt_potencia_lampada" name="dt_potencia_lampada">
                            <option value="20">20</option>
                            <option value="26">26</option>
                            <option value="40">40</option>
                            <option value="56">56</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
                            <option value="70">80</option>
                            <option value="100">100</option>
                            <option value="125">125</option>
                            <option value="150">150</option>
                            <option value="160">160</option>
                            <option value="250">250</option>
                            <option value="300">300</option>
                            <option value="300">320</option>
                            <option value="400">400</option>
                            <option value="500">500</option>
                            <option value="600">600</option>
                            <option value="800">800</option>
                            <option value="1000">1000</option>
                            <option value="2000">2000</option>
                        </select>
                    </div>     

                    <!-- TIPO DA LÂMPADA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_lampada">Tipo da Lâmpada</label>
                        <select class="form-control" id="dt_tipo_lampada" name="dt_tipo_lampada">
                            <option value="Compacta">Compacta</option>
                            <option value="Halogena">Halógena</option>
                            <option value="Fluorescente">Fluorescente</option>
                            <option value="Vapor de Sodio">Vapor de Sódio</option>
                            <option value="Multi Vapor Metalico">Multi Vapor Metálico</option>
                            <option value="Vapor de Mercurio">Vapor de Mercúrio</option>
                            <option value="Mista">Mista</option>
                            <option value="LED">LED</option>
                        </select>
                    </div>

                    <!-- TIPO DE LUMINÁRIA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_luminaria">Tipo da Luminária</label>
                        <select class="form-control" name="dt_tipo_luminaria" id="dt_tipo_luminaria" onchange="showfieldTipoLuminaria(this.options[this.selectedIndex].value)">
                            <option value="Aberta">Aberta</option>
                            <option value="Fechada">Fechada</option>
                            <option value="Decorativa">Decorativa</option>
                            <option value="Petala">Pétala</option>
                            <option value="Faixa de Pedestre">Faixa de Pedestre</option>
                            <option value="Fechada Ornamental">Fechada Ornamental</option>
                            <option value="Projetor">Projetor</option>
                            <option value="otherTipoLuminaria">Outra</option>
                        </select>
                        <div id="outraTipoLuminaria"></div>
                    </div>

                    <!-- TIPO DE BRAÇO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_braco">Tipo do Braço</label>
                        <select class="form-control" name="dt_tipo_braco" id="dt_tipo_braco">
                            <option value="Cruzeta M1.1">Cruzeta N1.1</option>
                            <option value="Cruzeta M1.2">Cruzeta N1.2</option>
                            <option value="Cruzeta M2.1">Cruzeta N2.1</option>
                            <option value="Cruzeta M2.2">Cruzeta N2.2</option>
                            <option value="Pesado 48">Pesado 48</option>
                            <option value="Pesado 60">Pesado 60</option>
                            <option value="Meio Pesado">Meio Pesado</option>
                            <option value="Sem Cruzeta">Sem Cruzeta</option>
                            <option value="Suporte Petala">Suporte Pétala</option>
                            <option value="Sem Braco">Sem Braço</option>
                            <option value="Leve">Leve</option>
                        </select>
                    </div>
                </div>

                <div class="row">

                    <!-- ALTURA DO POSTE -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_altura_poste">Altura do Poste (m)</label>
                        <select class="form-control" name="dt_altura_poste" id="dt_altura_poste">
                            <option value="0.0">0.0</option>
                            <option value="4.8">4.8</option>
                            <option value="5.0">5.0</option>
                            <option value="7.0">7.0</option>
                            <option value="7.5">7.5</option>
                            <option value="9.0">9.0</option>
                            <option value="9.5">9.5</option>
                            <option value="10.0">10.0</option>
                            <option value="10.3">10.3</option>
                            <option value="10.5">10.5</option>
                            <option value="11.0">11.0</option>
                            <option value="12.0">12.0</option>
                            <option value="13.0">13.0</option>
                            <option value="13.8">13.8</option>
                            <option value="14.0">14.0</option>
                            <option value="16.0">16.0</option>
                            <option value="20.0">20.0</option>
                        </select>
                    </div>

                    <!-- MATERIAL DO POSTE -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_material_poste">Material do Poste</label>
                        <select class="form-control" name="dt_material_poste" id="dt_material_poste">
                            <option value="Abrigo Projetor Alvenaria">Abrigo Projetor Alvenaria</option>
                            <option value="Aco">Aço</option>
                            <option value="Aco Faixa Pedestre">Aço Faixa Pedestre</option>
                            <option value="Concreto S/C (RL-35)">Concreto S/C (RL-35)</option>
                            <option value="Concreto S/C (L-30)">Concreto S/C (L-30)</option>
                            <option value="concreto S/C (L-35)">Concreto S/C (L-35)</option>
                            <option value="Concreto S/C (R-30)">Concreto S/C (R-30)</option>
                            <option value="Concreto DT">Concreto DT</option>
                            <option value="Concreto S/C">Concreto S/C</option>
                            <option value="Aco C/ Sapata">Aço c/ Sapata</option>
                            <option value="Madeira">Madeira</option>
                            <option value="Nao Informado">Não Informado</option>
                        </select>
                    </div>

                    <!-- USO DO POSTE -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_altura_poste">Uso do Poste</label>
                        <select class="form-control" name="dt_uso_poste" id="dt_uso_poste">
                            <option value="Exclusivo P/ Iluminacao Publica">Exclusivo p/ Iluminação Pública</option>
                            <option value="Compatilado C/ Outros Servicos">Compartilhado c/ Outros Serviços</option>
                        </select>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_comando">Tipo de Comando</label>
                        <select class="form-control" name="dt_tipo_comando" id="dt_tipo_comando">
                            <option value="Indvidual">Individual</option>
                            <option value="Em grupo">Em grupo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <!-- TIPO DE REATOR -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_reator">Tipo de Reator</label>
                        <select class="form-control" name="dt_tipo_reator" id='dt_tipo_reator'>
                            <option value="Externo">Externo</option>
                            <option value="Interno">Interno</option>
                            <option value="Sem Reator">Sem Reator</option>
                            <option value="Nao Informado">Não Informado</option>
                        </select>
                    </div>

                    <!-- FORMA DE DISTRIBUIÇÃO DE ENERGIA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_forma_distribuicao_energia">Forma de Distribuição de Energia</label>
                        <select class="form-control" name="dt_forma_distribuicao_energia" id="dt_forma_distribuicao_energia">
                            <option value="Aerea">Aérea</option>
                            <option value="Subterranea">Subterrânea</option>
                        </select>
                    </div>
                </div>
                <!-- DADOS FÍSICOS -->
                <label class="titulo-dados">Dados Físicos</label>
                <br>
                <div class="row">
                    <!-- APARÊNCIA DO PONTO LUMINOSO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="df_aparencia_ponto_luminoso">Aparência do Ponto Luminoso</label>
                        <select class="form-control" name="df_aparencia_ponto_luminoso" id="df_aparencia_ponto_luminoso">
                            <option value="Bem Instalado">Bem Instalado</option>
                            <option value="Mal Instalado">Mal Instalado</option>
                            <option value="Sujo">Sujo</option>
                            <option value="Deteriorado">Deteriorado</option>
                        </select>
                    </div>

                    <!-- OBSERVAÇÃO DO PONTO LUMINOSO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="df_observacao_ponto_luminoso">Observação do Ponto Luminoso</label>
                        <input class="form-control" name="df_observacao_ponto_luminoso" id="df_observacao_ponto_luminoso" value="não há observação">
                    </div>

                    <!-- ÁRVORE OFUSCANDO A ILUMINAÇÃO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="df_arvore_ofuscando_iluminacao">Árvore Ofuscando a Iluminação</label>
                        <select class="form-control" name="df_arvore_ofuscando_iluminacao" id="df_arvore_ofuscando_iluminacao">
                            <option value="Sim">Sim</option>
                            <option value="Nao">Não</option>
                        </select>
                    </div>

                    <!-- SITUACAO DO POSTE -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="df_situacao_poste">Situação do Poste</label>
                        <select class="form-control" name="df_situacao_poste" id="df_situacao_poste">
                            <option value="Normal">Normal</option>
                            <option value="Desaprumado">Desaprumado</option>
                            <option value="Fletido">Fletido</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <!-- PROXIMIDADE DA LUMINÁRIA EM RELAÇÃO À REDE DE ENERGIA -->
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="df_proximidade_luminaria_rede_energia">Proximidade da Luminária em Relação à Rede de Energia</label>
                        <select class="form-control" name="df_proximidade_luminaria_rede_energia" id="df_proximidade_luminaria_rede_energia">
                            <option value="Normal">Normal</option>
                            <option value="Proxima">Próxima</option>
                            <option value="Distante">Distante</option>
                        </select>
                    </div>

                    <!-- LOCAL DE DIFÍCIL ACESSO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="df_local_dificil_acesso">Local de Difícil Acesso</label>
                        <select class="form-control" name="df_local_dificil_acesso" id="df_local_dificil_acesso">
                            <option value="Nao">Não</option>
                            <option value="Sim">Sim</option>
                        </select>
                    </div>
                </div>

                <!-- MEDIÇÕES -->
                <label class="titulo-dados">Medições Métricas e Luminotécnicas</label>
                <br>
                <br>
                <div class="row">
                    <!-- POSIÇÃO DOS POSTES -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="md_posicao_poste">Posição dos postes</label>
                        <select class="form-control" name="md_posicao_poste" id="md_posicao_poste">
                            <option value="Unilaterais">Unilaterais</option>
                            <option value="Bilaterais frontal">Bilaterais frontal</option>
                            <option value="Bilaterais alternado">Bilaterais alternado</option>
                            <option value="Canteiro central">Canteiro central</option>
                        </select>
                    </div>               

                </div>

                <br>

                <!-- LAMPADAS APAGADAS -->
                <!-- LAMPADAS APAGADAS -->
                <div class="form-group">
                    <table class="teste">
                        <tr>
                            <td class="v-align" rowspan="2">
                                <label class="subtitulo-dados">Se houver lâmpada apagada marcar posição:</label>
                            </td>
                            <td><label>PL. 1:</label></td>
                            <td class="">
                                <input type="radio" value="Acesa" name="md_lampada_apagada_pl1" checked>Acesa<br>
                                <input type="radio" value="Apagada" name="md_lampada_apagada_pl1">Apagada</td>
                            <td><label>PL. 3:</label></td>
                            <td class="">
                                <input type="radio" value="Acesa" name="md_lampada_apagada_pl3" checked>Acesa<br>
                                <input type="radio" value="Apagada" name="md_lampada_apagada_pl3">Apagada</td>
                            <td>
                                <label>PL. 5:</label></td>
                            <td class="" type="radio" value="Acesa" name="md_lampada_apagada_pl5" checked>Acesa<br>
                                <input type="radio" value="Apagada" name="md_lampada_apagada_pl5">Apagada</td>
                        </tr>
                        <tr>
                            <td><label>PL. 2:</label></td>
                            <td class="">
                                <input type="radio" value="Acesa" name="md_lampada_apagada_pl2" checked>Acesa<br>
                                <input type="radio" value="Apagada" name="md_lampada_apagada_pl2">Apagada</td>
                            <td><label>PL. 4:</label></td>
                            <td class="">
                                <input type="radio" value="Acesa" name="md_lampada_apagada_pl4" checked>Acesa<br>
                                <input type="radio" value="Apagada" name="md_lampada_apagada_pl4">Apagada</td>
                            <td><label>PL. 6:</label></td>
                            <td class="">
                                <input type="radio" value="Acesa" name="md_lampada_apagada_pl6" checked>Acesa<br>
                                <input type="radio" value="Apagada" name="md_lampada_apagada_pl6">Apagada</td>
                        </tr>
                    </table>
                </div>

                <!-- TABELA DE LUMINÂNCIA  -->
                <label class="subtitulo-dados">Lançar Medições na Grade Abaixo - Pontos Equidistantes</label>
                <table class="teste tabela-luminancia">
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l1" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l1" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l1" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l1" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l1" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l1" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l1" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l1" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l1" ></td>
                    </tr>
                    <div class="espaca-linha"> </div>
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l2" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l2" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l2" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l2" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l2" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l2" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l2" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l2" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l2" ></td>
                    </tr>
                    <div class="espaca-linha"> </div>
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l3" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l3" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l3" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l3" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l3" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l3" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l3" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l3" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l3" ></td>
                    </tr>
                    <div class="espaca-linha"> </div>
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l4" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l4" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l4" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l4" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l4" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l4" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l4" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l4" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l4" ></td>
                    </tr>
                    <div class="espaca-linha"> </div>
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l5" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l5" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l5" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l5" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l5" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l5" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l5" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l5" ></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l5" ></td>
                    </tr>
                </table>
                <br>
                <div class="form-group">

                    <table class="teste">
                        <tr>
                            <td class="v-align" rowspan="3">
                                <label class="subtitulo-dados">Distância entre Postes (m)</label>
                            </td>
                            <td><label>P1-P3:</label></td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_distancia_postes_p1_p3">
                            </td>
                            <td><label>P3-P5:</label></td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_distancia_postes_p3_p5">
                            </td>
                        </tr>
                        <tr>
                            <td><label>P2-P4:</label></td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_distancia_postes_p2_p4">
                            </td>
                            <td><label>P4-P6:</label></td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_distancia_postes_p4_p6">
                            </td>
                        </tr>
                        <tr>
                            <td><label>P1-P2:</label></td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_distancia_postes_p1_p2">
                            </td>
                            <td></td>
                            <td></td>
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
                                <input type="text" class="input-tabelas" name="md_altura_luminarias_a1">
                            </td>
                            <td><label>A3:</label></td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_altura_luminarias_a3">
                            </td>
                            <td>
                                <label>A5:</label>
                            </td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_altura_luminarias_a5">
                            </td>
                        </tr>
                        <tr>

                            <td><label>A2:</label></td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_altura_luminarias_a2">
                            </td>
                            <td><label>A4:</label></td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_altura_luminarias_a4">
                            </td>
                            <td><label>A6:</label></td>
                            <td>
                                <input type="text" class="input-tabelas" name="md_altura_luminarias_a6">
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <!-- LARGURA DE VIA -->
                        <label  for="md_largura_via_l1">Largura de Via (m):</label>
                        <input type="text" class="form-control" id="md_largura_via_l1" name="md_largura_via_l1" >
                    </div>
                    <div class="col-md-4">
                        <label>Data:</label>
                        <input type="text" class="form-control" id="datepicker" name="data_cadastro" required>
                        <br>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success">Confirmar</button>
                        <button class="btn btn-danger" onclick="resetForm()">Cancelar</button>
                    </div> 
                </div>
            </div>
        </form>
    </body>
</html>