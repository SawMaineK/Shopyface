<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ErrorReport extends Model
{
    use SoftDeletes;

	public $table = "errorReports";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "package_name",
		"package_version",
		"phone_model",
		"android_version",
		"stacktrace",
		"send_email_1",
		"send_email_2"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "package_name" => "string",
		"package_version" => "string",
		"phone_model" => "string",
		"android_version" => "string",
		"stacktrace" => "string",
		"send_email_1" => "string",
		"send_email_2" => "string"
    ];

	public static $rules = [
	    "package_name" => "required",
		"package_version" => "required",
		"phone_model" => "required",
		"android_version" => "required"
	];

    

}
