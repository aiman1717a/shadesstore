<?php
/**
 *
 */
class Register extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('register_model');
  }
  public function view()
  {
    $page = 'register';
    $loading_view = $this->load->view('loading_view', '', TRUE);
    $data['loading_view'] = $loading_view;
    if(!file_exists(APPPATH.'modules/register/views/'.$page.'.php')){
      show_404();
    }

    $data['title'] = ucfirst($page);
    $this->load->view('templates/header');
    $this->load->view($page, $data);
    $this->load->view('templates/footer');
  }

  public function sign_up()
  {
    $user_name = $this->input->post('user_name');
    $user_email = $this->input->post('user_email');
    $user_password = $this->input->post('user_password');

    $register = $this->register_model->sign_up($user_name, $user_email, $user_password);
    if (isset($register['success']) && $register['success'] === true) {
      //
    }
    echo json_encode($register);
  }
}


?>
