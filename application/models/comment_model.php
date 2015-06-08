<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//观点模型

class Comment_model extends CI_Model{
	//添加
	public function addComment($data){
		$this->db->insert('comment',$data);
	}
	//全部查询
	public function commentList(){
	    //联合comment和opinion表
		$data = $this->db->select('c.id, o.view, c.opinion_id, c.target, c.status, c.content, c.create_time')
				         ->from('comment as c')
				         ->join('opinion as o', 'c.opinion_id = o.id')->order_by('c.id', 'desc')->get()->result_array();
	
		//$data = $this->db->order_by('id', 'desc')->get('comment')->result_array();
		return $data;
	}
	//条件查询
	public function checkComment($id){
		//$data = $this->db->where(array('id'=>$id))->get('comment')->result_array();
		/*
		$data = $this->db->select('o.id, u.user_name, o.device, o.pictures, o.score, o.stars, o.view,
				                  o.status, o.create_time, o.update_time')->from('opinion as o')
				         ->where(array('o.id'=>$id))->join('user as u', 'o.user_id = u.id')
		                 ->get()->result_array();
		                 */
		$data = $this->db->select('c.id, o.view, c.opinion_id, c.target, c.status, c.content, c.create_time')
		->from('comment as c')->where(array('c.id'=>$id))
		->join('opinion as o', 'c.opinion_id = o.id')->get()->result_array();
		
		return $data;
	}
	
	//修改动作
	public function updateComment($id, $data){
		$this->db->update('comment', $data, array('id'=>$id));	
	}
	//删除
	public function delComment($id){
		$this->db->delete('comment', array('id'=>$id));
	}
	//统计总数量：
	public function get_column($num,$offset){
	    $query=$this->db->get('column',$num,$offset);
	    return $query->result_array();
	}
}