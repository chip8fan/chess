import sys
import chess.engine
import chess
board = chess.Board(sys.argv[2])
engine = chess.engine.SimpleEngine.popen_uci(sys.argv[1].split())
engine.configure({"UCI_ShowWDL": True})
print(engine.analyse(board, chess.engine.Limit(depth=1))['wdl'].white().expectation())
engine.quit()
