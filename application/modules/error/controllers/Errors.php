<?php
/**
 *
 */
class Errors extends CI_Controller
{
  public function view()
  {
    $page = 'error';
    if(!file_exists(APPPATH.'modules/error/views/'.$page.'.php')){
      show_404();
    }
    $this->load->view('pages/'.$page);
  }
}


?>
