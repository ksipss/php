<?php
function password($password){
    $data['password'] = md5($data['password'] . 'UUUUJFSDfaesuijksdvn');
    return($password);
}