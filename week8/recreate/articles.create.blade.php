<form method="post" action="{{action('ArticleController@store')}}">
{!! csrf_field()!!}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter article title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Text</label>
        <textarea name="text" id="text" placeholder="Enter article text"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Categorie</label>
        <select name="category">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select>
    </div>