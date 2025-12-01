import time
import os
while True:
    if os.path.isfile("chess.zip"):
        os.remove("chess.zip")
    os.system("wget http://personal.local/chess.zip")
    time.sleep(60*60)