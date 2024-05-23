Runner.buttonEvents["BtnRefresh"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnRefresh';
	
	if ( !pageObj.buttonEventBefore['BtnRefresh'] ) {
		pageObj.buttonEventBefore['BtnRefresh'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;


		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnRefresh'] ) {
		pageObj.buttonEventAfter['BtnRefresh'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.reload(true);
		}
	}
	
	$('a[id="BtnRefresh"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnRefresh" + "_" + Runner.genId();
		
		// create object
		var button_BtnRefresh = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnRefresh"
		});
		
		// init
		button_BtnRefresh.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

