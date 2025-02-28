<?php

namespace App\Enums;


enum PermissionsEnum: string 
{
   //Accept vendors
   //Buy products
   //Sell products
   
   case ApproveVendors = 'ApproveVendors';
   case BuyProducts = 'BuyProducts';
   case SellProducts = 'SellProducts';
}
