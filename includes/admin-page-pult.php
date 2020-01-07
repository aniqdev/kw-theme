<?php



?>
<h1>Hallo World!!!</h1>
<div class="wrap">
	<h2><?php echo get_admin_page_title() ?></h2>

	<?php
	$report = '';
if (isset($_POST['optimize_db']) && $_POST['optimize_db'] === 'do-queries') {
	$report .= kw_optimize_db();

}
	?>

	<form method="POST">
		<p class="submit"><button type="submit" class="button button-primary" name="optimize_db" value="do-queries">Оптимизировать базу данных</button> <?= $report; ?></p>
	</form>
</div>
<?php


function kw_optimize_db()
{
	global $wpdb;

	// $wpdb->query( "UPDATE $wpdb->posts SET post_parent = 7 WHERE ID = 15 AND post_status = 'static'" );

	// $wpdb->query( "SET sql_mode = 'NO_ENGINE_SUBSTITUTION'" );

	$res = $wpdb->get_row( "show variables like 'sql_mode'", ARRAY_A );

	if ($res['Value']) {

		$arr = explode(',', $res['Value']);
		$arr = remove_array_value($arr, ['NO_ZERO_DATE','NO_ZERO_IN_DATE']);
		$str = implode(',', $arr);
		$wpdb->query( "SET sql_mode = '$str'" );


		$is_index = $wpdb->get_var( "SELECT COUNT(1) IndexIsThere FROM INFORMATION_SCHEMA.STATISTICS
						WHERE table_schema=DATABASE() AND table_name='$wpdb->posts' AND index_name='post_type';" );

		if (!$is_index) $wpdb->query( "ALTER TABLE $wpdb->posts ADD INDEX `post_type` (`post_type`);" );


		$is_index = $wpdb->get_var( "SELECT COUNT(1) IndexIsThere FROM INFORMATION_SCHEMA.STATISTICS
						WHERE table_schema=DATABASE() AND table_name='$wpdb->posts' AND index_name='post_date';" );

		if (!$is_index) $wpdb->query( "ALTER TABLE $wpdb->posts ADD INDEX `post_date` (`post_date`);" );


		$is_index = $wpdb->get_var( "SELECT COUNT(1) IndexIsThere FROM INFORMATION_SCHEMA.STATISTICS
						WHERE table_schema=DATABASE() AND table_name='$wpdb->posts' AND index_name='post_status';" );

		if (!$is_index) $wpdb->query( "ALTER TABLE $wpdb->posts ADD INDEX `post_status` (`post_status`);" );
	}

	// sa($res);

	return "<big>Done</big>";
}