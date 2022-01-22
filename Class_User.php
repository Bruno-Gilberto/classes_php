<?php 

    class User {

        const Secret = '@$int_@$key_@$contain_@#user';

        public static function GenPass($Password) {

            return md5($Password . self::Secret);

        }

        public static function CreateUser($user_flow) {

            $User_Id = $user_flow['id'];

            $User_Name = $user_flow['name'];

            $User_Password = self::GenPass($user_flow['password']);

            $User_Create = $user_flow['login_time'] = time();

            $User_Ip = Util::RemoteIp();

            $User_Secret = md5(rand(2000000,9999999).time().$user_flow['email']);


            $user_flow['id'] = DB::Update('user', $user_flow);

        }

        public static function CreateUser($create_user) {

            /* if exists requisition subscribe user */

            $create = new $create_user;

            $create['User_Name'] = $_POST['User_Name'];
            
        }

    }
    
?>