<?php

Route::get('/', function()
{

    Event::listen('illuminate.query', function($query){
        var_dump($query);
    });

    $posts = Post::select(['id'])
        ->with(['comments' => function($query){

        $query->select(['post_id', 'created_at']);

    }])->get();

    dd($posts->toArray());

});
