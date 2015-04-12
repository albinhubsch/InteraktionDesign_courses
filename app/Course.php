<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'courses';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = ['id'];

	public $timestamps = true;

	/**
	 * Relation to reviews
	 * @return [type] [description]
	 */
	public function reviews()
	{
		return $this->hasMany('App\Review');
	}

	/**
	 * Relation to tags
	 * @return [type] [description]
	 */
	public function tags()
	{
		return $this->belongsToMany('App\Tag', 'course_tag', 'tag_id', 'course_id');
	}

}
