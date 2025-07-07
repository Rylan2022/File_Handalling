<?php 
$config = array(
        array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
        ),
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
        )
);



$config['error_prefix'] = '<div class="error_prefix">';
$config['error_suffix'] = '</div>';
?>