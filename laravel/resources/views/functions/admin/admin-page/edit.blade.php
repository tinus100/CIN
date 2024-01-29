@extends ('layout')

@section ('content')
    <h2>Update een medewerker/admin</h2>

    <form method="POST" action="/admin/{{ $user->id }}">
        @csrf
        @method('PUT')

        <div class="mt-4">
            <input type="radio" id="werknemer" name="function" value="werknemer">
            <label for="werknemer">Werknemer</label><br>
            <input type="radio" id="admin" name="function" value="admin">
            <label for="admin">Admin</label>
        </div>

        <div class="field">
            <label class="label" for="voornaam">Voornaam</label>
            <div class="control">
                <input class="input" type="text" name="voornaam" id="voornaam" value="{{ $user->voornaam}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="achternaam">Achternaam</label>
            <div class="control">
                <input class="input" type="text" name="achternaam" id="achternaam" value="{{ $user->achternaam}}">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/admin/{{$user->id}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="button is-link">Delete</button>
    </form>
@endsection
