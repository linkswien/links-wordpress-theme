/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens
 */
( function() {
	const button = document.getElementById( 'menu-toggle' );

	const menu1 = document.getElementById( 'nav1' );
	const menu2 = document.getElementById( 'secondbar' );

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

	const toggleableItems = document.getElementsByClassName( 'submenu-toggle' )
	const topLevelToggleableItems = document.querySelectorAll( '.menu > li > .submenu-toggle' )
	for (var i = 0; i < toggleableItems.length; i++) {
		const element = toggleableItems[i];
		element.onclick = function() {
			if ( -1 !== element.className.indexOf( 'toggled' ) ) {
				element.className = element.className.replace( ' toggled', '' );
			} else {
				if (window.matchMedia("(min-width: 37.5em)").matches) {
					// in Desktop view, collapse all top level items if another one was toggled
					for (var j = 0; j < topLevelToggleableItems.length; j++) {
						const topLevelElement = topLevelToggleableItems[j];
						if (!topLevelElement.parentNode.contains(element)) {
							topLevelElement.className = topLevelElement.className.replace( ' toggled', '' );
						}
					}
				}
				element.className += ' toggled';
			}
		}
	 }

} )();
