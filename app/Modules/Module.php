<?php 

namespace App\Modules;

interface Module{
    public function onRequest($page);
}