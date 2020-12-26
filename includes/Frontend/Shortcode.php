<?php

namespace Ksps\Resume\Frontend;

/**
 * Shortcode handler class
 */
class Shortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        add_shortcode( 'applicant-form', [ $this, 'render_shortcode' ] );
    }

    /**
     * Shortcode handler class
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function render_shortcode( $atts, $content = '' ) {

	    wp_enqueue_script( 'ksps-resume-script' );
	    wp_enqueue_style( 'ksps-resume-style' );

	    ob_start();
	    include __DIR__ . '/views/shortcode.php';

	    return ob_get_clean();

    }
}
