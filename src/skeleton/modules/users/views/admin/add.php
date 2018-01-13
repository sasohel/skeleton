<h2 class="page-header"><?php _e('us_manage_users') ?> <?php echo admin_anchor('users', lang('us_manage_users'), 'class="btn btn-primary btn-sm pull-right"') ?></h2>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
			<div class="panel-heading"><h3 class="panel-title"><?php _e('add_user') ?></h3></div>
			<div class="panel-body">
				<?php echo form_open('admin/users/add', 'role="form"', @$hidden) ?>
					<fieldset>
						<div class="form-group<?php echo form_error('first_name') ? ' has-error' : '' ?>">
							<label for="first_name" class="sr-only"><?php _e('first_name') ?></label>
							<?php echo print_input($first_name, array('class' => 'form-control', 'autofocus' => 'autofocus')) ?>
							<?php echo form_error('first_name', '<small class="help-block">', '</small>')?>
						</div>
						<div class="form-group<?php echo form_error('last_name') ? ' has-error' : '' ?>">
							<label for="last_name" class="sr-only"><?php _e('last_name') ?></label>
							<?php echo print_input($last_name, array('class' => 'form-control')) ?>
							<?php echo form_error('last_name', '<small class="help-block">', '</small>')?>
						</div>
						<div class="form-group<?php echo form_error('email') ? ' has-error' : '' ?>">
							<label for="email" class="sr-only"><?php _e('email_address') ?></label>
							<?php echo print_input($email, array('class' => 'form-control')) ?>
							<?php echo form_error('email', '<small class="help-block">', '</small>')?>
						</div>
						<div class="form-group<?php echo form_error('username') ? ' has-error' : '' ?>">
							<label for="username" class="sr-only"><?php _e('username') ?></label>
							<?php echo print_input($username, array('class' => 'form-control')) ?>
							<?php echo form_error('username', '<small class="help-block">', '</small>')?>
						</div>
						<div class="form-group<?php echo form_error('password') ? ' has-error' : '' ?>">
							<label for="password" class="sr-only"><?php _e('password') ?></label>
							<?php echo print_input($password, array('class' => 'form-control')) ?>
							<?php echo form_error('password', '<small class="help-block">', '</small>')?>
						</div>
						<div class="form-group<?php echo form_error('cpassword') ? ' has-error' : '' ?>">
							<label for="cpassword" class="sr-only"><?php _e('confirm_password') ?></label>
							<?php echo print_input($cpassword, array('class' => 'form-control')) ?>
							<?php echo form_error('cpassword', '<small class="help-block">', '</small>')?>
						</div>
						<div class="form-group">
							<input type="checkbox" name="enabled" id="enabled" value="1" <?php echo set_checkbox('enabled', '1', true) ?>>&nbsp;<label for="enabled"><?php _e('active') ?></label>
							<span class="pull-right">
								<input type="checkbox" name="admin" id="admin" value="1" <?php echo set_checkbox('admin', '1', false) ?>>&nbsp;<label for="admin"><?php _e('admin') ?></label>
							</span>
						</div>

						<button type="submit" class="btn btn-primary btn-block"><?php _e('add_user') ?></button>
					</fieldset>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</div><!--/.row-->