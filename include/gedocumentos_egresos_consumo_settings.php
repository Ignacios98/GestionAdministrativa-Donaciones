<?php
$tdatagedocumentos_egresos_consumo = array();
$tdatagedocumentos_egresos_consumo[".searchableFields"] = array();
$tdatagedocumentos_egresos_consumo[".ShortName"] = "gedocumentos_egresos_consumo";
$tdatagedocumentos_egresos_consumo[".OwnerID"] = "";
$tdatagedocumentos_egresos_consumo[".OriginalTable"] = "gedocumentos";


$tdatagedocumentos_egresos_consumo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagedocumentos_egresos_consumo[".originalPagesByType"] = $tdatagedocumentos_egresos_consumo[".pagesByType"];
$tdatagedocumentos_egresos_consumo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagedocumentos_egresos_consumo[".originalPages"] = $tdatagedocumentos_egresos_consumo[".pages"];
$tdatagedocumentos_egresos_consumo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagedocumentos_egresos_consumo[".originalDefaultPages"] = $tdatagedocumentos_egresos_consumo[".defaultPages"];

//	field labels
$fieldLabelsgedocumentos_egresos_consumo = array();
$fieldToolTipsgedocumentos_egresos_consumo = array();
$pageTitlesgedocumentos_egresos_consumo = array();
$placeHoldersgedocumentos_egresos_consumo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"] = array();
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"] = array();
	$placeHoldersgedocumentos_egresos_consumo["Spanish"] = array();
	$pageTitlesgedocumentos_egresos_consumo["Spanish"] = array();
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["as_nroasiento_fk"] = "Asiento";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["as_nroasiento_fk"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["as_nroasiento_fk"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_detalle"] = "Descripción del egreso";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_detalle"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_detalle"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_fechadoc"] = "Fecha del egreso";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_fechadoc"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_fechadoc"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_file"] = "Anexo";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_file"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_file"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_legaliza"] = "Do Legaliza";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_legaliza"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_legaliza"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_nrodoc"] = "Ordinal";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_nrodoc"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_nrodoc"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_tipodoc"] = "Tipo documento";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_tipodoc"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_tipodoc"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_tipomov"] = "Tipo de movimiento";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_tipomov"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_tipomov"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["doccnit"] = "NIT Proveedor";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["doccnit"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["doccnit"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["doclasedoc"] = "Clase de documento";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["doclasedoc"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["doclasedoc"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["doclasedoc_id"] = "Documento";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["doclasedoc_id"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["doclasedoc_id"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["docnomproveedor"] = "Nombre | Razón Social";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["docnomproveedor"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["docnomproveedor"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["docodregion"] = "Almacén";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["docodregion"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["docodregion"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["egreso"] = "Egreso";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["egreso"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["egreso"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["sys_fecha"] = "Fecha sistema";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["sys_fecha"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["sys_fecha"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["sys_user"] = "Gestionado por:";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["sys_user"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["sys_user"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_concepto"] = "Concepto";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_concepto"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_concepto"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_dep"] = "Dependencia";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_dep"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_dep"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_depsup"] = "Despacho | Dirección";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_depsup"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_depsup"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["resolfecha"] = "Fecha de resolución";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["resolfecha"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["resolfecha"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["resolnum"] = "Número de resolución";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["resolnum"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["resolnum"] = "";
	$fieldLabelsgedocumentos_egresos_consumo["Spanish"]["do_email"] = "Do Email";
	$fieldToolTipsgedocumentos_egresos_consumo["Spanish"]["do_email"] = "";
	$placeHoldersgedocumentos_egresos_consumo["Spanish"]["do_email"] = "";
	if (count($fieldToolTipsgedocumentos_egresos_consumo["Spanish"]))
		$tdatagedocumentos_egresos_consumo[".isUseToolTips"] = true;
}


	$tdatagedocumentos_egresos_consumo[".NCSearch"] = true;



$tdatagedocumentos_egresos_consumo[".shortTableName"] = "gedocumentos_egresos_consumo";
$tdatagedocumentos_egresos_consumo[".nSecOptions"] = 0;

$tdatagedocumentos_egresos_consumo[".mainTableOwnerID"] = "";
$tdatagedocumentos_egresos_consumo[".entityType"] = 1;
$tdatagedocumentos_egresos_consumo[".connId"] = "dbrf_at_127_0_0_1";


$tdatagedocumentos_egresos_consumo[".strOriginalTableName"] = "gedocumentos";

	



$tdatagedocumentos_egresos_consumo[".showAddInPopup"] = false;

$tdatagedocumentos_egresos_consumo[".showEditInPopup"] = false;

$tdatagedocumentos_egresos_consumo[".showViewInPopup"] = false;

$tdatagedocumentos_egresos_consumo[".listAjax"] = false;
//	temporary
//$tdatagedocumentos_egresos_consumo[".listAjax"] = false;

	$tdatagedocumentos_egresos_consumo[".audit"] = false;

	$tdatagedocumentos_egresos_consumo[".locking"] = false;


$pages = $tdatagedocumentos_egresos_consumo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagedocumentos_egresos_consumo[".edit"] = true;
	$tdatagedocumentos_egresos_consumo[".afterEditAction"] = 0;
	$tdatagedocumentos_egresos_consumo[".closePopupAfterEdit"] = 1;
	$tdatagedocumentos_egresos_consumo[".afterEditActionDetTable"] = "almovconsdia_egresos";
}

if( $pages[PAGE_ADD] ) {
$tdatagedocumentos_egresos_consumo[".add"] = true;
$tdatagedocumentos_egresos_consumo[".afterAddAction"] = 0;
$tdatagedocumentos_egresos_consumo[".closePopupAfterAdd"] = 1;
$tdatagedocumentos_egresos_consumo[".afterAddActionDetTable"] = "almovconsdia_egresos";
}

if( $pages[PAGE_LIST] ) {
	$tdatagedocumentos_egresos_consumo[".list"] = true;
}



$tdatagedocumentos_egresos_consumo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagedocumentos_egresos_consumo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagedocumentos_egresos_consumo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagedocumentos_egresos_consumo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagedocumentos_egresos_consumo[".printFriendly"] = true;
}



$tdatagedocumentos_egresos_consumo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagedocumentos_egresos_consumo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagedocumentos_egresos_consumo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagedocumentos_egresos_consumo[".isUseAjaxSuggest"] = true;



																														

$tdatagedocumentos_egresos_consumo[".ajaxCodeSnippetAdded"] = false;

$tdatagedocumentos_egresos_consumo[".buttonsAdded"] = false;

$tdatagedocumentos_egresos_consumo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagedocumentos_egresos_consumo[".isUseTimeForSearch"] = false;


$tdatagedocumentos_egresos_consumo[".badgeColor"] = "ffc107";


$tdatagedocumentos_egresos_consumo[".allSearchFields"] = array();
$tdatagedocumentos_egresos_consumo[".filterFields"] = array();
$tdatagedocumentos_egresos_consumo[".requiredSearchFields"] = array();

$tdatagedocumentos_egresos_consumo[".googleLikeFields"] = array();
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "doclasedoc_id";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "as_nroasiento_fk";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "docodregion";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_detalle";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_fechadoc";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_file";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_legaliza";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_nrodoc";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_tipodoc";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_tipomov";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "doccnit";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "doclasedoc";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "docnomproveedor";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "egreso";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "sys_fecha";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "sys_user";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_concepto";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_dep";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_depsup";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "resolfecha";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "resolnum";
$tdatagedocumentos_egresos_consumo[".googleLikeFields"][] = "do_email";



$tdatagedocumentos_egresos_consumo[".tableType"] = "list";

$tdatagedocumentos_egresos_consumo[".printerPageOrientation"] = 0;
$tdatagedocumentos_egresos_consumo[".nPrinterPageScale"] = 100;

$tdatagedocumentos_egresos_consumo[".nPrinterSplitRecords"] = 40;

$tdatagedocumentos_egresos_consumo[".geocodingEnabled"] = false;










$tdatagedocumentos_egresos_consumo[".pageSize"] = 20;

$tdatagedocumentos_egresos_consumo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY doclasedoc_id DESC";
$tdatagedocumentos_egresos_consumo[".strOrderBy"] = $tstrOrderBy;

$tdatagedocumentos_egresos_consumo[".orderindexes"] = array();
			$tdatagedocumentos_egresos_consumo[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "doclasedoc_id");


$tdatagedocumentos_egresos_consumo[".sqlHead"] = "SELECT doclasedoc_id,  as_nroasiento_fk,  docodregion,  do_detalle,  do_fechadoc,  do_file,  do_legaliza,  do_nrodoc,  do_tipodoc,  do_tipomov,  doccnit,  doclasedoc,  docnomproveedor,  egreso,  sys_fecha,  sys_user,  do_concepto,  do_dep,  do_depsup,  resolfecha,  resolnum,  do_email";
$tdatagedocumentos_egresos_consumo[".sqlFrom"] = "FROM gedocumentos";
$tdatagedocumentos_egresos_consumo[".sqlWhereExpr"] = "(doclasedoc = 310)";
$tdatagedocumentos_egresos_consumo[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagedocumentos_egresos_consumo[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagedocumentos_egresos_consumo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagedocumentos_egresos_consumo[".arrGroupsPerPage"] = $arrGPP;

$tdatagedocumentos_egresos_consumo[".highlightSearchResults"] = true;

$tableKeysgedocumentos_egresos_consumo = array();
$tableKeysgedocumentos_egresos_consumo[] = "doclasedoc_id";
$tdatagedocumentos_egresos_consumo[".Keys"] = $tableKeysgedocumentos_egresos_consumo;


$tdatagedocumentos_egresos_consumo[".hideMobileList"] = array();




//	doclasedoc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "doclasedoc_id";
	$fdata["GoodName"] = "doclasedoc_id";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","doclasedoc_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "doclasedoc_id";

		$fdata["sourceSingle"] = "doclasedoc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doclasedoc_id";

	
	
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


	$tdatagedocumentos_egresos_consumo["doclasedoc_id"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "doclasedoc_id";
//	as_nroasiento_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "as_nroasiento_fk";
	$fdata["GoodName"] = "as_nroasiento_fk";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","as_nroasiento_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "as_nroasiento_fk";

		$fdata["sourceSingle"] = "as_nroasiento_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "as_nroasiento_fk";

	
	
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
	$edata["LookupTable"] = "alasientos_gestion";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"do_fechadoc", 'lookupF'=>"as_fechaasiento");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "as_nroasiento";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "as_nroasiento";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatagedocumentos_egresos_consumo["as_nroasiento_fk"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "as_nroasiento_fk";
//	docodregion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "docodregion";
	$fdata["GoodName"] = "docodregion";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","docodregion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "docodregion";

		$fdata["sourceSingle"] = "docodregion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docodregion";

	
	
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
	$edata["LookupTable"] = "q_ctrl_numdocumento";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"do_nrodoc", 'lookupF'=>"newnumber");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ascodalmacen";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ascodalmacen";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatagedocumentos_egresos_consumo["docodregion"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "docodregion";
//	do_detalle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "do_detalle";
	$fdata["GoodName"] = "do_detalle";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_detalle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "do_detalle";

		$fdata["sourceSingle"] = "do_detalle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_detalle";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 70;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatagedocumentos_egresos_consumo["do_detalle"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_detalle";
//	do_fechadoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "do_fechadoc";
	$fdata["GoodName"] = "do_fechadoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_fechadoc");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "do_fechadoc";

		$fdata["sourceSingle"] = "do_fechadoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_fechadoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatagedocumentos_egresos_consumo["do_fechadoc"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_fechadoc";
//	do_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "do_file";
	$fdata["GoodName"] = "do_file";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "do_file";

		$fdata["sourceSingle"] = "do_file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_file";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatagedocumentos_egresos_consumo["do_file"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_file";
//	do_legaliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "do_legaliza";
	$fdata["GoodName"] = "do_legaliza";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_legaliza");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "do_legaliza";

		$fdata["sourceSingle"] = "do_legaliza";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_legaliza";

	
	
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


	$tdatagedocumentos_egresos_consumo["do_legaliza"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_legaliza";
//	do_nrodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "do_nrodoc";
	$fdata["GoodName"] = "do_nrodoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_nrodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_nrodoc";

		$fdata["sourceSingle"] = "do_nrodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_nrodoc";

	
	
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


	$tdatagedocumentos_egresos_consumo["do_nrodoc"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_nrodoc";
//	do_tipodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "do_tipodoc";
	$fdata["GoodName"] = "do_tipodoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_tipodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_tipodoc";

		$fdata["sourceSingle"] = "do_tipodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_tipodoc";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatagedocumentos_egresos_consumo["do_tipodoc"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_tipodoc";
//	do_tipomov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "do_tipomov";
	$fdata["GoodName"] = "do_tipomov";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_tipomov");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_tipomov";

		$fdata["sourceSingle"] = "do_tipomov";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_tipomov";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_movimiento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cod_movimiento";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nmovimiento";

				$edata["LookupWhere"] = "cod_movimiento = 2";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "doclasedoc";

	
	
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
		
		$edata["autoUpdatable"] = true;

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
		$fdata["filterTotalFields"] = "doclasedoc_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatagedocumentos_egresos_consumo["do_tipomov"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_tipomov";
//	doccnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "doccnit";
	$fdata["GoodName"] = "doccnit";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","doccnit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doccnit";

		$fdata["sourceSingle"] = "doccnit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doccnit";

	
	
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
	$edata["LookupTable"] = "contractor_master";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"do_tipodoc", 'lookupF'=>"contractor_type");
	$edata["autoCompleteFields"][] = array('masterF'=>"docnomproveedor", 'lookupF'=>"contractor_nombresfull");
	$edata["autoCompleteFields"][] = array('masterF'=>"do_email", 'lookupF'=>"contractor_email");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_doc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
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


	$tdatagedocumentos_egresos_consumo["doccnit"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "doccnit";
//	doclasedoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "doclasedoc";
	$fdata["GoodName"] = "doclasedoc";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","doclasedoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "doclasedoc";

		$fdata["sourceSingle"] = "doclasedoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doclasedoc";

	
	
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
	$edata["LookupTable"] = "geclasedocto";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cd_clasedoc";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cd_nombredoc";

				$edata["LookupWhere"] = "cd_clasedoc = 310";


	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "do_tipomov", "lookup" => "cd_tipomov" );

	
	

	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatagedocumentos_egresos_consumo["doclasedoc"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "doclasedoc";
//	docnomproveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "docnomproveedor";
	$fdata["GoodName"] = "docnomproveedor";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","docnomproveedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "docnomproveedor";

		$fdata["sourceSingle"] = "docnomproveedor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docnomproveedor";

	
	
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


	$tdatagedocumentos_egresos_consumo["docnomproveedor"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "docnomproveedor";
//	egreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "egreso";
	$fdata["GoodName"] = "egreso";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","egreso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "egreso";

		$fdata["sourceSingle"] = "egreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "egreso";

	
	
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


	$tdatagedocumentos_egresos_consumo["egreso"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "egreso";
//	sys_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sys_fecha";
	$fdata["GoodName"] = "sys_fecha";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","sys_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_fecha";

		$fdata["sourceSingle"] = "sys_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatagedocumentos_egresos_consumo["sys_fecha"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "sys_fecha";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatagedocumentos_egresos_consumo["sys_user"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "sys_user";
//	do_concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "do_concepto";
	$fdata["GoodName"] = "do_concepto";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_concepto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_concepto";

		$fdata["sourceSingle"] = "do_concepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_concepto";

	
	
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
	$edata["LookupTable"] = "alconceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "co_codconcepto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "co_nomconcepto";

				$edata["LookupWhere"] = "co_ctrl = 1 AND co_tipomovto = 'S'";


	
	$edata["LookupOrderBy"] = "co_otronomconcepto";

	
	
	
	

	
	
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


	$tdatagedocumentos_egresos_consumo["do_concepto"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_concepto";
//	do_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "do_dep";
	$fdata["GoodName"] = "do_dep";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_dep";

		$fdata["sourceSingle"] = "do_dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_dep";

	
	
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
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "do_depsup", "lookup" => "id_depto_superior" );

	
	

	
	
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


	$tdatagedocumentos_egresos_consumo["do_dep"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_dep";
//	do_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "do_depsup";
	$fdata["GoodName"] = "do_depsup";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_depsup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "do_depsup";

		$fdata["sourceSingle"] = "do_depsup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_depsup";

	
	
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
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "do_dep";

	
	
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


	$tdatagedocumentos_egresos_consumo["do_depsup"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_depsup";
//	resolfecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "resolfecha";
	$fdata["GoodName"] = "resolfecha";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","resolfecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "resolfecha";

		$fdata["sourceSingle"] = "resolfecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resolfecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatagedocumentos_egresos_consumo["resolfecha"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "resolfecha";
//	resolnum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "resolnum";
	$fdata["GoodName"] = "resolnum";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","resolnum");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resolnum";

		$fdata["sourceSingle"] = "resolnum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resolnum";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatagedocumentos_egresos_consumo["resolnum"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "resolnum";
//	do_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "do_email";
	$fdata["GoodName"] = "do_email";
	$fdata["ownerTable"] = "gedocumentos";
	$fdata["Label"] = GetFieldLabel("gedocumentos_egresos_consumo","do_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "do_email";

		$fdata["sourceSingle"] = "do_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_email";

	
	
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


	$tdatagedocumentos_egresos_consumo["do_email"] = $fdata;
		$tdatagedocumentos_egresos_consumo[".searchableFields"][] = "do_email";


$tables_data["gedocumentos_egresos_consumo"]=&$tdatagedocumentos_egresos_consumo;
$field_labels["gedocumentos_egresos_consumo"] = &$fieldLabelsgedocumentos_egresos_consumo;
$fieldToolTips["gedocumentos_egresos_consumo"] = &$fieldToolTipsgedocumentos_egresos_consumo;
$placeHolders["gedocumentos_egresos_consumo"] = &$placeHoldersgedocumentos_egresos_consumo;
$page_titles["gedocumentos_egresos_consumo"] = &$pageTitlesgedocumentos_egresos_consumo;


changeTextControlsToDate( "gedocumentos_egresos_consumo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["gedocumentos_egresos_consumo"] = array();
//	almovconsdia_egresos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="almovconsdia_egresos";
		$detailsParam["dOriginalTable"] = "almovconsdiae";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "almovconsdia_egresos";
	$detailsParam["dCaptionTable"] = GetTableCaption("almovconsdia_egresos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["gedocumentos_egresos_consumo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["gedocumentos_egresos_consumo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["gedocumentos_egresos_consumo"][$dIndex]["masterKeys"][]="doclasedoc_id";

	$detailsTablesData["gedocumentos_egresos_consumo"][$dIndex]["masterKeys"][]="doccnit";

				$detailsTablesData["gedocumentos_egresos_consumo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["gedocumentos_egresos_consumo"][$dIndex]["detailKeys"][]="sys_doclasedoc_id_fk";

		
	$detailsTablesData["gedocumentos_egresos_consumo"][$dIndex]["detailKeys"][]="sys_document_func";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["gedocumentos_egresos_consumo"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="alasientos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="alasientos_gestion_e";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "alasientos_gestion_e";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["gedocumentos_egresos_consumo"][0] = $masterParams;
				$masterTablesData["gedocumentos_egresos_consumo"][0]["masterKeys"] = array();
	$masterTablesData["gedocumentos_egresos_consumo"][0]["masterKeys"][]="as_nroasiento";
				$masterTablesData["gedocumentos_egresos_consumo"][0]["masterKeys"][]="ascodalmacen";
				$masterTablesData["gedocumentos_egresos_consumo"][0]["detailKeys"] = array();
	$masterTablesData["gedocumentos_egresos_consumo"][0]["detailKeys"][]="as_nroasiento_fk";
				$masterTablesData["gedocumentos_egresos_consumo"][0]["detailKeys"][]="docodregion";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gedocumentos_egresos_consumo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "doclasedoc_id,  as_nroasiento_fk,  docodregion,  do_detalle,  do_fechadoc,  do_file,  do_legaliza,  do_nrodoc,  do_tipodoc,  do_tipomov,  doccnit,  doclasedoc,  docnomproveedor,  egreso,  sys_fecha,  sys_user,  do_concepto,  do_dep,  do_depsup,  resolfecha,  resolnum,  do_email";
$proto0["m_strFrom"] = "FROM gedocumentos";
$proto0["m_strWhere"] = "(doclasedoc = 310)";
$proto0["m_strOrderBy"] = "ORDER BY doclasedoc_id DESC";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "doclasedoc = 310";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "doclasedoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 310";
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
	"m_strName" => "doclasedoc_id",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto6["m_sql"] = "doclasedoc_id";
$proto6["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "as_nroasiento_fk",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto8["m_sql"] = "as_nroasiento_fk";
$proto8["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "docodregion",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto10["m_sql"] = "docodregion";
$proto10["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "do_detalle",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto12["m_sql"] = "do_detalle";
$proto12["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "do_fechadoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto14["m_sql"] = "do_fechadoc";
$proto14["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "do_file",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto16["m_sql"] = "do_file";
$proto16["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "do_legaliza",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto18["m_sql"] = "do_legaliza";
$proto18["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "do_nrodoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto20["m_sql"] = "do_nrodoc";
$proto20["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "do_tipodoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto22["m_sql"] = "do_tipodoc";
$proto22["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "do_tipomov",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto24["m_sql"] = "do_tipomov";
$proto24["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "doccnit",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto26["m_sql"] = "doccnit";
$proto26["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "doclasedoc",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto28["m_sql"] = "doclasedoc";
$proto28["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "docnomproveedor",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto30["m_sql"] = "docnomproveedor";
$proto30["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "egreso",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto32["m_sql"] = "egreso";
$proto32["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_fecha",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto34["m_sql"] = "sys_fecha";
$proto34["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto36["m_sql"] = "sys_user";
$proto36["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "do_concepto",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto38["m_sql"] = "do_concepto";
$proto38["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "do_dep",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto40["m_sql"] = "do_dep";
$proto40["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "do_depsup",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto42["m_sql"] = "do_depsup";
$proto42["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "resolfecha",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto44["m_sql"] = "resolfecha";
$proto44["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "resolnum",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto46["m_sql"] = "resolnum";
$proto46["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "do_email",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto48["m_sql"] = "do_email";
$proto48["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "gedocumentos";
$proto51["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "as_nroasiento_fk";
$proto51["m_columns"][] = "do_concepto";
$proto51["m_columns"][] = "do_dep";
$proto51["m_columns"][] = "do_depsup";
$proto51["m_columns"][] = "do_detalle";
$proto51["m_columns"][] = "do_email";
$proto51["m_columns"][] = "do_fechadoc";
$proto51["m_columns"][] = "do_file";
$proto51["m_columns"][] = "do_legaliza";
$proto51["m_columns"][] = "do_nrodoc";
$proto51["m_columns"][] = "do_tipodoc";
$proto51["m_columns"][] = "do_tipomov";
$proto51["m_columns"][] = "doccnit";
$proto51["m_columns"][] = "doclasedoc";
$proto51["m_columns"][] = "doclasedoc_id";
$proto51["m_columns"][] = "docnomproveedor";
$proto51["m_columns"][] = "docodregion";
$proto51["m_columns"][] = "egreso";
$proto51["m_columns"][] = "resolfecha";
$proto51["m_columns"][] = "resolnum";
$proto51["m_columns"][] = "sys_fecha";
$proto51["m_columns"][] = "sys_user";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "gedocumentos";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "gedocumentos_egresos_consumo";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "doclasedoc_id",
	"m_strTable" => "gedocumentos",
	"m_srcTableName" => "gedocumentos_egresos_consumo"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="gedocumentos_egresos_consumo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gedocumentos_egresos_consumo = createSqlQuery_gedocumentos_egresos_consumo();


	
								;

																						

$tdatagedocumentos_egresos_consumo[".sqlquery"] = $queryData_gedocumentos_egresos_consumo;



include_once(getabspath("include/gedocumentos_egresos_consumo_events.php"));
$tdatagedocumentos_egresos_consumo[".hasEvents"] = true;

?>