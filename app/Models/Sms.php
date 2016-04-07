<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sms extends Model
{
    use SoftDeletes;

	public $table = "sms";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "mobiles",
		"message"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "mobiles" => "string",
		"message" => "string"
    ];

	public static $rules = [
	    "mobiles" => "required",
		"message" => "required"
	];

    

}
