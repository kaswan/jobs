<?php 
App::uses('AppModel', 'Model');

class UploadDocument extends AppModel {
	
	public $actsAs = array(
			'Upload.Upload' => array(
					'document' => array(
							'fields' => array(
									'dir' => 'document_dir',
									'type' => 'document_type',
									'size' => 'document_size',
							),
							'nameCallback'=>'renameFile',
					)
			)
	);
	
	public $virtualFields = array(
			'document_path' => "CONCAT('/files/upload_document/document/',UploadDocument.document_dir,'/',UploadDocument.document)",
	);
	
	var $belongsTo = array(
        'Applicant' => array(
            'foreignKey' => 'target_id',
            'conditions' => array('UploadDocument.type' => 'Applicant'),
        	'counterCache' => 'upload_document_count',        	
        ),
        'Institution' => array(
            'foreignKey' => 'target_id',
            'conditions' => array('UploadDocument.type' => 'Institution'),
        	'counterCache' => 'upload_document_count',
        ),
    );
	
	
    
    public function beforeSave($options = array()) {
    	if(!$this->id && !isset($this->data[$this->alias][$this->primaryKey])){
    		$this->data[$this->alias]['created_at'] = date("Y-m-d H:i:s");
    	}
    	$this->data[$this->alias]['updated_at'] = date("Y-m-d H:i:s");
    	return true;
    }    
    
    public function renameFile($currentName,$data,$field) {    	
    	$array = explode(".",$data);
    	$newName = time().".".end($array);
    	if(isset($this->data[$this->alias]['remark']) && empty($this->data[$this->alias]['remark'])){
    		$this->data[$this->alias]['remark'] = implode('.',$array);
    	}
    	return $newName;
    }
}

?>