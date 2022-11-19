<?php 
/*

// Set User Name
git config --global user.name "Thales Rollo"

// Set E-mail
git config --global user.email "thalestgr@hotmail.com"

// Get User Name
git config user.name

// Get E-mail
git config user.email

// Create a repository
// Inside the folder
git init 

// Check status
git status

// Add file
git add filename

// Commit a single file
git commit filename -m "Message"

// Commit All
git commit -m "Message"

// Add and commit same time
git commit -am "Message"

// Tip: create an alias to simplify even more
git config --global alias.ac "commit -am"
git config --global alias.ac '!git add -A && git commit -m'
git ac "Message"

// Update the last message commit
git commit --amend -m "New message"


// Push to Github
git branch -M main
git remote add origin https://github.com/thalestgr/git_hub.git
git push -u origin main

// Push files from repository
git pull

// Clone project and create subfolder
git clone https://link 

// Clone project and don't create subfolder
git clone https://link .

// Check log
git log // q for exit
git log --graph --oneline --decorate

// Check for specifig changes
git log -S "string_to_search"

// Rollback
git status filename

// Revert to commit
git log // copy the hash
git revert paste_hash // will open the editor, type :q!
git revert HEAD // undo the last commit


// To ignore files, need to create a file named .gitignore, and then list all folders and files to ignore
.gitignore

// Return to last origin state !! DANGER
git reset --hard origin/main

// View branches
git branch
git branch -vv

// Create branch
git branch branch_name

// Switch branch
git checkout branch_name

// Create branch and switch
git checkout -b "branch_name"

// Delete a branch
git branch -d branch_name

// Delete branches no longer used (merged on remote repository, but exists in local machine)
git branch -vv // show branches
git remote update --prune 
git branch -vv // show branches
git branch --vv | awk '/: gone]/{print $1}' | xargs git branch -d

// Merge a branch
git merge branch_name

// Criando um stash
// To save a working in proccess
git stash

// Return a stash
git stash pop

// Return to specific stash
git stash list
git stash apply 0 (id)

// Show a stash
git stash show -p 0 (id)

// Create a tag (version)
git tag -a v1.0 -m "Primeira versao"

// Show version
git tag

// Show version details
git show v1.0

// Switch between tags
git checkout v1.0

// Push a tag to Github
git push origin v1.0

// Push all tags to Github
git push origin --tags

// Get all branches from repository
git fetch -a

// Improve perfomance
git gc

// Show a shortlog of commits
git shortlog

// Show differences between files
git diff 
git diff main
git diff HEAD: nomes.txt

// Show log from current repository
git reflog

*/