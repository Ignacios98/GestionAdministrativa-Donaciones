<?php
$tdatacbs = array();
$tdatacbs[".searchableFields"] = array();
$tdatacbs[".ShortName"] = "cbs";
$tdatacbs[".OwnerID"] = "";
$tdatacbs[".OriginalTable"] = "cbs";


$tdatacbs[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacbs[".originalPagesByType"] = $tdatacbs[".pagesByType"];
$tdatacbs[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacbs[".originalPages"] = $tdatacbs[".pages"];
$tdatacbs[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacbs[".originalDefaultPages"] = $tdatacbs[".defaultPages"];

//	field labels
$fieldLabelscbs = array();
$fieldToolTipscbs = array();
$pageTitlescbs = array();
$placeHolderscbs = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscbs["Spanish"] = array();
	$fieldToolTipscbs["Spanish"] = array();
	$placeHolderscbs["Spanish"] = array();
	$pageTitlescbs["Spanish"] = array();
	$fieldLabelscbs["Spanish"]["unspsc_id"] = "Unspsc Id";
	$fieldToolTipscbs["Spanish"]["unspsc_id"] = "";
	$placeHolderscbs["Spanish"]["unspsc_id"] = "";
	$fieldLabelscbs["Spanish"]["Segmento"] = "Segmento";
	$fieldToolTipscbs["Spanish"]["Segmento"] = "";
	$placeHolderscbs["Spanish"]["Segmento"] = "";
	$fieldLabelscbs["Spanish"]["Nombre__Segmento"] = "Nombre  Segmento";
	$fieldToolTipscbs["Spanish"]["Nombre__Segmento"] = "";
	$placeHolderscbs["Spanish"]["Nombre__Segmento"] = "";
	$fieldLabelscbs["Spanish"]["Familia"] = "Familia";
	$fieldToolTipscbs["Spanish"]["Familia"] = "";
	$placeHolderscbs["Spanish"]["Familia"] = "";
	$fieldLabelscbs["Spanish"]["Nombre_Familia"] = "Nombre Familia";
	$fieldToolTipscbs["Spanish"]["Nombre_Familia"] = "";
	$placeHolderscbs["Spanish"]["Nombre_Familia"] = "";
	$fieldLabelscbs["Spanish"]["Clase"] = "Clase";
	$fieldToolTipscbs["Spanish"]["Clase"] = "";
	$placeHolderscbs["Spanish"]["Clase"] = "";
	$fieldLabelscbs["Spanish"]["Nombre_Clase"] = "Nombre Clase";
	$fieldToolTipscbs["Spanish"]["Nombre_Clase"] = "";
	$placeHolderscbs["Spanish"]["Nombre_Clase"] = "";
	$fieldLabelscbs["Spanish"]["Producto"] = "Producto";
	$fieldToolTipscbs["Spanish"]["Producto"] = "";
	$placeHolderscbs["Spanish"]["Producto"] = "";
	$fieldLabelscbs["Spanish"]["Nombre_Producto"] = "Nombre Producto";
	$fieldToolTipscbs["Spanish"]["Nombre_Producto"] = "";
	$placeHolderscbs["Spanish"]["Nombre_Producto"] = "";
	if (count($fieldToolTipscbs["Spanish"]))
		$tdatacbs[".isUseToolTips"] = true;
}


	$tdatacbs[".NCSearch"] = true;



$tdatacbs[".shortTableName"] = "cbs";
$tdatacbs[".nSecOptions"] = 0;

$tdatacbs[".mainTableOwnerID"] = "";
$tdatacbs[".entityType"] = 0;
$tdatacbs[".connId"] = "dbrf_at_127_0_0_1";


$tdatacbs[".strOriginalTableName"] = "cbs";

	



$tdatacbs[".showAddInPopup"] = false;

$tdatacbs[".showEditInPopup"] = false;

$tdatacbs[".showViewInPopup"] = false;

$tdatacbs[".listAjax"] = false;
//	temporary
//$tdatacbs[".listAjax"] = false;

	$tdatacbs[".audit"] = false;

	$tdatacbs[".locking"] = false;


$pages = $tdatacbs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacbs[".edit"] = true;
	$tdatacbs[".afterEditAction"] = 1;
	$tdatacbs[".closePopupAfterEdit"] = 1;
	$tdatacbs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacbs[".add"] = true;
$tdatacbs[".afterAddAction"] = 1;
$tdatacbs[".closePopupAfterAdd"] = 1;
$tdatacbs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacbs[".list"] = true;
}



$tdatacbs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacbs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacbs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacbs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacbs[".printFriendly"] = true;
}



$tdatacbs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacbs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacbs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacbs[".isUseAjaxSuggest"] = true;



												

$tdatacbs[".ajaxCodeSnippetAdded"] = false;

$tdatacbs[".buttonsAdded"] = false;

$tdatacbs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacbs[".isUseTimeForSearch"] = false;


$tdatacbs[".badgeColor"] = "8FBC8B";


$tdatacbs[".allSearchFields"] = array();
$tdatacbs[".filterFields"] = array();
$tdatacbs[".requiredSearchFields"] = array();

$tdatacbs[".googleLikeFields"] = array();
$tdatacbs[".googleLikeFields"][] = "Clase";
$tdatacbs[".googleLikeFields"][] = "Familia";
$tdatacbs[".googleLikeFields"][] = "Nombre _Segmento";
$tdatacbs[".googleLikeFields"][] = "Nombre_Clase";
$tdatacbs[".googleLikeFields"][] = "Nombre_Familia";
$tdatacbs[".googleLikeFields"][] = "Nombre_Producto";
$tdatacbs[".googleLikeFields"][] = "Producto";
$tdatacbs[".googleLikeFields"][] = "Segmento";
$tdatacbs[".googleLikeFields"][] = "unspsc_id";



$tdatacbs[".tableType"] = "list";

$tdatacbs[".printerPageOrientation"] = 0;
$tdatacbs[".nPrinterPageScale"] = 100;

$tdatacbs[".nPrinterSplitRecords"] = 40;

$tdatacbs[".geocodingEnabled"] = false;










$tdatacbs[".pageSize"] = 20;

$tdatacbs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacbs[".strOrderBy"] = $tstrOrderBy;

$tdatacbs[".orderindexes"] = array();


$tdatacbs[".sqlHead"] = "SELECT Clase,  	Familia,  	`Nombre _Segmento`,  	Nombre_Clase,  	Nombre_Familia,  	Nombre_Producto,  	Producto,  	Segmento,  	unspsc_id";
$tdatacbs[".sqlFrom"] = "FROM cbs";
$tdatacbs[".sqlWhereExpr"] = "";
$tdatacbs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacbs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacbs[".arrGroupsPerPage"] = $arrGPP;

$tdatacbs[".highlightSearchResults"] = true;

$tableKeyscbs = array();
$tableKeyscbs[] = "unspsc_id";
$tdatacbs[".Keys"] = $tableKeyscbs;


$tdatacbs[".hideMobileList"] = array();




//	Clase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Clase";
	$fdata["GoodName"] = "Clase";
	$fdata["ownerTable"] = "cbs";
	$fdata["Label"] = GetFieldLabel("cbs","Clase");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Clase";

		$fdata["sourceSingle"] = "Clase";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clase";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacbs["Clase"] = $fdata;
		$tdatacbs[".searchableFields"][] = "Clase";
//	Familia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Familia";
	$fdata["GoodName"] = "Familia";
	$fdata["ownerTable"] = "cbs";
	$fdata["Label"] = GetFieldLabel("cbs","Familia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Familia";

		$fdata["sourceSingle"] = "Familia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Familia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacbs["Familia"] = $fdata;
		$tdatacbs[".searchableFields"][] = "Familia";
//	Nombre _Segmento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nombre _Segmento";
	$fdata["GoodName"] = "Nombre__Segmento";
	$fdata["ownerTable"] = "cbs";
	$fdata["Label"] = GetFieldLabel("cbs","Nombre__Segmento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre _Segmento";

		$fdata["sourceSingle"] = "Nombre _Segmento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nombre _Segmento`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacbs["Nombre _Segmento"] = $fdata;
		$tdatacbs[".searchableFields"][] = "Nombre _Segmento";
//	Nombre_Clase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Nombre_Clase";
	$fdata["GoodName"] = "Nombre_Clase";
	$fdata["ownerTable"] = "cbs";
	$fdata["Label"] = GetFieldLabel("cbs","Nombre_Clase");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Clase";

		$fdata["sourceSingle"] = "Nombre_Clase";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Clase";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacbs["Nombre_Clase"] = $fdata;
		$tdatacbs[".searchableFields"][] = "Nombre_Clase";
//	Nombre_Familia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Nombre_Familia";
	$fdata["GoodName"] = "Nombre_Familia";
	$fdata["ownerTable"] = "cbs";
	$fdata["Label"] = GetFieldLabel("cbs","Nombre_Familia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Familia";

		$fdata["sourceSingle"] = "Nombre_Familia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Familia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacbs["Nombre_Familia"] = $fdata;
		$tdatacbs[".searchableFields"][] = "Nombre_Familia";
//	Nombre_Producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Nombre_Producto";
	$fdata["GoodName"] = "Nombre_Producto";
	$fdata["ownerTable"] = "cbs";
	$fdata["Label"] = GetFieldLabel("cbs","Nombre_Producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Producto";

		$fdata["sourceSingle"] = "Nombre_Producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Producto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacbs["Nombre_Producto"] = $fdata;
		$tdatacbs[".searchableFields"][] = "Nombre_Producto";
//	Producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Producto";
	$fdata["GoodName"] = "Producto";
	$fdata["ownerTable"] = "cbs";
	$fdata["Label"] = GetFieldLabel("cbs","Producto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Producto";

		$fdata["sourceSingle"] = "Producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Producto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacbs["Producto"] = $fdata;
		$tdatacbs[".searchableFields"][] = "Producto";
//	Segmento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Segmento";
	$fdata["GoodName"] = "Segmento";
	$fdata["ownerTable"] = "cbs";
	$fdata["Label"] = GetFieldLabel("cbs","Segmento");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Segmento";

		$fdata["sourceSingle"] = "Segmento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Segmento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacbs["Segmento"] = $fdata;
		$tdatacbs[".searchableFields"][] = "Segmento";
//	unspsc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "unspsc_id";
	$fdata["GoodName"] = "unspsc_id";
	$fdata["ownerTable"] = "cbs";
	$fdata["Label"] = GetFieldLabel("cbs","unspsc_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "unspsc_id";

		$fdata["sourceSingle"] = "unspsc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unspsc_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacbs["unspsc_id"] = $fdata;
		$tdatacbs[".searchableFields"][] = "unspsc_id";


$tables_data["cbs"]=&$tdatacbs;
$field_labels["cbs"] = &$fieldLabelscbs;
$fieldToolTips["cbs"] = &$fieldToolTipscbs;
$placeHolders["cbs"] = &$placeHolderscbs;
$page_titles["cbs"] = &$pageTitlescbs;


changeTextControlsToDate( "cbs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cbs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cbs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cbs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Clase,  	Familia,  	`Nombre _Segmento`,  	Nombre_Clase,  	Nombre_Familia,  	Nombre_Producto,  	Producto,  	Segmento,  	unspsc_id";
$proto0["m_strFrom"] = "FROM cbs";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Clase",
	"m_strTable" => "cbs",
	"m_srcTableName" => "cbs"
));

$proto6["m_sql"] = "Clase";
$proto6["m_srcTableName"] = "cbs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Familia",
	"m_strTable" => "cbs",
	"m_srcTableName" => "cbs"
));

$proto8["m_sql"] = "Familia";
$proto8["m_srcTableName"] = "cbs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre _Segmento",
	"m_strTable" => "cbs",
	"m_srcTableName" => "cbs"
));

$proto10["m_sql"] = "`Nombre _Segmento`";
$proto10["m_srcTableName"] = "cbs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Clase",
	"m_strTable" => "cbs",
	"m_srcTableName" => "cbs"
));

$proto12["m_sql"] = "Nombre_Clase";
$proto12["m_srcTableName"] = "cbs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Familia",
	"m_strTable" => "cbs",
	"m_srcTableName" => "cbs"
));

$proto14["m_sql"] = "Nombre_Familia";
$proto14["m_srcTableName"] = "cbs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Producto",
	"m_strTable" => "cbs",
	"m_srcTableName" => "cbs"
));

$proto16["m_sql"] = "Nombre_Producto";
$proto16["m_srcTableName"] = "cbs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Producto",
	"m_strTable" => "cbs",
	"m_srcTableName" => "cbs"
));

$proto18["m_sql"] = "Producto";
$proto18["m_srcTableName"] = "cbs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Segmento",
	"m_strTable" => "cbs",
	"m_srcTableName" => "cbs"
));

$proto20["m_sql"] = "Segmento";
$proto20["m_srcTableName"] = "cbs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "unspsc_id",
	"m_strTable" => "cbs",
	"m_srcTableName" => "cbs"
));

$proto22["m_sql"] = "unspsc_id";
$proto22["m_srcTableName"] = "cbs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cbs";
$proto25["m_srcTableName"] = "cbs";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "Clase";
$proto25["m_columns"][] = "Familia";
$proto25["m_columns"][] = "Nombre _Segmento";
$proto25["m_columns"][] = "Nombre_Clase";
$proto25["m_columns"][] = "Nombre_Familia";
$proto25["m_columns"][] = "Nombre_Producto";
$proto25["m_columns"][] = "Producto";
$proto25["m_columns"][] = "Segmento";
$proto25["m_columns"][] = "unspsc_id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cbs";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cbs";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cbs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cbs = createSqlQuery_cbs();


	
								;

									

$tdatacbs[".sqlquery"] = $queryData_cbs;



$tdatacbs[".hasEvents"] = false;

?>