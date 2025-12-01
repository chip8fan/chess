file = open("fide.txt")
lines = [l.rstrip() for l in file]
file.close()
for line in lines:
	print(line.split()[5])
