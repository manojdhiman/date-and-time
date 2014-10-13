//get the days between two dates




<?php
	// Set timezone
	date_default_timezone_set('UTC');
 
	// Start date
	$date = '2014-09-25';
	// End date
	$end_date = '2014-10-10';
	while (strtotime($date) <= strtotime($end_date)) {
		//echo "$date\n";
		$date = date ("Y-m-d", strtotime("+1 day", strtotime($date))); echo "</br>";
		
		
	}
	
	
	
	
// get the months between two years
	
	
	
	
	
$start    = new DateTime('2013-01-01');
$end      = new DateTime('2014-12-31');
$interval = DateInterval::createFromDateString('1 month');
$period   = new DatePeriod($start, $interval, $end);

foreach ($period as $dt) {
    echo $dt->format("Y-m-d") . "<br>\n";
}


//// get the weeks date 
$p = new DatePeriod(
		    new DateTime($curr_year.'-'.$curr_month.'-01'), 
		    new DateInterval('P1W'), 
		    new DateTime($curr_year2.'-'.$curr_month2.'-01')
			);
		foreach ($p as $w) {
		    $date_week= $w->format('Y-m-d');
		    $date_week_7= strtotime($date_week);
			$date_7 =date('Y-m-d',strtotime("+7 day",  $date_week_7));
			
		    $res2= $soil_model->get_weekly_lop_data($date_week,$date_7);
		    array_push($weakly_res,$res2);
		}
?>
