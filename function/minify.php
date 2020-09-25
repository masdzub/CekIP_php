<?php
// MINIFY HTML
function sanitize_output($buffer)
{
    $search  = array(
        '/ {2,}/',
        '/<!--.*?-->|\t|(?:\r?\n[ \t]*)+/s'
    );
    $replace = array(
        ' ',
        ''
    );
    $buffer  = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");

?>