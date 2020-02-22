<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searchmodel extends CI_Model
// Class Mymodel Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
    $query=$this->db->query("SELECT courseid_fk FROM student_learn WHERE studentid_fk='$keyword'");

        return $query->result();
    }

    function stupay($keyword)
    {
    // $query1=$this->db->query("SELECT student.first_name,student.last_name FROM student,student_learn INNER JOIN student_learn ON student_learn.studentid_fk=student.student_id WHERE student_learn.studentid_fk='$keyword'");
     //    return $query1->result1();

    $query1 = $this->db->query("SELECT student.first_name FROM student WHERE student_id='$keyword'");
    return $query1->result1();

    // $query=$this->db->query("SELECT courseid_fk FROM student_learn WHERE studentid_fk='$keyword'");

     //    return $query->result();

    }  
}
?>
