<?php
$tdataalelemconsumo_consulta = array();
$tdataalelemconsumo_consulta[".searchableFields"] = array();
$tdataalelemconsumo_consulta[".ShortName"] = "alelemconsumo_consulta";
$tdataalelemconsumo_consulta[".OwnerID"] = "";
$tdataalelemconsumo_consulta[".OriginalTable"] = "alelemconsumo";


$tdataalelemconsumo_consulta[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalelemconsumo_consulta[".originalPagesByType"] = $tdataalelemconsumo_consulta[".pagesByType"];
$tdataalelemconsumo_consulta[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalelemconsumo_consulta[".originalPages"] = $tdataalelemconsumo_consulta[".pages"];
$tdataalelemconsumo_consulta[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalelemconsumo_consulta[".originalDefaultPages"] = $tdataalelemconsumo_consulta[".defaultPages"];

//	field labels
$fieldLabelsalelemconsumo_consulta = array();
$fieldToolTipsalelemconsumo_consulta = array();
$pageTitlesalelemconsumo_consulta = array();
$placeHoldersalelemconsumo_consulta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalelemconsumo_consulta["Spanish"] = array();
	$fieldToolTipsalelemconsumo_consulta["Spanish"] = array();
	$placeHoldersalelemconsumo_consulta["Spanish"] = array();
	$pageTitlesalelemconsumo_consulta["Spanish"] = array();
	$fieldLabelsalelemconsumo_consulta["Spanish"]["alelemenconsumo_id"] = "Alelemenconsumo Id";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["alelemenconsumo_id"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["alelemenconsumo_id"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["ec_codelem"] = "Código elemento";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["ec_codelem"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["ec_codelem"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["ec_nomelemento"] = "Nombre elemento";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["ec_nomelemento"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["ec_nomelemento"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["eccuenta"] = "Cuenta";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["eccuenta"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["eccuenta"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["ecunidad"] = "Unidad medida";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["ecunidad"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["ecunidad"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostonew"] = "Buscar";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostonew"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["nicsp_cuentacostonew"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostonewc"] = "Código";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostonewc"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["nicsp_cuentacostonewc"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostonewn"] = "Cuenta ingreso";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostonewn"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["nicsp_cuentacostonewn"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostoservicio"] = "Buscar";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostoservicio"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["nicsp_cuentacostoservicio"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostoservicioc"] = "Código";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostoservicioc"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["nicsp_cuentacostoservicioc"] = "";
	$fieldLabelsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostoservicion"] = "Cuenta egreso";
	$fieldToolTipsalelemconsumo_consulta["Spanish"]["nicsp_cuentacostoservicion"] = "";
	$placeHoldersalelemconsumo_consulta["Spanish"]["nicsp_cuentacostoservicion"] = "";
	if (count($fieldToolTipsalelemconsumo_consulta["Spanish"]))
		$tdataalelemconsumo_consulta[".isUseToolTips"] = true;
}


	$tdataalelemconsumo_consulta[".NCSearch"] = true;



$tdataalelemconsumo_consulta[".shortTableName"] = "alelemconsumo_consulta";
$tdataalelemconsumo_consulta[".nSecOptions"] = 0;

$tdataalelemconsumo_consulta[".mainTableOwnerID"] = "";
$tdataalelemconsumo_consulta[".entityType"] = 1;
$tdataalelemconsumo_consulta[".connId"] = "dbrf_at_127_0_0_1";


$tdataalelemconsumo_consulta[".strOriginalTableName"] = "alelemconsumo";

	



$tdataalelemconsumo_consulta[".showAddInPopup"] = false;

$tdataalelemconsumo_consulta[".showEditInPopup"] = false;

$tdataalelemconsumo_consulta[".showViewInPopup"] = false;

$tdataalelemconsumo_consulta[".listAjax"] = false;
//	temporary
//$tdataalelemconsumo_consulta[".listAjax"] = false;

	$tdataalelemconsumo_consulta[".audit"] = false;

	$tdataalelemconsumo_consulta[".locking"] = false;


$pages = $tdataalelemconsumo_consulta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalelemconsumo_consulta[".edit"] = true;
	$tdataalelemconsumo_consulta[".afterEditAction"] = 1;
	$tdataalelemconsumo_consulta[".closePopupAfterEdit"] = 1;
	$tdataalelemconsumo_consulta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalelemconsumo_consulta[".add"] = true;
$tdataalelemconsumo_consulta[".afterAddAction"] = 1;
$tdataalelemconsumo_consulta[".closePopupAfterAdd"] = 1;
$tdataalelemconsumo_consulta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalelemconsumo_consulta[".list"] = true;
}



$tdataalelemconsumo_consulta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalelemconsumo_consulta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalelemconsumo_consulta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalelemconsumo_consulta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalelemconsumo_consulta[".printFriendly"] = true;
}



$tdataalelemconsumo_consulta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalelemconsumo_consulta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalelemconsumo_consulta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalelemconsumo_consulta[".isUseAjaxSuggest"] = true;



															

$tdataalelemconsumo_consulta[".ajaxCodeSnippetAdded"] = false;

$tdataalelemconsumo_consulta[".buttonsAdded"] = false;

$tdataalelemconsumo_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalelemconsumo_consulta[".isUseTimeForSearch"] = false;


$tdataalelemconsumo_consulta[".badgeColor"] = "DB7093";


$tdataalelemconsumo_consulta[".allSearchFields"] = array();
$tdataalelemconsumo_consulta[".filterFields"] = array();
$tdataalelemconsumo_consulta[".requiredSearchFields"] = array();

$tdataalelemconsumo_consulta[".googleLikeFields"] = array();
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "alelemenconsumo_id";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "eccuenta";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "ec_codelem";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "ec_nomelemento";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "ecunidad";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "nicsp_cuentacostonew";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "nicsp_cuentacostonewc";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "nicsp_cuentacostonewn";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "nicsp_cuentacostoservicio";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "nicsp_cuentacostoservicioc";
$tdataalelemconsumo_consulta[".googleLikeFields"][] = "nicsp_cuentacostoservicion";



$tdataalelemconsumo_consulta[".tableType"] = "list";

$tdataalelemconsumo_consulta[".printerPageOrientation"] = 0;
$tdataalelemconsumo_consulta[".nPrinterPageScale"] = 100;

$tdataalelemconsumo_consulta[".nPrinterSplitRecords"] = 40;

$tdataalelemconsumo_consulta[".geocodingEnabled"] = false;










$tdataalelemconsumo_consulta[".pageSize"] = 20;

$tdataalelemconsumo_consulta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalelemconsumo_consulta[".strOrderBy"] = $tstrOrderBy;

$tdataalelemconsumo_consulta[".orderindexes"] = array();


$tdataalelemconsumo_consulta[".sqlHead"] = "SELECT alelemenconsumo_id,  eccuenta,  ec_codelem,  ec_nomelemento,  ecunidad,  nicsp_cuentacostonew,  nicsp_cuentacostonewc,  nicsp_cuentacostonewn,  nicsp_cuentacostoservicio,  nicsp_cuentacostoservicioc,  nicsp_cuentacostoservicion";
$tdataalelemconsumo_consulta[".sqlFrom"] = "FROM alelemconsumo";
$tdataalelemconsumo_consulta[".sqlWhereExpr"] = "";
$tdataalelemconsumo_consulta[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalelemconsumo_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalelemconsumo_consulta[".arrGroupsPerPage"] = $arrGPP;

$tdataalelemconsumo_consulta[".highlightSearchResults"] = true;

$tableKeysalelemconsumo_consulta = array();
$tableKeysalelemconsumo_consulta[] = "alelemenconsumo_id";
$tdataalelemconsumo_consulta[".Keys"] = $tableKeysalelemconsumo_consulta;


$tdataalelemconsumo_consulta[".hideMobileList"] = array();




//	alelemenconsumo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "alelemenconsumo_id";
	$fdata["GoodName"] = "alelemenconsumo_id";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","alelemenconsumo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "alelemenconsumo_id";

		$fdata["sourceSingle"] = "alelemenconsumo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alelemenconsumo_id";

	
	
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


	$tdataalelemconsumo_consulta["alelemenconsumo_id"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "alelemenconsumo_id";
//	eccuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "eccuenta";
	$fdata["GoodName"] = "eccuenta";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","eccuenta");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "eccuenta";

		$fdata["sourceSingle"] = "eccuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eccuenta";

	
	
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


	$tdataalelemconsumo_consulta["eccuenta"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "eccuenta";
//	ec_codelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ec_codelem";
	$fdata["GoodName"] = "ec_codelem";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","ec_codelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ec_codelem";

		$fdata["sourceSingle"] = "ec_codelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ec_codelem";

	
	
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


	$tdataalelemconsumo_consulta["ec_codelem"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "ec_codelem";
//	ec_nomelemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ec_nomelemento";
	$fdata["GoodName"] = "ec_nomelemento";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","ec_nomelemento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ec_nomelemento";

		$fdata["sourceSingle"] = "ec_nomelemento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ec_nomelemento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataalelemconsumo_consulta["ec_nomelemento"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "ec_nomelemento";
//	ecunidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ecunidad";
	$fdata["GoodName"] = "ecunidad";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","ecunidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ecunidad";

		$fdata["sourceSingle"] = "ecunidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ecunidad";

	
	
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
	$edata["LookupTable"] = "geunidmedida";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "um_nomunimed";

	

	
	$edata["LookupOrderBy"] = "um_nomunimed";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
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


	$tdataalelemconsumo_consulta["ecunidad"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "ecunidad";
//	nicsp_cuentacostonew
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nicsp_cuentacostonew";
	$fdata["GoodName"] = "nicsp_cuentacostonew";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","nicsp_cuentacostonew");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostonew";

		$fdata["sourceSingle"] = "nicsp_cuentacostonew";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostonew";

	
	
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
	$edata["LookupTable"] = "cgc_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"nicsp_cuentacostonewc", 'lookupF'=>"pos_9");
	$edata["autoCompleteFields"][] = array('masterF'=>"nicsp_cuentacostonewn", 'lookupF'=>"Descripcion");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CodigoContableN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CodigoContableN";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataalelemconsumo_consulta["nicsp_cuentacostonew"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "nicsp_cuentacostonew";
//	nicsp_cuentacostonewc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nicsp_cuentacostonewc";
	$fdata["GoodName"] = "nicsp_cuentacostonewc";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","nicsp_cuentacostonewc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostonewc";

		$fdata["sourceSingle"] = "nicsp_cuentacostonewc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostonewc";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalelemconsumo_consulta["nicsp_cuentacostonewc"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "nicsp_cuentacostonewc";
//	nicsp_cuentacostonewn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nicsp_cuentacostonewn";
	$fdata["GoodName"] = "nicsp_cuentacostonewn";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","nicsp_cuentacostonewn");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostonewn";

		$fdata["sourceSingle"] = "nicsp_cuentacostonewn";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostonewn";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalelemconsumo_consulta["nicsp_cuentacostonewn"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "nicsp_cuentacostonewn";
//	nicsp_cuentacostoservicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nicsp_cuentacostoservicio";
	$fdata["GoodName"] = "nicsp_cuentacostoservicio";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","nicsp_cuentacostoservicio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostoservicio";

		$fdata["sourceSingle"] = "nicsp_cuentacostoservicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostoservicio";

	
	
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
	$edata["LookupTable"] = "cgc_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"nicsp_cuentacostoservicioc", 'lookupF'=>"pos_9");
	$edata["autoCompleteFields"][] = array('masterF'=>"nicsp_cuentacostoservicion", 'lookupF'=>"Descripcion");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CodigoContableN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CodigoContableN";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataalelemconsumo_consulta["nicsp_cuentacostoservicio"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "nicsp_cuentacostoservicio";
//	nicsp_cuentacostoservicioc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nicsp_cuentacostoservicioc";
	$fdata["GoodName"] = "nicsp_cuentacostoservicioc";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","nicsp_cuentacostoservicioc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostoservicioc";

		$fdata["sourceSingle"] = "nicsp_cuentacostoservicioc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostoservicioc";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalelemconsumo_consulta["nicsp_cuentacostoservicioc"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "nicsp_cuentacostoservicioc";
//	nicsp_cuentacostoservicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "nicsp_cuentacostoservicion";
	$fdata["GoodName"] = "nicsp_cuentacostoservicion";
	$fdata["ownerTable"] = "alelemconsumo";
	$fdata["Label"] = GetFieldLabel("alelemconsumo_consulta","nicsp_cuentacostoservicion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nicsp_cuentacostoservicion";

		$fdata["sourceSingle"] = "nicsp_cuentacostoservicion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nicsp_cuentacostoservicion";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalelemconsumo_consulta["nicsp_cuentacostoservicion"] = $fdata;
		$tdataalelemconsumo_consulta[".searchableFields"][] = "nicsp_cuentacostoservicion";


$tables_data["alelemconsumo_consulta"]=&$tdataalelemconsumo_consulta;
$field_labels["alelemconsumo_consulta"] = &$fieldLabelsalelemconsumo_consulta;
$fieldToolTips["alelemconsumo_consulta"] = &$fieldToolTipsalelemconsumo_consulta;
$placeHolders["alelemconsumo_consulta"] = &$placeHoldersalelemconsumo_consulta;
$page_titles["alelemconsumo_consulta"] = &$pageTitlesalelemconsumo_consulta;


changeTextControlsToDate( "alelemconsumo_consulta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alelemconsumo_consulta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alelemconsumo_consulta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alelemconsumo_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "alelemenconsumo_id,  eccuenta,  ec_codelem,  ec_nomelemento,  ecunidad,  nicsp_cuentacostonew,  nicsp_cuentacostonewc,  nicsp_cuentacostonewn,  nicsp_cuentacostoservicio,  nicsp_cuentacostoservicioc,  nicsp_cuentacostoservicion";
$proto0["m_strFrom"] = "FROM alelemconsumo";
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
	"m_strName" => "alelemenconsumo_id",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto6["m_sql"] = "alelemenconsumo_id";
$proto6["m_srcTableName"] = "alelemconsumo_consulta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "eccuenta",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto8["m_sql"] = "eccuenta";
$proto8["m_srcTableName"] = "alelemconsumo_consulta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ec_codelem",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto10["m_sql"] = "ec_codelem";
$proto10["m_srcTableName"] = "alelemconsumo_consulta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ec_nomelemento",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto12["m_sql"] = "ec_nomelemento";
$proto12["m_srcTableName"] = "alelemconsumo_consulta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ecunidad",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto14["m_sql"] = "ecunidad";
$proto14["m_srcTableName"] = "alelemconsumo_consulta";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostonew",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto16["m_sql"] = "nicsp_cuentacostonew";
$proto16["m_srcTableName"] = "alelemconsumo_consulta";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostonewc",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto18["m_sql"] = "nicsp_cuentacostonewc";
$proto18["m_srcTableName"] = "alelemconsumo_consulta";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostonewn",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto20["m_sql"] = "nicsp_cuentacostonewn";
$proto20["m_srcTableName"] = "alelemconsumo_consulta";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostoservicio",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto22["m_sql"] = "nicsp_cuentacostoservicio";
$proto22["m_srcTableName"] = "alelemconsumo_consulta";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostoservicioc",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto24["m_sql"] = "nicsp_cuentacostoservicioc";
$proto24["m_srcTableName"] = "alelemconsumo_consulta";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "nicsp_cuentacostoservicion",
	"m_strTable" => "alelemconsumo",
	"m_srcTableName" => "alelemconsumo_consulta"
));

$proto26["m_sql"] = "nicsp_cuentacostoservicion";
$proto26["m_srcTableName"] = "alelemconsumo_consulta";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "alelemconsumo";
$proto29["m_srcTableName"] = "alelemconsumo_consulta";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "alelemenconsumo_id";
$proto29["m_columns"][] = "ec_codelem";
$proto29["m_columns"][] = "ec_codelemrel";
$proto29["m_columns"][] = "ec_localizacion";
$proto29["m_columns"][] = "ec_nomelemento";
$proto29["m_columns"][] = "eccuenta";
$proto29["m_columns"][] = "ectipoestruc";
$proto29["m_columns"][] = "ecunidad";
$proto29["m_columns"][] = "nicsp_cuentacostonew";
$proto29["m_columns"][] = "nicsp_cuentacostonewc";
$proto29["m_columns"][] = "nicsp_cuentacostonewn";
$proto29["m_columns"][] = "nicsp_cuentacostoservicio";
$proto29["m_columns"][] = "nicsp_cuentacostoservicioc";
$proto29["m_columns"][] = "nicsp_cuentacostoservicion";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "alelemconsumo";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "alelemconsumo_consulta";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="alelemconsumo_consulta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alelemconsumo_consulta = createSqlQuery_alelemconsumo_consulta();


	
								;

											

$tdataalelemconsumo_consulta[".sqlquery"] = $queryData_alelemconsumo_consulta;



$tdataalelemconsumo_consulta[".hasEvents"] = false;

?>