<?php
/**
 *
 */
class Login extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('login_model');
  }
  public function view(){
    $page = 'login';
    $loading_view = $this->load->view('loading_view', '', TRUE);
    $data['loading_view'] = $loading_view;
    if(!file_exists(APPPATH.'modules/login/views/'.$page.'.php')){
      show_404();
    }
    $this->load->view('templates/header');
    $this->load->view($page, $data);
    $this->load->view('templates/footer');
  }

  public function sign_in()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $login = $this->login_model->sign_in($email, $password);
    if (isset($login['success']) && $login['success'] === true) {
      $this->load->library('session');
      $current_user = array(
        'user_id' => $login["data"]["user_id"],
        'user_email' => $login["data"]["user_email"],
        'login_status' => true
      );
      $this->session->set_userdata($current_user);
    }
    echo json_encode($login);
  }
  public function logout(){
    unset(
      $_SESSION['user_id'],
      $_SESSION['user_email'],
      $_SESSION['login_status']
    );
    session_destroy();
    redirect(base_url()."home");
  }
}
?>
