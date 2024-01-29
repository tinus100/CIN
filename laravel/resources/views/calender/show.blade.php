@extends ('layout')

@section ('content')

    <form action="/events">
        <button type="submit" class='button is-link'>Ga terug</button>
    </form>



    <table class="table">
        <thead>
        <tr>
            <td>Title</td>
            <td>Personen</td>
            <td>Begin datum en tijd</td>
            <td>Eind datum en tijd</td>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $event->title }}</td>
            <td>{{ $event->ammount }}</td>
            <td>{{ $event->start }}</td>
            <td>{{ $event->end}}</td>

        </tr>
        </tbody>
    </table>
        <button type="submit" class='button is-link'>Afspraak annuleren</button>
        <button type="submit" class='button is-link'>Afspraak wijzigen</button>

@endsection
