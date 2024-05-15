<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_dashboard  extends eventsBase
{
	function __construct()
	{
	// fill list of events

	}

//	handlers


		// dashboatd snippets function
	function event_Dashboard_snippet( &$header, &$icon )
	{
		$rs = DB::Query("SELECT COUNT(dbrfd.aldevindiv.aldevindiv_id) AS totelementos
FROM dbrfd.aldevindiv
WHERE dbrfd.aldevindiv.di_funcionario <> '800';");

$data = $rs->fetchAssoc();  // Obtén los datos fuera del bucle while

$header = "<h3><div><strong style='color: rgb(212, 231, 23);'>" . number_format($data["totelementos"], 0, ',', '.') . "</strong></div></h3>";
echo "<h5><strong style='color: rgb(255, 255, 255);'><em>Elementos en servicio</em></strong></h5>";
;
	}
		// dashboatd snippets function
	function event_Dashboard_snippet1( &$header, &$icon )
	{
		
$rs = DB::Query("SELECT
	count(dbrfd.almovinddia.almovinddia_id) as totlegalizados
FROM
	dbrfd.almovinddia
WHERE
	dbrfd.almovinddia.md_legalizado = 1 AND dbrfd.almovinddia.sys_status = 0;");

$data = $rs->fetchAssoc();  // Obtén los datos fuera del bucle while

$header = "<h3><div><strong style='color: rgb(46, 27, 228);'>" . number_format($data["totlegalizados"], 0, ',', '.') . "</strong></div></h3>";
echo "<h5><strong style='color: rgb(255, 255, 255);'><em>Elementos en bodega</em></strong></h5>";;
	}
		// dashboatd snippets function
	function event_Dashboard_snippet2( &$header, &$icon )
	{
		$rs = DB::Query("SELECT
    CONCAT_WS(' | ', COUNT(dbrfd.aldevindiv_sol.transact_id), dbrfd.aldevindiv_sol_type.sol_lnk) as numsol
FROM
    dbrfd.aldevindiv_sol
INNER JOIN
    dbrfd.aldevindiv_sol_type
ON 
    dbrfd.aldevindiv_sol.sol_type = dbrfd.aldevindiv_sol_type.sol_id
GROUP BY
    dbrfd.aldevindiv_sol.sol_type");

// Inicializar un array para almacenar los resultados
$resultados = array();

while ($data = $rs->fetchAssoc()) {
    // Almacenar cada resultado en el array
    $resultados[] = $data;
}

// Generar HTML a partir de los resultados almacenados
$html = "<h4><strong style='color: rgb(255, 255, 255);'>Solicitudes de movimiento</strong></h4>";
$html .= "<ul>";

foreach ($resultados as $resultado) {
    $html .= "<li>" . $resultado["numsol"] . "</li>";
}

$html .= "</ul>";

// Imprimir el HTML generado
echo $html;

;
	}

}
?>