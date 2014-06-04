<?php

Route::get('/', function()
{
    // Ini cuma buat kasi liat query yang di-execute
    Event::listen('illuminate.query', function($query){
        var_dump($query);
    });

    $posts = Post::select(['id'])
        ->with(['comments' => function($query){

            $query->select(['post_id', 'created_at']);

        }])->get();

    dd($posts->toArray());

});
