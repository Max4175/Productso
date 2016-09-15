<?php
 
namespace Max4175\Productso\Models;
 
use Kalnoy\Nestedset\Node;
 
class PrsoCategory extends Node
{
    protected $fillable = [
        'name', 'slug', '_lft', '_rgt', 'parent_id', 'note', 'desc', 'showtop', 'showside', 'showbottom', 'showcontent',
    ];
    
}