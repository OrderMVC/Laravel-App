<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Orders</title>
    {{HTML::style('css/gumby.css')}}
    {{HTML::style('css/style.css')}}
</head>
<body>
<div class="content">
    <div class="row">
        <h1>{{HTML::linkroute('index', 'OrderMVC')}}</h1>
        @include('_header')
        @include('_alerts')
    </div>

    @yield('content')
</div>

{{HTML::script('js/libs/jquery-2.0.2.min.js')}}
<script>
	$('.dismiss').on('click', function()
	{
		$(this).parent('.alert').fadeOut(function()
		{
			$(this).remove();
		});
	});
</script>

</body>
</html>
