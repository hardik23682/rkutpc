// working date compare 
<?php
				$originalDate = $row->drive_date;
				$datetime1 =date_create($originalDate);
				$datetime2 =date_create('2016-10-13');
				$interval = date_diff($datetime1, $datetime2);
				if($interval->format('%R%a') >= 0)
				{
					echo "present";
				}
				else if($interval->format('%R%a') < 0)
				{
					echo "past";
				} 
?>
