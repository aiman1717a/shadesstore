<?php
/**
 *
 */
class Cart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('shipping/shipping_model');
        $this->load->model('cart_model');
    }

    public function display()
    {
        $page = 'cart';
        if (!file_exists(APPPATH . 'modules/cart/views/' . $page . '.php')) {
            show_404();
        }
        $user_id = $this->session->userdata('user_id');
        $cart = $this->cart_model->getCart($user_id);

        if (isset($cart['success']) && $cart['success'] === true) {

            if(isset($cart['cart']['cart_item'])){
              //if cart item is there
              $data['cart'] = $cart;
              $item_view = $this->load->view('item_view', $data, TRUE);
              $cart_delete_all_view = $this->load->view('cart_delete_all_view',  $data, TRUE);
              $payment_view = $this->load->view('payment_view',  $data, TRUE);

              $data['item_view'] = $item_view;
              $data['cart_delete_all_view'] = $cart_delete_all_view;
              $data['payment_view'] = $payment_view;
            } else {
                //if cart item is empty
              $empty_cart = $this->load->view('empty_cart', '', TRUE);
              $data['empty_cart'] = $empty_cart;
            }

            $shipping = $this->shipping_model->getShipping($user_id);
            if(isset($shipping['data'])){
              //if shipping is there
              $data['shipping'] = $shipping;
              $shipping_view = $this->load->view('shipping_view', isset($shipping['data']) ? $data : null, TRUE);
              $data['shipping_view'] = $shipping_view;
            }
        } else {
          //if user is logged off
          //$empty_cart = $this->load->view('empty_cart', '', TRUE);
          $not_logged = $this->load->view('not_logged', '', TRUE);
          $data['not_logged'] = $not_logged;
        }
        $this->load->view('templates/header');
        $this->load->view($page, isset($data) ? $data : null);
        $this->load->view('templates/footer');
    }
    public function deleteCartItem()
    {
        $cart_item_id = $this->input->get('cart_item_id');
        $response = $this->cart_model->deleteCartItem($cart_item_id);
        echo json_encode($response);
    }

    public function updateCartItem()
    {
        $cart_item_id = $this->input->get('cart_item_id');
        $cart_item_quantity = $this->input->get('cart_item_quantity');

        $response = $this->cart_model->updateCartItemQty($cart_item_id, $cart_item_quantity);
        echo json_encode($response);
    }
}
?>
