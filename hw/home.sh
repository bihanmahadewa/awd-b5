#!/bin/bash
echo "1. Login"
echo "2. Register"
echo "3. Exit"
read -p "Enter Option:: " option

case $option in
    1)
        clear
	bash login.sh
        ;;
    2)
        clear
	bash register.sh
        ;;
    3)
        exit
        ;;
    *)
        echo "Invalid Number Entered"
        ;;
esac

