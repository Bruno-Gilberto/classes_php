<?php

    class Login {


        public static $cookieName = 'FirstCookieLogin';

        public static function GetId(){

            $user_id = $_SESSION['user_id'];

            if(!$user_id){

                $user = User::GetLoginCookie(self::$cookieName);

                if($user_id = abs(intval($user['id']))){

                }
                
            }

        }

    }

?>