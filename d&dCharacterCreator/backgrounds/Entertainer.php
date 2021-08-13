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
    <h2>Entertainer</h2>
    <p>Please select your starting background traits.</p>
    <p><b>Skill Proficiencies:</b> Acrobatics, Performance</p>
    <p><b>Tool Proficiencies:</b> Disguise kit, One Type of Musical Instrument</p>
    <form method="post">
    
<!--The form to pick your languages -->
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
        
    <p><b>Eqiupment:</b> A musical instrument (Any one from your choice), The favor of an admirer (Love Letter, lock of hair, or trinket), a costume, and a belt pouch which is containing 15 gp.</p>
    <p>Select your background gear</p>
    <input type="radio" id="Bagpipies" name="bGear" value="Bagpipies" checked><label>Bagpipies</label>
    <input type="radio" id="Drum" name="bGear" value="Drum"><label>Drum</label>
    <input type="radio" id="Dulcimer" name="bGear" value="Dulcimer"><label>Dulcimer</label>
    <input type="radio" id="Flute" name="bGear" value="Flute"><label>Flute</label>
    <input type="radio" id="Lute" name="bGear" value="Lute"><label>Lute</label>
    <input type="radio" id="Lyre" name="bGear" value="Lyre"><label>Lyre</label>
    <input type="radio" id="Horn" name="bGear" value="Horn"><label>Horn</label>
    <input type="radio" id="Pan flute" name="bGear" value="Pan flute"><label>Pan flute</label>
    <input type="radio" id="Shawm" name="bGear" value="Shawm"><label>Shawm</label>
    <input type="radio" id="Viol" name="bGear" value="Viol"><label>Viol</label>
        <br>
        <label for="Routines">Choose your favorite scheme:</label>
    <select name="Routines" id="Routines">
        <option value="r1">Actor.</option>
        <option value="r2">Dancer.</option>
        <option value="r3">Fire-eater.</option>
        <option value="r4">Jester.</option>
        <option value="r5">Juggler.</option>
        <option value="r6">Instrumentalist.</option>
        <option value="r7">Poet.</option>
        <option value="r8">Singer.</option>
        <option value="r9">Storyteller.</option>
        <option value="r10">Tumbler.</option>
    </select>
        <br>
        
        <p><b>Feature: By Popular Demand</b> You have a capacity to find a place to perform. Actually, either in an inn or tavern but most possibly with a circus, at a theater or it may be in a noble’s court. As long as you perform each night, you can receive free food and also lodging of a modest or else comfortable standard (it depends on the quality of the establishment) it happens at those kinds of places only. Your performance will make you something of the local figure and this is in addition. The strangers typically take a liking to you and this would be happened in a town where strangers recognize you.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I know a story relevant to almost every situation.</option>
        <option value="p2">Whenever I come to a new place, I collect local rumors and spread gossip.</option>
        <option value="p3">I'm a hopeless romantic, always searching for that "special someone."</option>
        <option value="p4">Nobody stays angry at me or around me for long, since I can defuse any amount of tension.</option>
        <option value="p5">I love a good insult, even one directed at me.</option>
        <option value="p6">I get bitter if I'm not the center of attention.</option>
        <option value="p7">I'll settle for nothing less than perfection.</option>
        <option value="p8">I change my mood or my mind as quickly as I change key in a song.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Beauty. When I perform, I make the world better than it was. (Good)</option>
        <option value="i2">Tradition. The stories, legends, and songs of the past must never be forgotten, for they teach us who we are. (Lawful)</option>
        <option value="i3">Creativity. The world is in need of new ideas and bold action. (Chaotic)</option>
        <option value="i4">Greed. I'm only in it for the money and fame. (Evil)</option>
        <option value="i5">People. I like seeing the smiles on people's faces when I perform. That's all that matters. (Neutral)</option>
        <option value="i6">Honesty. Art should reflect the soul; it should come from within and reveal who we really are. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">My instrument is my most treasured possession, and it reminds me of someone I love.</option>
        <option value="b2">Someone stole my precious instrument, and someday I'll get it back.</option>
        <option value="b3">I want to be famous, whatever it takes.</option>
        <option value="b4">I idolize a hero of the old tales and measure my deeds against that person's.</option>
        <option value="b5">I will do anything to prove myself superior to my hated rival.</option>
        <option value="b6">I would do anything for the other members of my old troupe.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">I'll do anything to win fame and renown.</option>
        <option value="f2">I'm a sucker for a pretty face.</option>
        <option value="f3">A scandal prevents me from ever going home again. That kind of trouble seems to follow me around.</option>
        <option value="f4">I once satirized a noble who still wants my head. It was a mistake that I will likely repeat.</option>
        <option value="f5">I have trouble keeping my true feelings hidden. My sharp tongue lands me in trouble.</option>
        <option value="f6">Despite my best efforts, I am unreliable to my friends.</option>
    </select>
        
    <input type="submit" value="Submit">
    </form>
<?php
     // when the user pushes the submit button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // collect value of input field and
        // save selection to character file and session
        $txt = "";
        if($_POST['languageR'] != ""){
            $languageR = $_POST['languageR'];
        }
        $routines = $_POST['Routines'];
        $bGear = $_POST['bGear'];
        $instrument = $_POST['instrument'];
        $personality = $_POST['Personality'];
        $ideal = $_POST['Ideal'];
        $bond = $_POST['Bond'];
        $flaw = $_POST['Flaw'];
        
        if ($_SESSION['raceLanguage'] == $languageR){
            echo "you already know one of the languages you picked.";
        } else{

            // open a file for the character 
            $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");

            // save the variables to the session
            
            $_SESSION['skillb1'] = "Acrobatics";
            $_SESSION['skillb2'] = "Performance";
            $_SESSION['instrumentb'] = $instrument;
            $_SESSION['artTools'] = "";
            $_SESSION['language1'] = "";
            $_SESSION['language2'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Entertainer\n
                    Skill Proficiencies: Acrobatics, Performance\n
                    Tool Proficiencies: Disguise kit, $bGear\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "
                     Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: $bGear, The favor of an admirer (Love Letter, lock of hair, or trinket), a costume, and a belt pouch which is containing 15 gp.\n";
            $txt .= "Feature: By Popular Demand\n
                     You have a capacity to find a place to perform. Actually, either in an inn or tavern but most possibly with a circus, at a theater or it may be in a noble’s court. As long as you perform each night, you can receive free food and also lodging of a modest or else comfortable standard (it depends on the quality of the establishment) it happens at those kinds of places only. Your performance will make you something of the local figure and this is in addition. The strangers typically take a liking to you and this would be happened in a town where strangers recognize you.\n";

            $txt .= "
                     Entertainer Routine: ";
            switch ($routines) {
                case "r1":
                    $txt .= "Actor.\n";
                    break;
                case "r2":
                    $txt .= "Dancer.\n";
                    break;
                case "r3":
                    $txt .= "Fire-eater.\n";
                    break;
                case "r4":
                    $txt .= "Jester.\n";
                    break;
                case "r5":
                    $txt .= "Juggler.\n";
                    break;
                case "r6":
                    $txt .= "Instrumentalist.\n";
                    break;
                case "r7":
                    $txt .= "Poet.\n";
                    break;
                case "r8":
                    $txt .= "Singer.\n";
                    break;
                case "r9":
                    $txt .= "Storyteller.\n";
                    break;
                case "r10":
                    $txt .= "Tumbler.\n";
                    break;
            }

            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "I know a story relevant to almost every situation.\n";
                    break;
                case "p2":
                    $txt .= "Whenever I come to a new place, I collect local rumors and spread gossip.\n";
                    break;
                case "p3":
                    $txt .= "I'm a hopeless romantic, always searching for that 'special someone.'\n";
                    break;
                case "p4":
                    $txt .= "Nobody stays angry at me or around me for long, since I can defuse any amount of tension.\n";
                    break;
                case "p5":
                    $txt .= "I love a good insult, even one directed at me.\n";
                    break;
                case "p6":
                    $txt .= "I get bitter if I'm not the center of attention.\n";
                    break;
                case "p7":
                    $txt .= "I'll settle for nothing less than perfection.\n";
                    break;
                case "p8":
                    $txt .= "I change my mood or my mind as quickly as I change key in a song.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Beauty. When I perform, I make the world better than it was. (Good)\n";
                    break;
                case "i2":
                    $txt .= "Tradition. The stories, legends, and songs of the past must never be forgotten, for they teach us who we are. (Lawful)\n";
                    break;
                case "i3":
                    $txt .= "Creativity. The world is in need of new ideas and bold action. (Chaotic)\n";
                    break;
                case "i4":
                    $txt .= "Greed. I'm only in it for the money and fame. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "People. I like seeing the smiles on people's faces when I perform. That's all that matters. (Neutral)\n";
                    break;
                case "i6":
                    $txt .= "Honesty. Art should reflect the soul; it should come from within and reveal who we really are. (Any)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "My instrument is my most treasured possession, and it reminds me of someone I love.\n";
                    break;
                case "b2":
                    $txt .= "Someone stole my precious instrument, and someday I'll get it back.\n";
                    break;
                case "b3":
                    $txt .= "I want to be famous, whatever it takes.\n";
                    break;
                case "b4":
                    $txt .= "I idolize a hero of the old tales and measure my deeds against that person's.\n";
                    break;
                case "b5":
                    $txt .= "I will do anything to prove myself superior to my hated rival.\n";
                    break;
                case "b6":
                    $txt .= "I would do anything for the other members of my old troupe.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "I'll do anything to win fame and renown.\n";
                    break;
                case "f2":
                    $txt .= "I'm a sucker for a pretty face.\n";
                    break;
                case "f3":
                    $txt .= "A scandal prevents me from ever going home again. That kind of trouble seems to follow me around.\n";
                    break;
                case "f4":
                    $txt .= "I once satirized a noble who still wants my head. It was a mistake that I will likely repeat.\n";
                    break;
                case "f5":
                    $txt .= "I have trouble keeping my true feelings hidden. My sharp tongue lands me in trouble.\n";
                    break;
                case "f6":
                    $txt .= "Despite my best efforts, I am unreliable to my friends.\n";
                    break;
            }

            fwrite($characterFile, $txt);
            fclose($characterFile);
            ?> <p><a href="../classes/<?php echo $_SESSION['class'] ?>.php">Continue to the next step.</a></p>
<?php
        }
        
    }
?> 
</body>
</html>