<?php
/**
 *
 */
class Product_model extends CI_Model {
    public function getProducts(){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."get/getproducts.php");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $products = curl_exec($curl);
      $products = json_decode($products, true);
      curl_close($curl);
      return $products;
    }
    public function getProductsById($product_id){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."get/getproductbyid.php?product_id=".$product_id);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $products = curl_exec($curl);
      $products = json_decode($products, true);
      curl_close($curl);
      return $products;
    }
    public function getProductsByBrand($brand_name){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."get/getproductsbybrand.php?brand_name=".$brand_name);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $products = curl_exec($curl);
      $products = json_decode($products, true);
      curl_close($curl);
      return $products;
    }

    public function getProductsByName($product_name){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."get/getproductsbyname.php?product_name=".$product_name);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $products = curl_exec($curl);
      $products = json_decode($products, true);
      curl_close($curl);
      return $products;
    }
}
?>
