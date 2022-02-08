

	<div class="clearfix"></div>

	<footer class="footer">
		<div class="footerNavTab">
			<!-- <a href="<?php bloginfo('url') ?>"><div class="navBarMenuItem">Home</div></a> -->

			<?php
			wp_nav_menu( array(
				// 'container_class' => "navBarMenuItem",
				// 'menu_class' => "navBarMenuItem",
				'theme_location' => is_user_logged_in() ? 'logged-in-menu' : 'logged-out-menu',
			) );
			 ?>
		</div>

		<div class="footerText">
			<p>Copyrights <?php date("Y") ?> - <?php bloginfo('name') ?></p>
		</div>
	</footer>
</body>
</html>
