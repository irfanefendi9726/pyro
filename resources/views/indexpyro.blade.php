<!DOCTYPE html>
<html lang='en'>
<a href="/pyro/create">Create New Pyhronic</a>
 
<h1>List of pyrokinetic</h1>
<ul>
@foreach ($pyros as $pyro)
    <li><a href="/pyro/{{$pyro->id}}">nama: {{ $pyro->nama }}</a>, umur: {{ $pyro->age }} , kerja:{{$pyro->kerja}}</li>
@endforeach
</ul>
</html>