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

//$id_edit = $_GET['id_poste'];

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

    if (isset($_POST['dg_cg_p1_lat']))
    {
        $dg_cg_p1_lat = $_POST['dg_cg_p1_lat'];
    } else {
        $dg_cg_p1_lat = 0;
    }

    if (isset($_POST['dg_cg_p1_long']))
    {
        $dg_cg_p1_long = $_POST['dg_cg_p1_long'];
    } else {
        $dg_cg_p1_long = 0;
    }

    if (isset($_POST['dg_cg_p2_lat']))
    {
        $dg_cg_p2_lat = $_POST['dg_cg_p2_lat'];
    } else {
        $dg_cg_p2_lat = 0;
    }

    if (isset($_POST['dg_cg_p2_long']))
    {
        $dg_cg_p2_long = $_POST['dg_cg_p2_long'];
    } else {
        $dg_cg_p2_long = 0;
    }

    if (isset($_POST['dg_cg_p3_lat']))
    {
        $dg_cg_p3_lat = $_POST['dg_cg_p3_lat'];
    } else {
        $dg_cg_p3_lat = 0;
    }

    if (isset($_POST['dg_cg_p3_long']))
    {
        $dg_cg_p3_long = $_POST['dg_cg_p3_long'];
    } else {
        $dg_cg_p3_long = 0;
    }

    if (isset($_POST['dg_cg_p4_lat']))
    {
        $dg_cg_p4_lat = $_POST['dg_cg_p4_lat'];
    } else {
        $dg_cg_p4_lat = 0;
    }

    if (isset($_POST['dg_cg_p4_long']))
    {
        $dg_cg_p4_long = $_POST['dg_cg_p4_long'];
    } else {
        $dg_cg_p4_long = 0;
    }

    if (isset($_POST['dg_cg_p5_lat']))
    {
        $dg_cg_p5_lat = $_POST['dg_cg_p5_lat'];
    } else {
        $dg_cg_p5_lat = 0;
    }

    if (isset($_POST['dg_cg_p5_long']))
    {
        $dg_cg_p5_long = $_POST['dg_cg_p5_long'];
    } else {
        $dg_cg_p5_long = 0;
    }

    if (isset($_POST['dg_cg_p6_lat']))
    {
        $dg_cg_p6_lat = $_POST['dg_cg_p6_lat'];
    } else {
        $dg_cg_p6_lat = 0;
    }

    if (isset($_POST['dg_cg_p6_long']))
    {
        $dg_cg_p6_long = $_POST['dg_cg_p6_long'];
    } else {
        $dg_cg_p6_long = 0;
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

    if (isset($_POST['dt_tipo_luminaria']))
    {
        if ($_POST['dt_tipo_luminaria'] != "otherTipoLuminaria") {
            $dt_tipo_luminaria = $_POST['dt_tipo_luminaria'];
        } else {
            $dt_tipo_luminaria = $_POST['otherTipoLuminaria'];
        }
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

    if (isset($_POST['dt_tipo_comando']))
    {
        $dt_tipo_comando = $_POST['dt_tipo_comando'];
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

    if (isset($_POST['df_observacao_ponto_luminoso']))
    {
        $df_observacao_ponto_luminoso = $_POST['df_observacao_ponto_luminoso'];
    } else {
        $df_observacao_ponto_luminoso = "";
    }

    if (isset($_POST['md_posicao_poste']))
    {
        $md_posicao_poste = $_POST['md_posicao_poste'];
    }

    if (isset($_POST['df_arvore_ofuscando_iluminacao']))
    {
        $df_arvore_ofuscando_iluminacao = $_POST['df_arvore_ofuscando_iluminacao'];
    }

    if (isset($_POST['df_situacao_poste']))
    {
        $df_situacao_poste = $_POST['df_situacao_poste'];
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

    // COMANDO SQL CADASTRO CEB
    $sql_cad = "INSERT INTO cad_ceb
                (cad_idPoste, cad_data_cadastro, 
                cad_dg_cg_p2_lat, cad_dg_cg_p2_long, cad_dg_cg_p3_lat, cad_dg_cg_p3_long, cad_dg_cg_p4_lat, cad_dg_cg_p4_long, cad_dg_cg_p5_lat, cad_dg_cg_p5_long, cad_dg_cg_p6_lat, cad_dg_cg_p6_long,
                cad_dt_potencia_lampada, cad_dt_tipo_lampada, cad_dt_tipo_luminaria,
                cad_dt_tipo_braco, cad_dt_altura_poste,
                cad_dt_material_poste, cad_dt_uso_poste,
                cad_dt_tipo_comando, cad_dt_tipo_reator,
                cad_dt_forma_distribuicao_energia,
                cad_df_aparencia_ponto_luminoso,
                cad_df_observacao_ponto_luminoso,
                cad_md_posicao_poste, 
                cad_df_arvore_ofuscando_iluminacao,
                cad_df_situacao_poste,
                cad_df_proximidade_luminaria_rede_energia,
                cad_df_local_dificil_acesso,
                cad_md_configuracao, 
                cad_md_largura_via_l1, cad_md_largura_via_l2, 
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
                '$dg_cg_p2_lat', '$dg_cg_p2_long',
                '$dg_cg_p3_lat', '$dg_cg_p3_long',
                '$dg_cg_p4_lat', '$dg_cg_p4_long',
                '$dg_cg_p5_lat', '$dg_cg_p5_long',
                '$dg_cg_p6_lat', '$dg_cg_p6_long',
                '$dt_potencia_lampada', '$dt_tipo_lampada', '$dt_tipo_luminaria',
                '$dt_tipo_braco', '$dt_altura_poste',
                '$dt_material_poste', '$dt_uso_poste',
                '$dt_tipo_comando', '$dt_tipo_reator',
                '$dt_forma_distribuicao_energia',
                '$df_aparencia_ponto_luminoso', $df_observacao_ponto_luminoso,
                '$md_posicao_poste', '$df_arvore_ofuscando_iluminacao',
                '$df_situacao_poste', '$df_proximidade_luminaria_rede_energia',
                '$df_local_dificil_acesso',
                '$md_configuracao',
                '$md_largura_via_l1', '$md_largura_via_l2',
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
                if(name=='otherTipoLuminaria')document.getElementById('outraTipoLuminaria').innerHTML='<div class="form-group col-lg-12 col-md-12 col-sm-12"><label for="otherTipoLuminaria">Outra:</label> <input type="text" class="form-control" id="otherTipoLuminaria" name="otherTipoLuminaria" required/>';
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
        <form method="POST" id="form">
            <div class="form-group">

                <!-- DADOS GEOGRÁFICOS -->
                <label class="titulo-dados">Dados Geográficos</label>
                <!-- CLASSE DA VIA --> 
                <div class="row">
                    <div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <label for="idPoste">ID do Poste</label>
                        <input type="number" class="form-control" id="idPoste" name="id_poste" required>
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
                    <div class="form-group col-lg-3 col-md-6 col-sm-12"></div>
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
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p1_lat" required>
                            </td>
                            <td class="v-align" rowspan="2">
                                <label>P2</label>
                            </td>
                            <td>
                                <label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p2_lat" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p1_lng" required>
                            </td>
                            <td>
                                <label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p2_lng" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align" rowspan="2"><label>P3</label></td>
                            <td><label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p3_lat" required></td>
                            <td class="v-align" rowspan="2"><label>P4</label></td>
                            <td><label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p4_lat" required></td>
                        </tr>
                        <tr>
                            <td><label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p3_lng" required></td>
                            <td><label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p4_lng" required></td>
                        </tr>
                        <tr>
                            <td class="v-align" rowspan="2"> <label>P5</label></td>
                            <td><label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p5_lat" required></td>
                            <td class="v-align" rowspan="2"><label>P6</label></td>
                            <td> <label class="espaca-coluna">LAT:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p6_lat" required></td>
                        </tr>
                        <tr>
                            <td><label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p5_lng" required></td>

                            <td> <label class="espaca-coluna">LNG:</label>
                                <input type="text" class="input-tabelas-coordenadas" name="dg_cg_p6_lng" required></td>
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
                            <option value="Exclusivo P/ Iluminacao pública">Exclusivo p/ Iluminação Pública</option>
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
                        <input class="form-control" name="df_observacao_ponto_luminoso" id="df_observacao_ponto_luminoso">
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
                <label class="subtitulo-dados">Grade Padrão</label>
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
                <div class="form-group">
                        <table class="teste">
                            <tr>
                                <td class="v-align" rowspan="2">
                                    <label class="subtitulo-dados">Se houver lampada apagada marcar posição (m)</label>
                                </td>
                                <td><label>PL - 1:</label></td>
                                <td>
                                    <input type="checkbox" value="apagado" name="md_lampada_apagada_pl1">
                                </td>
                                <td><label>PL - 3:</label></td>
                                <td>
                                    <input type="checkbox" value="apagado" name="md_lampada_apagada_pl3">
                                </td>
                                <td>
                                    <label>PL - 5:</label>
                                </td>
                                <td>
                                    <input type="checkbox" value="apagado" name="md_lampada_apagada_pl5">
                                </td>
                            </tr>
                            <tr>

                                <td><label>PL - 2:</label></td>
                                <td>
                                    <input type="checkbox" value="apagado" name="md_lampada_apagada_pl2">
                                </td>
                                <td><label>PL - 4:</label></td>
                                <td>
                                    <input type="checkbox" value="apagado" name="md_lampada_apagada_pl4">
                                </td>
                                <td><label>PL - 6:</label></td>
                                <td>
                                    <input type="checkbox" value="apagado" name="md_lampada_apagada_pl6">
                                </td>
                            </tr>
                        </table>
                </div>

                <!-- TABELA DE LUMINÂNCIA  -->
                <label class="subtitulo-dados">Lançar Medições na Grade Abaixo - Pontos Equidistantes</label>
                <table class="teste tabela-luminancia">
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l1" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l1" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l1" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l1" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l1" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l1" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l1" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l1" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l1" required></td>
                    </tr>
                    <div class="espaca-linha"> </div>
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l2" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l2" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l2" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l2" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l2" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l2" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l2" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l2" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l2" required></td>
                    </tr>
                    <div class="espaca-linha"> </div>
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l3" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l3" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l3" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l3" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l3" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l3" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l3" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l3" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l3" required></td>
                    </tr>
                    <div class="espaca-linha"> </div>
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l4" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l4" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l4" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l4" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l4" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l4" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l4" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l4" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l4" required></td>
                    </tr>
                    <div class="espaca-linha"> </div>
                    <tr>
                        <td class="elimina-recuo"><input type="text" class="input-tabelas" name="md_c1_l5" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c2_l5" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c3_l5" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c4_l5" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c5_l5" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c6_l5" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c7_l5" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c8_l5" required></td>
                        <td><input type="text" class="input-tabelas" name="md_c9_l5" required></td>
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
                        <label  for="md_largura_via_l1">Largura de Via(m):</label>
                        <input type="text" class="form-control" id="md_largura_via_l1" name="md_largura_via_l1" required>
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