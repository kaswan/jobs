<?php 
App::uses('AppModel', 'Model');

class ApplicantStatus extends AppModel {
	
	public $belongsTo = array('Applicant','Institution');
	
	public function beforeSave($options = array()) {
		if(!$this->id && !isset($this->data[$this->alias][$this->primaryKey])){
    		$this->data[$this->alias]['created_at'] = date("Y-m-d H:i:s");
    	}
    	
    	$this->data[$this->alias]['updated_at'] = date("Y-m-d H:i:s");
    	return true;
	}
	
	public $validate = array(
			'progress_status_id' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'ステータスが選択されていません。'
					)
			),
	);
    
}

?>