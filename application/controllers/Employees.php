<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
				$this->load->model('Employees_model');
    }

    public function index()
    {
			$this->load->view('dash/employee_list');
			
    }

		public function single_employee( $e_id )
		{
			$this->load->view('dash/single_employee', $e_id);
			
		}


		public function add_employee()
		{
			$this->load->view('dash/add_employee');
		}
		public function add_process_employee()
		{
			if ( $this->input->post('add_employee') ){
				$e_name =  $this->input->post('e_name');
				$e_email =  $this->input->post('e_email');
				$e_phone =  $this->input->post('e_phone');
				$e_job =  $this->input->post('e_job');

				$employee_details = [
					'e_name' => $e_name,
					'e_email' => $e_email,
					'e_phone' => $e_phone,
					'e_job' => $e_job
				];

				$this->Employees_model->add_employee($employee_details);
				redirect('employees/', 'refresh');
			}
		}

		public function update_employee($e_id)
		{
			$this->load->view('dash/update_employee', $e_id);
			
		}

		public function update_process_employee($e_id)
		{
			if(  $this->input->post('update_employee') )
			{
				$e_name =  $this->input->post('e_name');
				$e_email =  $this->input->post('e_email');
				$e_phone =  $this->input->post('e_phone');
				$e_job =  $this->input->post('e_job');

				$employee_details = [
					'e_name' => $e_name,
					'e_email' => $e_email,
					'e_phone' => $e_phone,
					'e_job' => $e_job
				];

				$this->Employees_model->update_employee($employee_details, $e_id);
				redirect('employees/single_employee/'.$e_id,'refresh');
			}
		}

		public function delete_employee($e_id)
		{
			$this->Employees_model->delete_employee($e_id);
			redirect('employees/', 'refresh');
		}
}

/* End of file Employee.php and path \application\controllers\Employee.php */
