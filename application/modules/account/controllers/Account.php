<?php
/**
 *
 */
class Account extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('account_model');
    }

    public function display()
    {
        $page = 'account';
        if (!file_exists(APPPATH . 'modules/account/views/' . $page . '.php')) {
            show_404();
        }
        $user_id = $this->session->userdata('user_id');
        $response = $this->account_model->getUser($user_id);
        if (isset($response['success']) && $response['success'] === true) {
            $data['account'] = $response;
            $this->load->view('templates/header');
            $this->load->view($page, $data);
            $this->load->view('templates/footer');
        }
    }
    public function updateAccount()
    {
        $user_name = $this->input->post('user_name');
        $email = $this->input->post('email');

        $user_id = $this->session->userdata('user_id');
        $response = $this->account_model->updateAccount($user_id, $user_name, $email);
        if (isset($response)) {
          echo json_encode($response);
        }
    }
}
?>
