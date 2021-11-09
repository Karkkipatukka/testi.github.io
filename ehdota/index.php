<!DOCTYPE html>

<html lang="fi">

<head>

  <title>Ehdota tarinan osia | Juonigeneraattori v2 – Luo tarinaasi juonen</title>

    <meta name="description" content="Täällä pystyt ehdottamaan uusia adjektiiveja, päähenkilöitä ja niiden kuvailuja, tärkeitä osia, tapahtumapaikkoja sekä bonustehtäviäkin!">

    <meta property="og:title" content="Ehdota tarinan osia | Juonigeneraattori v2 – Luo tarinaasi juonen">

    <meta property="og:site_name" content="Juonigeneraattori v2">

    <meta property="og:url" content="https://www.juonigeneraattori.com/ehdota/">

    <meta property="og:description" content="Täällä pystyt ehdottamaan uusia adjektiiveja, päähenkilöitä ja niiden kuvailuja, tärkeitä osia, tapahtumapaikkoja sekä bonustehtäviäkin!">

    <meta property="og:image" content="https://www.juonigeneraattori.com/images/square-v2.jpg">

    <meta property="og:type" content="website">

    <meta property="og:locale" content="fi-FI">

	<link rel="icon" href="/favicon/juonig/favicon.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link rel="apple-touch-icon" href="/favicon/juonig/apple-touch-icon.png">

	<meta name="theme-color" content="#7B68EE">
	<!--↑↑↑ Chrome, Firefox OS & Opera ↑↑↑-->

	<meta name="msapplication-navbutton-color" content="#7B68EE">
    <!--↑↑↑ Windows ↑↑↑-->

	<meta name="apple-mobile-web-app-capable" content="yes">

	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<!--↑↑↑ iOS Safari ↑↑↑-->

    <style>

    	body {
    	    margin: 0px;
			background-color: MediumSlateBlue;
			text-align: center;
		}

		a:link {
		    color: MediumSlateBlue;
			background-color: transparent;
			text-decoration: none;
		}

		a:visited {
			color: BlueViolet;
			background-color: transparent;
		    text-decoration: none;
		}

		a:hover {
			color: DodgerBlue;
			background-color: transparent;
			text-decoration: underline;
		}

		a:active {
			color: SlateBlue;
		    background-color: transparent;
			text-decoration: underline;
		}

		a, span {
            font-weight: 700;
        }

		h1, h2, h3 {
		    text-align: center;
	        margin-bottom: 0px;
		}

        label {
            display: block;
            text-align: center;
            color: White;
            font-size: 25px;
            font-weight: 700;
            margin-top: 60px;
        }

        footer {
		    display: block;
		    width: 100%;
		    margin-top: 40px;
		    background-color: Black;
		}

		address {
		    display: block;
		    font-style: normal;
		    font-size: 30px;
		    text-align: center;
		    padding: 30px 0px;
		}

		footer address a {
		    color: Silver;
		}

        .sidenav {
            height: 100%;
            width: 0px;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: -3px;
            background-color: Black;
            overflow-x: hidden;
            transition: 0.6s ease;
            padding-top: 60px;
            border: 3px solid White;
            border-style: none solid none none;
        }

        .sidenav a {
            position: absolute;
            top: 50px;
            right: 20px;
            padding: 8px 10px;
            text-decoration: none;
            font-size: 25px;
            color: DarkGrey;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: White;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 10px;
            font-size: 50px;
            margin-left: 50px;
            cursor: pointer;
        }

        #openflexbox {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: auto;
            top: 0;
            position: sticky;
            position: -webkit-sticky;
            color: White;
            background-color: Black;
            border: 3px solid White;
            border-style: none none solid none;
            z-index: 1000;
        }

        #open {
            font-size: 50px;
            text-align: center;
            cursor: pointer;
            width: 100%;
            margin: 0px;
        }

        #english {
            position: absolute;
            top: 0;
            right: 0;
            line-height: 75px;
            color: White;
            height: 100%;
            padding: 0px 20px 0px 35px;
            font-size: 30px;
            border: 3px solid White;
            border-style: solid solid none solid;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px; font-size: 18px}
        }

        @media screen and (max-width: 500px) {
            #open {font-size: 30px; font-weight: 700}
            #english {line-height: 40px; padding: 0px 15px; font-size: 15px}
            address {font-size: 18px}
        }

        #submit {
            padding: 0.5em 1em;
            font-size: 25px;
            font-weight: bold;
            width: auto;
            background-color: slateblue;
            color: white;
            border: 3px solid black;
            border-radius: 50px;
            margin-top: 40px;
        }

        input {
            display: block;
            margin: 20px auto 0px;
            width: 75%;
            max-width: 500px;
            padding: 0.5em;
            font-size: 16px;
            border: 2px solid black;
            border-radius: 40px;
        }

        input:focus {
            outline: none;
        }

        @media screen and (max-width: 500px) {
            address {font-size: 18px}
        }

		#images {
		    text-align: center;
		    max-width:  1000px;
			margin: 40px auto 0px;
		}

		#flexbox0 {
		    display: flex;
    		flex-direction: column;
    		justify-content: center;
    		font-family: Verdana, Geneva, sans-serif;
			font-size: 18px;
			line-height: 1.5;
			width: 85%;
    		max-width: 500px;
    		height: auto;
    		background-color: White;
    		margin: 40px auto 0px;
    		padding: 0em 1em;
			border: 2px solid Black;
    	    border-radius: 20px;
		}

        .margin-top-20px {
            margin-top: 20px;
        }

        .margin-top-40px {
            margin-top: 40px;
        }

    </style>

</head>

<body>

    <div id="openflexbox">
        <p id="open" onClick="openNav()">&#9776;</p>
        <a href="https://www.juonigeneraattori.com/en/" id="english">In English</a>
    </div>

    <div id="sidenav" class="sidenav">
        <a class="closebtn" onclick="closeNav()">&times;</a>
        <a href="https://www.juonigeneraattori.com/" class="path" style="margin-top: 30px">Etusivu</a>
        <a href="https://www.juonigeneraattori.com/tarinat/" target="_blank" class="path" style="margin-top: 100px">Tarinat</a>
    </div>

	<div name="Images" id="images">
	    <img src="/images/juoni.png" type="image" alt="Juoni-" style="width: 48.5%; height: 48.5%">
		<img src="/images/generaattori.png" type="image" alt="generaattori" style="width: 100%; height: 100%">
		<img src="/images/v2.png" type="image" alt="v2" style="width: 20%; height: 20%">
	</div>

    <div id="flexbox0">
        <h1>Ehdota tarinan osia Juoni<wbr>&shy;generaattoriin</h1>
        <p class="margin-top-40px">Tämän lomakkeen avulla pystyt ehdotta<wbr>&shy;maan uusia adjek<wbr>&shy;tiiveja, pää<wbr>&shy;henkilöitä ja niiden kuvailuja, tärkeitä osia, tapahtuma<wbr>&shy;paikkoja sekä bonus<wbr>&shy;tehtäviäkin, joita ei ole vielä Juoni<wbr>&shy;generaattorin sana<wbr>&shy;varastossa!</p>
        <p><b>Ei sanoja, jotka eivät ole lapsi<wbr>&shy;ystävällisiä!</b> Yritetään pitää Juoni<wbr>&shy;generaattori lapsi<wbr>&shy;ystävällisenä.</p>
        <p>Ei monikkoja, paitsi jos sana on monikollinen muutenkin (esimerkiksi <b>kotti<wbr>&shy;kärryt</b> tai <b>sakset</b>).</p>
        <p>Ei adjektiiveja kohtiin, mihin niitä ei tarvitse laittaa!</p>
    </div>

    <br><br><form method="post" action="/ehdota/?submit=true">
    <label for="email">Sähköposti (pakollinen)</label><input type="email" name="email" placeholder="Kirjoita sähköpostisi tähän." required>
	<label for="adjectives">Adjektiivit</label><input type="text" name="adjectives" placeholder="Ei monikkoja, kiitos!">
	<label for="protagonists">Päähenkilöt</label><input type="text" name="protagonists" placeholder="Mielellään ihmisiä. Ei nimiä!">
	<label for="descriptions">Päähenkilöiden kuvailut</label><input type="text" name="descriptions" placeholder='Kirjoita alkuihin "joka", "jolla" tms.'>
	<label for="importantparts">Tärkeät osat</label><input type="text" name="importantparts" placeholder="Ihmiset, eläimet ja elottomat asiat käyvät.">
	<label for="mainvenues">Päätapahtumapaikat</label><input type="text" name="mainvenues">
	<label for="bonuschallenges">Bonustehtävät</label><input type="text" name="bonuschallenges">
	<label for="feedback">Palautetta</label><input type="text" name="feedback" placeholder="Palautetta? Bugeja? Uusia ominaisuuksia?">
	<input type="submit" id="submit">
	</form>

	<footer>
        <address>
            <a href="mailto:antti@juonigeneraattori.com" target="_blank">Ota yhteyttä</a>
        </address>
    </footer>

<?php

date_default_timezone_set("Europe/Helsinki");

if (isset($_GET['submit'])) {
    submit();
}

function submit() {
$submittime= date("d.m.Y – H:i:s");
$email = filter_input(INPUT_POST, 'email');
$part1 = filter_input(INPUT_POST, 'adjectives');
$part2 = filter_input(INPUT_POST, 'protagonists');
$part3 = filter_input(INPUT_POST, 'descriptions');
$part4 = filter_input(INPUT_POST, 'importantparts');
$part5 = filter_input(INPUT_POST, 'mainvenues');
$part6 = filter_input(INPUT_POST, 'bonuschallenges');
$feedback = filter_input(INPUT_POST, 'feedback');
if (!empty($email)) {
$host = "localhost";
$dbusername = "u939864616_Karkkipatukka";
$dbpassword = "KarkinPG-V2-Words";
$dbname = "u939864616_PGV2Words";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$from = "antti@juonigeneraattori.com";
$to = "antti.lille@gmail.com";
$subject = "Uusia ehdotuksia Juonigeneraattorin sanavarastoon";
$message = "Sähköposti: " . $email . "<br><br>" . "Adjektiivit: " . $part1 . "<br><br>" . "Päähenkilöt: " . $part2 . "<br><br>" . "Kuvailut: " . $part3 . "<br><br>" . "Tärkeät osat: " . $part4 . "<br><br>" . "Tapahtumapaikat: " . $part5 . "<br><br>" . "Bonustehtävät: " . $part6 . "<br><br>" . "Palautetta: " . $feedback;
$headers = "Lähettäjä: " . $from;
mail($to,$subject,$message,$headers);
if (!mail($to,$subject,$message,$headers)) {
echo "<script type='text/javascript'>alert('Viestiä ei lähetetty.')</script>";
} else {
echo "<script type='text/javascript'>alert('Viesti on lähetetty.')</script>";
}


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO words (submittime, email, adjectives, protagonists, descriptions, importantparts, mainvenues, bonuschallenges, feedback)
values ('$submittime', '$email', '$part1', '$part2', '$part3', '$part4', '$part5', '$part6', '$feedback')";
if ($conn->query($sql)){
echo "<script type='text/javascript'>alert('Kiitos ehdotuksistanne! Ehdotukset menevät tarkistettaviksi Juonigeneraattorin tekijälle. Sähköpostiisi tulee myöhemmin viesti, missä kerrotaan, mitä ehdotuksille kävi.'); location.href='/ehdota/';</script>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else {
echo "<script type='text/javascript'>alert('Kirjoita sähköpostisi ensin.'); location.href='/ehdota/';</script>";
die();
}
}

echo "<script type='text/javascript'>

    function openNav() {
        document.getElementById('sidenav').style.width = '160px';
    }

    function closeNav() {
        document.getElementById('sidenav').style.width = '0';
    }

</script>"
?>

</body>

</html>
