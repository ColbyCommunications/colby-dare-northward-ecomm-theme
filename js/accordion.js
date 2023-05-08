/**
 * File accordion.js.
 *
 * Handles toggling the accordion container by adding an .active class.
 *
 */

 ( function() {
	const accordion = document.getElementsByClassName('accordion-container');
	
	/**
	 * Sets or removes .active class on an element.
	 */
	for (i=0; i<accordion.length; i++) {
	  accordion[i].addEventListener('click', function () {
		this.classList.toggle('active')
	  })
	}
}() );