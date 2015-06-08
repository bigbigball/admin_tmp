<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*默认首页*/

class Home extends CI_Controller{
    
    //构造函数
    function __construct()
    {
        parent::__construct();
    
        $ci = & get_instance();
        $variable = array('haction'=>'home', 'titles'=>'首页-ACE后台管理系统');
        $ci->load->vars($variable);
    }
    
	/*默认方法*/
	public function index(){
		
		$this->load->view('admin/admin');
	}
	

	
	public function header(){
	
	    $this->load->view('admin/public/header');
	}
	public function footer(){
		
		$this->load->view('admin/admin/footer');
	}
	
}