@extends ('layout')

@section ('content')

    <form action="/registration">
        <button type="submit" class='button is-link'>Ga terug</button>
    </form>

    <form
        method="POST"
        action="/registration/{{ $registration->id }}/email"

        >@csrf
        <button type="submit" class='button is-link'>Kalender uitnodiging versturen</button>
    </form>

    <table class="table">
        <thead>
        <tr>
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
                <td>{{ $registration->voornaam }}</td>
                <td>{{ $registration->achternaam }}</td>
                <td>{{ $registration->geslacht }}</td>
                <td>{{ $registration->postcode }}</td>
                <td>{{ $registration->adres }}</td>
                <td>{{ $registration->stad }}</td>
                <td>{{ $registration->verwijzer }}</td>
                <td>{{ $registration->email }}</td>
            </tr>
        </tbody>
    </table>
    <form action="/registration/{{$registration->id}}/edit">
        <button type="submit" class='button is-link'>Aanpassen</button>
    </form>

@endsection
