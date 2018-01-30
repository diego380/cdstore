<div class="row">
    <div class="input-field">
        <input id="email" type="email" name="email" value="{{ isset($user->email) ? $user->email : old('email') }}" class="validate {{ $errors->has('email') ? ' invalid' : '' }}" required autofocus>
        <label for="email" data-error="{{ $errors->has('email') ? $errors->first('email') : null }}" >E-mail</label>
    </div>
</div>