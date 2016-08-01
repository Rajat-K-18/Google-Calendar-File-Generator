<?php

include "connection.php";

if(empty($_REQUEST['cal_name'])){
	$file_name="My_Semester_Calendar.ics"	;
}
else{
	$a=$_REQUEST['cal_name']; //Gets the name of the calendar
	$file_name="$a.ics";
	$file_name=str_replace(" ","_",$file_name);		// File name ,which will be downloaded as calendar_name.ics
}


$input ="BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Google Inc//Google Calendar 70.9054//EN
CALSCALE:GREGORIAN
METHOD:PUBLISH\n";
$input .= "X-WR-CALNAME:".$file_name."\n";
$input .= "X-WR-TIMEZONE:Asia/Calcutta\n";	

if(empty($_REQUEST['course'])){
	echo "<b>","No Course Selected","<br>";
	echo "<a href='http://localhost/calGen/'>Try Again</a>";
}
else{
	
	$name = $_REQUEST['course'];
	// Storing values corresponding to checking of checkboxes in an array
	foreach ($name as $color){		//	going though the array
	$qry = "select * from course,course_compact where course.code=course_compact.code and course_compact.id='$color'" or die("Error in db access.." . mysqli_error($link));
	$result = mysqli_query($link, $qry); 
	while($row=mysqli_fetch_row($result)){
		$event_date = date('Ymd');
		$current_day_index = date('N',strtotime($event_date));
		$index_of_day = ($row[6] - $current_day_index);
		
		$event_date = strtotime("+$index_of_day day");

		$input .= "BEGIN:VEVENT\n";
		$input .= "DTSTART:".date('Ymd',$event_date).'T'.date('His',strtotime($row[3])-19800).'Z'."\n";	// Event start time 
		$input .= "DTEND:".date('Ymd',$event_date).'T'.date('His',strtotime($row[4])-19800).'Z'."\n";	// Event end time
		$input .= "DTSTAMP:".date('Ymd',$event_date).'T'.date('His',strtotime($row[3]))."\n";
		$input .= "UID:". date('Ymd',$event_date).'T'.date('His',strtotime($row[3]))." ".date('His',strtotime($row[4])).rand()."\n"; // User ID
		$input .= "LOCATION:IIT ROPAR\n";
		$input .= "RRULE:FREQ=WEEKLY\n";
		$input .= "SUMMARY:".$row[2]."\n";	// Summary of the event
		$input .= "END:VEVENT\n";
		} 
	}	 
	$input .= "END:VCALENDAR";	

	//Headers required to download the file
	header('Content-type: text/calendar; charset=utf-8');
	header('Content-Disposition: attachment; filename='.$file_name);
	echo $input;
}

?>


