<h1>Tutorials disponibles</h1>

<ul>
@foreach ($tutorials as $tutorial)
    <li>
        <a href="{{ route('tutorials.show', $tutorial->id) }}">{{ $tutorial->title }}</a>
    </li>
@endforeach
</ul>
