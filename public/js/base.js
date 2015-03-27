/*

	Project: InteraktionDesign_courses
	Authors: Victor Winnhed - victor.winnhed@gmail.com, Albin Hübsch - albin.hubsch@gmail.com

*/

// SEARCH MODULE

var SearchModule = {


	init: function(){
		this.clearEventListener();
		this.autoFocusOnField();
		this.bindUIActions();
	},

	// Auto put cursor focus on input field on page load
	autoFocusOnField: function(){
		$('#jumbotron_search_field').focus();
	},

	bindUIActions: function(){
		$('#jumbotron_search_field').on('keyup', function(){
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

// 
// Modules related to examen form page
// 

var ExamenFormModule = {

	courses: null,
	indexedCourses: [],
	selected_courses: [],

	// 
	init: function(){

		if(typeof examen_kurser !== 'undefined'){
			this.courses = examen_kurser
		}

		// Search through courses and index them on id
		$.each(Object.keys(this.courses), function(){
			var key = this;
			$.each(ExamenFormModule.courses[this], function(){
				if (ExamenFormModule.indexedCourses.indexOf(this.id) == -1 && this.id != 0){
					ExamenFormModule.indexedCourses.push(this);
				}
			});
		});

		this.loadAvailableCourses();
		this.listenForSelectChanges();
	},

	// 
	loadAvailableCourses: function(){
		var emptyOption = '<option value="0">--</option>';
		var append_str = {'Y':emptyOption, 'F':emptyOption, 'B':emptyOption, 'Fri':emptyOption, 'A':emptyOption};

		$.each(Object.keys(this.courses), function(){
			var key = this;
			$.each(ExamenFormModule.courses[this], function(){
				append_str[key] = append_str[key]+'<option value="'+this.id+'">'+this.name+'</option>';
			});
		});

		$('.select-Fri-kurser').html(append_str['Fri']);
		$('.select-B-kurser').html(append_str['B']);
		$('.select-F-kurser').html(append_str['F']);
		$('.select-A-kurser').html(append_str['A']);
		$('.select-Y-kurser').html(append_str['Y']);
	},

	// 
	listenForSelectChanges: function(){
		$('select').change(function(){
			var id = $(this).find(":selected").attr('value');
			ExamenFormModule.insertIntoSelected(id);
			ExamenFormModule.redrawAvailableOptions();
			ExamenFormModule.updateAcademicUnits($(this), id);
		});
	},

	// 
	insertIntoSelected: function(id){
		if (this.selected_courses.indexOf(id) == -1 && id != 0){
			this.selected_courses.push(id);
		}
	},

	// 
	redrawAvailableOptions: function(){
		ExamenFormModule.selected_courses = [];
		$.each($('select').find(':selected'), function(){
			ExamenFormModule.insertIntoSelected($(this).attr('value'));
		});
		$('select option').removeAttr('disabled');
		$.each(ExamenFormModule.selected_courses, function(){
			$('select option[value="'+this+'"]').attr('disabled', 'disabled');
		});
	},

	// 
	updateAcademicUnits: function(obj, id){
		// 
		obj.closest('tr').children('.academic_units').html(ExamenFormModule.indexedCourses[id].academic_units + ' hp');
		this.summarizeTableAU(obj.closest('table'));
	},

	summarizeTableAU: function(table){
		var sum = 0;
		$.each(table.find('.academic_units'), function(){
			if ($(this).html() != '--'){
				var val = parseFloat($(this).html().split(' ')[0]);
				sum = sum + val;
			}
		});
		table.find('.academic_units_sum').html(sum + ' hp');
	},

}

// 
// INITIATE ALL MODULES
// 
SearchModule.init();
ExamenFormModule.init();