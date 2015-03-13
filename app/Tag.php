<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tags';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * Relation to courses
	 * @return [type] [description]
	 */
	public function courses()
	{
		return $this->belongsToMany('App\Course', 'course_tag');
	}

}
