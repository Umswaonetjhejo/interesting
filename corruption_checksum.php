<?php
	/* --- Day 2: Corruption Checksum ---
		Name : Jonathan Musa Skosana
	*/
	
	//Prepare the puzzle input
	$puzzleInput = array(
		array(3458, 3471, 163, 1299, 170, 4200,	2425, 167, 3636, 4001, 4162, 115, 2859,	130, 4075, 4269),
		array(2777,	2712, 120, 2569, 2530, 3035, 1818, 32, 491, 872, 113, 92, 2526,	477, 138, 1360),
		array(2316,	35,	168, 174, 1404,	1437, 2631,	1863, 1127,	640, 1745, 171,	2391, 2587,	214, 193),
		array(197, 2013, 551, 1661, 121, 206, 203, 174, 2289, 843, 732, 2117, 360, 1193, 999, 2088),
		array(3925, 3389, 218, 1134, 220, 171, 1972, 348, 3919, 3706, 494, 3577, 3320, 239,	120, 2508),
		array(239, 947,	1029, 2024, 733, 242, 217, 1781, 2904, 2156, 1500, 3100, 497, 2498, 3312, 211),
		array(188, 3806, 3901, 261,	235, 3733, 3747, 3721, 267, 3794, 3814, 3995, 3004,	915, 4062, 3400),
		array(918, 63,	2854, 2799,	178, 176, 1037,	487, 206, 157, 2212, 2539, 2816, 2501, 927, 3147),
		array(186, 194, 307, 672, 208, 351, 243, 180, 619, 749, 590, 745, 671, 707, 334, 224),
		array(1854, 3180, 1345, 3421, 478, 214, 198, 194, 4942, 5564, 2469, 242, 5248, 5786, 5260, 4127),
		array(3780,	2880, 236, 330, 3227, 1252, 3540, 218, 213,458, 201, 408, 3240, 249, 1968, 2066),
		array(1188,	696, 241, 57, 151, 609, 199, 765, 1078, 976, 1194, 177, 238, 658, 860, 1228),
		array(903, 612, 188, 766, 196, 900, 62, 869, 892, 123, 226, 57, 940, 168, 165, 103),
		array(710, 3784, 83, 2087, 2582, 3941, 97, 1412, 2859, 117, 3880, 411, 102, 3691, 4366, 4104),
		array(3178, 219, 253, 1297, 3661, 1552, 8248, 678, 245, 7042, 260, 581, 7350, 431, 8281, 8117),
		array(837, 80, 95, 281, 652, 822, 1028, 1295, 101, 1140, 88, 452, 85, 444, 649, 1247),
	);
	
	//Declare a checkSum variable
	$checkSum = 0;
	
	//Get the length of the puzzle inputs (number of rows)
	$puzzleInputSize = sizeof($puzzleInput);
	
	//Loop to get the Largest and the Smallest numbers,
	//Get their differences and add them together to get checkSum value.
	for($z = 0; $z < $puzzleInputSize; $z++)
	{
		//Get the length of each array of puzzleInput array.
		$n = sizeof($puzzleInput[$z]);
		
		//Initialize the largest number.
		$largeNum = $puzzleInput[$z][0];
		
		//Initialize the smallest number.
		$smallNum = $puzzleInput[$z][0];
		
		for($r = 0; $r < $n; $r++)
		{
			//Check if the value of the input of the row is greater than the initial largest number,
			if($puzzleInput[$z][$r] > $largeNum)
			{
				//Replace the largest number with the new value appeared to be larger than the initial largest value.
				$largeNum = $puzzleInput[$z][$r];
			}			
			
			//Check if the value of the input of the row is smaller than the initial smollest number,
			if($puzzleInput[$z][$r] < $smallNum)
			{
				//Replace the smallest number with the new value appeared to be smaller than the initial smollest value.
				$smallNum = $puzzleInput[$z][$r];
			}
		}
		
		//Get the difference of the largest and smallest values.
		$diff = $largeNum - $smallNum;
		
		//Get the checkSum value.
		$checkSum = $checkSum + $diff;
	}
	
	echo "The checksum for the spreadsheet in my puzzle input is ".$checkSum;
?>