<form method="post" action="{{action('ArticleController@store')}}">
{!! csrf_field()!!}
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name" id="title" placeholder="Enter category name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Code</label>
        <textarea name="code" id="text" placeholder="enter category code"></textarea>
    </div>
</form>
