#!/bin/bash
echo "Home"
echo ""
echo "1. Show items"
echo "2. Add items"
echo "3. Exit"
read -p "Enter Option:: " option

case $option in
    1)
        clear
	bash showItems.sh
        ;;
    2)
        clear
	bash addItems.sh
        ;;
    3)
        exit
        ;;
    *)
        echo "Invalid Number Entered"
        ;;
esac

