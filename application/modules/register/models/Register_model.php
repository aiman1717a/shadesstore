<?php
/**
 *
 */
 class Register_model extends CI_Model {
   public function sign_up($user_name, $user_email, $user_password){
     $api_irl = $this->repository->geturl();
     $curl = curl_init();
     curl_setopt($curl, CURLOPT_URL, $api_irl."post/register.php");
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
     curl_setopt ($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($curl, CURLOPT_POST, 'POST');
     $data = array(
       "user_name"=> $user_name,
       "user_email"=> $user_email,
       "user_password"=> $user_password
     );
     curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
     $login = curl_exec($curl);
     $login = json_decode($login, true);
     curl_close($curl);
     return $login;
   }
}
?>
