<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
		session_start();
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function login()
	{
		$user_id              = isset($_POST['user_id'])?$_POST['user_id']:'';
		$password             = isset($_POST['password'])?$_POST['password']:'';             
		$_SESSION['loggedin'] = 'true';
		$_SESSION['user_id']  = $user_id;
		$_SESSION['loggedin'] = 'true';
		header('Location:'.base_folder());
	}
	public function logout()
	{
		$_SESSION['loggedin'] = 'false';
		header('Location:'.base_folder());
	}
	public function generateRoomList()
	{
	  $html  = '';
	  for($i = 0; $i < 10; $i++){
		$html .= '<li>';
        $html .= '<a href="'.base_folder().'room/join/1234">';
        $html .= '<img src="'.upload_url().'thumbs/1234.png"';
        $html .= ' width="180" height="148" alt="';
        $html .= 'angela_maria26 s chat room" class="png"></a>';
        $html .= '<div class="thumbnail_label thumbnail_label_c_hd">HD</div>';
        $html .= '<div class="details">';
        $html .= '<div class="title">';
        $html .= '<a href="'.base_folder().'room/join/1234"> nithin</a>';
        $html .= '<span class="age genderf">26</span>';
        $html .= '</div>';
        $html .= '<ul class="subject" style="height: 32px;">';
        $html .= '<li title="sample title">sample title <a href="#">#lovense</a></li>';
        $html .= '</ul>';
        $html .= '<ul class="sub-info">';
        $html .= '<li class="location">India</li>';
        $html .= '<li class="cams">117 mins, 5024 viewers</li>';
        $html .= '</ul>';
        $html .= '</div>';
        $html .= '</li>';
      }
        echo $html;
        die;
	}
}
