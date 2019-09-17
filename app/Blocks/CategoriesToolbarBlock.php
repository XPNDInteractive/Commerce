<?php

namespace App\Blocks;


class CategoriesToolbarBlock implements Block
{
    protected $links = [];

    public function onLoad($page)
    {
        
       
        $this->addLink("Add New", "/admin/categories/create");
        $this->addLink("Filters", "/admin/categories/create");
        $this->addLink("Products", "/admin/categories/create");

        $page['blocks']['categories toolbar']['links'] = $this->links;
        

        return $page;
    }

    protected function addLink($name, $url){
        $this->links[] = [
            "url" => $url,
            "name" => $name
        ];
    }

}