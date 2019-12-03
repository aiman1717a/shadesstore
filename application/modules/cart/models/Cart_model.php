<?php
/**
 *
 */
 class Cart_model extends CI_Model {

    public function getCart($user_id){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."get/getcartbyuserid.php?user_id=".$user_id);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      $response = curl_exec($curl);
      curl_close($curl);
      $response = json_decode($response, true);
      return($response);
    }
    public function getCartOnly($user_id){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."get/getcartonlybyuserid.php?user_id=".$user_id);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      $response = curl_exec($curl);
      curl_close($curl);
      $response = json_decode($response, true);
      return($response);
    }
    public function addCartItem($cart_id, $product_id, $cart_item_quantity, $cart_item_price){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."post/addcartitem.php");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
      $data = array(
        "cart_id"=> $cart_id,
        "product_id"=> $product_id,
        "cart_item_quantity"=> $cart_item_quantity,
        "cart_item_price"=> $cart_item_price,
      );
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
      $response = curl_exec($curl);
      $response = json_decode($response, true);
      curl_close($curl);
      return $response;
    }
    public function updateCartItemQty($cart_item_id, $cart_item_quantity){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."put/updatecart.php");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
      $data = array(
        "cart_item_id"=> $cart_item_id,
        "cart_item_quantity"=>$cart_item_quantity
      );
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
      $response = curl_exec($curl);
      $response = json_decode($response, true);
      curl_close($curl);
      return $response;
    }
    public function deleteCartItem($cart_item_id){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."post/deletecartitembyitemid.php");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type"=>"application/json"));
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
      $data = array(
        "cart_item_id"=> $cart_item_id
      );
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
      $response = curl_exec($curl);
      $response = json_decode($response, true);
      curl_close($curl);
      return $response;
    }
}
?>
