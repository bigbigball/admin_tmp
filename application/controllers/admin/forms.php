<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*默认首页*/

class Forms extends CI_Controller{
    
    //构造函数
    function __construct()
    {
        parent::__construct();
    
        $ci = & get_instance();
        $variable = array('haction'=>'forms', 'titles'=>'表单-ACE后台管理系统');
        $ci->load->vars($variable);
    }
    
	/*默认方法*/
	public function index(){
		
		$this->load->view('admin/forms');
	}

}