<?php 

/*
@package wp notebook

*/
?>

<?php



function wp_notebook_scripts() {
	
	wp_enqueue_style( 'bootstrap',get_template_directory_uri() .  '/css/bootstrap.min.css');
	wp_enqueue_style( 'Cuprum', '//fonts.googleapis.com/css?family=Cuprum:400,400italic,700,700itali');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/all.min.css' );
    wp_enqueue_style( 'respinsive', get_template_directory_uri() . '/media-queries.css' );
	
	
	wp_enqueue_script( 'customcode', get_template_directory_uri() . '/js/mohsen.js', array( 'jquery' ), '20120206', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/js/all.min.js', array( 'jquery' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'wp_notebook_scripts' );





function wp_notebook_setup() {

	// This theme supports a variety of post formats.
add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

    
    // Allows users to set a custom background
    add_theme_support( 'custom-background', array(
        'default-image' => get_template_directory_uri() . '/img/bg.jpg',
    ) );

global $wp_version;
$args = array(
    'width'         => 980,
    'default-image' => get_template_directory_uri() . '/img/head.jpg',
    'uploads'       => true,
);


	
add_theme_support( 'automatic-feed-links' );

if ( ! isset( $content_width ) )
	$content_width = 700;
	
	
	
register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'wp_notebook' ),
	) );
	
add_theme_support( 'title-tag' );

	
}	
	
add_action( 'after_setup_theme', 'wp_notebook_setup' );

function wp_notebook_fallbackmenu(){ ?>
			<div id="submenu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }	

function wp_notebook_widgets () {


		register_sidebar( array(
		'name' =>'Main Sidebar',
		'id' => 'sidebar-1',
		'description' => 'Appears on posts and pages except the optional Front Page template, which has its own widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
			register_sidebar( array(
		'name' =>'footer 1',
		'id' => 'footer-1',
		'description' => 'left footer sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
			register_sidebar( array(
		'name' =>'footer 2',
		'id' => 'footer-2',
		'description' => 'middle footer sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
			register_sidebar( array(
		'name' =>'footer 3',
		'id' => 'footer-3',
		'description' => 'right footer sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	
}


 add_action( 'widgets_init', 'wp_notebook_widgets' );












?>
