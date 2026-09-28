<php>
    $nom = "Anna";
    $edat_str = "20";
    $nota_float = 8.5;
    $aprovat = true;

    $edat = (int)$edat_str;
    echo $edat + $nota_float; //suma edat i nota
    echo $aprovat ? "Aprovat" : "No aprovat"; //comprova si està aprovat
    echo "<p>Nom: " . $nom . "</p><p>Edat: " . $edat . "</p><p>Nota: " . $nota_float . "</p><p>Suma edat + nota: " . ($edat + $nota_float) . "</p>";
</php>