<form action="analyze.php" method="get">
	<label>FEN: </label><input type="text" name="fen" required><br>
	<label>Engine: </label>
	<select name="engine" required>
		<option value="Stockfish">Stockfish</option>
		<option value="BT4-1740">BT4-1740</option>
	</select><br>
	<input type="submit" value="Analyze FEN">
</form>
