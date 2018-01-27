@extends('layout')
@section('pagina_titulo', 'HOME')

@section('pagina_conteudo')

<div class="container">
	<br>
	<div class="row">
      	<img class="responsive-img col s12" src="/img/BANNER.png">
    </div>
	<div class="row">
	@foreach($registros as $registro)
		<div class="col s12 m6 l4">
			<div class="card medium">
				<div class="card-image">
					<img src="{{ $registro->imagem }}">
				</div>
				<div class="card-content">
					<span class="card-title grey-text text-darken-4 truncate" title="{{ $registro->titulo }} - {{ $registro->artista }}">{{ $registro->titulo }} - {{ $registro->artista }}</span>

					<p>R$ {{ number_format($registro->valor, 2, ',', '.') }}</p>
				</div>
				<div class="card-action">
					<a class="blue-text" href="{{ route('produto', $registro->id) }}">+ Informações</a>
				</div>
			</div>
		</div>
	@endforeach
	</div>
</div>

@endsection