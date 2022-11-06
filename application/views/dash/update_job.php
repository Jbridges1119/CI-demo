<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( !$_SESSION['u_name'] ) {
	redirect('home', 'refresh');
}
$id = $this->uri->segment(3);
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
				<div class="panel-heading">Update Job</div>
				<div class="panel-body">
				<?php echo form_open('jobs/update_process_job/'.$id, 'class="form-horizontal"'); ?>
                <?php

							
							    $jobs_list = $this->db->get_where('jobs', array('j_id' => $id));

                foreach ($jobs_list->result() as $job) 
                { ?>

									<div class="form-group">
                  <label class="col-sm-2 control-label">Job Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="j_name" class="form-control input-sm" value="<?php echo $job->j_name; ?>" placeholder="Job Name">
                  </div>
                </div>
								<?php } ?>
								<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" name="update_job"  class="btn btn-sm btn-warning" value="Update Job">
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
