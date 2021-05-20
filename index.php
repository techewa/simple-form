<?php
function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

$name = isset($_POST["name"]) ? valid_donnees($_POST['name']) : null;
$firstname = isset($_POST["firstname"]) ? valid_donnees($_POST['firstname']) : null;
$country = isset($_POST["country"]) ? $_POST['country'] : null;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="" class="col-6 pt-3 pl-3">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" id="firstname" placeholder="Prénom">
        </div>
        <select class="form-control" name="country">
            <optgroup label="Afrique">
                <option value="Afrique Du Sud">Afrique Du Sud</option>
                <option value="Algérie">Algérie</option>
                <option value="Angola">Angola</option>
                <option value="Bénin">Bénin</option>
                <option value="Botswana">Botswana</option>
                <option value="Burkina">Burkina</option>
                <option value="Burundi">Burundi</option>
                <option value="Cameroun">Cameroun</option>
                <option value="Cap-Vert">Cap-Vert</option>
                <option value="fricaine">République Centre-Africaine">fricaine">République Centre-Africaine</option>
                <option value="Comores">Comores</option>
                <option value="République Démocratique Du Congo">République Démocratique Du Congo</option>
                <option value="Congo">Congo</option>
                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Égypte">Égypte</option>
                <option value="Éthiopie">Éthiopie</option>
                <option value="Érythrée">Érythrée</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambie">Gambie</option>
                <option value="Ghana">Ghana</option>
                <option value="Guinée">Guinée</option>
                <option value="isseau">Guinée-Bisseau">isseau">Guinée-Bisseau</option>
                <option value="Guinée Équatoriale">Guinée Équatoriale</option>
                <option value="Kenya">Kenya</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libye">Libye</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Mali">Mali</option>
                <option value="Maroc">Maroc</option>
                <option value="Maurice">Maurice</option>
                <option value="Mauritanie">Mauritanie</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Namibie">Namibie</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Ouganda">Ouganda</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
                <option value="Séngal">Séngal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra">Sierra</option>
                <option value="Somalie">Somalie</option>
                <option value="Soudan">Soudan</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Tanzanie">Tanzanie</option>
                <option value="Tchad">Tchad</option>
                <option value="Togo">Togo</option>
                <option value="Tunisie">Tunisie</option>
                <option value="Zambie">Zambie</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </optgroup>
            <optgroup label="Amérique">
                <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                <option value="Argentine">Argentine</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Barbade">Barbade</option>
                <option value="Belize">Belize</option>
                <option value="Bolivie">Bolivie</option>
                <option value="Brésil">Brésil</option>
                <option value="Canada">Canada</option>
                <option value="Chili">Chili</option>
                <option value="Colombie">Colombie</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cuba">Cuba</option>
                <option value="République Dominicaine">République Dominicaine</option>
                <option value="Dominique">Dominique</option>
                <option value="Équateur">Équateur</option>
                <option value="États Unis">États Unis</option>
                <option value="Grenade">Grenade</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guyana">Guyana</option>
                <option value="Haïti">Haïti</option>
                <option value="Honduras">Honduras</option>
                <option value="Jamaïque">Jamaïque</option>
                <option value="Mexique">Mexique</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Panama">Panama</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Pérou">Pérou</option>
                <option value="Saint-Cristophe-et-Niévès">Saint-Cristophe-et-Niévès</option>
                <option value="Sainte-Lucie">Sainte-Lucie</option>
                <option value="Saint-Vincent-et-les-Grenadines">Saint-Vincent-et-les-Grenadines</option>
                <option value="Salvador">Salvador</option>
                <option value="Suriname">Suriname</option>
                <option value="Trinité-et-Tobago">Trinité-et-Tobago</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Venezuela">Venezuela</option>
            </optgroup>
            <optgroup label="Asie">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Arabie Saoudite">Arabie Saoudite</option>
                <option value="Arménie">Arménie</option>
                <option value="Azerbaïdjan">Azerbaïdjan</option>
                <option value="Bahreïn">Bahreïn</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Bhoutan">Bhoutan</option>
                <option value="Birmanie">Birmanie</option>
                <option value="Brunéi">Brunéi</option>
                <option value="Cambodge">Cambodge</option>
                <option value="Chine">Chine</option>
                <option value="Corée Du Sud">Corée Du Sud</option>
                <option value="Corée Du Nord">Corée Du Nord</option>
                <option value="Émirats Arabe Unis">Émirats Arabe Unis</option>
                <option value="Géorgie">Géorgie</option>
                <option value="Inde">Inde</option>
                <option value="Indonésie">Indonésie</option>
                <option value="Iraq">Iraq</option>
                <option value="Iran">Iran</option>
                <option value="Israël">Israël</option>
                <option value="Japon">Japon</option>
                <option value="Jordanie">Jordanie</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kirghistan">Kirghistan</option>
                <option value="Koweït">Koweït</option>
                <option value="Laos">Laos</option>
                <option value="Liban">Liban</option>
                <option value="Malaisie">Malaisie</option>
                <option value="Maldives">Maldives</option>
                <option value="Mongolie">Mongolie</option>
                <option value="Népal">Népal</option>
                <option value="Oman">Oman</option>
                <option value="Ouzbékistan">Ouzbékistan</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Philippines">Philippines</option>
                <option value="Qatar">Qatar</option>
                <option value="Singapour">Singapour</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Syrie">Syrie</option>
                <option value="Tadjikistan">Tadjikistan</option>
                <option value="Taïwan">Taïwan</option>
                <option value="Thaïlande">Thaïlande</option>
                <option value="Timor oriental">Timor oriental</option>
                <option value="Turkménistan">Turkménistan</option>
                <option value="Turquie">Turquie</option>
                <option value="Viêt Nam">Viêt Nam</option>
                <option value="Yemen">Yemen</option>
            </optgroup>
            <optgroup label="Europe">
                <option value="Allemagne">Allemagne</option>
                <option value="Albanie">Albanie</option>
                <option value="Andorre">Andorre</option>
                <option value="Autriche">Autriche</option>
                <option value="Biélorussie">Biélorussie</option>
                <option value="Belgique">Belgique</option>
                <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                <option value="Bulgarie">Bulgarie</option>
                <option value="Croatie">Croatie</option>
                <option value="Danemark">Danemark</option>
                <option value="Espagne">Espagne</option>
                <option value="Estonie">Estonie</option>
                <option value="Finlande">Finlande</option>
                <option value="France">France</option>
                <option value="Grèce">Grèce</option>
                <option value="Hongrie">Hongrie</option>
                <option value="Irlande">Irlande</option>
                <option value="Islande">Islande</option>
                <option value="Italie">Italie</option>
                <option value="Lettonie">Lettonie</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lituanie">Lituanie</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Ex-République Yougoslave de Macédoine">Ex-République Yougoslave de Macédoine</option>
                <option value="Malte">Malte</option>
                <option value="Moldavie">Moldavie</option>
                <option value="Monaco">Monaco</option>
                <option value="Norvège">Norvège</option>
                <option value="Pays-Bas">Pays-Bas</option>
                <option value="Pologne">Pologne</option>
                <option value="Portugal">Portugal</option>
                <option value="Roumanie">Roumanie</option>
                <option value="Royaume-Uni">Royaume-Uni</option>
                <option value="Russie">Russie</option>
                <option value="Saint-Marin">Saint-Marin</option>
                <option value="Serbie-et-Monténégro">Serbie-et-Monténégro</option>
                <option value="Slovaquie">Slovaquie</option>
                <option value="Slovénie">Slovénie</option>
                <option value="Suède">Suède</option>
                <option value="Suisse">Suisse</option>
                <option value="République Tchèque">République Tchèque</option>
                <option value="Ukraine">Ukraine</option>
                <option value="Vatican">Vatican</option>
            </optgroup>
            <optgroup label="Océanie">
                <option value="Australie">Australie</option>
                <option value="Fidji">Fidji</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Marshall">Marshall</option>
                <option value="Micronésie">Micronésie</option>
                <option value="Nauru">Nauru</option>
                <option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
                <option value="Palaos">Palaos</option>
                <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option>
                <option value="Salomon">Salomon</option>
                <option value="Samoa">Samoa</option>
                <option value="Tonga">Tonga</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Vanuatu">Vanuatu</option>
            </optgroup>
        </select>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>

<?php if(isset($name) || isset($firstname) || isset($country)): ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Pays</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $firstname; ?></td>
            <td><?php echo $country; ?></td>
        </tr>
        </tbody>
    </table>
<?php endif; ?>

</body>
</html>
