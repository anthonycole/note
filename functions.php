<?php 

function note_options_init() {
    locate_template( array( 'lib/struts/classes/struts.php' ), true );

    Struts::load_config( array(
        'struts_root_uri' => get_template_directory_uri() . '/lib/struts', // required, set this to the URI of the root Struts directory
        'use_struts_skin' => true, // optional, overrides the Settings API html output
    ) );

    global $note_options;

    $note_options = new Struts_Options( 'note', 'theme_note_options' );

    // Setup the option sections
    $note_options->add_section( 'header', __( 'Header', 'note' ), 200 );
    $note_options->add_section( 'comments', __( 'Comments', 'note' ), 201 ); // 200 is priority of section in the customizer
    $note_options->add_section( 'footer', __( 'Footer Content', 'note' ), 201 ); // 200 is priority of section in the customizer

    /* Section One
     * ------------------------------------------------------------------ */

    $note_options->add_option( 'header_text', 'textarea', 'header' )
    ->default_value( 'Hey, and Welcome to Note. Note is a really basic WordPress "micro-theme" based off of Intuit.' )
    ->label( __( 'Header Text', 'mytheme' ) )
    ->description( __( 'Enter the text you want to use for your sidebar.', 'note' ) );


    $note_options->add_option( 'comment_js', 'textarea', 'comments' )
        ->default_value( '<script></script>' )
        ->label( __( 'Comment Javascript', 'mytheme' ) )
        ->description( __( 'Enter The Javascript to use for commenting - EG disqus, etc.', 'note' ) );


    $note_options->add_option( 'footer_text', 'text', 'footer' )
        ->default_value( '&copy; 2013 residen.se. We like you.' )
        ->label( __( 'Comment Javascript', 'mytheme' ) )
        ->description( __( '', 'note' ) );
}

add_action( 'after_setup_theme', 'note_options_init', 5 );

// Gets the value for a requested option.
function note_option( $option_name ) {
    global $note_options;
    return $note_options->get_value( $option_name );
}

function note_sidebar_init() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'right_sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
    ));
}

add_action( 'widgets_init', 'note_sidebar_init' );

function note_get_avatar(  $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) 
{
    $url = 'http://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}