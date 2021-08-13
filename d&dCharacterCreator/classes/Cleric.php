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
    
    <h2>Cleric</h2>
    <p>Please select your starting proficiencies and gear.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Medicine">Medicine</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
    </select>

    <label for="skillc2">Choose your second proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Medicine">Medicine</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
    </select>
        
<!--The buttons to pick your gear -->
        <br>
        <p>Select your main weapon</p>
        <input type="radio" id="Mace" name="mainWeapon" value="Mace" checked><label>Mace</label><br>
        <input type="radio" id="Warhammer" name="mainWeapon" value="Warhammer"><label>Warhammer (Only if Tempest or War Domain)</label><br>
        
        <p>Select your armor</p>
        <input type="radio" id="ScaleMail" name="armor" value="scale mail(AC + Dex mod(max 2))" checked><label>scale mail(AC + Dex mod(max 2))</label><br>
        <input type="radio" id="LeatherArmor" name="armor" value="leather armor(AC 11 + Dex mod)"><label>leather armor(AC 11 + Dex mod)</label><br>
        <input type="radio" id="ChainMail" name="armor" value="chain mail(AC 16)"><label>chain mail(AC 16) (not if Knowledge, Light, and Trickster Domain)</label><br>
        
        <p>Select your side weapon</p>
        <input type="radio" id="LightCrossbow" name="sideWeapon" value="a Light Crossbow(20 bolts)" checked><label>a Light Crossbow(20 bolts)</label><br>
        <input type="radio" id="OtherSimple" name="sideWeapon" value="Any Simple Weapon"><label>Any Simple Weapon</label><br>
        
        <p>Select your pack</p>
        <input type="radio" id="Priest's pack" name="pack" value="priest's pack" checked><label>priest's pack</label><br>
        <input type="radio" id="Explorer's pack" name="pack" value="explorer's pack"><label>explorer's pack</label><br>
        
        <p>You also start with A shield and a holy symbol</p>
        
        <p>Select your starting spells</p>
        <label for="cantrip1">Choose your first cantrip:</label>
        <select name="cantrip1" id="cantrip1">
            <option value="Guidance">Guidance</option>
            <option value="Light">Light</option>
            <option value="Mending">Mending</option>
            <option value="Resistance">Resistance</option>
            <option value="Sacred Flame">Sacred Flame</option>
            <option value="Spare the Dying">Spare the Dying</option>
            <option value="Thaumaturgy">Thaumaturgy</option>
        </select>
        <br>
        
        <label for="cantrip2">Choose your second cantrip:</label>
        <select name="cantrip2" id="cantrip2">
            <option value="Guidance">Guidance</option>
            <option value="Light">Light</option>
            <option value="Mending">Mending</option>
            <option value="Resistance">Resistance</option>
            <option value="Sacred Flame">Sacred Flame</option>
            <option value="Spare the Dying">Spare the Dying</option>
            <option value="Thaumaturgy">Thaumaturgy</option>
        </select>
        <br>
        
        <label for="cantrip3">Choose your first cantrip:</label>
        <select name="cantrip3" id="cantrip3">
            <option value="Guidance">Guidance</option>
            <option value="Light">Light</option>
            <option value="Mending">Mending</option>
            <option value="Resistance">Resistance</option>
            <option value="Sacred Flame">Sacred Flame</option>
            <option value="Spare the Dying">Spare the Dying</option>
            <option value="Thaumaturgy">Thaumaturgy</option>
        </select>
        <br>
        
        <label for="domain">Choose your Divine:</label>
        <select name="domain" id="domain">
            <option value="Knowledge">Knowledge (Command, Identify)</option>
            <option value="Life">Life (Bless, Cure Wounds)</option>
            <option value="Light">Light (Burning Hands, Faerie Fire)</option>
            <option value="Nature">Nature (Animal Friendship, Speak with Animals)</option>
            <option value="Tempest">Tempest (Fog Cloud, Thunderwave)</option>
            <option value="Trickery">Trickery (Charm Person, Disguise Self)</option>
            <option value="War">War (Divine Favor, Shield of Faith)</option>
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
        $armor = $_POST['armor'];
        $sideW = $_POST['sideWeapon'];
        $pack = $_POST['pack'];
        $cantrip1 = $_POST['cantrip1'];
        $cantrip2 = $_POST['cantrip2'];
        $cantrip3 = $_POST['cantrip3'];
        $domain = $_POST['domain'];
        
        // if statements to check if duplicate and invalid selections
        if ($skillc1 == $skillc2){
            echo "Please select different skills";
        } elseif($cantrip1 == $cantrip2 || $cantrip1 == $cantrip3 || $cantrip2 == $cantrip3){
            echo "Please select different cantrips";
        } elseif($domain == "Light" && ($cantrip1 == "Light" || $cantrip2 == "Light" || $cantrip3 == "Light")){
            echo "Light domain gives you the Light cantrip";   
        } elseif($armor == "chain mail" && ($domain == "Knowledge" || $domain == "Light" || $domain == "Trickster")){
            echo "Your selected Domain does not give you Heavy Armor proficiency";   
        } elseif($mainW == "Warhammer" && ($domain != "Tempest" xor $domain != "War")){
            echo "Your selected Domain does not give you Martial Weapon proficiency";
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
            $txt = "<h2>Cleric Class Features:</h2>\n
                    <h3>Hit Points</h3>\n
                    <b>Hit Dice:</b> 1d8 per cleric levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 8 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d8(or 5) + your Constitution modifier per cleric level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> Light armor, medium armor, shields<br>\n
                    <b>Weapons:</b> All simple weapons, medium, shields<br>\n
                    <b>Tools:</b> none<br>\n
                    <b>Saving Throws:</b> Wisdom, Charisma<br>\n
                    <b>Skills:</b> $skillc1 and $skillc2\n";
            $txt .= "<h3>Equipment:</h3>\n
                    $mainW, $armor, $sideW, $pack, a shield, a holy symbol\n";
            $txt .= "<h3>Spellcasting:</h3>\n
                    As a conduit for divine power, you can cast cleric spells.\n
                    <h4>Cantrips:</h4>\n
                    At 1st level, you know three cantrips of your choice from the cleric spell list. You learn additional cleric cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Cleric table.\n
                    <h4>Spell Slots:</h4>\n
                    The Bard table shows how many spell slots you have to cast your bard spells of 1st level and higher (2 at 1st level). To cast one of these spells, you must expend a slot of the spell’s level or higher. You regain all expended spell slots when you finish a long rest.<br>\n
                    You prepare the list of cleric spells that are available for you to cast, choosing from the cleric spell list. When you do so, choose a number of cleric spells equal to your Wisdom modifier + your cleric level (minimum of one spell). The spells must be of a level for which you have spell slots.<br>\n
                    For example, if you are a 3rd-level cleric, you have four 1st-level and two 2nd-level spell slots. With a Wisdom of 16, your list of prepared spells can include six spells of 1st or 2nd level, in any combination. If you prepare the 1st-level spell Cure Wounds, you can cast it using a 1st-level or 2nd-level slot. Casting the spell doesn't remove it from your list of prepared spells.<br>\n
                    You can change your list of prepared spells when you finish a long rest. Preparing a new list of cleric spells requires time spent in prayer and meditation: at least 1 minute per spell level for each spell on your list.\n
                    <h4>Spellcasting Ability:</h4>\n
                    Wisdom is your spellcasting ability for your cleric spells. The power of your spells comes from your devotion to your deity. You use your Wisdom whenever a cleric spell refers to your spellcasting ability. In addition, you use your Wisdom modifier when setting the saving throw DC for a cleric spell you cast and when making an attack roll with one.\n
                    <h4>Spell save DC</h4> = 8 + your proficiency bonus + your Wisdom modifier. ($spellDC)\n
                    <h4>Spell attack modifier</h4> = your proficiency bonus + your Wisdom modifier. ($spellattack)\n
                    <h4>Ritual Casting:</h4>\n
                    You can cast a cleric spell as a ritual if that spell has the ritual tag and you have the spell prepared.\n
                    <h4>Spellcasting Focus:</h4>\n
                    You can use a holy symbol as a spellcasting focus for your cleric spells.\n";
            $txt .= "<h3>Divine Domain:</h3>\n
                    At 1st level, you choose a domain shaped by your choice of Deity and the gifts they grant you. Your choice grants you domain spells and other features when you choose it at 1st level. It also grants you additional ways to use Channel Divinity when you gain that feature at 2nd level, and additional benefits at 6th, 8th, and 17th levels.
                    <h4>Domain Spells:</h4>\n
                    Each domain has a list of spells-its domain spells that you gain at the cleric levels noted in the domain description. Once you gain a domain spell, you always have it prepared, and it doesn't count against the number of spells you can prepare each day.<br>\n
                    If you have a domain spell that doesn't appear on the cleric spell list, the spell is nonetheless a cleric spell for you.\n";
            
            switch ($domain){
                case "Knowledge":
                    $txt .= "<h3>Blessings of Knowledge:</h3>\n
                    At 1st level, you learn two languages of your choice. You also become proficient in your choice of two of the following skills: Arcana, History, Nature, or Religion.<br>\n
                    Your proficiency bonus is doubled for any ability check you make that uses either of those skills.\n
                    <h3>Domain Spells at 1st level:</h3>\n
                    1. Command<br>
                    2. Identify<br>\n";
                    break;
                case "Life":
                    $txt .= "<h3>Bonus Proficiency:</h3>\n
                    When you choose this domain at 1st level, you gain proficiency with heavy armor.\n";
                    $txt .= "<h3>Disciple of Life:</h3>\n
                    Also starting at 1st level, your healing spells are more effective. Whenever you use a spell of 1st level or higher to restore hit points to a creature, the creature regains additional hit points equal to 2 + the spell's level.\n
                    <h3>Domain Spells at 1st level:</h3>\n
                    1. Bless<br>
                    2. Cure Wounds<br>\n";
                    break;
                case "Light":
                    $txt .= "<h3>Bonus Cantrip:</h3>\n
                    When you choose this domain at 1st level, you gain the Light cantrip if you don't already know it.\n";
                    $txt .= "<h3>Warding Flare:</h3>\n
                    Also at 1st level, you can interpose divine light between yourself and an attacking enemy. When you are attacked by a creature within 30 feet of you that you can see, you can use your reaction to impose disadvantage on the attack roll, causing light to flare before the attacker before it hits or misses. An attacker that can't be blinded is immune to this feature.<br>\n
                    You can use this feature a number of times equal to your Wisdom modifier (a minimum of once). You regain all expended uses when you finish a long rest.\n
                    <h3>Domain Spells at 1st level:</h3>\n
                    1. Burning Hands<br>
                    2. Faerie Fire<br>\n";
                    break;
                case "Nature":
                    $txt .= "<h3>Acolyte of Nature:</h3>\n
                    At 1st level, you learn one cantrip of your choice from the druid spell list. You also gain proficiency in one of the following skills of your choice: Animal Handling, Nature, or Survival.\n";
                    $txt .= "<h3>Bonus Proficiency:</h3>\n
                    Also at 1st level, you gain proficiency with heavy armor.\n
                    <h3>Domain Spells at 1st level:</h3><br>\n
                    1. Animal Friendship<br>
                    2. Speak with Animals<br>\n";
                    break;
                case "Tempest":
                    $txt .= "<h3>Bonus Proficiencies:</h3>\n
                    At 1st level, you gain proficiency with martial weapons and heavy armor.\n";
                    $txt .= "<h3>Wrath of the Storm:</h3>\n
                    Also at 1st level, you can thunderously rebuke attackers. When a creature within 5 feet of you that you can see hits you with an attack, you can use your reaction to cause the creature to make a Dexterity saving throw. The creature takes 2d8 lightning or thunder damage (your choice) on a failed saving throw, and half as much damage on a successful one.<br>\n
                    You can use this feature a number of times equal to your Wisdom modifier (a minimum of once). You regain all expended uses when you finish a long rest.\n
                    <h3>Domain Spells at 1st level:</h3>\n
                    1. Fog Cloud
                    2. Thunderwave\n";
                    break;
                case "Trickery":
                    $txt .= "<h3>Blessing of the Trickster:</h3>\n
                    Starting when you choose this domain at 1st level, you can use your action to touch a willing creature other than yourself to give it advantage on Dexterity (Stealth) checks. This blessing lasts for 1 hour or until you use this feature again.\n
                    <h3>Domain Spells at 1st level:</h3>\n
                    1. Charm Person<br>
                    2. Disguise Self<br>\n";
                    break;
                case "War":
                    $txt .= "<h3>Bonus Proficiencies:</h3>\n
                    At 1st level, you gain proficiency with martial weapons and heavy armor.\n";
                    $txt .= "<h3>War Priest:</h3>\n
                    From 1st level, your god delivers bolts of inspiration to you while you are engaged in battle. When you use the Attack action, you can make one weapon attack as a bonus action.<br>\n
                    You can use this feature a number of times equal to your Wisdom modifier (a minimum of once). You regain all expended uses when you finish a long rest.\n
                    <h3>Domain Spells at 1st level:</h3>\n
                    1. Divine Favor<br>
                    2. Shield of Faith<br>\n";
                    break;
            }
                $txt .= "<h3>Spell list:</h3>\n
                    Cantrips:<br>\n
                    1. $cantrip1<br>
                    2. $cantrip2<br>
                    3. $cantrip3<br>\n
                    1st level:<br>
                    1. Bane<br>
                    2. Bless<br>
                    3. Command<br>
                    4. Create of Destroy Water<br>
                    5. Cure Wounds<br>
                    6. Detect Evil and Good<br>
                    7. Detect Magic<br>
                    8. Detect Poison and Disease<br>
                    9. Guiding Bolt<br>
                    10. Healing Word<br>
                    11. Inflict Wounds<br>
                    12. Protection from Evil and Good<br>
                    13. Purify Food and Drink<br>
                    14. Sanctuary<br>
                    15. Shield of Faith<br>\n";
            echo $txt;
            $txt = strip_tags($txt);
            fwrite($characterFile, $txt);
            fclose($characterFile);
            
            echo "<h3>Your character is done.</h3>";
            echo "<h3>If you wish to save your character, please rename the file or move file to another location.</h3>";
            ?> <p><a href="../d_&_d_character_creator_v2.php">Back to start.</a></p>
<?php
        }
        }
    }
    
?> 
</body>
</html>