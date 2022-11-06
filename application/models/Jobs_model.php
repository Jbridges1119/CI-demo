<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Jobs_model extends CI_Model 
{
    public function add_job($jobs_data)
    {
			$this->db->insert('jobs',$jobs_data);
			
	
    }                        
                        
}


/* End of file Jobs_model.php and path \application\models\Jobs_model.php */
