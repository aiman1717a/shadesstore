<?php
/**
 *
 */
class Shipping extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('shipping_model');
    }

    public function display()
    {
        $page = 'shipping';
        if (!file_exists(APPPATH . 'modules/shipping/views/' . $page . '.php')) {
            show_404();
        }
        $user_id = $this->session->userdata('user_id');
        $response = $this->shipping_model->getShipping($user_id);

        if (isset($response['success']) && $response['success'] === true) {
          $data['shipping'] = $response;
          $this->load->view('templates/header');
          $this->load->view($page, $data);
          $this->load->view('templates/footer');
        } else {
          $this->load->view('templates/header');
          $this->load->view($page);
          $this->load->view('templates/footer');
        }
    }
    public function updateShipping()
    {
        $shipping_id = $this->input->get('shipping_id');
        $shipping_place = $this->input->get('shipping_place');
        $shipping_street = $this->input->get('shipping_street');
        $shipping_city = $this->input->get('shipping_city');
        $shipping_country = $this->input->get('shipping_country');
        $shipping_zip = $this->input->get('shipping_zip');

        $response = $this->shipping_model->updateShipping($shipping_id, $shipping_place, $shipping_street, $shipping_city, $shipping_city, $shipping_country, $shipping_zip);
        if (isset($response)) {
          echo json_encode($response);
        }
    }
}
?>
