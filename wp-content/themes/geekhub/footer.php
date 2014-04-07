			<div id="footer">
				<?php wp_nav_menu(array(
					'theme_location' => 'main_menu',
					'container' => false));
				?>

				<span>&copy; Copyright <?php $year = date("Y"); echo $year;?></span>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>