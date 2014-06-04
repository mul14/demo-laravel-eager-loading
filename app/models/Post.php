<?php

class Post extends \Eloquent
{
    public function comments()
    {
        return $this->hasMany('Comment');

        // Atau bisa juga pakai ini
        // return $this->hasMany('Comment')->select(['id', 'post_id']);
    }
}

