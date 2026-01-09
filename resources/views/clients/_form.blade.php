@csrf {{-- token de seguridad para formularios en Laravel --}} 

<label> nombre </label> <br>
<input type="text" name="nombre" value="{{ old('nombre', $client->nombre ?? '' ) }}"> <br>
@error('nombre') <div>{{ $message }}</div>
@enderror
<input type="email" name="email" value="{{ old('email', $client->email ?? '' ) }}"> <br>
@error('email') <div>{{ $message }}</div>
@enderror
<label>edad</label> <br>
<input type="number" name="edad" value="{{ old('edad', $client->edad ?? '' ) }}"> <br>
@error('edad') <div>{{ $message }}</div>
@enderror

<label>altura</label> <br>
<input type="number" name="altura" step="0.01" min="0" max="999.99" value="{{ old('altura', $client->altura ?? '' ) }}"> <br>
@error('altura') <div>{{ $message }}</div>
@enderror
<label>Peso</label> <br>
<input type="number" name="peso" step="0.01" min="0" max="999.99" value="{{ old('peso', $client->peso ?? '' ) }}"> <br>
@error('peso') <div>{{ $message }}</div>
@enderror

<label>Objetivo</label> <br>

<select name="objetivo"> 
    @php
    $objetivo = old('objetivo', $client->objetivo ?? '' );
    @endphp
    <option value="perder peso" {{ $objetivo == 'perder peso' ? 'selected' : '' }}>perder peso</option>
    <option value="ganar masa muscular" {{ $objetivo == 'ganar masa muscular' ? 'selected' : '' }}>ganar masa muscular</option>
    <option value="tonificar" {{ $objetivo == 'tonificar' ? 'selected' : '' }}>tonificar</option>
    <option value="mantener forma" {{ $objetivo == 'mantener forma' ? 'selected' : '' }}>mantener forma</option>
    <option value="aumentar resistencia" {{ $objetivo == 'aumentar resistencia' ? 'selected' : '' }}>aumentar resistencia</option>
    <option value="mejorar flexibilidad" {{ $objetivo == 'mejorar flexibilidad' ? 'selected' : '' }}>mejorar flexibilidad</option>
    <option value="recomposición corporal" {{ $objetivo == 'recomposición corporal' ? 'selected' : '' }}>recomposición corporal</option>
</select> <br>
@error('objetivo') <div>{{ $message }}</div>
@enderror

<label>Contraseña</label> <br>
<input type="password" name="password" value="{{ old('password') }}"> <br>
@error('password') <div>{{ $message }}</div>    
@enderror

<button type="submit">Enviar</button>