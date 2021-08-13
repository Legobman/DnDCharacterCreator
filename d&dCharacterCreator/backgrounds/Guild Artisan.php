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
    <h2>Guild Artisan</h2>
    <p>Please select your starting traits.</p>
    <p><b>Skill Proficiencies:</b> Insight, Persuasion</p>
    <p><b>Tool Proficiencies:</b> One type of artisan's tools</p>
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
        
        <label for="Guild">Choose your Guild Business:</label>
    <select name="Guild" id="Guild">
        <option value="g1">Alchemists and apothecaries.</option>
        <option value="g2">Armorers, locksmiths, and finesmiths.</option>
        <option value="g3">Brewers, distillers, and vintners.</option>
        <option value="g4">Calligraphers, scribes, and scriveners.</option>
        <option value="g5">Carpenters, roofers, and plasterers.</option>
        <option value="g6">Cartographers, surveyors, and chart-makers.</option>
        <option value="g7">Cobblers and shoemakers.</option>
        <option value="g8">Cooks and bakers.</option>
        <option value="g9">Glassblowers and glaziers.</option>
        <option value="g10">Jewelers and gemcutters.</option>
        <option value="g11">Leatherworkers, skinners, and tanners.</option>
        <option value="g12">Masons and stonecutters.</option>
        <option value="g13">Painters, limners, and sign-makers.</option>
        <option value="g14">Potters and tile-makers.</option>
        <option value="g15">Shipwrights and sailmakers.</option>
        <option value="g16">Smiths and metal-forgers.</option>
        <option value="g17">Tinkers, pewterers, and casters.</option>
        <option value="g18">Wagon-makers and wheelwrights.</option>
        <option value="g19">Weavers and dyers.</option>
        <option value="g20">Woodcarvers, coopers, and bowyers.</option>
    </select>
        
    <p><b>Eqiupment:</b> A set of artisan's tools (one of your choice), a letter of introduction from your guild, a set of traveler's clothes, and a belt pouch containing 15 gp.</p>
        
        <label for="bGear">Choose your Artisan's tools:</label>
    <select name="bGear" id="bGear">
        <option value="Alchemist's supplies">Alchemist's supplies.</option>
        <option value="Brewer's supplies">Brewer's supplies.</option>
        <option value="Calligrapher's supplies">Calligrapher's supplies.</option>
        <option value="Carpenter's tools">Carpenter's tools.</option>
        <option value="Cartogrpher's tools">Cartogrpher's tools.</option>
        <option value="Cobbler's tools">Cobbler's tools.</option>
        <option value="Cook's utensils">Cook's utensils.</option>
        <option value="Glassblower's tools">Glassblower's tools.</option>
        <option value="Jeweler's tools">Jeweler's tools.</option>
        <option value="Leatherworker's tools">Leatherworker's tools.</option>
        <option value="Mason's tools">Mason's tools.</option>
        <option value="Painter's supplies">Painter's supplies.</option>
        <option value="Potter's tools">Potter's tools.</option>
        <option value="Smith's tools">Smith's tools.</option>
        <option value="Tinker's tools">Tinker's tools.</option>
        <option value="Weaver's tools">Weaver's tools.</option>
        <option value="Woodcarver's tools">Woodcarver's tools.</option>
    </select>
        
        <p><b>Feature: Guild Membership</b> As an established and respected member of a guild, you can rely on certain benefits that membership provides. Your fellow guild members will provide you with lodging and food if necessary, and pay for your funeral if needed. In some cities and towns, a guildhall offers a central place to meet other members of your profession, which can be a good place to meet potential patrons, allies, or hirelings.</p>
        <p>Guilds often wield tremendous political power. If you are accused of a crime, your guild will support you if a good case can be made for your innocence or the crime is justifiable. You can also gain access to powerful political figures through the guild, if you are a member in good standing. Such connections might require the donation of money or magic items to the guild's coffers.</p>
        <p>You must pay dues of 5 gp per month to the guild. If you miss payments, you must make up back dues to remain in the guild's good graces.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I believe that anything worth doing is worth doing right. I can't help it – I'm a perfectionist.</option>
        <option value="p2">I'm a snob who looks down on those who can't appreciate fine art.</option>
        <option value="p3">I always want to know how things work and what makes people tick.</option>
        <option value="p4">I'm full of witty aphorisms and have a proverb for every occasion.</option>
        <option value="p5">I'm rude to people who lack my commitment to hard work and fair play.</option>
        <option value="p6">I like to talk at length about my profession.</option>
        <option value="p7">I don't part with my money easily and will haggle tirelessly to get the best deal possible.</option>
        <option value="p8">I'm well known for my work, and I want to make sure everyone appreciates it. I'm always taken aback when people haven't heard of me.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Community. It is the duty of all civilized people to strengthen the bonds of community and the security of civilization. (Lawful)</option>
        <option value="i2">Generosity. My talents were given to me so that I could use them to benefit the world. (Good)</option>
        <option value="i3">Freedom. Everyone should be free to pursue his or her own livelihood. (Chaotic)</option>
        <option value="i4">Greed. I'm only in it for the money. (Evil)</option>
        <option value="i5">People. I'm committed to the people I care about, not to ideals. (Neutral)</option>
        <option value="i6">Aspiration. I work hard to be the best there is at my craft. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">The workshop where I learned my trade is the most important place in the world to me.</option>
        <option value="b2">I created a great work for someone, and then found them unworthy to receive it. I'm still looking for someone worthy.</option>
        <option value="b3">I owe my guild a great debt for forging me into the person I am today.</option>
        <option value="b4">I pursue wealth to secure someone's love.</option>
        <option value="b5">One day I will return to my guild and prove that I am the greatest artisan of them all.</option>
        <option value="b6">I will get revenge on the evil forces that destroyed my place of business and ruined my livelihood.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">I'll do anything to get my hands on something rare or priceless.</option>
        <option value="f2">I'm quick to assume that someone is trying to cheat me.</option>
        <option value="f3">No one must ever learn that I once stole money from guild coffers.</option>
        <option value="f4">I'm never satisfied with what I have – I always want more.</option>
        <option value="f5">I would kill to acquire a noble title.</option>
        <option value="f6">I'm horribly jealous of anyone who can outshine my handiwork. Everywhere I go, I'm surrounded by rivals.</option>
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
        $bGear = $_POST['bGear'];
        $guild = $_POST['Guild'];
        $_SESSION['instrumentb'] = "";
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
            $_SESSION['skillb1'] = "Insight";
            $_SESSION['skillb2'] = "Persuasion";
            $_SESSION['language1'] = $language1;
            $_SESSION['language2'] = "";
            $_SESSION['artTools'] = $bGear;
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Guild Artisan\n
                    Skill Proficiencies: Insight, Persuasion\n
                    Tool Proficiencies: $bGear\n
                    Languages: $language1.\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: $bGear, a letter of introduction from your guild, a set of traveler's clothes, and a belt pouch containing 15 gp.\n";
            $txt .= "Feature: Guild Membership\n
                     As an established and respected member of a guild, you can rely on certain benefits that membership provides. Your fellow guild members will provide you with lodging and food if necessary, and pay for your funeral if needed. In some cities and towns, a guildhall offers a central place to meet other members of your profession, which can be a good place to meet potential patrons, allies, or hirelings. \n
                     Guilds often wield tremendous political power. If you are accused of a crime, your guild will support you if a good case can be made for your innocence or the crime is justifiable. You can also gain access to powerful political figures through the guild, if you are a member in good standing. Such connections might require the donation of money or magic items to the guild's coffers.\n
                     You must pay dues of 5 gp per month to the guild. If you miss payments, you must make up back dues to remain in the guild's good graces.\n";

            $txt .= "
                     Guild Business: ";
            switch ($guild) {
                case "g1":
                    $txt .= "Alchemists and apothecaries.\n";
                    break;
                case "g2":
                    $txt .= "Armorers, locksmiths, and finesmiths.\n";
                    break;
                case "g3":
                    $txt .= "Brewers, distillers, and vintners.\n";
                    break;
                case "g4":
                    $txt .= "Calligraphers, scribes, and scriveners.\n";
                    break;
                case "g5":
                    $txt .= "Carpenters, roofers, and plasterers.\n";
                    break;
                case "g6":
                    $txt .= "Cartographers, surveyors, and chart-makers.\n";
                    break;
                case "g7":
                    $txt .= "Cobblers and shoemakers.\n";
                    break;
                case "g8":
                    $txt .= "Cooks and bakers.\n";
                    break;
                case "g9":
                    $txt .= "Glassblowers and glaziers.\n";
                    break;
                case "g10":
                    $txt .= "Jewelers and gemcutters.\n";
                    break;
                case "g11":
                    $txt .= "Leatherworkers, skinners, and tanners.\n";
                    break;
                case "g12":
                    $txt .= "Masons and stonecutters .\n";
                    break;
                case "g13":
                    $txt .= "Painters, limners, and sign-makers.\n";
                    break;
                case "g14":
                    $txt .= "Potters and tile-makers.\n";
                    break;
                case "g15":
                    $txt .= "Shipwrights and sailmakers.\n";
                    break;
                case "g16":
                    $txt .= "Smiths and metal-forgers.\n";
                    break;
                case "g17":
                    $txt .= "Tinkers, pewterers, and casters.\n";
                    break;
                case "g18":
                    $txt .= "Wagon-makers and wheelwrights.\n";
                    break;
                case "g19":
                    $txt .= "Weavers and dyers.\n";
                    break;
                case "g20":
                    $txt .= "Woodcarvers, coopers, and bowyers.\n";
                    break;
            }
            
            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "I believe that anything worth doing is worth doing right. I can't help it – I'm a perfectionist.\n";
                    break;
                case "p2":
                    $txt .= "I'm a snob who looks down on those who can't appreciate fine art.\n";
                    break;
                case "p3":
                    $txt .= "I always want to know how things work and what makes people tick.\n";
                    break;
                case "p4":
                    $txt .= "I'm full of witty aphorisms and have a proverb for every occasion.\n";
                    break;
                case "p5":
                    $txt .= "I'm rude to people who lack my commitment to hard work and fair play.\n";
                    break;
                case "p6":
                    $txt .= "I like to talk at length about my profession.\n";
                    break;
                case "p7":
                    $txt .= "I don't part with my money easily and will haggle tirelessly to get the best deal possible.\n";
                    break;
                case "p8":
                    $txt .= "I'm well known for my work, and I want to make sure everyone appreciates it. I'm always taken aback when people haven't heard of me.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Community. It is the duty of all civilized people to strengthen the bonds of community and the security of civilization. (Lawful)\n";
                    break;
                case "i2":
                    $txt .= "Generosity. My talents were given to me so that I could use them to benefit the world. (Good)\n";
                    break;
                case "i3":
                    $txt .= "Freedom. Everyone should be free to pursue his or her own livelihood. (Chaotic)\n";
                    break;
                case "i4":
                    $txt .= "Greed. I'm only in it for the money. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "People. I'm committed to the people I care about, not to ideals. (Neutral)\n";
                    break;
                case "i6":
                    $txt .= "Aspiration. I work hard to be the best there is at my craft.\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "The workshop where I learned my trade is the most important place in the world to me.\n";
                    break;
                case "b2":
                    $txt .= "I created a great work for someone, and then found them unworthy to receive it. I'm still looking for someone worthy.\n";
                    break;
                case "b3":
                    $txt .= "I owe my guild a great debt for forging me into the person I am today.\n";
                    break;
                case "b4":
                    $txt .= "I pursue wealth to secure someone's love.\n";
                    break;
                case "b5":
                    $txt .= "One day I will return to my guild and prove that I am the greatest artisan of them all.\n";
                    break;
                case "b6":
                    $txt .= "I will get revenge on the evil forces that destroyed my place of business and ruined my livelihood.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "I'll do anything to get my hands on something rare or priceless.\n";
                    break;
                case "f2":
                    $txt .= "I'm quick to assume that someone is trying to cheat me.\n";
                    break;
                case "f3":
                    $txt .= "No one must ever learn that I once stole money from guild coffers.\n";
                    break;
                case "f4":
                    $txt .= "I'm never satisfied with what I have – I always want more.\n";
                    break;
                case "f5":
                    $txt .= "I would kill to acquire a noble title.\n";
                    break;
                case "f6":
                    $txt .= "I'm horribly jealous of anyone who can outshine my handiwork. Everywhere I go, I'm surrounded by rivals.\n";
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