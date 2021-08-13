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
    
    <h2>Warlock</h2>
    <p>Please select your starting proficiencies, gear, and spell.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Arcana">Arcana</option>
        <option value="Deception">Deception</option>
        <option value="History">History</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Nature">Nature</option>
        <option value="Religion">Religion</option>
    </select>

    <label for="skillc2">Choose your second proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Arcana">Arcana</option>
        <option value="Deception">Deception</option>
        <option value="History">History</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Nature">Nature</option>
        <option value="Religion">Religion</option>
    </select>
     
<!--The buttons to pick your gear -->
        <br>
        <p>Select your main weapon</p>
        <input type="radio" id="Light Crossbow" name="mainWeapon" value="a Light Crossbow(20 bolts)" checked><label>a Light Crossbow(20 bolts)</label><br>
        <input type="radio" id="AnySimple" name="mainWeapon" value="Any Simple"><label>Any Simple Weapon</label><br>
        
        <p>Select your arcane item</p>
        <input type="radio" id="ComponentPouch" name="arcane" value="a Component Pouch" checked><label>a Component Pouch</label><br>
        <input type="radio" id="ArcaneFocus" name="arcane" value="an Arcane Focus"><label>an Arcane Focus</label><br>
        
        <p>Select your pack</p>
        <input type="radio" id="Scholar'sPack" name="pack" value="Scholar's Pack"><label>Scholar's Pack</label><br>
        <input type="radio" id="Dungeoneer'sPack" name="pack" value="Dungeoneer's Pack" checked><label>Dungeoneer's Pack</label><br>
        
        <p>You also get Leather armor(AC 11 + Dex mod), any Simple Weapon, and two Daggers</p>
        
        <p>Select your Sorcerous Origin</p>
        <input type="radio" id="Archfey" name="patron" value="The Archfey" checked><label>The Archfey</label><br>
        <input type="radio" id="Fiend" name="patron" value="The Fiend"><label>The Fiend</label><br>
        <input type="radio" id="GreatOldOne" name="patron" value="The Great Old One"><label>The Great Old One</label><br>
        
        <p>Select your starting spells</p>
        <label for="cantrip1">Choose your first cantrip:</label>
        <select name="cantrip1" id="cantrip1">
            <option value="Blade Ward">Blade Ward</option>
            <option value="Chill Touch">Chill Touch</option>
            <option value="Eldritch Blast">Eldritch Blast</option>
            <option value="Friends">Friends</option>
            <option value="Mage Hand">Mage Hand</option>
            <option value="Minor Illusion">Minor Illusion</option>
            <option value="Poison Spray">Poison Spray</option>
            <option value="Prestidigitation">Prestidigitation</option>
            <option value="True Strike">True Strike</option>
        </select>
        <br>
        
        <label for="cantrip2">Choose your first cantrip:</label>
        <select name="cantrip2" id="cantrip2">
            <option value="Blade Ward">Blade Ward</option>
            <option value="Chill Touch">Chill Touch</option>
            <option value="Eldritch Blast">Eldritch Blast</option>
            <option value="Friends">Friends</option>
            <option value="Mage Hand">Mage Hand</option>
            <option value="Minor Illusion">Minor Illusion</option>
            <option value="Poison Spray">Poison Spray</option>
            <option value="Prestidigitation">Prestidigitation</option>
            <option value="True Strike">True Strike</option>
        </select>
        <br>
        
        <label for="1stlevel1">Choose your first level 1 spell:</label>
        <select name="1stlevel1" id="1stlevel1">
            <option value="Armor of Agathys">Armor of Agathys</option>
            <option value="Arms of Hadar">Arms of Hadar</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Expeditious Retreat">Expeditious Retreat</option>
            <option value="Hellish Rebuke">Hellish Rebuke</option>
            <option value="Hex">Hex</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Protection from Evil and Good">Protection from Evil and Good</option>
            <option value="Unseen Servant">Unseen Servant</option>
            <option value="Witch Bolt">Witch Bolt</option>
        </select>
        <br>
        
        <label for="1stlevel2">Choose your second level 1 spell:</label>
        <select name="1stlevel2" id="1stlevel2">
            <option value="Armor of Agathys">Armor of Agathys</option>
            <option value="Arms of Hadar">Arms of Hadar</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Expeditious Retreat">Expeditious Retreat</option>
            <option value="Hellish Rebuke">Hellish Rebuke</option>
            <option value="Hex">Hex</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Protection from Evil and Good">Protection from Evil and Good</option>
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
        $flevel1 = $_POST['1stlevel1'];
        $flevel2 = $_POST['1stlevel2'];
        
        // if statements to check if duplicate selections
        if ($skillc1 == $skillc2){
            echo "Please select different skills";
        } elseif($cantrip1 == $cantrip2){
            echo "Please select different cantrips";
        } elseif($flevel1 == $flevel2){
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
            $spellcasting = statbonus($_SESSION['cha']);
            $spellDC = 10 + $spellcasting;
            $spellattack = 2 + $spellcasting;
            // store class abilities in string and output to screen and file.
            $txt = "<h2>Warlock Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d8 per warlock levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 8 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d8(or 5) + your Constitution modifier per warlock level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> Light armor<br>\n
                    <b>Weapons:</b> Simple weapons<br>\n
                    <b>Tools:</b> None<br>\n
                    <b>Saving Throws:</b> Wisdom, Charisma<br>\n
                    <b>Skills:</b> $skillc1 and $skillc2\n";
            $txt .= "<h3>Equipment:</h3>\n
                    $mainW, $arcane, $pack, Leather armor(AC 11 + Dex mod), any Simple Weapon, and two Daggers\n";
            $txt .= "<h3>Pact Magic:</h3>\n
                    Your arcane research and the magic bestowed on you by your patron have given you facility with spells.\n
                    <h4>Cantrips:</h4>\n
                    You know two cantrips of your choice from the warlock spell list. You learn additional warlock cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Warlock table.\n
                    <h4>Spell Slots:</h4>\n
                    The Warlock table shows how many spell slots you have. The table also shows what the level of those slots is; all of your spell slots are the same level. To cast one of your warlock spells of 1st level or higher, you must expend a spell slot. You regain all expended spell slots when you finish a short or long rest. (2 at 1st level)\n
                    <h4>Spells Known of 1st Level and Higher</h4>\n
                    At 1st level, you know two 1st-level spells of your choice from the warlock spell list.<br>\n
                    The Spells Known column of the Warlock table shows when you learn more warlock spells of your choice of 1st level or higher. A spell you choose must be of a level no higher than what's shown in the table's Slot Level column for your level. When you reach 6th level, for example, you learn a new warlock spell, which can be 1st, 2nd, or 3rd level.<br>\n
                    Additionally, when you gain a level in this class, you can choose one of the warlock spells you know and replace it with another spell from the warlock spell list, which also must be of a level for which you have spell slots.\n
                    <h4>Spellcasting Ability:</h4>\n
                    Charisma is your spellcasting ability for your warlock spells, so you use your Charisma whenever a spell refers to your spellcasting ability. In addition, you use your Charisma modifier when setting the saving throw DC for a warlock spell you cast and when making an attack roll with one.\n
                    <h4>Spell save DC</h4> = 8 + your proficiency bonus + your Charisma modifier. ($spellDC)\n
                    <h4>Spell attack modifier</h4> = your proficiency bonus + your Charisma modifier. ($spellattack)\n
                    <h4>Spellcasting Focus:</h4>\n
                    You can use an arcane focus as a spellcasting focus for your warlock spells.\n";
            $txt .= "<h3>Otherworldly Patron:</h3>\n
                    Choose a sorcerous origin, which describes the source of your innate magical power. Your choice grants you features when you choose it at 1st level and again at 6th, 14th, and 18th level.\n";
            switch ($patron){
                case "The Archfey":
                    $txt .= "<h3>Expanded Spell List:</h3>\n
                    The Archfey lets you choose from an expanded list of spells when you learn a warlock spell. The following spells are added to the warlock spell list for you.<br>\n
                    1st - Faerie Fire, Sleep";
                    $txt .= "<h3>Fey Presence:</h3>\n
                    Starting at 1st level, your patron bestows upon you the ability to project the beguiling and fearsome presence of the fey. As an action, you can cause each creature in a 10-foot cube originating from you to make a Wisdom saving throw against your warlock spell save DC. The creatures that fail their saving throws are all charmed or frightened by you (your choice) until the end of your next turn.<br>\n
                    Once you use this feature, you can't use it again until you finish a short or long rest.\n";
                    break;
                case "The Fiend":
                    $txt .= "<h3>Expanded Spell List:</h3>\n
                    The Fiend lets you choose from an expanded list of spells when you learn a warlock spell. The following spells are added to the warlock spell list for you.<br>\n
                    1st - Burning Hands, Command";
                    $txt .= "<h3>Dark One's Blessing:</h3>\n
                    Starting at 1st level, when you reduce a hostile creature to 0 hit points, you gain temporary hit points equal to your Charisma modifier + your warlock level (minimum of 1).\n";
                    break;
                case "The Great Old One":
                    $txt .= "<h3>Expanded Spell List:</h3>\n
                    The Great Old One lets you choose from an expanded list of spells when you learn a warlock spell. The following spells are added to the warlock spell list for you.<br>\n
                    1st - Dissonant Whispers, Tasha's Hideous Laughter";
                    $txt .= "<h3>Awakened Mind:</h3>\n
                    Starting at 1st level, your alien knowledge gives you the ability to touch the minds of other creatures. You can telepathically speak to any creature you can see within 30 feet of you. You don't need to share a language with the creature for it to understand your telepathic utterances, but the creature must be able to understand at least one language.\n";
                    break;
            }
            $txt .= "<h3>Spell list:</h3>\n
                    Cantrips:<br>\n
                    1. $cantrip1<br>
                    2. $cantrip2<br>\n
                    1st level<br>\n
                    1. $flevel1<br>
                    2. $flevel2<br>";
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