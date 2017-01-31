<div class="row">  
	<div class="col-xs-1">
  		<?php echo $this->html->link('技術者一覧へ', array('controller' => 'applicants', 'action' => 'index'), array('class' => 'btn btn-success', 'style' => 'width:140px;text-decoration:none;')); ?><br><br>
 		<?php echo $this->html->link('編集する', array('controller' => 'applicants', 'action' => 'edit', !empty($applicant) ? $applicant['Applicant']['id']: ''), array('class' => 'btn btn-warning', 'style' => 'width:140px;text-decoration:none;')); ?><br><br>
  		<?php echo $this->html->link('PDF出力', array('controller' => 'applicants', 'action' => 'print_view', !empty($applicant) ? $applicant['Applicant']['id']: ''), array('class' => 'btn btn-info ', 'target' => '_blank', 'style' => 'width:140px;text-decoration:none;')); ?><br><br>
  		
  		<div id='inline-example'>	
                     <?php
                        $this->Fancybox->setProperties( array( 
  			  		        'class' => 'fancybox1 btn btn-danger',
  			  		        'width' => '180px',
  			  		        'className' => 'fancybox.ajax',
  			  		        'title'=>'エントリーPDF出力',
  			  		        'ajaxUrl'=>'/applicants/sender_info/' . $applicant['Applicant']['id']
  					      )
				       );
                       $this->Fancybox->setPreviewContent('エントリーPDF出力'); // the link which will trigger fancybox on click
                       echo $this->Fancybox->output();		

                    ?>
                  </div>
  		<br><br>
	</div>

    <div class="col-xs-7">
		<div class="users form">
			<abbr title="ステータス">
			  <label class='label label-danger'>
			  <?php 
			    $applicant_status = end($applicant['ApplicantStatus']);
			    if(!empty($applicant_status)){
			      if(isset($applicant_status['progress_status_id'])) echo $statuses[$applicant_status['progress_status_id']];
			    }
			 	?>
			 	</label>
			</abbr>			
			<abbr title="採否"><label class='label label-info'><?php echo $applicant['Result']['name']?></label></abbr>
			<abbr title="媒体"><label class='label label-default'><?php echo $applicant['MediaType']['name']?></label></abbr>			
			<abbr title="企業名"><label class='label label-warning'><?php echo $applicant['Institution']['name']?></label></abbr>			
			<?php echo $this->element('applicant/show',array('applicant' => $applicant)); ?>
		</div>
	</div>
	<div class="col-xs-4">	
	   
   		<pre>コンタクト履歴 </pre>
   		<?php echo $this->element('note/edit', array('notes' => Hash::sort($applicant['Note'], '{n}.note.date_time', 'DESC'), 'target_id' => $applicant['Applicant']['id'], 'type' => 'Applicant' )); ?>
 	</div>
</div>
<div class="row">
  <div class="col-xs-12">
    <?php if($prev > 0) echo $this->html->link('<< Prev', array('controller' => 'applicants', 'action' => 'view', $prev), array('class' => 'btn btn-success', 'style' => 'text-decoration:none;float:left;width:120px;font-size:20px;font-weight:bold;position:fixed; bottom:20px;')); ?>
    <?php if($next > 0) echo $this->html->link('Next >>', array('controller' => 'applicants', 'action' => 'view', $next), array('class' => 'btn btn-success', 'style' => 'text-decoration:none;margin-left:87%;width:120px;font-size:20px;font-weight:bold;position:fixed; bottom:20px;')); ?>
  </div>
</div>

