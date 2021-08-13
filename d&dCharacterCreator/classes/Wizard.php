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
    
    <h2>Wizard</h2>
    <p>Please select your starting proficiencies, gear, and spell.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Arcana">Arcana</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Investigation">Investigation</option>
        <option value="Medicine">Medicine</option>
        <option value="Religion">Religion</option>
    </select>

    <label for="skillc2">Choose your second proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Arcana">Arcana</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Investigation">Investigation</option>
        <option value="Medicine">Medicine</option>
        <option value="Religion">Religion</option>
    </select>
     
<!--The buttons to pick your gear -->
        <br>
        <p>Select your main weapon</p>
        <input type="radio" id="Quarterstaff" name="mainWeapon" value="Quarterstaff" checked><label>Quarterstaff </label><br>
        <input type="radio" id="Dagger" name="mainWeapon" value="Dagger"><label>Dagger</label><br>
        
        <p>Select your arcane item</p>
        <input type="radio" id="ComponentPouch" name="arcane" value="a Component Pouch" checked><label>a Component Pouch</label><br>
        <input type="radio" id="ArcaneFocus" name="arcane" value="an Arcane Focus"><label>an Arcane Focus</label><br>
        
        <p>Select your pack</p>
        <input type="radio" id="Scholar'sPack" name="pack" value="Scholar's Pack"><label>Scholar's Pack</label><br>
        <input type="radio" id="Explorer'sPack" name="pack" value="Explorer's Pack" checked><label>Explorer's Pack</label><br>
        
        <p>You also get a Spellbook</p>
        
        <p>Select your starting spells</p>
        <label for="cantrip1">Choose your first cantrip:</label>
        <select name="cantrip1" id="cantrip1">
            <option value="Acid Splash">Acid Splash</option>
            <option value="Blade Ward">Blade Ward</option>
            <option value="Chill Touch">Chill Touch</option>
            <option value="Dancing Lights">Dancing Lights</option>
            <option value="Fire Bolt">Fire Bolt</option>
            <option value="Friends">Friends</option>
            <option value="Light">Light</option>
            <option value="Mage Hand">Mage Hand</option>
            <option value="Mending">Mending</option>
            <option value="Message">Message</option>
            <option value="Minor Illusion">Minor Illusion</option>
            <option value="Poison Spray">Poison Spray</option>
            <option value="Prestidigitation">Prestidigitation</option>
            <option value="Ray of Frost">Ray of Frost</option>
            <option value="Shocking Grasp">Shocking Grasp</option>
            <option value="True Strike">True Strike</option>
        </select>
        <br>
        
        <label for="cantrip2">Choose your second cantrip:</label>
        <select name="cantrip2" id="cantrip2">
            <option value="Acid Splash">Acid Splash</option>
            <option value="Blade Ward">Blade Ward</option>
            <option value="Chill Touch">Chill Touch</option>
            <option value="Dancing Lights">Dancing Lights</option>
            <option value="Fire Bolt">Fire Bolt</option>
            <option value="Friends">Friends</option>
            <option value="Light">Light</option>
            <option value="Mage Hand">Mage Hand</option>
            <option value="Mending">Mending</option>
            <option value="Message">Message</option>
            <option value="Minor Illusion">Minor Illusion</option>
            <option value="Poison Spray">Poison Spray</option>
            <option value="Prestidigitation">Prestidigitation</option>
            <option value="Ray of Frost">Ray of Frost</option>
            <option value="Shocking Grasp">Shocking Grasp</option>
            <option value="True Strike">True Strike</option>
        </select>
        <br>
        
        <label for="cantrip3">Choose your third cantrip:</label>
        <select name="cantrip3" id="cantrip3">
            <option value="Acid Splash">Acid Splash</option>
            <option value="Blade Ward">Blade Ward</option>
            <option value="Chill Touch">Chill Touch</option>
            <option value="Dancing Lights">Dancing Lights</option>
            <option value="Fire Bolt">Fire Bolt</option>
            <option value="Friends">Friends</option>
            <option value="Light">Light</option>
            <option value="Mage Hand">Mage Hand</option>
            <option value="Mending">Mending</option>
            <option value="Message">Message</option>
            <option value="Minor Illusion">Minor Illusion</option>
            <option value="Poison Spray">Poison Spray</option>
            <option value="Prestidigitation">Prestidigitation</option>
            <option value="Ray of Frost">Ray of Frost</option>
            <option value="Shocking Grasp">Shocking Grasp</option>
            <option value="True Strike">True Strike</option>
        </select>
        <br>
        
        <p>Pick the spells for your spellbook</p>
        
        <label for="1stlevel1">Choose your first level 1 spell:</label>
        <select name="1stlevel1" id="1stlevel1">
            <option value="Alarm">Alarm</option>
            <option value="Burning Hands">Burning Hands</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Chromatic Orb">Chromatic Orb</option>
            <option value="Color Spray">Color Spray</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Expeditious Retreat">Expeditious Retreat</option>
            <option value="False Life">False Life</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Find Familar">Find Familar</option>
            <option value="Fog Cloud">Fog Cloud</option>
            <option value="Grease">Grease</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Jump">Jump</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Mage Armor">Mage Armor</option>
            <option value="Magic Missile">Magic Missile</option>
            <option value="Protection from Evil and Good">Protection from Evil and Good</option>
            <option value="Ray of Sickness">Ray of Sickness</option>
            <option value="Shield">Shield</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Floating Disk">Floating Disk</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
            <option value="Witch Bolt">Witch Bolt</option>
        </select>
        <br>
        
        <label for="1stlevel2">Choose your second level 1 spell:</label>
        <select name="1stlevel2" id="1stlevel2">
            <option value="Alarm">Alarm</option>
            <option value="Burning Hands">Burning Hands</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Chromatic Orb">Chromatic Orb</option>
            <option value="Color Spray">Color Spray</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Expeditious Retreat">Expeditious Retreat</option>
            <option value="False Life">False Life</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Find Familar">Find Familar</option>
            <option value="Fog Cloud">Fog Cloud</option>
            <option value="Grease">Grease</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Jump">Jump</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Mage Armor">Mage Armor</option>
            <option value="Magic Missile">Magic Missile</option>
            <option value="Protection from Evil and Good">Protection from Evil and Good</option>
            <option value="Ray of Sickness">Ray of Sickness</option>
            <option value="Shield">Shield</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Floating Disk">Floating Disk</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
            <option value="Witch Bolt">Witch Bolt</option>
        </select>
        <br>
        
        <label for="1stlevel3">Choose your third level 1 spell:</label>
        <select name="1stlevel3" id="1stlevel3">
            <option value="Alarm">Alarm</option>
            <option value="Burning Hands">Burning Hands</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Chromatic Orb">Chromatic Orb</option>
            <option value="Color Spray">Color Spray</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Expeditious Retreat">Expeditious Retreat</option>
            <option value="False Life">False Life</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Find Familar">Find Familar</option>
            <option value="Fog Cloud">Fog Cloud</option>
            <option value="Grease">Grease</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Jump">Jump</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Mage Armor">Mage Armor</option>
            <option value="Magic Missile">Magic Missile</option>
            <option value="Protection from Evil and Good">Protection from Evil and Good</option>
            <option value="Ray of Sickness">Ray of Sickness</option>
            <option value="Shield">Shield</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Floating Disk">Floating Disk</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
            <option value="Witch Bolt">Witch Bolt</option>
        </select>
        <br>
        
        <label for="1stlevel4">Choose your fourth level 1 spell:</label>
        <select name="1stlevel4" id="1stlevel4">
            <option value="Alarm">Alarm</option>
            <option value="Burning Hands">Burning Hands</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Chromatic Orb">Chromatic Orb</option>
            <option value="Color Spray">Color Spray</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Expeditious Retreat">Expeditious Retreat</option>
            <option value="False Life">False Life</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Find Familar">Find Familar</option>
            <option value="Fog Cloud">Fog Cloud</option>
            <option value="Grease">Grease</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Jump">Jump</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Mage Armor">Mage Armor</option>
            <option value="Magic Missile">Magic Missile</option>
            <option value="Protection from Evil and Good">Protection from Evil and Good</option>
            <option value="Ray of Sickness">Ray of Sickness</option>
            <option value="Shield">Shield</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Floating Disk">Floating Disk</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
            <option value="Witch Bolt">Witch Bolt</option>
        </select>
        <br>
        
        <label for="1stlevel5">Choose your fifth level 1 spell:</label>
        <select name="1stlevel5" id="1stlevel5">
            <option value="Alarm">Alarm</option>
            <option value="Burning Hands">Burning Hands</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Chromatic Orb">Chromatic Orb</option>
            <option value="Color Spray">Color Spray</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Expeditious Retreat">Expeditious Retreat</option>
            <option value="False Life">False Life</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Find Familar">Find Familar</option>
            <option value="Fog Cloud">Fog Cloud</option>
            <option value="Grease">Grease</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Jump">Jump</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Mage Armor">Mage Armor</option>
            <option value="Magic Missile">Magic Missile</option>
            <option value="Protection from Evil and Good">Protection from Evil and Good</option>
            <option value="Ray of Sickness">Ray of Sickness</option>
            <option value="Shield">Shield</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Floating Disk">Floating Disk</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
            <option value="Witch Bolt">Witch Bolt</option>
        </select>
        <br>
        
        <label for="1stlevel6">Choose your sixth level 1 spell:</label>
        <select name="1stlevel6" id="1stlevel6">
            <option value="Alarm">Alarm</option>
            <option value="Burning Hands">Burning Hands</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Chromatic Orb">Chromatic Orb</option>
            <option value="Color Spray">Color Spray</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Expeditious Retreat">Expeditious Retreat</option>
            <option value="False Life">False Life</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Find Familar">Find Familar</option>
            <option value="Fog Cloud">Fog Cloud</option>
            <option value="Grease">Grease</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Jump">Jump</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Mage Armor">Mage Armor</option>
            <option value="Magic Missile">Magic Missile</option>
            <option value="Protection from Evil and Good">Protection from Evil and Good</option>
            <option value="Ray of Sickness">Ray of Sickness</option>
            <option value="Shield">Shield</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Floating Disk">Floating Disk</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
            <option value="Witch Bolt">Witch Bolt</option>
        </select>
        <br>
        
    <input type="submit" value="Submit">
    </form>
    <?php
    // when the user pushes the submit button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // collect value of input field and
        // diaplay the selected skills, gear, and spells
        $skillc1 = $_POST['skillc1'];
        $skillc2 = $_POST['skillc2'];
        $mainW = $_POST['mainWeapon'];
        $arcane = $_POST['arcane'];
        $pack = $_POST['pack'];
        $patron = $_POST['patron'];
        $cantrip1 = $_POST['cantrip1'];
        $cantrip2 = $_POST['cantrip2'];
        $cantrip3 = $_POST['cantrip3'];
        $flevel1 = $_POST['1stlevel1'];
        $flevel2 = $_POST['1stlevel2'];
        $flevel3 = $_POST['1stlevel3'];
        $flevel4 = $_POST['1stlevel4'];
        $flevel5 = $_POST['1stlevel5'];
        $flevel6 = $_POST['1stlevel6'];
        
        // if statements to check if duplicate selections
        if ($skillc1 == $skillc2){
            echo "Please select different skills";
        } elseif($cantrip1 == $cantrip2 || $cantrip1 == $cantrip3 || $cantrip2 == $cantrip3){
            echo "Please select different cantrips";
        } elseif($flevel1 == $flevel2 || $flevel1 == $flevel3 || $flevel1 == $flevel4 || $flevel1 == $flevel5 || $flevel1 == $flevel6 || $flevel2 == $flevel3 || $flevel2 == $flevel4 || $flevel2 == $flevel5 || $flevel2 == $flevel6 || $flevel3 == $flevel4 || $flevel3 == $flevel5 || $flevel3 == $flevel6 || $flevel4 == $flevel5 || $flevel4 == $flevel6 || $flevel5 == $flevel6){
            echo "Please select different level 1 spells";
        }
        else{
            if($_SESSION['skillb1'] == $skillc1 || $_SESSION['skillb1'] == $skillc2 || $_SESSION['skillb1'] == $skillc3 || $_SESSION['skillb2'] == $skillc1 || $_SESSION['skillb2'] == $skillc2 || $_SESSION['skillb2'] == $skillc3){
                echo "You already have some of these skills from your bakcground";
            } 
            else{
                
                // function to calculate stat bonus/penalty
            function statbonus($stat){
                $Bonus = 0;
                if ($stat > 11){
                    $Bonus = round(($stat - 10) / 2, 0, PHP_ROUND_HALF_DOWN);
                } elseif($stat < 10){
                    $Bonus = round(($stat - 10) / 2, 0, PHP_ROUND_HALF_UP);
                }
                return $Bonus;
            }
            // open a file for the character 
            $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");
            $spellcasting = statbonus($_SESSION['int']);
            $spellDC = 10 + $spellcasting;
            $spellattack = 2 + $spellcasting;
            // store class abilities in string and output to screen and file.
            $txt = "<h2>Wizard Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d6 per wizard levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 6 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d6(or 4) + your Constitution modifier per wizard level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> None<br>\n
                    <b>Weapons:</b> Daggers, darts, slings, quarterstaffs, light crossbows<br>\n
                    <b>Tools:</b> None<br>\n
                    <b>Saving Throws:</b> Intelligence, Wisdom<br>\n
                    <b>Skills:</b> $skillc1 and $skillc2\n";
            $txt .= "<h3>Equipment:</h3>\n
                    $mainW, $arcane, $pack, Leather armor(AC 11 + Dex mod), any Simple Weapon, and two Daggers\n";
            $txt .= "<h3>Spellcasting:</h3>\n
                    As a student of arcane magic, you have a spellbook containing spells that show the first glimmerings of your true power. See Spells Rules for the general rules of spellcasting and the Spells Listing for the wizard spell list.\n
                    <h4>Cantrips:</h4>\n
                    At 1st level, you know three cantrips of your choice from the wizard spell list. You learn additional wizard cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Wizard table.\n
                    <h4>Spellbook:</h4>\n
                    At 1st level, you have a spellbook containing six 1st-level wizard spells of your choice. Your spellbook is the repository of the wizard spells you know, except your cantrips, which are fixed in your mind.\n
                    <h4>Preparing and Casting Spells</h4>\n
                    The Wizard table shows how many spell slots you have to cast your wizard spells of 1st level and higher. To cast one of these spells, you must expend a slot of the spell’s level or higher. You regain all expended spell slots when you finish a long rest.<br>\n
                    The Spells Known column of the Warlock table shows when you learn more warlock spells of your choice of 1st level or higher. A spell you choose must be of a level no higher than what's shown in the table's Slot Level column for your level. When you reach 6th level, for example, you learn a new warlock spell, which can be 1st, 2nd, or 3rd level.<br>\n
                    You prepare the list of wizard spells that are available for you to cast. To do so, choose a number of wizard spells from your spellbook equal to your Intelligence modifier + your wizard level (minimum of one spell). The spells must be of a level for which you have spell slots.\n
                    You can change your list of prepared spells when you finish a long rest. Preparing a new list of wizard spells requires time spent studying your spellbook and memorizing the incantations and gestures you must make to cast the spell: at least 1 minute per spell level for each spell on your list.\n
                    <h4>Spellcasting Ability:</h4>\n
                    Intelligence is your spellcasting ability for your wizard spells, since you learn your spells through dedicated study and memorization. You use your Intelligence whenever a spell refers to your spellcasting ability. In addition, you use your Intelligence modifier when setting the saving throw DC for a wizard spell you cast and when making an attack roll with one.\n
                    <h4>Spell save DC</h4> = 8 + your proficiency bonus + your Intelligence modifier. ($spellDC)\n
                    <h4>Spell attack modifier</h4> = your proficiency bonus + your Intelligence modifier. ($spellattack)\n
                    <h4>Ritual Casting:</h4>\n
                    You can cast a wizard spell as a ritual if that spell has the ritual tag and you have the spell in your spellbook. You don’t need to have the spell prepared.\n
                    <h4>Spellcasting Focus:</h4>\n
                    You can use an arcane focus (see the Adventuring Gear section) as a spellcasting focus for your wizard spells.\n
                    <h4>Learning Spells of 1st Level and Higher:</h4>\n
                    Each time you gain a wizard level, you can add two wizard spells of your choice to your spellbook for free. Each of these spells must be of a level for which you have spell slots, as shown on the Wizard table. On your adventures, you might find other spells that you can add to your spellbook (see the “Your Spellbook” sidebar on p.114).\n";
            $txt .= "<h3>Your Spellbook:</h3>\n
                    The spells that you add to your spellbook as you gain levels reflect the arcane research you conduct on your own, as well as intellectual breakthroughs you have had about the nature of the multiverse. You might find other spells during your adventures. You could discover a spell recorded on a scroll in an evil wizard’s chest, for example, or in a dusty tome in an ancient library.\n
                    <h4>Copying a Spell into the Book.</h4>\n
                    When you find a wizard spell of 1st level or higher, you can add it to your spellbook if it is of a spell level you can prepare and if you can spare the time to decipher and copy it.<br>\n
                    Copying that spell into your spellbook involves reproducing the basic form of the spell, then deciphering the unique system of notation used by the wizard who wrote it. You must practice the spell until you understand the sounds or gestures required, then transcribe it into your spellbook using your own notation.<br>\n
                    For each level of the spell, the process takes 2 hours and costs 50 gp. The cost represents material components you expend as you experiment with the spell to master it, as well as the fine inks you need to record it. Once you have spent this time and money, you can prepare the spell just like your other spells.<br>\n
                    <h4>Replacing the Book.</h4>\n
                    You can copy a spell from your own spellbook into another book—for example, if you want to make a backup copy of your spellbook. This is just like copying a new spell into your spellbook, but faster and easier, since you understand your own notation and already know how to cast the spell. You need spend only 1 hour and 10 gp for each level of the copied spell.<br>\n
                    If you lose your spellbook, you can use the same procedure to transcribe the spells that you have prepared into a new spellbook. Filling out the remainder of your spellbook requires you to find new spells to do so, as normal. For this reason, many wizards keep backup spellbooks in a safe place.\n
                    <h4>The Book’s Appearance.</h4>\n
                    Your spellbook is a unique compilation of spells, with its own decorative flourishes and margin notes. It might be a plain, functional leather volume that you received as a gift from your master, a finely bound gilt-edged tome you found in an ancient library, or even a loose collection of notes scrounged together after you lost your previous spellbook in a mishap.\n";
            $txt .= "<h3>Arcane Recovery:</h3>\n
                    You have learned to regain some of your magical energy by studying your spellbook. Once per day when you finish a short rest, you can choose expended spell slots to recover. The spell slots can have a combined level that is equal to or less than half your wizard level (rounded up), and none of the slots can be 6th level or higher.\n";
            
            $txt .= "<h3>Spell list:</h3>\n
                    Cantrips:<br>\n
                    1. $cantrip1<br>
                    2. $cantrip2<br>
                    3. $cantrip3<br>\n
                    1st level<br>\n
                    1. $flevel1<br>
                    2. $flevel2<br>
                    3. $flevel3<br>
                    4. $flevel4<br>
                    5. $flevel5<br>
                    6. $flevel6<br>";
            echo "<h3>Your character is done.</h3>";
            echo "<h3>If you wish to save your character, please rename the file or move file to another location.</h3>";
            echo $txt;
            $txt = strip_tags($txt);
            fwrite($characterFile, $txt);

            fclose($characterFile);
            ?> <p><a href="../d_&_d_character_creator_v2.php">Back to start.</a></p>
<?php
        }
        }
    }
    
?> 
</body>
</html>