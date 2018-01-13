<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo anchor('', get_option('site_name'), 'class="navbar-brand"') ?>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
<?php echo build_menu(array(
	'location' => 'header-menu',
	'menu_attr' => array(
		'class' => 'nav navbar-nav'
	),
	'container' => false,
)); ?>

<?php if ($this->auth->online()): ?>

			<ul class="nav navbar-nav navbar-right">
			<?php if ($this->auth->is_admin()): ?>
				<li><?php echo admin_anchor('', lang('admin_panel')) ?></li>
			<?php endif; ?>
				<li class="dropdown">
					<a href="<?php echo site_url($c_user->username) ?>" class="dropdown-toggle user-menu" data-toggle="dropdown"><?php echo $c_user->full_name ?></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor($c_user->username, lang('profile')) ?></li>
						<li><?php echo anchor('settings', lang('settings')) ?></li>
						<li class="divider"></li>
						<li><?php echo anchor('logout', lang('logout')) ?></li>
					</ul>
				</li>
			</ul>

<?php else: ?>
			<div class="navbar-right">
				<?php echo anchor('login', lang('login'), 'class="btn btn-primary navbar-btn"') ?>
			<?php if (get_option('allow_registration', false) === true): ?>
				&nbsp;<?php echo anchor('register', lang('create_account'), 'class="btn btn-default navbar-btn"') ?>
			<?php endif; ?>
			</div>
<?php endif; ?>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>