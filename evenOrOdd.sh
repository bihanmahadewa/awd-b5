#!/bin/bash

read -p "Input a number: " a

b=$(( $a % 2 ))

if [ $b -eq 0 ]
then
   echo "Even Number"
else
   echo "Odd Number"
fi


