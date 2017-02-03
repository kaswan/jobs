<?php if(!empty($applicant)){ ?>
  <pre><span style="float:left;margin:5px;font-size:20px;">No. <?php echo $applicant['Applicant']['id']?></span></pre>
  <table >
    <thead>
      <tr>
        <th colspan="3"><kbd>基本情報</kbd><abbr title="ランク"><label class='label label-green'><?php echo $applicant['Rank']['name']?></label></abbr></th>      
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td><b>ニックネーム</b></td>
        <td colspan="2"><?php echo $applicant['Applicant']['nickname'] ?></td>
      </tr>
      <tr>
        <td width="150px"><b>お名前</b></td>
        <td><span style="float:left;max-width:100%;"><?php echo $applicant['Applicant']['name'] ?></span></td>
        <td><span style="float:left;max-width:100%;"><code style="color:#000;background-color:#F9F2DC;">性別</code> : <?php echo $applicant['Applicant']['gender'] ?></span></td>
      </tr>
      <tr>
        <td><b>ふりがな</b></td>
        <td colspan="2"><?php echo $applicant['Applicant']['furigana'] ?></td>
      </tr>
      <tr>
        <td><b>生年月日</b></td>
        <td><span style="float:left;max-width:100%;"><?php if(!empty($applicant['Applicant']['date_of_birth']))echo $this->Time->format($applicant['Applicant']['date_of_birth'], '%Y年%m月%d日') ?></span></td>
        <td><span style="float:left;max-width:100%;"><code style="color:#000;background-color:#F9F2DC;">年齢</code> : <?php echo $applicant['Applicant']['age'] ?></span></td>
      </tr>
      <tr>
        <td rowspan='3'><b>ご住所</b></td>
        <td colspan="2">〒<?php echo $applicant['Applicant']['postalcode'] ?></td>
      </tr>
      <tr>        
        <td colspan="2"><?php echo ($applicant['Applicant']['prefecture_id'] > 0 ? $prefectures[$applicant['Applicant']['prefecture_id']] : '' . '　' ) . $applicant['Applicant']['address'] ?></td>
      </tr>
      <tr>        
        <td colspan="2"><?php echo $applicant['Applicant']['house_address'] ?></td>
      </tr>
      <tr>
        <td rowspan='2'><b>ご連絡先</b></td>
        <td colspan="2">
        	<code style="color:#000;background-color:#F9F2DC;">携帯電話&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code>： <?php echo $applicant['Applicant']['tel'] ?><br>
        	<code style="color:#000;background-color:#F9F2DC;">固定電話&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code>： <?php echo $applicant['Applicant']['tel_home'] ?>
        </td>
      </tr>
      <tr>
        <td colspan="2">
        	<code style="color:#000;background-color:#F9F2DC;">メールアドレス(PC)&nbsp;&nbsp;</code>： <?php echo $applicant['Applicant']['email'] ?><br>
            <code style="color:#000;background-color:#F9F2DC;">メールアドレス(携帯)&nbsp;</code>： <?php echo $applicant['Applicant']['email_mobile'] ?>
        </td>
      </tr>
      <tr>
        <td ><b>最寄駅</b></td>
        <td colspan="2"><?php echo $applicant['Applicant']['nearest_station'] ?></td>
      </tr>
      <tr>
        <td><b>学歴</b></td>
        <td colspan="2"><?php echo $applicant['Applicant']['education'] ?></td>
      </tr>
    </tbody>
  </table>
  
  <br>
  <table>
    <thead>
      <tr>
        <th ><kbd>取得資格</kbd></th>    
        <!-- <th ><kbd>取得年月</kbd></th> -->   
      </tr>
    </thead>
    
    <tbody>
     <?php foreach($applicant['QualificationHistory'] as $qualification) {?>
        <tr>
        	<td><?php echo($qualification['name'])?></td>
        	<!-- <td><?php echo($qualification['year']. '年'. $qualification['month'] . '月')?></td>-->
        </tr>
        
     <?php } ?>     
    </tbody>
  </table>
  
  <br>
  <table>
    <thead>
      <tr>
        <th colspan="2"><kbd>希望条件</kbd></th>      
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td width="150px"><b>雇用</b></td>
        <td><?php echo $applicant['Applicant']['employment_pattern'] ?></td>
      </tr>
      <tr>
        <td width="150px"><b>配属可能時期</b></td>
        <td><?php echo $applicant['Applicant']['desired_joining_time'] ?></td>
      </tr>
      
      <tr>
        <td width="150px"><b>勤務時間</b></td>
        <td><?php echo $applicant['Applicant']['working_hours'] ?></td>
      </tr>
      
      <tr>
        <td width="150px"><b>出張可否</b></td>
        <td><?php echo $applicant['Applicant']['business_trip_availability'] ?></td>
      </tr>
      
      <tr>
        <td width="150px"><b>夜勤可否</b></td>
        <td><?php echo $applicant['Applicant']['night_shift_availability'] ?></td>
      </tr>
      
      <tr>
        <td width="150px"><b>通勤手段</b></td>
        <td><?php echo $applicant['Applicant']['commuting'] ?></td>
      </tr>
      
      <tr>
        <td width="150px"><b>通勤可能時間</b></td>
        <td><?php echo $applicant['Applicant']['commuting_time'] ?></td>
      </tr>
    </tbody>
  </table>
  
  
 
  <br>
  <table>
    <thead>
      <tr>
        <th colspan="3"><kbd> 経歴</kbd></th>      
      </tr>
    </thead>
        
    <tbody>
     <?php foreach($applicant['WorkHistory'] as $work) {?>
        <tr>
        	<td><?php echo($work['text_field_1'])?></td>
        	<td><?php echo($work['text_field_2'])?></td>
        	<td><?php echo($work['text_field_3'])?></td>        	
        </tr>
        
     <?php } ?>     
    </tbody>
  </table> 
  
  
  <br>
  <table>
    <thead>
      <tr>
        <th colspan="13"><kbd> 業務能力</kbd></th>      
      </tr>
    </thead>
        
    <tbody>
     <?php foreach($applicant['WorkSkill'] as $skill) {?>
        <?php echo $this->element('applicant/skill_view_pdf', array('skill' => $skill));?>
        
     <?php } ?>     
    </tbody>
  </table> 
  
  <br>
  <table>
    <thead>
      <tr>
        <th><kbd>備考</kbd></th>
      </tr>
    </thead>
    
    <tbody>
      <tr>        
        <td><?php echo nl2br($applicant['Applicant']['remarks']) ?></td>
      </tr>      
    </tbody>
  </table>
  
  <br>
  
  <table>
    <thead>
      <tr>
        <th><kbd>備考（事務用）</kbd></th>
      </tr>
    </thead>
    
    <tbody>
      <tr>        
        <td><?php echo nl2br($applicant['Applicant']['remarks_for_office_use']) ?></td>
      </tr>      
    </tbody>
  </table>
  
  <br>
  <table>
    <thead>
      <tr>
        <th><kbd>備考（エントリーシート用　コメント）</kbd></th>
      </tr>
    </thead>
    
    <tbody>
      <tr>        
        <td><?php echo nl2br($applicant['Applicant']['entry_sheet_remarks']) ?></td>
      </tr>      
    </tbody>
  </table>
  
  <?php if(!empty($applicant['ApplicantStatus'])) { ?>
  <br>
  <table>
    <thead>
      <tr>
        <th colspan="2"><kbd>ステータス</kbd></th>
      </tr>
    </thead>
    
    <tbody>
      <?php foreach($applicant['ApplicantStatus'] as $val) { ?>
      <tr>        
        <td><?php if(isset($val['progress_status_id'])) echo $statuses[$val['progress_status_id']] ?></td>
        <td><?php if(isset($val['institution_id'])) echo $institution_lists[$val['institution_id']] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php } ?>
  
  <br>
  <table>
    <thead>
      <tr>
        <th><kbd>資料</kbd></th>
        <th></th>        
      </tr>
    </thead>
    
    <tbody>
     <?php foreach($applicant['UploadDocument'] as $i => $upload) {?>
        <?php if($i <= 10) { ?>
        <tr>
        	<td><?php echo($upload['remark'])?></td>
        	<td><?php echo $this->Html->link($upload['document'], $upload['document_path'], array('target' => 'blank'))?></td>
        </tr>
        <?php } else { ?>
        <tr class="document-hide" style="display:none;">
        	<td><?php echo($upload['remark'])?></td>
        	<td><?php echo $this->Html->link($upload['document'], $upload['document_path'], array('target' => 'blank'))?></td>
        </tr>
        <?php } ?>
     <?php } ?>     
    </tbody>
  </table>
   <?php if(count($applicant['UploadDocument']) > 10 ) echo "<center><p class='btn btn-default show-more'>さらに表示する</p></center>"?>
<?php } ?>



<script>
  $('.show-more').on('click', function(){
    $('.document-hide').show();
    $(this).hide();
  });
</script>