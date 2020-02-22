<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class teacherup_model extends CI_Model{
 function __construct() {
 $this->tableName = 'teacher_up';
 $this->primaryKey = 'id';
 }

 public function insert($userData){
 $this->db->insert("teacher_up",$userData);
 /*if(!array_key_exists("created",$data)){
 $data['created'] = date("Y-m-d H:i:s");
 }
 if(!array_key_exists("modified",$data)){
 $data['modified'] = date("Y-m-d H:i:s");
 }*/
 // $insert = $this->db->insert($this->tableName,$data);
 // if($insert){
 // return $this->db->insert_id();
 // }else{
 // return false;
 // }
 }
}
?>