<?php echo $this->Html->css('chosen');?>
<?php echo $this->html->script('chosen.jquery'); ?>
<?php echo $this->html->script('ajaxzip3'); ?>
<?php echo $this->Form->create('Applicant', array('type' => 'file')); ?>

        <div class="box-body">
            <div class="row">
                <div class="col-xs-6">
                    <?php #echo $this->Form->input('work_type_id', array('label' => false, 'class' => 'form-control', 'options' => $work_types)); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                <legend>基本情報</legend>
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-4">
                   <?php echo $this->Form->input('name', array('label' => 'お名前', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-4">
                   <?php echo $this->Form->input('furigana', array('label' => 'ふりがな', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-4">
                   <?php echo $this->Form->input('nickname', array('label' => 'ニックネーム', 'class' => 'form-control')); ?>
                </div>                         
            </div>
            <div class="row">
              <div class="col-xs-6">
                 
                 <?php
                   echo $this->Form->label('gender', '性別');
                   echo "&nbsp;&nbsp;";
                   echo $this->Form->radio('gender', array('男性' => '&nbsp;男性&nbsp;&nbsp;&nbsp;', '女性' => '&nbsp;女性&nbsp;'),  array('legend' => false, 'div' => false, ));           
                 ?>
               </div> 
               <div class="col-xs-6 date-selects">
                   <?php        
                       echo $this->Form->input('date_of_birth', array(
                                                               'label' => '生年月日&nbsp;',  
                                                               'class' => 'date  ',
                                                               'dateFormat' => 'YMD',
                                                               'minYear' => date('Y') - 70,
                                                               'maxYear' => date('Y') ,
                                                               'monthNames'=>false,
                                                               'empty'=>array(0=>''),
                                                               'selected'=>array(
                                                                           'year'=>0,
                                                                           'month'=>0,
                                                                           'day'=>0
                                                               )
                                              )); ?>
               </div> 
            </div>
            <div class="row">
                <div class="col-xs-12">
                <legend>ご連絡先</legend>
                </div>
            </div>    
            <div class="row">
                <div class="col-xs-2">
                  <?php echo $this->Form->input('postalcode', array('label' => '郵便番号', 'class' => 'form-control', 
                  'onkeyup'=>"AjaxZip3.zip2addr('data[Applicant][postalcode]','','data[Applicant][prefecture_id]','data[Applicant][address]')")); ?>
                </div>
                <div class="col-xs-2">                 
                  <?php echo $this->Form->input('prefecture_id', array('label' => '都道府県', 'class' => 'form-control','options' => array('' => '選択してください') + $prefectures)); ?>
                </div>
                <div class="col-xs-4">
                  <?php echo $this->Form->input('address', array('label' => '市区町村', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-4">
                  <?php echo $this->Form->input('house_address', array('label' => '番地・建物名', 'class' => 'form-control')); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-4">
                  <?php echo $this->Form->input('nearest_station', array('label' => '最寄駅', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-4">
                  <?php echo $this->Form->input('tel', array('label' => '電話番号', 'class' => 'form-control')); ?>
                </div>
                
                <div class="col-xs-4">
                  <?php echo $this->Form->input('tel_home', array('label' => '固定電話', 'class' => 'form-control')); ?>
                </div>
            </div>    
            <div class="row">    
                <div class="col-xs-6">
                  <?php echo $this->Form->input('email', array('label' => 'メールアドレス(PC)', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-6">
                  <?php echo $this->Form->input('email_mobile', array('label' => 'メールアドレス(携帯)', 'class' => 'form-control')); ?>
                </div>
            </div>
            
            <div class="row">   
               <div class="col-xs-12">
                  <fieldset>
                     <table id="qualification-table">
                        <thead>
                           <tr>
                              <th>資格名</th>
                              <th>取得年月</th>                              
                              <th>&nbsp;</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if (!empty($this->request->data['QualificationHistory'])) :?>
                              <?php for ($key = 0; $key < count($this->request->data['QualificationHistory']); $key++) :?>
                                 <?php echo $this->element('applicant/qualification_history', array('key' => $key));?>
                              <?php endfor;?>
                           <?php endif;?>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td colspan="2"></td>
                              <td><a href="#" class="add btn-success btn-xs">追加</a></td>
                           </tr>
                        </tfoot>
                     </table>
                  </fieldset>
                  <script id="qualification-template" type="text/x-underscore-template">
                     <?php echo $this->element('applicant/qualification_history');?>
                  </script>
               </div>
            </div>
                        
          <div class="row">
             <div class="col-xs-12">
	               <legend>最終学歴</legend>
	           </div>
	        </div>
	        
	        <div class="row">
             <div class="col-xs-12">
               <?php echo $this->Form->input('education', array('label' => false, 'class' => 'form-control')); ?>
             </div>
          </div>
               
            <div class="row">
               <div class="col-xs-12">
                 <legend>希望条件</legend>
               </div>
            </div>
            <div class="row">
               <div class="col-xs-8">
                  <?php 
                  echo $this->Form->label('employment_pattern', '雇用');
                  echo "<br>";
                  echo $this->Form->radio('employment_pattern', 
									array(
										"正社員" => "正社員", 
										"入社予定" => "入社予定", 
										), 
									array('legend' => false, 'div' => false)); ?>
               </div>
               <div class="col-xs-4">
                  <?php echo $this->Form->input('desired_joining_time', array('label' => '配属可能時期', 'class' => 'form-control'));?>
               </div>
            </div>
            
            
            <div class="row">
               <div class="col-xs-12">
	    			   <?php
			           echo $this->Form->label('working_hours', '勤務時間');
				         echo "<br>";
				         echo $this->Form->radio('working_hours', 
									 array(
									   "8:00～17:00" => "8:00～17:00",									
										 "8:00～17:00（19:00）" => "8:00～17:00（19:00）",
 		                 "変則" => "変則",
						       ),
								   array('legend' => false, 'div' => false));
				      ?>
              </div>
            </div> 
            
            
            <div class="row">
               <div class="col-xs-12">
				       <?php
				         echo $this->Form->label('business_trip_availability', '出張可否');
				         echo "<br>";
				         echo $this->Form->radio('business_trip_availability', 
									 array(
										 "可能" => "可能",
						         "不可" => "不可",
						         "要相談" => "要相談",
						         "入寮希望" => "入寮希望",
						       ),
								   array('legend' => false, 'div' => false));
				       ?>
               </div>
            </div> 
            
            <div class="row">
               <div class="col-xs-12">
				       <?php
				         echo $this->Form->label('night_shift_availability', '夜勤可否');
				         echo "<br>";
				         echo $this->Form->radio('night_shift_availability', 
									 array(
										 "可能" => "可能",
						         "不可" => "不可",
						         "要相談" => "要相談",
						       ),
								   array('legend' => false, 'div' => false));
				       ?>
               </div>
            </div> 
                       
            <div class="row">
               <div class="col-xs-12">
				       <?php
				         echo $this->Form->label('commuting', '通勤手段');
				         echo "<br>";
				         echo $this->Form->input('commuting', array('label' => false, 'class' => 'form-control', 'placeholder' => '車通勤・公共交通機関')); 
				       ?>
				       </div>
            </div> 

            <div class="row">
               <div class="col-xs-12">
				       <?php
				         echo $this->Form->label('commuting_time', '通勤可能時間');
				         echo "<br>";
				         echo $this->Form->input('commuting_time', array('label' => false, 'class' => 'form-control')); 
				       ?>
				       </div>
            </div>             
               
            <div class="row">   
               <div class="col-xs-12">
                  <fieldset>
                     <legend><?php echo '経歴';?></legend>
                     <table id="work-table">
                        
                        <tbody>
                           <?php if (!empty($this->request->data['WorkHistory'])) :?>
                              <?php for ($key = 0; $key < count($this->request->data['WorkHistory']); $key++) :?>
                                 <?php echo $this->element('applicant/work_history', array('key' => $key));?>
                              <?php endfor;?>
                           <?php endif;?>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td colspan="3"></td>
                              <td><a href="#" class="add btn-success btn-xs">追加</a></td>
                           </tr>
                        </tfoot>
                     </table>
                  </fieldset>
                  <script id="work-template" type="text/x-underscore-template">
                     <?php echo $this->element('applicant/work_history');?>
                  </script>
               </div>
            </div>
            
            <div class="row">   
               <div class="col-xs-12">
                  <fieldset>
                     <legend>業務能力</legend>
                     <table id="skill-table">
                        
                        <tbody>
                           <?php if (!empty($this->request->data['WorkSkill'])) :?>
                              <?php for ($key = 0; $key < count($this->request->data['WorkSkill']); $key++) :?>
                                 <?php echo $this->element('applicant/skill', array('key' => $key));?>
                              <?php endfor;?>
                           <?php endif;?>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td colspan="2"></td>
                              <td><a href="#" class="add"></a></td>
                           </tr>
                        </tfoot>
                     </table>
                  </fieldset>
                  <script id="skill-template" type="text/x-underscore-template">
                     <?php echo $this->element('applicant/skill');?>
                  </script>
               </div>
            </div>
            
            

            <div class="row">   
               <div class="col-xs-12">
                  <legend>備考</legend>
                 <?php  echo $this->Form->input('remarks', array('label' => false, 'class' => 'form-control'));  ?>
               </div>
            </div>
            
            <div class="row">   
               <div class="col-xs-12">
                  <legend>備考（事務用）</legend>
                 <?php  echo $this->Form->input('remarks_for_office_use', array('label' => false, 'class' => 'form-control'));  ?>
               </div>
            </div>
            
            <div class="row">   
               <div class="col-xs-12">
               <fieldset>
                  <legend>備考（エントリーシート用　コメント）</legend>
                  <?php  echo $this->Form->input('entry_sheet_remarks', array('label' => false,'class' => 'form-control'));  ?>
               </fieldset>
               </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                	<legend>ステータス</legend>
                </div>                
            </div>
            <div class="row">
                <div class="col-xs-4">
                  <?php echo $this->Form->input('progress_status_id', array('label' => false, 'class' => 'form-control','options' => array('' => '') + $statuses)); ?>
                </div>
                <div class="col-xs-6">
            		  <?php if(!empty($institution_lists)) echo $this->Form->input('institution_id', array('label' => false, 'class' => 'form-control chosen-select', 'data-placeholder'=> "施設を選ぶ",'options' => array('' => '法人施設を選ぶ・・・') + $institution_lists)); ?>
			          </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                	<legend>ランク</legend>
                </div>                
            </div>
            <div class="row">
                <div class="col-xs-4">
                  <?php echo $this->Form->input('rank_id', array('label' => false, 'class' => 'form-control','options' => array('' => '') + $ranks)); ?>
                </div>
                <div class="col-xs-6"></div>
            </div>
            
            <div class="row">   
               <div class="col-xs-12">
                  <fieldset>
                     <legend>資料</legend>
                     <table id="upload-table">
                        
                        <tbody>
                           <?php if (!empty($this->request->data['UploadDocument'])) :?>
                              <?php for ($key = 0; $key < count($this->request->data['UploadDocument']); $key++) :?>
                                 <?php echo $this->element('upload/show', array('key' => $key, 'type' => 'Applicant', 'data' => $this->request->data['UploadDocument'][$key]));?>
                              <?php endfor;?>
                           <?php endif;?>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td colspan="3"></td>
                              <td><a href="#" class="add btn-success btn-xs">追加</a></td>
                           </tr>
                        </tfoot>
                     </table>
                  </fieldset>
                  <script id="upload-template" type="text/x-underscore-template">
                     <?php echo $this->element('upload/add', array('type' => 'Applicant'));?>
                  </script>
               </div>
            </div>
            
            
            
	    </div>
      
<?php echo $this->Form->hidden('id', array('value' => !empty($this->request->data['Applicant']['id']) ? $this->request->data['Applicant']['id'] : '')); ?>       
<center><?php echo $this->Form->end(array('label' => '保存する', 'class' => 'btn btn-success', 'style' => 'width:250px;font-size:20px;font-weight:bold;position:fixed; bottom:20px;')); ?></center>

<script>
$(document).ready(function() {
    var
        workTable = $('#work-table'),
        workBody = workTable.find('tbody'),
        workTemplate = _.template($('#work-template').remove().text()),
        numberRows = workTable.find('tbody > tr').length;

    workTable
        .on('click', 'a.add', function(e) {
            e.preventDefault();

            $(workTemplate({key: numberRows++}))
                .hide()
                .appendTo(workBody)
                .fadeIn('fast');
        })
        .on('click', 'a.remove', function(e) {
                e.preventDefault();

            $(this)
                .closest('tr')
                .fadeOut('fast', function() {
                    $(this).remove();
                });
        });

        if (numberRows === 0) {
            workTable.find('a.add').click();
        }
});
</script>



<script>
$(document).ready(function() {
    var
        skillTable = $('#skill-table'),
        skillBody = skillTable.find('tbody'),
        skillTemplate = _.template($('#skill-template').remove().text()),
        numberRows = skillTable.find('tbody > tr').length;

    skillTable
        .on('click', 'a.add', function(e) {
            e.preventDefault();

            $(skillTemplate({key: numberRows++}))
                .hide()
                .appendTo(skillBody)
                .fadeIn('fast');
        })
        .on('click', 'a.remove', function(e) {
                e.preventDefault();

            $(this)
                .closest('tr')
                .fadeOut('fast', function() {
                    $(this).remove();
                });
        });

        if (numberRows === 0) {
            skillTable.find('a.add').click();
        }
});
</script>



<script>
$(document).ready(function() {
    var
        qualificationTable = $('#qualification-table'),
        qualificationBody = qualificationTable.find('tbody'),
        qualificationTemplate = _.template($('#qualification-template').remove().text()),
        numberRows = qualificationTable.find('tbody > tr').length;

    qualificationTable
        .on('click', 'a.add', function(e) {
            e.preventDefault();

            $(qualificationTemplate({key: numberRows++}))
                .hide()
                .appendTo(qualificationBody)
                .fadeIn('fast');
        })
        .on('click', 'a.remove', function(e) {
                e.preventDefault();

            $(this)
                .closest('tr')
                .fadeOut('fast', function() {
                    $(this).remove();
                });
        });

        if (numberRows === 0) {
            qualificationTable.find('a.add').click();
        }
});
</script>

<script>
$(document).ready(function() {
    var
        uploadTable = $('#upload-table'),
        uploadBody = uploadTable.find('tbody'),
        uploadTemplate = _.template($('#upload-template').remove().text()),
        numberRows = uploadTable.find('tbody > tr').length;

    uploadTable
        .on('click', 'a.add', function(e) {
            e.preventDefault();

            $(uploadTemplate({key: numberRows++}))
                .hide()
                .appendTo(uploadBody)
                .fadeIn('fast');
        })
        .on('click', 'a.remove', function(e) {
                e.preventDefault();

            $(this)
                .closest('tr')
                .fadeOut('fast', function() {
                    $(this).remove();
                });
        });

        if (numberRows === 0) {
            uploadTable.find('a.add').click();
        }
});



  

</script>
<script type="text/javascript">
  on_qualification();
  $(document).on('click', 'a.add', function(event){   
    on_qualification();
  });
  function on_qualification(){
     $('.qualification').change(function(e){
       if($(this).val() == 'その他'){
         $(e.target).closest("td").find('[class*="other-qualification"]').first().show();
       }else{
         $(e.target).closest("td").find('[class*="other-qualification"]').first().hide();
       }
     });
  }
</script>

<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
</script>