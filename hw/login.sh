#!/bin/bash
while  true
do
    read -p "username  : " username
    read -p "password  : " password
    USERNAME="$(cat users.txt | cut -d ':' -f1 )"
    PASSWORD="$(cat users.txt | cut -d ':' -f2 )"
    if [ $username = $USERNAME -a $password = $PASSWORD ]
    then
	clear
        bash items.sh
    else
        echo "Wrong Pass Try again"
    fi
done
