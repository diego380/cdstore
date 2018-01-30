<div class="row">
	<div class="col s6 l6 m6 input-field">
		<input id="name" type="text" name="name" value="{{ isset($user->name) ? $user->name : old('name') }}" class="validate {{ $errors->has('name') ? ' invalid' : '' }}" required autofocus>
		<label for="name" data-error="{{ $errors->has('name') ? $errors->first('name') : null }}" >Nome</label>
	</div>
	<div class="col s6 l6 m6 input-field">
		<input id="last_name" type="text" name="last_name" value="{{ isset($user->last_name) ? $user->last_name : old('last_name') }}" class="validate {{ $errors->has('last_name') ? ' invalid' : '' }}" required autofocus>
		<label for="last_name" data-error="{{ $errors->has('last_name') ? $errors->first('last_name') : null }}" >Sobrenome</label>
	</div>
</div>

<div class="row">
	<div class="input-field col s4 m4 l4">
		<input id="cpf" type="text" name="cpf" value="{{ isset($user->cpf) ? $user->cpf : old('cpf') }}" class="cpf validate {{ $errors->has('cpf') ? ' invalid' : '' }}" required autofocus>
		<label for="cpf" data-error="{{ $errors->has('cpf') ? $errors->first('cpf') : null }}" >CPF</label>
	</div>

	<div class="input-field col s4 m4 l4">
		<input id="data_nascimento" type="text" name="data_nascimento" value="{{ isset($user->data_nascimento) ? $user->data_nascimento->format('m/d/Y') : old('data_nascimento') }}" class="validate {{ isset($user->data_nascimento) ? '' : 'date' }} {{ $errors->has('cpf') ? ' invalid' : '' }}" required autofocus>
		<label for="data_nascimento" data-error="{{ $errors->has('data_nascimento') ? $errors->first('data_nascimento') : null }}" >Data de nascimento</label>
	</div>

	<div class="input-field col s4 m4 l4">
		<input id="telefone_contato" type="text" name="telefone_contato" value="{{ isset($user->telefone_contato) ? $user->telefone_contato : old('telefone_contato') }}" class="phone_with_ddd validate {{ $errors->has('telefone_contato') ? ' invalid' : '' }}" required autofocus>
		<label for="telefone_contato" data-error="{{ $errors->has('telefone_contato') ? $errors->first('telefone_contato') : null }}" >Telefone</label>
	</div>
</div>


