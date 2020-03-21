<?php

if(!defined('QA_VERSION'))

{

header('Location: ../../');

exit;

}

// layer 

qa_register_plugin_layer('my-layer.php', 'my layer');