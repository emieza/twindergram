<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Usuaris</h1>
	<ul>
		@foreach( $users as $user )
			<li><b>{{$user->name}}</b> ({{$user->posts()->count()}} posts)
				<ol>
					@foreach( $user->posts as $post )
					<li>{{$post->text}}</li>
					@endforeach
				</ol>
			</li>
		@endforeach
	</ul>
</body>
</html>
