<?php
$tdatacontractor_type = array();
$tdatacontractor_type[".searchableFields"] = array();
$tdatacontractor_type[".ShortName"] = "contractor_type";
$tdatacontractor_type[".OwnerID"] = "";
$tdatacontractor_type[".OriginalTable"] = "contractor_type";


$tdatacontractor_type[".pagesByType"] = my_json_decode( "{}" );
$tdatacontractor_type[".originalPagesByType"] = $tdatacontractor_type[".pagesByType"];
$tdatacontractor_type[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacontractor_type[".originalPages"] = $tdatacontractor_type[".pages"];
$tdatacontractor_type[".defaultPages"] = my_json_decode( "{}" );
$tdatacontractor_type[".originalDefaultPages"] = $tdatacontractor_type[".defaultPages"];

//	field labels
$fieldLabelscontractor_type = array();
$fieldToolTipscontractor_type = array();
$pageTitlescontractor_type = array();
$placeHolderscontractor_type = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontractor_type["Spanish"] = array();
	$fieldToolTipscontractor_type["Spanish"] = array();
	$placeHolderscontractor_type["Spanish"] = array();
	$pageTitlescontractor_type["Spanish"] = array();
	$fieldLabelscontractor_type["Spanish"]["contractor_type_id"] = "Contractor Type Id";
	$fieldToolTipscontractor_type["Spanish"]["contractor_type_id"] = "";
	$placeHolderscontractor_type["Spanish"]["contractor_type_id"] = "";
	$fieldLabelscontractor_type["Spanish"]["contractor_type"] = "Contractor Type";
	$fieldToolTipscontractor_type["Spanish"]["contractor_type"] = "";
	$placeHolderscontractor_type["Spanish"]["contractor_type"] = "";
	if (count($fieldToolTipscontractor_type["Spanish"]))
		$tdatacontractor_type[".isUseToolTips"] = true;
}


	$tdatacontractor_type[".NCSearch"] = true;



$tdatacontractor_type[".shortTableName"] = "contractor_type";
$tdatacontractor_type[".nSecOptions"] = 0;

$tdatacontractor_type[".mainTableOwnerID"] = "";
$tdatacontractor_type[".entityType"] = 0;
$tdatacontractor_type[".connId"] = "dbct_at_127_0_0_1";


$tdatacontractor_type[".strOriginalTableName"] = "contractor_type";

	



$tdatacontractor_type[".showAddInPopup"] = false;

$tdatacontractor_type[".showEditInPopup"] = false;

$tdatacontractor_type[".showViewInPopup"] = false;

$tdatacontractor_type[".listAjax"] = false;
//	temporary
//$tdatacontractor_type[".listAjax"] = false;

	$tdatacontractor_type[".audit"] = false;

	$tdatacontractor_type[".locking"] = false;


$pages = $tdatacontractor_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontractor_type[".edit"] = true;
	$tdatacontractor_type[".afterEditAction"] = 1;
	$tdatacontractor_type[".closePopupAfterEdit"] = 1;
	$tdatacontractor_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontractor_type[".add"] = true;
$tdatacontractor_type[".afterAddAction"] = 1;
$tdatacontractor_type[".closePopupAfterAdd"] = 1;
$tdatacontractor_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontractor_type[".list"] = true;
}



$tdatacontractor_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontractor_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontractor_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontractor_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontractor_type[".printFriendly"] = true;
}



$tdatacontractor_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontractor_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontractor_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontractor_type[".isUseAjaxSuggest"] = true;



												

$tdatacontractor_type[".ajaxCodeSnippetAdded"] = false;

$tdatacontractor_type[".buttonsAdded"] = false;

$tdatacontractor_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontractor_type[".isUseTimeForSearch"] = false;


$tdatacontractor_type[".badgeColor"] = "4682B4";


$tdatacontractor_type[".allSearchFields"] = array();
$tdatacontractor_type[".filterFields"] = array();
$tdatacontractor_type[".requiredSearchFields"] = array();

$tdatacontractor_type[".googleLikeFields"] = array();
$tdatacontractor_type[".googleLikeFields"][] = "contractor_type";
$tdatacontractor_type[".googleLikeFields"][] = "contractor_type_id";



$tdatacontractor_type[".tableType"] = "list";

$tdatacontractor_type[".printerPageOrientation"] = 0;
$tdatacontractor_type[".nPrinterPageScale"] = 100;

$tdatacontractor_type[".nPrinterSplitRecords"] = 40;

$tdatacontractor_type[".geocodingEnabled"] = false;










$tdatacontractor_type[".pageSize"] = 20;

$tdatacontractor_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontractor_type[".strOrderBy"] = $tstrOrderBy;

$tdatacontractor_type[".orderindexes"] = array();


$tdatacontractor_type[".sqlHead"] = "SELECT contractor_type,  	contractor_type_id";
$tdatacontractor_type[".sqlFrom"] = "FROM contractor_type";
$tdatacontractor_type[".sqlWhereExpr"] = "";
$tdatacontractor_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontractor_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontractor_type[".arrGroupsPerPage"] = $arrGPP;

$tdatacontractor_type[".highlightSearchResults"] = true;

$tableKeyscontractor_type = array();
$tableKeyscontractor_type[] = "contractor_type_id";
$tdatacontractor_type[".Keys"] = $tableKeyscontractor_type;


$tdatacontractor_type[".hideMobileList"] = array();




//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "contractor_type";
	$fdata["Label"] = GetFieldLabel("contractor_type","contractor_type");
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


	$tdatacontractor_type["contractor_type"] = $fdata;
		$tdatacontractor_type[".searchableFields"][] = "contractor_type";
//	contractor_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_type_id";
	$fdata["GoodName"] = "contractor_type_id";
	$fdata["ownerTable"] = "contractor_type";
	$fdata["Label"] = GetFieldLabel("contractor_type","contractor_type_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "contractor_type_id";

		$fdata["sourceSingle"] = "contractor_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type_id";

	
	
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


	$tdatacontractor_type["contractor_type_id"] = $fdata;
		$tdatacontractor_type[".searchableFields"][] = "contractor_type_id";


$tables_data["contractor_type"]=&$tdatacontractor_type;
$field_labels["contractor_type"] = &$fieldLabelscontractor_type;
$fieldToolTips["contractor_type"] = &$fieldToolTipscontractor_type;
$placeHolders["contractor_type"] = &$placeHolderscontractor_type;
$page_titles["contractor_type"] = &$pageTitlescontractor_type;


changeTextControlsToDate( "contractor_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contractor_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contractor_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contractor_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_type,  	contractor_type_id";
$proto0["m_strFrom"] = "FROM contractor_type";
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
	"m_strName" => "contractor_type",
	"m_strTable" => "contractor_type",
	"m_srcTableName" => "contractor_type"
));

$proto6["m_sql"] = "contractor_type";
$proto6["m_srcTableName"] = "contractor_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type_id",
	"m_strTable" => "contractor_type",
	"m_srcTableName" => "contractor_type"
));

$proto8["m_sql"] = "contractor_type_id";
$proto8["m_srcTableName"] = "contractor_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "contractor_type";
$proto11["m_srcTableName"] = "contractor_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "contractor_type";
$proto11["m_columns"][] = "contractor_type_id";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "contractor_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "contractor_type";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contractor_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contractor_type = createSqlQuery_contractor_type();


	
								;

		

$tdatacontractor_type[".sqlquery"] = $queryData_contractor_type;



$tdatacontractor_type[".hasEvents"] = false;

?>