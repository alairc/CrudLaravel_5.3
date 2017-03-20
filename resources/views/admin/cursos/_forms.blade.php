<div class="input-field">
	<input type="text" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
	<label>Titulo</label>
</div>
<div class="input-field">
	<input type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
	<label>Descrição</label>
</div>
<div class="input-field">
	<input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}">
	<label>Valor</label>
</div>
<div class="file-field input-field">
	<div class="btn blue">
		<span>Imagem</span>
		<input type="file" name="imagem">
	</div>
	<div class="file-path-wrapper">
		<input type="text" class="file-path validate">
	</div>	
</div>

@if(isset($registro->imagem))
	<img width="150" src="{{ asset($registro->imagem) }}">
@endif

<div class="input-field">
	<input id="check-pubicar" type="checkbox" name="publicado" {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true">
	<label for="check-pubicar">Publicar?</label>
</div>
<br><br>






