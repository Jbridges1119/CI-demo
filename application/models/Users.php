<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Users extends CI_Model 
{
    public function insert_user( $user_data)
    {
			$this->db->insert('users', $user_data);
			
    }                        
                        
}


/* End of file Users_model.php and path \application\models\Users_model.php */
