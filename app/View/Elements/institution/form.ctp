<?php echo $this->html->script('ajaxzip3'); ?>
<?php echo $this->Form->create('Institution', array('type' => 'file')); ?>

        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                <kbd>基本情報</kbd>
                
                </div>
            </div>
                      
            <div class="row">
            	<div class="col-xs-1"></div> 
                <div class="col-xs-5">
                   <?php echo $this->Form->input('name', array('label' => 'お名前', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-5">
                   <?php echo $this->Form->input('furigana', array('label' => 'ふりがな', 'class' => 'form-control')); ?>
                </div>                        
            </div>
                        
            <div class="row">
                <div class="col-xs-12">
                <kbd>ご住所</kbd>
                </div>
            </div>    
            <div class="row">
                <div class="col-xs-1"></div>                
                <div class="col-xs-2">
                  <?php echo $this->Form->input('postalcode', array('label' => '郵便番号', 'class' => 'form-control', 
                  'onkeyup'=>"AjaxZip3.zip2addr('data[Institution][postalcode]','','data[Institution][prefecture_id]','data[Institution][address]')")); ?>
                </div>
                <div class="col-xs-3">
                 
                  <?php echo $this->Form->input('prefecture_id', array('label' => '都道府県', 'class' => 'form-control','options' => array('' => '選択してください') + $prefectures)); ?>
                </div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('address', array('label' => '市区町村', 'class' => 'form-control')); ?>
                </div>
            </div>
            
            <div class="row">      
            	<div class="col-xs-1"></div>
                <div class="col-xs-6">
                  <?php echo $this->Form->input('nearest_station', array('label' => '最寄駅', 'class' => 'form-control')); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                <kbd>ご連絡先</kbd>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('tel', array('label' => '電話番号', 'type' => 'tel', 'class' => 'form-control js-characters-change',)); ?>
                </div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('fax', array('label' => 'FAX番号', 'class' => 'form-control js-characters-change',)); ?>
                </div>
                
            </div>
            <div class="row"> 
                <div class="col-xs-1"></div>
	            <div class="col-xs-5">
	              <?php echo $this->Form->input('email', array('label' => 'メールアドレス', 'class' => 'form-control')); ?>
	            </div>
	            <div class="col-xs-5">
	              <?php echo $this->Form->input('url', array('label' => 'HPアドレス', 'class' => 'form-control')); ?>
	            </div>
	        </div>
            
            <div class="row"> 
               <div class="col-xs-1"></div>  
               <div class="col-xs-11">
                  <fieldset>
                     <table id="contact-table">
                        <thead>
                           <tr>
                              <th>業種</th>
                              <th>エリア</th>
                              <th>部署</th>
                              <th>役職</th>
                              <th>名前</th>
                              <th>番号</th>
                              <th>Email</th>
                              <th>紹・派</th>
                              <th>&nbsp;</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if (!empty($this->request->data['ContactPerson'])) :?>
                              <?php for ($key = 0; $key < count($this->request->data['ContactPerson']); $key++) :?>
                                 <?php echo $this->element('institution/contact_person', array('key' => $key));?>
                              <?php endfor;?>
                           <?php endif;?>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td colspan="8"></td>
                              <td><a href="#" class="add btn-success btn-xs">追加</a></td>
                           </tr>
                        </tfoot>
                     </table>
                  </fieldset>
                  <script id="contact-template" type="text/x-underscore-template">
                     <?php echo $this->element('institution/contact_person');?>
                  </script>
               </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                <kbd>詳細情報</kbd>
                </div>
            </div>    
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('specialty_area', array('label' => '得意エリア・得意工事 ', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('designated_invoice', array('label' => '指定請求書', 'class' => 'form-control')); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('company_code', array('label' => '会社コード', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('mobile_loan', array('label' => '携帯の貸出', 'class' => 'form-control')); ?>
                </div>                
            </div>
            
            <div class="row">
                <div class="col-xs-1"></div>
                
                <div class="col-xs-5">
                  <?php echo $this->Form->input('transportation_expenses', array('label' => '交通費', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('accommodation_contract', array('label' => '宿泊契約', 'class' => 'form-control')); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-1"></div>
                
                <div class="col-xs-5">
                  <?php echo $this->Form->input('cad', array('label' => '使用CAD', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('important_point', array('label' => '注意点', 'class' => 'form-control')); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-1"></div>
                
                <div class="col-xs-5">
                  <?php echo $this->Form->input('proposal_for_over_60', array('label' => '60歳以上の提案', 'class' => 'form-control')); ?>
                </div>
                <div class="col-xs-5">
                  <?php echo $this->Form->input('proposal_for_inexperienced', array('label' => '未経験者の提案', 'class' => 'form-control')); ?>
                </div>
            </div>
            
            
            <div class="row">
               <div class="col-xs-1"></div>
               <div class="col-xs-10">
                 <?php  echo $this->Form->input('proposed_engineer', array('label' => '過去の提案技術者', 'class' => 'form-control'));  ?>
               </div>
            </div>
            
            <div class="row">
               <div class="col-xs-1"></div>
               <div class="col-xs-10">
                 <?php  echo $this->Form->input('other_remarks', array('label' => 'その他備考', 'class' => 'form-control'));  ?>
               </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                	<kbd>契約情報</kbd>
                </div>
            </div>    
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-5">
                <label>契約締結年月</label><br>
                   <?php echo $this->Form->input('agreement_date', array('div' => false, "label" => false,
													'empty' => true,
													'dateFormat' => 'YMD',
													'monthNames' => false,
    												'minYear' => date('Y') - 50,
    												'maxYear' => date('Y') + 10,
    												'separator' => '/',
        											'separator' => array('年', '月', '日'),
    				));?>
                      
                </div>
                <div class="col-xs-5"> </div>
            </div> 
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                	<?php  echo $this->Form->input('charge_method', array('label' => 'チャージ提案方式', 'rows' => 4,'class' => 'form-control'));  ?>
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                	<?php  echo $this->Form->input('contract_contents', array('label' => '契約内容', 'rows' => 4,'class' => 'form-control'));  ?>
                </div>
            </div>  
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                	<?php  echo $this->Form->input('interview_selection_process', array('label' => '面接選考方法', 'rows' => 4,'class' => 'form-control'));  ?>
                </div>
            </div>      
            
            <div class="row">
               <div class="col-xs-1"></div>
               <div class="col-xs-10">
                 <?php  echo $this->Form->input('other', array('label' => 'その他備考', 'class' => 'form-control'));  ?>
               </div>
            </div>
            
            <div class="row">
               
               <div class="col-xs-1"></div>
               <div class="col-xs-10">
                  <fieldset>
                  <legend><kbd>資料</kbd></legend>
                     <table id="upload-table">                        
                        <tbody>
                           <?php if (!empty($this->request->data['UploadDocument'])) :?>
                              <?php for ($key = 0; $key < count($this->request->data['UploadDocument']); $key++) :?>
                                 <?php echo $this->element('upload/show', array('key' => $key, 'type' => 'Institution', 'data' => $this->request->data['UploadDocument'][$key]));?>
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
                     <?php echo $this->element('upload/add', array('type' => 'Institution'));?>
                  </script>
               </div>
            </div>
            
	    </div>
	    <div class="row">
            <div class="col-xs-11">
            	<?php echo $this->Form->hidden('id', array('value' => !empty($this->request->data['Institution']['id']) ? $this->request->data['Institution']['id'] : '')); ?>
				<center>
					<?php echo $this->Form->end(array('label' => '保存する', 'class' => 'btn btn-success', 'style' => 'width:250px;font-size:20px;font-weight:bold;position:fixed; bottom:20px;')); ?>
				</center>
			</div>
		</div>			
</div>



<script>
$(document).ready(function() {
    var
        contactTable = $('#contact-table'),
        contactBody = contactTable.find('tbody'),
        contactTemplate = _.template($('#contact-template').remove().text()),
        numberRows = contactTable.find('tbody > tr').length;

    contactTable
        .on('click', 'a.add', function(e) {
            e.preventDefault();

            $(contactTemplate({key: numberRows++}))
                .hide()
                .appendTo(contactBody)
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
            contactTable.find('a.add').click();
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
$(function(){
    $(".js-characters-change").blur(function(){
        charactersChange($(this));
    });


    charactersChange = function(ele){
        var val = ele.val();
        var han = val.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});

        if(val.match(/[Ａ-Ｚａ-ｚ０-９]/g)){
            $(ele).val(han);
        }
    }
});
</script>