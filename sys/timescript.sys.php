<?php

function time_elapsed_string($time, $full = false) {
    	$now = new DateTime;
    	$ago = new DateTime($time);
    	$diff = $now->diff($ago);

    	$diff->w = floor($diff->d / 7);
    	$diff->d -= $diff->w * 7;

		$string = array(
					'y' => 'yr',
        			'm' => 'mon',
        			'w' => 'w',
        			'd' => 'd',
        			'h' => 'hr',
        			'i' => 'min',
					's' => 'sec',
    			);
	    foreach ($string as $k => &$v) {
	       	if ($diff->$k) {
				$v = $diff->$k . '' . $v . ($diff->$k > 1 ? '' : '');
			} else {
				unset($string[$k]);
	       	}
		}

	    if (!$full) $string = array_slice($string, 0, 1);
			return $string?implode(',',$string) . ' ago' : 'Just Now...';
	}