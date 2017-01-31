<?php echo $this->Html->script('jquery.jeditable') ?>
<div class="box-body">
   <?php echo $this->Form->create('Institution',array('action'=>'index', 'method' => 'GET')); ?>
   <div class="row">
      <div class="col-xs-4">
         <?php echo $this->Form->input('freeword', array('label' => false, 'placeholder' => '番号・（法人名・ふりがな）・最寄駅・備考などで検索する', 'class' => 'form-control')); ?>
      </div>
      <div class="col-xs-2">
         <?php echo $this->Form->input('prefecture', array('label' => false, 'class' => 'form-control', 'options' => array('' => '地域') + $prefectures )); ?>
      </div>      
      
      <div class="col-xs-2">
      		<?php echo $this->Form->input('phone', array('label' => false, 'placeholder' => '電話番号', 'class' => 'form-control')); ?>
      </div>
      
      <div class="col-xs-1">
         <?php echo $this->Form->button('検索', array('class' => 'btn btn-success', 'label' => 'Search')); ?>
      </div>
   
      <div class="col-xs-1">
         <?php echo $this->html->link('新規登録', array('controller' => 'institutions', 'action' => 'add'), array('class' => 'btn btn-danger '));?>
      </div>
      <div class="col-xs-2">
         <?php if(AuthComponent::user('role') == 'admin') echo $this->html->link('CSVダウンロード', array('controller' => 'institutions', 'action' => 'export', '企業CSV_' . date("Y-m-d H:i:s") . '.xls'), array('class' => 'btn btn-warning '));?>
      </div>
   </div>   
   
   <?php echo $this->Form->end(); ?>
</div>
<br> 
<div class="users">
<?php if(!empty($institutions)) { ?>
<?php echo $this->Paginator->numbers(array('first' => 2, 'last' => 2)); ?>
  <table>
    <thead>
      <tr>
        <th><?php echo $this->Paginator->sort('id', 'No.'); ?></th>  
        <th><?php echo $this->Paginator->sort('name', '法人名'); ?></th>
        <th>部署</th>
        <th><?php echo $this->Paginator->sort('work_type_id', '職種'); ?></th>      
        <th><?php echo $this->Paginator->sort('prefecture_id', '都道府県'); ?></th>
        <th>TEL</th>
        <th>Email</th>
        <th><?php echo $this->Paginator->sort('created_at', '作成日'); ?></th>        
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <?php foreach($institutions as $id => $val){ ?>
        <tr >
          <td ><?php echo $val['Institution']['id'];?></td>
          <td ><?php echo $val['Institution']['name'];?></td>
          <td ><?php if(isset($contact_people[$val['Institution']['id']]))echo $contact_people[$val['Institution']['id']];?></td>
          
          <td >
          <?php
          		echo $this->inPlaceEditing->input('Institution', 'work_type_id', $val['Institution']['id'],
        				array('value' => $val['WorkType']['name'],
              			'actionName' => Router::url(array('controller' => 'Institutions', 'action' => 'in_place_editing')),
             		 		'type' => 'select',
             		 		'selectOptions' => json_encode(array('') + $work_types),
             		 		'selected' => $val['Institution']['work_type_id'],
              				'cancelText' => 'キャンセル',
              				'submitText' => '保存',
              				'toolTip' => 'クリックして編集する',
             			 	'containerType' => 'label',
             			 	'containerClass' => 'bg-warning ',
              	)
        			);
          ?>
          </td>
          
          <td ><?php if($val['Institution']['prefecture_id'] > 0 )echo $prefectures[$val['Institution']['prefecture_id']];?></td>
          <td ><?php echo $val['Institution']['tel'];?></td>
          <td ><?php echo $val['Institution']['email'];?></td>
          <td ><?php echo $val['Institution']['created_at'];?></td>
          <td ><?php echo $this->html->link('<i class="icon-large  icon-pencil"></i>', array('controller' => 'institutions', 'action' => 'edit', $val['Institution']['id']), array('escape' => false, 'class' => 'btn btn-success btn-sm', 'role' => "button"))?></td>
          <td ><?php echo $this->html->link('詳細', array('controller' => 'institutions', 'action' => 'view', $val['Institution']['id']), array('class' => 'btn btn-info btn-sm','escape' => false))?></td>
          <?php if(AuthComponent::user('role') == 'admin'){ ?>
          	<td ><?php echo $this->html->link('<i class="icon-large  icon-trash"></i>', array('controller' => 'institutions', 'action' => 'delete', $val['Institution']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-sm', 'confirm' =>'削除してもよろしいですか？'))?></td>
          <?php } ?>	
          <td >
                  <div id='inline-example'>	
                     <?php
                        $this->Fancybox->setProperties( array( 
  			  		        'class' => 'fancybox1 btn btn-warning',
  			  		        'className' => 'fancybox.ajax',
  			  		        'title'=>'メモを書く',
  			  		        'ajaxUrl'=>'/notes/add/' . $val['Institution']['id'] . '/Institution'
  					      )
				       );
                       $this->Fancybox->setPreviewContent($val['Institution']['note_count'] > 0 ? "<i class='glyphicon glyphicon-edit'></i><small><span class='badge' style='font-size:0.6em;'>{$val['Institution']['note_count']}</span></small>" : '<i class="glyphicon glyphicon-edit"></i>'); // the link which will trigger fancybox on click
                       echo $this->Fancybox->output();		

                    ?>
                  </div>
           </td>       
        </tr>
      <?php } ?>
    </thead>
  </table>
<?php } ?>
</div>
<?php echo $this->Js->writeBuffer(); ?>
