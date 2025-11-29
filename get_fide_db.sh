#!/bin/zsh
month=$(date +'%b')
year=$(date +'%y')
wget "https://ratings.fide.com/download/standard_${(L)month}25frl.zip"
unzip "standard_${(L)month}25frl.zip"
rm -f "standard_${(L)month}25frl.zip"
mv "standard_${(L)month}25frl.txt" "fide.txt"