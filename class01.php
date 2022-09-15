<?php 

// Set User Name
git config --global user.name "thales.rollo"

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

// Rollback
git status filename

// To ignore files, need to create a file named .gitignore, and then list all folders and files to ignore
.gitignore












?>
