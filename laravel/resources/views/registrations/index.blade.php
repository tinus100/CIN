@extends ('layout')

@section ('content')

    <form action="/">
        <button type="submit" class='button is-link'>Ga terug</button>
    </form>
    <form action="/registration/create">
        <button type="submit" class='button is-link'>Klant aanmaken</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <td>Voornaam</td>
            <td>Achternaam</td>
            <td>Geslacht</td>
            <td>E-mail</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($registrations as $registration)
            <tr>
                <td>{{ $registration->voornaam }}</td>
                <td>{{ $registration->achternaam }}</td>
                <td>{{ $registration->geslacht }}</td>
                <td>{{ $registration->email }}</td>
                <td>    <form action="/registration/{{$registration->id}}">
                        <button class='button is-link' type="submit">Bekijk</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
