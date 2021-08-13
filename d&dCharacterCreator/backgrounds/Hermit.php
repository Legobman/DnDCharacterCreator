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
    <h2>Hermit</h2>
    <p>Please select your starting traits.</p>
    <p><b>Skill Proficiencies:</b> Medicine, Religion</p>
    <p><b>Tool Proficiencies:</b> Herbalism kit</p>
    <form method="post">
    
<!--The form to pick your languages -->
    <label for="language1">Choose your language:</label>
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
        
        <label for="Seclusion">Choose your life of seclusion:</label>
    <select name="Seclusion" id="Seclusion">
        <option value="s1">I was searching for spiritual enlightenment.</option>
        <option value="s2">I was partaking of communal living in accordance with the dictates of a religious order.</option>
        <option value="s3">I was exiled for a crime I didn’t commit.</option>
        <option value="s4">I retreated from society after a life-altering event.</option>
        <option value="s5">I needed a quiet place to work on my art, literature, music, or manifesto.</option>
        <option value="s6">I needed to commune with nature, far from civilization.</option>
        <option value="s7">I was the caretaker of an ancient ruin or relic.</option>
        <option value="s8">I was a pilgrim in search of a person, place, or relic of spiritual significance.</option>
    </select>
        
    <p><b>Eqiupment:</b> A scroll case stuffed full of notes from your studies or prayers, a winter blanket, a set of common clothes, an herbalism kit, and 5 gp.</p>
        
        <p><b>Feature: Discovery</b> The quiet seclusion of your extended hermitage gave you access to a unique and powerful discovery. The exact nature of this revelation depends on the nature of your seclusion. It might be a great truth about the cosmos, the deities, the powerful beings of the outer planes, or the forces of nature. It could be a site that no one else has ever seen. You might have uncovered a fact that has long been forgotten, or unearthed some relic of the past that could rewrite history. It might be information that would be damaging to the people who or consigned you to exile, and hence the reason for your return to society.</p>
        <p>Work with your DM to determine the details of your discovery and its impact on the campaign.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I have been isolated for so long that i speak rarely, preferring gestures and also the occasional grunt.</option>
        <option value="p2">I am utterly serene, even in the face of disaster.</option>
        <option value="p3">The leader of my community had something wise to say on every topic, and I am eager to share that wisdom.</option>
        <option value="p4">I feel tremendous empathy for all who suffer.</option>
        <option value="p5">I’m oblivious to etiquette and social expectations.</option>
        <option value="p6">I connect everything that happens to me to a grand, cosmic plan.</option>
        <option value="p7">I often get lost in my own thoughts and contemplation, becoming oblivious to my surroundings.</option>
        <option value="p8">I am working on a grand philosophical theory and love sharing my ideas.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Greater Good. My gifts are meant to be shared with all, not used for my own benefit. (Good)</option>
        <option value="i2">Logic. Emotions must not cloud our sense of what is right and true, or our logical thinking. (Lawful)</option>
        <option value="i3">Free Thinking. Inquiry and curiosity are the pillars of progress. (Chaotic)</option>
        <option value="i4">Power. Solitude and contemplation are paths toward mystical or magical power. (Evil)</option>
        <option value="i5">Live and Let Live. Meddling in the affairs of others only causes trouble. (Neutral)</option>
        <option value="i6">Self-Knowledge. If you know yourself, there’s nothing left to know. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">Nothing is more important than the other members of my hermitage, order, or association.</option>
        <option value="b2">I entered seclusion to hide from the ones who might still be hunting me. I must someday confront them.</option>
        <option value="b3">I’m still seeking the enlightenment I pursued in my seclusion, and it still eludes me.</option>
        <option value="b4">I entered seclusion because I loved someone I could not have.</option>
        <option value="b5">Should my discovery come to light, it could bring ruin to the world.</option>
        <option value="b6">My isolation gave me great insight into a great evil that only I can destroy.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">Now that I've returned to the world, I enjoy its delights a little too much.</option>
        <option value="f2">I harbor dark, bloodthirsty thoughts that my isolation and meditation failed to quell.</option>
        <option value="f3">I am dogmatic in my thoughts and philosophy.</option>
        <option value="f4">I let my need to win arguments overshadow friendships and harmony.</option>
        <option value="f5">I’d risk too much to uncover a lost bit of knowledge.</option>
        <option value="f6">I like keeping secrets and won’t share them with anyone.</option>
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
        if($_POST['languageR'] != ""){
            $languageR = $_POST['languageR'];
        }
        $seclusion = $_POST['Seclusion'];
        $personality = $_POST['Personality'];
        $ideal = $_POST['Ideal'];
        $bond = $_POST['Bond'];
        $flaw = $_POST['Flaw'];
        if ($_SESSION['raceLanguage'] == $language1 or $_SESSION['raceLanguage'] == $languageR){
            echo "you already know one of the languages you picked.";
        } else{

            // open a file for the character 
            $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");

            // save the variables to the session
            $_SESSION['skillb1'] = "Medicine";
            $_SESSION['skillb2'] = "Religion";
            $_SESSION['instrumentb'] = "";
            $_SESSION['language1'] = $language1;
            $_SESSION['language2'] = "";
            $_SESSION['artTools'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Hermit\n
                    Skill Proficiencies: Medicine, Religion\n
                    Tool Proficiencies: Herbalism kit\n
                    Languages: $language1.\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: A scroll case stuffed full of notes from your studies or prayers, a winter blanket, a set of common clothes, an herbalism kit, and 5 gp.\n";
            $txt .= "Feature: Discovery\n
                     The quiet seclusion of your extended hermitage gave you access to a unique and powerful discovery. The exact nature of this revelation depends on the nature of your seclusion. It might be a great truth about the cosmos, the deities, the powerful beings of the outer planes, or the forces of nature. It could be a site that no one else has ever seen. You might have uncovered a fact that has long been forgotten, or unearthed some relic of the past that could rewrite history. It might be information that would be damaging to the people who or consigned you to exile, and hence the reason for your return to society.\n
                     Work with your DM to determine the details of your discovery and its impact on the campaign.\n";

            $txt .= "
                     Life of Seclusion: ";
            switch ($scheme) {
                case "s1":
                    $txt .= "I was searching for spiritual enlightenment.\n";
                    break;
                case "s2":
                    $txt .= "I was partaking of communal living in accordance with the dictates of a religious order.\n";
                    break;
                case "s3":
                    $txt .= "I was exiled for a crime I didn’t commit.\n";
                    break;
                case "s4":
                    $txt .= "I retreated from society after a life-altering event.\n";
                    break;
                case "s5":
                    $txt .= "I needed a quiet place to work on my art, literature, music, or manifesto.\n";
                    break;
                case "s6":
                    $txt .= "I needed to commune with nature, far from civilization.\n";
                    break;
                case "s7":
                    $txt .= "I was the caretaker of an ancient ruin or relic.\n";
                    break;
                case "s8":
                    $txt .= "I was a pilgrim in search of a person, place, or relic of spiritual significance.\n";
                    break;
            }
            
            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "I have been isolated for so long that i speak rarely, preferring gestures and also the occasional grunt.\n";
                    break;
                case "p2":
                    $txt .= "I am utterly serene, even in the face of disaster.\n";
                    break;
                case "p3":
                    $txt .= "The leader of my community had something wise to say on every topic, and I am eager to share that wisdom.\n";
                    break;
                case "p4":
                    $txt .= "I feel tremendous empathy for all who suffer.\n";
                    break;
                case "p5":
                    $txt .= "I’m oblivious to etiquette and social expectations.\n";
                    break;
                case "p6":
                    $txt .= "I connect everything that happens to me to a grand, cosmic plan.\n";
                    break;
                case "p7":
                    $txt .= "I often get lost in my own thoughts and contemplation, becoming oblivious to my surroundings.\n";
                    break;
                case "p8":
                    $txt .= "I am working on a grand philosophical theory and love sharing my ideas.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Greater Good. My gifts are meant to be shared with all, not used for my own benefit. (Good)\n";
                    break;
                case "i2":
                    $txt .= "Logic. Emotions must not cloud our sense of what is right and true, or our logical thinking. (Lawful)\n";
                    break;
                case "i3":
                    $txt .= "Free Thinking. Inquiry and curiosity are the pillars of progress. (Chaotic)\n";
                    break;
                case "i4":
                    $txt .= "Power. Solitude and contemplation are paths toward mystical or magical power. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "Live and Let Live. Meddling in the affairs of others only causes trouble. (Neutral)\n";
                    break;
                case "i6":
                    $txt .= "Self-Knowledge. If you know yourself, there’s nothing left to know. (Any)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "Nothing is more important than the other members of my hermitage, order, or association.\n";
                    break;
                case "b2":
                    $txt .= "I entered seclusion to hide from the ones who might still be hunting me. I must someday confront them.\n";
                    break;
                case "b3":
                    $txt .= "I’m still seeking the enlightenment I pursued in my seclusion, and it still eludes me.\n";
                    break;
                case "b4":
                    $txt .= "I entered seclusion because I loved someone I could not have.\n";
                    break;
                case "b5":
                    $txt .= "Should my discovery come to light, it could bring ruin to the world.\n";
                    break;
                case "b6":
                    $txt .= "My isolation gave me great insight into a great evil that only I can destroy.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "Now that I've returned to the world, I enjoy its delights a little too much.\n";
                    break;
                case "f2":
                    $txt .= "I harbor dark, bloodthirsty thoughts that my isolation and meditation failed to quell.\n";
                    break;
                case "f3":
                    $txt .= "I am dogmatic in my thoughts and philosophy.\n";
                    break;
                case "f4":
                    $txt .= "I let my need to win arguments overshadow friendships and harmony.\n";
                    break;
                case "f5":
                    $txt .= "I’d risk too much to uncover a lost bit of knowledge.\n";
                    break;
                case "f6":
                    $txt .= "I like keeping secrets and won’t share them with anyone.\n";
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