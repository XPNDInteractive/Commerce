<?php

namespace App\Modules;

class PageModule implements Module
{
   public function onRequest($page){
       var_dump("MODULES LOADED");
        return $page;
   }

}

