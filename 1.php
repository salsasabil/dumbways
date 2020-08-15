<?php

$target_distance = 64500;
$time_passed = 0;
$distance_passed = 0;

// fungsi untuk jalan
function go(Int $speedPerSecond = null, Int $minute = null) {
	global $time_passed, $distance_passed;
	$second = $minute * 60;
	$distance_passed += $speedPerSecond * $second;
	$time_passed += $second;
}

// jalan di 23 menit awal, dengan kecepatan 3m/detik
go(3, 23);

// jalan di 12 menit berikutnya, dengan kecepatan 5m/detik
go(5, 12);

// cari sisa waktu yg dibutuhkan untuk menempuh sisa jarak apabila kecepatannya 2m/detik
$remaining_distance = $target_distance - $distance_passed;
$remaining_time = $remaining_distance / (2 * 60);

// jalan di sisa waktu yang sudah dihitung
go(2, $remaining_time);

// format waktu
$hours = floor($time_passed / 3600);
$mins = floor($time_passed / 60 % 60);
$secs = floor($time_passed % 60);

// tampilkan hasil
echo 'Total waktu: ' . $hours . ' jam, ' . $mins . ' menit, ' . $secs . ' detik.';
echo '<br>';
echo 'Total jarak ditempuh: '. $distance_passed . ' meter';