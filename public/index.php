<?php
require_once("_config.php");
$GLOBALS["viewables"]['view'] = 'home';

$GLOBALS["viewables"]['title'] = "Umpr - Imported Umple Repository";
setg('meta-description', 'Umpr Imported Umple Model Repository');
setg('meta-keywords', 'umple,model,repository');

// this should be the last line
require_view('layout/wrapper');

