<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigModel extends Model
{

    protected $fillable = [
        'config_title',
        'config_footer',
        'config_descript',
        'config_key',
        'config_name',
        'config_auth',
        'config_contact',
        'config_email',
    ];

}
