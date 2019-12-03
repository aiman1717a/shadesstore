<?php
/**
 *
 */
 class Shipping_model extends CI_Model {

    public function getShipping($user_id){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."get/getshippingbyuserid.php?user_id=".$user_id);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      $response = curl_exec($curl);
      $response = json_decode($response, true);
      curl_close($curl);
      return $response;
    }
    public function updateShipping($shipping_id, $shipping_place, $shipping_street, $shipping_city, $shipping_country, $shipping_zip){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."put/updateshipping.php");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
      $data = array(
        "shipping_id" => $shipping_id,
        "shipping_place" => $shipping_place,
        "shipping_street" => $shipping_street,
        "shipping_city" => $shipping_city,
        "shipping_country" => $shipping_country,
        "shipping_zip" => $shipping_zip,
      );
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
      $response = curl_exec($curl);
      $response = json_decode($response, true);
      curl_close($curl);
      return $response;
    }
}
?>
