<h1>{{ $tutorial->title }}</h1>
<p>{{ $tutorial->summary }}</p>

<h3>Passos:</h3>

@foreach (json_decode($tutorial->steps) as $step)
    <li>{{ $step }}</li>
@endforeach
