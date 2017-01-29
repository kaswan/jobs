<tr>
  <th>品質管理</th>
  <td colspan="3">検査立会  <span class="square"><?php if(!empty($skill['quality_inspection'])) echo " (".$skill['quality_inspection'].")" ?></span></td>
  <td colspan="4">写真撮影・整理 <span class="square"><?php if(!empty($skill['quality_photography'])) echo " (".$skill['quality_photography'].")" ?></span></td>
  <td colspan="3">出来形管理 <span class="square"><?php if(!empty($skill['quality_formation_control'])) echo " (".$skill['quality_formation_control'].")" ?></span></td>
  <td colspan="2">品質管理<span class="square"><?php if(!empty($skill['quality_management'])) echo " (".$skill['quality_management'].")" ?></span></td>
  
</tr>  

<tr>  
  <th>施工管理A</th>
  <td colspan="3">工程管理 <span class="square"><?php if(!empty($skill['construction_a_process_management'])) echo " (".$skill['construction_a_process_management'].")" ?></span></td>
  <td colspan="4">施工段取り <span class="square"><?php if(!empty($skill['construction_a_preparation'])) echo " (".$skill['construction_a_preparation'].")" ?></span></td>
  <td colspan="3">材料手配 <span class="square"><?php if(!empty($skill['construction_a_material_arrangement'])) echo " (".$skill['construction_a_material_arrangement'].")" ?></span></td>
  <td colspan="2"></td>
</tr>


<tr>  
  <th>施工管理B</th>
  <td colspan="4">施工指示・確認<span class="square"><?php if(!empty($skill['construction_b_instruction'])) echo " (".$skill['construction_b_instruction'].")" ?></span></td>
  <td colspan="4">安全管理<span class="square"><?php if(!empty($skill['construction_b_safety_management'])) echo " (".$skill['construction_b_safety_management'].")" ?></span></td>
  <td colspan="4"></td>
  
</tr>


<tr>
  <th>各種書類作成</th>
  <td colspan="4">工事打合わせ簿<span class="square"><?php if(!empty($skill['document_consultation'])) echo " (".$skill['document_consultation'].")" ?></span></td>
  <td colspan="4">安全関係書類<span class="square"><?php if(!empty($skill['document_safety'])) echo " (".$skill['document_safety'].")" ?></span></td>
  <td colspan="3">検査書類<span class="square"><?php if(!empty($skill['document_inspection'])) echo " (".$skill['document_inspection'].")" ?></span></td>
  <td colspan="1"></td>  
</tr>


<tr>
  <th>測量管理</th>
  <td colspan="2">測量<span class="square"><?php if(!empty($skill['survey_management'])) echo " (".$skill['survey_management'].")" ?></span></td>
  <td colspan="2">丁張<span class="square"><?php if(!empty($skill['survey_exaggeration'])) echo " (".$skill['survey_exaggeration'].")" ?></span></td>
  <td colspan="2">墨出し<span class="square"><?php if(!empty($skill['survey_marking'])) echo " (".$skill['survey_marking'].")" ?></span></td>
  <td colspan="2">レベル<span class="square"><?php if(!empty($skill['survey_level'])) echo " (".$skill['survey_level'].")" ?></span></td>
  <td colspan="2">トランシット<span class="square"><?php if(!empty($skill['survey_transit'])) echo $skill['survey_transit'].")" ?></span></td>
  <td colspan="2">光波<span class="square"><?php if(!empty($skill['survey_lightwave'])) echo " (".$skill['survey_lightwave'].")" ?></span></td>
</tr>


<tr>
  <th>PCスキル</th>
  <td colspan="3">エクセル<span class="square"><?php if(!empty($skill['excel'])) echo " (".$skill['excel'].")" ?></span></td>
  <td colspan="3">ワード<span class="square"><?php if(!empty($skill['word'])) echo " (".$skill['word'].")" ?></span></td>
  <td colspan="3">使用可能CAD</td>
  <td colspan="3">
     <?php  echo $skill['cad'] ?>
  </td>
</tr>


<tr>
  <th>その他能力</th>
  <td colspan="3">
     <?php  echo $skill['other_ability_1'] ?>
  </td>
  <td colspan="3">
     <?php  echo $skill['other_ability_2'] ?>
  </td>
  <td colspan="3">写真管理ソフト</td>
  <td colspan="3">
     <?php  echo $skill['photo_management_software'] ?>
  </td>
</tr>
