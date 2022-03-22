<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllTutorial extends Model
{
    protected $table="_all_tutorial";

protected $fillable=[
'name', 'subject', 'image1', 'image2', 'image3',  'text1', 'text2', 'text3'];

}
