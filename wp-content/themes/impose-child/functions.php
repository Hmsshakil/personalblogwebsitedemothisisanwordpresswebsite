<?php

	function impose_child_scripts()
	{
		wp_enqueue_style('impose-parent-style', get_template_directory_uri(). '/style.css');
	}
	
	add_action('wp_enqueue_scripts', 'impose_child_scripts');


/* Custom Functions */