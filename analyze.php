<?php
	$engines = [
		"Stockfish" => "/home/guest/Stockfish/src/stockfish",
		"BT4-1740" => "/home/guest/lc0/build/release/lc0 --weights=/home/guest/lc0/build/release/BT4-1740.pb.gz"
	];
	$engine = $engines[$_GET["engine"]];
	$fen = $_GET["fen"];
	$output = shell_exec("python3 analyze.py \"{$engine}\" {$fen}");
	print_r($output);
?>
