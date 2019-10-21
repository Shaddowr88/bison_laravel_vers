@extends('layouts/app')

@section('champ')

<form action="/inscription" method="post">
    @csrf
        <input type="text" name="Nom" placeholder="Nom">
        <input type="text" name="Prenom" placeholder="Prenom">
        <input type="number" name="Telephone" placeholder="Telephone">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        <input type="submit" value="M'inscrire">
    </form>
@endsection
