<style type="text/css">
	* {
		margin: 0px;
	}
	canvas {
		background-color: black;
	}
	.hidden, img {
		display: none;
	}
</style>
<canvas id="canvas"></canvas>
<div class="hidden">
	<img id="board" src="brown.png">
	<img id="bB" src="bB.svg">
	<img id="bK" src="bK.svg">
	<img id="bN" src="bN.svg">
	<img id="bP" src="bP.svg">
	<img id="bQ" src="bQ.svg">
	<img id="bR" src="bR.svg">
	<img id="wB" src="wB.svg">
	<img id="wK" src="wK.svg">
	<img id="wN" src="wN.svg">
	<img id="wP" src="wP.svg">
	<img id="wQ" src="wQ.svg">
	<img id="wR" src="wR.svg">
</div>
<script>
	const canvas = document.getElementById("canvas");
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
	const width = canvas.width;
	const height = canvas.height;
	const ctx = canvas.getContext("2d");
	const board = document.getElementById("board");
	const bB = document.getElementById("bB");
	const bK = document.getElementById("bK");
	const bN = document.getElementById("bN");
	const bP = document.getElementById("bP");
	const bQ = document.getElementById("bQ");
	const bR = document.getElementById("bR");
	const wB = document.getElementById("wB");
	const wK = document.getElementById("wK");
	const wN = document.getElementById("wN");
	const wP = document.getElementById("wP");
	const wQ = document.getElementById("wQ");
	const wR = document.getElementById("wR");
	fen = "<?php echo $_GET["fen"]; ?>";
	function drawBoard(fen_string) {
		ctx.drawImage(board, 1/8*width, 1/8*height, 3/4*width, 3/4*height);
		ctx.fillStyle = "white";
		ctx.fillRect(7/8*width, 1/8*height, 1/32*width, 3/4*height);
		ctx.fillStyle = "red";
		ctx.fillRect(7/8*width, 31/64*height, 1/32*width, 1/32*height);
		rows = fen_string.split("/");
		x_count = 4;
		y_count = 4;
		for (let i = 0; i < rows.length; i++) {
			for (let c = 0; c < rows[i].length; c++) {
				if (isNaN(rows[i][c])) {
					piece_x = ((x_count/32)*width);
					piece_y = ((y_count/32)*height);
					piece_width = (3/32)*width;
					piece_height = (3/32)*height;
					if (rows[i][c] == "r") {
						ctx.drawImage(bR, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "n") {
						ctx.drawImage(bN, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "b") {
						ctx.drawImage(bB, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "q") {
						ctx.drawImage(bQ, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "k") {
						ctx.drawImage(bK, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "p") {
						ctx.drawImage(bP, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "R") {
						ctx.drawImage(wR, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "N") {
						ctx.drawImage(wN, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "B") {
						ctx.drawImage(wB, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "Q") {
						ctx.drawImage(wQ, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "K") {
						ctx.drawImage(wK, piece_x, piece_y, piece_width, piece_height);
					} else if (rows[i][c] == "P") {
						ctx.drawImage(wP, piece_x, piece_y, piece_width, piece_height);
					}
					x_count += 3;
				} else {
					x_count += parseInt(rows[i][c])*3;
				}
			}
			x_count = 4;
			y_count += 3;
		}
	}
	images = [board, bP, bN, bB, bR, bQ, bK, wP, wN, wB, wR, wQ, wK];
	for (let i = 0; i < images.length; i++) {
		images[i].onload = function () {
			console.log();
		}
	}
	drawBoard(fen);
</script>
