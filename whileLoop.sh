#!/bin/sh
INPUT=hello
while [ "$INPUT" != "bye" ]
do
  echo "Please type anything (bye to bye)"
  read INPUT
  echo "You typed: $INPUT"
done


