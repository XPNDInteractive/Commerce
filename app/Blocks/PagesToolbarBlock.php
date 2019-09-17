<?php

namespace App\Blocks;


class PagesToolbarBlock implements Block
{
    protected $links = [];

    public function onLoad($page)
    {
        
       
        $this->addLink("Add New", "/admin/pages/create/?" . $page['request']->getQueryString());
        $this->addLink("Menu", "/admin/menu");
       

        $page['blocks']['pages toolbar']['links'] = $this->links;
        

        return $page;
    }

    protected function addLink($name, $url){
        $this->links[] = [
            "url" => $url,
            "name" => $name
        ];
    }

}