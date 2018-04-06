#!/bin/bash
cat items.txt


    read -p "Press 1 to go back: " option
if [ $option == "1" ]
    then
	clear
        bash items.sh

    fi
