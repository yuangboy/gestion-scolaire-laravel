@extends('layout')

@section("title","Accueil")

@section("content")
<div class="banner">
    <h2>Bienvenue sur le Portail Élève</h2>
  </div>

  <main>
    <h3>Un espace dédié aux élèves pour suivre leur parcours scolaire</h3>
    <p>Consultez vos notes, vos emplois du temps, vos devoirs et communiquez avec vos enseignants.</p>

    <div class="cta">
      <button onclick="window.location.href='{{ route('register') }}'">Créer un compte élève</button>
    </div>
  </main>



  <script>
    function toggleMenu() {
      const nav = document.getElementById('navLinks');
      nav.classList.toggle('active');
    }
  </script>


@endsection


