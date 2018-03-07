<?php

public function index()
{
    $categories = Category::all();
    return view('categories/index', ['categories'=>$categories]);
}
public function store(Request $request)
{
    $newRow = new Category();
    $newRow->name = $request->input('name');
    $newRow->code = $request->input('code');
    $newRow->save();

}