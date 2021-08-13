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
    
    <h2>Sorcerer</h2>
    <p>Please select your starting proficiencies, gear, and spell.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Arcana">Arcana</option>
        <option value="Deception">Deception</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
    </select>

    <label for="skillc2">Choose your second proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Arcana">Arcana</option>
        <option value="Deception">Deception</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Persuasion">Persuasion</option>
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
        <input type="radio" id="Dungeoneer'sPack" name="pack" value="Dungeoneer's Pack" checked><label>Dungeoneer's Pack</label><br>
        <input type="radio" id="Explorer'sPack" name="pack" value="Explorer's Pack"><label>Explorer's Pack</label><br>
        
        <p>You also get two dagger</p>
        
        <p>Select your Sorcerous Origin</p>
        <input type="radio" id="DraconicBloodline" name="origin" value="Draconic Bloodline" checked><label>Draconic Bloodline</label><br>
        <input type="radio" id="WildMagic" name="origin" value="Wild Magic"><label>Wild Magic</label><br>
        
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
        
        <label for="cantrip2">Choose your first cantrip:</label>
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
        
        <label for="cantrip3">Choose your first cantrip:</label>
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
        
        <label for="cantrip4">Choose your first cantrip:</label>
        <select name="cantrip4" id="cantrip4">
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
        
        <label for="1stlevel1">Choose your first level 1 spell:</label>
        <select name="1stlevel1" id="1stlevel1">
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
            <option value="Fog Cloud">Fog Cloud</option>
            <option value="Jump">Jump</option>
            <option value="Mage Armor">Mage Armor</option>
            <option value="Magic Missile">Magic Missile</option>
            <option value="Ray of Sickness">Ray of Sickness</option>
            <option value="Shield">Shield</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Witch Bolt">Witch Bolt</option>
        </select>
        <br>
        
        <label for="1stlevel2">Choose your second level 1 spell:</label>
        <select name="1stlevel2" id="1stlevel2">
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
            <option value="Fog Cloud">Fog Cloud</option>
            <option value="Jump">Jump</option>
            <option value="Mage Armor">Mage Armor</option>
            <option value="Magic Missile">Magic Missile</option>
            <option value="Ray of Sickness">Ray of Sickness</option>
            <option value="Shield">Shield</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Thunderwave">Thunderwave</option>
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
        $origin = $_POST['origin'];
        $cantrip1 = $_POST['cantrip1'];
        $cantrip2 = $_POST['cantrip2'];
        $cantrip3 = $_POST['cantrip3'];
        $cantrip4 = $_POST['cantrip4'];
        $flevel1 = $_POST['1stlevel1'];
        $flevel2 = $_POST['1stlevel2'];
        
        // if statements to check if duplicate selections
        if ($skillc1 == $skillc2){
            echo "Please select different skills";
        } elseif($cantrip1 == $cantrip2 || $cantrip1 == $cantrip3 || $cantrip1 == $cantrip4 || $cantrip2 == $cantrip3 || $cantrip2 == $cantrip4 || $cantrip33 == $cantrip4){
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
            $txt = "<h2>Sorcerer Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d6 per sorcerer levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 6 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d6(or 4) + your Constitution modifier per sorcerer level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> None<br>\n
                    <b>Weapons:</b> Daggers, darts, slings, quarterstaffs, light crossbows<br>\n
                    <b>Tools:</b> None<br>\n
                    <b>Saving Throws:</b> Constitution, Charisma<br>\n
                    <b>Skills:</b> $skillc1 and $skillc2\n";
            $txt .= "<h3>Equipment:</h3>\n
                    $mainW, $arcane, $pack, and two dagger\n";
            $txt .= "<h3>Spellcasting:</h3>\n
                    An event in your past, or in the life of a parent or ancestor, left an indelible mark on you, infusing you with arcane magic. This font of magic, whatever its origin, fuels your spells.\n
                    <h4>Cantrips:</h4>\n
                    At 1st level, you know four cantrips of your choice from the sorcerer spell list. You learn additional sorcerer cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Sorcerer table.\n
                    <h4>Spell Slots:</h4>\n
                    The Warlock table shows how many spell slots you have. The table also shows what the level of those slots is; all of your spell slots are the same level. To cast one of your warlock spells of 1st level or higher, you must expend a spell slot. You regain all expended spell slots when you finish a short or long rest. (2 at 1st level)\n
                    <h4>Spells Known of 1st Level and Higher</h4>\n
                    You know two 1st-level spells of your choice from the sorcerer spell list.<br>\n
                    The Spells Known column of the Sorcerer table shows when you learn more sorcerer spells of your choice. Each of these spells must be of a level for which you have spell slots. For instance, when you reach 3rd level in this class, you can learn one new spell of 1st or 2nd level.<br>\n
                    Additionally, when you gain a level in this class, you can choose one of the sorcerer spells you know and replace it with another spell from the sorcerer spell list, which also must be of a level for which you have spell slots.\n
                    <h4>Spellcasting Ability:</h4>\n
                    Charisma is your spellcasting ability for your sorcerer spells, since the power of your magic relies on your ability to project your will into the world. You use your Charisma whenever a spell refers to your spellcasting ability. In addition, you use your Charisma modifier when setting the saving throw DC for a sorcerer spell you cast and when making an attack roll with one.\n
                    <h4>Spell save DC</h4> = 8 + your proficiency bonus + your Charisma modifier. ($spellDC)\n
                    <h4>Spell attack modifier</h4> = your proficiency bonus + your Charisma modifier. ($spellattack)\n
                    <h4>Spellcasting Focus:</h4>\n
                    You can use an arcane focus as a spellcasting focus for your sorcerer spells.\n";
            $txt .= "<h3>Sorcerous Origin:</h3>\n
                    Choose a sorcerous origin, which describes the source of your innate magical power. Your choice grants you features when you choose it at 1st level and again at 6th, 14th, and 18th level.\n";
            switch ($origin){
                case "Draconic Bloodline":
                    $txt .= "<h3>Dragon Ancestor:</h3>\n
                    At 1st level, you choose one type of dragon as your ancestor. The damage type associated with each dragon is used by features you gain later.<br>\n
                    <h2>Draconic Ancestry</h2>
                        <table style='width:50%'>
                          <tr>
                            <th>Dragon</th>
                            <th>Damage Type</th>
                          </tr>
                          <tr>
                            <td>Black</td>
                            <td>Acid</td>
                          </tr>
                          <tr>
                            <td>Blue</td>
                            <td>Lightning</td>
                          </tr>
                          <tr>
                            <td>Brass</td>
                            <td>Fire</td>
                          </tr>
                          <tr>
                            <td>Bronze</td>
                            <td>Lightning</td>
                          </tr>
                          <tr>
                            <td>Copper</td>
                            <td>Acid</td>
                          </tr>
                          <tr>
                            <td>Gold</td>
                            <td>Fire</td>
                          </tr>
                          <tr>
                            <td>Green</td>
                            <td>Poison</td>
                          </tr>
                          <tr>
                            <td>Red</td>
                            <td>Fire</td>
                          </tr>
                          <tr>
                            <td>Silver</td>
                            <td>Cold</td>
                          </tr>
                          <tr>
                            <td>White</td>
                            <td>Cold</td>
                          </tr>
                        </table><br>\n
                    You can speak, read, and write Draconic. Additionally, whenever you make a Charisma check when interacting with dragons, your proficiency bonus is doubled if it applies to the check.\n";
                    $txt .= "<h3>Draconic Resilience:</h3>\n
                    As magic flows through your body, it causes physical traits of your dragon ancestors to emerge. At 1st level, your hit point maximum increases by 1 and increases by 1 again whenever you gain a level in this class.<br>\n
                    Additionally, parts of your skin are covered by a thin sheen of dragon-like scales. When you aren't wearing armor, your AC equals 13 + your Dexterity modifier.\n";
                    break;
                case "Wild Magic":
                    $txt .= "<h3>Wild Magic Surge:</h3>\n
                    Starting when you choose this origin at 1st level, your spellcasting can unleash surges of untamed magic. Immediately after you cast a sorcerer spell of 1st level or higher, the DM can have you roll a d20. If you roll a 1, roll on the Wild Magic Surge table to create a random magical effect.\n";
                    $txt .= "<h3>Tides of Chaos:</h3>\n
                    Starting at 1st level, you can manipulate the forces of chance and chaos to gain advantage on one attack roll, ability check, or saving throw. Once you do so, you must finish a long rest before you can use this feature again.<br>\n
                    Any time before you regain the use of this feature, the DM can have you roll on the Wild Magic Surge table immediately after you cast a sorcerer spell of 1st level or higher. You then regain the use of this feature.\n";
                    break;
            }
            $txt .= "<h3>Spell list:</h3>\n
                    Cantrips:<br>\n
                    1. $cantrip1<br>
                    2. $cantrip2<br>
                    3. $cantrip3<br>
                    4. $cantrip4<br>\n
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