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

    // POSTE PRINCIPAL
    if (isset($_POST['pp_estado']))
    {
        $pp_estado = $_POST['pp_estado'];
    }

    if (isset($_POST['pp_cidade']))
    {
        $pp_cidade = $_POST['pp_cidade'];
    }

    if (isset($_POST['pp_regiao_administrativa']))
    {
        $pp_regiao_administrativa = $_POST['pp_regiao_administrativa'];
    }

    if (isset($_POST['pp_endereco']))
    {
        $pp_endereco = $_POST['pp_endereco'];
    }

    if (isset($_POST['pp_endereco_observacao']))
    {
        $pp_endereco_observacao = $_POST['pp_endereco_observacao'];
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

    if (isset($_POST['dg_cg_p1_lng']))
    {
        $dg_cg_p1_lng = $_POST['dg_cg_p1_lng'];
    } else {
        $dg_cg_p1_lng = 0;
    }

    if (isset($_POST['dg_cg_p2_lat']))
    {
        $dg_cg_p2_lat = $_POST['dg_cg_p2_lat'];
    } else {
        $dg_cg_p2_lat = 0;
    }

    if (isset($_POST['dg_cg_p2_lng']))
    {
        $dg_cg_p2_lng = $_POST['dg_cg_p2_lng'];
    } else {
        $dg_cg_p2_lng = 0;
    }

    if (isset($_POST['dg_cg_p3_lat']))
    {
        $dg_cg_p3_lat = $_POST['dg_cg_p3_lat'];
    } else {
        $dg_cg_p3_lat = 0;
    }

    if (isset($_POST['dg_cg_p3_lng']))
    {
        $dg_cg_p3_lng = $_POST['dg_cg_p3_lng'];
    } else {
        $dg_cg_p3_lng = 0;
    }

    if (isset($_POST['dg_cg_p4_lat']))
    {
        $dg_cg_p4_lat = $_POST['dg_cg_p4_lat'];
    } else {
        $dg_cg_p4_lat = 0;
    }

    if (isset($_POST['dg_cg_p4_lng']))
    {
        $dg_cg_p4_lng = $_POST['dg_cg_p4_lng'];
    } else {
        $dg_cg_p4_lng = 0;
    }

    if (isset($_POST['dg_cg_p5_lat']))
    {
        $dg_cg_p5_lat = $_POST['dg_cg_p5_lat'];
    } else {
        $dg_cg_p5_lat = 0;
    }

    if (isset($_POST['dg_cg_p5_lng']))
    {
        $dg_cg_p5_lng = $_POST['dg_cg_p5_lng'];
    } else {
        $dg_cg_p5_lng = 0;
    }

    if (isset($_POST['dg_cg_p6_lat']))
    {
        $dg_cg_p6_lat = $_POST['dg_cg_p6_lat'];
    } else {
        $dg_cg_p6_lat = 0;
    }

    if (isset($_POST['dg_cg_p6_lng']))
    {
        $dg_cg_p6_lng = $_POST['dg_cg_p6_lng'];
    } else {
        $dg_cg_p6_lng = 0;
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
    if (isset($_POST['md_posicao_poste']))
    {
        $md_posicao_poste = $_POST['md_posicao_poste'];
    }

    if (isset($_POST['md_lampada_apagada_pl1'])){
        $md_lampada_apagada_pl1 = $_POST['md_lampada_apagada_pl1'];
    }
    if (isset($_POST['md_lampada_apagada_pl2'])){
        $md_lampada_apagada_pl2 = $_POST['md_lampada_apagada_pl2'];
    }
    if (isset($_POST['md_lampada_apagada_pl3'])){
        $md_lampada_apagada_pl3 = $_POST['md_lampada_apagada_pl3'];
    }
    if (isset($_POST['md_lampada_apagada_pl4'])){
        $md_lampada_apagada_pl4 = $_POST['md_lampada_apagada_pl4'];
    }
    if (isset($_POST['md_lampada_apagada_pl5'])){
        $md_lampada_apagada_pl5 = $_POST['md_lampada_apagada_pl5'];
    }
    if (isset($_POST['md_lampada_apagada_pl6'])){
        $md_lampada_apagada_pl6 = $_POST['md_lampada_apagada_pl6'];
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
    if (isset($_POST['md_c5_l1']))
    {
        $md_c5_l1 = $_POST['md_c5_l1'];
    } else {
        $md_c5_l1 = 0;
    }
    if (isset($_POST['md_c6_l1']))
    {
        $md_c6_l1 = $_POST['md_c6_l1'];
    } else {
        $md_c6_l1 = 0;
    }
    if (isset($_POST['md_c7_l1']))
    {
        $md_c7_l1 = $_POST['md_c7_l1'];
    } else {
        $md_c7_l1 = 0;
    }
    if (isset($_POST['md_c8_l1']))
    {
        $md_c8_l1 = $_POST['md_c8_l1'];
    } else {
        $md_c8_l1 = 0;
    }
    if (isset($_POST['md_c9_l1']))
    {
        $md_c9_l1 = $_POST['md_c9_l1'];
    } else {
        $md_c9_l1 = 0;
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
    if (isset($_POST['md_c6_l2']))
    {
        $md_c6_l2 = $_POST['md_c6_l2'];
    } else {
        $md_c6_l2 = 0;
    }
    if (isset($_POST['md_c7_l2']))
    {
        $md_c7_l2 = $_POST['md_c7_l2'];
    } else {
        $md_c7_l2 = 0;
    }
    if (isset($_POST['md_c8_l2']))
    {
        $md_c8_l2 = $_POST['md_c8_l2'];
    } else {
        $md_c8_l2 = 0;
    }
    if (isset($_POST['md_c9_l2']))
    {
        $md_c9_l2 = $_POST['md_c9_l2'];
    } else {
        $md_c9_l2 = 0;
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
    if (isset($_POST['md_c6_l3']))
    {
        $md_c6_l3 = $_POST['md_c6_l3'];
    } else {
        $md_c6_l3 = 0;
    }
    if (isset($_POST['md_c7_l3']))
    {
        $md_c7_l3 = $_POST['md_c7_l3'];
    } else {
        $md_c7_l3 = 0;
    }
    if (isset($_POST['md_c8_l3']))
    {
        $md_c8_l3 = $_POST['md_c8_l3'];
    } else {
        $md_c8_l3 = 0;
    }
    if (isset($_POST['md_c9_l3']))
    {
        $md_c9_l3 = $_POST['md_c9_l3'];
    } else {
        $md_c9_l3 = 0;
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
    if (isset($_POST['md_c6_l4']))
    {
        $md_c6_l4 = $_POST['md_c6_l4'];
    } else {
        $md_c6_l4 = 0;
    }
    if (isset($_POST['md_c7_l4']))
    {
        $md_c7_l4 = $_POST['md_c7_l4'];
    } else {
        $md_c7_l4 = 0;
    }
    if (isset($_POST['md_c8_l4']))
    {
        $md_c8_l4 = $_POST['md_c8_l4'];
    } else {
        $md_c8_l4 = 0;
    }
    if (isset($_POST['md_c9_l4']))
    {
        $md_c9_l4 = $_POST['md_c9_l4'];
    } else {
        $md_c9_l4 = 0;
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
    if (isset($_POST['md_c6_l5']))
    {
        $md_c6_l5= $_POST['md_c6_l5'];
    } else {
        $md_c6_l5 = 0;
    }
    if (isset($_POST['md_c7_l5']))
    {
        $md_c7_l5 = $_POST['md_c7_l5'];
    } else {
        $md_c7_l5 = 0;
    }
    if (isset($_POST['md_c8_l5']))
    {
        $md_c8_l5 = $_POST['md_c8_l5'];
    } else {
        $md_c8_l5 = 0;
    }
    if (isset($_POST['md_c9_l5']))
    {
        $md_c9_l5 = $_POST['md_c9_l5'];
    } else {
        $md_c9_l5 = 0;
    }

    if (isset($_POST['md_distancia_postes_p1_p3']))
    {
        $md_distancia_postes_p1_p3 = $_POST['md_distancia_postes_p1_p3'];
    } else {
        $md_distancia_postes_p1_p3 = 0;
    }
    if (isset($_POST['md_distancia_postes_p3_p5']))
    {
        $md_distancia_postes_p3_p5 = $_POST['md_distancia_postes_p3_p5'];
    } else {
        $md_distancia_postes_p3_p5 = 0;
    }
    if (isset($_POST['md_distancia_postes_p2_p4']))
    {
        $md_distancia_postes_p2_p4 = $_POST['md_distancia_postes_p2_p4'];
    } else {
        $md_distancia_postes_p2_p4 = 0;
    }
    if (isset($_POST['md_distancia_postes_p4_p6']))
    {
        $md_distancia_postes_p4_p6 = $_POST['md_distancia_postes_p4_p6'];
    } else {
        $md_distancia_postes_p4_p6 = 0;
    }
    if (isset($_POST['md_distancia_postes_p1_p2']))
    {
        $md_distancia_postes_p1_p2 = $_POST['md_distancia_postes_p1_p2'];
    } else {
        $md_distancia_postes_p1_p2 = 0;
    }

    if (isset($_POST['md_altura_luminarias_a1']))
    {
        $md_altura_luminarias_a1 = $_POST['md_altura_luminarias_a1'];
    } else {
        $md_altura_luminarias_a1 = 0;
    }
    if (isset($_POST['md_altura_luminarias_a2']))
    {
        $md_altura_luminarias_a2 = $_POST['md_altura_luminarias_a2'];
    } else {
        $md_altura_luminarias_a2 = 0;
    }
    if (isset($_POST['md_altura_luminarias_a3']))
    {
        $md_altura_luminarias_a3 = $_POST['md_altura_luminarias_a3'];
    } else {
        $md_altura_luminarias_a3 = 0;
    }
    if (isset($_POST['md_altura_luminarias_a4']))
    {
        $md_altura_luminarias_a4 = $_POST['md_altura_luminarias_a4'];
    } else {
        $md_altura_luminarias_a4 = 0;
    }
    if (isset($_POST['md_altura_luminarias_a5']))
    {
        $md_altura_luminarias_a5 = $_POST['md_altura_luminarias_a5'];
    } else {
        $md_altura_luminarias_a5 = 0;
    }
    if (isset($_POST['md_altura_luminarias_a6']))
    {
        $md_altura_luminarias_a6 = $_POST['md_altura_luminarias_a6'];
    } else {
        $md_altura_luminarias_a6 = 0;
    }

    if (isset($_POST['md_lampada_apagada']))
    {
        $md_largura_via_l1 = $_POST['md_largura_via_l1'];
    } else {
        $md_largura_via_l1 = 0;
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
                (cad_idPoste, cad_data_cadastro, cad_cpf_usuario, cad_nome_usuario,
                cad_dg_cg_p2_lat, cad_dg_cg_p2_lng, cad_dg_cg_p3_lat, cad_dg_cg_p3_lng, 
                cad_dg_cg_p4_lat, cad_dg_cg_p4_lng, cad_dg_cg_p5_lat, cad_dg_cg_p5_lng, 
                cad_dg_cg_p6_lat, cad_dg_cg_p6_lng,
                cad_dt_potencia_lampada, cad_dt_tipo_lampada, cad_dt_tipo_luminaria,
                cad_dt_tipo_braco, cad_dt_altura_poste, cad_dt_material_poste, cad_dt_uso_poste,
                cad_dt_tipo_comando, cad_dt_tipo_reator, cad_dt_forma_distribuicao_energia,
                cad_df_aparencia_ponto_luminoso, cad_df_observacao_ponto_luminoso,
                cad_df_arvore_ofuscando_iluminacao, cad_df_situacao_poste,
                cad_df_proximidade_luminaria_rede_energia, cad_df_local_dificil_acesso,
                cad_md_posicao_poste, 
                cad_md_lampada_apagada_pl1, cad_md_lampada_apagada_pl2, cad_md_lampada_apagada_pl3,
                cad_md_lampada_apagada_pl4, cad_md_lampada_apagada_pl5, cad_md_lampada_apagada_pl6,
                cad_md_c1_l1, cad_md_c2_l1, cad_md_c3_l1,
                cad_md_c4_l1, cad_md_c5_l1, cad_md_c6_l1,
                cad_md_c7_l1, cad_md_c8_l1, cad_md_c9_l1,
                cad_md_c1_l2, cad_md_c2_l2, cad_md_c3_l2,
                cad_md_c4_l2, cad_md_c5_l2, cad_md_c6_l2,
                cad_md_c7_l2, cad_md_c8_l2, cad_md_c9_l2,
                cad_md_c1_l3, cad_md_c2_l3, cad_md_c3_l3,
                cad_md_c4_l3, cad_md_c5_l3, cad_md_c6_l3,
                cad_md_c7_l3, cad_md_c8_l3, cad_md_c9_l3,
                cad_md_c1_l4, cad_md_c2_l4, cad_md_c3_l4,
                cad_md_c4_l4, cad_md_c5_l4, cad_md_c6_l4,
                cad_md_c7_l4, cad_md_c8_l4, cad_md_c9_l4,
                cad_md_c1_l5, cad_md_c2_l5, cad_md_c3_l5,
                cad_md_c4_l5, cad_md_c5_l5, cad_md_c6_l5,
                cad_md_c7_l5, cad_md_c8_l5, cad_md_c9_l5,
                cad_md_distancia_postes_p1_p3, cad_md_distancia_postes_p3_p5,
                cad_md_distancia_postes_p2_p4, cad_md_distancia_postes_p4_p6,
                cad_md_distancia_postes_p1_p2,
                cad_md_altura_luminarias_a1, cad_md_altura_luminarias_a2, cad_md_altura_luminarias_a3,
                cad_md_altura_luminarias_a4, cad_md_altura_luminarias_a5, cad_md_altura_luminarias_a6,
                cad_md_largura_via_l1) 
                VALUES 
                ('$id_poste', '$data_cadastro', '$usu_cpf', '$usu_nome',
                '$dg_cg_p2_lat', '$dg_cg_p2_lng', '$dg_cg_p3_lat', '$dg_cg_p3_lng',
                '$dg_cg_p4_lat', '$dg_cg_p4_lng', '$dg_cg_p5_lat', '$dg_cg_p5_lng',
                '$dg_cg_p6_lat', '$dg_cg_p6_lng',
                '$dt_potencia_lampada', '$dt_tipo_lampada', '$dt_tipo_luminaria',
                '$dt_tipo_braco', '$dt_altura_poste', '$dt_material_poste', '$dt_uso_poste',
                '$dt_tipo_comando', '$dt_tipo_reator', '$dt_forma_distribuicao_energia',
                '$df_aparencia_ponto_luminoso', $df_observacao_ponto_luminoso,
                '$df_arvore_ofuscando_iluminacao','$df_situacao_poste', 
                '$df_proximidade_luminaria_rede_energia','$df_local_dificil_acesso',
                '$md_posicao_poste',
                '$md_lampada_apagada_pl1', '$md_lampada_apagada_pl2', '$md_lampada_apagada_pl3',
                '$md_lampada_apagada_pl2', '$md_lampada_apagada_pl5', '$md_lampada_apagada_pl6',
                '$md_c1_l1', '$md_c2_l1', '$md_c3_l1',
                '$md_c4_l1', '$md_c5_l1', '$md_c6_l1',
                '$md_c7_l1', '$md_c8_l1', '$md_c9_l1',
                '$md_c1_l2', '$md_c2_l2', '$md_c3_l2',
                '$md_c4_l2', '$md_c5_l2', '$md_c6_l2', 
                '$md_c7_l2', '$md_c8_l2', '$md_c9_l2',
                '$md_c1_l3', '$md_c2_l3', '$md_c3_l3',
                '$md_c4_l3', '$md_c5_l3', '$md_c6_l3',
                '$md_c4_l3', '$md_c5_l3', '$md_c6_l3',
                '$md_c1_l4', '$md_c2_l4', '$md_c3_l4',
                '$md_c4_l4', '$md_c5_l4', '$md_c6_l4',
                '$md_c7_l4', '$md_c8_l4', '$md_c9_l4',
                '$md_c1_l5', '$md_c2_l5', '$md_c3_l5',
                '$md_c4_l5', '$md_c5_l5', '$md_c6_l5',
                '$md_c7_l5', '$md_c8_l5', '$md_c9_l5',
                '$md_distancia_postes_p1_p3', '$md_distancia_postes_p3_p5', 
                '$md_distancia_postes_p2_p4', '$md_distancia_postes_p4_p6',
                '$md_distancia_postes_p1_p2', 
                '$md_altura_luminarias_a1', '$md_altura_luminarias_a2', '$md_altura_luminarias_a3',
                '$md_altura_luminarias_a4', '$md_altura_luminarias_a5', '$md_altura_luminarias_a6',
                '$md_largura_via_l1')";

    $retorno_cad = $conexao->query($sql_cad);

    if ($retorno_cad == true) 
    {
        $ok_cad = "ok";

    } else {
        $ok_cad = "false";

        echo $retorno_cad;
    }

    // COMANDO SQL POSTE PRINCIPAL
    $sql_pp = "INSERT INTO pp_posteprincipal
                (pp_id,
                pp_Estado, pp_Cidade,
                pp_Endereco, pp_Endereco_Observacao,
                pp_Regiao_Administrativa,
                pp_LAT_DD, pp_LNG_DD, pp_Classe_Via
                ) VALUES 
                ('$id_poste',
                '$pp_estado', '$pp_cidade',
                '$pp_endereco', '$pp_endereco_observacao',
                '$pp_regiao_administrativa',
                '$dg_cg_p1_lat', '$dg_cg_p1_lng',
                '$dg_classe_via')";

    $retorno_pp = $conexao->query($sql_pp);

    if ($retorno_pp == true) 
    {
        $ok_pp = "ok";

    } else {

        $ok_pp = "false";

        echo $retorno_pp;
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

        echo $retorno_pp;

        echo $retorno_cad;

        echo $ok_cad;
        echo $ok_pp;
        //echo $erro_pp;
        //echo $erro_cad;

        //header('Location: tela_formulario.php');
    }

} else {
    echo "Post Vazio!";
}

?>