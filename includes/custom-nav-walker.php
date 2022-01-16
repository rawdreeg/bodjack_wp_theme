<?php
/**
 * Custom walker for the primary menu.
 */
class RB_Custom_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * @see Walker_Nav_Menu::start_lvl()
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"dropdown-menu submenu\">\n";
	}

	/**
	 * @see Walker_Nav_Menu::start_el()
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$output .= '<li class="submenu-item">';
		$output .= $args->before;
		$output .= '<a href="' . $item->url . '" class="submenu-link">';
		$output .= $args->link_before . $item->title . $args->link_after;
		$output .= '</a>';
		$output .= $args->after;
	}

	/**
	 * @see Walker_Nav_Menu::end_el()
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>\n";
	}

	/**
	 * @see Walker_Nav_Menu::end_el()
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "$indent</ul>\n";
	}

}
