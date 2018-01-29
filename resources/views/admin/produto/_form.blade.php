<div class="input-field">
	<input type="text" name="titulo" id="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : null }}">
	<label for="titulo">CD</label>
</div>
<div class="input-field">
  <input type="text" name="artista" id="artista" value="{{ isset($registro->artista) ? $registro->artista : null }}">
  <label for="artista">Artista</label>
</div>
<div class="input-field">
  <input type="text" name="genero" id="genero" value="{{ isset($registro->genero) ? $registro->genero : null }}">
  <label for="genero">Estilo</label>
</div>
<div class="input-field">
	<textarea type="text" name="descricao" id="descricao" class="materialize-textarea">{{ isset($registro->descricao) ? $registro->descricao : null }}</textarea>
	<label for="descricao">Descrição</label>
</div>
<div class="input-field">
	<input type="text" name="imagem" id="imagem" value="{{ isset($registro->imagem) ? $registro->imagem : null }}">
	<label for="imagem">Imagem</label>
</div>
<div class="input-field">
	<input type="text" name="valor" id="valor" value="{{ isset($registro->valor) ? $registro->valor : null }}">
	<label for="valor">Valor</label>
</div>
<div class="input-field">
    <div class="row">
        <label for="ativo">Ativo</label>
    </div>
    <div class="row">
      <input name="ativo" type="radio" id="ativo-s" value="S" {{ isset($registro->ativo) && $registro->ativo == 'S' ? ' checked="checked"' : null }} required="required" />
      <label for="ativo-s">Sim</label>
      <input name="ativo" type="radio" id="ativo-n" value="N" {{ isset($registro->ativo) && $registro->ativo == 'N' ? ' checked="checked"' : null }} required="required"  />
      <label for="ativo-n">Não</label>
    </div>
</div>