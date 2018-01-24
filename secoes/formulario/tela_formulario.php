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

if ($_POST != null)
{

    // DADOS GEOGRÁFICOS
    if (isset($_POST['dg_classe_via']))
    {
        $dg_classe_via = $_POST['dg_classe_via'];
    }

    if (isset($_POST['dg_cg_p1_utmx']))
    {
        $dg_cg_p1_utmx = $_POST['dg_cg_p1_utmx'];
    }

    if (isset($_POST['dg_cg_p1_utmy']))
    {
        $dg_classe_via = $_POST['dg_cg_p1_utmy'];
    }

    if (isset($_POST['dg_cg_p2_utmx']))
    {
        $dg_cg_p2_utmx = $_POST['dg_cg_p2_utmx'];
    }

    if (isset($_POST['dg_cg_p2_utmy']))
    {
        $dg_cg_p2_utmy = $_POST['dg_cg_p2_utmy'];
    }

    if (isset($_POST['dg_cg_p3_utmx']))
    {
        $dg_cg_p3_utmx = $_POST['dg_cg_p3_utmx'];
    }

    if (isset($_POST['dg_cg_p3_utmy']))
    {
        $dg_cg_p3_utmy = $_POST['dg_cg_p3_utmy'];
    }

    if (isset($_POST['dg_cg_p4_utmx']))
    {
        $dg_cg_p4_utmx = $_POST['dg_cg_p4_utmx'];
    }

    if (isset($_POST['dg_cg_p4_utmy']))
    {
        $dg_cg_p4_utmy = $_POST['dg_cg_p4_utmy'];
    }

    if (isset($_POST['dg_cg_p5_utmx']))
    {
        $dg_cg_p5_utmx = $_POST['dg_cg_p5_utmx'];
    }

    if (isset($_POST['dg_cg_p5_utmy']))
    {
        $dg_cg_p5_utmy = $_POST['dg_cg_p5_utmy'];
    }

    if (isset($_POST['dg_cg_p6_utmx']))
    {
        $dg_cg_p6_utmx = $_POST['dg_cg_p6_utmx'];
    }

    if (isset($_POST['dg_cg_p6_utmy']))
    {
        $dg_cg_p1_utmx = $_POST['dg_cg_p6_utmy'];
    }

    // DADOS TÉCNICOS
    if (isset($_POST['dt_potencia_lampada']))
    {
        $dt_potencia_lampada = $_POST['dt_potencia_lampada'];
    }

    if (isset($_POST['dt_tipo_lampada']))
    {
        $dt_tipo_lampada = $_POST['dt_tipo_lampada'];
    }

    if (isset($_POST['dt_tipo_braco']))
    {
        $dt_tipo_braco = $_POST['dt_tipo_braco'];
    }

    if (isset($_POST['dt_altura_poste']))
    {
        $dt_altura_poste = $_POST['dt_altura_poste'];
    }

    if (isset($_POST['dt_material_poste']))
    {
        $dt_material_poste = $_POST['dt_material_poste'];
    }

    if (isset($_POST['dt_uso_poste']))
    {
        $dt_uso_poste = $_POST['dt_uso_poste'];
    }

    if (isset($_POST['dt_tipo_rele']))
    {
        $dt_tipo_rele = $_POST['dt_tipo_rele'];
    }

    if (isset($_POST['dt_tipo_reator']))
    {
        $dt_tipo_reator = $_POST['dt_tipo_reator'];
    }

    if (isset($_POST['dt_forma_distribuicao_energia']))
    {
        $dt_forma_distribuicao_energia = $_POST['dt_forma_distribuicao_energia'];
    }

    // DADOS FÍSICOS
    if (isset($_POST['df_aparencia_ponto_luminoso']))
    {
        $df_aparencia_ponto_luminoso = $_POST['df_aparencia_ponto_luminoso'];
    }

    if (isset($_POST['df_estado_lampada']))
    {
        $df_estado_lampada = $_POST['df_estado_lampada'];
    }

    if (isset($_POST['df_arvore_ofuscando_iluminacao']))
    {
        $df_arvore_ofuscando_iluminacao = $_POST['df_arvore_ofuscando_iluminacao'];
    }

    if (isset($_POST['df_posicionamento_poste']))
    {
        $df_posicionamento_poste = $_POST['df_posicionamento_poste'];
    }

    if (isset($_POST['df_proximixade_luminaria_rede_energia']))
    {
        $df_proximixade_luminaria_rede_energia = $_POST['df_proximixade_luminaria_rede_energia'];
    }

    if (isset($_POST['df_local_dificil_acesso']))
    {
        $dg_classe_via = $_POST['df_local_dificil_acesso'];
    }

    // MEDIÇÕES
    if (isset($_POST['md_distancia_postes_p1_p3']))
    {
        $md_distancia_postes_p1_p3 = $_POST['md_distancia_postes_p1_p3'];
    }

    if (isset($_POST['md_distancia_postes_p3_p5']))
    {
        $md_distancia_postes_p3_p5 = $_POST['md_distancia_postes_p3_p5'];
    }

    if (isset($_POST['md_distancia_postes_p2_p4']))
    {
        $md_distancia_postes_p2_p4 = $_POST['md_distancia_postes_p2_p4'];
    }

    if (isset($_POST['md_distancia_postes_p4_p6']))
    {
        $md_distancia_postes_p4_p6 = $_POST['md_distancia_postes_p4_p6'];
    }

    if (isset($_POST['md_distancia_postes_p1_p2']))
    {
        $md_distancia_postes_p1_p2 = $_POST['md_distancia_postes_p1_p2'];
    }

    if (isset($_POST['md_distancia_postes_p5_p6']))
    {
        $md_distancia_postes_p5_p6 = $_POST['md_distancia_postes_p5_p6'];
    }

    if (isset($_POST['md_altura_luminarias_a1']))
    {
        $md_altura_luminarias_a1 = $_POST['md_altura_luminarias_a1'];
    }

    if (isset($_POST['md_altura_luminarias_a3']))
    {
        $md_altura_luminarias_a3 = $_POST['md_altura_luminarias_a3'];
    }

    if (isset($_POST['md_altura_luminarias_a5']))
    {
        $md_altura_luminarias_a5 = $_POST['md_altura_luminarias_a5'];
    }

    if (isset($_POST['md_altura_luminarias_a2']))
    {
        $md_altura_luminarias_a2 = $_POST['md_altura_luminarias_a2'];
    }

    if (isset($_POST['md_altura_luminarias_a4']))
    {
        $md_altura_luminarias_a4 = $_POST['md_altura_luminarias_a4'];
    }

    if (isset($_POST['md_altura_luminarias_a6']))
    {
        $md_altura_luminarias_a6 = $_POST['md_altura_luminarias_a6'];
    }

    if (isset($_POST['md_altura_luminarias_a4']))
    {
        $md_altura_luminarias_a4 = $_POST['md_altura_luminarias_a4'];
    }

    if (isset($_POST['md_largura_via_publica_l5_l6']))
    {
        $md_largura_via_publica_l5_l6 = $_POST['md_largura_via_publica_l5_l6'];
    }

    // DATA DE CADASTRO
    if (isset($_POST['data_cadastro']))
    {
        $data_cadastro = $_POST['data_cadastro'];
    }

    // DADOS DO USUÁRIO
    if (isset($_SESSION['usu_cpf']))
    {
        $usu_cpf = $_SESSION['usu_cpf'];
    }

    if (isset($_SESSION['usu_nome']))
    {
        $usu_nome = $_SESSION['usu_nome'];
    }

    // START TRANSACTION - CONFIGURAÇÃO PARA EVITAR "MEIOS SALVAMENTOS"
    $conexao->beginTransaction();
    // COMANDO SQL POSTE PRINCIPAL
    $sql_pp = "INSERT INTO pp_posteprincipal
                () VALUES 
                ()";

    $retorno_pp = $conexao->query($sql_pp);

    if ($retorno_pp == true) 
    {
        $ok_pp = "true";

    } else {

        $ok_pp = "false";

        $erro_pp = $conexao->erro;
    }

    // COMANDO SQL CADASTRO
    $sql_cad = "INSERT INTO cad_cadastro
                () VALUES 
                ()";

    $retorno_cad = $conexao->query($sql_cad);

    if ($retorno_cad == true) 
    {
        $ok_cad = "true";

    } else {

        $ok_cad = "false";

        $erro_cad = $conexao->erro;
    }

    if (($ok_pp == "true") && ($ok_cad == "true"))
    {
        $conexao->commit();
        echo "<script>
        alert('Cadastrado com Sucesso!');
        location.href = '../menu/menu_principal.php';
        </script>";

    } else {
        $conexao->rollBack();
        echo "<script>
        alert('Erro ao Cadastrar!');
        location.href = '../menu/menu_principal.php';
        </script>";

        echo $erro_pp;
        echo $erro_cad;

        header('Location: tela_formulario.php');
    }
} 

?>

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

        <div class="logout">
            <button type="submit" class="btn btn-success" onclick="location.href='../menu/menu_principal.php'">Retornar ao Menu</button>
            
            <button type="submit" class="btn btn-secondary" onclick="location.href='../login/acao_logout.php'">Logout</button>
            
        </div>

        <div class="area-campo">

            <div class="ficha-campo txt-ao-centro oxygen-regular">
                <br>
                <form class="form center-block" action="acao_formulario.php" method="POST">

                    <div class="texto chamada-home oxygen-regular">
                        Preencha a Ficha de Campo abaixo.
                    </div> 

                    <!-- DADOS GEOGRÁFICOS -->
                    <label class="titulo-dados">Dados Geográficos</label>
                    <br>

                    <!-- CLASSE DA VIA -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Classe da Via</label>
                        <select class="selectpicker" name="dg_classe_via">
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

                    <!-- COORDENADA GEORREFERÊNCIADA -->
                    <label class="subtitulo-dados ">Coordenada Georreferênciada</label>
                    <div class="form-group">
                        <table class="teste" border="1px solid black">
                            <tr>
                                <td class="v-align" rowspan="2">
                                    <label>P1</label>
                                </td>
                                <td>
                                    <label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p1_utmx">
                                </td>
                                <td class="v-align" rowspan="2">
                                    <label>P2</label>
                                </td>
                                <td>
                                    <label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p2_utmx">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p1_utmy">
                                </td>
                                <td>
                                    <label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p2_utmy">
                                </td>
                            </tr>
                            <tr>
                                <td class="v-align" rowspan="2"><label>P3</label></td>
                                <td><label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p3_utmx"></td>
                                <td class="v-align" rowspan="2"><label>P4</label></td>
                                <td><label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p4_utmx"></td>
                            </tr>
                            <tr>
                                <td><label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p3_utmy"></td>
                                <td><label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p4_utmy"></td>
                            </tr>
                            <tr>
                                <td class="v-align" rowspan="2"> <label>P5</label></td>
                                <td><label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p5_utmx"></td>
                                <td class="v-align" rowspan="2"><label>P6</label></td>
                                <td> <label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p6_utmx"></td>
                            </tr>
                            <tr>
                                <td><label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p5_utmy"></td>

                                <td> <label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p6_utmy"></td>
                            </tr>
                        </table>
                    </div>

                    <!-- DADOS TÉCNICOS -->
                    <label class="titulo-dados">Dados Técnicos</label>
                    <br>

                    <!-- POTÊNCIA DA LÂMPADA -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Potência da Lâmpada (W)</label>
                        <select class="selectpicker" name="dt_potencia_lampada">
                            <option value="20">20</option>
                            <option value="26">26</option>
                            <option value="40">40</option>
                            <option value="56">56</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
                            <option value="100">100</option>
                            <option value="125">125</option>
                            <option value="150">150</option>
                            <option value="160">160</option>
                            <option value="250">250</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                            <option value="500">500</option>
                            <option value="600">600</option>
                            <option value="800">800</option>
                            <option value="1000">1000</option>
                            <option value="2000">2000</option>
                        </select>
                    </div>

                    <!-- TIPO DA LÂMPADA -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Tipo da Lâmpada</label>
                        <select class="selectpicker" name="dt_tipo_lampada">
                            <option value="compacta">Compacta</option>
                            <option value="halogena">Halógena</option>
                            <option value="Fluorescente">Fluorescente</option>
                            <option value="vapor de sodio">Vapor de Sódio</option>
                            <option value="multi vapor metalico">Multi Vapor Metálico</option>
                            <option value="vapor de mercurio">Vapor de Mercúrio</option>
                            <option value="mista">Mista</option>
                            <option value="led">LED</option>
                        </select>
                    </div>

                    <!-- TIPO DE LUMINÁRIA -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Tipo de Luminária</label>
                        <select class="selectpicker" name="dt_tipo_luminaria">
                            <option value="aberta">Aberta</option>
                            <option value="fechada">Fechada</option>
                            <option value="decorativa">Decorativa</option>
                            <option value="petala">Pétala</option>
                            <option value="faixa de pedestre">Faixa de Pedestre</option>
                            <option value="fechada ornamental">Fechada Ornamental</option>
                            <option value="projetor">Projetor</option>
                            <option value="outra">Outra</option>
                        </select>
                    </div>

                    <!-- TIPO DE BRAÇO -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Tipo de Braço</label>
                        <select class="selectpicker" name="dt_tipo_braco">
                            <option value="cruzeta n1.1">Cruzeta N1.1</option>
                            <option value="cruzeta n1.2">Cruzeta N1.2</option>
                            <option value="cruzeta n2.1">Cruzeta N2.1</option>
                            <option value="cruzeta n2.2">Cruzeta N2.2</option>
                            <option value="pesado 48">Pesado 48</option>
                            <option value="pesado 60">Pesado 60</option>
                            <option value="meio pesado">Meio Pesado</option>
                            <option value="sem cruzeta">Sem Cruzeta</option>
                            <option value="suporte petala">Suporte Pétala</option>
                            <option value="sem braco">Sem Braço</option>
                            <option value="leve">Leve</option>
                        </select>
                    </div>

                    <!-- ALTURA DO POSTE -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Altura do Poste (m)</label>
                        <select class="selectpicker" name="dt_altura_poste">
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
                    <div class="form-group">
                        <label class="subtitulo-dados">Material do Poste</label>
                        <select class="selectpicker" name="dt_material_poste">
                            <option value="abrigo projetor alvenaria">Abrigo Projetor Alvenaria</option>
                            <option value="aco">Aço</option>
                            <option value="aco faixa pedestre">aço Faixa Pedestre</option>
                            <option value="concreto s/c (rl-35)">Concreto S/C (RL-35)</option>
                            <option value="concreto s/c (l-30)">Concreto S/C (L-30)</option>
                            <option value="concreto s/c (l-35)">Concreto S/C (L-35)</option>
                            <option value="concreto s/c (r-30)">Concreto S/C (R-30)</option>
                            <option value="concreto dt">Concreto DT</option>
                            <option value="concreto s/c">Concreto S/C</option>
                            <option value="aco c/ sapata">Aço c/ Sapata</option>
                            <option value="madeira">Madeira</option>
                            <option value="nao informado">Não Informado</option>
                        </select>
                    </div>

                    <!-- USO DO POSTE -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Uso do Poste</label>
                        <select class="selectpicker" name="dt_uso_poste">
                            <option value="exclusivo p/ iluminacao publica">Exclusivo p/ Iluminação Pública</option>
                            <option value="compatilado c/ outros servicos">Compartilhado c/ Outros Serviços</option>
                        </select>
                    </div>

                    <!-- TIPO DE RELÊ -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Tipo de Relê</label>
                        <select class="selectpicker" name="dt_tipo_rele">
                            <option value="fotoeletrico">Fotoelétrico</option>
                            <option value="foto-eletonico">Foto-eletrônico</option>
                            <option value="sem rele">Sem Relê</option>
                            <option value="nao informado">Não Informado</option>
                        </select>
                    </div>

                    <!-- TIPO DE REATOR -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Tipo de Reator</label>
                        <select class="selectpicker" name="dt_tipo_reator">
                            <option value="externo">Externo</option>
                            <option value="interno">Interno</option>
                            <option value="sem reator">Sem Reator</option>
                            <option value="nao informado">Não Informado</option>
                        </select>
                    </div>

                    <!-- FORMA DE DISTRIBUIÇÃO DE ENERGIA -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Forma de Distribuição de Energia</label>
                        <select class="selectpicker" name="dt_forma_distribuicao_energia">
                            <option value="aerea">Aérea</option>
                            <option value="subterranea">Subterrânea</option>
                        </select>
                    </div>

                    <!-- DADOS FÍSICOS -->
                    <label class="titulo-dados">Dados Físicos</label>
                    <br>

                    <!-- APARÊNCIA DO PONTO LUMINOSO -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Aparência do Ponto Luminoso</label>
                        <select class="selectpicker" name="df_aparencia_ponto_luminoso">
                            <option value="bem instalado">Bem Instalado</option>
                            <option value="mal instalado">Mal Instalado</option>
                            <option value="sujo">Sujo</option>
                            <option value="corroido">Corroído</option>
                        </select>
                    </div>

                    <!-- ESTADO DA LÂMPADA -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Estado da Lâmpada</label>
                        <select class="selectpicker" name="df_estado_lampada">
                            <option value="acesa">Acesa</option>
                            <option value="apagada">Apagada</option>
                        </select>
                    </div>

                    <!-- ÁRVORE OFUSCANDO A ILUMINAÇÃO -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Árvore Ofuscando a Iluminação</label>
                        <select class="selectpicker" name="df_arvore_ofuscando_iluminacao">
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>

                    <!-- POSICIONAMENTO DO POSTE -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Posicionamento do Poste</label>
                        <select class="selectpicker" name="df_posicionamento_poste">
                            <option value="normal">Normal</option>
                            <option value="desaprumado">Desaprumado</option>
                            <option value="fletido">Fletido</option>
                        </select>
                    </div>

                    <!-- PROXIMIDADE DA LUMINÁRIA EM RELAÇÃO À REDE DE ENERGIA -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Proximidade da Luminária em Relação à Rede de Energia</label>
                        <select class="selectpicker" name="df_proximixade_luminaria_rede_energia">
                            <option value="normal">Normal</option>
                            <option value="proxima">Próxima</option>
                            <option value="distante">Distante</option>
                        </select>
                    </div>

                    <!-- LOCAL DE DIFÍCIL ACESSO -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Local de Difícil Acesso</label>
                        <select class="selectpicker" name="df_local_dificil_acesso">
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>

                    <!-- MEDIÇÕES -->
                    <label class="titulo-dados">Medições</label>
                    <br>
                    <!-- TABELA DE LUMINÂNCIA  -->
                    <label class="subtitulo-dados">Medições de iluminância (em lux), utilizando luxímetro digital com precisão 0,1 lux:</label>
                    <table class="teste">
                        <tr>
                            <td></td>
                            <td><label>IP A</label></td>
                            <td><label>25%</label></td>
                            <td><label>50%</label></td>
                            <td><label>75%</label></td>
                            <td><label>IP B</label></td>
                            <td><label>25%</label></td>
                            <td><label>50%</label></td>
                            <td><label>75%</label></td>
                            <td><label>IP C</label></td>
                        </tr>
                        <tr>
                            <td><label>0%</label></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                        </tr>
                        <tr>
                            <td><label>25%</label></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                        </tr>
                        <tr>
                            <td><label>50%</label></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                        </tr>
                        <tr>
                            <td><label>75%</label></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                        </tr>
                        <tr>
                            <td><label>100%</label></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                            <td><input type="text" class="input-tabelas" name=""></td>
                        </tr>
                    </table>
                    <br>

                    <!-- DISTÂNCIA ENTRE POSTES -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Distância entre Postes (m)</label>
                        <br>
                        <label class="subtitulo-dados">Medições métricas com equipamento a laser de precisão 0,1 metro:</label>
                        <table class="teste">
                            <tr>
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
                                <td><label>P5-P6:</label></td>
                                <td>
                                    <input type="text" class="input-tabelas" name="md_distancia_postes_p5_p6">
                                </td> 
                            </tr>
                        </table>
                    </div>

                    <!-- ALTURA DAS LUMINÁRIAS -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Altura das Luminárias (m)</label>
                        <table class="teste">
                            <tr>
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

                    <!-- LARGURA DA VIA PÚBLICA -->
                    <div class="form-group">
                        <label class="subtitulo-dados">Largura da Via Pública (m)</label>
                        <table class="teste">
                            <tr>
                                <td><label>L1-L2:</label></td>
                                <td>
                                    <input type="text" class="input-tabelas" name="md_largura_via_publica_l1_l2">
                                </td>
                                <td><label>L5-L6:</label></td>
                                <td>
                                    <input type="text" class="input-tabelas" name="md_largura_via_publica_l5_l6">
                                </td>
                            </tr>
                        </table>
                    </div>

                    <label>Data:</label>
                    <input type="text" id="datepicker" name="data_cadastro">

                    <div class="form-group row">
                        <button type="submit" class="btn btn-success btn-acessar fonte-bold transition mukta-bold transition hover center-block">Confirmar</button>
                    </div>
                </form>
                <button class="btn btn-danger btn-cancelar fonte-bold transition mukta-bold transition hover center-block">Cancelar</button>
            </div>
        </div>
    </body>
</html>