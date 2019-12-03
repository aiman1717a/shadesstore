<?php
/**
 *
 */
class Productdetails extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('product/product_model');
        $this->load->model('product/brands_model');
        $this->load->model('cart/cart_model');
    }

    public function display($product_id)
    {
      $page = 'product_details_view';
      if (!file_exists(APPPATH . 'modules/productdetails/views/' . $page . '.php')) {
          show_404();
      }
      $product = $this->product_model->getProductsById($product_id);
      if (isset($product['success']) && $product['success'] === true) {
        $brand = $this->brands_model->getBrandById($product['data']['brand_id']);
        $cart = $this->cart_model->getCartOnly($this->session->userdata('user_id'));
        $data['product'] = $product;
        $data['brand'] = $brand;
        $data['cart'] = $cart;
        $this->load->view('templates/header');
        $this->load->view($page, $data);
        $this->load->view('templates/footer');
      }
    }
    public function addtocart()
    {
      $cart_id = $this->input->get('cart_id');
      $product_id = $this->input->get('product_id');
      $cart_item_quantity = $this->input->get('cart_item_quantity');
      $cart_item_price = $this->input->get('cart_item_price');

      $product = $this->cart_model->addCartItem($cart_id, $product_id, $cart_item_quantity, $cart_item_price);
      echo json_encode($product);
    }
}
?>
