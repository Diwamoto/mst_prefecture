<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class mst_prefecture extends Model
{
    const CREATED_AT = 'insert_date';
    const UPDATED_AT = 'update_date';
    
    protected $table = 'mst_prefecture';
    protected $primaryKey = 'prefecture_cd';
    protected $keyType = 'string';
}
