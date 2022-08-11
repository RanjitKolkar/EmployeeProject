<?php
// foo.php
$errors = array (
    1 => $language['insert_success'],
    2 => $language['update_success'],
    3 => $language['delete_success'],
    4 => $language['db_error'],
    5 => $language['login_success'],
    6 => $language['un_pass_wrong'],
    7 => $language['withdrawn_success'],
    8 => $language['enroll_success'],
    9 => $language['welcome'],
    10 => $language['not_enrolled'],
    11 => $language['language_change'],
);

$error_id = isset($_GET['msg']) ? (int)$_GET['msg'] : 0;

if ($error_id != 0 && in_array($error_id, [1,2,3,4,5,6,7,8,9,10])) {
    echo $errors[$error_id];
}else{
    header ("Location: toasts.php?msg=".$msg."");
}
?>