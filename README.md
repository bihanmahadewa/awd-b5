# awd-b5 Git Basics
## initialize git
  	$ git init

## Make a new file
  	$ touch <fileName>
  
## Git status
	$ git status


## Add it to git

	$ git add <fileName>

## commit the file

  $ git commit -am "Message"

## Open VI EditorTo Edit
  	$ a or i 
## To Exit
	$ :wq!
  
## Create new branch

	$ git checkout -b <branch Name>

  	$ git status


## Check branches in local  repo

	$ git branch

## Switch between branches

	$ git checkout <branch name>

## Merge two branches

	$ git merge <branch name>


## Add remote URL from git

	$ git remote add origin <URL>

## push the branch to repo
	$ git push origin <branchName>


## Clone repo from the remote 

	$ git clone <remote repo url> /local/location/

## Clone only one branch
	$ git clone -b <branch name> <remote repo url> /local/location/


## Fetch all branches in repo

	$ git fetch origin 


