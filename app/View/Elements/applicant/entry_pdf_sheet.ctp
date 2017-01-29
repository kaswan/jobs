<style>

kbd {
padding: 2px 4px;
font-size: 100%;
color: #fff;
background-color: #333;
border-radius: 3px;
box-shadow: inset 0 -1px 0 rgba(0,0,0,.25);
}
</style>
<?php if(!empty($applicant)){ ?>
  <div style="padding:10px;background: #084B8A;color:#fff;"><span style="float:left;margin:5px;font-size:20px;">No. <?php echo $applicant['Applicant']['id']?></span></div>
  <table >
    <thead>
      <tr>
        <th colspan="4"><kbd>基本情報</kbd></th>      
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td width="150px"><b>お名前</b></td>
        <td><span style="float:left;max-width:100%;"><?php echo $applicant['Applicant']['nickname'] ?></span></td>
        <td colspan="2"><span style="float:left;max-width:100%;"><code style="color:#000;background-color:#F9F2DC;">性別</code> : <?php echo $applicant['Applicant']['gender'] ?></span></td>
      </tr>
      
           
      <tr>
        <td width="150px"><b>配属可能時期</b></td>
        <td colspan="3"><?php echo $applicant['Applicant']['desired_joining_time'] ?></td>
      </tr>
      <tr>        
        <td><b>ご住所</b></td>
        <td ><?php echo ($applicant['Applicant']['prefecture_id'] > 0 ? $prefectures[$applicant['Applicant']['prefecture_id']] : '' . '　' ) . $applicant['Applicant']['address'] ?></td>
        <td ><b>最寄駅</b></td>
        <td ><?php echo $applicant['Applicant']['nearest_station'] ?></td>
      </tr>
      
      <tr>
        <td width="150px"><b>勤務時間</b></td>
        <td><?php echo $applicant['Applicant']['working_hours'] ?></td>
        <td width="150px"><b>雇用</b></td>
        <td><?php echo $applicant['Applicant']['employment_pattern'] ?></td>
      </tr>
      
      
      <tr>
        <td width="150px"><b>夜勤</b></td>
        <td><?php echo $applicant['Applicant']['night_shift_availability'] ?></td>
        <td width="150px"><b>出張</b></td>
        <td><?php echo $applicant['Applicant']['business_trip_availability'] ?></td>
      </tr>
      
      <tr>
        <td width="150px"><b>通勤可能時間</b></td>
        <td><?php echo $applicant['Applicant']['commuting_time'] ?></td>
        <td width="150px"><b>通勤手段</b></td>
        <td><?php echo $applicant['Applicant']['commuting'] ?></td>
      </tr>
      
      <tr>
        <td><b>学歴</b></td>
        <td colspan="3"><?php echo $applicant['Applicant']['education'] ?></td>
      </tr>
      
    </tbody>
  </table>
  
  <table>
    <thead>
      <tr>
        <th ><kbd>取得資格</kbd></th>    
      </tr>
    </thead>
    
    <tbody>
     <?php foreach($applicant['QualificationHistory'] as $qualification) {?>
        <tr>
        	<td><?php echo($qualification['name'])?></td>
        </tr>
     <?php } ?>     
    </tbody>
  </table>
    
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
  
  <?php if(!empty($applicant['Applicant']['entry_sheet_remarks'])) { ?>
  <table>
    <thead>
      <tr>
        <th><kbd>備考</kbd></th>
      </tr>
    </thead>
    
    <tbody>
      <tr>        
        <td><?php echo nl2br($applicant['Applicant']['entry_sheet_remarks']) ?></td>
      </tr>
    </tbody>
  </table>
  <?php }?>
<?php } ?>
<br>

<div style="width:520px;float:right;">
ジョブズコンストラクション<br>
〒101-0052																							
東京都千代田区小川町2-3-13　M&Cビル2階<br>																																				
TEL　03-5577-8000　FAX　03-5577-8002<br>
担当者： <?php echo $applicant['User']['name']?>
</div>
<div style="width:100px;float:right;">
<?php echo $this->Html->image('cake.icon.png', array('width' => '85'))?>
</div>