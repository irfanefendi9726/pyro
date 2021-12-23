<!DOCTYPE html>
<html lang='en'>
<head></head>
<body>
<form method="POST" action="/pyro">
    @csrf
    <input name="nama" type="text">
    <input name="age" type="number"> 
    <input name="kerja" type="text">
    <button type="submit">Hantar</button>
</form>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>