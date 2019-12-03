<?php
/**
 *
 */
class Home extends CI_Controller
{
  public function view()
  {
    $page = 'home';
    if (!file_exists(APPPATH . 'modules/home/views/'.$page.'.php')) {
        show_404();
    }
    $data['title'] = ucfirst($page);
    $this->load->view('templates/header');
    $this->load->view($page);
    $this->load->view('templates/footer');
  }
  function test(){
    echo "home";
  }
}
?>
