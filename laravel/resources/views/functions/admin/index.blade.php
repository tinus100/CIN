@extends('layout')

@section('content')
<h1 style="font-size: 30px; font-weight: bold; text-align: center;">Admin</h1>
<section class="section is-medium">

    <nav class="level">
        <div class="level-item has-text-centered">
            <a href="/events">
            <div class="box">
                <p class="heading">Agenda</p>
                <img src="/img/agenda-icon.png">
              </div>
            </a>
        </div>
        <div class="level-item has-text-centered">
            <a href="/admin">
            <div class="box">
                <p class="heading">Admin</p>
                <img src="/img/admin-icon.png" href="/admin">
              </div>
            </a>
        </div>
        <div class="level-item has-text-centered">
            <a href="/registration">
            <div class="box">
                <p class="heading">Klanten</p>
                <img src="/img/user-icon.png">
              </div>
            </a>
        </div>
      </nav>
  </section>

@endsection
