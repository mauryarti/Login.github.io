<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeModel extends CI_Model{ 
public function add_data($postdata){
        
    // $post['userid']=mt_rand(11111,99999);
   //  "string"; $post['uname']=$postdata['username'];
   //  $post['upass']=$postdata['password'];
 //   $post['uemail']=$postdata['email'];

       $this->db->insert('data',$postdata); 
    }
    }