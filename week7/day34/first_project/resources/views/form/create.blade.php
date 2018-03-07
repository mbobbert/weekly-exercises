


<form method="POST" action="{{action('FormController@store')}}">

    <!--<input type="hidden" name="_token" value="{{csrf_token() }}"/>-->

    {!! csrf_field()!!}

    <php echo e($var); ?>
    htmlspecialchar()

    <input type="text" name="name" />
    <input type="text" name="message" />
    <input type="submit" />
</form>
