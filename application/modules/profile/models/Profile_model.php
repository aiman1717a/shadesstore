<?php
/**
 *
 */
 class Profile_model extends CI_Model {

    public function getProfile($user_id){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."post/getprofile.php");
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
    public function updateProfile($user_id, $first_name, $last_name, $address){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."put/updateprofile.php");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
      $data = array(
        "user_id"=> $user_id,
        "first_name"=>$first_name,
        "last_name"=>$last_name,
        "address"=>$address
      );
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
      $response = curl_exec($curl);
      $response = json_decode($response, true);
      curl_close($curl);
      return $response;
    }
}
?>
