SELECT poste.pp_Endereco_Observacao as "Endereço 2 (OBS)", poste.pp_Classe_Via as "Classe da via" , 
cad.cad_dt_potencia_lampada as "Potência da Lâmpada", cad.cad_dt_tipo_lampada as "Tipo da Lâmpada", 
cad.cad_dt_tipo_luminaria as "Tipo da Luminária", cad.cad_dt_tipo_braco as "Tipo de Braço", 
cad.cad_dt_altura_poste as "Altura do poste", cad.cad_dt_material_poste as "Material do poste", 
cad.cad_dt_uso_poste as "Uso do poste", cad.cad_dt_tipo_comando as "Tipo de Comando", 
cad.cad_dt_tipo_reator as "Tipo de Reator", cad.cad_dt_forma_distribuicao_energia as "Forma de distribuição de energia", 
cad.cad_df_aparencia_ponto_luminoso as "Aparencia do PL", cad.cad_df_arvore_ofuscando_iluminacao as "Arvore", 
cad.cad_df_situacao_poste as "Situação do poste", cad.cad_df_proximidade_luminaria_rede_energia as "PROXIMIDADE LUMIN/REDE", 
cad.cad_df_local_dificil_acesso as "LOCAL DIFICIL ACESSO", cad.cad_md_posicao_poste as "POSIÇÃO DOS POSTES", 
cad.cad_md_lampada_apagada_pl1 as "LAM APAGADA PL1", cad.cad_md_lampada_apagada_pl2 as "LAM APAGADA PL2", 
cad.cad_md_lampada_apagada_pl3 as "LAM APAGADA PL3", cad.cad_md_lampada_apagada_pl4 as "LAM APAGADA PL4", 
cad.cad_md_lampada_apagada_pl5 as "LAM APAGADA PL5", cad.cad_md_lampada_apagada_pl6 as "LAM APAGADA PL6", 
cad.cad_md_c1_l1 as "ponto1", cad.cad_md_c1_l2 as "ponto2", cad.cad_md_c1_l3 as "ponto3", cad.cad_md_c1_l4 as "ponto4", cad.cad_md_c1_l5 as "ponto5", 
cad.cad_md_c2_l1 as "ponto6", cad.cad_md_c2_l2 as "ponto7", cad.cad_md_c2_l3 as "ponto8", cad.cad_md_c2_l4 as "ponto9", cad.cad_md_c2_l5 as "ponto10", 
cad.cad_md_c3_l1 as "ponto11", cad.cad_md_c3_l2 as "ponto12", cad.cad_md_c3_l3 as "ponto13", cad.cad_md_c3_l4 as "ponto14", cad.cad_md_c3_l5 as "ponto15", 
cad.cad_md_c4_l1 as "ponto16", cad.cad_md_c4_l2 as "ponto17", cad.cad_md_c4_l3 as "ponto18", cad.cad_md_c4_l4 as "ponto19", cad.cad_md_c4_l5 as "ponto20", 
cad.cad_md_c5_l1 as "ponto21", cad.cad_md_c5_l2 as "ponto22", cad.cad_md_c5_l3 as "ponto23", cad.cad_md_c5_l4 as "ponto24", cad.cad_md_c5_l5 as "ponto25", 
cad.cad_md_c6_l1 as "ponto26", cad.cad_md_c6_l2 as "ponto27", cad.cad_md_c6_l3 as "ponto28", cad.cad_md_c6_l4 as "ponto29", cad.cad_md_c6_l5 as "ponto30", 
cad.cad_md_c7_l1 as "ponto31", cad.cad_md_c7_l2 as "ponto32", cad.cad_md_c7_l3 as "ponto33", cad.cad_md_c7_l4 as "ponto34", cad.cad_md_c7_l5 as "ponto35", 
cad.cad_md_c8_l1 as "ponto36", cad.cad_md_c8_l2 as "ponto37", cad.cad_md_c8_l3 as "ponto38", cad.cad_md_c8_l4 as "ponto39", cad.cad_md_c8_l5 as "ponto40", 
cad.cad_md_c9_l1 as "ponto41", cad.cad_md_c9_l2 as "ponto42", cad.cad_md_c9_l3 as "ponto43", cad.cad_md_c9_l4 as "ponto44", cad.cad_md_c9_l5 as "ponto45", 
cad.cad_md_distancia_postes_p1_p3 as "P1-P3", cad.cad_md_distancia_postes_p3_p5 as "P3-P5",
cad.cad_md_distancia_postes_p2_p4 as "P2-P4", cad.cad_md_distancia_postes_p4_p6 as "P4-P6" , cad.cad_md_distancia_postes_p1_p2 as "P1-P2",
cad_md_altura_luminarias_a1 as "A1", cad_md_altura_luminarias_a2 as "A2", cad_md_altura_luminarias_a3 as "A3", cad_md_altura_luminarias_a4 as "A4", 
cad_md_altura_luminarias_a5 as "A5", cad_md_altura_luminarias_a6 as "A6", cad_md_largura_via_l1 as "LARGURA DA VIA"

FROM cad_ceb AS cad
LEFT JOIN pp_posteprincipal as poste
ON cad.cad_idPoste = poste.pp_id LIMIT 200