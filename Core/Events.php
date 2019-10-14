<?php


namespace OxidEsales\mdmodule\Core;


class Events
{
 
    public static function onActivate()
    {
echo "activated";
       
    }

  
  
    public static function onDeactivate()
    {
       echo "deactivated";
    }
}
