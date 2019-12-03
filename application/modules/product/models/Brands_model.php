<?php
/**
 *
 */
 class Brands_model extends CI_Model {

    public function getBrands(){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."get/getbrands.php");
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $brands = curl_exec($curl);
      curl_close($curl);
      $brands = json_decode($brands, true);
      return $brands;
    }
    public function getBrandById($brand_id){
      $api_irl = $this->repository->geturl();
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api_irl."get/getbrandbyid.php?brand_id=".$brand_id);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $brands = curl_exec($curl);
      curl_close($curl);
      $brands = json_decode($brands, true);
      return $brands;
    }
}
?>
