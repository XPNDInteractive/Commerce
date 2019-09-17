<?php

namespace App\Blocks;


class ProductsToolbarBlock implements Block
{
    protected $links = [];

    public function onLoad($page)
    {
        
       
        $this->addLink("Add New", "/admin/categories/create");
        $this->addLink("Categories", "/admin/categories/create");
        $this->addLink("Attributes", "/admin/categories/create");
        $this->addLink("Media", "/admin/categories/create");

        $page['blocks']['products toolbar']['links'] = $this->links;
        

        return $page;
    }

    protected function addLink($name, $url){
        $this->links[] = [
            "url" => $url,
            "name" => $name
        ];
    }

}