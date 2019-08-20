<?php
require('layout/header.php');
?>
    <main class="container">
        <div class="jumbotron">
            <h1 class="display-4">Mes jeux vidéo</h1>
            <p class="lead">Voici une petite interface toute simple (grâce à bootstrap) permettant de visualiser les
                jeux vidéo de ma base de données, mais aussi de les ajouter !</p>
        </div>
        <h1></h1>
        <div class="row">
            <div class="col-12 col-md-8">
                <a href="index.php?order=name" class="btn btn-primary">Trier par nom</a>&nbsp;
                <a href="index.php?order=editor" class="btn btn-info">Trier par éditeur</a>&nbsp;
                <!-- TODO (optionnel) n'afficher ce bouton que s'il y a un tri -->
                <a href="index.php" class="btn btn-dark">Annuler le tri</a><br>
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
                        <!-- TODO boucler sur le tableau $videogameList contenant tous les jeux vidéos
                    (et donc supprimer ces 2 lignes d'exemple) -->
                        <tr>
                            <td>-</td>
                            <td>Exemple</td>
                            <td>à faire</td>
                            <td>depuis</td>
                            <td>la DB</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Les chevaliers de Baphomet</td>
                            <td>Virgin Interactive</td>
                            <td>1996-09-24</td>
                            <td>PC</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

<?php
require('layout/footer.php');
?>

