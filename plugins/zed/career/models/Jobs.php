<?php namespace Zed\Career\Models;

use Model;

/**
 * Model
 */
class Jobs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zed_career_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
