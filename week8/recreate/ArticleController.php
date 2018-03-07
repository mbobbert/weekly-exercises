<?php

public function create()
{
    $categories = Category::all();
    return view('articles/create', ['categories'=>$categories])

}

public function store()

    $newRow = new Article();
    $newRow->user_id = Auth::user()->id();
    $newRow->category = $request->input('category');
    $newRow->title = $request->input('title');
    $newRow->text = $request->input('text');
    $newRow->save();
