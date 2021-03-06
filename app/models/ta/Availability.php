<?php

class Availability extends Eloquent {

	protected $fillable = array('day','schedule');

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function getScheduleAttribute($value)
	{
		return unserialize($value);
	}

	public function setScheduleAttribute($value)
	{
		$this->attributes['schedule'] = serialize(array_map('intval', $value));
	}	
}