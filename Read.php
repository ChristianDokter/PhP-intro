<?php

// dit zijn de benodige gegevens voor het contact maken met de mysqlserver
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "kerstverlanglijstje";

// we gaan met de functionele mysqli_connect() contact maken met de mysqlserver
$conn = mysqli_connect($servername, $username, $password, $databasename);


$sql = "SELECT * FROM `users`";

//Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt
$result = mysqli_query($conn, $sql);



?>
<class class="container">
    <div class="row">
        <div class="class col-6">
            <div class="jumbotron">
                <h1 class="display-4">Kerst verlanglijstje</h1>
                <p class="lead">De kerstman maakt al je dromen waar</p>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="class col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Tussenvoegsel</th>
                        <th scope="col">Achternaam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    //de while loop geeft alle gegevens weer uit de tabel users
                    while ($record = mysqli_fetch_assoc($result)){
                        echo "<tr><th scope='row'>" . $record["id"] . "</th><td>" . $record["firstname"] . "</td><td>" . $record["infix"] . "</td><td>" . $record["lastname"] . "</td></tr>" ;
                    }

                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row"></div>
</class>