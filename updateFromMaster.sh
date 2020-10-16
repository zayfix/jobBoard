#!/bin/bash

if [ -z $1 ]; then
    echo "Veuillez entrer le nom de votre branche en paramètre."
    exit 1
else
    git checkout master
    git pull
    git checkout $1
    git merge master
    git push origin $1
fi