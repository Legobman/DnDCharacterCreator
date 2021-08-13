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
    
    <h2>Barbarian</h2>
    <p>Please select your starting proficiencies and gear.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Animal Handling">Animal Handling</option>
        <option value="Arcana">Arcana</option>
        <option value="Insight">Insight</option>
        <option value="Medicine">Medicine</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Religion">Religion</option>
        <option value="Survival">Survival</option>
    </select>

    <label for="skillc2">Choose your second proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Animal Handling">Animal Handling</option>
        <option value="Arcana">Arcana</option>
        <option value="Insight">Insight</option>
        <option value="Medicine">Medicine</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Religion">Religion</option>
        <option value="Survival">Survival</option>
    </select>
        
        
<!--The buttons to pick your gear -->
        <br>
        <p>Select your main gear</p>
        <input type="radio" id="WoodenShield" name="mainGear1" value="Wooden Shield" checked><label>Wooden Shield</label><br>
        <input type="radio" id="AnySimpleWeapon" name="mainGear1" value="Any Simple Weapon"><label>Any Simple Weapon</label><br>
        
        <p>Select your other gear</p>
        <input type="radio" id="Scimitar" name="mainGear2" value="Scimitar" checked><label>Scimitar</label><br>
        <input type="radio" id="simpleMeleeWeapon" name="mainGear2" value="Any Simple Melee Weapon"><label>Any Simple Melee Weapon</label><br>
        
        <p>You also start with leather armor(AC 11 + dex mod), an explorer’s pack, and a druidic focus</p>
        
        <p>Select your starting spells</p>
        <label for="cantrip1">Choose your first cantrip:</label>
        <select name="cantrip1" id="cantrip1">
            <option value="Druidcraft">Druidcraft</option>
            <option value="Guidance">Guidance</option>
            <option value="Mending">Mending</option>
            <option value="Poison Spray">Poison Spray</option>
            <option value="Produce Flame">Produce Flame</option>
            <option value="Resistance">Resistance</option>
            <option value="Shillelagh">Shillelagh</option>
            <option value="Thorn Whip">Thorn Whip</option>
        </select>
        <br>
        
        <label for="cantrip2">Choose your second cantrip:</label>
        <select name="cantrip2" id="cantrip2">
            <option value="Druidcraft">Druidcraft</option>
            <option value="Guidance">Guidance</option>
            <option value="Mending">Mending</option>
            <option value="Poison Spray">Poison Spray</option>
            <option value="Produce Flame">Produce Flame</option>
            <option value="Resistance">Resistance</option>
            <option value="Shillelagh">Shillelagh</option>
            <option value="Thorn Whip">Thorn Whip</option>
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
        $main1 = $_POST['mainGear1'];
        $main2 = $_POST['mainGear2'];
        $cantrip1 = $_POST['cantrip1'];
        $cantrip2 = $_POST['cantrip2'];
        
        // if statements to check if duplicate selections
        if ($skillc1 == $skillc2){
            echo "Please select different skills";
        } elseif($cantrip1 == $cantrip2){
            echo "Please select different cantrips";
        } 
        else{
            if($_SESSION['skillb1'] == $skillc1 || $_SESSION['skillb1'] == $skillc2 || $_SESSION['skillb2'] == $skillc1 || $_SESSION['skillb2'] == $skillc2){
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
            $spellcasting = statbonus($_SESSION['wis']);
            $spellDC = 10 + $spellcasting;
            $spellattack = 2 + $spellcasting;
            // store class abilities in string and output to screen and file.
            $txt = "<h2>Druid Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d8 per druid levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 8 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d8(or 5) + your Constitution modifier per druid level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> Light armor, medium armor, shields (druids will not wear armor or use shields made of metal)<br>\n
                    <b>Weapons:</b> Clubs, daggers, darts, javelins, maces, quarterstaffs, scimitars, sickles, slings, spears<br>\n
                    <b>Tools:</b> Herbalism kit<br>\n
                    <b>Saving Throws:</b> Intelligence, Wisdom<br>\n
                    <b>Skills:</b> $skillc1 and $skillc2\n";
            $txt .= "<h3>Equipment:</h3>\n
                    $main1, $main2, Leather armor(AC 11 + dex mod), an explorer’s pack, and a druidic focus.\n";
            $txt .= "<h3>Druidic:</h3>\n
                    You know Druidic, the secret language of druids. You can speak the language and use it to leave hidden messages. You and others who know this language automatically spot such a message. Others spot the message’s presence with a successful DC 15 Wisdom (Perception) check but can’t decipher it without magic.\n";
            $txt .= "<h3>Spellcasting:</h3>\n
                    Drawing on the divine essence of nature itself, you can cast spells to shape that essence to your will. See Spells Rules for the general rules of spellcasting and the Spells Listing for the druid spell list.\n
                    <h4>Cantrips:</h4>\n
                    At 1st level, you know two cantrips of your choice from the druid spell list. You learn additional druid cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Druid table.\n
                    <h4>Preparing and Casting Spells:</h4>\n
                    The Druid table shows how many spell slots you have to cast your druid spells of 1st level and higher (2 at 1st level). To cast one of these druid spells, you must expend a slot of the spell’s level or higher. You regain all expended spell slots when you finish a long rest.<br>\n
                    You prepare the list of druid spells that are available for you to cast, choosing from the druid spell list. When you do so, choose a number of druid spells equal to your Wisdom modifier + your druid level (minimum of one spell). The spells must be of a level for which you have spell slots.<br>\n
                    For example, if you are a 3rd-level druid, you have four 1st-level and two 2nd-level spell slots. With a Wisdom of 16, your list of prepared spells can include six spells of 1st or 2nd level, in any combination. If you prepare the 1st-level spell cure wounds, you can cast it using a 1st-level or 2nd-level slot. Casting the spell doesn’t remove it from your list of prepared spells.<br>\n
                    You can also change your list of prepared spells when you finish a long rest. Preparing a new list of druid spells requires time spent in prayer and meditation: at least 1 minute per spell level for each spell on your list.\n
                    <h4>Spellcasting Ability:</h4>\n
                    Wisdom is your spellcasting ability for your druid spells, since your magic draws upon your devotion and attunement to nature. You use your Wisdom whenever a spell refers to your spellcasting ability. In addition, you use your Wisdom modifier when setting the saving throw DC for a druid spell you cast and when making an attack roll with one.\n
                    <h4>Spell save DC</h4> = 8 + your proficiency bonus + your Wisdom modifier. ($spellDC)\n
                    <h4>Spell attack modifier</h4> = your proficiency bonus + your Wisdom modifier. ($spellattack)\n
                    <h4>Ritual Casting:</h4>\n
                    You can cast any bard spell you know as a ritual if that spell has the ritual tag.\n
                    <h4>Spellcasting Focus:</h4>\n
                    You can use a druidic focus (see the Adventuring Gear section) as a spellcasting focus for your druid spells.\n";
            
            $txt .= "<h3>Spell list:</h3>\n
                    Cantrips:<br>\n
                    1. $cantrip1<br>
                    2. $cantrip2<br>\n
                    1st level<br>\n
                    1. Animal Friendship<br>
                    2. Charm Person<br>
                    3. Create or Destroy Water<br>
                    4. Cure Wounds<br>
                    5. Detect Magic<br>
                    6. Detect Poison and Disease<br>
                    7. Entagnle<br>
                    8. Faerie Fire<br>
                    9. Fog Cloud<br>
                    10. Goodberry<br>
                    11. Healing Word<br>
                    12. Jump<br>
                    13. Longstrider<br>
                    14. Purify Food and Drink<br>
                    15. Speak with Animals<br>
                    16. Thunderwave<br>";
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