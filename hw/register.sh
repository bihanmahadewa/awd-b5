#!/bin/bash

    read -p "first Name  : " firstName
    read -p "last Name   : " lastName
    read -p "username    : " username
    read -p "password    : " password

    C="$username:$password"

   echo $C >> users.txt 

   echo "Registered Success"

  
  clear 
echo "Login to continue"
 bash login.sh

