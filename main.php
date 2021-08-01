<?php
function projectedEarnings($data, $days) {
	$total_capital = 0;
	$timestamps = [];
	$amounts = [];
	foreach ($data as $k=>$i) {
		$total_capital += $i["amount"];
		foreach ($data as $v=>$j) {
			if ($k != $v) {
			    array_push($timestamps, abs($j["timestamp"] - $i["timestamp"]));
			    array_push($amounts, $i["amount"]);
			}
		}
	}
	$average_numerator = array_sum($amounts) / count($amounts);
	$average_denominator = (array_sum($timestamps) / count($timestamps))/86400;
	$rate_per_day = ($average_numerator / $average_denominator);
	function arithmetic_progression($a, $n, $d) {
		return $a + ($n-1) * $d;
	}
	$ap = arithmetic_progression($total_capital, $days, $rate_per_day);
	return round($ap);
}
//projectedEarnings([["amount"=>5000, "timestamp"=>1627795603],["amount"=>6000, "timestamp"=>1627799203],["amount"=>6000, "timestamp"=>1627810003],["amount"=>6000, "timestamp"=>1627813603],["amount"=>6000, "timestamp"=>1627817203],["amount"=>6000, "timestamp"=>1627824403]], 30);
?>