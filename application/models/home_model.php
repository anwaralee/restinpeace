<?php
class Home_model extends CI_model
{
    function saveuser($user)
    {
        $arr['fbid'] = $user;
        $q = $this->db->get_where('tbl_member',$arr);
        if($q->num_rows()>0)
        {
            die('here');
            
        }
        else{
        $this->db->insert('tbl_member',$arr);
            die('there');
        }
    }
    function getfeatured()
    {
        
        $q = $this->db->get_where('tbl_people',array('is_featured'=>1));
        if($q->num_rows()>0)
        {
            return $q->result_array();
        }
        else
        return null;
    }
    function getrecent($offset,$num)
    {
        $this->db->limit($num,$offset);
        $this->db->order_by("id", "desc"); 
        $q = $this->db->get_where('tbl_people',array('is_featured'=>0));
        if($q->num_rows()>0)
        {
            return $q->result_array();
        }
        else
        return null;
    }
    function getrecentnum()
    {
        $this->db->where(array('is_featured'=>0));
        return $this->db->count_all_results('tbl_people');
    }
}