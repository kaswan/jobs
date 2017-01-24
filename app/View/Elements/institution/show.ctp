<?php if(!empty($institution)){ ?>
  <pre>施設情報</pre>
  <table >
    <thead>
      <tr>
        <th colspan="2"><kbd>基本情報</kbd></th>      
      </tr>
    </thead>
    
    <tbody>
      
      <tr>
        <td width="200px"><b>法人名</b></td>
        <td><span style="float:left;width:80%;"><?php echo $institution['Institution']['name'] ?></span></td>
      </tr>
      <tr>
        <td><b>ふりがな</b></td>
        <td colspan="2"><?php echo $institution['Institution']['furigana'] ?></td>
      </tr>
      
      <tr>
        <td rowspan='2'><b>ご住所</b></td>
        <td >〒<?php echo $institution['Institution']['postalcode'] ?></td>
      </tr>      
      <tr>        
        <td ><?php echo ($institution['Institution']['prefecture_id'] > 0 ? $prefectures[$institution['Institution']['prefecture_id']] : '' . '　' ) . $institution['Institution']['address'] ?></td>
      </tr>
      <tr>
        <td><b>最寄駅</b></td>
        <td colspan="2"><?php echo $institution['Institution']['nearest_station'] ?></td>
      </tr>
      <tr>
        <td rowspan='4'><b>ご連絡先</b></td>
        <td ><code style="color:#000;background-color:#F9F2DC;">電話番号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code>： <?php echo $institution['Institution']['tel'] ?></td>
      </tr>
      <tr>
        <td ><code style="color:#000;background-color:#F9F2DC;">FAX番号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code>： <?php echo $institution['Institution']['fax'] ?></td>
      </tr>
      <tr>
        <td ><code style="color:#000;background-color:#F9F2DC;">メールアドレス&nbsp;</code>： <?php echo $institution['Institution']['email'] ?></td>
      </tr>
      <tr>
        <td ><code style="color:#000;background-color:#F9F2DC;">HPアドレス&nbsp;&nbsp;&nbsp;&nbsp;</code>： <?php echo $institution['Institution']['url'] ?></td>
      </tr>
      
    </tbody>
  </table>
  <br>
  <table>
    <thead>
      <tr>
        <th><kbd>業種</kbd></th>
        <th><kbd>エリア</kbd></th>
        <th><kbd>部署</kbd></th>
        <th><kbd>役職</kbd></th>
        <th><kbd>名前</kbd></th>        
        <th><kbd>番号</kbd></th>
        <th><kbd>Email</kbd></th>
        <th><kbd>紹・派</kbd></th>
      </tr>
    </thead>
    
    <tbody>
     <?php foreach($institution['ContactPerson'] as $contact) {?>
        <tr>
        	<td><?php echo($contact['industry'])?></td>
        	<td><?php echo($contact['area'])?></td>
        	<td><?php echo($contact['department'])?></td>
        	<td><?php echo($contact['title'])?></td>
        	<td><?php echo($contact['name'])?></td>        	
        	<td><?php echo($contact['direct_phone_number'])?></td>
        	<td><?php echo($contact['email'])?></td>
        	<td><?php echo($contact['intro'])?></td>
        </tr>
        
     <?php } ?>     
    </tbody>
  </table>
  <br>
  <table>
    <thead>
      <tr>
        <th colspan = '2' ><kbd>詳細情報</kbd></th>      
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td width="200px"><b>得意エリア・得意工事</b></td>
        <td><?php echo $institution['Institution']['specialty_area'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>指定請求書</b></td>
        <td><?php echo $institution['Institution']['designated_invoice'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>会社コード</b></td>
        <td><?php echo $institution['Institution']['company_code'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>携帯の貸出</b></td>
        <td><?php echo $institution['Institution']['mobile_loan'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>交通費</b></td>
        <td><?php echo $institution['Institution']['transportation_expenses'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>宿泊契約</b></td>
        <td><?php echo $institution['Institution']['accommodation_contract'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>使用CAD</b></td>
        <td><?php echo $institution['Institution']['cad'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>注意点</b></td>
        <td><?php echo $institution['Institution']['important_point'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>60歳以上の提案</b></td>
        <td><?php echo $institution['Institution']['proposal_for_over_60'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>未経験者の提案</b></td>
        <td><?php echo $institution['Institution']['proposal_for_inexperienced'] ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>過去の提案技術者</b></td>
        <td><?php echo nl2br($institution['Institution']['proposed_engineer']) ?></td>
      </tr>
      
      <tr>
        <td width="150px"><b>その他備考</b></td>
        <td><?php echo nl2br($institution['Institution']['other_remarks']) ?></td>
      </tr>
      
    </tbody>
  </table>
  
  <br>
  <table>
    <thead>
      <tr>
        <th colspan="2"><kbd>契約情報</kbd></th>      
      </tr>
    </thead>
    
    <tbody>
       <tr>
        <td width="200px"><b>契約締結年月</b></td>
        <td><?php if(!empty($institution['Institution']['agreement_date']))echo $this->Time->format($institution['Institution']['agreement_date'], '%Y年%m月%d日') ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>チャージ提案方式</b></td>
        <td><?php echo nl2br($institution['Institution']['charge_method']) ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>契約内容</b></td>
        <td><?php echo nl2br($institution['Institution']['contract_contents']) ?></td>
      </tr>
      
      <tr>
        <td width="200px"><b>面接選考方法</b></td>
        <td><?php echo nl2br($institution['Institution']['interview_selection_process']) ?></td>
      </tr>    
      
       <tr>
        <td width="150px"><b>その他備考</b></td>
        <td><?php echo nl2br($institution['Institution']['other']) ?></td>
      </tr>
    </tbody>
  </table>
  
  <br>
  <table>
    <thead>
      <tr>
        <th><kbd>資料</kbd></th>
        <th></th>        
      </tr>
    </thead>
    
    <tbody>
     <?php foreach($institution['UploadDocument'] as $upload) {?>
        <tr>
        	<td><?php echo($upload['remark'])?></td>
        	<td><?php echo $this->Html->link($upload['document'], $upload['document_path'], array('target' => 'blank'))?></td>
        </tr>
     <?php } ?>     
    </tbody>
  </table>
<?php } ?>