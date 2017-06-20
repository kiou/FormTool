<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1;">
	<title>Form tool</title>
	<link href="css/app.css" rel="stylesheet" type="text/css">
</head>

<body>



    <h1>Form Tool</h1>

    <form action="#" method="post">

        <!-- Simple checkbox -->
        <div class="form-group">
            <p><span class="ft-checkbox" data-ft="exemple1"></span> <label>Simple checkbox</label></p>

            <input type="checkbox" name="exemple1" data-ft="exemple1" class="ft-hidden">
        </div>

        <!-- Multiple checkbox -->
        <div class="form-group">
            <label>Multiple checkbox</label>
            <p><span class="ft-checkbox" data-ft="exemple2"></span> Multiple 1 </p>
            <p><span class="ft-checkbox" data-ft="exemple3"></span> Multiple 2</p>

            <input type="checkbox" name="tata[]" data-ft="exemple2" class="ft-hidden">
            <input type="checkbox" name="tata[]" data-ft="exemple3" class="ft-hidden">
        </div>

        <!-- Checkbox couleurs -->
        <div class="form-group">
            <label>Checkbox couleurs</label>
            <p><span class="ft-checkbox" data-ft="exemple4"></span> Gris </p>
            <p><span class="ft-checkbox rouge" data-ft="exemple5"></span> Rouge </p>
            <p><span class="ft-checkbox vert" data-ft="exemple6"></span> Vert </p>

            <input type="checkbox" name="exemple4" data-ft="exemple4" class="ft-hidden">
            <input type="checkbox" name="exemple5" data-ft="exemple5" class="ft-hidden">
            <input type="checkbox" name="exemple6" data-ft="exemple6" class="ft-hidden">
        </div>

        <!-- Switcher radio -->
        <div class="form-group">
            <label>Simple radio</label>
            <p>
                <span class="ft-radio-switch" data-ft="exemple7"></span>

                <input class="ft-hidden" type="radio" name="exemple7" data-ft="exemple7" value="0" checked>
                <input class="ft-hidden" type="radio" name="exemple7" data-ft="exemple7" value="1">
            </p>
        </div>

        <!-- Multiple radio -->
        <div class="form-group">
            <label>Multiple radio</label>
            <p><span class="ft-radio checked" data-ft-groupe="groupe1" data-ft="exemple8"></span> Radio 1</p>
            <p><span class="ft-radio" data-ft-groupe="groupe1" data-ft="exemple9"></span> Radio 2</p>
            <p><span class="ft-radio" data-ft-groupe="groupe1" data-ft="exemple10"></span> Radio 3</p>
            <p><span class="ft-radio" data-ft-groupe="groupe1" data-ft="exemple11"></span> Radio 4</p>

            <input class="ft-hidden" type="radio" name="exemple8" data-ft="exemple8" value="1" checked>
            <input class="ft-hidden" type="radio" name="exemple8" data-ft="exemple9" value="2">
            <input class="ft-hidden" type="radio" name="exemple8" data-ft="exemple10" value="3">
            <input class="ft-hidden" type="radio" name="exemple8" data-ft="exemple11" value="4">
        </div>

        <!-- Radio couleurs -->
        <div class="form-group">
            <label>Radio couleurs</label>
            <p><span class="ft-radio checked" data-ft-groupe="groupe2" data-ft="exemple12"></span> Gris</p>
            <p><span class="ft-radio rouge" data-ft-groupe="groupe2" data-ft="exemple13"></span> Rouge</p>
            <p><span class="ft-radio vert" data-ft-groupe="groupe2" data-ft="exemple14"></span> Vert</p>

            <input class="ft-hidden" type="radio" name="exemple12" data-ft="exemple12" value="1" checked>
            <input class="ft-hidden" type="radio" name="exemple12" data-ft="exemple13" value="2">
            <input class="ft-hidden" type="radio" name="exemple12" data-ft="exemple14" value="3">
        </div>

        <!-- Input files -->
        <div class="form-group">
            <label>Input files</label>
            <p><span class="ft-file" data-ft="exemple15"><i class="fa fa-upload"></i> Choisir un fichier</span></p>
            <input class="ft-hidden" type="file" name="exemple15" data-ft="exemple15">
        </div>

        <!-- Select -->
        <div class="form-group">
            <label>Select</label><br>
            <div class="ft-select" data-ft="exemple16">
                <span class="ft-select-default">Choisir une catégorie </span>
                <div class="ft-select-options">
                    <span data-ft-value="">Choisir une catégorie</span>
                    <span data-ft-value="1">Bonjour</span>
                    <span data-ft-value="2">Salut</span>
                    <span data-ft-value="3">Je suis toi</span>
                </div>
            </div>

            <input type="text" class="ft-hidden" name="exemple16" data-ft="exemple16">
        </div>

    </form>

	<script type="text/javascript" src="js/jquery/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>