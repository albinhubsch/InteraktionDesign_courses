/*

	Project: InteraktionDesign_courses
	Authors: 

*/

// SEARCH MODULE

var SearchModule = {


	init: function(){
		this.clearEventListener();
		this.bindUIActions();
	},

	bindUIActions: function(){
		$('#jumbotron_search_field input').on('keyup', function(){
			// Get string from input field
			SearchModule.search( $(this).val() );
		});
	},

	clearEventListener: function(){
		$('#jumbotron_search_field input').off();
	},

	search: function(search_str){

		search_str = search_str.toLowerCase();

		// Sanitize search string

		// If search string to short, abort. This to keep performance up.
		if(search_str.length < 2){
			return 0;
		}


	},

};