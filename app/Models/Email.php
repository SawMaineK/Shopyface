<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use SoftDeletes;

	public $table = "emails";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "send_email",
		"subject",
		"message"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "send_email" => "string",
		"subject" => "string",
		"message" => "string"
    ];

	public static $rules = [
	    "send_email" => "required",
		"subject" => "required",
		"message" => "required"
	];

    

}
