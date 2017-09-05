<?php

	class Bookin
	{

		public function __construct()
	    {
	        $this->set_hooks();
	    }
		    
	    public function set_hooks()
	    {
	        add_action('init', array($this,'create_deliver'));
	        add_action('admin_menu', array($this,'bookin_menu'));
	        add_action('wp_enqueue_scripts', 'scripts');
	    }

	    public function bookin_menu()
	    {
	    	add_menu_page('Bookin', 'bookin','manage_options','admin-deliver-template', array($this,'bookin_template'), '');
	    }

	    public function bookin_template()
	    {
	    	$this->scripts();
	    	echo '<script src="'.plugins_url() .'/plugin-chercfe/assets/js/jquery.min.js'.'"></script>';
	    	include (BASEPAHT ."/templates/bookin-template.php");
	    }

	    public function scripts()
	    {
	    	wp_enqueue_style('bootstrap', plugins_url().'/plugin-chercfe/assets/bootstrap/css/bootstrap.css',false,true); 
	    }
	}

?>