@echo off

git add .
set /P commitMessage="Enter commit message: "
git commit -m "%commitMessage%"
git push
pause
exit