<?php
/**
 *
 */
class Checkout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
          $this->load->model('cart/cart_model');
    }

    public function display()
    {
        $page = 'checkout';
        if (!file_exists(APPPATH . 'modules/checkout/views/' . $page . '.php')) {
            show_404();
        }
        $user_id = $this->session->userdata('user_id');
        $cart = $this->cart_model->getCart($user_id);
        if (isset($cart['success']) && $cart['success'] === true) {
          $data['cart'] = $cart;
          $this->load->view('templates/header');
          $this->load->view($page, $cart);
          $this->load->view('templates/footer');
        } else{
          $this->load->view('templates/header');
          $this->load->view($page);
          $this->load->view('templates/footer');
        }
    }
}
?>
