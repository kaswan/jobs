<?php
$key = isset($key) ? $key : '<%= key %>';
?>
<tr>
    <td>
        <?php echo $this->Form->hidden("WorkHistory.{$key}.id") ?>
        <?php echo $this->Form->text("WorkHistory.{$key}.text_field_1", array('size' => '15px', 'class' => 'form-control')); ?>
    </td>
    <td>
        <?php echo $this->Form->text("WorkHistory.{$key}.text_field_2", array('size' => '15px', 'class' => 'form-control')); ?>
    </td>
    
    <td>
        <?php echo $this->Form->text("WorkHistory.{$key}.text_field_3", array('size' => '15px', 'class' => 'form-control')); ?>
    </td>
    
    <td >
        <a href="#" class="remove btn btn-danger btn-xs" >削除</a>
    </td>
</tr>