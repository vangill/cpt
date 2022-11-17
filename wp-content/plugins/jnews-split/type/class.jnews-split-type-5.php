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
class JNews_Split_Type_5 extends JNews_Split_Type_Abstract {

	public function render() {
		$output  = $this->before_content;
		$output .= "<div class='top-split-nav'>" . $this->drop_section() . '</div>';
		$output .= $this->render_content();
		$output .= $this->bottom_nav();

		return $output;
	}

	public function drop_section() {
		$previous_class = ( $this->current_page === 1 ) ? 'disable' : '';
		$previous_url   = $this->get_page_link_url( $this->current_page - 1 );

		$next_class = ( $this->current_page === $this->max_page ) ? 'disable' : '';
		$next_url   = $this->get_page_link_url( $this->current_page + 1 );

		$prev_icon = is_rtl() ? 'fa-angle-right' : 'fa-angle-left';
		$next_icon = is_rtl() ? 'fa-angle-left' : 'fa-angle-right';

		$output =
			'<div class="jeg_splitpost_bar jeg_splitpost_5">
                    ' . $this->current_title() . "
                    <div class=\"pagenav_wrap\">
                        <div class=\"page_nav prev {$previous_class}\"><a href=\"{$previous_url}\"><i class=\"fa {$prev_icon}\"></i></div>
                        <div class=\"page_nav next {$next_class}\"><a href=\"{$next_url}\"><i class=\"fa {$next_icon}\"></i></a></div>
                    </div>
                </div>";

		return $output;
	}

	public function bottom_nav() {
		$previous_class = $previous_title = $previous_url = '';
		$next_class     = $next_title = $next_url = '';
		$previous_index = $next_index = 0;

		// previous title
		if ( isset( $this->all_title[ $this->index - 1 ] ) ) {
			$previous_title = $this->all_title[ $this->index - 1 ];
			$previous_url   = $this->get_page_link_url( $this->current_page - 1 );
			$previous_index = $this->index - 1;
		}

		// next title
		if ( isset( $this->all_title[ $this->index + 1 ] ) ) {
			$next_title = $this->all_title[ $this->index + 1 ];
			$next_url   = $this->get_page_link_url( $this->current_page + 1 );
			$next_index = $this->index + 1;
		}

		// hide previous element
		if ( $this->index === 0 ) {
			$previous_class = 'hide';
		}

		// hide next element
		if ( $this->current_page === $this->max_page ) {
			$next_class = 'hide';
		}

		$previous =
			"<div class=\"page_nav prev {$previous_class}\">
                <a href=\"{$previous_url}\" data-id=\"{$previous_index}\">
                    <span>" . jnews_return_translation( 'Previous', 'jnews-split', 'previous' ) . "</span>
                    <strong>{$previous_title}</strong>
                </a>
            </div>";

		$next =
			"<div class=\"page_nav next {$next_class}\">
                <a href=\"{$next_url}\" data-id=\"{$next_index}\">
                    <span>" . jnews_return_translation( 'Next', 'jnews-split', 'next' ) . "</span>
                    <strong>{$next_title}</strong>
                </a>
            </div>";

		$output =
			"<div class=\"jeg_bottomnav clearfix\">
                <div class=\"pagenav_wrap\">
                    {$previous}
                    {$next}
                </div>
            </div>";

		return $output;
	}

	public function get_split_type() {
		return '5';
	}
}

