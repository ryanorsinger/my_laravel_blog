<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    protected $fillable = array('title', 'body');

    public static $rules = array(
        'title'      => 'required|min: 5|max:100',
        'body'       => 'required|max:10000'
    );

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug']  = $this->makeUniqueSlug($value);
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function isUniqueSlug($slug)
    {
        $posts = Post::all();
        foreach($posts as $post) {
            if($post->slug == $slug) {
                return false;
            }
        }

        return true;
    }

    public function makeUniqueSlug($value)
    {
        $slug = Str::slug($value);
        if($this->isUniqueSlug($slug)) {
            return $slug;
        } else {
            return uniqid() . '-' . $slug;
        }
    }
}
