<?php

namespace App\Blocks;

use App\Field;
use App\FieldType;
use App\Page;

class AdminCreateBlock implements Block
{
    public function onLoad($page)
    {
        $page['blocks']['create']['action'] = $page['url'];

        $columns = Page::getTableColumns();

        
        foreach($columns as $column){

            if($column['name'] !== 'id' && 
                $column['name'] !== 'created_at' &&  
                $column['name'] !== 'updated_at' &&
                $column['name'] !== 'user id' ){

                if($column['type'] == "string"){
                    $page['blocks']['create']['fields'][$column['name']] = new Field();
                    $page['blocks']['create']['fields'][$column['name']]->type = FieldType::where('name', 'text')->first()->id;
                    $page['blocks']['create']['fields'][$column['name']]->name = $column['name'];
                    $page['blocks']['create']['fields'][$column['name']]->label = "Page " . ucfirst($column['name']);
                    $page['blocks']['create']['fields'][$column['name']]->class = "form-control";
                    $page['blocks']['create']['fields'][$column['name']]->text = "The title you want to give your page.  Defining good titles allow search engines to better understand and rank your page.";
                    $page['blocks']['create']['fields'][$column['name']]->value = $page['request']->input($column['name']);
                    $page['blocks']['create']['fields'][$column['name']]->rules = "required|min:8|max:191";
                    $page['blocks']['create']['fields'][$column['name']]->save();
    
                }

                if($column['type'] == "boolean"){
                    $page['blocks']['create']['fields'][$column['name']] = new Field();
                    $page['blocks']['create']['fields'][$column['name']]->type = FieldType::where('name', 'checkbox')->first()->id;
                    $page['blocks']['create']['fields'][$column['name']]->name = $column['name'];
                    $page['blocks']['create']['fields'][$column['name']]->label = "Page " . ucfirst($column['name']);
                    $page['blocks']['create']['fields'][$column['name']]->class = "form-control-check";
                    $page['blocks']['create']['fields'][$column['name']]->text = "The title you want to give your page.  Defining good titles allow search engines to better understand and rank your page.";
                    $page['blocks']['create']['fields'][$column['name']]->value = $page['request']->input($column['name']);
                    $page['blocks']['create']['fields'][$column['name']]->rules = "required|min:8|max:191";
                    $page['blocks']['create']['fields'][$column['name']]->save();
    
                }

                if($column['type'] == "blob"){
                    $page['blocks']['create']['fields'][$column['name']] = new Field();
                    $page['blocks']['create']['fields'][$column['name']]->type = FieldType::where('name', 'textarea')->first()->id;
                    $page['blocks']['create']['fields'][$column['name']]->name = $column['name'];
                    $page['blocks']['create']['fields'][$column['name']]->label = "Page " .ucfirst($column['name']);
                    $page['blocks']['create']['fields'][$column['name']]->class = "form-control";
                    $page['blocks']['create']['fields'][$column['name']]->text = "The title you want to give your page.  Defining good titles allow search engines to better understand and rank your page.";
                    $page['blocks']['create']['fields'][$column['name']]->value = $page['request']->input($column['name']);
                    $page['blocks']['create']['fields'][$column['name']]->rules = "required|min:8|max:191";
                    $page['blocks']['create']['fields'][$column['name']]->save();
    
                }
               
            }
           
        }
       
        
     

        if($page['request']->method() == "POST"){
            $rules = [];

            foreach($page['blocks']['create']['fields'] as $name => $field){
                $rules[$name] = $field->rules;
            }

           

            $validator = \Validator::make($page['request']->all(), $rules);

            if ($validator->fails()) {
                $page['blocks']['create']['fields'][$column['name']]['invalid'] = true;
                $page['blocks']['create']['fields'][$column['name']]['error'] = $validator->errors()->first($column['name']);
               
            }

            else{
                dd("passed");
            }

        }
        
        return $page;
    }

}

