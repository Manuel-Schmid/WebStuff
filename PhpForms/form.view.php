<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SSP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1 class="title"> Einladung Galaxy Webservices</h1>
<div class="forms">
    <fieldset>
        <legend>Kontaktdaten</legend>

        <label>Name:</label>
        <input type="text"><br>

        <label>Telefon:</label>
        <input type="text" name="phone"><br>

        <label>Email:</label>
        <input type="email"><br>

    </fieldset>
    <fieldset>
        <legend>Anmeldung</legend>

        <label>Shuttle-Bus: </label>
        <input value="1" type="checkbox" name="shuttlebus"><br>

        <label>Anzahl Teilnehmende Ihrer Firma:</label>
        <input min="0" type="number" name="num_persons"><br>

        <label>In welchem Hotel möchten Sie übernachten?</label><br>
        <input type="radio" name="hotel" value="InterContinental Davos">InterContinental Davos<br>
        <input type="radio" name="hotel" value="Steinberger Grandhotel Belvédère">Steinberger Grandhotel Belvédère<br>

        <label>Was möchten Sie am Abend unternehmen?</label>
        <select name="activity">
            <option value="">Kein Abendprogramm</option>
            <option value="Billardturnier">Billardturnier</option>
            <option value="Bowlingturnier">Bowlingturnier</option>
            <option value="Weindegustation">Weindegustation</option>
            <option value="Asiatischer Kochkurs">Asiatischer Kochkurs</option>
            <option value="Tanzkurs für Webentwickler">Tanzkurs für Webentwickler</option>
            <option value="Ying &amp; Yang Yoga Einsteigerkurs">Ying &amp; Yang Yoga Einsteigerkurs</option>
        </select><br>

        <label>Haben Sie sonst noch einen Wunsch oder eine Bemerkung?</label>
        <textarea name="note" id="note" rows="3"></textarea><br>

    </fieldset>

    <input class="anmelden" type="submit" name="submit" value="Anmelden">

</div>
</body>
</html>