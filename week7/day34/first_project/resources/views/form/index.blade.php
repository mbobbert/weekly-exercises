
<h1>Messages</h1>
<a href="{{action('FormController@create')}}">Create new</a>
</br>

<!--array of objects, in $message one row of the table-->
<?php foreach($messages as $message): ?>
   <b> {{$message->name}} </b>

   {{ $message->message}}
   </br>
    <hr>
<?php endforeach; ?>

<!--same code:-->
{{--@foreach ($messages as $message)--}}
    {{--<b> {{$message->name}} </b>--}}
   {{--<br/>--}}
   {{--{{ $message->message}}--}}
    {{--</hr>--}}
 {{--@endforeach--}}
