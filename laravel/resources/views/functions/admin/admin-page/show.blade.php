@extends ('layout')

@section ('content')

    <form action="/admin">
        <button type="submit" class='button is-link'>Ga terug</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <td>Functie</td>
            <td>Voornaam</td>
            <td>Achternaam</td>
            <td>Geslacht</td>
            <td>Postcode</td>
            <td>Adres</td>
            <td>stad</td>
            <td>Verwijzer</td>
            <td>Email</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $user->function }}</td>
            <td>{{ $user->voornaam }}</td>
            <td>{{ $user->achternaam }}</td>
            <td>{{ $user->geslacht }}</td>
            <td>{{ $user->postcode }}</td>
            <td>{{ $user->adres }}</td>
            <td>{{ $user->stad }}</td>
            <td>{{ $user->verwijzer }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        </tbody>
    </table>
    <form action="/registration/{{$user->id}}/edit">
        <button type="submit" class='button is-link'>Aanpassen</button>
    </form>

@endsection
