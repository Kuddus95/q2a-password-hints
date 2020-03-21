<?php

class qa_html_theme_layer extends qa_html_theme_base

{

public function form_password($field, $style)

{

qa_html_theme_base::form_password($field, $style);

if ($this->template == 'register' && $field['type'] == 'password') {

$field['note'] = 'Password must contain 8 characters(1 Capital letter, 1 number and 1 special character) for better protection';

$this->form_note($field, 'tall', 1);

}

}

} 