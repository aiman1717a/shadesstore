<?php
/**
 *
 */
class Pages extends CI_Controller
{
  public function view($page = 'about')
  {
    if(!file_exists(APPPATH.'modules/pages/views/'.$page.'.php')){
      show_404();
    }
    $this->load->view('templates/header');
    $this->load->view($page);
    $this->load->view('templates/footer');
  }
  function test(){
    echo "ya";
  }
}
?>
