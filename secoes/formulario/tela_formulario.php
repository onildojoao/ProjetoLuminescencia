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

    // ID DO POSTE  
    if (isset($_POST['id_poste']))
    {
        $id_poste = $_POST['id_poste'];
    }

    // DADOS GEOGRÁFICOS
    if (isset($_POST['dg_classe_via']))
    {
        $dg_classe_via = $_POST['dg_classe_via'];
    }

    if (isset($_POST['dg_cg_p1_utmx']))
    {
        $dg_cg_p1_utmx = $_POST['dg_cg_p1_utmx'];
    } else {
        $dg_cg_p1_utmx = 0;
    }

    if (isset($_POST['dg_cg_p1_utmy']))
    {
        $dg_cg_p1_utmy = $_POST['dg_cg_p1_utmy'];
    } else {
        $dg_cg_p1_utmy = 0;
    }

    if (isset($_POST['dg_cg_p2_utmx']))
    {
        $dg_cg_p2_utmx = $_POST['dg_cg_p2_utmx'];
    } else {
        $dg_cg_p2_utmx = 0;
    }

    if (isset($_POST['dg_cg_p2_utmy']))
    {
        $dg_cg_p2_utmy = $_POST['dg_cg_p2_utmy'];
    } else {
        $dg_cg_p2_utmy = 0;
    }

    if (isset($_POST['dg_cg_p3_utmx']))
    {
        $dg_cg_p3_utmx = $_POST['dg_cg_p3_utmx'];
    } else {
        $dg_cg_p3_utmx = 0;
    }

    if (isset($_POST['dg_cg_p3_utmy']))
    {
        $dg_cg_p3_utmy = $_POST['dg_cg_p3_utmy'];
    } else {
        $dg_cg_p3_utmy = 0;
    }

    if (isset($_POST['dg_cg_p4_utmx']))
    {
        $dg_cg_p4_utmx = $_POST['dg_cg_p4_utmx'];
    } else {
        $dg_cg_p4_utmx = 0;
    }

    if (isset($_POST['dg_cg_p4_utmy']))
    {
        $dg_cg_p4_utmy = $_POST['dg_cg_p4_utmy'];
    } else {
        $dg_cg_p4_utmy = 0;
    }

    if (isset($_POST['dg_cg_p5_utmx']))
    {
        $dg_cg_p5_utmx = $_POST['dg_cg_p5_utmx'];
    } else {
        $dg_cg_p5_utmx = 0;
    }

    if (isset($_POST['dg_cg_p5_utmy']))
    {
        $dg_cg_p5_utmy = $_POST['dg_cg_p5_utmy'];
    } else {
        $dg_cg_p5_utmy = 0;
    }

    if (isset($_POST['dg_cg_p6_utmx']))
    {
        $dg_cg_p6_utmx = $_POST['dg_cg_p6_utmx'];
    } else {
        $dg_cg_p6_utmx = 0;
    }

    if (isset($_POST['dg_cg_p6_utmy']))
    {
        $dg_cg_p6_utmy = $_POST['dg_cg_p6_utmy'];
    } else {
        $dg_cg_p6_utmy = 0;
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

    if (isset($_POST['df_proximidade_luminaria_rede_energia']))
    {
        $df_proximidade_luminaria_rede_energia = $_POST['df_proximidade_luminaria_rede_energia'];
    }

    if (isset($_POST['df_local_dificil_acesso']))
    {
        $df_local_dificil_acesso = $_POST['df_local_dificil_acesso'];
    }

    // MEDIÇÕES
    if (isset($_POST['md_configuracao']))
    {
        $md_configuracao = $_POST['md_configuracao'];
    }

    if (isset($_POST['md_largura_via_l1']))
    {
        $md_largura_via_l1 = $_POST['md_largura_via_l1'];
    } else {
        $md_largura_via_l1 = 0;
    }

    if (isset($_POST['md_largura_via_l2']))
    {
        $md_largura_via_l2 = $_POST['md_largura_via_l2'];
    } else {
        $md_largura_via_l2 = 0;
    }

    if (isset($_POST['md_largura_calcada_l1']))
    {
        $md_largura_calcada_l1 = $_POST['md_largura_calcada_l1'];
    } else {
        $md_largura_calcada_l1 = 0;
    }

    if (isset($_POST['md_largura_calcada_l2']))
    {
        $md_largura_calcada_l2 = $_POST['md_largura_calcada_l2'];
    } else {
        $md_largura_calcada_l2 = 0;
    }

    if (isset($_POST['md_altura_montagem']))
    {
        $md_altura_montagem = $_POST['md_altura_montagem'];
    } else {
        $md_altura_montagem = 0;
    }

    if (isset($_POST['md_projecao_horizontal_braco']))
    {
        $md_projecao_horizontal_braco = $_POST['md_projecao_horizontal_braco'];
    } else {
        $md_projecao_horizontal_braco = 0;
    }

    if (isset($_POST['md_espacamento_entre_postes']))
    {
        $md_espacamento_entre_postes = $_POST['md_espacamento_entre_postes'];
    } else {
        $md_espacamento_entre_postes = 0;
    }

    // TABELA DE LUMINÂNCIA

    // PRIMEIRA LINHA DA TABELA
    if (isset($_POST['md_c1_l1']))
    {
        $md_c1_l1 = $_POST['md_c1_l1'];
    } else {
        $md_c1_l1 = 0;
    }
    if (isset($_POST['md_c2_l1']))
    {
        $md_c2_l1 = $_POST['md_c2_l1'];
    } else {
        $md_c2_l1 = 0;
    }
    if (isset($_POST['md_c3_l1']))
    {
        $md_c3_l1 = $_POST['md_c3_l1'];
    } else {
        $md_c3_l1 = 0;
    }
    if (isset($_POST['md_c4_l1']))
    {
        $md_c4_l1 = $_POST['md_c4_l1'];
    } else {
        $md_c4_l1 = 0;
    }
    if (isset($_POST['md_c5_l1']))
    {
        $md_c5_l1 = $_POST['md_c5_l1'];
    } else {
        $md_c5_l1 = 0;
    }

    // SEGUNDA LINHA DA TABELA
    if (isset($_POST['md_c1_l2']))
    {
        $md_c1_l2 = $_POST['md_c1_l2'];
    } else {
        $md_c1_l2 = 0;
    }
    if (isset($_POST['md_c2_l2']))
    {
        $md_c2_l2 = $_POST['md_c2_l2'];
    } else {
        $md_c2_l2 = 0;
    }
    if (isset($_POST['md_c3_l2']))
    {
        $md_c3_l2 = $_POST['md_c3_l2'];
    } else {
        $md_c3_l2 = 0;
    }
    if (isset($_POST['md_c4_l2']))
    {
        $md_c4_l2 = $_POST['md_c4_l2'];
    } else {
        $md_c4_l2 = 0;
    }
    if (isset($_POST['md_c5_l2']))
    {
        $md_c5_l2 = $_POST['md_c5_l2'];
    } else {
        $md_c5_l2 = 0;
    }

    //TERCEIRA LINHA DA TABELA
    if (isset($_POST['md_c1_l3']))
    {
        $md_c1_l3 = $_POST['md_c1_l3'];
    } else {
        $md_c1_l3 = 0;
    }
    if (isset($_POST['md_c2_l3']))
    {
        $md_c2_l3 = $_POST['md_c2_l3'];
    } else {
        $md_c2_l3 = 0;
    }
    if (isset($_POST['md_c3_l3']))
    {
        $md_c3_l3 = $_POST['md_c3_l3'];
    } else {
        $md_c3_l3 = 0;
    }
    if (isset($_POST['md_c4_l3']))
    {
        $md_c4_l3 = $_POST['md_c4_l3'];
    } else {
        $md_c4_l3 = 0;
    }
    if (isset($_POST['md_c5_l3']))
    {
        $md_c5_l3 = $_POST['md_c5_l3'];
    } else {
        $md_c5_l3 = 0;
    }

    // QUARTA LINHA DA TABELA
    if (isset($_POST['md_c1_l4']))
    {
        $md_c1_l4 = $_POST['md_c1_l4'];
    } else {
        $md_c1_l4 = 0;
    }
    if (isset($_POST['md_c2_l4']))
    {
        $md_c2_l4 = $_POST['md_c2_l4'];
    } else {
        $md_c2_l4 = 0;
    }
    if (isset($_POST['md_c3_l4']))
    {
        $md_c3_l4 = $_POST['md_c3_l4'];
    } else {
        $md_c3_l4 = 0;
    }
    if (isset($_POST['md_c4_l4']))
    {
        $md_c4_l4 = $_POST['md_c4_l4'];
    } else {
        $md_c4_l4 = 0;
    }
    if (isset($_POST['md_c5_l4']))
    {
        $md_c5_l4 = $_POST['md_c5_l4'];
    } else {
        $md_c5_l4 = 0;
    }

    // QUINTA LINHA DA TABELA
    if (isset($_POST['md_c1_l5']))
    {
        $md_c1_l5 = $_POST['md_c1_l5'];
    } else {
        $md_c1_l5 = 0;
    }
    if (isset($_POST['md_c2_l5']))
    {
        $md_c2_l5 = $_POST['md_c2_l5'];
    } else {
        $md_c2_l5 = 0;
    }
    if (isset($_POST['md_c3_l5']))
    {
        $md_c3_l5 = $_POST['md_c3_l5'];
    } else {
        $md_c3_l5 = 0;
    }
    if (isset($_POST['md_c4_l5']))
    {
        $md_c4_l5 = $_POST['md_c4_l5'];
    } else {
        $md_c4_l5 = 0;
    }
    if (isset($_POST['md_c5_l5']))
    {
        $md_c5_l5 = $_POST['md_c5_l5'];
    } else {
        $md_c5_l5 = 0;
    }

    // SEXTA LINHA DA TABELA
    if (isset($_POST['md_c1_l6']))
    {
        $md_c1_l6 = $_POST['md_c1_l6'];
    } else {
        $md_c1_l6 = 0;
    }
    if (isset($_POST['md_c2_l6']))
    {
        $md_c2_l6 = $_POST['md_c2_l6'];
    } else {
        $md_c2_l6 = 0;
    }
    if (isset($_POST['md_c3_l6']))
    {
        $md_c3_l6 = $_POST['md_c3_l6'];
    } else {
        $md_c3_l6 = 0;
    }
    if (isset($_POST['md_c4_l6']))
    {
        $md_c4_l6 = $_POST['md_c4_l6'];
    } else {
        $md_c4_l6 = 0;
    }
    if (isset($_POST['md_c5_l6']))
    {
        $md_c5_l6 = $_POST['md_c5_l6'];
    } else {
        $md_c5_l6 = 0;
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
    //$conexao->beginTransaction();

    // COMANDO SQL CADASTRO
    $sql_cad = "INSERT INTO cad_cadastro
                (cad_idPoste, cad_data_cadastro, 
                cad_dg_cg_p2_utmx, cad_dg_cg_p2_utmy, cad_dg_cg_p3_utmx, cad_dg_cg_p3_utmy, cad_dg_cg_p4_utmx, cad_dg_cg_p4_utmy, cad_dg_cg_p5_utmx, cad_dg_cg_p5_utmy, cad_dg_cg_p6_utmx, cad_dg_cg_p6_utmy,
                cad_dt_potencia_lampada, cad_dt_tipo_lampada,
                cad_dt_tipo_braco, cad_dt_altura_poste,
                cad_dt_material_poste, cad_dt_uso_poste,
                cad_dt_tipo_rele, cad_dt_tipo_reator,
                cad_dt_forma_distribuicao_energia,
                cad_df_aparencia_ponto_luminoso,
                cad_df_estado_lampada, 
                cad_df_arvore_ofuscando_iluminacao,
                cad_df_posicionamento_poste,
                cad_df_proximidade_luminaria_rede_energia,
                cad_df_local_dificil_acesso,
                cad_md_configuracao, 
                cad_md_largura_via_l1, cad_md_largura_via_l2, cad_md_largura_calcada_l1, cad_md_largura_calcada_l2, 
                cad_md_altura_montagem,
                cad_md_projecao_horizontal_braco,
                cad_md_espacamento_entre_postes,
                cad_md_c1_l1, cad_md_c2_l1, cad_md_c3_l1,
                cad_md_c4_l1, cad_md_c5_l1, 
                cad_md_c1_l2,cad_md_c2_l2, cad_md_c3_l2, 
                cad_md_c4_l2, cad_md_c5_l2, 
                cad_md_c1_l3, cad_md_c2_l3, cad_md_c3_l3,
                cad_md_c4_l3, cad_md_c5_l3,
                cad_md_c1_l4, cad_md_c2_l4, cad_md_c3_l4,
                cad_md_c4_l4, cad_md_c5_l4, 
                cad_md_c1_l5, cad_md_c2_l5, cad_md_c3_l5,
                cad_md_c4_l5, cad_md_c5_l5,
                cad_md_c1_l6, cad_md_c2_l6, cad_md_c3_l6,
                cad_md_c4_l6, cad_md_c5_l6,
                cad_cpf_usuario, cad_nome_usuario) VALUES 
                ('$id_poste', '$data_cadastro',
                '$dg_cg_p2_utmx', '$dg_cg_p2_utmy',
                '$dg_cg_p3_utmx', '$dg_cg_p3_utmy',
                '$dg_cg_p4_utmx', '$dg_cg_p4_utmy',
                '$dg_cg_p5_utmx', '$dg_cg_p5_utmy',
                '$dg_cg_p6_utmx', '$dg_cg_p6_utmy',
                '$dt_potencia_lampada', '$dt_tipo_lampada',
                '$dt_tipo_braco', '$dt_altura_poste',
                '$dt_material_poste', '$dt_uso_poste',
                '$dt_tipo_rele', '$dt_tipo_reator',
                '$dt_forma_distribuicao_energia',
                '$df_aparencia_ponto_luminoso',
                '$df_estado_lampada', '$df_arvore_ofuscando_iluminacao',
                '$df_posicionamento_poste', '$df_proximidade_luminaria_rede_energia',
                '$df_local_dificil_acesso',
                '$md_configuracao',
                '$md_largura_via_l1', '$md_largura_via_l2',
                '$md_largura_calcada_l1', '$md_largura_calcada_l2',
                '$md_altura_montagem', 
                '$md_projecao_horizontal_braco',
                '$md_espacamento_entre_postes',
                '$md_c1_l1', '$md_c2_l1', '$md_c3_l1',
                '$md_c4_l1', '$md_c5_l1',
                '$md_c1_l2', '$md_c2_l2', '$md_c3_l2',
                '$md_c4_l2', '$md_c5_l2',
                '$md_c1_l3', '$md_c2_l3', '$md_c3_l3',
                '$md_c4_l3', '$md_c5_l3',
                '$md_c1_l4', '$md_c2_l4', '$md_c3_l4',
                '$md_c4_l4', '$md_c5_l4',
                '$md_c1_l5', '$md_c2_l5', '$md_c3_l5',
                '$md_c4_l5', '$md_c5_l5',
                '$md_c1_l6', '$md_c3_l6', '$md_c3_l6',
                '$md_c4_l6', '$md_c5_l6',
                '$usu_cpf', '$usu_nome')";

    $retorno_cad = $conexao->query($sql_cad);

    if ($retorno_cad == true) 
    {
        $ok_cad = "ok";

    } else {
        $ok_cad = "false";
    }

    // COMANDO SQL POSTE PRINCIPAL
    $sql_pp = "UPDATE pp_posteprincipal
               SET pp_classe_via = '$dg_classe_via'
               WHERE pp_id = '$id_poste'";

    $retorno_pp = $conexao->query($sql_pp);

    if ($retorno_pp == true) 
    {
        $ok_pp = "ok";

    } else {

        $ok_pp = "false";

        echo "Erro poste principal " .$conexao->erro;
    }



    if (($ok_pp == "ok") && ($ok_cad == "ok"))
    {
        //$conexao->commit();
        echo "<script>
        alert('Cadastrado com Sucesso!');
        location.href = '../menu/menu_principal.php';
        </script>";

    } else {
        //$conexao->rollBack();
        echo "<script>
        alert('Erro ao Cadastrar!');
        </script>";

        //echo $erro_pp;
        //echo $erro_cad;

        //header('Location: tela_formulario.php');
    }
} 

?>

<html>
    <head>

        <meta charset="UTF-8">

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


        <div class="area-campo">

            <div class="ficha-campo txt-ao-centro oxygen-regular">
                <br>
                <form class="form center-block" method="POST" id="form">
                    
                    <div class="texto chamada-home oxygen-regular">
                        <p>Preencha a Ficha de Campo abaixo.
                        Complete todos os campos abaixo, se não for possível relizar alguma medição, complete com o valor 0!</p>
                    </div> 
                    <br>

                    <label class="subtitulo-dados">ID do Poste</label>
                    <input type="number" name="id_poste" required>
                    <br>

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
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p1_utmx" required>
                                </td>
                                <td class="v-align" rowspan="2">
                                    <label>P2</label>
                                </td>
                                <td>
                                    <label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p2_utmx" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p1_utmy" required>
                                </td>
                                <td>
                                    <label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p2_utmy" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="v-align" rowspan="2"><label>P3</label></td>
                                <td><label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p3_utmx" required></td>
                                <td class="v-align" rowspan="2"><label>P4</label></td>
                                <td><label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p4_utmx" required></td>
                            </tr>
                            <tr>
                                <td><label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p3_utmy" required></td>
                                <td><label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p4_utmy" required></td>
                            </tr>
                            <tr>
                                <td class="v-align" rowspan="2"> <label>P5</label></td>
                                <td><label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p5_utmx" required></td>
                                <td class="v-align" rowspan="2"><label>P6</label></td>
                                <td> <label>UTM-X:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p6_utmx" required></td>
                            </tr>
                            <tr>
                                <td><label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p5_utmy" required></td>

                                <td> <label>UTM-Y:</label>
                                    <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p6_utmy" required></td>
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
                        <select class="selectpicker" name="df_proximidade_luminaria_rede_energia">
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
                    <label class="titulo-dados">Medições Métricas e Luminotécnicas</label>
                    <br>
                    <br>
                    <label class="subtitulo-dados">Grade Padrão</label>
                    <table class="teste">
                        <tr class="espaco-tabela">
                            <td colspan="2">
                                <div>
                                    <!-- CONFIGURAÇÃO -->
                                    <label>Configuração</label>
                                    <select class="selectpicker" name="md_configuracao">
                                        <option value="pu">PU</option>
                                        <option value="pbf">PBF</option>
                                        <option value="pba">PBA</option>
                                        <option value="pcc">PCC</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr class="espaco-tabela">
                            <td colspan="2">
                                <label class="subtitulo-dados">Dados da Via</label>
                            </td>
                        </tr>
                        <tr class="espaco-tabela">
                            <td colspan="2">
                                <!-- LARGURA DE CADA VIA -->
                                <label>Largura de Cada Via (m):</label>
                                <input type="text" class="input-tabelas" name="md_largura_via_l1" required>
                                -
                                <input type="text" class="input-tabelas" name="md_largura_via_l2" required>
                            </td>
                        </tr>
                        <tr class="espaco-tabela">
                            <td colspan="2">
                                <!-- LARGURA DA CALÇADA -->
                                <label>Largura da Calçada (m):</label>
                                <input type="text" class="input-tabelas" name="md_largura_calcada_l1" required>
                                -
                                <input type="text" class="input-tabelas" name="md_largura_calcada_l2" required>
                            </td>
                        </tr>
                        <tr class="espaco-tabela">
                            <td colspan="2">
                                <!-- ALTURA MONTAGEM -->
                                <label>Altura Montagem (m):</label>
                                <input type="text" class="input-tabelas" name="md_altura_montagem" required>
                            </td>
                        </tr>
                        <tr class="espaco-tabela">
                            <td colspan="2">
                                <!-- PROJEÇÃO HORIZONTAL BRAÇO -->
                                <label>Projeção Horizontal Braço (m):</label>
                                <input type="text" class="input-tabelas" name="md_projecao_horizontal_braco" required>
                            </td>
                        </tr>
                        <tr class="espaco-tabela">
                            <td  colspan="2">
                                <!-- ESPAÇAMENTO ENTRE POSTES -->
                                <label>Espaçamento entre Postes (m):</label>
                                <input type="text" class="input-tabelas" name="md_espacamento_entre_postes" required>
                            </td>
                        </tr>
                    </table>
                    <br>

                    <!-- TABELA DE LUMINÂNCIA  -->
                    <label class="subtitulo-dados">Lançar Medições na Grade Abaixo - Pontos Equidistantes</label>
                    <table class="teste tabela-luminancia">
                        <tr>
                            <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l1" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c2_l1" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c3_l1" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c4_l1" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c5_l1" required></td>
                        </tr>
                        <div class="espaca-linha"> </div>
                        <tr>
                            <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l2" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c2_l2" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c3_l2" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c4_l2" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c5_l2" required></td>
                        </tr>
                        <div class="espaca-linha"> </div>
                        <tr>
                            <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l3" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c2_l3" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c3_l3" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c4_l3" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c5_l3" required></td>
                        </tr>
                        <div class="espaca-linha"> </div>
                        <tr>
                            <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l4" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c2_l4" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c3_l4" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c4_l4" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c5_l4" required></td>
                        </tr>
                        <div class="espaca-linha"> </div>
                        <tr>
                            <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l5" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c2_l5" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c3_l5" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c4_l5" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c5_l5" required></td>
                        </tr>
                        <div class="espaca-linha"> </div>
                        <tr>
                            <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l6" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c2_l6" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c3_l6" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c4_l6" required></td>
                            <td><input type="text" class="input-tabelas" name="md_c5_l6" required></td>
                        </tr>
                    </table>
                    <br>

                    <label>Data:</label>
                    <input type="text" id="datepicker" name="data_cadastro" required>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-success btn-acessar fonte-bold transition mukta-bold transition hover center-block">Confirmar</button>
                    </div>
                </form>
                <button class="btn btn-danger btn-cancelar fonte-bold transition mukta-bold transition hover center-block" onclick="resetForm()">Cancelar</button>
            </div>
        </div>
    </body>
</html>