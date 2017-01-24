<?php $key = isset($key) ? $key : '<%= key %>'; ?>
<tr>
  <th>品質管理</th>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.quality_inspection", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "検査立会",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.quality_photography", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "写真撮影・整理",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.quality_formation_control", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "出来形管理",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.quality_management", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "品質管理",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td></td>
  <td></td>
</tr>  

<tr>  
  <th>施工管理A</th>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.construction_a_process_management", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "工程管理",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.construction_a_preparation", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "施工段取り",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.construction_a_material_arrangement", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "材料手配",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td></td>
  <td></td>  
  <td></td>
</tr>


<tr>  
  <th>施工管理B</th>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.construction_b_instruction", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "施工指示・確認",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.construction_b_safety_management", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "安全管理",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td></td>
  <td></td>
  <td></td>  
  <td></td>
</tr>


<tr>
  <th>各種書類作成</th>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.document_consultation", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "工事打合わせ簿",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.document_safety", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "安全関係書類",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.document_inspection", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "検査書類",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td></td>
  <td></td>  
  <td></td>
</tr>


<tr>
  <th>測量管理</th>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.survey_management", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "測量",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.survey_exaggeration", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "丁張",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.survey_marking", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "墨出し",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.survey_level", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "レベル",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.survey_transit", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "トランシット",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.survey_lightwave", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "光波",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
</tr>


<tr>
  <th>PCスキル</th>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.excel", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "エクセル",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td><?php  echo $this->Form->input("WorkSkill.{$key}.word", array(
                              'div' => false, 'label' => false, 'class' => 'form-control',
                              'options' => array("" => "ワード",	'A' => 'A',	'B' => 'B',	'C' => 'C', '不可' => '不可')));   ?></td>
  <td>使用可能CAD</td>
  <td colspan="3">
     <?php  echo $this->Form->input("WorkSkill.{$key}.cad", array('label' => false, 'class' => 'form-control')) ?>
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
