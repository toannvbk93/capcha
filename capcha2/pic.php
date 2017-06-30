<?php session_start(); ?>
<?
	function createCapcha(){
	define('CHAR_COUNT', 8);
		$nums       = array(
			"5",
			"6",
			"7",
			"8",
			"d",
			"e",
			"1",
			"2",
			"3",
			"4",
			"f",
			"g",
			"h",
			"j",
			"k",
			"9",
			"a",
			"b",
			"c",
			"m",
			"n",
			"p",
			"q",
			"x",
			"y",
			"z",
			"A",
			"B",
			"C",
			"D",
			"r",
			"s",
			"t",
			"u",
			"v",
			"w",
			"E",
			"F",
			"G",
			"N",
			"P",
			"Q",
			"R",
			"S",
			"H",
			"J",
			"K",
			"L",
			"M",
			"T",
			"W",
			"X",
			"Y",
			"Z",
			"U",
			"V"
		);
		$random_key = array_rand($nums, CHAR_COUNT);
		$random     = "";
		for ($i = 0; $i < CHAR_COUNT; $i++) {
			$random = $random . $nums[$random_key[$i]];
		}
		$_SESSION['name'] = $random;
	}
	createCapcha();
	$random=isset($_SESSION['name']) ? $_SESSION['name'] : 'ERROR';
	header("Content-type: image/png");
	$im = @imagecreate(100, 40) or die("Cannot Initialize new GD image stream");
	$background_color = imagecolorallocate($im, 225, 225, 225);
	$text_color = imagecolorallocate($im, 0, 0, 0);
	imagestring($im, 5, 10, 10, $random, $text_color);
	imagepng($im);
	imagedestroy($im);
?>