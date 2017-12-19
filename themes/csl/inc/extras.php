<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
 * Date function
 */
function short_days( $days ){
	

	$m = 'monday';
	$t = 'tuesday';
	$w = 'wednesday';
	$r = 'thursday';
	$f = 'friday';
	$u = 'saturday';
	$s = 'sunday';
	$days_str = '';
	if ( count( $days ) === 1 ) {
		$days_str = ucfirst( $days[0] );
	} elseif ( count( $days ) === 7 ) {
		$days_str = 'Daily';
	} else {
		foreach( $days as $i => $day ) {
			switch ($day) {
				case $m:
					$days_str .= 'Mon';
					if ( $days[$i + 1] === $t) {
						$days_str .= ' - ';
					} else {
						$days_str .= ',';
					}
					break;
				case $t:
					$days_str .= 'Tues';
					if (count( $days ) === $i + 1 ) {
						break;
					} 
					if ( $days[$i + 1] === $w) {
						$days_str .= ' - ';
					} else {
						$days_str .= ',';
					}
					break;
				case $w:
					$days_str .= 'Wed';
					if (count( $days ) === $i + 1 ) {
						break;
					} 
					if ( $days[$i + 1] === $r) {
						$days_str .= ' - ';
					} else {
						$days_str .= ',';
					}
					break;
				case $r:
					$days_str .= 'Thurs';
					if (count( $days ) === $i + 1 ) {
						break;
					} 
					if ( $days[$i + 1] === $f) {
						$days_str .= ' - ';
					} else {
						$days_str .= ',';
					}
					break;
				case $f:
					$days_str .= 'Fri';
					if (count( $days ) === $i + 1 ) {
						break;
					} 
					if ( $days[$i + 1] === $u) {
						$days_str .= ' - ';
					} else {
						$days_str .= ',';
					}
					break;
				case $u:
					$days_str .= 'Sat';
					if (count( $days ) === $i + 1 ) {
						break;
					} 
					if ( $days[$i + 1] === $s) {
						$days_str .= ' - ';
					} else {
						$days_str .= ',';
					}
					break;
				case $s:
					$days_str .= 'Sun';
					if ( $days[0] === $m) {
						$days_str .= ' - ';
						$j = strrpos( $days_str, ',');
						$substr = substr($days_str, $j+1 );
						$days_str = str_replace( $substr, '', $days_str );
						$days_str = $substr . $days_str;
						$days_str = rtrim( $days_str, ',' );
					} 
					break;
			}
		}
		if ( ! empty( $days_str ) ) {
			$mid_days = array('- Mon ', '- Tues ', '- Wed ', '- Thurs ', '- Fri ', '- Sat ', '- Sun ');
			$days_str = str_replace( $mid_days, '', $days_str );
			$days_str = str_replace( ',', ', ', $days_str );
		}
		return $days_str;
	}
}// short days



	
