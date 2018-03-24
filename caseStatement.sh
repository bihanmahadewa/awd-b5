#!/bin/bash


read -p "Enter number" m

case $m in
    1)
        echo 'Input is number 1'
        ;;
    2)
        echo 'Input is number 2'
        ;;
    3)
        echo 'Input is number 3'
        ;;
    *)
        echo "Default condition"
        ;;
esac
