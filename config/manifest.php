<?php
//$moduleTemplatesFile = MODULE_DIR . REL_CONFIG_DIR . 'templates';
//$moduleTemplatesDir = file_exists($moduleTemplatesFile) ? file_get_contents($moduleTemplatesFile) : 'WebComponents';

//$configWebComponents = file_exists(CONFIG_DIR . 'webcomponents') ? trim(file_get_contents(CONFIG_DIR . 'webcomponents')) : $moduleTemplatesDir;
//$customWebComponentsRoot =  SRC_ROOT . $configWebComponents . DIRECTORY_SEPARATOR;

return [
    "tag" => "",
    "name" => "ephect-io/javascripts",
    "entrypoint" => null,
    "templates" => "!",
    "description" => "Ephect framework client side scripts.",
    "version" => "0.7.2",
];