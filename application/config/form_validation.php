<?php
$config = array(
        'admin_login' => array(
                        'field' => 'username',
                        'name' => 'username',
                        'rules' => 'trim|required|min_length[5]|max_length[20]|alpha'
                ),
                array(
                        'field' => 'password',
                        'name' => 'password',
                        'rules' => 'trim|required|min_length[7]'
                ),
        
        	'search' => array(
                        array(
                                'field' => 'origin',
                                'name' => 'origin',
                                'rules' => 'required'
                                ),
                        array(
                                'field' => 'destination',
                                'name' => 'destination',
                                'rules' => 'required',
                                ),
                )
                        );
?>