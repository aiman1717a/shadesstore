<?php
/**
 *
 */
class Product extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('brands_model');
        $this->load->model('product_model');
    }

    public function view()
    {
      $page = 'product';
      if (!file_exists(APPPATH . 'modules/product/views/' . $page . '.php')) {
          show_404();
      }

      $brands = $this->brands_model->getBrands();
      if (isset($brands['success']) && $brands['success'] === true) {
          $data['brands'] = $brands;
          $brands_filteration_view = $this->load->view('brands_filteration_view', $data, true);
          $data['brands_filteration_view'] = $brands_filteration_view;
      }
      $products = $this->product_model->getProducts();
      if (isset($products['success']) && $products['success'] === true) {
        $data['products'] = $products;
        $product_view = $this->load->view('product_view', $data, true);
        $data['product_view'] = $product_view;
      }

      $this->load->view('templates/header');
      $this->load->view($page, isset($data) ? $data : null);
      $this->load->view('templates/footer');
    }

    public function searchbybrand($brand_name)
    {
      $page = 'product';
      if (!file_exists(APPPATH . 'modules/product/views/' . $page . '.php')) {
          show_404();
      }

      $brands = $this->brands_model->getBrands();
      if (isset($brands['success']) && $brands['success'] === true) {
          $data['brands'] = $brands;
          $brands_filteration_view = $this->load->view('brands_filteration_view', $data, true);
          $data['brands_filteration_view'] = $brands_filteration_view;
      }
      $products = $this->product_model->getProductsByBrand($brand_name);
      if (isset($products['success']) && $products['success'] === true) {
        $data['products'] = $products;
        $product_view = $this->load->view('product_view', $data, true);
        $data['product_view'] = $product_view;
      }
      $this->load->view('templates/header');
      $this->load->view($page, isset($data) ? $data : null);
      $this->load->view('templates/footer');
    }

    public function searchbyproduct($product_name)
    {
      $page = 'product';
      if (!file_exists(APPPATH . 'modules/product/views/' . $page . '.php')) {
          show_404();
      }

      $brands = $this->brands_model->getBrands();
      if (isset($brands['success']) && $brands['success'] === true) {
          $data['brands'] = $brands;
          $brands_filteration_view = $this->load->view('brands_filteration_view', $data, true);
          $data['brands_filteration_view'] = $brands_filteration_view;
      }
      $products = $this->product_model->getProductsByName($product_name);
      if (isset($products['success']) && $products['success'] === true) {
        $data['products'] = $products;
        $product_view = $this->load->view('product_view', $data, true);
        $data['product_view'] = $product_view;
      }
      $this->load->view('templates/header');
      $this->load->view($page, isset($data) ? $data : null);
      $this->load->view('templates/footer');
    }
    public function gotodetails($product_name)
    {
      $page = 'product';
      if (!file_exists(APPPATH . 'modules/product/views/' . $page . '.php')) {
          show_404();
      }

      $brands = $this->brands_model->getBrands();
      if (isset($brands['success']) && $brands['success'] === true) {
          $data['brands'] = $brands;
          $brands_filteration_view = $this->load->view('brands_filteration_view', $data, true);
          $data['brands_filteration_view'] = $brands_filteration_view;
      }
      $products = $this->product_model->getProductsByName($product_name);
      if (isset($products['success']) && $products['success'] === true) {
        $data['products'] = $products;
        $product_view = $this->load->view('product_view', $data, true);
        $data['product_view'] = $product_view;
      }
      $this->load->view('templates/header');
      $this->load->view($page, isset($data) ? $data : null);
      $this->load->view('templates/footer');
    }
}
?>
