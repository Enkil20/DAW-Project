<?php
function readJson($file){
    $data = file_get_contents(dirname(__FILE__) . "/" . $file);
    return json_decode($data, true);
}

function saveJson($data, $file){
    $content = json_encode($data);
    file_put_contents(dirname(__FILE__) . "/" . $file, $content);
}
?>
