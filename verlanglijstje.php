<h1>Dingen die je doen denken aan kerst</h1>

<?php
    // $kerstspul_01 = "<p>Kerst ballen</p>";
    // $getal1 = 6;
    // $getal2 = 2;
    // $som = $getal1 + $getal2;

    // // echo "<p>Gingerbread man</p>";
    // // echo "<p>Kerstboom</p>";
    // // echo $kerstspul_01;
    // // echo "<p>het eerste getal is: " . $getal1 . " het tweede getal is: " . $getal2 . "</p>";
    // // echo "<p>De som is : " . $som . "</p>";

    // $tienduizend_uur = 10000/(365*8);
    // // echo "de 10.000 uur regel houdt in dat je: " . $tienduizend_uur . " jaar iedere dag 8 uur moet trainen";

    $card_image_01 = "./img/Gingerbreadman.jpg";
    $card_title_01 = "Gingerbreadman";
    $card_text_01 = "Gingerbread wordt vaak gegeten tijdens kerst";

    $card_image_02 = "./img/Krans.jpg";
    $card_title_02 = "Kerst Krans";
    $card_text_02 = "Kerst kransen worden vaak bij de voordeur opgehangen";

    $card_image_03 = "./img/Kalkoen.jpg";
    $card_title_03 = "Kalkoen";
    $card_text_03 = "Kalkoen wordt vaak gegeten tijdens kerst.. hmm erg lekker";

    $Suikerstok = array("./img/Suikerstok", 
                        "Suikerstok", 
                        "Suikerstokken zijn van suiker en lekker");

    $piek = array("./img/piek", 
                        "Piek", 
                        "Een piek zet je op de top van de kerstboom");
    ?>

<div class="row">
    <div class="col-12">
        <h3>Hieronder staan cards waarvan de inhoud door variabelen wordt gevuld</h3>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <div class="card">
            <img src="<?php echo $card_image_01; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $card_title_01;?></h5>
                <p class="card-text"><?php echo $card_text_01 ?></p>
                <a href="#" class="btn btn-primary">Druk hier!</a>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <img src="<?php echo $card_image_02; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $card_title_02;?></h5>
                <p class="card-text"><?php echo $card_text_02 ?></p>
                <a href="#" class="btn btn-primary">Druk hier!</a>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <img src="<?php echo $card_image_03; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $card_title_03;?></h5>
                <p class="card-text"><?php echo $card_text_03 ?></p>
                <a href="#" class="btn btn-primary">Druk hier!</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <div class="card">
            <img src="<?php echo $Suikerstok[0];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $Suikerstok[1];?></h5>
                <p class="card-text"><?php echo $Suikerstok[2];?></p>
                <a href="#" class="btn btn-primary">Druk hier!</a>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <img src="<?php echo $piek[0];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $piek[1];?></h5>
                <p class="card-text"><?php echo $piek[2];?></p>
                <a href="#" class="btn btn-primary">Druk hier!</a>
            </div>
        </div>
    </div>
</div>
