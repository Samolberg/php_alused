<?php
/**
 * Created by PhpStorm.
 * User: l.samolberg
 * Date: 28.01.2019
 * Time: 15:10
 */
function htmlFromFile($fileName){
    $fileName = 'html/'.$fileName.'.html';
    $fp = fopen($fileName, 'r');
    $content = fread($fp, filesize($fileName));
    fclose($fp);
    return $content;
}