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
	public function index()
	{
        
		$this->load->view('welcome_message');
	}
    
    public function getip(){
        $ip = $this->input->ip_address();
        echo $ip;
        $this->load->library('user_agent');
        $useragent = $this->agent->browser();
        echo "<b>Your User Agent is</b>: " . $useragent;
    } 
    public function ipdetail($id = 1){
        echo $id;
    }
    
    public function page(){
        //$this->addip();
        $this->load->model('mymodel');
        $data['user'] = $this->mymodel->get_all('users_data');
        $this->load->view('main/ipcheck', $data);
        
    }
     private function addip(){
         $this->load->library('user_agent');
         $data = array(
            'system_ip' => $this->input->ip_address(), 
            'browser' => $this->agent->browser(), 
            'device' => $this->agent->platform(), 
            'create_date' => date('Y-m-d H:i'), 
         );
         $this->mymodel->insert('users_data', $data);
     }
    
    private function sendmail(){
         $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'tanu.tarunchaudhary@gmail.com', // change it to yours
            'smtp_pass' => '09716757723', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $message = '';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('tanu.tarunchaudhary@gmail.com'); // change it to yours
        $this->email->to('tarun@mannconsultancy.com');// change it to yours
        $this->email->subject('Test localhost mail');
        $this->email->message($message);
        if($this->email->send())
        {
        echo 'Email sent.';
        }
        else
        {
        show_error($this->email->print_debugger());
        }
    }
    public function __construct(){
        parent:: __construct();
        $this->load->model('mymodel');
    }
}
