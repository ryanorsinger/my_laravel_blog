<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    protected $fillable = array('title', 'body');

    public static $rules = array(
        'title'      => 'required|min: 5|max:100',
        'body'       => 'required|max:10000'
    );
}
