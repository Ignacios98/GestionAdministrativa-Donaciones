<?php
$tdatacontractor_master = array();
$tdatacontractor_master[".searchableFields"] = array();
$tdatacontractor_master[".ShortName"] = "contractor_master";
$tdatacontractor_master[".OwnerID"] = "";
$tdatacontractor_master[".OriginalTable"] = "contractor_master";


$tdatacontractor_master[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontractor_master[".originalPagesByType"] = $tdatacontractor_master[".pagesByType"];
$tdatacontractor_master[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontractor_master[".originalPages"] = $tdatacontractor_master[".pages"];
$tdatacontractor_master[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontractor_master[".originalDefaultPages"] = $tdatacontractor_master[".defaultPages"];

//	field labels
$fieldLabelscontractor_master = array();
$fieldToolTipscontractor_master = array();
$pageTitlescontractor_master = array();
$placeHolderscontractor_master = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontractor_master["Spanish"] = array();
	$fieldToolTipscontractor_master["Spanish"] = array();
	$placeHolderscontractor_master["Spanish"] = array();
	$pageTitlescontractor_master["Spanish"] = array();
	$fieldLabelscontractor_master["Spanish"]["contractor_id"] = "Id";
	$fieldToolTipscontractor_master["Spanish"]["contractor_id"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_id"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_type"] = "Tipo documento";
	$fieldToolTipscontractor_master["Spanish"]["contractor_type"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_type"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_doc_id"] = "Número documento";
	$fieldToolTipscontractor_master["Spanish"]["contractor_doc_id"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_doc_id"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_doc_dv"] = "DV";
	$fieldToolTipscontractor_master["Spanish"]["contractor_doc_dv"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_doc_dv"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_nombresfull"] = "Nombre | Razón Social";
	$fieldToolTipscontractor_master["Spanish"]["contractor_nombresfull"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelscontractor_master["Spanish"]["contractor_email"] = "Email";
	$fieldToolTipscontractor_master["Spanish"]["contractor_email"] = "";
	$placeHolderscontractor_master["Spanish"]["contractor_email"] = "";
	if (count($fieldToolTipscontractor_master["Spanish"]))
		$tdatacontractor_master[".isUseToolTips"] = true;
}


	$tdatacontractor_master[".NCSearch"] = true;



$tdatacontractor_master[".shortTableName"] = "contractor_master";
$tdatacontractor_master[".nSecOptions"] = 0;

$tdatacontractor_master[".mainTableOwnerID"] = "";
$tdatacontractor_master[".entityType"] = 0;
$tdatacontractor_master[".connId"] = "dbct_at_127_0_0_1";


$tdatacontractor_master[".strOriginalTableName"] = "contractor_master";

	



$tdatacontractor_master[".showAddInPopup"] = false;

$tdatacontractor_master[".showEditInPopup"] = false;

$tdatacontractor_master[".showViewInPopup"] = false;

$tdatacontractor_master[".listAjax"] = false;
//	temporary
//$tdatacontractor_master[".listAjax"] = false;

	$tdatacontractor_master[".audit"] = false;

	$tdatacontractor_master[".locking"] = false;


$pages = $tdatacontractor_master[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontractor_master[".edit"] = true;
	$tdatacontractor_master[".afterEditAction"] = 1;
	$tdatacontractor_master[".closePopupAfterEdit"] = 1;
	$tdatacontractor_master[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontractor_master[".add"] = true;
$tdatacontractor_master[".afterAddAction"] = 1;
$tdatacontractor_master[".closePopupAfterAdd"] = 1;
$tdatacontractor_master[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontractor_master[".list"] = true;
}



$tdatacontractor_master[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontractor_master[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontractor_master[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontractor_master[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontractor_master[".printFriendly"] = true;
}



$tdatacontractor_master[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontractor_master[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontractor_master[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontractor_master[".isUseAjaxSuggest"] = true;



															

$tdatacontractor_master[".ajaxCodeSnippetAdded"] = false;

$tdatacontractor_master[".buttonsAdded"] = false;

$tdatacontractor_master[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontractor_master[".isUseTimeForSearch"] = false;


$tdatacontractor_master[".badgeColor"] = "00C2C5";


$tdatacontractor_master[".allSearchFields"] = array();
$tdatacontractor_master[".filterFields"] = array();
$tdatacontractor_master[".requiredSearchFields"] = array();

$tdatacontractor_master[".googleLikeFields"] = array();
$tdatacontractor_master[".googleLikeFields"][] = "contractor_id";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_type";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_doc_id";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_doc_dv";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_nombresfull";
$tdatacontractor_master[".googleLikeFields"][] = "contractor_email";



$tdatacontractor_master[".tableType"] = "list";

$tdatacontractor_master[".printerPageOrientation"] = 0;
$tdatacontractor_master[".nPrinterPageScale"] = 100;

$tdatacontractor_master[".nPrinterSplitRecords"] = 40;

$tdatacontractor_master[".geocodingEnabled"] = false;










$tdatacontractor_master[".pageSize"] = 20;

$tdatacontractor_master[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontractor_master[".strOrderBy"] = $tstrOrderBy;

$tdatacontractor_master[".orderindexes"] = array();


$tdatacontractor_master[".sqlHead"] = "SELECT contractor_id,  contractor_type,  contractor_doc_id,  contractor_doc_dv,  contractor_nombresfull,  contractor_email";
$tdatacontractor_master[".sqlFrom"] = "FROM contractor_master";
$tdatacontractor_master[".sqlWhereExpr"] = "";
$tdatacontractor_master[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontractor_master[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontractor_master[".arrGroupsPerPage"] = $arrGPP;

$tdatacontractor_master[".highlightSearchResults"] = true;

$tableKeyscontractor_master = array();
$tableKeyscontractor_master[] = "contractor_id";
$tableKeyscontractor_master[] = "contractor_doc_id";
$tdatacontractor_master[".Keys"] = $tableKeyscontractor_master;


$tdatacontractor_master[".hideMobileList"] = array();




//	contractor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_id";
	$fdata["GoodName"] = "contractor_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "contractor_id";

		$fdata["sourceSingle"] = "contractor_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_id";

	
	
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


	$tdatacontractor_master["contractor_id"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_id";
//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_type";

		$fdata["sourceSingle"] = "contractor_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contractor_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "contractor_type";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "contractor_type";

	

	
	$edata["LookupOrderBy"] = "contractor_type";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacontractor_master["contractor_type"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_type";
//	contractor_doc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contractor_doc_id";
	$fdata["GoodName"] = "contractor_doc_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_doc_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_doc_id";

		$fdata["sourceSingle"] = "contractor_doc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_id";

	
	
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
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatacontractor_master["contractor_doc_id"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_doc_id";
//	contractor_doc_dv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contractor_doc_dv";
	$fdata["GoodName"] = "contractor_doc_dv";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_doc_dv");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_doc_dv";

		$fdata["sourceSingle"] = "contractor_doc_dv";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_dv";

	
	
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


	$tdatacontractor_master["contractor_doc_dv"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_doc_dv";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_nombresfull";

		$fdata["sourceSingle"] = "contractor_nombresfull";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_nombresfull";

	
	
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
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatacontractor_master["contractor_nombresfull"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master","contractor_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email";

		$fdata["sourceSingle"] = "contractor_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontractor_master["contractor_email"] = $fdata;
		$tdatacontractor_master[".searchableFields"][] = "contractor_email";


$tables_data["contractor_master"]=&$tdatacontractor_master;
$field_labels["contractor_master"] = &$fieldLabelscontractor_master;
$fieldToolTips["contractor_master"] = &$fieldToolTipscontractor_master;
$placeHolders["contractor_master"] = &$placeHolderscontractor_master;
$page_titles["contractor_master"] = &$pageTitlescontractor_master;


changeTextControlsToDate( "contractor_master" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contractor_master"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contractor_master"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contractor_master()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_id,  contractor_type,  contractor_doc_id,  contractor_doc_dv,  contractor_nombresfull,  contractor_email";
$proto0["m_strFrom"] = "FROM contractor_master";
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
	"m_strName" => "contractor_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto6["m_sql"] = "contractor_id";
$proto6["m_srcTableName"] = "contractor_master";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto8["m_sql"] = "contractor_type";
$proto8["m_srcTableName"] = "contractor_master";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto10["m_sql"] = "contractor_doc_id";
$proto10["m_srcTableName"] = "contractor_master";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_dv",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto12["m_sql"] = "contractor_doc_dv";
$proto12["m_srcTableName"] = "contractor_master";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto14["m_sql"] = "contractor_nombresfull";
$proto14["m_srcTableName"] = "contractor_master";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master"
));

$proto16["m_sql"] = "contractor_email";
$proto16["m_srcTableName"] = "contractor_master";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "contractor_master";
$proto19["m_srcTableName"] = "contractor_master";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "active";
$proto19["m_columns"][] = "actividad_economica";
$proto19["m_columns"][] = "bank_cta_number";
$proto19["m_columns"][] = "bank_cta_type";
$proto19["m_columns"][] = "bank_name";
$proto19["m_columns"][] = "contractor_address";
$proto19["m_columns"][] = "contractor_arl";
$proto19["m_columns"][] = "contractor_cajacompensacion";
$proto19["m_columns"][] = "contractor_city";
$proto19["m_columns"][] = "contractor_decljur";
$proto19["m_columns"][] = "contractor_dependencia";
$proto19["m_columns"][] = "contractor_dependientes";
$proto19["m_columns"][] = "contractor_doc_dv";
$proto19["m_columns"][] = "contractor_doc_id";
$proto19["m_columns"][] = "contractor_email";
$proto19["m_columns"][] = "contractor_email_mincit";
$proto19["m_columns"][] = "contractor_eps";
$proto19["m_columns"][] = "contractor_fondopensiones";
$proto19["m_columns"][] = "contractor_id";
$proto19["m_columns"][] = "contractor_image";
$proto19["m_columns"][] = "contractor_lname";
$proto19["m_columns"][] = "contractor_medicinapre_file";
$proto19["m_columns"][] = "contractor_mobile";
$proto19["m_columns"][] = "contractor_name";
$proto19["m_columns"][] = "contractor_naturaleza";
$proto19["m_columns"][] = "contractor_nombresfull";
$proto19["m_columns"][] = "contractor_phone";
$proto19["m_columns"][] = "contractor_picmonetaria_file";
$proto19["m_columns"][] = "contractor_pwd";
$proto19["m_columns"][] = "contractor_sup_jerarquico";
$proto19["m_columns"][] = "contractor_tiposangre";
$proto19["m_columns"][] = "contractor_type";
$proto19["m_columns"][] = "ct_fecha_nacimiento";
$proto19["m_columns"][] = "ct_fecha_nacimiento_mun";
$proto19["m_columns"][] = "ct_nacionalidad";
$proto19["m_columns"][] = "dem_discapacidad";
$proto19["m_columns"][] = "dem_edad";
$proto19["m_columns"][] = "dem_educacion";
$proto19["m_columns"][] = "dem_genero";
$proto19["m_columns"][] = "dem_ocupacion";
$proto19["m_columns"][] = "dem_profesion";
$proto19["m_columns"][] = "emergencia";
$proto19["m_columns"][] = "enlace_sigep";
$proto19["m_columns"][] = "factura";
$proto19["m_columns"][] = "fp_code";
$proto19["m_columns"][] = "fp_fecha";
$proto19["m_columns"][] = "fp_file";
$proto19["m_columns"][] = "groupid";
$proto19["m_columns"][] = "iva_regimen";
$proto19["m_columns"][] = "pin";
$proto19["m_columns"][] = "reset_date";
$proto19["m_columns"][] = "reset_date1";
$proto19["m_columns"][] = "reset_token";
$proto19["m_columns"][] = "reset_token1";
$proto19["m_columns"][] = "responsabilidades";
$proto19["m_columns"][] = "signature";
$proto19["m_columns"][] = "sys_date";
$proto19["m_columns"][] = "sys_last_upd";
$proto19["m_columns"][] = "sys_level";
$proto19["m_columns"][] = "sys_status";
$proto19["m_columns"][] = "sys_update";
$proto19["m_columns"][] = "sys_user";
$proto19["m_columns"][] = "terms_acepta";
$proto19["m_columns"][] = "terms_msj";
$proto19["m_columns"][] = "ubica_dep";
$proto19["m_columns"][] = "ubica_extension";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "contractor_master";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "contractor_master";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contractor_master";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contractor_master = createSqlQuery_contractor_master();


	
								;

						

$tdatacontractor_master[".sqlquery"] = $queryData_contractor_master;



$tdatacontractor_master[".hasEvents"] = false;

?>