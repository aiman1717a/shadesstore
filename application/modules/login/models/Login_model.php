<?php
/**
 *
 */
 class Login_model extends CI_Model {
   
   public function sign_in($email, $password){
     $api_irl = $this->repository->geturl();
     $curl = curl_init();
     curl_setopt($curl, CURLOPT_URL, $api_irl."post/login.php");
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
     curl_setopt ($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($curl, CURLOPT_POST, 'POST');
     $data = array(
       "email"=> $email,
       "password"=> $password
     );
     curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
     $login = curl_exec($curl);
     $login = json_decode($login, true);
     curl_close($curl);
     return $login;
   }
}
?>
