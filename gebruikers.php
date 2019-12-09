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
        <div class="class col-6">
            <form action="./index.php?content=create" method="post">
                <div class="form-group">
                    <label for="firstname">Voornaam</label>
                    <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" name="firstname">
                    <small id="emailHelp" class="form-text text-muted">vul hier uw voornaam in</small>
                </div>
                <div class="form-group">
                    <label for="infix">Tussenvoegsel</label>
                    <input type="text" class="form-control" id="infix" aria-describedby="infixHelp" name="infix">
                    <small id="infixHelp" class="form-text text-muted">Het tussenvoegsel is optioneel</small>
                </div>
                <div class="form-group">
                    <label for="lastname">Achternaam</label>
                    <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" name="lastname">
                    <small id="lastnameHelp" class="form-text text-muted">vul hier uw achternaam in</small>
                </div>
                <button type="submit" class="btn btn-info btn-block">Verzenden</button>
            </form>
        </div>
        <div class="class col-6">
            <img src="./img/Kerstboom2.jpg" alt="Kerstboom" class="img-fluid">
        </div>
    </div>
    <div class="row"></div>
</class>