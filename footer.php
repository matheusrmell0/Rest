<footer>
<nav class="nav-footer">
<?php
$args = [
  "menu" => "principal",
  "container" => false,
];
wp_nav_menu($args);
?>
			</nav>
			<p><?php bloginfo("name"); ?> © <?php echo Date(
   "Y"
 ); ?>. Alguns direitos reservados.</p>
		</footer>
		<!--  Inicia o Footer Wordpress -->
			<?php wp_footer(); ?>
    <!--  Fecha o Footer Wordpress -->
	</body>
</html>

