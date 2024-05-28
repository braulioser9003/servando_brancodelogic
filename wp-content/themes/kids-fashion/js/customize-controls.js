( function( api ) {

	// Extends our custom "kids-fashion" section.
	api.sectionConstructor['kids-fashion'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );