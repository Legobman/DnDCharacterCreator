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
    <h2>Sage</h2>
    <p>Please select your starting traits.</p>
    <p><b>Skill Proficiencies:</b> Arcana, History</p>
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
        <label for="Specialty">Choose your specialty:</label>
    <select name="Specialty" id="Specialty">
        <option value="s1">Alchemist.</option>
        <option value="s2">Astronomer.</option>
        <option value="s3">Discredited academic.</option>
        <option value="s4">Librarian.</option>
        <option value="s5">Professor.</option>
        <option value="s6">Researcher.</option>
        <option value="s7">Wizard's apprentice.</option>
        <option value="s8">Scribe.</option>
    </select>
        
    <p><b>Eqiupment:</b> A bottle of black ink, a quill, a small knife, a letter from a dead colleague posing a question you have not yet been able to answer, a set of common clothes, and a belt pouch containing 10 gp.</p>
        
        <p><b>Feature: Researcher</b> When you attempt to learn or recall a piece of lore, if you do not know that information, you often know where and from whom you can obtain it. Usually, this information comes from a library, scriptorium, university, or a sage or other learned person or creature. Your DM might rule that the knowledge you seek is secreted away in an almost inaccessible place, or that it simply cannot be found. Unearthing the deepest secrets of the multiverse can require an adventure or even a whole campaign.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I use polysyllabic words that convey the impression of great erudition.</option>
        <option value="p2">I've read every book in the world's greatest libraries – or I like to boast that I have.</option>
        <option value="p3">I'm used to helping out those who aren't as smart as I am, and I patiently explain anything and everything to others.</option>
        <option value="p4">There's nothing I like more than a good mystery.</option>
        <option value="p5">I'm willing to listen to every side of an argument before I make my own judgment.</option>
        <option value="p6">I… speak… slowly… when talking… to idiots,… which… almost… everyone… is… compared… to me.</option>
        <option value="p7">I am horribly, horribly awkward in social situations.</option>
        <option value="p8">I'm convinced that people are always trying to steal my secrets.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Knowledge. The path to power and self-improvement is through knowledge. (Neutral)</option>
        <option value="i2">Beauty. What is beautiful points us beyond itself toward what is true. (Good)</option>
        <option value="i3">Logic. Emotions must not cloud our logical thinking. (Lawful)</option>
        <option value="i4">No Limits. Nothing should fetter the infinite possibility inherent in all existence. (Chaotic)</option>
        <option value="i5">Power. Knowledge is the path to power and domination. (Evil)</option>
        <option value="i6">Self-Improvement. The goal of a life of study is the betterment of oneself. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">It is my duty to protect my students.</option>
        <option value="b2">I have an ancient text that holds terrible secrets that must not fall into the wrong hands.</option>
        <option value="b3">I work to preserve a library, university, scriptorium, or monastery.</option>
        <option value="b4">My life's work is a series of tomes related to a specific field of lore.</option>
        <option value="b5">I've been searching my whole life for the answer to a certain question.</option>
        <option value="b6">I sold my soul for knowledge. I hope to do great deeds and win it back.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">I am easily distracted by the promise of information.</option>
        <option value="f2">Most people scream and run when they see a demon. I stop and take notes on its anatomy.</option>
        <option value="f3">Unlocking an ancient mystery is worth the price of a civilization.</option>
        <option value="f4">I overlook obvious solutions in favor of complicated ones.</option>
        <option value="f5">I speak without really thinking through my words, invariably insulting others.</option>
        <option value="f6">I can't keep a secret to save my life, or anyone else's.</option>
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
        $specialty = $_POST['Specialty'];
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
                $_SESSION['skillb1'] = "Arcana";
                $_SESSION['skillb2'] = "History";
                $_SESSION['instrumentb'] = "";
                $_SESSION['language1'] = $language1;
                $_SESSION['language2'] = $language2;
                $_SESSION['artTools'] = "";
                if($_POST['languageR'] != ""){
                    $_SESSION['languageR'] = $languageR;
                    
                }
                $txt = "\nBackground bonuses - Sage\n
                        Skill Proficiencies: Arcana, History\n
                        Languages: $language1 and $language2.";
                if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                    $txt .= "Racial bonus language: $languageR\n";
                } 
                $txt .= "
                         Equipment: A bottle of black ink, a quill, a small knife, a letter from a dead colleague posing a question you have not yet been able to answer, a set of common clothes, and a belt pouch containing 10 gp.\n";
                $txt .= "Feature: Researcher\n
                         When you attempt to learn or recall a piece of lore, if you do not know that information, you often know where and from whom you can obtain it. Usually, this information comes from a library, scriptorium, university, or a sage or other learned person or creature. Your DM might rule that the knowledge you seek is secreted away in an almost inaccessible place, or that it simply cannot be found. Unearthing the deepest secrets of the multiverse can require an adventure or even a whole campaign.\n";
                
                $txt .= "
                         Specialty: ";
                switch ($scheme) {
                    case "s1":
                        $txt .= "Alchemist.\n";
                        break;
                    case "s2":
                        $txt .= "Astronomer.\n";
                        break;
                    case "s3":
                        $txt .= "Discredited academic.\n";
                        break;
                    case "s4":
                        $txt .= "Librarian.\n";
                        break;
                    case "s5":
                        $txt .= "Professor.\n";
                        break;
                    case "s6":
                        $txt .= "Researcher.\n";
                        break;
                    case "s7":
                        $txt .= "Wizard's apprentice.\n";
                        break;
                    case "s8":
                        $txt .= "Scribe.\n";
                        break;
                }
                
                // switch statements to output character personality traits
                $txt .= "
                         Personality: ";
                switch ($personality) {
                    case "p1":
                        $txt .= "I use polysyllabic words that convey the impression of great erudition.\n";
                        break;
                    case "p2":
                        $txt .= "I've read every book in the world's greatest libraries – or I like to boast that I have.\n";
                        break;
                    case "p3":
                        $txt .= "I'm used to helping out those who aren't as smart as I am, and I patiently explain anything and everything to others.\n";
                        break;
                    case "p4":
                        $txt .= "There's nothing I like more than a good mystery.\n";
                        break;
                    case "p5":
                        $txt .= "I'm willing to listen to every side of an argument before I make my own judgment.\n";
                        break;
                    case "p6":
                        $txt .= "I… speak… slowly… when talking… to idiots,… which… almost… everyone… is… compared… to me.\n";
                        break;
                    case "p7":
                        $txt .= "I am horribly, horribly awkward in social situations.\n";
                        break;
                    case "p8":
                        $txt .= "I'm convinced that people are always trying to steal my secrets.\n";
                        break;
                }
                
                $txt .= "
                         ideal: ";
                switch ($ideal) {
                    case "i1":
                        $txt .= "Knowledge. The path to power and self-improvement is through knowledge. (Neutral)\n";
                        break;
                    case "i2":
                        $txt .= "Beauty. What is beautiful points us beyond itself toward what is true. (Good)\n";
                        break;
                    case "i3":
                        $txt .= "Logic. Emotions must not cloud our logical thinking. (Lawful)\n";
                        break;
                    case "i4":
                        $txt .= "No Limits. Nothing should fetter the infinite possibility inherent in all existence. (Chaotic)\n";
                        break;
                    case "i5":
                        $txt .= "Power. Knowledge is the path to power and domination. (Evil)\n";
                        break;
                    case "i6":
                        $txt .= "Self-Improvement. The goal of a life of study is the betterment of oneself. (Any)\n";
                        break;
                }
                
                $txt .= "
                         Bond: ";
                switch ($bond) {
                    case "b1":
                        $txt .= "It is my duty to protect my students.\n";
                        break;
                    case "b2":
                        $txt .= "I have an ancient text that holds terrible secrets that must not fall into the wrong hands.\n";
                        break;
                    case "b3":
                        $txt .= "I work to preserve a library, university, scriptorium, or monastery.\n";
                        break;
                    case "b4":
                        $txt .= "My life's work is a series of tomes related to a specific field of lore.\n";
                        break;
                    case "b5":
                        $txt .= "I've been searching my whole life for the answer to a certain question.\n";
                        break;
                    case "b6":
                        $txt .= "I sold my soul for knowledge. I hope to do great deeds and win it back.\n";
                        break;
                }
                
                $txt .= "
                         Flaw: ";
                switch ($flaw) {
                    case "f1":
                        $txt .= "I am easily distracted by the promise of information.\n";
                        break;
                    case "f2":
                        $txt .= "Most people scream and run when they see a demon. I stop and take notes on its anatomy.\n";
                        break;
                    case "f3":
                        $txt .= "Unlocking an ancient mystery is worth the price of a civilization.\n";
                        break;
                    case "f4":
                        $txt .= "I overlook obvious solutions in favor of complicated ones.\n";
                        break;
                    case "f5":
                        $txt .= "I speak without really thinking through my words, invariably insulting others.\n";
                        break;
                    case "f6":
                        $txt .= "I can't keep a secret to save my life, or anyone else's.\n";
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