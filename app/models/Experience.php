<?php

class Experience extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'company', 'location', 'title', 'start_date', 'end_date', 'description', 'current_job'];

    public function user(){
        return $this->belongsTo('User', 'id');
    }
}