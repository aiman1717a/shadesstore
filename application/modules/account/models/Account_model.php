<?php
/**
 *
 */
 class Account_model extends CI_Model {
    public function getUser($user_id){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."post/getuser.php");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, "user_id=".$user_id);
      $response = curl_exec($curl);
      $response = json_decode($response, true);
      curl_close($curl);
      return $response;
    }
    public function updateAccount($user_id, $user_name, $email){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."put/updateuser.php");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
      $data = array(
        "user_id"=> $user_id,
        "user_name"=>$user_name,
        "email"=>$email
      );
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
      $response = curl_exec($curl);
      $response = json_decode($response, true);
      curl_close($curl);
      return $response;
    }
}
?>
