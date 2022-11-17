<?php
/**
 * @author : Jegtheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Theme JNews_Post_Split
 */
class JNews_Split_Type_3 extends JNews_Split_Type_Abstract {

	public function render() {
		$output  = $this->before_content;
		$output .= "<div class='top-split-nav'>" . $this->drop_section() . '</div>';
		$output .= $this->render_content();
		$output .= $this->drop_section();

		return $output;
	}

	public function drop_section() {
		$previous_class = ( $this->current_page === 1 ) ? 'disable' : '';
		$previous_url   = $this->get_page_link_url( $this->current_page - 1 );

		$next_class = ( $this->current_page === $this->max_page ) ? 'disable' : '';
		$next_url   = $this->get_page_link_url( $this->current_page + 1 );

		$output =
			'<div class="jeg_splitpost_bar jeg_splitpost_3">
                <div class="nav_wrap">
                    ' . $this->current_title() . '
                    ' . $this->split_post_nav() . "
                </div>
                <div class=\"pagenav_wrap\">
                    <div class=\"page_nav prev {$previous_class}\">
                        <a href=\"{$previous_url}\"><span>" . jnews_return_translation( 'Previous', 'jnews-split', 'previous' ) . "</span></a>
                    </div>
                    <div class=\"page_nav next {$next_class}\">
                        <a href=\"{$next_url}\"><span>" . jnews_return_translation( 'Next', 'jnews-split', 'next' ) . '</span></a>
                    </div>
                </div>
            </div>';

		return $output;
	}

	public function get_split_type() {
		return '3';
	}

}

