<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Test</title>
	</head>
	<body>
		<h2>Hola, soy test</h2>
		<ul>
		@foreach ($movies as $oneMovie)
			<li>
				{{ $oneMovie }}
				@unless($oneMovie == 'Up')
         	(es excelente películas)
        		@endunless
			</li>
		@endforeach
		</ul>

		<ul>
			@forelse($arrayVacio as $item)
    		{{-- Si array NO está vacío, entraríamos acá --}}
    		<li>{{ $item }}</li>
			@unless($item == 'Paz')
			(hola, no soy paz)
			@endunless
			@empty
    		{{-- Cuando array está vacía, se muestra esto (una sola vez) --}}
    		<li>La lista está vacía.</li>
			@endforelse
		</ul>
	</body>
</html>
