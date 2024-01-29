@extends ('layout')

@section ('content')
<h2>Update a registration</h2>

    <form method="POST" action="/registration/{{ $registration->id }}">
        @csrf
        @method('PUT')

        <div class="mt-4">
            <input type="radio" id="customer" name="function" value="customer">
            <label for="customer">Klant</label><br>
            <input type="radio" id="werknemer" name="function" value="werknemer">
            <label for="werknemer">Werknemer</label><br>
            <input type="radio" id="admin" name="function" value="admin">
            <label for="admin">Admin</label>
        </div>

        <div class="field">
            <label class="label" for="voornaam">Voornaam</label>
            <div class="control">
                <input class="input" type="text" name="voornaam" id="voornaam" value="{{ $registration->voornaam}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="achternaam">Achternaam</label>
            <div class="control">
                <input class="input" type="text" name="achternaam" id="achternaam" value="{{ $registration->achternaam}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="geslacht">Geslacht</label>
            <div class="control">
                <input class="input" type="text" name="geslacht" id="geslacht" value="{{ $registration->geslacht}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="postcode">Postcode</label>
            <div class="control">
                <input class="input" type="text" name="postcode" id="postcode" value="{{ $registration->postcode}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="adres">Adres</label>
            <div class="control">
                <input class="input" type="text" name="adres" id="adres" value="{{ $registration->adres}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="stad">Stad</label>
            <div class="control">
                <input class="input" type="text" name="stad" id="stad" value="{{ $registration->stad}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="verwijzer">Verwijzer</label>
            <div class="control">
                <input class="input" type="text" name="verwijzer" id="verwijzer" value="{{ $registration->verwijzer}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="text" name="email" id="email" value="{{ $registration->email}}">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/registration/{{$registration->id}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="button is-link">Delete</button>
    </form>
@endsection
