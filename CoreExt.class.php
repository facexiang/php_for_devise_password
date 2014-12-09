<?php

class CoreExt{
    public static function encryPwd($password, $encrypted_password = null){
      $arr = array('cost' => self::ENCRYPT_LEN);
      $encrypted_password and $arr['salt'] = substr($encrypted_password, 7, 22);
      return password_hash($password, PASSWORD_BCRYPT, $arr);
    }
}
