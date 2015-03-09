<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			), 
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$bg_images_path = get_stylesheet_directory(). '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		            	natsort($bg_images); //Sorts the array into a natural order
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

$of_options[] = array( 	"name" 		=> "Genaral Settings",
						"type" 		=> "heading"
				);
					
			
$of_options[] = array( 	"name" 		=> "Introduction",
						"desc" 		=> "",
						"id" 		=> "introduction",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Welcome to <span style=\"color:#FF0762\">WpDigitalDownload</span> theme option panel</h3>
										This is a Free wordpress Digital downloader theme by wpfreeware with some cool features. If you want more themes or want to learn how to setup these theme or just need general help on using it feel free to visit at <a target=\"_blank\" href=\"http://www.wpfreeware.com/wp-digital-download/\">wpfreeware.com</a>",
						"type" 		=> "info"
				);
				
				
$of_options[] = array( 	"name" 		=> "Logo Uploader",
						"desc" 		=> "Upload your logo here.Best size for logo is 420 x 100",
						"id" 		=> "logo_uploader",
						"type" 		=> "upload"
				);
				
				
$of_options[] = array( 	"name" 		=> "Search Box placeholder Text",
						"desc" 		=> "Put search box placeholder text here.Default is: Search site.",
						"id" 		=> "search_text",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Disqus shortname",
						"desc" 		=> "Put your disqus shortname for disqus commenting system.Create your shortname <a target=\"_blank\" href=\"https://disqus.com/\">Here</a>",
						"id" 		=> "disqus_shortname",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Footer Text",
						"desc" 		=> "Write your footer text here",
						"id" 		=> "footer_text",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Custom Css",
						"type" 		=> "heading"
				);
				
$of_options[] = array( 	"name" 		=> "Background Color",
						"desc" 		=> "Select site background color.",
						"id" 		=> "bg_color",
						"std" 		=> "",
						"type" 		=> "color"
					);
				
$of_options[] = array( 	"name" 		=> "Custom Css Styles",
						"desc" 		=> "Put your own css rules here.Remember Only rules you can add.Don't add STYLE tag.",
						"id" 		=> "custom_css",
						"type" 		=> "textarea"
				);
				
$of_options[] = array( 	"name" 		=> "Google Settings",
						"type" 		=> "heading"
				);
				
$of_options[] = array( 	"name" 		=> "Google Analytics",
						"desc" 		=> "Put your google analytics codes here.It will be load into footer.",
						"id" 		=> "google_analytic",
						"type" 		=> "textarea"
				);
$of_options[] = array( 	"name" 		=> "Google Custom Search Id",
						"desc" 		=> "Put your google custom search engine id here. ( Ex: 010373143911675609353:intt5wgjw0y )",
						"id" 		=> "google_custom_search",
						"type" 		=> "text"
				);
		
				
				
$of_options[] = array( 	"name" 		=> "Social Settings",
						"type" 		=> "heading"
				);	
				
$of_options[] = array( 	"name" 		=> "Social Area",
						"id" 		=> "introduction",
						"std" 		=> "<h3 style=\"margin: 0 0 0px;\">Add your social links below:</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);				

$of_options[] = array( 	"name" 		=> "Facebook",
						"desc" 		=> "Put your facebook links here.",
						"id" 		=> "facebook",
						"type" 		=> "text"
				);	
$of_options[] = array( 	"name" 		=> "Twitter",
						"desc" 		=> "Put your Twitter links here.",
						"id" 		=> "twitter",
						"type" 		=> "text"
				);		
$of_options[] = array( 	"name" 		=> "Google+",
						"desc" 		=> "Put your Google+ links here.",
						"id" 		=> "google",
						"type" 		=> "text"
				);		
		
$of_options[] = array( 	"name" 		=> "Rss Feed",
						"desc" 		=> "Put your Rss Feed links here.",
						"id" 		=> "feed",
						"type" 		=> "text"
				);		

	}//End function: of_options()
}//End chack if function exists: of_options()
?>
