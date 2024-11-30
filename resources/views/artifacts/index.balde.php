@foreach($artifacts as $artifact)
    <div>
        <h3>{{ $artifact->name }}</h3>
        <p>{{ $artifact->discovery_time }}</p>
        <p>{{ $artifact->code }}</p>
        <a href="{{ url('artifacts/'.$artifact->id.'/edit') }}">Edit</a>
        <form action="{{ url('atifactss/'.$artifact->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach