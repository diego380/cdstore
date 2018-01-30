@extends('layout')
@section('pagina_titulo', 'Usuários')

@section('pagina_conteudo')
<div class="container">
	
	<div class="row">
		<h3>Lista de usuários</h3><br>
		<div class="row right">
			<h6>Pesquisar usuários:</h6>
			<form action="{{ url('admin/user/search') }}" method="get">
				<div class="input-field col s4">
					<input type="text" name="chave" placeholder="Ex.: João">
				</div>
				<div class="input-field col s4">
					<select name="categoria">
						<option>Selecione...</option>
						<option value="name">Nome</option>
						<option value="email">Email</option>
						<option value="cpf">CPF</option>
					</select>
				</div>
				<div class="input-field col s4">
					<button class="btn deep-purple darken-1">OK</button>
				</div>
			</form>
		</div>
		@if (Session::has('admin-mensagem-sucesso'))
		<div class="card-panel green"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>

			@endif
			<table class="striped">
				<thead>
					<tr>
						<th class="center-align">Nome</th>
						<th class="center-align">Email</th>
						<th class="center-align">CPF</th>
						<th class="center-align">Ações</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($users as $user)
					<tr>
						<td class="center-align">{{ $user->name }}</td>
						<td class="center-align">{{ $user->email }}</td>
						<td class="center-align" data-mask="000.000.000-00">{{ $user->cpf }}</td>
						<td class="center-align">
							<a class="btn-flat tooltipped" href="{{ url('user/edit/'.$user->id) }}" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Editar usuário?">
								<i class="material-icons black-text">mode_edit</i>
							</a>
							<a class="btn-flat tooltipped" href="{{ url('admin/user/delete/'.$user->id) }}" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Excluir usuário?">
								<i class="material-icons black-text">delete</i>
							</a>
						</td>
					</tr>
					@empty
					<tr><h5>Não existem usuário cadastrados</h5></tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>

	@endsection