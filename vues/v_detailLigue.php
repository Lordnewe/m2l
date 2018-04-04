<div class="container" role="main">

    <p class="bg-success">
        Informations sur la ligue <?php echo $laLigue['nomLigue'] ?>
    </p>

    <ul>

        <div id="list-example" class="list-group">
            <li class="list-group-item">
                Adresse : <?php echo $laLigue['adrLigue']." ".$laLigue['cpLigue']." ".$laLigue['villeLigue'] ?>
            </li>

            <li class="list-group-item">
                Numéro : <?php echo $laLigue['numTelLigue'] ?>
            </li>

            <li class="list-group-item">
                Contact : <?php echo $laLigue['emailLigue'] ?>
            </li>

            <li class="list-group-item">
                Site web : <?php echo $laLigue['urlLigue'] ?>
            </li>

            <li class="list-group-item">
                Discipline olympique : <?php echo $laLigue['OlympLigue'] ?>
            </li>

        </div>
    </ul>

</div>

