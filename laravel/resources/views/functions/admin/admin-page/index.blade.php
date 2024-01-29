@extends ('layout')

@section ('content')

    <form action="/">
        <button type="submit" class='button is-link'>Ga terug</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <td>Functie</td>
            <td>Voornaam</td>
            <td>Achternaam</td>
            <td>E-mail</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->function }}</td>
                <td>{{ $user->voornaam }}</td>
                <td>{{ $user->achternaam }}</td>
                <td>{{ $user->email }}</td>
                <td>    <form action="/admin/{{$user->id}}/edit">
                        <button class='button is-link' type="submit">Bewerken</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
