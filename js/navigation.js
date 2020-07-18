/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens
 */
( function() {
	var button, menu1, menu2, toggleableItems;

	button = document.getElementById( 'menu-toggle' );

	menu1 = document.getElementById( 'nav1' );
	menu2 = document.getElementById( 'secondbar' );

	menu1.setAttribute( 'aria-expanded', 'false' );
	menu2.setAttribute( 'aria-expanded', 'false' );

	button.onclick = function() {
		if ( -1 !== menu1.className.indexOf( 'opened' ) ) {
			menu1.className = menu1.className.replace( ' opened', '' );
			menu2.className = menu2.className.replace( ' opened', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu1.setAttribute( 'aria-expanded', 'false' );
			menu2.setAttribute( 'aria-expanded', 'false' );
		} else {
			menu1.className += ' opened';
			menu2.className += ' opened';
			button.setAttribute( 'aria-expanded', 'true' );
			menu1.setAttribute( 'aria-expanded', 'true' );
			menu2.setAttribute( 'aria-expanded', 'true' );
		}
	};

	toggleableItems = document.getElementsByClassName( 'menu-item-has-children' )
	for (var i = 0; i < toggleableItems.length; i++) {
		const element = toggleableItems[i];
		element.onclick = function() {
			if ( -1 !== element.className.indexOf( 'toggled' ) ) {
				element.className = element.className.replace( ' toggled', '' );
			} else {
				element.className += ' toggled';
			}
		}
	 }

} )();
