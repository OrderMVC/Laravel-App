<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Orders</title>
    <link rel="stylesheet" href="https://rawgithub.com/GumbyFramework/Gumby/master/css/gumby.css" />
    {{HTML::style('css/style.css')}}
</head>
<body>
<div class="row">
    <h1>{{HTML::linkroute('index', 'OrderMVC')}}</h1>
    @include('_header')
    @include('_alerts')
</div>

@yield('content')

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
