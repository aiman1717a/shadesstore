<?php
/**
 *
 */
class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model');
    }

    public function display()
    {
        $page = 'profile';
        if (!file_exists(APPPATH . 'modules/profile/views/' . $page . '.php')) {
            show_404();
        }
        $user_id = $this->session->userdata('user_id');
        $response = $this->profile_model->getProfile($user_id);
        if (isset($response['success']) && $response['success'] === true) {
            $data['profile'] = $response;
            $this->load->view('templates/header');
            $this->load->view($page, $data);
            $this->load->view('templates/footer');
        }
    }

    public function updateProfile()
    {
        $page = 'profile';
        if (!file_exists(APPPATH . 'modules/profile/views/' . $page . '.php')) {
            show_404();
        }
        $user_id = $this->session->userdata('user_id');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $address = $this->input->post('address');

        $response = $this->profile_model->updateProfile($user_id, $first_name, $last_name, $address);
        if (isset($response)) {
          echo json_encode($response);
        }
    }
}
?>
