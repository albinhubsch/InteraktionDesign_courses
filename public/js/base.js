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
	examForm_selected: new Array(),
	indexedCourses: [],

	// 
	init: function(){

		if(typeof examen_kurser !== 'undefined'){
			this.courses = examen_kurser
		}

		// Search through courses and index them on id
		$.each(Object.keys(this.courses), function(){
			var key = this;
			$.each(ExamenFormModule.courses[key], function(){
				if (ExamenFormModule.indexedCourses.indexOf(this.id) == -1 && this.id != 0){
					ExamenFormModule.indexedCourses[this.id] = this;
				}
			});
		});

		this.loadAvailableCourses();

		// Fill from cookie
		ExamenFormModule.examForm_selected = ExamenFormModule.readLongMem();
		this.fillFromMem();

		this.listenForSelectChanges();

	},

	// 
	loadAvailableCourses: function(){
		var emptyOption = '<option value="0">--</option>';
		var append_str = {'Y':emptyOption, 'F':emptyOption, 'B':emptyOption, 'Fri':emptyOption, 'A':emptyOption, 'Ma':emptyOption};

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
		$('.select-Ma-kurser').html(append_str['Ma']);
	},

	// 
	listenForSelectChanges: function(){
		$('select').change(function(){
			var id = $(this).find(":selected").attr('value');
			var pos = $(this).attr('name');
			ExamenFormModule.insertIntoSelected(id, pos);
			ExamenFormModule.redrawAvailableOptions();
			ExamenFormModule.updateAcademicUnits($(this), id);
			ExamenFormModule.writeLongMem();
		});
	},

	// 
	insertIntoSelected: function(id, pos){
		if (typeof id !== 'undefined' && this.examForm_selected.indexOf(id) == -1 && id != 0){
			this.examForm_selected[id] = ExamenFormModule.indexedCourses[id];
			this.examForm_selected[id].pos = pos;
		}
	},

	// 
	redrawAvailableOptions: function(){
		ExamenFormModule.examForm_selected = new Array();

		$.each($('select').find(':selected'), function(){
			var pos = $(this).closest('select').attr('name');
			ExamenFormModule.insertIntoSelected($(this).attr('value'), pos);
		});

		$('select option').removeAttr('disabled');
		$.each(ExamenFormModule.examForm_selected, function(key, value){
			if (typeof value !== 'undefined'){
				$('select option[value="'+key+'"]').attr('disabled', 'disabled');
			}
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

	// 
	writeLongMem: function(){
		temp = ExamenFormModule.examForm_selected.filter(function(n){ return n != undefined });
		CookieModule.setCookie('examenform', JSON.stringify(temp), 15778463);
	},

	// 
	readLongMem: function(){
		if (CookieModule.hasItem('examenform')){
			var temp = new Array();
			var fin = new Array();
			temp = JSON.parse(CookieModule.getCookie('examenform')).filter(function(n){ return n != undefined });
			$.each(temp, function(){
				fin[this.id] = this;
			});
			return fin;
		}
		return new Array();
	},

	// 
	fillFromMem: function(){
		$.each(ExamenFormModule.examForm_selected, function(){
			if (this.id) {
				$('select[name="'+this.pos+'"] option[value="'+this.id+'"]').attr('selected', 'selected');
				ExamenFormModule.updateAcademicUnits($('select[name="'+this.pos+'"]'), this.id);
			}
		});
		ExamenFormModule.redrawAvailableOptions();
	},

	// 
	emptyExamForm: function(){
		ExamenFormModule.examForm_selected = new Array();
		CookieModule.removeCookie('examenform');
		$('select option').removeAttr('selected').removeAttr('disabled');
		$('.academic_units').html('--');
		$('.academic_units_sum').html('--');
	},

	// 
	printPage: function(){
		ExamenFormModule.examForm_selected = ExamenFormModule.readLongMem();

		var strArr = new Array();
		$.each(ExamenFormModule.examForm_selected, function(){
			if (this.id) {
				var pos = (''+this.pos).split('-');
				var p_data = pos[0];
				var p_index = pos[2];
				if (strArr[p_data]) {
					strArr[p_data][p_index] = '<tr><td>'+this.name+'</td><td></td><td class="academic_units">'+this.academic_units+' hp</td><td></td></tr>';
				}else{
					strArr[p_data] = new Array();
					strArr[p_data][p_index] = '<tr><td>'+this.name+'</td><td></td><td class="academic_units">'+this.academic_units+' hp</td><td></td></tr>';
				}
			};
		});

		// Output to viewer
		for (var key in strArr) {
			$('#table-'+key+' tr:last').before(strArr[key]);
			ExamenFormModule.summarizeTableAU($('#table-'+key));
		}

		// Open print dialog
		window.print();


	},

}

/*
	Cookie module
 */
var CookieModule = {

	/*
		DESCRIPTION
		===========
		Create/overwrite a cookie.

		PARAMETERS
		==========
		cKey: The name of the cookie to create/overwrite (string).
		
		value: The value of the cookie (string).
		
		end Optional: The max-age in seconds (e.g. 31536e3 for a year, Infinity for a never-expires cookie), or the expires date in GMTString format or as Date object; if not specified the cookie will expire at the end of session (number – finite or Infinity – string, Date object or null).
		
		path Optional: The path from where the cookie will be readable. E.g., "/", "/mydir"; if not specified, defaults to the current path of the current document location (string or null). The path must be absolute (see RFC 2965). For more information on how to use relative paths in this argument, see this paragraph.
		
		domain Optional: The domain from where the cookie will be readable. E.g., "example.com", ".example.com" (includes all subdomains) or "subdomain.example.com"; if not specified, defaults to the host portion of the current document location (string or null).
		
		secure Optional: The cookie will be transmitted only over secure protocol as https (boolean or null).
	 */
	setCookie: function(cKey, sValue, vEnd, sPath, sDomain, bSecure){
		if (!cKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(cKey)) { return false; }
		var sExpires = "";
		if (vEnd) {
			switch (vEnd.constructor) {
				case Number:
				sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
				break;
				case String:
				sExpires = "; expires=" + vEnd;
				break;
				case Date:
				sExpires = "; expires=" + vEnd.toUTCString();
				break;
			}
		}
		document.cookie = encodeURIComponent(cKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
		return true;
	},

	/*
		Retrieve a cookie from key
	 */
	getCookie: function(cKey){
		if (!cKey) { return null; }
		return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(cKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
	},

	/*
		Remove a cookie
	 */
	removeCookie: function (cKey, sPath, sDomain) {
		if (!this.hasItem(cKey)) { return false; }
		document.cookie = encodeURIComponent(cKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
		return true;
	},

	/*
		Check if a specific cookie has an item
	 */
	hasItem: function (cKey) {
		if (!cKey) { return false; }
		return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(cKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
	},

	/*
		Return array with all active cookie keys
	 */
	keys: function () {
		var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
		for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
			return aKeys;
	}
}

// 
// INITIATE ALL MODULES
// 

// SearchModule.init();
// ExamenFormModule.init();