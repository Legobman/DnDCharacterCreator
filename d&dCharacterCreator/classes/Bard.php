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
    
    <h2>Bard</h2>
    <p>Please select your starting proficiencies and gear.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Animal Handling">Animal Handling</option>
        <option value="Arcana">Arcana</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Medicine">Medicine</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
        <option value="Survival">Survival</option>
    </select>

    <label for="skillc2">Choose your second proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Animal Handling">Animal Handling</option>
        <option value="Arcana">Arcana</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Medicine">Medicine</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
        <option value="Survival">Survival</option>
    </select>
        
    <label for="skillc3">Choose your third proficiency:</label>
    <select name="skillc3" id="skillc3">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Animal Handling">Animal Handling</option>
        <option value="Arcana">Arcana</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Medicine">Medicine</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
        <option value="Survival">Survival</option>
    </select>
        
<!--The buttons to pick your gear -->
        <br>
        <p>Select your main weapon</p>
        <input type="radio" id="Rapier" name="mainWeapon" value="Rapier" checked><label>Rapier</label><br>
        <input type="radio" id="Longsword" name="mainWeapon" value="Longsword"><label>Longsword</label><br>
        <input type="radio" id="AnySimple" name="mainWeapon" value="Any Simple"><label>Any Simple Weapon</label><br>
        
        <p>Select your pack</p>
        <input type="radio" id="Diplomat's Pack" name="pack" value="Diplomat's Pack" checked><label>Diplomat's Pack</label><br>
        <input type="radio" id="Entertainer's Pack" name="pack" value="Entertainer's Pack"><label>Entertainer's Pack</label><br>
        
        <p>Select your starting instrument</p>
        <input type="radio" id="Bagpipies" name="instrumentg" value="Bagpipies" checked><label>Bagpipies</label>
        <input type="radio" id="Drum" name="instrumentg" value="Drum"><label>Drum</label>
        <input type="radio" id="Dulcimer" name="instrumentg" value="Dulcimer"><label>Dulcimer</label>
        <input type="radio" id="Flute" name="instrumentg" value="Flute"><label>Flute</label>
        <input type="radio" id="Lute" name="instrumentg" value="Lute"><label>Lute</label>
        <input type="radio" id="Lyre" name="instrumentg" value="Lyre"><label>Lyre</label>
        <input type="radio" id="Horn" name="instrumentg" value="Horn"><label>Horn</label>
        <input type="radio" id="PanFlute" name="instrumentg" value="Pan flute"><label>Pan flute</label>
        <input type="radio" id="Shawm" name="instrumentg" value="Shawm"><label>Shawm</label>
        <input type="radio" id="Viol" name="instrumentg" value="Viol"><label>Viol</label>
        
        <p>Select your first instrument proficiency</p>
        <input type="radio" id="Bagpipies" name="instrument1" value="Bagpipies" checked><label>Bagpipies</label>
        <input type="radio" id="Drum" name="instrument1" value="Drum"><label>Drum</label>
        <input type="radio" id="Dulcimer" name="instrument1" value="Dulcimer"><label>Dulcimer</label>
        <input type="radio" id="Flute" name="instrument1" value="Flute"><label>Flute</label>
        <input type="radio" id="Lute" name="instrument1" value="Lute"><label>Lute</label>
        <input type="radio" id="Lyre" name="instrument1" value="Lyre"><label>Lyre</label>
        <input type="radio" id="Horn" name="instrument1" value="Horn"><label>Horn</label>
        <input type="radio" id="PanFlute" name="instrument1" value="Pan flute"><label>Pan flute</label>
        <input type="radio" id="Shawm" name="instrument1" value="Shawm"><label>Shawm</label>
        <input type="radio" id="Viol" name="instrument1" value="Viol"><label>Viol</label>
        
        <p>Select your seccond instrument proficiency</p>
        <input type="radio" id="Bagpipies" name="instrument2" value="Bagpipies" checked><label>Bagpipies</label>
        <input type="radio" id="Drum" name="instrument2" value="Drum"><label>Drum</label>
        <input type="radio" id="Dulcimer" name="instrument2" value="Dulcimer"><label>Dulcimer</label>
        <input type="radio" id="Flute" name="instrument2" value="Flute"><label>Flute</label>
        <input type="radio" id="Lute" name="instrument2" value="Lute"><label>Lute</label>
        <input type="radio" id="Lyre" name="instrument2" value="Lyre"><label>Lyre</label>
        <input type="radio" id="Horn" name="instrument2" value="Horn"><label>Horn</label>
        <input type="radio" id="PanFlute" name="instrument2" value="Pan flute"><label>Pan flute</label>
        <input type="radio" id="Shawm" name="instrument2" value="Shawm"><label>Shawm</label>
        <input type="radio" id="Viol" name="instrument2" value="Viol"><label>Viol</label>
        
        <p>Select your third instrument proficiency</p>
        <input type="radio" id="Bagpipies" name="instrument3" value="Bagpipies" checked><label>Bagpipies</label>
        <input type="radio" id="Drum" name="instrument3" value="Drum"><label>Drum</label>
        <input type="radio" id="Dulcimer" name="instrument3" value="Dulcimer"><label>Dulcimer</label>
        <input type="radio" id="Flute" name="instrument3" value="Flute"><label>Flute</label>
        <input type="radio" id="Lute" name="instrument3" value="Lute"><label>Lute</label>
        <input type="radio" id="Lyre" name="instrument3" value="Lyre"><label>Lyre</label>
        <input type="radio" id="Horn" name="instrument3" value="Horn"><label>Horn</label>
        <input type="radio" id="PanFlute" name="instrument3" value="Pan flute"><label>Pan flute</label>
        <input type="radio" id="Shawm" name="instrument3" value="Shawm"><label>Shawm</label>
        <input type="radio" id="Viol" name="instrument3" value="Viol"><label>Viol</label>
        
        <p>You also start with leather armor(base AC 11 + Dex mod) and a dagger</p>
        
        <p>Select your starting spells</p>
        <label for="cantrip1">Choose your first cantrip:</label>
        <select name="cantrip1" id="cantrip1">
            <option value="Blade Ward">Blade Ward</option>
            <option value="Dancing Lights">Dancing Lights</option>
            <option value="Friends">Friends</option>
            <option value="Light">Light</option>
            <option value="Mage Hand">Mage Hand</option>
            <option value="Mending">Mending</option>
            <option value="Message">Message</option>
            <option value="Minor Illusion">Minor Illusion</option>
            <option value="Prestidigitation">Prestidigitation</option>
            <option value="True Strike">True Strike</option>
            <option value="Vicious Mockery">Vicious Mockery</option>
        </select>
        <br>
        
        <label for="cantrip2">Choose your second cantrip:</label>
        <select name="cantrip2" id="cantrip2">
            <option value="Blade Ward">Blade Ward</option>
            <option value="Dancing Lights">Dancing Lights</option>
            <option value="Friends">Friends</option>
            <option value="Light">Light</option>
            <option value="Mage Hand">Mage Hand</option>
            <option value="Mending">Mending</option>
            <option value="Message">Message</option>
            <option value="Minor Illusion">Minor Illusion</option>
            <option value="Prestidigitation">Prestidigitation</option>
            <option value="True Strike">True Strike</option>
            <option value="Vicious Mockery">Vicious Mockery</option>
        </select>
        <br>
        
        <label for="1stlevel1">Choose your first level 1 spell:</label>
        <select name="1stlevel1" id="1stlevel1">
            <option value="Animal Friendship">Animal Friendship</option>
            <option value="Bane">Bane</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Cure Wounds">Cure Wounds</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Dissonant Whispers">Dissonant Whispers</option>
            <option value="Faerie Fire">Faerie Fire</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Healing Word">Healing Word</option>
            <option value="Heroism">Heroism</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Speak with Animals">Speak with Animals</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
        </select>
        <br>
        
        <label for="1stlevel2">Choose your second level 1 spell:</label>
        <select name="1stlevel2" id="1stlevel2">
            <option value="Animal Friendship">Animal Friendship</option>
            <option value="Bane">Bane</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Cure Wounds">Cure Wounds</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Dissonant Whispers">Dissonant Whispers</option>
            <option value="Faerie Fire">Faerie Fire</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Healing Word">Healing Word</option>
            <option value="Heroism">Heroism</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Speak with Animals">Speak with Animals</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
        </select>
        <br>
        
        <label for="1stlevel3">Choose your third level 1 spell:</label>
        <select name="1stlevel3" id="1stlevel3">
            <option value="Animal Friendship">Animal Friendship</option>
            <option value="Bane">Bane</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Cure Wounds">Cure Wounds</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Dissonant Whispers">Dissonant Whispers</option>
            <option value="Faerie Fire">Faerie Fire</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Healing Word">Healing Word</option>
            <option value="Heroism">Heroism</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Speak with Animals">Speak with Animals</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
        </select>
        <br>
        
        <label for="1stlevel4">Choose your fourth level 1 spell:</label>
        <select name="1stlevel4" id="1stlevel4">
            <option value="Animal Friendship">Animal Friendship</option>
            <option value="Bane">Bane</option>
            <option value="Charm Person">Charm Person</option>
            <option value="Comprehend Languages">Comprehend Languages</option>
            <option value="Cure Wounds">Cure Wounds</option>
            <option value="Detect Magic">Detect Magic</option>
            <option value="Disguise Self">Disguise Self</option>
            <option value="Dissonant Whispers">Dissonant Whispers</option>
            <option value="Faerie Fire">Faerie Fire</option>
            <option value="Feather Fall">Feather Fall</option>
            <option value="Healing Word">Healing Word</option>
            <option value="Heroism">Heroism</option>
            <option value="Hideous Laughter">Hideous Laughter</option>
            <option value="Identify">Identify</option>
            <option value="Illusory Script">Illusory Script</option>
            <option value="Longstrider">Longstrider</option>
            <option value="Silent Image">Silent Image</option>
            <option value="Sleep">Sleep</option>
            <option value="Speak with Animals">Speak with Animals</option>
            <option value="Thunderwave">Thunderwave</option>
            <option value="Unseen Servant">Unseen Servant</option>
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
        $skillc3 = $_POST['skillc3'];
        $mainW = $_POST['mainWeapon'];
        $pack = $_POST['pack'];
        $instrumentg = $_POST['instrumentg'];
        $instrument1 = $_POST['instrument1'];
        $instrument2 = $_POST['instrument2'];
        $instrument3 = $_POST['instrument3'];
        $cantrip1 = $_POST['cantrip1'];
        $cantrip2 = $_POST['cantrip2'];
        $flevel1 = $_POST['1stlevel1'];
        $flevel2 = $_POST['1stlevel2'];
        $flevel3 = $_POST['1stlevel3'];
        $flevel4 = $_POST['1stlevel4'];
        
        // if statements to check if duplicate selections
        if ($skillc1 == $skillc2 || $skillc1 == $skillc3 || $skillc2 == $skillc3){
            echo "Please select different skills";
        } elseif($instrument1 == $instrument2 || $instrument1 == $instrument3 || $instrument2 == $instrument3){
            echo "Please select different intruments";
        } elseif($cantrip1 == $cantrip2){
            echo "Please select different cantrips";
        } elseif($flevel1 == $flevel2 || $flevel1 == $flevel3 || $flevel1 == $flevel4 || $flevel2 == $flevel3 || $flevel2 == $flevel4 || $flevel3 == $flevel4){
            echo "Please select different level 1 spells";
        }
        else{
            if($_SESSION['skillb1'] == $skillc1 || $_SESSION['skillb1'] == $skillc2 || $_SESSION['skillb1'] == $skillc3 || $_SESSION['skillb2'] == $skillc1 || $_SESSION['skillb2'] == $skillc2 || $_SESSION['skillb2'] == $skillc3){
                echo "You already have some of these skills from your bakcground";
            } elseif ($_SESSION['instrumentb'] == $instrument1 || $_SESSION['instrumentb'] == $instrument2 || $_SESSION['instrumentb'] == $instrument3){
                echo "You already know how to play the instrument you picked from your bakcground";
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
            $txt = "<h2>Bard Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d8 per bard levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 8 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d8(or 5) + your Constitution modifier per bard level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> Light armor<br>\n
                    <b>Weapons:</b> Simple weapons, hand crossbows, longswords, rapiers, shortswords<br>\n
                    <b>Tools:</b> $instrument1, $instrument2, and $instrument3<br>\n
                    <b>Saving Throws:</b> Dexterity, Charisma<br>\n
                    <b>Skills:</b> $skillc1, $skillc2, and $skillc3\n";
            $txt .= "<h3>Equipment:</h3>\n
                    $mainW, $pack, $instrumentg, Leather armor(AC 11 + dex mod), and a dagger\n";
            $txt .= "<h3>Spellcasting:</h3>\n
                    You have learned to untangle and reshape the fabric of reality in harmony with your wishes and music. Your spells are part of your vast repertoire, magic that you can tune to different situations. See Spells Rules for the general rules of spellcasting and the Spells Listing for the bard spell list.\n
                    <h4>Cantrips:</h4>\n
                    You know two cantrips of your choice from the bard spell list. You learn additional bard cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Bard table.\n
                    <h4>Spell Slots:</h4>\n
                    The Bard table shows how many spell slots you have to cast your bard spells of 1st level and higher (2 at 1st level). To cast one of these spells, you must expend a slot of the spell’s level or higher. You regain all expended spell slots when you finish a long rest.\n
                    <h4>Spells Known of 1st Level and Higher</h4>\n
                    You know four 1st-level spells of your choice from the bard spell list.<br>\n
                    The Spells Known column of the Bard table shows when you learn more bard spells of your choice. Each of these spells must be of a level for which you have spell slots, as shown on the table. For instance, when you reach 3rd level in this class, you can learn one new spell of 1st or 2nd level.<br>\n
                    Additionally, when you gain a level in this class, you can choose one of the bard spells you know and replace it with another spell from the bard spell list, which also must be of a level for which you have spell slots.\n
                    <h4>Spellcasting Ability:</h4>\n
                    Charisma is your spellcasting ability for your bard spells. Your magic comes from the heart and soul you pour into the performance of your music or oration. You use your Charisma whenever a spell refers to your spellcasting ability. In addition, you use your Charisma modifier when setting the saving throw DC for a bard spell you cast and when making an attack roll with one.\n
                    <h4>Spell save DC</h4> = 8 + your proficiency bonus + your Charisma modifier. ($spellDC)\n
                    <h4>Spell attack modifier</h4> = your proficiency bonus + your Charisma modifier. ($spellattack)\n
                    <h4>Ritual Casting:</h4>\n
                    You can cast any bard spell you know as a ritual if that spell has the ritual tag.\n
                    <h4>Spellcasting Focus:</h4>\n
                    You can use a musical instrument (see the Tools section) as a spellcasting focus for your bard spells.\n";
            $txt .= "<h3>Bardic Inspiration:</h3>\n
                    You can inspire others through stirring words or music. To do so, you use a bonus action on your turn to choose one creature other than yourself within 60 feet of you who can hear you. That creature gains one Bardic Inspiration die, a d6.<br>\n
                    Once within the next 10 minutes, the creature can roll the die and add the number rolled to one ability check, attack roll, or saving throw it makes. The creature can wait until after it rolls the d20 before deciding to use the Bardic Inspiration die, but must decide before the DM says whether the roll succeeds or fails. Once the Bardic Inspiration die is rolled, it is lost. A creature can have only one Bardic Inspiration die at a time.<br>\n
                    You can use this feature a number of times equal to your Charisma modifier (a minimum of once). You regain any expended uses when you finish a long rest.<br>\n
                    Your Bardic Inspiration die changes when you reach certain levels in this class. The die becomes a d8 at 5th level, a d10 at 10th level, and a d12 at 15th level.\n";
            $txt .= "<h3>Spell list:</h3>\n
                    Cantrips:<br>\n
                    1. $cantrip1<br>
                    2. $cantrip2<br>\n
                    1st level<br>\n
                    1. $flevel1<br>
                    2. $flevel2<br>
                    3. $flevel3<br>
                    4. $flevel4<br>";
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