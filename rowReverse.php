<?php
function rowReverse($row){
    $row = $row[0];
    $isUpper = preg_match('~^\p{Lu}~u', $row);
    $r = '';
    for ($i = mb_strlen($row); $i>=0; $i--) {
        $r .= mb_substr($row, $i, 1);
    }
    return $isUpper ? mb_convert_case($r, MB_CASE_TITLE_SIMPLE ) : $r;
}
$proposal = 'Привет! Давно не виделись.';
$reverse = preg_replace_callback('~[А-Яа-яЁё]+~u', 'rowReverse', $proposal);
echo $reverse;
