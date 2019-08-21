@extends('app')

@section('content')


        <div class="jumbotron">
            <h1 class="display-4">Mes jeux vidéo</h1>
            <p class="lead">Voici une petite interface toute simple (grâce à bootstrap) permettant de visualiser les
                jeux vidéo de ma base de données, mais aussi de les ajouter !</p>
        </div>
        <h1></h1>
        <div class="row">
            <div class="col-12">

                <a href="<?= route('add-videogame') ?>" class="btn btn-success">Ajout</a>
                
                <a href="<?= route('home', ["order" => "name"]) ?>" class="btn btn-primary">Trier par nom</a>&nbsp;

                <!-- https://laravel.com/docs/5.8/blade#components-and-slots -->
                <!-- Avec >Blade { { }} correspond à < ?= ?> -->
                <a href="{{ route('home', ["order" => "editor"]) }}" class="btn btn-info">Trier par éditeur</a>&nbsp;
                <!-- TODO (optionnel) n'afficher ce bouton que s'il y a un tri -->
                <a href="{{ route('home') }}" class="btn btn-dark">Annuler le tri</a>
                
                
                
                <br>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">&Eacute;diteur</th>
                            <th scope="col">Date de sortie</th>
                            <th scope="col">Console / Support</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($videogames as $videogame) 

                        <tr>
                            <td>{{ $videogame->id }}</td>
                            <td>{{ $videogame->name }}</td>
                            <td>{{ $videogame->editor }}</td>
                            <td>{{ $videogame->release_date }}</td>
                            <td>{{ $videogame->platform_id }}</td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
            
        </div>

        
@endsection
    