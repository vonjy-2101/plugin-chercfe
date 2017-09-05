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
	    }

	    public function bookin_menu()
	    {
	    	add_menu_page('Bookin', 'bookin','manage_options','admin-deliver-template', array($this,'bookin_template'), '');
	    }

	    public function bookin_template()
	    {
	    	include (BASEPAHT ."/templates/bookin-template.php");
	    }
	}

?>