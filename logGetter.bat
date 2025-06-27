@echo off

set /P fileName="Enter fileName: "

git log > %fileName% + ".txt"

pause