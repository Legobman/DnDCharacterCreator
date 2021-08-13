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
    <h2>Soldier</h2>
    <p>Please select your starting background traits.</p>
    <p><b>Skill Proficiencies:</b> Athletics, Intimidation</p>
    <p><b>Tool Proficiencies:</b> One type of gaming set, vehicles (land)</p>
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
        
    <p><b>Eqiupment:</b> An insignia of rank, a trophy taken from a fallen enemy, a set of bone dice or deck of cards, a set of common clothes, and a belt pouch containing 10 gp.</p>
        
        <label for="Gaming">Choose your criminal specialty:</label>
    <select name="Gaming" id="Gaming">
        <option value="Dice set">Dice set.</option>
        <option value="Dragonchess set">Dragonchess set.</option>
        <option value="Playing card set">Playing card set.</option>
        <option value="Three-Dragon Ante set">Three-Dragon Ante set.</option>
    </select>
        
        <br>
        
        <label for="Specialty">Choose your specialty:</label>
    <select name="Specialty" id="Specialty">
        <option value="s1">Officer.</option>
        <option value="s2">Scout.</option>
        <option value="s3">Infantry.</option>
        <option value="s4">Cavalry.</option>
        <option value="s5">Healer.</option>
        <option value="s6">Quartermaster.</option>
        <option value="s7">Standard bearer.</option>
        <option value="s8">Support staff (cook, blacksmith, or the like).</option>
    </select>
        
        <p><b>Feature: Military Rank</b> You have a military rank from your career as a soldier. Soldiers loyal to your former military organization still recognize your authority and influence, and they defer to you if they are of a lower rank. You can invoke your rank to exert influence over other soldiers and requisition simple equipment or horses for temporary use. You can also usually gain access to friendly military encampments and fortresses where your rank is recognized.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I'm always polite and respectful.</option>
        <option value="p2">I'm haunted by memories of war. I can't get the images of violence out of my mind.</option>
        <option value="p3">I've lost too many friends, and I'm slow to make new ones.</option>
        <option value="p4">I'm full of inspiring and cautionary tales from my military experience relevant to almost every combat situation.</option>
        <option value="p5">I can stare down a hell hound without flinching.</option>
        <option value="p6">I enjoy being strong and like breaking things.</option>
        <option value="p7">I have a crude sense of humor.</option>
        <option value="p8">I face problems head-on. A simple, direct solution is the best path to success.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Greater Good. Our lot is to lay down our lives in defense of others. (Good)</option>
        <option value="i2">Responsibility. I do what I must and obey just authority. (Lawful)</option>
        <option value="i3">Independence. When people follow orders blindly, they embrace a kind of tyranny. (Chaotic)</option>
        <option value="i4">Might. In life as in war, the stronger force wins. (Evil)</option>
        <option value="i5">Live and Let Live. Ideals aren't worth killing over or going to war for. (Neutral)</option>
        <option value="i6">Nation. My city, nation, or people are all that matter. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">I would still lay down my life for the people I served with.</option>
        <option value="b2">Someone saved my life on the battlefield. To this day, I will never leave a friend behind.</option>
        <option value="b3">My honor is my life.</option>
        <option value="b4">I'll never forget the crushing defeat my company suffered or the enemies who dealt it.</option>
        <option value="b5">Those who fight beside me are those worth dying for.</option>
        <option value="b6">I fight for those who cannot fight for themselves.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">The monstrous enemy we faced in battle still leaves me quivering with fear.</option>
        <option value="f2">I have little respect for anyone who is not a proven warrior.</option>
        <option value="f3">I made a terrible mistake in battle cost many lives – and I would do anything to keep that mistake secret.</option>
        <option value="f4">My hatred of my enemies is blind and unreasoning.</option>
        <option value="f5">I obey the law, even if the law causes misery.</option>
        <option value="f6">I'd rather eat my armor than admit when I'm wrong.</option>
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
        $gaming = $_POST['Gaming'];
        $specialty = $_POST['Specialty'];
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
            $_SESSION['skillb1'] = "Athletics";
            $_SESSION['skillb2'] = "Intimidation";
            $_SESSION['instrumentb'] = "";
            $_SESSION['artTools'] = "";
            $_SESSION['language1'] = "";
            $_SESSION['language2'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Soldier\n
                    Skill Proficiencies: Athletics, Intimidation\n
                    Tool Proficiencies: $gaming, vehicles (land)\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "
                     Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: An insignia of rank, a trophy taken from a fallen enemy, a set of bone dice or deck of cards, a set of common clothes, and a belt pouch containing 10 gp.\n";
            $txt .= "Feature: Military Rank\n
                     You have a military rank from your career as a soldier. Soldiers loyal to your former military organization still recognize your authority and influence, and they defer to you if they are of a lower rank. You can invoke your rank to exert influence over other soldiers and requisition simple equipment or horses for temporary use. You can also usually gain access to friendly military encampments and fortresses where your rank is recognized.\n";

            $txt .= "
                     Military Role: ";
            switch ($specialty) {
                case "s1":
                    $txt .= "Officer.\n";
                    break;
                case "s2":
                    $txt .= "Scout.\n";
                    break;
                case "s3":
                    $txt .= "Infantry.\n";
                    break;
                case "s4":
                    $txt .= "Cavalry.\n";
                    break;
                case "s5":
                    $txt .= "Healer.\n";
                    break;
                case "s6":
                    $txt .= "Quartermaster.\n";
                    break;
                case "s7":
                    $txt .= "Standard bearer.\n";
                    break;
                case "s8":
                    $txt .= "Support staff (cook, blacksmith, or the like).\n";
                    break;
            }

            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "I'm always polite and respectful.\n";
                    break;
                case "p2":
                    $txt .= "I'm haunted by memories of war. I can't get the images of violence out of my mind.\n";
                    break;
                case "p3":
                    $txt .= "I've lost too many friends, and I'm slow to make new ones.\n";
                    break;
                case "p4":
                    $txt .= "I'm full of inspiring and cautionary tales from my military experience relevant to almost every combat situation.\n";
                    break;
                case "p5":
                    $txt .= "I can stare down a hell hound without flinching.\n";
                    break;
                case "p6":
                    $txt .= "I enjoy being strong and like breaking things.\n";
                    break;
                case "p7":
                    $txt .= "I have a crude sense of humor.\n";
                    break;
                case "p8":
                    $txt .= "I face problems head-on. A simple, direct solution is the best path to success.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Greater Good. Our lot is to lay down our lives in defense of others. (Good)\n";
                    break;
                case "i2":
                    $txt .= "Responsibility. I do what I must and obey just authority. (Lawful)\n";
                    break;
                case "i3":
                    $txt .= "Independence. When people follow orders blindly, they embrace a kind of tyranny. (Chaotic)\n";
                    break;
                case "i4":
                    $txt .= "Might. In life as in war, the stronger force wins. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "Live and Let Live. Ideals aren't worth killing over or going to war for. (Neutral)\n";
                    break;
                case "i6":
                    $txt .= "Nation. My city, nation, or people are all that matter. (Any)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "I would still lay down my life for the people I served with.\n";
                    break;
                case "b2":
                    $txt .= "Someone saved my life on the battlefield. To this day, I will never leave a friend behind.\n";
                    break;
                case "b3":
                    $txt .= "My honor is my life.\n";
                    break;
                case "b4":
                    $txt .= "I'll never forget the crushing defeat my company suffered or the enemies who dealt it.\n";
                    break;
                case "b5":
                    $txt .= "Those who fight beside me are those worth dying for.\n";
                    break;
                case "b6":
                    $txt .= "I fight for those who cannot fight for themselves.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "The monstrous enemy we faced in battle still leaves me quivering with fear.\n";
                    break;
                case "f2":
                    $txt .= "I have little respect for anyone who is not a proven warrior.\n";
                    break;
                case "f3":
                    $txt .= "I made a terrible mistake in battle cost many lives – and I would do anything to keep that mistake secret.\n";
                    break;
                case "f4":
                    $txt .= "My hatred of my enemies is blind and unreasoning\n";
                    break;
                case "f5":
                    $txt .= "I obey the law, even if the law causes misery.\n";
                    break;
                case "f6":
                    $txt .= "I'd rather eat my armor than admit when I'm wrong.\n";
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