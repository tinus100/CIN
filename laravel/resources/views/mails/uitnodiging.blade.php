@component('mail::message')
    # Kledingbank Zeeland Agenda Uitnodiging

    Klik op de knop om een afspraak in te plannen voor de Kledingbank.

    @component('mail::button', ['url' => 'http://127.0.0.6/calender/create'])
        Kledingbank Zeeland
    @endcomponent
@endcomponent
