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

    if (isset($_POST['dt_tipo_luminaria']))
    {
        $dt_tipo_luminaria = $_POST['dt_tipo_luminaria'];
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
                cad_dt_potencia_lampada, cad_dt_tipo_lampada, cad_dt_tipo_luminaria,
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
                '$dt_potencia_lampada', '$dt_tipo_lampada', '$dt_tipo_luminaria',
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
            function showfieldTipoLampada(name){
            if(name=='otherTipoLampada')document.getElementById('outraTipoLampada').innerHTML=
                '<div class="form-group col-lg-12 col-md-12 col-sm-12"><label for="otherTipoLampada">Outra:</label> <input type="text" class="form-control" id="otherTipoLampada" name="otherTipoLampada" required/>';
            else document.getElementById('outraTipoLampada').innerHTML='';
            }
          //  <div class="form-group col-lg-3 col-md-6 col-sm-12">
          //              <label for="md_largura_via_l2">Largura de Via 2 (m):</label>
          //              <input type="text" class="form-control" id="md_largura_via_l2" name="md_largura_via_l2" required> 
          //          </div>
        </script>
        <script type="text/javascript">
            function showfieldPotenciaLampada(name){
            if(name=='otherPotenciaLampada')document.getElementById('outraPotenciaLampada').innerHTML='<div class="form-group col-lg-12 col-md-12 col-sm-12"><label for="otherPotenciaLampada">Outra:</label> <input type="text" class="form-control" id="otherPotenciaLampada" name="otherPotenciaLampada" required/>';
            else document.getElementById('outraPotenciaLampada').innerHTML='';
            }
        </script>
        <script type="text/javascript">
            function showfieldTipoLuminaria(name){
            if(name=='otherTipoLuminaria')document.getElementById('outraTipoLuminaria').innerHTML='<div class="form-group col-lg-12 col-md-12 col-sm-12"><label for="otherTipoLuminaria">Outra:</label> <input type="text" class="form-control" id="otherTipoLuminaria" name="otherTipoLuminaria" required/>';
            else document.getElementById('outraTipoLuminaria').innerHTML='';
            }
        </script>
        <script type="text/javascript">
            function showfieldTipoPoste(name){
            if(name=='otherTipoPoste')document.getElementById('outraTipoPoste').innerHTML='<div class="form-group col-lg-12 col-md-12 col-sm-12"><label for="otherTipoPoste">Outra:</label> <input type="text" class="form-control" id="otherTipoPoste" name="otherTipoPoste" required/>';
            else document.getElementById('outraTipoPoste').innerHTML='';
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
                        <input type="number" class="form-control" id="idPoste" name="id_poste">
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
                <div class="row">
                    <!-- POTÊNCIA DA LÂMPADA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_potencia_lampada">Potência da Lâmpada (W)</label>                    
                        <select class="form-control" id="dt_potencia_lampada" name="dt_potencia_lampada" onchange="showfieldPotenciaLampada(this.options[this.selectedIndex].value)">
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
                            <option value="otherPotenciaLampada">Outra</option>
                        </select>
                        <div id="outraPotenciaLampada"></div>
                    </div>     
                    
                    <!-- TIPO DA LÂMPADA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_lampada">Tipo da Lâmpada</label>
                        <select class="form-control" id="dt_tipo_lampada" name="dt_tipo_lampada" onchange="showfieldTipoLampada(this.options[this.selectedIndex].value)">
                            <option value="compacta">Compacta</option>
                            <option value="halogena">Halógena</option>
                            <option value="Fluorescente">Fluorescente</option>
                            <option value="vapor de sodio">Vapor de Sódio</option>
                            <option value="multi vapor metalico">Multi Vapor Metálico</option>
                            <option value="vapor de mercurio">Vapor de Mercúrio</option>
                            <option value="mista">Mista</option>
                            <option value="led">LED</option>
                            <option value="otherTipoLampada">Outra</option>
                        </select>
                        <div id="outraTipoLampada"></div>
                    </div>

                    <!-- TIPO DE LUMINÁRIA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_luminaria">Tipo da Luminária</label>
                        <select class="form-control" name="dt_tipo_luminaria" id="dt_tipo_luminaria" onchange="showfieldTipoLuminaria(this.options[this.selectedIndex].value)">
                            <option value="aberta">Aberta</option>
                            <option value="fechada">Fechada</option>
                            <option value="decorativa">Decorativa</option>
                            <option value="petala">Pétala</option>
                            <option value="faixa de pedestre">Faixa de Pedestre</option>
                            <option value="fechada ornamental">Fechada Ornamental</option>
                            <option value="projetor">Projetor</option>
                            <option value="otherTipoLuminaria">Outra</option>
                        </select>
                        <div id="outraTipoLuminaria"></div>
                    </div>
                    
                    <!-- TIPO DO POSTE -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_material_poste">Tipo do Poste</label>
                        <select class="form-control" name="dt_material_poste" id="dt_material_poste" onchange="showfieldTipoPoste(this.options[this.selectedIndex].value)">
                            <option value="aco com base teleconico curvado">Aço com base telecônico curvado</option>
                            <option value="aco com base teleconico">Aço com base telecônico</option>
                            <option value="aco com base redondo">Aço com base redondo</option>
                            <option value="aco com base octogonal">Aço com base octogonal</option>
                            <option value="aco engastado redondo">Aço engastado redondo</option>
                            <option value="aco engastado octogonal">Aço engastado octogonal</option>
                            <option value="aco engastado teleconico">Aço engastado telecônico</option>
                            <option value="aco engastado telecônico curvado">Aço engastado telecônico curvado</option>
                            <option value="concreto DT">Concreto DT</option>
                            <option value="concreto R">Concreto R </option>
                            <option value="ferro fundido">Ferro fundido</option>
                            <option value="Fibra">Fibra</option>
                            <option value="madeira">Madeira</option>
                            <option value="sem poste">Sem poste</option>
                            <option value="otherTipoPoste">Outro</option>
                        </select>
                        <div id="outraTipoPoste"></div>
                    </div>
                    
                </div>

                <div class="row">
                    <!-- USO DO POSTE -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_altura_poste">Uso do Poste</label>
                        <select class="form-control" name="dt_uso_poste" id="dt_uso_poste">
                            <option value="exclusivo p/ iluminacao publica">Exclusivo p/ Iluminação Pública</option>
                            <option value="compatilado c/ outros servicos">Compartilhado CEB</option>
                            <option value="compatilado c/ outros servicos">Compartilhado c/ Outros Serviços</option>
                        </select>
                    </div>                    
                    
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
                    <!-- TIPO DE BRAÇO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_braco">Tipo do Braço</label>
                        <select class="form-control" name="dt_tipo_braco" id="dt_tipo_braco">
                            <option value="normal">Normal</option>
                            <option value="especial">Especial</option>
                            <option value="suporte">Suporte</option>
                            <option value="fixação direta topo">Fixação direta topo</option>
                        </select>
                    </div>    
                    
                    <!-- TAMANHO DE BRAÇO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tamanho_braco">Tamanho do Braço</label>
                        <select class="form-control" name="dt_tamanho_braco" id="dt_tamanho_braco">
                            <option value="normal">Curto (menor 1,5m)</option>
                            <option value="especial">Médio (1,6 a 2,5m)</option>
                            <option value="suporte">Longo (maior que 2,5m)</option>
                            <option value="fixação direta topo">Fixação direta topo</option>
                        </select>
                    </div>
                    
                </div>
                <div class="row">
                    <!-- TIPO DE COMANDO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_comando">Tipo de Comando</label>
                        <select class="form-control" name="dt_tipo_comando" id="dt_tipo_comando">
                            <option value="individual">Individual</option>
                            <option value="chave magnetica">Chave magnética</option>
                            <option value="quadro comando">Quadro comando</option>
                            <option value="telegestao">Telegestão</option>
                        </select>
                    </div>
                    
                    <!-- TIPO DE REATOR -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_tipo_reator">Tipo de Reator</label>
                        <select class="form-control" name="dt_tipo_reator" id='dt_tipo_reator'>
                            <option value="externo">Externo</option>
                            <option value="interno">Interno</option>
                            <option value="ext duplo nivel">Ext. duplo nível</option>
                            <option value="int duplo nivel">Int. duplo nível</option>
                            <option value="sem reator">Sem Reator</option>
                        </select>
                    </div>

                    <!-- FORMA DE DISTRIBUIÇÃO DE ENERGIA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_rede_alimentacao">Rede de alimentação</label>
                        <select class="form-control" name="dt_rede_alimentacao" id="dt_rede_alimentacao">
                            <option value="aerea convencional">Aérea convencional</option>
                            <option value="aerea multiplexada">Aérea multiplexada</option>
                            <option value="irregular">Irregular (provisória)</option>
                            <option value="subterranea">Subterrânea</option>
                        </select>
                    </div>
                    
                    <!-- NUMERO DE PETALAS -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_numero_petalas">Número de pétalas</label>
                        <input class="form-control" name="dt_numero_petalas" id="dt_numero_petalas">
                    </div>
                </div>
                <div class="row">
                    <!-- NOME DA LUMINARIA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_nome_luminaria">Nome da Luminária</label>
                        <input class="form-control" name="dt_nome_luminaria" id="dt_nome_luminaria">
                    </div>
                    <!-- FABRICANTE DA LUMINARIA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="dt_fabricante_luminaria">Fabricante da Luminária</label>
                        <input class="form-control" name="dt_fabricante_luminaria" id="dt_fabricante_luminaria">
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
                            <option value="conforme">Conforme</option>
                            <option value="nao conforme">Não conforme</option>
                            <option value="luminaria suja">Luminária suja</option>
                            <option value="deteriorado">Corroído</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="df_aparencia_ponto_luminoso">Observação do Ponto Luminoso</label>
                        <input class="form-control" name="df_aparencia_ponto_luminoso" id="df_aparencia_ponto_luminoso">
                    </div>

                    <!-- ESTADO DA LÂMPADA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="df_estado_lampada">Estado da Lâmpada</label>
                        <select class="form-control" name="df_estado_lampada" id="df_estado_lampada">
                            <option value="acesa">Acesa</option>
                            <option value="apagada">Apagada</option>
                            <option value="acesa de dia">Acesa de dia</option>
                        </select>
                    </div>

                    <!-- ÁRVORE OFUSCANDO A ILUMINAÇÃO -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="df_arvore_ofuscando_iluminacao">Árvore Ofuscando a Iluminação</label>
                        <select class="form-control" name="df_arvore_ofuscando_iluminacao" id="df_arvore_ofuscando_iluminacao">
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <!-- POSICIONAMENTO DO POSTE -->
                    <div class="form-group col-lg-4 col-md-4 col-sm-12">
                        <label for="df_posicionamento_poste">Posicionamento do Poste</label>
                        <select class="form-control" name="df_posicionamento_poste" id="df_posicionamento_poste">
                            <option value="normal">Normal</option>
                            <option value="desaprumado">Desaprumado</option>
                            <option value="fletido">Fletido</option>
                        </select>
                    </div>
                
                    <!-- PROXIMIDADE DA LUMINÁRIA EM RELAÇÃO À REDE DE ENERGIA -->
                    <div class="form-group col-lg-4 col-md-4 col-sm-12">
                        <label for="df_proximidade_luminaria_rede_energia">Proximidade da Luminária à Rede de Energia</label>
                        <select class="form-control" name="df_proximidade_luminaria_rede_energia" id="df_proximidade_luminaria_rede_energia">
                            <option value="normal">Normal</option>
                            <option value="proxima">Próxima</option>
                            <option value="distante">Distante</option>
                        </select>
                    </div>

                    <!-- LOCAL DE DIFÍCIL ACESSO -->
                    <div class="form-group col-lg-4 col-md-4 col-sm-12">
                        <label for="df_local_dificil_acesso">Local de Difícil Acesso</label>
                        <select class="form-control" name="df_local_dificil_acesso" id="df_local_dificil_acesso">
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                </div>

                <!-- MEDIÇÕES -->
                <label class="titulo-dados">Medições Métricas e Luminotécnicas</label>
                <br>
                <br>
                <label class="subtitulo-dados">Grade Padrão</label>
                <div class="row">
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">   
                        <label for="md_configuracao">Configuração</label>
                        <select class="form-control" name="md_configuracao" id ="md_configuracao">
                            <option value="pu">PU</option>
                            <option value="pbf">PBF</option>
                            <option value="pba">PBA</option>
                            <option value="pcc">PCC</option>
                        </select>
                    </div>          
                    <!-- LARGURA DE CADA VIA -->
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">                        
                        <label  for="md_largura_via_l1">Largura de Via 1 (m):</label>
                        <input type="text" class="form-control" id="md_largura_via_l1" name="md_largura_via_l1" required>
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="md_largura_via_l2">Largura de Via 2 (m):</label>
                        <input type="text" class="form-control" id="md_largura_via_l2" name="md_largura_via_l2" required> 
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="md_largura_via_l2">Altura Montagem (m):</label>
                        <input type="text" class="form-control" id="md_altura_montagem" name="md_altura_montagem" required> 
                    </div>
                </div>
                <div class="row">

                    <div class="form-group col-lg-3 col-md-6 col-sm-12"> 
                        <label  for="md_projecao_horizontal_braco">Projeção Horizontal Braço (m):</label>
                        <input type="text" class="form-control" id="md_projecao_horizontal_braco" name="md_projecao_horizontal_braco" required>
                    </div>  

                    <div class="form-group col-lg-3 col-md-6 col-sm-12"> 
                        <label  for="md_largura_calcada_l1">Largura da Calçada 1 (m):</label>
                        <input type="text" class="form-control" id="md_largura_calcada_l1" name="md_largura_calcada_l1" required>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="md_largura_calcada_l2">Largura da Calçada 2 (m):</label>
                        <input type="text" class="form-control" id="md_largura_calcada_l2" name="md_largura_calcada_l2" required> 

                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="md_espacamento_entre_postes">Espaçamento entre Postes (m):</label>
                        <input type="text" class="form-control" id="md_espacamento_entre_postes" name="md_espacamento_entre_postes" required> 

                    </div>
                </div>
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
                <div class="row">
                    <div class="col-md-4"></div>
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