<?php 
function theme_setup(){
	register_nav_menu("topmenu", ("menu chinh"));
}
add_action("init","theme_setup" );
?>

<?php 
add_theme_support( 'post-thumbnails' ); 
?>