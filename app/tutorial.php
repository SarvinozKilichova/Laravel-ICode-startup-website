<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutorial extends Model
{
protected $table="tutorials";

protected $fillable=[
'name', 'subject', 'images', 'text', 'icon', 'link'
];

}
