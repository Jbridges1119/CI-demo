<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( !$_SESSION['u_name'] ) {
	redirect('home', 'refresh');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  </head>
  <body>

	<!-- dash nav -->
	<?php $this->load->view('dash/inc/nav'); ?>
	<!-- dash nav -->

	<!-- dash data -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<!-- sidebar -->
				<?php $this->load->view('dash/inc/sidebar'); ?>
				
				<!-- sidebar -->
			</div>
			<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">Add Employee</div>
				<div class="panel-body">
				<?php echo form_open('employees/add_process_employee', 'class="form-horizontal"'); ?>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input required type="text" name="e_name" class="form-control input-sm" placeholder="Name">
                  </div>
                </div>
								<div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input required type="text" name="e_email" class="form-control input-sm" placeholder="Email">
                  </div>
                </div>
								<div class="form-group">
                  <label class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-10">
                    <input required type="text" name="e_phone" class="form-control input-sm" placeholder="Phone">
                  </div>
                </div>

								<div class="form-group">
                  <label class="col-sm-2 control-label">Job</label>
                  <div class="col-sm-10">
                  <select name="e_job" class="form-control input-sm">
										<option value="-">-</option>
										<?php
										$job_list = $this->db->get('jobs');
										foreach ($job_list->result() as $job)
										{ ?>
												<option value="<?php echo $job->j_name; ?>"><?php echo $job->j_name; ?></option>

												<?php	}

											?>
									</select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" name="add_employee" class="btn btn-sm btn-success" value="Add employee">
                  </div>
                </div>
              </form>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- dash data -->


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

  </body>
</html>
