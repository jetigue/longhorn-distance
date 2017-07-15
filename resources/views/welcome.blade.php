@extends('layouts.main')

@section('content')



<div class="tile is-ancestor tile-container">

  <div class="tile is-vertical is-9">
    <div class="tile">

      <div class="tile is-parent">
        <article class="tile is-child box">
          <div class="content announcements">
            <h4>Summer Practice this W</h4>
            <p>Practice will be at Chattahoochee Pointe Park this week. Practice will begin at 6:30am and finish up at 8:00 am.</p>

            <h4>Sponsors</h4>
            <p>Please work on getting sponsors</p>

            <h4>Spirit Wear</h4>
            <p>Get your spirit wear</p>
          </div>
        </article>
      </div>

      <div class="tile is-4 is-vertical">
        <div class="tile">
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Quicklinks</p>
              <ul>
                <li><a href="{{url('/forms_handouts')}}">Forms and Handouts</a></li>
                <li><a href="{{url('/longhorn_5k')}}">Longhorn 5k</a></li>
                <li><a href="{{url('/river_run')}}">Lambert River Run</a></li>
                <li><a href="{{url('/boys_roster')}}">Boys' Roster</a></li>
                <li><a href="{{url('/girls_roster')}}">Girls' Roster</a></li>
                <li><a href="{{url('/coaches')}}">Coaches</a></li>
                <li><a href="{{url('/sponsors')}}">Our Sponsors</a></li>
              </ul>
            </article>
          </div>
        </div>
      </div>
    </div>

    <div class="tile">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Nine</p>
          <p class="subtitle">Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>

      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Nine</p>
          <p class="subtitle">Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>

      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Ten</p>
          <p class="subtitle">Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
    </div>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
      <div class="content">
        <p class="title">Upcoming Events</p>
        <p class="subtitle">Subtitle</p>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
          <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
        </div>
      </div>
    </article>
  </div>
</div>

<div class="tile is-ancestor">
  <div class="tile is-parent">
    <article class="tile is-child box">
      <p class="title">Twelve</p>
      <p class="subtitle">Subtitle</p>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
      </div>
    </article>
  </div>
  <div class="tile is-parent is-6">
    <article class="tile is-child box">
      <p class="title">Thirteen</p>
      <p class="subtitle">Subtitle</p>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
      </div>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
      <p class="title">Fourteen</p>
      <p class="subtitle">Subtitle</p>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
      </div>
    </article>
  </div>
</div>

@endsection



