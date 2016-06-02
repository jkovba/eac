<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Jess' Circuit Generator - EAC</title>

<script type="text/javascript">

</script>

<style type="text/css">

</style>

</head>

<body>

<?php

	define("NUM_CIRCUITS", 3);
	define("NUM_UPPER_BODY_EXERCISES", 6);
	define("NUM_LOWER_BODY_EXERCISES", 6);
	define("NUM_CORE_EXERCISES", 3);
	define("NUM_CARDIO_EXERCISES", 3);

	$cardio_exercises = array("Burpees", "Jumping Jacks (light weights)", "Line Jump (frontal plane)", "Line Jump (saggital plane)", "Studio Bike (heavy)", "Studio Bike (hill)", "Studio Bike (sprint)", "Jack Squats", "Alternating Jog w/ Weight, Front Push Press");

	$leg_exercises = array("Squat w/ Overhead Tricep Extension (ratio)", "Sumo Squat w/ Bicep Curl", "Sumo Squat w/ Calf Raise", "Deadlift w/ Scapula Pinch", "Banded Side Squats", "Jack Squats", "Jump Squats", "Bridged Hamstring Curl w/ Weight Overhead", "Goblet Squat", "Suitcase Squat", "Hip Thrusters", "Deadlift w/ Upright Row", "Wall-sit w/ Med. Ball Extended", "Reverse Lunge w/ Lateral Raise", "Lateral Lunge w/ Front Raise", "Curtsy Lunge w/ Overhead Plate Hold", "Curtsy Lunge w/ Cross-body Punch", "Surrenders w/ Overhead Plate Hold", "Reverse Lunge Glides", "Lateral Lunge Glides", "Squat w/ Alternating Front Kick (plate out)", "Squat w/ Alternating Back Pulse (plate out)", "Squat w/ UL OH Push", "Lunge w/ KB Passthru");

	$arm_exercises = array("One-armed Burpees", "Superman Push-ups", "Plank Jacks", "Plank Push-ups", "Plank Row", "Front/Lateral Raise Alternating (standing)", "Bird Dog Crunch", "Bridged 	Chest Press", "Bridged Fly", "Medicine Ball Throwdown", "Static DL Reverse Fly (knees)", "Static DL Bent-over Row (knees)", "Static DL Tricep Extension (knees)", "1-leg Bridged Tricep Dips", "Superman Get-ups", "Mason Chops", "Simbas", "Mountain Climbers", "Thread the Needle", "Oblique Mountain Climbers", "Mountain Climber X", "TRX High Row", "TRW Low Row", "TRX Reverse Fly");

	$core_exercises = array("Bicycles", "Scissors", "Froggers", "Lemon Squeezers", "Lateral Bend Left", "Lateral Bend Right", "Leg Lowers", "Small Ball Crunch", "Alternating Heel Reach", "Russian Twists");

$leg_exercise_list = array();
$arm_exercise_list = array();
$core_exercise_list = array();
$cardio_exercise_list = array();
    
	// build an array of lower-body exercises
	for($i = 0; $i < NUM_LOWER_BODY_EXERCISES; $i++)
	{
		$leg_exercise_index = rand(1, count($leg_exercises));
  
		if (!in_array($leg_exercises[$leg_exercise_index - 1], $leg_exercise_list)) 
		{
			array_push($leg_exercise_list, $leg_exercises[$leg_exercise_index - 1]);
		}
  
		else  
		{
			// echo "Collision!";
			$i--;
			continue;
		}
	} // end lower-body for

	//-------------------------------------------------------------------------------

	// build an array of upper-body exercises
	for($i = 0; $i < NUM_UPPER_BODY_EXERCISES; $i++)
	{
		$arm_exercise_index = rand(1, count($arm_exercises));
  
		if (!in_array($arm_exercises[$arm_exercise_index - 1], $arm_exercise_list)) 
		{
			array_push($arm_exercise_list, $arm_exercises[$arm_exercise_index - 1]);
		}
  
		else  
		{
			// echo "Collision!";
			$i--;
			continue;
		}
	} // end upper-body for

	//-------------------------------------------------------------------------------

	// build an array of core exercises
	for($i = 0; $i < NUM_CORE_EXERCISES; $i++)
    {
		$core_exercise_index = rand(1, count($core_exercises));
  
		if (!in_array($core_exercises[$core_exercise_index - 1], $core_exercise_list)) 
		{
			array_push($core_exercise_list, $core_exercises[$core_exercise_index - 1]);
		}
  
		else  
		{
			// echo "Collision!";
			$i--;
			continue;
		}
 	} // end core for

	//-------------------------------------------------------------------------------	

	// build an array of cardio exercises
	for($i = 0; $i < NUM_CARDIO_EXERCISES; $i++)
    {
		$cardio_exercise_index = rand(1, count($cardio_exercises));
  
		if (!in_array($cardio_exercises[$cardio_exercise_index - 1], $cardio_exercise_list)) 
		{
			array_push($cardio_exercise_list, $cardio_exercises[$cardio_exercise_index - 1]);
		}
  
		else  
		{
			// echo "Collision!";
			$i--;
			continue;
		}
	} // end cardio for

	//-------------------------------------------------------------------------------	

	// output the exercise circuits (1 core, 1 cardio, 2 lower body, 2 upper body)
	for($i = 0; $i < NUM_CIRCUITS; $i++)
	{
		echo "<h1>Circuit #" . $i . "</h1>";
		echo "Core exercise: " . $core_exercise_list[$i] . "<br>";
		echo "Cardio exercise: " . $cardio_exercise_list[$i] . "<br>";
		
		for($j = 2 * $i; $j <= 2 * $i + 1; $j++)
		{
			echo "Lower-body exercise: " . $leg_exercise_list[$j] . "<br>";
		} // end lower-body for
		
		for($j = 2 * $i; $j <= 2 * $i + 1; $j++)
		{
			echo "Upper-body exercise: " . $arm_exercise_list[$j] . "<br>";
		} // end upper-body for	
	}

?>

</body>
</html>
