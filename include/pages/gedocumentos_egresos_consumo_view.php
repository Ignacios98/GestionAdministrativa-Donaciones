<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'almovconsdia_egresos' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'master' => array( 'alasientos_gestion_e' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'as_nroasiento_fk',
'do_detalle',
'do_fechadoc',
'do_file',
'do_concepto',
'do_nrodoc',
'do_tipodoc',
'do_tipomov',
'doccnit',
'doclasedoc',
'docnomproveedor',
'docodregion',
'sys_user',
'resolfecha',
'resolnum' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'as_nroasiento_fk' => array( 'integrated_edit_field',
'edit_field_label',
'edit_field_tooltip' ),
'do_detalle' => array( 'integrated_edit_field1' ),
'do_fechadoc' => array( 'integrated_edit_field2' ),
'do_file' => array( 'integrated_edit_field3' ),
'do_concepto' => array( 'integrated_edit_field4' ),
'do_nrodoc' => array( 'integrated_edit_field5',
'edit_field_label1',
'edit_field_tooltip1' ),
'do_tipodoc' => array( 'integrated_edit_field6' ),
'do_tipomov' => array( 'integrated_edit_field7' ),
'doccnit' => array( 'integrated_edit_field8' ),
'doclasedoc' => array( 'integrated_edit_field9' ),
'docnomproveedor' => array( 'integrated_edit_field10' ),
'docodregion' => array( 'integrated_edit_field11' ),
'sys_user' => array( 'integrated_edit_field14' ),
'resolfecha' => array( 'integrated_edit_field15' ),
'resolnum' => array( 'integrated_edit_field16' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'top' => array( 'view_header' ),
'grid' => array( 'edit_field_label',
'integrated_edit_field',
'edit_field_tooltip',
'integrated_edit_field11',
'edit_field_label1',
'integrated_edit_field5',
'edit_field_tooltip1',
'integrated_edit_field7',
'integrated_edit_field9',
'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field6',
'integrated_edit_field8',
'integrated_edit_field10',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field16',
'integrated_edit_field15',
'integrated_edit_field14' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'view_header' => 'top',
'edit_field_label' => 'grid',
'integrated_edit_field' => 'grid',
'edit_field_tooltip' => 'grid',
'integrated_edit_field11' => 'grid',
'edit_field_label1' => 'grid',
'integrated_edit_field5' => 'grid',
'edit_field_tooltip1' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field14' => 'grid' ),
'itemLocations' => array( 'edit_field_label' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'edit_field_tooltip' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'edit_field_label1' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'edit_field_tooltip1' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c13' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c14' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c17' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c18' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c19' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'edit_field' => array( 'integrated_edit_field',
'integrated_edit_field5' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field16' ),
'edit_field_label' => array( 'edit_field_label',
'edit_field_label1' ),
'edit_field_tooltip' => array( 'edit_field_tooltip',
'edit_field_tooltip1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c5' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'edit_field_label',
'integrated_edit_field',
'edit_field_tooltip' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'edit_field_label1',
'integrated_edit_field5',
'edit_field_tooltip1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c17' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c18' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c19' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 2 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 7 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c8' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c17' ),
array( 'cell' => 'c18' ),
array( 'cell' => 'c19' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c9',
'colspan' => 3 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ),
array( 'cell' => 'c12' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c14' ),
array( 'cell' => 'c15' ),
array( 'cell' => 'c16' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c13',
'colspan' => 3 ) ) ) ),
'cells' => array( 'c5' => array( 'model' => 'c3',
'items' => array( 'edit_field_label',
'integrated_edit_field',
'edit_field_tooltip' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field11' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'edit_field_label1',
'integrated_edit_field5',
'edit_field_tooltip1' ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field7' ) ),
'c2' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field9' ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ),
'useFullWidth' => true ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ) ),
'c11' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ) ),
'c12' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10' ) ),
'c13' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ),
'useFullWidth' => true ),
'c14' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c15' => array( 'model' => 'c3',
'items' => array(  ) ),
'c16' => array( 'model' => 'c3',
'items' => array(  ) ),
'c17' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field16' ) ),
'c18' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field15' ) ),
'c19' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field14' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'as_nroasiento_fk',
'type' => 'edit_field',
'orientation' => 0,
'label' => array( 'field' => 'as_nroasiento_fk',
'table' => 'gedocumentos_ingresos',
'type' => 3 ),
'joined' => false,
'separated' => true,
'font-family' => 'Roboto',
'bold' => true ),
'integrated_edit_field1' => array( 'field' => 'do_detalle',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'do_detalle',
'table' => 'gedocumentos_egresos_consumo',
'type' => 3 ) ),
'integrated_edit_field2' => array( 'field' => 'do_fechadoc',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'do_fechadoc',
'table' => 'gedocumentos_egresos_consumo',
'type' => 3 ) ),
'integrated_edit_field3' => array( 'field' => 'do_file',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'do_concepto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'do_nrodoc',
'type' => 'edit_field',
'orientation' => 0,
'label' => array( 'field' => 'do_nrodoc',
'table' => 'gedocumentos_ingresos',
'type' => 3 ),
'joined' => false,
'separated' => true,
'font-family' => 'Roboto',
'bold' => true ),
'integrated_edit_field6' => array( 'field' => 'do_tipodoc',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'do_tipodoc',
'table' => 'gedocumentos_ingresos',
'type' => 3 ) ),
'integrated_edit_field7' => array( 'field' => 'do_tipomov',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'do_tipomov',
'table' => 'gedocumentos_ingresos',
'type' => 3 ) ),
'integrated_edit_field8' => array( 'field' => 'doccnit',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'doclasedoc',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'doclasedoc',
'table' => 'gedocumentos_ingresos',
'type' => 3 ) ),
'integrated_edit_field10' => array( 'field' => 'docnomproveedor',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'docnomproveedor',
'table' => 'gedocumentos_ingresos',
'type' => 3 ) ),
'integrated_edit_field11' => array( 'field' => 'docodregion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'sys_user',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'sys_user',
'table' => 'gedocumentos_egresos_consumo',
'type' => 3 ) ),
'integrated_edit_field15' => array( 'field' => 'resolfecha',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'resolnum',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'edit_field_label' => array( 'type' => 'edit_field_label',
'field' => 'as_nroasiento_fk',
'separated' => true ),
'edit_field_tooltip' => array( 'type' => 'edit_field_tooltip',
'field' => 'as_nroasiento_fk',
'separated' => true ),
'edit_field_label1' => array( 'type' => 'edit_field_label',
'field' => 'do_nrodoc',
'separated' => true ),
'edit_field_tooltip1' => array( 'type' => 'edit_field_tooltip',
'field' => 'do_nrodoc',
'separated' => true ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>