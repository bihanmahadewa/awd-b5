#!/bin/bash	
    read -p "Item ID  : " itemID
    read -p "Item Name  : " itemName
    read -p "Date    : " date
    read -p "Quantity    : " qty

    C="\n ItemID: $itemID \n Item Name: $itemName \n Date: $date \n Quantity: $qty \n"


   echo -e $C >> items.txt 

   echo "Added  Success"

  
  clear
 bash items.sh
