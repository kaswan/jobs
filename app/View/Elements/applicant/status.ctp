
<?php $key = isset($key) ? $key : '<%= key %>'; ?>
<tr>
    <td>
        <?php echo $this->Form->input("ApplicantStatus.{$key}.progress_status_id", array('label' => false, 'class' => 'form-control','options' => array('' => '') + $statuses)); ?>
    </td>
    <td>
        <?php if(!empty($institution_lists)) echo $this->Form->input("ApplicantStatus.{$key}.institution_id", array('label' => false, 'class' => 'form-control chosen-select', 'data-placeholder'=> "企業を選ぶ",'options' => array('' => '企業を選ぶ・・・') + $institution_lists)); ?>
    </td>
    
    <td>
        <?php echo $this->Form->hidden("ApplicantStatus.{$key}.id") ?>
        <a href="#" class="remove btn btn-danger btn-xs" >削除</a>
    </td>
</tr>


