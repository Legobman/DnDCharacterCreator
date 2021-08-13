<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/berwickwebsitestyles.css">
	<title></title>
	<meta charset="utf-8">
</head>
<body>
    <h2>Acolyte</h2>
    <p>Please select your starting traits.</p>
    <p><b>Skill Proficiencies:</b> Insight, Religion</p>
    <form method="post">
    
<!--The form to pick your languages -->
    <label for="language1">Choose your first language:</label>
    <select name="language1" id="language1">
        <option value="Dwarish">Dwarish</option>
        <option value="Elvish">Elvish</option>
        <option value="Giant">Giant</option>
        <option value="Gnomish">Gnomish</option>
        <option value="Goblin">Goblin</option>
        <option value="Halfling">Halfling</option>
        <option value="Orc">Orc</option>
    </select>
        <br>
    <label for="language2">Choose a second language:</label>
    <select name="language2" id="language2">
        <option value="Dwarish">Dwarish</option>
        <option value="Elvish">Elvish</option>
        <option value="Giant">Giant</option>
        <option value="Gnomish">Gnomish</option>
        <option value="Goblin">Goblin</option>
        <option value="Halfling">Halfling</option>
        <option value="Orc">Orc</option>
    </select>
        <br>
    <?php
    if($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
        ?>
        <label for="languageR">Choose a extra racial lanuage:</label>
        <select name="languageR" id="languageR">
            <option value="Dwarish">Dwarish</option>
            <option value="Elvish">Elvish</option>
            <option value="Giant">Giant</option>
            <option value="Gnomish">Gnomish</option>
            <option value="Goblin">Goblin</option>
            <option value="Halfling">Halfling</option>
            <option value="Orc">Orc</option>
        </select>
        <br>
    <?php
    }
    ?>
        
    <p><b>Eqiupment:</b> A holy symbol, 5 sticks of incense, vestments, a set of common clothes, and a belt punch containing 15 gp.</p>
    <p>Select your background gear</p>
    <input type="radio" id="Prayer book" name="bGear" value="Prayer book" checked><label>Prayer book</label><br>
    <input type="radio" id="Prayer Wheel" name="bGear" value="Prayer Wheel"><label>Prayer Wheel</label><br>
        
        <p><b>Feature: Shelter Of The Faithful</b> As an acolyte, you command the respect of those who share your faith, and you can perform the religious cermonies of your deity. You can your adventuring companions can expect to receive free healing and care at a temple, shrine, or other established presence of your faith, though you must provide any material components needed for spells. Those who share your religion will support you (but only you) at a modest lifestyle.</p>
        <p>You might also have ties to a specific temple dedicated to your chosen deity or pantheon, and have a residence there. this coulde be the temple where you used to serve, if you remain on good terms with it, or a temple where you have found a new home. while near your temple, you can call upon the priests for assistance, provided the assistance you ask for is not hazardous and you remain in good standing with your temple.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I idolize a particular hero of my faith, and constantly refer to that person's deeds and example.</option>
        <option value="p2">I can find common ground between the fiercest enemies, empathizing with them and always working toward peace.</option>
        <option value="p3">I see omens in every event and action, the gods try to speak with us and we just have need to listen.</option>
        <option value="p4">Nothing can shake my optimistic attitude.</option>
        <option value="p5">I misquote (or quote) sacred texts and proverbs in almost every situation.</option>
        <option value="p6">I am intolerant (or tolerant) of any others faith and respect (or condemn) the worship of other gods.</option>
        <option value="p7">I have enjoyed nice food, drink and high society among my temple's elite. Rough living grates on me.</option>
        <option value="p8">I have spent so long in the temple that i've little practical experience dealing with people in the outside world.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Tradition. The ancient traditions of worship and sacrifice must be preserved and upheld. (Lawful)</option>
        <option value="i2">Charity. I always try to help those in need, no matter what the personal cost. (Good)</option>
        <option value="i3">Change. We must help bring about changes the gods're constantly working in the world. (Chaotic)</option>
        <option value="i4">Power. I hope to one day rise to the top of my faith's religious hierarchy. (Lawful)</option>
        <option value="i5">Faith. I trust that my deity will guide my actions. I have faith that if i work hard, things will go well. (Lawful)</option>
        <option value="i6">Aspiration. I seek to prove my self worthy of my god's favor by matching my actions against her or his teachings. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">I would die to recover an ancient relic of my faith that was lost long ago.</option>
        <option value="b2">Some day i will get revenge on the corrupt temple hierarchy who branded me a heretic.</option>
        <option value="b3">I owe my life to he priest who ever took me in when my parents has died.</option>
        <option value="b4">Everything i do is only for the common people.</option>
        <option value="b5">I will do anything to protect the temple where ever i served.</option>
        <option value="b6">I seek to preserve a sacred text which my enemies consider heretical and seek to destroy.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">I judge others harshly, myself even more severely.</option>
        <option value="f2">I put too much trust in those who wield power within my temple's hierarchy, i put too much trust in them.</option>
        <option value="f3">My piety sometimes leads me to blindly believe those which profess faith in my god.</option>
        <option value="f4">I am Inflexible in my thinking.</option>
        <option value="f5">I am suspicious of strangers and i also expect the worst of them.</option>
        <option value="f6">Once i pick a goal, i become obsessed with it to the detriment of everything else in my life.</option>
    </select>
        
    <input type="submit" value="Submit">
    </form>
<?php
     // when the user pushes the submit button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // collect value of input field and
        // save selection to character file and session
        $txt = "";
        $language1 = $_POST['language1'];
        $language2 = $_POST['language2'];
        if($_POST['languageR'] != ""){
            $languageR = $_POST['languageR'];
        }
        $bGear = $_POST['bGear'];
        $personality = $_POST['Personality'];
        $ideal = $_POST['Ideal'];
        $bond = $_POST['Bond'];
        $flaw = $_POST['Flaw'];
        if($language1 == $language2){
            echo "select different languages.";
        }else{
            if ($_SESSION['raceLanguage'] == $language1 or $_SESSION['raceLanguage'] == $language2 or $_SESSION['raceLanguage'] == $languageR){
                echo "you already know one of the languages you picked.";
            } else{
                
                // open a file for the character 
                $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");
                
                // save the variables to the session
                $_SESSION['skillb1'] = "Insight";
                $_SESSION['skillb2'] = "Religion";
                $_SESSION['instrumentb'] = "";
                $_SESSION['language1'] = $language1;
                $_SESSION['language2'] = $language2;
                $_SESSION['artTools'] = "";
                if($_POST['languageR'] != ""){
                    $_SESSION['languageR'] = $languageR;
                    
                }
                $txt = "\nBackground bonuses - Acolyte\n
                        Skill Proficiencies: Insight, Religion\n
                        Languages: $language1 and $language2.";
                if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                    $txt .= "Racial bonus language: $languageR\n";
                } 
                $txt .= "
                         Equipment: A holy symbol, $bGear, 5 sticks of incense, vestments, a set of common clothes, and a belt pounch containg 15 gp\n";
                $txt .= "Feature: Shelter Of The Faithful\n
                         As an acolyte, you command the respect of those who share your faith, and you can perform the religious cermonies of your deity. You can your adventuring companions can expect to receive free healing and care at a temple, shrine, or other established presence of your faith, though you must provide any material components needed for spells. Those who share your religion will support you (but only you) at a modest lifestyle.\n
                         You might also have ties to a specific temple dedicated to your chosen deity or pantheon, and have a residence there. this coulde be the temple where you used to serve, if you remain on good terms with it, or a temple where you have found a new home. while near your temple, you can call upon the priests for assistance, provided the assistance you ask for is not hazardous and you remain in good standing with your temple.\n";
                
                
                // switch statements to output character personality traits
                $txt .= "
                         Personality: ";
                switch ($personality) {
                    case "p1":
                        $txt .= "I idolize a particular hero of my faith, and constantly refer to that person's deeds and example.\n";
                        break;
                    case "p2":
                        $txt .= "I can find common ground between the fiercest enemies, empathizing with them and always working toward peace.\n";
                        break;
                    case "p3":
                        $txt .= "I see omens in every event and action, the gods try to speak with us and we just have need to listen.\n";
                        break;
                    case "p4":
                        $txt .= "Nothing can shake my optimistic attitude.\n";
                        break;
                    case "p5":
                        $txt .= "I misquote (or quote) sacred texts and proverbs in almost every situation.\n";
                        break;
                    case "p6":
                        $txt .= "I am intolerant (or tolerant) of any others faith and respect (or condemn) the worship of other gods.\n";
                        break;
                    case "p7":
                        $txt .= "I have enjoyed nice food, drink and high society among my temple's elite. Rough living grates on me.\n";
                        break;
                    case "p8":
                        $txt .= "I have spent so long in the temple that i've little practical experience dealing with people in the outside world.\n";
                        break;
                }
                
                $txt .= "
                         ideal: ";
                switch ($ideal) {
                    case "i1":
                        $txt .= "Tradition. The ancient traditions of worship and sacrifice must be preserved and upheld. (Lawful)\n";
                        break;
                    case "i2":
                        $txt .= "Charity. I always try to help those in need, no matter what the personal cost. (Good)\n";
                        break;
                    case "i3":
                        $txt .= "Change. We must help bring about changes the gods're constantly working in the world. (Chaotic)\n";
                        break;
                    case "i4":
                        $txt .= "Power. I hope to one day rise to the top of my faith's religious hierarchy. (Lawful)\n";
                        break;
                    case "i5":
                        $txt .= "Faith. I trust that my deity will guide my actions. I have faith that if i work hard, things will go well. (Lawful)\n";
                        break;
                    case "i6":
                        $txt .= "Aspiration. I seek to prove my self worthy of my god's favor by matching my actions against her or his teachings. (Any)\n";
                        break;
                }
                
                $txt .= "
                         Bond: ";
                switch ($bond) {
                    case "b1":
                        $txt .= "I would die to recover an ancient relic of my faith that was lost long ago.\n";
                        break;
                    case "b2":
                        $txt .= "Some day i will get revenge on the corrupt temple hierarchy who branded me a heretic.\n";
                        break;
                    case "b3":
                        $txt .= "I owe my life to he priest who ever took me in when my parents has died.\n";
                        break;
                    case "b4":
                        $txt .= "Everything i do is only for the common people.\n";
                        break;
                    case "b5":
                        $txt .= "I will do anything to protect the temple where ever i served.\n";
                        break;
                    case "b6":
                        $txt .= "I seek to preserve a sacred text which my enemies consider heretical and seek to destroy.\n";
                        break;
                }
                
                $txt .= "
                         Flaw: ";
                switch ($flaw) {
                    case "f1":
                        $txt .= "I judge others harshly, myself even more severely.\n";
                        break;
                    case "f2":
                        $txt .= "I put too much trust in those who wield power within my temple's hierarchy, i put too much trust in them.\n";
                        break;
                    case "f3":
                        $txt .= "My piety sometimes leads me to blindly believe those which profess faith in my god.\n";
                        break;
                    case "f4":
                        $txt .= "I am Inflexible in my thinking.\n";
                        break;
                    case "f5":
                        $txt .= "I am suspicious of strangers and i also expect the worst of them.\n";
                        break;
                    case "f6":
                        $txt .= "Once i pick a goal, i become obsessed with it to the detriment of everything else in my life.\n";
                        break;
                }
                
                fwrite($characterFile, $txt);
                fclose($characterFile);
                ?> <p><a href="../classes/<?php echo $_SESSION['class'] ?>.php">Continue to the next step.</a></p>
    <?php
            }
        }
    }
?> 
</body>
</html>