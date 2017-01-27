<?php $key = isset($key) ? $key : '<%= key %>'; ?>
<tr>
  <th>品質管理</th>
  <td>検査立会<?php  echo $this->Form->input("WorkSkill.{$key}.quality_inspection", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>写真撮影・整理<?php  echo $this->Form->input("WorkSkill.{$key}.quality_photography", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>出来形管理<?php  echo $this->Form->input("WorkSkill.{$key}.quality_formation_control", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>品質管理<?php  echo $this->Form->input("WorkSkill.{$key}.quality_management", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td></td>
  <td></td>
</tr>  

<tr>  
  <th>施工管理A</th>
  <td>工程管理<?php  echo $this->Form->input("WorkSkill.{$key}.construction_a_process_management", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>施工段取り<?php  echo $this->Form->input("WorkSkill.{$key}.construction_a_preparation", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>材料手配<?php  echo $this->Form->input("WorkSkill.{$key}.construction_a_material_arrangement", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td></td>
  <td></td>  
  <td></td>
</tr>


<tr>  
  <th>施工管理B</th>
  <td>施工指示・確認<?php  echo $this->Form->input("WorkSkill.{$key}.construction_b_instruction", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>安全管理<?php  echo $this->Form->input("WorkSkill.{$key}.construction_b_safety_management", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td></td>
  <td></td>
  <td></td>  
  <td></td>
</tr>


<tr>
  <th>各種書類作成</th>
  <td>工事打合わせ簿<?php  echo $this->Form->input("WorkSkill.{$key}.document_consultation", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>安全関係書類<?php  echo $this->Form->input("WorkSkill.{$key}.document_safety", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>検査書類<?php  echo $this->Form->input("WorkSkill.{$key}.document_inspection", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td></td>
  <td></td>  
  <td></td>
</tr>


<tr>
  <th>測量管理</th>
  <td>測量<?php  echo $this->Form->input("WorkSkill.{$key}.survey_management", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>丁張<?php  echo $this->Form->input("WorkSkill.{$key}.survey_exaggeration", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>墨出し<?php  echo $this->Form->input("WorkSkill.{$key}.survey_marking", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>レベル<?php  echo $this->Form->input("WorkSkill.{$key}.survey_level", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>トランシット<?php  echo $this->Form->input("WorkSkill.{$key}.survey_transit", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>光波<?php  echo $this->Form->input("WorkSkill.{$key}.survey_lightwave", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
</tr>


<tr>
  <th>PCスキル</th>
  <td>エクセル<?php  echo $this->Form->input("WorkSkill.{$key}.excel", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>ワード<?php  echo $this->Form->input("WorkSkill.{$key}.word", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>使用可能CAD</td>
  <td colspan="3">
     <?php  echo $this->Form->input("WorkSkill.{$key}.cad", array('label' => false, 'class' => 'form-control', 'placeholder' => 'Auto-CAD・JW-CAD・Tfas・その他')) ?>
  </td>
</tr>


<tr>
  <th>その他能力</th>
  <td>
     <?php  echo $this->Form->input("WorkSkill.{$key}.other_ability_1", array('label' => false, 'class' => 'form-control')) ?>
  </td>
  <td>
     <?php  echo $this->Form->input("WorkSkill.{$key}.other_ability_2", array('label' => false, 'class' => 'form-control')) ?>
  </td>
  <td>写真管理ソフト</td>
  <td colspan="3">
     <?php  echo $this->Form->input("WorkSkill.{$key}.photo_management_software", array('label' => false, 'class' => 'form-control')) ?>
  </td>
</tr>

<?php echo $this->Form->hidden("WorkSkill.{$key}.id") ?>
