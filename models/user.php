<?php
class User extends AppModel {

	var $name = 'User';
	
	var $validate = array(
	    'username' => array(
	            'required' =>true,
	            'rule' => array('alphaNumeric'),
	            'allowEmpty' =>false,
                ),
        'password' => array(
                'required' =>true,
                'rule' => array('maxLength', 60),
                'allowEmpty' =>false
                )
    );
    
    var $hasMany = array(
			'Card' => array('className' => 'Card',
								'foreignKey' => 'author',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);
    
    function validateLogin($data){
        $user = $this->find(array('username' => $data['username'],
                                'password' => md5($data['password'])), array('id', 'username'));
        if(empty($user) == false)
            return $user['User'];
        return false;
    }

}
?>
