<div class="col-md-4">
@foreach ($categories as $category)
<h2>{{$category->name}}</h2>
 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
 <p><a href="#" role="button" class="btn btn-default">View details »</a></p></div>
 @endforeach