<div class="container-fluid main-menu sticky-top">
	<div class="container">
		<nav id="my-nav-sec" class="navbar navbar-expand-lg navbar-light nav-hover padding-4 p-0">
			<a class="navbar-brand" href="<?php echo esc_url(home_url( '/')); ?>">
				<i class="fa fa-home" aria-hidden="true"></i>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars" style="font-size:35px;color:#FFF"></i>
			</button>
			<?php
			wp_nav_menu([
				'menu'            => 'main-menu',
				'theme_location'  => 'primary',
				'container'       => 'div',
				'container_id'    => 'navbarTogglerDemo03',
				'container_class' => 'collapse navbar-collapse',
				'menu_id'         => false,
				'menu_class'      => 'navbar-nav mr-auto my-menu mt-lg-0',
				'depth'           => 2,
				'fallback_cb'     => 'Bootstrap4Navwalker::fallback',
				'walker'          => new Bootstrap4Navwalker(array(
					'container'       => 'div',
					'container_class' => 'dropdown-menu sm-menu mt-0',
				)
			),
			]);
			?>
		</nav>
	</div>
</div>
