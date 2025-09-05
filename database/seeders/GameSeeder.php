<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game ;
use Illuminate\Support\Str ;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Game::create([
            'uuid'=>Str::uuid(),
            'title' =>'Dauntless' ,
            'size'=>2,
            'description'=> 'A free-to-play, co-op action RPG with gameplay similar to Monster Hunter.',
            'image' => ['games/images/W96hI28dfFfA0e05t83riYCF4RCr50-metaNjAzODQyNjkwMTM4NDYzNzYwNi5qcGc=-.jpg'],
            'url_video'=>'https://www.freetogame.com/open/dauntless',
            'category_id'=>1, 
    
            'type'=>'freement',
            'url_download'=>'https://www.freetogame.com/dauntless',
            'long_description'=>'Dauntless is a free-to-play, co-op action RPG developed by independent studio Phoenix Labs — a studio made of of veteran developers from Bioware, Riot, Capcom, and Blizzard. Set in a science-fantasy world, Dauntless places players in the role of elite warriors called Slayers. These Slayers protect humanity from Behemoths that are consuming the land following a cataclysmic event that turned the landscape into ever-changing, floating islands.\r\n\r\nThe gameplay may remind players of Monster Hunter, or perhaps a cheerier version of Shadow of the Colossus, where the goal is to defeat massive creates in an vast landscape.\r\n\r\nDauntless is playable solo, although it is designed with co-op play in mind. It boasts a variety of unique encounters and rewards players with items that will allow them to upgrade weapons and armor — enabling them to become even stronger warriors."',
            'Memory'=>'4',
            'Storage'=>15,
            'Developed_by'=>'Phoenix Labs, Iron Galaxy',
            'Platform'=>'Windows',
            'status'=>'Live',
            'publisher'=>'Phoenix Labs',
            'Graphics'=>'GPU: nVidia 660Ti (DX11) or equivalent',
            'Genre'=>'MMORPG',
            'ReleasedOn'=>'2019-05-19',
                    ]);
           Game::create([
            'uuid'=>Str::uuid(),
            'title' =>'World of Tanks' ,
            'size'=>40,
            'description'=> 'If you like blowing up tanks, with a quick and intense',
            'image' => ['games/images/hnsSqKQosaBBcaBz7T3Gu8JiebXdBj-metaNjAyNzE1MzA4ODk3NDAwNzY2NC5qcGc=-.jpg'], 
            'url_video'=>'https://www.freetogame.com/open/world-of-tanks',
            'category_id'=>2,
         
            'type'=>'freement',
            'url_download'=>'https://www.freetogame.com/world-of-tanks',
            'long_description'=>'World of Tanks is a popular free to play multiplayer role playing team-based shooter game developed by Wargaming.net. World of Tanks is based around the middle of the 20th century, and features huge epic battles with various different game modes such as Standard, Assault, Encounter Battles, and an added bonus of 15 tanks vs 15 enemy tanks gameplay.\r\n\r\nThe game starts off with quite easy gameplay but eventuates into a more difficult game as you progress, and because a typical game only takes between 5-10 minutes the game can get quite intense as well. Unlike other games in World of Tanks you cannot respawn; so when your tank gets destroyed you tank gets destroy and you have to start a new game before you can play again. You can still watch the battlefield from a spectator but who wants to be a spectator when you can join in with action with a simple click of a button?\r\n\r\nA different aspect of World of Tanks is that you wait in a queue called a “lobby” and then are launched into a random map, with random enemy players. In World of Tanks depending on your gaming style you start off with a fast lightly armored tank, a middle of the range type of tank, or a slower, more heavily armored tank. The tanks are based on real authentic tanks that were in World War 2. There are approximately 150 tanks from 3 different countries, these being Germany, Russia, and the United States of America.\r\n\r\nThe tank you choose can be customized by performing various different upgrades, which you can acquire through winning experience and credits you gain by winning battles against other enemy tanks. There are 10 different tiers, with tier 1 being a very weak tank going all the way up to tier 10 tanks which are the most powerful. Just like your tanks in the game your crew has a set of skills which progresses as you move through the different tiers in the game.\r\n\r\nYou can own multiple tanks but can only pilot 1 tank in any one game. Depending on what nation you choose will determine what research tree you will advance through to unlock new, more powerful tanks, weapons, and crew members to help your battles against the other enemy tanks. Since World of Tanks initial release there have been numerous updates to improve the difficulty, the visual aspects, new fresh maps, and new tanks and allow more exciting clan features of the game. If you like blowing up tanks, with a quick and intense game style you will simply love this game!',
            'Memory'=>'2',
            'Storage'=>16,
            'Developed_by'=>'Wargaming',
            'Platform'=>'Windows',
            'status'=>'Live',
            'publisher'=>'Wargaming',
            'Graphics'=>'Nvidia GeForce 6800 / ATI X1800 with 256 mb ram',
            'Genre'=>'Shooter',
            'ReleasedOn'=>'2011-04-12',
                        ]);
               

          Game::create([
            'uuid'=>Str::uuid(),
            'title' =>'Warframe' ,
            'size'=>25,
            'description'=> 'A cooperative free-to-play third person online action ',
            'image' => ['games/images/51AHpa6u38xOzMuUnK8TGTKvVoW6g0-metaNjAxODQyMjAwODg3MTc1ODg1MS5qcGc=-.jpg'],           
            'url_video'=>'https://www.freetogame.com/open/warframe',
            'category_id'=>2,
          
            'type'=>'freement',
            'url_download'=>'https://www.freetogame.com/warframe',
             'long_description'=>'Warframe is a 3D free-to-play cooperative third-person shooter game set in an stunning sci-fi world. In the distant future, war against the Grineer Empire leads humanity to summon ancient warriors from the distant past. Called “Tenno,” these agile fighters are equally skilled in blades and guns, able to carve their way through scores of enemies with skill and aplomb. A vast arsenal of these human weapons are called upon in mankind’s darkest hour to rescue their brethren from total annihilation.\r\n\r\nAs one of these Tenno, staked with protecting humanity, you’ll root out the Grineer from all their hiding places, scouring the Solar System and eliminating this nefarious threat. You’ll choose from among dozens of deadly Warframes, each with its own set of skills and strengths. The game progresses through a series of levels, each themed around a planet or region of the Solar System, and each requiring a squad of four Tenno to clear. As you advance, you’ll unlock more power for your Tenno, including new weapons and skills, letting you take on even tougher enemies.\r\n\r\nTenno have a number of sweet moves at their disposal, including the ability to “parkour” over and around obstacles, ziplines they can balance on, wall-latching and wall-dashing, and more. Tenno are also spiritual warriors, able to channel energy to spectacular results, including augmenting their weapon damage or activating special powers. Even when downed in battle, Tenno can continue to fight and rally to continue their missions.\r\n\r\nBetween missions, you can purchase better weapons for your Tenno or even entirely new Warframes, so you can try out a different play style. Some items cost credits (in-game currency) while others require platinum, which is purchased with real money. You can also craft your own weapons and insert mods to make them more powerful. Your ship, the Liset, is also where you’ll select your next mission, which you can choose to be public, letting anyone join you, or private, which you can attempt with a pre-selected team.\r\n\r\nWarframe requires fast reflexes and split-second timing to execute a Tenno’s most dynamic moves. Because the game demands constant progression, and the resources required to purchase those progressions, a high skill factor is required, not only to play, but to play quickly enough to advance at a reasonable rate – and to keep up with your teammates. As such, there’s a lot of repetition required. If you want to quickly rip through content over and over, growing in power with each iteration, Warframe will suit you.',
             'Memory'=>'2',
            'Storage'=>10,
            'Developed_by'=>'Digital Extremes',
            'Platform'=>'Windows',
            'status'=>'Live',
            'publisher'=>'Digital Extremes',
            'Graphics'=>'Nvidia GeForce 8600 GT or ATI Radeon HD 3600',
            'Genre'=>'Shooter',
            'ReleasedOn'=>'2013-03-25',
                                ]);
           Game::create([
             'uuid'=>Str::uuid(),
             'title' =>'Crossout' ,
             'size'=>25,
             'description'=> 'A post-apocalyptic MMO vehicle combat game!',
             'image' =>['games/images/FukjCyVxQQ6f3cFvAvPkwHwbdmnyb3-metaNjA0NzM2ODE3NzE4NjM1MjYxMi5qcGc=-.jpg'],           
             'url_video'=>'https://www.freetogame.com/open/crossout',
             'category_id'=>2,
         
             'type'=>'freement',
             'url_download'=>'https://www.freetogame.com/crossout',
             'long_description'=>'Crossout is a free to play post-apocalyptic MMO vehicle combat game! Gaijin Entertainment is taking the vehicular multiplayer shooter genre full gear with Crossout.\r\n\r\nFollowing the double catastrophes of a failed genetic testing project and an alien invasion, players are thrown into a wasteland world not unlike that of Mad Max. The harsh, post-apocalyptic terrain of Crossout forces players to build and customize their vehicles to fight and endure the elements and other players. Hunker down in the in-game Workshop and use the countless parts earned in battle to craft a formidable death machine capable of laying waste to opponents.\r\n\r\nWeapons in Crossout range from roof-mounted miniguns to vehicular chainsaws and everything in between the player can imagine. But combat isn’t all there is to Crossout. The in-game economy is driven by the players, allowing them to trade the parts they’ve earned with one another to craft stronger, pitiless, machines. Vehicles in Crossout must be strong, for the damage a vehicle takes in battle will affect its performance. And when the enemy is charging with a vehicle-mounted powerdrill, peak performance is everything.  Crossout is everything players looking for the post-apocalyptic vehicular warfare experience could possibly want. Find a vehicle and turn it into a death-spitting chariot of war!',
             'Memory'=>'2',
             'Storage'=>10,
             'Developed_by'=>'Gaijin',
             'Platform'=>'Windows',
             'status'=>'Live',
             'publisher'=>'Targem',
             'Graphics'=>'Nvidia GeForce 8600 GT or ATI Radeon HD 3600',
             'Genre'=>'Shooter',
             'ReleasedOn'=>'0007-05-30',
                       ]);
            Game::create([
             'uuid'=>Str::uuid(),
             'title' =>'Blade and Soul' ,
             'size'=>21,
             'description'=> 'A free-to-play martial arts MMORPG that tasks play...',
             'image' => ['games/images/AMPRovKDQsQkb13cs9NHeMRTXDZKLr-metaNTg1ODQ1ODIwMjQ5NTEwMjAwOS5qcGc=-.jpg'],           
             'url_video'=>'https://www.freetogame.com/open/blade-and-soul',
             'category_id'=>3,
      
             'type'=>'freement',
             'url_download'=>'https://www.freetogame.com/blade-and-soul',
             'long_description'=>'Blade & Soul is a free-to-play, action combat MMORPG from NCSoft that initially released in 2012 in Korea but finally saw a Western release in January 2016. Blade & Soul is a martial arts inspired MMORPG that tasks players with learning action combat based combination attacks for each class. Currently, there are 7 classes available in the game; Assassin, Blade Master, Destroyer, Force Master, Kung-Fu Master, Summoner, and Blade Dancer. New players will want to research the classes prior to starting a new character since classes fall under various race restrictions when choosing from one of the game’s four currently available races.\r\n\r\nBlade & Soul’s most notable feature is perhaps the game’s combat. Skills are learned as you level up and are displayed on hotbars in the traditional MMORPG style, but the actual implementation of those skills differs from most other games in the genre. While you will work with “rotations” in combat, it is perhaps better to think of these rotations in the form of “combinations” as each class will have a plethora of skills that can be combined in succession to perform very well animated combination attacks. These combinations may only be two or three buttons or they could be MUCH longer. Unlike other action combat MMOs though, Blade & Soul isn’t going to spoon feed you the combinations by hitting one key to trigger the next strike in the combination. Instead, Blade & Soul requires you to actually learn not only the combination itself, but each ability’s timing, and the required position to execute certain parts of the combination (Your hot bar actually can change based on position. i.e. being knocked down may give you access to abilities that cannot be used while standing). Learning these combination, aiming them appropriately, and reacting to incoming attacks are the key to the game’s fast paced and sometimes complex combat. If you liked TERA’s combat, you’ll probably enjoy Blade & Soul’s quite a bit.\r\n\r\nLeveling brings the usual grind of story, side, and repeatable quests but the game’s environments change so often and are very well rendered that you won’t get bored by the scenery for quite some time. Transportaion is handled with sprint, glide, and even water walking abilities to speed up any backtracking you may have do. Instant teleports are available by spending in-game currency. Leveling requires completion of quests and along the way players will gain gear that can be upgraded along with your character. Feed equipment that you don’t need to your sword, for example, and you get a sword that levels up as your character does. This primary upgrading mechanic applies to many different gear pieces and keeps players going after loot simply to “feed” their primary equipment.\r\n\r\nThe addition of a “Soul Shield” allows for extra stat customization provided you can find the pieces of the shield you desire. Skills can be further customized at about level 18 (it’s actually a story completion point that triggers this mechanic) by spending points in your martial tome to increase ability effectiveness.\r\n\r\nIf you enjoy dungeons, Blade & Soul has quite a few options for you. Each dungeon (be it a full instance or just a cave on the world map) has numerous difficulty levels and varying party size requirements. This keeps the loot fest rolling as certain dungeons will drop the items needed to “Breakthrough” on your weapon and gear upgrading. The game’s matchmaking system makes finding a party for these runs very easy.\r\n\r\nBlade & Soul’s PvP is based on two main categories; World PvP and Arena PvP. Arena PvP is a 1v1 or 3v3/6v6 (currently only in Korea) affair. Versus matches are simply queued for while World PvP is based on what your character is wearing. You read that right. World PvP is based on what you are wearing.',
             'Memory'=>'2',
             'Storage'=>15,
             'Developed_by'=>'NCSoft',
             'Platform'=>'Windows',
             'status'=>'Live',
             'publisher'=>'NCSoft',
             'Graphics'=>'GeForce 8600 GT / ATI Radeon HD 4650',
             'Genre'=>'MMORPG',
            'ReleasedOn'=>'0006-01-19',
                        ]);
         Game::create([
             'uuid'=>Str::uuid(),
             'title' =>'Armored Warfare' ,
             'size'=>30,
             'description'=> 'A modern team-based MMO tank game from Obsidian Entertainment. ',
             'image' => [ 'games/images/Vr6Q6NrgCMVipTDosMdAr5KLPwzn6l-metaNTgzMTA4MjgxOTY4NDc3MzY1NC5qcGc=-.jpg'],           
             'url_video'=>'https://www.freetogame.com/open/armored-warfare',
             'category_id'=>2,
          
             'type'=>'freement',
             'url_download'=>'https://www.freetogame.com/armored-warfare',
             'long_description'=>'Armored Warfare is a free to play 3D team-based MMO tank game from Obsidian Entertainment where you control combat vehicles from the 1950s all the way to modern day vehicles.  It is set in the modern day and is heavily focused on PvP, but it does have a selection of PvE game modes.\r\n\r\nYou can choose to play with one of five different classes: Main Battle Tanks, Light Tanks, Tank Destroyers, Armored Fighting Vehicles and Self-Propelled Guns. Each of the different classes comes with many different combat vehicles and many different combat styles.\r\n\r\nThe games main focus is PvP it does have a PvE side to it as well.  The PvE side of the game is split into two different categories during the missions: Primary and secondary. The Primary Objectives are things that you have to complete during the mission, with your co-op team, to successfully finish the mission. The Secondary Objectives do not have to be completed but they will offer you and your team a bigger reward if completed.\r\n\r\nThe PvP consists of two teams with 15 players each all of them using different vehicles and different classes of vehicles during the match. Players are thrown into a 15-minute match in which they have two different means to when the battle. They can either destroy all of the enemy team’s vehicles or capture the enemy base during those 15-minutes.\r\n\r\nThe game boasts great graphics powered by the CryENGINE 3 with destructible terrain. In its current state the game has nine different maps that take you from frozen tundras to sun-scorched deserts as well as doing battle around oil refineries and large population centers.\r\n\r\nArmored Warfare is a large action packed game with modern graphics that you can spend hours upon hours playing and upgrading your different vehicles and crews while enjoying either PvE or PvP.\r\n\r\nArmored Warfare is a large action packed game with modern graphics that you can spend hours upon hours playing and upgrading your different vehicles and crews while enjoying either PvE or PvP.',
             'Memory'=>'4',
             'Storage'=>10,
             'Developed_by'=>'Obsidian Entertainment',
             'Platform'=>'Windows',
            'status'=>'Live',
            'publisher'=>'My.com (Mail.ru Group)',
             'Graphics'=>'GeForce GTX 275 or better',
            'Genre'=>'Shooter',
            'ReleasedOn'=>'2015-10-08',
                     ]);
        
           Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Trove',
          'size'=>17,
          'description'=> 'A free to play Sandbox massively multiplayer online role-',
          'image' => ['games/images/goXMjH5Lhxo9Y7IiuzQx9zLAdReySa-metaNjAwMDMxMDkzNDk0MzQxMTUyMC5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/trove',
          'category_id'=>3,

          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/trove',
          'long_description'=>'A free to play Sandbox massively multiplayer online role-playing game! ",
          "description": "If you’re thirsting for danger and lusting for loot, then I have just the game for you! Grab your friends, hone your blades and set off for adventure in the free to play Sandbox MMORPG Trove. Developed and published by Trion Worlds, Trove is the story of The Sun Goddess, who has shattered the world into infinite realms. You’re job is to explore build and protect those realms, all in the name of fun!\r\n\r\nIn Trove, you will play as a Knight, Gunslinger, Ice Sage, Dracolyte, Pirate with a Parrot, or any (or all) of the other Classes available to you, while mastering your abilities: from deadly ninja technologies, to deliciously deadly ice cream crushes. You will be able to upgrade your gear to tackle epic challenges and strut your stuff with killer looks, as well! In Trove, you will experience an infinite about of fully destructible realms, on the backs of fire breathing dragons and purrrrrrfectly whiskered Meownts! You’ll jump into action tailored to any skill level as you conquer untamed wilds from the Treasure Isles to Candoria ­ home of the sweet toothed Candy Barbarians.\r\n\r\nTrove allows you to assemble groups of hardy cube kind and crawl your way through huge dungeons that are unique to each of the realms. You’ll brave deadly minions, bosses and traps in an attempt to liberate powerful armor and weapons, or dip into smaller lairs for single servings of danger which are perfect for solo fun! You’ll also rake in the loot with shimmering hoards of treasure and collectible items, from the deepest and darkest places in Trove. You’ll load up on special gear, costumes, decorations, recipes, crafting ingredients, flying carpets, sea­faring ships, dragons of mighty renown, and more!\r\n\r\nBuild yourself a home, or an entire world ­ cornerstones are personal homes that you are able to build block by block, but they’re also mobile bases. You are able to drop your Cornerstones at specially­ marked plots in any world you’re visiting and viola! Your hand­crafted home ­away­ from­ home will appear, and give you a place to kick back and relax (and craft to your heart’s content). When you build a world, you build an entire new Club World with friends. If you feel like making enormous geodesic domes in the desert, go for it! Magnificent castles in the sky? You can do that as well! The sky’s the limit in the world of Trove! How will you play? Get started for free, today',
          'Memory'=>'1',
          'Storage'=>1,
          'Developed_by'=>'Trion Worlds',
          'Platform'=>'Windows',
          'status'=>'Live',  
          'publisher'=>'Trion Worlds',
          'Graphics'=>'Intel HD Graphics 3000 or better',
          'Genre'=>'MMORPG',
          'ReleasedOn'=>'2017-07-09',
                   ]);
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'World of Warships' ,
          'size'=>40,
          'description'=> 'A 3D free to play naval action-themed MMO from the creators of World of Tanks! ',
          'image' => ['games/images/W3JdybSlpYtUTfsUm0mNM7fRJ7vgOw-metaNjAyNTAyMzM0MzU0MDk0MDE3My5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/archeage',
          'category_id'=>4,
          
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/world-of-warships',
          'long_description'=>'ArcheAge is a free-to-play, hybrid fantasy/sandbox MMORPG brought to you by Trion Worlds. Set in the fantasy world of Erenor, players are sent out on a journey of their own choosing. Players start on one of two continents: Nuia, home of the elves or Harihara, home of the Ferres. After that, the choices are up to the player from where to go, to why, and what actions to perform.\r\n\r\nArcheAge offers four unique races which possess their own innate qualities with an additional ten skill trees that create up to one hundred and twenty class options. By choosing three of the ten basic skill types, players are essentially able to create their own class tailored to their own unique style of gameplay.\r\n\r\nPets can be purchased and trained into mounts or as companions on the battlefield. The crafting system features 21 professions whose actions are performed using labor points. Labor points are gained based on time spent in game (unless you are a premium member) and accumulate over time. There are 7 different levels of mastery for each profession and each level grants a crafting benefit of some sort to the player.\r\n\r\nArcheAge features both PvE and PvP options. PvE choices include the typical dungeons and quests, while PvP offers features such as the Justice System, Arenas, Naval Battles and World PvP. Community options go beyond what is typical for an MMORPG, and while guilds are a part of the community, there are also factions and families. Land ownership plays a great deal into the gameplay of ArcheAge with individual players and guilds vying for land any time a new zone is added into the game.\r\n\r\nWith so many options to choose from, ArcheAge affords players the unique opportunity to become completely immersed in their world.  From character creation, to the economy, to the community, to the sandbox style world; the choices are endless.',
          'Memory'=>'4',
          'Storage'=>30,
          'Developed_by'=>'Wargaming',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Wargaming',
          'Graphics'=>'GeForce 9600GT (512 Mb) / GeForce 6800 GT or Radeon X800 GT',
          'Genre'=>'Shooter',
          'ReleasedOn'=>'2017-07-02',
                   ]);
         Game::create([
            'title' =>'ArcheAge' ,
            'size'=>80,
            'description'=> 'A free-to-play, hybrid fantasy/sandbox MMORPG brought to you by Trion Worlds',
             'image' =>['games/images/1uT53i2SvmMLIwFpBZ5lDorLPv762a-metaNTkyNTcxNDcxMDI5MDg2OTQyMC5qcGc=-.jpg'],           
             'url_video'=>'https://www.freetogame.com/open/archeage',
            'category_id'=>3,
            'price'=>4.00,
            'type'=>'payment',
            'url_download'=>'https://www.freetogame.com/open/archeage',
            'long_description'=>' is a free-to-play, hybrid fantasy/sandbox MMORPG brought to you by Trion Worlds. Set in the fantasy world of Erenor, players are sent out on a journey of their own choosing. Players start on one of two continents: Nuia, home of the elves or Harihara, home of the Ferres. After that, the choices are up to the player from where to go, to why, and what actions to perform.\r\n\r\nArcheAge offers four unique races which possess their own innate qualities with an additional ten skill trees that create up to one hundred and twenty class options. By choosing three of the ten basic skill types, players are essentially able to create their own class tailored to their own unique style of gameplay.\r\n\r\nPets can be purchased and trained into mounts or as companions on the battlefield. The crafting system features 21 professions whose actions are performed using labor points. Labor points are gained based on time spent in game (unless you are a premium member) and accumulate over time. There are 7 different levels of mastery for each profession and each level grants a crafting benefit of some sort to the player.\r\n\r\nArcheAge features both PvE and PvP options. PvE choices include the typical dungeons and quests, while PvP offers features such as the Justice System, Arenas, Naval Battles and World PvP. Community options go beyond what is typical for an MMORPG, and while guilds are a part of the community, there are also factions and families. Land ownership plays a great deal into the gameplay of ArcheAge with individual players and guilds vying for land any time a new zone is added into the game.\r\n\r\nWith so many options to choose from, ArcheAge affords players the unique opportunity to become completely immersed in their world.  From character creation, to the economy, to the community, to the sandbox style world; the choices are endless',
            'Memory'=>'2',
            'Storage'=>40,
            'Developed_by'=>'XL Games',
            'Platform'=>'Windows',
            'status'=>'Live',
            'publisher'=>'Kakao Games',
            'Graphics'=>'MMORPG',
            'Genre'=>'MMORPG',
            'ReleasedOn'=>'2019-09-04',
                           ]);
           Game::create([
                 'uuid'=>Str::uuid(),
                 'title' =>'Neverwinter' ,
                 'size'=>27,
                 'description'=> 'A free-to-play 3D action MMORPG based on the acclaimed Dungeons & Dragons fantasy roleplaying game. ',
                 'image' => ['games/images/ZHCm8Cr6BXx8v4TQxXNc1gnaRJkvm6-metaNTk2NjQxNzcyODgwODAwNTAxNy5qcGc=-.jpg'],           
                 'url_video'=>'https://www.freetogame.com/open/neverwinter',
                 'category_id'=>3,
                
                 'type'=>'freement',
                 'url_download'=>'https://www.freetogame.com/neverwinter',
                 'long_description'=>'If you’re a fan of Dungeons and Dragons, have I got a game for you! Neverwinter, developed by Cryptic Studios and published by Perfect World Entertainment, is based on the critically acclaimed fantasy role playing game and the best part is ­ it’s free to play. In the world of Neverwinter, you will explore and defend one of the most beloved cities from the Dungeons and Dragons Forgotten Realms Campaign Setting, as it rises from the ashes of total destruction. In this totally immersive MMORPG you will go from the besieged walls of the city, to the subterranean passageways and search for forgotten secrets and lost treasure along the way.\r\n\r\nNeverwinter is completely free to play, from the very first level, all the way up to the level cap, so anyone is able to experience the engaging action and combat it brings. You don’t have to worry about tab­targeting or auto­attacking to defeat your enemies, Neverwinter provides an amazing combat experience where every action will require planning and feel visceral and look spectacular.\r\n\r\nNeverwinter also comes with Foundry, which is a dynamic tool set that will provide you with the game assets and a sandbox environment that will allow you to create your own adventures ­ and when you are ready to unveil your creation to the world ­ you are able to hook it up directly to the existing work so everyone else in the community can experience it as well!\r\n\r\nWhether you are familiar with Dungeons and Dragons from the tabletop game or from the novels, Neverwinter has recreated many of the iconic classes, locations and encounters that you will know and love! You might choose to go on an adventure as a mighty Guardian Fighter, choose to deceive foes as a Trickster Rogue, or follow the righteous path as a Devoted Cleric, but whatever journey you decide to take in Neverwinter you will face Kobolds, Beholders, Mimics and many other creatures from the Dungeons and Dragons universe, and you will surely feel right  ',
                 'Memory'=>'1',
                 'Storage'=>4,
                 'Developed_by'=>'Cryptic Studios',
                 'Platform'=>'Windows',
                 'status'=>'Live',
                 'publisher'=>'Perfect World Entertainmen',
                 'Graphics'=>'Shader Model 2.0 or higher, GeForce 6800 or ATI Radeon X850 performance, 128MB+ video ram',
                 'Genre'=>'MMORPG',
                 'ReleasedOn'=>'2013-12-16',
                          ]);
           Game::create([
                'uuid'=>Str::uuid(),
                'title' =>'War Thunder' ,
                'size'=>22,
                'description'=> 'A MMO shooter that puts you in command of hundreds of the finest combat vehicles of World War II',
                'image' => ['games/images/4wUCvzioHACY4FidCiSSEv27WpjdXW-metaNTgzMTE3OTI3NjA2MDMwNzMxMS5qcGc=-.jpg'],           
                'url_video'=>'https://www.freetogame.com/open/war-thunder',
                'category_id'=>5,
             
                'type'=>'freement',
                'url_download'=>'https://www.freetogame.com/war-thunder',
                'long_description'=>'War Thunder is a massively multiplayer shooter that puts you in command of hundreds of the finest combat vehicles of World War II. You’ll pilot warplanes in exciting PvP dogfights and rumble across the battlefield in tanks, battling against foes on across several vintage maps, featuring diverse terrain and offering several strategic options. There are many different ways to play War Thunder, ranging from quick arcade mode-style combat to competitive, realistic battles.\r\n\r\nThe vehicles in War Thunder represent WWII-era tanks and planes from several different nations, including the United States, Great Britain, Germany, Japan, and the USSR. Battles earn you currency you can use to upgrade your vehicles with better engines, weaponry, and other modifications, and you’ll also earn experience that you can use to unlock more vehicles and increase your crew’s performance. Planes include quick and agile fighters, giant flying fortresses, and precision bombers, while tanks run the gamut from light to heavy to self-propelled artillery. Each has its own strengths and weaknesses and learning how to properly use your vehicles is the key to victory.\r\n\r\nThe most common game modes are PvP battles that revolve around a series of control points or that task players with destroying enemy vehicles, whether AI-controlled or belonging to other players. Each player brings a squad of up to five vehicles and, when your current vehicle is destroyed, you’ll choose another one to ride back into combat. You can also adjust battle realism, opting for simpler controls with target reticles and other helpful guides, or complete realism, with very few artificial elements in the way of aid. In addition to PvP battles, there are also PvE campaigns and missions you can take on alone or with other players. No matter how you play War Thunder, the action will be easy to find and the battles will have you on the edge of your seat!',
                'Memory'=>'1',
                'Storage'=>3,
                'Developed_by'=>'Gaijin Entertainment',
                'Platform'=>'Windows',
                'status'=>'Live',
                'publisher'=>'Gaijin Entertainment',
                'Graphics'=>'Radeon X26XX / GeForce 7800 GT',
                'Genre'=>'Shooter',
                'ReleasedOn'=>'2013-08-15',
                           ]);
             Game::create([
               'uuid'=>Str::uuid(),
               'title' =>'Guild Wars 2' ,
               'size'=>40,
               'description'=> 'A free-to-play MMORPG, the follow-up to ArenaNets popular Guild Wars.',
               'image' => ['games/images/D5aPm0hVXcTu0kjJ3aGoBPz2IVP2iC-metaNTkxODkwMTQ2NjIzMDI3MTA4OC5qcGc=-.jpg'],           
               'url_video'=>'https://www.freetogame.com/open/guild-wars-2',
               'category_id'=>3,
           
               'type'=>'freement',
               'url_download'=>'https://www.freetogame.com/guild-wars-2',
               'long_description'=>'Guild Wars 2 is a free-to-play open-world MMORPG, the follow-up to ArenaNet’s popular Guild Wars. Building on that first game’s guiding principles, it offers a huge world to explore, populated with dynamic events that can start at any time and provide excellent variety in gameplay. It also features PvP, both open-world and instanced, dungeons, raiding, storytelling, and everything else you’d expect in a full-featured massively multiplayer online RPG.\r\n\r\nYou’ll choose from among the five races of Tyria – human, norn, charr, sylvari, and asura – and one of several classes. Each class has remarkable versatility, allowing it to fill a number of roles in a party and reducing the need for a full MMO-style “trinity.” Characters have limited skill bars of 10 slots; the first five are determined by your weapon and the second five by skills that you choose: a healing skill, three utility skills, and an elite skill. Different classes have ways to access other skills, and most classes have the ability to swap out weapons, so you’ll still have some variety in exactly what tools you can bring to each fight.\r\n\r\nThe heart of Guild Wars 2 is its open-world content. While there is some static content, in the form of “hearts” that you can complete once for NPCs, most of the game revolves around dynamic events, which spring up in the world at various times and often require large groups of players to complete. There are no traditional quests that require you to speak to NPCs to accept or complete them; instead, you can simply go from event to event, helping the people of Tyria as you see fit. Some events are parts of larger chains that string together and culminate in a giant event against a great threat to Tyria and require a hundred or more players to complete.',
               'Memory'=>'2',
               'Storage'=>35,
               'Developed_by'=>'ArenaNet',
               'Platform'=>'Windows',
               'status'=>'Live',
               'publisher'=>'NCsoft',
               'Graphics'=>'NVIDIA® GeForce® 7800, ATI X1800, Intel HD 3000, or better (256 MB of video RAM and shader model 3.0 or better)',
               'Genre'=>'MMORPG',
               'ReleasedOn'=>'2012-08-28',
                                       ]);
                                       
            Game::create([
             'uuid'=>Str::uuid(),
             'title' =>'Star Trek Online' ,
             'size'=>19,
             'description'=> 'A free-to-play, 3D, Sci-Fi MMORPG based on the popular Star Trek series',
             'image' => ['games/images/dXhTvC2MZlfqVl0ak6xDMdWuKfan0h-metaNTk0Mzc1MzkyOTQxNjM1NDk2NC5qcGc=-.jpg'],           
             'url_video'=>'https://www.freetogame.com/open/star-trek-online',
             'category_id'=>3,
       
             'type'=>'freement',
             'url_download'=>'https://www.freetogame.com/star-trek-online',
             'long_description'=>'Star Trek Online (STO) is a free-to-play, 3D, Sci-Fi MMORPG based on the popular Star Trek series. In this massively multiplayer online game brought to you by Cryptic Studios, players have many options to create their own destiny.\r\n\r\nDuring character creation players are afforded the ability to choose between three canonical races: Federation, Klingon and Romulan. Each of these races comes with their own inherent blend of racial traits and players have the opportunity to customize their own unique species.\r\n\r\nEnjoy a vast array of gameplay options as you explore iconic locations from the Star Trek series including Starfleet Academy, Deep Space Nine, The First City of Qo’nos, and many more.  Participate in many different mission types to advance your character such as Star Fleet missions (raids), Genesis System missions (exploration), and The Foundry, where you can create your own playable mission to share with your friends and the whole Star Trek Online Universe as well as participate in other user generated missions. With the Duty Officer System, there is opportunity for offline progression as well, though this is optional.\r\n\r\nStar Trek Online also has a skill-based crafting system which involves collecting various particles or data samples throughout the universe. With these particles and data samples, players are then able to craft items to assist them with their missions. As crafting skill increases, players are able to access a wider variety of more powerful items. Most items in the game can be upgraded for level and rarity and there is the opportunity to create Epic level items as well.\r\n\r\nThe MMORPG game can be downloaded for Windows from the Perfect World Entertainment platform, Arc Games, or from Steam. Perfect World Entertainment also offers a standalone Mac client download option."',
             'Memory'=>'1',
             'Storage'=>10,
             'Developed_by'=>'Cryptic Studios',
             'Platform'=>'Windows',
             'status'=>'Live',
             'publisher'=>'Perfect World Entertainme',
             'Graphics'=>'NVIDIA GeForce 7800 / ATI Radeon X1800 / Intel HD Graphics',
             'Genre'=>'MMORPG',
             'ReleasedOn'=>'2010-02-02',
                  ]);
            Game::create([
              'uuid'=>Str::uuid(),
              'title' =>'Crossfire' ,
              'size'=>13,
              'description'=> 'A first person tactical shooter with a huge selection of game modes!',
              'image' =>[ 'games/images/2N5hlYE3WwaVCpyQdh0hipM5oFVSGe-metaNTgzMTE1Nzc3MTE1OTA1NjE4OC5qcGc=-.jpg'],           
              'url_video'=>'https://www.freetogame.com/open/crossfire',
              'category_id'=>3,
             
              'type'=>'freement',
              'url_download'=>'https://www.freetogame.com/crossfire',
              'long_description'=>'Crossfire is a first person tactical shooter that has a huge selection of game modes to try out, a decent amount of character customization, and loads of weapons for every situation you could find yourself in. Crossfire features two groups, Blacklist and Global Risk, that are constantly at odds with one another. Players must join an online team and participate in various game modes with their selected faction to destroy their enemies.\r\n\r\nNever fear about running out of game modes to try out, Crossfire boasts 19 different game modes that you can play through time and time again. Team Deathmatch, Destruction Mode, Elmination, Ghost Mode, Free for All, Mutation Mode, Escape Mode, Hero Mode, Zombie Apocalypse, Hero Mode X, Bounty Mode, Wave Mode, Shadow Mode, Ghosts vs. Mutants, Soccer mode, RPG Mode, Super Soldier TDM, Rapid Surge Mode, and Zombie Knight Mode.\r\n\r\nPlayers get to create their own unique characters that represent them in game. They can choose from tons of different cosmetic items that make their characters one of a kind. As players compete in Crossfire they level up and unlock more weapons and character customization options.',
              'Memory'=>'512',
              'Storage'=>1.7,
              'Developed_by'=>'SmileGate',
              'Platform'=>'Windows',
              'status'=>'Live',
              'publisher'=>'Neowiz Games',
              'Graphics'=>'GeForce 5600',
              'Genre'=>'Shooter',
              'ReleasedOn'=>'2007-05-03',
                         ]);
            Game::create([
              'uuid'=>Str::uuid(),
              'title' =>'Roblox' ,
              'size'=>200,
              'description'=> 'A free to play sandbox MMO with lots of creation options',
              'image' =>['games/images/qz3q76OR3LnQ2WiyVjJpOOUfBA5d9V-metaNjA0NzU2NjcxNjM0NDU3NzQ4MS5qcGc=-.jpg'],           
              'url_video'=>'https://www.freetogame.com/open/roblox',
              'category_id'=>6,
          
              'type'=>'freement',
              'url_download'=>'https://www.freetogame.com/roblox',
              'long_description'=>'Roblox is a free to play sandbox MMO. Imagine MineCraft with the option to take your creations, add story and other gameplay elements, turn it into a game and then post it for others to experience it. \r\n\r\nThere are even ways to earn money and create micro-transitions for other users to support your game-worlds if they enjoy them. That is Roblox for you in a nutshell. Since Roblox’s main appeal is the vast variety of games created by users, it will be near impossible to explain gameplay in Roblox, since it will be completely different depending on which world you are playing in. Along with the thousands of games you can play on Roblox, it also has a social platform to it. You can follow different content creators and even add users on your friend’s list and interact with them within the game.\r\n\r\nThere are many feature in place within the Roblox servers that are designed to keep children safe. All chat is moderated and parents can easily track their kid’s activity within the game. One of the major rules in Roblox is the no dating rule, which helps keep the focus on playing and building games instead of deep social interaction of questionable nature.The game development portion of Roblox is one of the strongest features it has to offer. \r\n\r\nWith nearly unlimited possibilities, and its own programming language that is designed for teens to understand and learn, Roblox is an amazing engine for game programmers to hone their craft, along with making a couple bucks!"',
              'Memory'=>'1',
              'Storage'=>20,
              'Developed_by'=>'Roblox Corporation',
              'Platform'=>'Windows',
              'status'=>'Live',
              'publisher'=>'Roblox Corporation',
              'Graphics'=>'DirectX 9 minimum and Shader Model 2.0.',
              'Genre'=>'MMO',
              'ReleasedOn'=>'2006-12-22',
                           ]);
            
           Game::create([
             'uuid'=>Str::uuid(),
             'title' =>'Entropia Universe' ,
             'size'=>50,
             'description'=> 'A 3D MMO Multi Virtual World Real Cash Economy Experience with RPG elements.',
             'image' => ['games/images/krxUMhnBQFItzBsdXIHrQh79CkO9j4-metaNTk0Mzc4OTYyMDU5NDU4NDU3OC5qcGc=-.jpg'],           
             'url_video'=>'https://www.freetogame.com/open/entropia-universe',
             'category_id'=>3,
          
             'type'=>'freement',
             'url_download'=>'https://www.freetogame.com/entropia-universe',
             'long_description'=>'Entropia Universe is free to play 3D Sci-Fi MMORPG with interesting economic and social features. MindArk’s virtual economy universe is known by many names depending on when you started playing the game and what planet was the key planet at the time. While the game is free-to-play and does have some typical MMORPG elements (combat, questing, looting, etc) the primary difference between Entropia Universe and other games is the linking of a real world currency exchange.\r\n\r\nImagine this: you spend $10 USD to buy some in game currency. You then use that currency and your skills (like sweating monsters) to farm up items of value and triple your total in-game currency. Sounds familiar so far, right? Here’s where Entropia Universe differs though. You can exchange that in-game currency BACK into real world money whenever you want to do so at a fixed conversion rate. This means players can play their game, have some fun, and turn an actual real life profit if they work hard enough.\r\n\r\nThis primary economic mechanic had netted Entropia Universe some serious press as players buy and sell actual locations in game for hundreds of thousands of real life dollars. The game has also appeared in the Guinness Book of World Records earning titles multiple times for the most expensive virtual items ever sold.\r\n\r\nIn game, players aren’t really limited to classes. If you like combat, go for it. Want to be a surgeon? You can do that too. If you can find a way to earn money doing something, chances are that Entropia Universe will allow you to do it. If you’re looking for a slightly off the beaten path Sci-Fi MMO game and would like to take your chance at making some extra scratch, check out Entropia Universe.\r\n',
             'Memory'=>'4',
             'Storage'=>10,
             'Developed_by'=>'MindArk',
             'Platform'=>'Windows',
             'status'=>'Live',
             'publisher'=>'MindArk',
             'Graphics'=>'NVIDIA GeForce 285 / ATI Radeon 4870 or better',
             'Genre'=>'MMORPG',
             'ReleasedOn'=>'2003-01-30',
                      ]);
            Game::create([
            'uuid'=>Str::uuid(),
            'title' =>'Second Life' ,
            'size'=>5,
            'description'=> 'A free to play 3D online virtual world with a huge reputation! ',
            'image' =>['games/images/yzVsawNyPHWs1vmyfDX24mlT2JvXuE-metaNTgzMTIzMTAzMDQxNjIyNDAzMi5qcGc=-.jpg'],           
            'url_video'=>'https://www.freetogame.com/open/second-life',
            'category_id'=>7,
         
            'type'=>'freement',
            'url_download'=>'https://www.freetogame.com/second-life',
            'long_description'=>'Second Life is a free to play 3D online virtual world with a huge reputation, is one of the oldest Online Virtual worlds, and is still running strong even today. Second Life is, as the name suggests, virtually a second life that the player can logged into.\r\n\r\nUnlike most games where there is a set “goal” or “end” to work toward, Second Life doesn’t really have a linear story, nor does it follow the normal standard for video games. In Second Life, you start with an avatar that can be customized with a huge database filled with different cosmetic items. From there, you can do virtually anything you want. From Exploring countless zones and player created content, roleplaying with others, to using the game as a platform to socialize with others the way you would in real life, there really is no limit to what you can do in Second Life.\r\n\r\nSecond Life is filled with user generated content. You can choose to take part in that by creating your own content within Second Life, or just spend your time viewing and enjoying content made by fellow Second Life players. This type of content can be in the form of mini-games, buildings, or various types of sims. Second Life has a currency that creates an economy similar to that of the real world. “Linden Dollars” is the currency in Second life and it can even be traded for real world money, meaning that what you make in Second Life holds actual value, allowing people to make a living in Second Life if they choose to!\r\n\r\nIf you are someone that has hopped on the VR ban wagon, then Second Life is a title you need to check out. It has Oculus Rift support, which is a great way to see exactly what VR is capable of. It also adds another element to Second Life, making the game feel even closer to real life. If you are looking for an escape from your normal life, and have an idea of the perfect life you can’t obtain in the real world, then Second Life is for you!\r\n\r\n',
            'Memory'=>'3',
            'Storage'=>8,
            'Developed_by'=>'Linden Lab',
            'Platform'=>'Windows',
            'status'=>'Live',
            'publisher'=>'Linden Lab',
            'Graphics'=>'Nvidia GeForce 9800, AMD Radeon 4850, or better',
            'Genre'=>'Social',
            'ReleasedOn'=>'2003-06-23',
                                 ]);         
                          
          Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Minion Masters' ,
          'size'=>2,
          'description'=> 'A free-to-play strategic minion brawler from Danish developer Betadwarf.',
          'image' => ['games/images/u8XeRiugZ9kJmMhzwH89TBz2Tk2WKk-metaNTgzMTUzMTg3OTk5MDQwNjk4Ni5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/minion-masters',
          'category_id'=>8,
      
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/minion-masters',
          'long_description'=>'Minion Masters is a free-to-play strategic minion brawler from Danish developer Betadwarf. The game offers players 1v1 or 2v2 competition taking place in small arenas. Players choose between different Masters with unique hero abilities. They then use these masters to summon collectible minions to the field. Once they’re on the field, it’s pretty much up to them what they’re going to do, so choose carefully.\r\n\r\nThe game offers several modes, standard 1v1 and 2v2, 1v1 draft, mayhem, expeditions, and solo challenges. In 1v1 draft, players build their deck from a random selection of cards During this mode three loses means the player is out of the game. Mayhem offers different rules every week, Expeditions are the game’s story mode. And solo challenges allow players to practice against the game’s AI.\r\n\r\nTo progress in the game, players will need to learn how to utilize their masters as well as unlock or craft an increasing number of minions and spells.\r\n\r\nThe game promises nearly constant new content, with the devs adding new things all the time, including events and cosmetics',
          'Memory'=>'4',
          'Storage'=>6,
          'Developed_by'=>'Betadwarf',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Betadwarf',
          'Graphics'=>'Nvidia Geforce GT 240 or equivalent, minimum 512 MB of VRAM',
          'Genre'=>'Card Game',
          'ReleasedOn'=>'2019-05-24',
                        ]);     
          Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Splitgate: Arena Warfare' ,
          'size'=>19,
          'description'=> 'A free-to-play multiplayer shooter developed and published by 1047 games ',
          'image' =>['games/images/hjhpaYzbSqAzH8XXGGWH36DslE4NZB-metaNTg3ODg2MDY5MzAxNTQ3MzM2NS5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/splitgate-arena-warfare',
          'category_id'=>5,
    
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/splitgate-arena-warfare',
          'long_description'=>'Minion Masters is a free-to-play strategic minion brawler from Danish developer Betadwarf. The game offers players 1v1 or 2v2 competition taking place in small arenas. Players choose between different Masters with unique hero abilities. They then use these masters to summon collectible minions to the field. Once they’re on the field, it’s pretty much up to them what they’re going to do, so choose carefully.\r\n\r\nThe game offers several modes, standard 1v1 and 2v2, 1v1 draft, mayhem, expeditions, and solo challenges. In 1v1 draft, players build their deck from a random selection of cards During this mode three loses means the player is out of the game. Mayhem offers different rules every week, Expeditions are the game’s story mode. And solo challenges allow players to practice against the game’s AI.\r\n\r\nTo progress in the game, players will need to learn how to utilize their masters as well as unlock or craft an increasing number of minions and spells.\r\n\r\nThe game promises nearly constant new content, with the devs adding new things all the time, including events and cosmeticsSplitgate: Arena Warfare is a free-to-play multiplayer shooter developed and published by 1047 games. \r\n\r\nThe game combines elements of shooters from the last two decades with dimension altering portals. Similar to the game Portal, players can use these to move things from one area of the map to another — including their opponents, or themselves. Drop your opponent through a hole or sneak up behind them using the portal tech.\r\n\r\nThe game features close-quarters combat and allows players to take on nine other players or fight against AI. It’s designed for veteran and new players and boasts an “infinitely high skill cap”. As with most competitive shooters, players can expect a ranking system. Splitgate’s is based solely on wins and losses — something the developers feel will cut back on griefing and boosting.",',
          'Memory'=>'6',
          'Storage'=>15,
          'Developed_by'=>'1047 Games',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'1047 Games',
          'Graphics'=>'NVIDIA GeForce GTX 560 1GB',
          'Genre'=>'Shooter',
          'ReleasedOn'=>'2019-05-22',
                         ]);         
        Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Destiny 2' ,
          'size'=>80,
          'description'=>'A free-to-play multiplayer Sci-Fi MMOFPS from Bungie' ,
          'image' => ['games/images/vDe7CUu2iBemO2gRPAFqE3w2E35aa9-metaNTg4NTI1NTY5MzE2MDc4NzE5My5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/destiny-2',
          'category_id'=>2,
          'price'=>'30.00',
          'type'=>'payment',
          'url_download'=>'https://www.freetogame.com/destiny-2',
          'long_description'=>'Get ready to explore the solar system in Bungie’s Destiny 2. The game, available on PS4 and PC, has made the leap to free-to-play — and Steam.\r\n\r\nThis new free version is what player have come to expect from the buy-to-play game, including all of the game’s story, access to all the guardian classes, a selection of multiplayer activities and plenty of new gear.\r\n\r\nDestiny 2 is set in a sci-fi universe where players must take up the roles of Guardians and protect what’s left of Earth from alien attackers — specifically a race known as the Cabal. The story picks up following a successful attack by the Cabal, during which the Guardians have been stripped of their power and must find a way to regain it.\r\n\r\nTem up with friends,take on everything from basic story missions to 3-player strikes and 6-player raids. Enjoy in-game events and challenge other players in different PvP modes, including the traditional deathmatch.\r\n\r\nThe game does include a few purchase options — including the most current expansion and varying amounts of silver for purchasing in-game items.',
          'Memory'=>'2',
          'Storage'=>10,
          'Developed_by'=>'Bungie',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Bungie',
          'Graphics'=>'GeForce 9800 GTX+ or Radeon HD 4850',
          'Genre'=>'Shooter',
          'ReleasedOn'=>'2019-10-01',
                   ]);                                              
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Wild Terra Online 	' ,
          'size'=>8,
          'description'=> 'A medieval sandbox MMO designed with core players in mind. ',
          'image' =>['games/images/091KbFyj5Ls2V68ByHEqD3lkJ8r7Hw-metaNTk2NjUzMTQ3NjcyMTg3MjMzMC5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/wild-terra-online',
          'category_id'=>3,
      
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/wild-terra-online',
          'long_description'=>'Wild Terra Online is a medieval sandbox MMO designed with hardcore players in mind. The game, developed and published by Juvty Worlds Developers Team, is a mix of survival featuring hunting and taming, building, crafting and trading, and combat.\r\n\r\nAs with most survival-type games, players will need to pay attention to not only external dangers, but manage both exhaustion and hunger. Luckily, there’s an extended culinary system.\r\n\r\nThere’s also an in depth creature system that allows for the hunting, catching, and taming of wild animals. Any large animal can be used as a mount.\r\n\r\nAS for building, the game gives players more than 150 buildings to work with, ranging from a campfire to full castles. There are also furnaces, smithies, mills, and more.\r\n\r\nWild Terra is available to download via Steam.\r\n\r\n',
          'Memory'=>'4',
          'Storage'=>600,
          'Developed_by'=>'Juvty Worlds Ltd.',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Juvty Worlds Ltd.',
          'Graphics'=>'512 MB, WebGL support',
          'Genre'=>'MMORPG',
          'ReleasedOn'=>'2017-12-18',
                     ]);                  
        
         Game::create([
         'uuid'=>Str::uuid(),
         'title' =>'Apex Legends' ,
         'size'=>24,
         'description'=> 'A free-to-play strategic battle royale game featuring 60-player matches and team-based play.',
         'image' =>['games/images/EUHgSj4g3aL98BMhXjzKvkTFbxIBwk-metaNjA0NTM5NzQ3MDA5NzI4ODcwNS5qcGc=-.jpg'],           
         'url_video'=>'https://www.freetogame.com/open/apex-legends',
         'category_id'=>9,
         
         'type'=>'freement',
         'url_download'=>'https://www.freetogame.com/apex-legends',
         'long_description'=>'Apex Legends is a free-to-play strategic battle royale featuring 60-player matches and team-based play. Not only do players work together to survive and defeat the other teams, but teammates can also resurrect their fallen comrades provided they use Respawn Beacons.\r\n\r\nThe game makes other changes to the battle royale genre as well, such as the Intelligent Inventory that offers players a way to find exactly what they need, and a new deployment method.\r\n\r\nPlayers can choose between eight different “Legends”, this game’s version of heroes or champions. These range from a professional soldier to a holographic trickster. Of course, the requisite meat shield and medic are present in the lineup.\r\n\r\nPlayers unlock characters by collecting Legend Tokens. Twelve-thousand tokens are required to unlock one character. Since tokens are earned by playing matches, those who spend the most time in the game will unlock all the characters faster than those who spend less.\r\n\r\nAs with other battle royales, players can purchase packs filled with cosmetics and crafting materials. And, yes, there is a battle pass filled with seasonal cosmetics."',
         'Memory'=>'6',
         'Storage'=>30,
         'Developed_by'=>'Electronic Arts',
         'Platform'=>'Windows',
         'status'=>'Live',
         'publisher'=>'Electronic Arts',
         'Graphics'=>'NVIDIA GeForce GT 640 / Radeon HD 7700',
         'Genre'=>'Shooter',
         'ReleasedOn'=>'2019-02-04',
                     ]);         
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Counter-Strike: Global Offensive' ,
          'size'=>22,
          'description'=> 'The popular multiplayer shooter from Valve.',
          'image' =>['games/images/8ctQtcWyefb2vpuyjCLAV7w22Flw15-metaNTgwNDE3ODc1MzcwMDYwNTE1Ny5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/counter-strike-global-offensive',
          'category_id'=>5,
         
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/counter-strike-global-offensive',
          'long_description'=>'Counter-Strike: Global Offensive is the popular multi-player shooter from Valve. One of the most popular games in esports, CSGO is primarily an objective-based shooter wherein two teams compete in a variety of game modes to complete an objectives ranging from defusing a bomb to rescuing hostages.\r\n\r\nThere are nine game modes, including: competitive, casual, deathmatch, arms race, demolition, wingman, flying scountsman, weapons course, and (most recently) a battle royale mode titled Danger Zone. As with most competitive online shooters, CSGO supports matchmaking.\r\n\r\nDue to the long life of the game, players have a wide selection of weapons to choose from when playing. The game also offers a solid spectator mode.\r\n\r\n"',
          'Memory'=>'2',
          'Storage'=>15,
          'Developed_by'=>'Valve, Hidden Path Entertainment',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Valve',
          'Graphics'=>'Video card must be 256 MB or more and should be a DirectX 9-compatible with support for Pixel Shader 3.0',
          'Genre'=>'Shooter',
          'ReleasedOn'=>'2012-08-21',
                           ]);         
          Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Bless Online' ,
          'size'=>35,
          'description'=> 'A free-to-play fantasy MMORPG featuring field battles, monster taming, and large 100v100 realm vs realm battles.',
          'image' => ['games/images/I6ihYPLrDHJLEAkIyRunzwcOAiaByZ-metaNjAxMTcyNTMwNDQ1Mzc3MDM0OC5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/bless-online',
          'category_id'=>3,
           
          'type'=>'freement',
          'url_download'=>'"https://www.freetogame.com/bless-online',
          'long_description'=>'Bless Online is a free-to-play fantasy MMORPG featuring field battles, monster taming, and large 100v100 realm vs realm battles. Like many MMOs, Bless offers players several different classes and races to choose between when building a character. Once in game, they’ll be able to explore a vast world, fight creatures in dungeons and raids, compete in PvP and more.\r\n\r\nBless Online is a free-to-play fantasy MMORPG featuring field battles, monster taming, and large 100v100 realm vs realm battles. Like many MMOs, Bless offers players several different classes and races to choose between when building a character. Once in game, they’ll be able to explore a vast world, fight creatures in dungeons and raids, compete in PvP and more.\r\n\r\nPlayers who aren’t in the mood for combat can take on other tasks, such as crafting, enchantment, or alchemy. Creature taming is also a major features of the game with players being able to capture different creatures around the world, which can be turned into pets or mounts.',
          'Memory'=>'8',
          'Storage'=>88,
          'Developed_by'=>'Neowiz Bless Studio',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Neowiz',
          'Graphics'=>'NVIDIA GeForce GTX760 / AMD Radeon HD7870',
          'Genre'=>'MMORPG',
          'ReleasedOn'=>'2018-05-30',
                             ]);         
          Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'MapleStory 2' ,
          'size'=>15,
          'description'=> 'Sequel to Nexons successful MMORPG, Maplestory! ',
          'image' => ['games/images/22bxQCrEXHaemlKFYoTxE6apmvonzc-metaNjAwNjkzMjkyNDExMDMxODQyMy5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/maplestory-2',
          'category_id'=>3,
     
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/maplestory-2',
          'long_description'=>'Players enjoyed Nexon’s first MapleStory, and at long last MapleStory 2 has arrived to further the enjoyment of fans everywhere. MapleStory 2 is a 3D fantasy MMORPG with a wholly unique and charming art style that sets it apart from others.\r\n\r\nMuch of MapleStory 2 should look familiar to players of the first game, though Nexon has added more to it in order to increase each player’s experience. The regions and creatures may be the same, but players can now do so much more.\r\n\r\nMapleStory 2 allows players to not only craft their own custom avatars, but also their own in-game houses and even full-scale player built dungeons. Mini games are numerous in MapleStory 2 and promise hours of entertainment to players.\r\n\r\nDespite the cartoonish look of the graphics, MapleStory 2 looks to be a fun and engaging MMORPG that will amuse even the most jaded gamers in the market.',
          'Memory'=>'2',
          'Storage'=>6,
          'Developed_by'=>'Wizet',
          'Platform'=>'Windows',
          'status'=>'NotLive',
          'publisher'=>'Nexon',
          'Graphics'=>'',
          'Genre'=>'MMORPG',
          'ReleasedOn'=>'2018-10-10',
             ]);  
             
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Spacelords' ,
          'size'=>29,
          'description'=> 'A free-to-play 4v1 sci-fi shooter',
          'image' => ['games/images/FZ6oKRg3lFhD92gpdvOSuUnlqFewoy-metaNTg4NzU3NDg0NjY1MTYwODM0OC5qcGc=-.jpg'],           
          'url_video'=>'"https://www.freetogame.com/open/spacelords',
          'category_id'=>5,
        
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/spacelords',
          'long_description'=>'MercurySteam’s sci-fi shooter Spacelords is the free-to-play re-take on Raiders of the Broken Planet. The game features 4v1 combat where players can experience both sides of the game’s story, either as the Raiders trying to free the Broken Planet or the Antagonist.\r\n\r\nPlayers head to the broken planet in search of a substance known as Aleph. This substance can be used to improve combat, heal, and is crucial to most missions. However, it’s also volatile and must be absorbed quickly, before it’s gone.\r\n\r\nSpacelords’ gameplay is centered around the concept of gathering Aleph, and includes brawling, which allows players to get in close and take it off of their enemies. Players will also want to make good use of cover to keep others from getting close enough to take their Aleph.\r\n\r\nThe game also contains a stress system based around Aleph. If players don’t watch their stress and keep it under control, they’ll become visible to their opponents, cover or not.\r\n\r\nLive the game’s story through a broad cinematic experience featuring over 80 scenes. Play as any one of 17 different characters that can be customized using more than 500 cards, and arm yourself with any of 70 unlockable, and moddable weapons.',
          'Memory'=>'4',
          'Storage'=>10,
          'Developed_by'=>'MercurySteam',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'MercurySteam Entertainment',
          'Graphics'=>'GTX560/AMD R7 260 (2GB graphics)',
          'Genre'=>'Shooter',
          'ReleasedOn'=>'2018-09-22',
                                 ]);                
        
          Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Ring of Elysium' ,
          'size'=>13,
          'description'=> 'A free-to-play battle royale developed and publish...',
          'image' =>['games/images/3Dti56U2gHPNx8F1yn5jPGDiXnHY5i-metaNTgzMTI4NDA3MzI2MjMyODc2NS5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/ring-of-elysium',
          'category_id'=>9,
       
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/ring-of-elysium',
          'long_description'=>'What happens when you add dynamic weather events, extreme sports, and more goals than simply surviving to a battle royale? You get Tencent Games’ Ring of Elysium. Like most battle royale games, Ring of Elysium drops 100 players on a map, with the primary goal being for them to make it out alive. Unlike other BR games, there’s an additional objective. Upon landing on the map, players will need to survive while making their way to a helicopter and escape the mountain. Four players can fit on the helicopter, so that means there can be more than one winner.\r\n\r\nA primary feature of the game is the dynamic weather, which can result in players having to fight hypothermia as well as disasters like avalanches that can reshape the landscape. Players can travel by land, sea, or air, even by snowboarding, or hang gliding. Another feature is that the game actually allows players to choose between first and third person perspective.',
          'Memory'=>'4',
          'Storage'=>10,
          'Developed_by'=>'Tencent Games',
          'Platform'=>'Windows',
          'status'=>'NotLive',
          'publisher'=>'Tencent Games',
          'Graphics'=>'NVIDIA GeForce GT 730 or equivalent',
         'Genre'=>'Shooter',
         'ReleasedOn'=>'2018-09-19',
                              ]);         
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Quake Champions' ,
          'size'=>23,
          'description'=> 'Quake Champions is a callback to the early days of the Quake IP, featuring the fast-paced action that made the IP popular over two decades ago.',
          'image' => ['games/images/F3EvF5xOHJ3Yu0IzwHwqNCxgA0x0Ft-metaNTk0MzY2ODA1MTU0NTI3MTQ2Mi5qcGc=-.jpg'],           
          'url_video'=>'"https://www.freetogame.com/open/quake-champions',
          'category_id'=>11,   
        
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/quake-champions',
          'long_description'=>'Quake Champions is a callback to the early days of the Quake IP, featuring the fast-paced action that made the IP popular over two decades ago. The game combines the lore of the original Quake with multiplayer elements found in Quake III Arena.\r\n\r\nPlayers play as warriors, each bearing different attributes and abilities. There are more than ten champions to choose from, giving players a wide variety of play styles to choose from. In addition, players can modify their gameplay by swapping out weapons. Fan favorites such as the Rocket Launcher and Railgun return. New weapons have been created as well.\r\n\r\nQuake Champions also includes several popular game modes: Deathmatch, 1v1 Duel, and Team Deathmatch, as well as a new team-based mode: Sacrifice.\r\n\r\n',
          'Memory'=>'8',
          'Storage'=>20,
          'Developed_by'=>'id Software',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Bethesda Softworks',
          'Graphics'=>'AMD R7 240 GB / Nvidia GT 730 2GB / Intel HD 530',
          'Genre'=>'Shooter',
          'ReleasedOn'=>'2017-08-22',
                             ]);         
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Cosmos Invictus' ,
          'size'=>17,
          'description'=> 'A strategic collectible card game developed and published by Pegnio Ltd',
          'image' => ['games/images/B2jcdaSP3R4c9j6nfd76mrkmwrSza8-metaNTc4NDE4NTE2MTI0NjY4MjcyNy5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/cosmos-invictus',
          'category_id'=>9,
     
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/cosmos-invictus',
          'long_description'=>'Cosmos Invictus is a strategic collectible card game developed and published by Pegnio Ltd. Described by the developer as being filled with tactical elements not normally found in card games, Cosmos Invictus features customizable spaceships,pilots, and events that can have a great influence on the battle. The developer emphasizes that this game is “true, pure, hard sci-fi” with no magic involved.\r\n\r\nPlayers take on the role of Captain for one of two factions, Gaia Unity or High Frontier Alliance. Some cards will be determined by this choice. Decks are abuilt out of a selection of mechs (the main unit in space combat), mech pilots, and customizable spaceships capable of direct attack or counter attack. Pilots combined with mechs create extra abilities.\r\n\r\nPlayers can craft their own cards and can even melt duplicates down for use in the crafting process.',
          'Memory'=>'2',
          'Storage'=>1,
          'Developed_by'=>'Pegnio Ltd',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Pegnio Ltd',
          'Graphics'=>'NVIDIA GeForce 6800 (256 MB) or ATI Radeon X1600 (256 MB) or better',
          'Genre'=>'https://www.freetogame.com/cosmos-invictus',
          'ReleasedOn'=>'2018-06-27',
                      ]);                       
          Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Champions Of Titan' ,
          'size'=>4,
          'description'=> 'A free-to-play sci-fi MMORPG from IDC/Games.',
          'image' => ['games/images/Nr16enpg6WBgoQ8WuNc18f2TsRZwM1-metaNjAyNzA3MTkwOTc5NzE0NjE5Ni5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/champions-of-titan',
          'category_id'=>3,
         
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/champions-of-titan',
          'long_description'=>'Champions of Titan (originally Wild Buster on Steam) is a free-to-play sci-fi MMORPG from IDC/Games. Taking place in a timeline where the Earth has been destroyed, Champions of Titan sees the human race flee to their new home on on the planet Titan only to encounter a cyborg race by the name of the Broken.\r\n\r\nPlayers can choose from two factions — Guardians and Abandon. Though previously foes, these two factions must team up to fight against the Broken in PvP. That said, they’re reluctant allies at best and will compete against each other in PvP battlegrounds of various types: MOBA, defense of the ancients, battle royale, and free-for-all.\r\n\r\nThe game offers raids, a guild system, auction houses, pets, over 500 quests, and 20 dungeons. There are also 4 open PvP zones',
          'Memory'=>'4',
          'Storage'=>4,
          'Developed_by'=>'Insel Games',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'IDC/Games',
          'Graphics'=>'GeForce 560 GT',
          'Genre'=>'MMORPG',
          'ReleasedOn'=>'2017-12-14',
                       ]);     
          Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Caller’s Bane' ,
          'size'=>10,
          'description'=> 'The free-to-play reboot of Mojangs card/board game Scrolls.',
          'image' =>['games/images/limUvzmLajV2Vef7nVQYiqzy6kgC6z-metaNTgwODgyMTIzOTY4NTQyOTE0Ni5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/callers-bane',
          'category_id'=>8,
         
          'type'=>'freement',
          'url_download'=>'"https://www.freetogame.com/callers-bane',
          'long_description'=>'Caller’s Bane is the free-to-play reboot of Mojang’s card/board game Scrolls. Place units on a battlefield and use spells to defeat your opponent. You’ll need to be as strategic as possible — sacrificing scrolls when needed and using resources to build your power.\r\n\r\nThe game features five game modes: Tutorial, Trials, Quick Matches, Challenge Matches, and Ranked Matches. It also offers a deck builder, crafting, and a store in which players can buy items using in-game gold. As an extra perk it even gives players the option to download and host their own server.\r\n',
          'Memory'=>'2',
          'Storage'=>10,
          'Developed_by'=>'Mojang AB',
          'Platform'=>'Windows',
          'status'=>'NotLive',
          'publisher'=>'Mojang AB',
          'Graphics'=>'',
          'Genre'=>'Card Game',
          'ReleasedOn'=>'2018-06-21',
                     ]);   
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Defiance 2050' ,
          'size'=>17,
          'description'=> 'A re-imagining of Trion Worlds sci-fi shooter Defiance. \r\n',
          'image' => ['games/images/hswKrdvUlWaP5lCKYEOEuWik3jLSaE-metaNTc5NzYzMzgzNzcyMTgyNDU4MC5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/defiance-2050',
          'category_id'=>2,
      
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/defiance-2050',
          'long_description'=>'Defiance 2050 is a re-imagining of Trion Worlds’ sci-fi shooter Defiance. Designed to take advantage of currently available hardware, 2050 recreates the original game from the ground up. The game offers playres a dynamic, post-apocalyptic open-world landscape to explore and experience battles and story-driven missions in. Players can participate in massive co-op battles using hundreds of weapons and skills.\r\n\r\nCreated with the original Defiance community in mind, Defiance 2050 takes player feedback seriously. It updates not only the visuals, but also specific systems, such as the class system.',
          'Memory'=>'4',
          'Storage'=>17,
          'Developed_by'=>'Trion Worlds',
          'Platform'=>'Windows',
          'status'=>'NotLive',
          'publisher'=>'Trion Worlds',
          'Graphics'=>'Nvidia GeForce GTX 650, ATI/AMD Radeon 7770 or better',
          'Genre'=>'Shooter',
          'ReleasedOn'=>'2018-06-12',
                     ]);  
        Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Realm Royale Reforged' ,
          'size'=>5,
          'description'=> 'A free-to-play fantasy-themed battle royale game based on Hi-Rez Studios team shooter Paladins. ',
          'image' => ['games/images/E4qui4lpRpTRPhx0HhGHF5lugAOL6Y-metaNTg2Mjc2Mjg0NjM1MjQxOTY5Mi5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/realm-royale',
          'category_id'=>9,
         
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/realm-royale',
          'long_description'=>'Realm Royale Reforged is a free-to-play fantasy-themed battle royale game based on Hi-Rez Studio’s team shooter Paladins. Choose from one of five unique classes and join your squad in a battle to the last group standing.\r\n\r\nPlayers can choose to play as a Mage, a Warrior, an Assassin, a Hunter or an Engineer. Each offer players a different style of play ranging from being able to take to the air and drop fireballs to sword-fighting and gunplay. As with the game that inspired it, players travel across the maps on mounts.\r\n\r\nAs with other battle royale games, players will have to deal with the map shrinking due to fog as well as their opponents. The good news is that along the way they can forge new weapons to help them survive. But they’ll need to be careful because they can still be attacked while crafting',
          'Memory'=>'5',
          'Storage'=>6,
          'Developed_by'=>'Hi-Rez Studios',
          'Platform'=>'Windows',
          'status'=>'NotLive',
          'publisher'=>'Hi-Rez Studios',
          'Graphics'=>'NVIDIA GeForce GTX 555',
          'Genre'=>'Shooter',
          'ReleasedOn'=>'2018-06-05',
                       ]);                        
         Game::create([
         'uuid'=>Str::uuid(),
         'title' =>'Crusaders Of Ligh 	' ,
         'size'=>4,
         'description'=> 'A cross-platform MMORPG available on PC and mobile devices.',
         'image' => ['games/images/OfIQ1AL0V7aph5F4PJ0u3hP89jaQ3R-metaNTk5NTkyMzc3NjE3NDQwMjQzMC5qcGc=-.jpg'],           
         'url_video'=>'https://www.freetogame.com/open/crusaders-of-light',
         'category_id'=>3,
     
         'type'=>'freement',
         'url_download'=>'https://www.freetogame.com/crusaders-of-light',
         'long_description'=>'Crusaders of Light is a cross-platform MMORPG available on PC and mobile devices. Developed and published by Hong Kong Netease Interactive Entertainment Limited, the game features more than 300 hours of gameplay, 40 man raids, and even a Battle Royale Mode. PvP is a central part of the game and it even offers players options for battle on a smaller scale, including 1v1, 3v3, and 5v5 Arena modes.\r\n\r\nPlayers are able to customize their characters with a variety of weapons, armor, clothing and mounts — ranging from a flying carpet to a fire breathing dragon. On the social end of things, the game takes advantage of the fact that its available on mobile devices by allowign players to take in-game selfies, and share to social media.',
         'Memory'=>'4',
         'Storage'=>4,
         'Developed_by'=>'Hong Kong Netease Interactive Entertainment Limited',
         'Platform'=>'Windows',
         'status'=>'NotLive',
         'publisher'=>'Hong Kong Netease Interactive Entertainment Limited',
         'Graphics'=>'Nvidia GTX 260',
         'Genre'=>'MMORPG',
         'ReleasedOn'=>'2017-04-20',
                       ]);                
                       
        Game::create([
         'uuid'=>Str::uuid(),
         'title' =>'Darwin Project' ,
         'size'=>6,
         'description'=> 'A free-to-play 10-player battle royale game set just prior to an impeding ice age',
         'image' =>['games/images/CEeYRLXBDVD4a1G4hZiWzM1Cd7arKg-metaNjA0NzM1NzUzODU1MjM2MDUwNy5qcGc=-.jpg'],           
         'url_video'=>'https://www.freetogame.com/open/darwin-project',
         'category_id'=>9,
       
         'type'=>'freement',
         'url_download'=>'https://www.freetogame.com/darwin-project',
         'long_description'=>'Darwin Project is a free-to-play 10-player battle royale game set just prior to an impeding ice age. Players take on the roles of contestants in a dark reality show where they must not only survive the cold but each other.\r\n\r\nAs the game is both a manhunt and survival scenario. Players will need to take down their opponents. One player will actually take on the role of “Show Director”, the host of the show in control of everything from nukes to gravity storms. In addition, the game is open to spectator participation. Stream viewers can bet on competitors, and help the Show Director choose targets. So, everyone can be involved',
         'Memory'=>'4',
         'Storage'=>6,
         'Developed_by'=>'Scavengers Studio',
         'Platform'=>'Windows',
         'status'=>'Live',
         'publisher'=>'Scavengers Studio',
         'Graphics'=>'GTX 750, GTX 660',
         'Genre'=>'Shooter',
         'ReleasedOn'=>'2020-01-14',
                      ]);  
         Game::create([
         'uuid'=>Str::uuid(),
         'title' =>'Spellsworn' ,
         'size'=>3,
         'description'=> 'A free-to-play arena battle game developed and published by Frogsong Studios AB.',
         'image' => ['games/images/lOevXyt8A21i4USk6EaHT1VZMBpc75-metaNTgzMTA0NzM0MzI1NDkwODgxNy5qcGc=-.jpg'],           
         'url_video'=>'https://www.freetogame.com/open/spellsworn',
         'category_id'=>13,
    
         'type'=>'freement',
         'url_download'=>'"https://www.freetogame.com/spellsworn',
         'long_description'=>'Spellsworn is a free-to-play arena battle game developed and published by Frogsong Studios AB. Inspired by popular PvP games such as League of Legends, Super Smash Bros., and Warlocks — a Warcraft 3 Mod, Spellsworn offers players the opportunity to compete in a battle of magic.\r\n\r\nCompete with up to seven other players in five round matches. As you play, earn currency that will allow you to buy better, even more powerful spells. Use these to build out your character in one of five disciplines — offensive, defensive, area, utility, and travel.\r\n\r\nCombat takes place in one of three arenas, each featuring their own unique challenges.',
         'Memory'=>'4',
         'Storage'=>3,
         'Developed_by'=>'Frogsong Studios AB',
         'Platform'=>'Windows',
         'status'=>'Live',
         'publisher'=>'Frogsong Studios AB',
         'Graphics'=>'nVidia GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600',
         'Genre'=>'MOBA',
         'ReleasedOn'=>'2018-03-13',
                         ]);  
         Game::create([
         'uuid'=>Str::uuid(),
         'title' =>'Z1 Battle Royale' ,
         'size'=>20,
         'description'=> 'A highly competitive free-to-play battle royale shooter',
         'image' =>['games/images/oc9DUG7HuQIOFCe0fUefwPOqkw61yC-metaNjA0NzcyODA3ODI2NTg4ODIyNy5qcGc=-.jpg'],           
         'url_video'=>'https://www.freetogame.com/open/z1-battle-royale',
         'category_id'=>9,
     
         'type'=>'freement',
         'url_download'=>'https://www.freetogame.com/z1-battle-royale',
         'long_description'=>'Z1 Battle Royale (formerly H1Z1) is a highly competitive, free-to-play, single-elimination battle royale shooter. Each match starts with as many as 150 players parachuting into a 100 sq kilometer map. As with all battle royale’s players will need to collect the weapons and gear they’ll need to survive, once they’re on the map. They’ll also need to prepare for the map to shrink as a toxic gas creeps inward pushing all the players together.\r\n\r\nIn addition to the traditional battle royale, Z1 Battle Royale offers an Auto Royale mode, in which players in teams of four pile into cars and attempt to outdrive and outshoot the other teams in order to become the last team left. The teams will need to make a serious decision before starting though. Only one person can take the wheel, the other three have to man the guns',
         'Memory'=>'6',
         'Storage'=>20,
         'Developed_by'=>'Daybreak Game Company',
         'Platform'=>'Windows',
         'status'=>'NotLive',
         'publisher'=>'Daybreak Game Company',
         'Graphics'=>'nVidia GeForce GTX 280 series or higher',
         'Genre'=>'Shooter',
         'ReleasedOn'=>'2018-02-28',
                   ]);    
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Tale Of Toast' ,
          'size'=>4,
          'description'=> 'A free-to-play open world MMO inspired by classic, core MMOs.',
          'image' => ['games/images/8SqzXNsQmniZDKcTzaJV76Cr9m8po2-metaNTgzMTQ3MDUwNDkwNzc0NzE2OS5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/tale-of-toast',
          'category_id'=>3,
        
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/tale-of-toast',
          'long_description'=>'Tale of Toast is a free-to-play open world MMO inspired by classic, core MMOs. Developed and published by Toasty Leaf AP, the game boasts an easy to learn playstyle, open world PvP, and more. Its content focuses on quality over quantity, offering players substantial quest chains rather than fluff quests.\r\n\r\nThe game offers players world dungeons as well as instanced group dungeons. All dungeons scale to the level of the players within and are procedurally generated.\r\n\r\nPlayers will be able to set their own play style, creating classes they’re happy with and learning the trade skills they want — rather than being forces into a specific focus.\r\n\r\nTransaction-wise the game offers players cosmetic items, pets, guild features, character renames and realm transfers. The devs promise no pay-to-win items will be available.',
          'Memory'=>'4',
          'Storage'=>4,
          'Developed_by'=>'Toasty Leaf AB',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Toasty Leaf AB',
          'Graphics'=>'Intel HD Graphics 4000 or equivalent',
          'Genre'=>'MMORPG',
          'ReleasedOn'=>'2018-02-23',
                       ]);           
                       
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'SoulWorker' ,
          'size'=>4,
          'description'=> 'A free-to-play open world MMO inspired by classic, core MMOs.',
          'image' =>[ 'games/images/V5ir1crdP8QpKNeFrh9eCrgp8BKx3e-metaNTg1ODU4MzY3NTY2OTY4NzAyNi5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/tale-of-toast',
          'category_id'=>3,
       
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/tale-of-toast',
          'long_description'=>'Tale of Toast is a free-to-play open world MMO inspired by classic, core MMOs. Developed and published by Toasty Leaf AP, the game boasts an easy to learn playstyle, open world PvP, and more. Its content focuses on quality over quantity, offering players substantial quest chains rather than fluff quests.\r\n\r\nThe game offers players world dungeons as well as instanced group dungeons. All dungeons scale to the level of the players within and are procedurally generated.\r\n\r\nPlayers will be able to set their own play style, creating classes they’re happy with and learning the trade skills they want — rather than being forces into a specific focus.\r\n\r\nTransaction-wise the game offers players cosmetic items, pets, guild features, character renames and realm transfers. The devs promise no pay-to-win items will be available',
          'Memory'=>'4',
          'Storage'=>4,
          'Developed_by'=>'Toasty Leaf AB',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'Toasty Leaf AB',
          'Graphics'=>'Intel HD Graphics 4000 or equivalent',
          'Genre'=>'MMORPG',
          'ReleasedOn'=>'2018-02-23',
                     ]);     
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Bombtag' ,
          'size'=>600,
          'description'=> 'A free-to-play multiplayer Bomberman-inspired game',
          'image' =>['games/images/4YVpA1O7pXwPmTsMNT52Nwdgs36GqB-metaNjA0NzM0MjI2NTY0ODY1NTc4MS5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/bombtag',
          'category_id'=>14,

          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/bombtag',
          'long_description'=>'Bombtag is a free-to-play multiplayer Bomberman-inspired game. Game rounds support up to 8 players and last just a few minutes, allowing for quick matches when you only have a little time.\r\n\r\nSimilar to the game that inspired it, Bombtag is chaotic and fast-pasted. Players drop bombs, blow up crates — and their enemies, and collect powerups, all while trying to avoid being blown up themselves. Gameplay is a bit more in depth than just dropping bombs and waiting for them to blow. Players can slide into them to kick them away from themselves and into their enemies.\r\n\r\nThere are two game modes — free for all and teams and six maps to play them on. Players can customize their characters with over 800 pieces of cosmetic items. The game also offers the standard social features — friends list and chat, as well as a competitive rank system and leader board.',
          'Memory'=>'2',
          'Storage'=>6,
          'Developed_by'=>'David Schneider',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'David Schneider',
          'Graphics'=>'Intedl HD Graphics 4000 or equivalent',
          'Genre'=>'Strategy',
          'ReleasedOn'=>'2018-02-12',
                  ]);   
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Ironsight' ,
          'size'=>8,
          'description'=> 'A free-to-play futuristic shooter published by Aeria Games',
          'image' => ['games/images/VDRJiiO3srkboOUFeJlMyjjSPzVRK6-metaNTgzMTU0MDY1NDYwODU5MjYxMS5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/ironsight',
          'category_id'=>2,
    
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/ironsight',
          'long_description'=>'Ironsight is a free-to-play futuristic shooter published by Aeria Games. Set in the year 2025, the game places players in the roles of soldiers fighting over the last natural resources on Earth. All nuclear power plants on the Atlantic coast were wiped out following a Megatsunami in 2023, causing radioactive spills. The west has lost control over the Middle East and its resources, and as a result the US and Europe have teamed up to fight the Engergy Development Enterprise Network (EDEN) to regain control once again.\r\n\r\nIronsight offers players more than 100 original weapons to choose from, allowing for a high degree of character customization and specialization. The game features drones and mechs that can be used in strategic operations, as well as a variety of maps and game modes. The modes come in both PvP and PvE variety and include everything from Secure Point PvP to a selection of PvP and PvE Deathmatch options.',
          'Memory'=>'2',
          'Storage'=>8,
          'Developed_by'=>'WipleGames Inc',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'WipleGames Inc',
          'Graphics'=>'NVIDIA GeForce 6900 GT',
          'Genre'=>'Shooter',
          'ReleasedOn'=>'2018-02-01',
                     ]);     
         Game::create([
         'uuid'=>Str::uuid(),
         'title' =>'Dead Maze' ,
         'size'=>250,
         'description'=> 'A free-to-play 2D isometric MMO full of zombies.',
         'image' =>['games/images/F0bRitP0hBMf6xwFAPdTlbl3zxrxLK-metaNTk1MDgzNTE2MjI1NjM1NDYzMC5qcGc=-.jpg'],           
         'url_video'=>'https://www.freetogame.com/open/dead-maze',
         'category_id'=>3,
   
         'type'=>'freement',
         'url_download'=>'https://www.freetogame.com/dead-maze',
         'long_description'=>'Dead Maze is a free-to-play 2D isometric MMO full of zombies. In order to survive the undead apocalypse, players will need to work together, gather resources, and craft supplies needed to keep themselves alive.\r\n\r\nUnlike most zombie games, Dead maze requires players to restore civilization, starting with improving their own camps. Once a camp is established, players can build and furnish their own home, planting seeds, breeding animals, and more.\r\n\r\nOf course, they will need to fight the undead. Luckily, there are over 500 weapons to do that with. They’ll also need to be aware of their health and do their best to manage it.',
         'Memory'=>'1',
         'Storage'=>250,
         'Developed_by'=>'801',
         'Platform'=>'Windows',
         'status'=>'Live',
         'publisher'=>'801',
         'Graphics'=>'',
         'Genre'=>'MMORPG',
         'ReleasedOn'=>'2018-02-13',
                   ]); 
                   
                   ///43
                   //
         Game::create([
          'uuid'=>Str::uuid(),
          'title' =>'Global Adventures' ,
          'size'=>10,
          'description'=> 'A free-to-play MMORPG developed by PixelSoft and Published by SubaGames.',
          'image' =>['games/images/6CnoeT8sqct9Bht8djABZGLyHZhpoD-metaNTgzMTI2MjUxMjUyNjUwMzUzOC5qcGc=-.jpg'],           
          'url_video'=>'https://www.freetogame.com/open/global-adventures',
          'category_id'=>3,
         
          'type'=>'freement',
          'url_download'=>'https://www.freetogame.com/global-adventures',
          'long_description'=>'Global Adventures is a free-to-play MMORPG developed by PixelSoft and Published by SubaGames. A game with a contemporary — somewhat real-world — setting, Global Adventures casts players in teh role of a newly recruited agent for the Treasure Hunters Association. The agent’s first task will be to explore Mayan Ruins… a task that doesn’t go quite as planned as there are other groups who will get in your way. These groups include the Black Flag Gang, the Shinobi Cabal a ninja group who’d really like their own undead army, and a secret order known as the Priory. Along the way, you’ll fight Vampires, zombies, and more while traveling all around the world.\r\n\r\nThe game offers players 5 different classes to choose from as well as both solo and co-op content. Players can explore 5 of the world’s contienents and even build their own castles. The game features a TF2-ish art style and plenty of weapons and gear to customize playable characters with.',
          'Memory'=>'3',
          'Storage'=>10,
          'Developed_by'=>'PixelSoft',
          'Platform'=>'Windows',
          'status'=>'Live',
          'publisher'=>'SubaGames',
          'Graphics'=>'Nvidia GT 630 / ATI HD6570 / InterHD5200',
          'Genre'=>'MMORPG',
          'ReleasedOn'=>'2017-12-19',
                    ]); 
                    
                    
                    
    //
    //
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Closers' ,
        'size'=>5,
        'description'=> 'A free-to-play episodic anime beat-em-up developed \r\nby Naddic Games and published by \r\nEn Masse Entertainment.',
        'image' => ['games/images/BuYU7P5nCndjEt1ob80Z7gXKjewknj-metaNTk0NDEyNzU4NzI3NjEzOTc1MS5qcGc=-.jpg'],           
        'url_video'=>'https://www.freetogame.com/open/closers',
        'category_id'=>3,
      
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/closers',
        'long_description'=>'Closers is a free-to-play episodic anime beat-’em-up developed by Naddic Games and published by En Masse Entertainment. It features five playable characters (4 classes), and a very anime storyline in which aliens are spilling through portals into New Seoul.\r\n\r\nPlayers can take on the role a combat genius, a leader, a martial artist, a young boy with support skills, or a grizzled veteran with a troubled past. These characters can be developed by upgrading skills and weapons as well as unlocking new powers.\r\n\r\nThe game revolves around the usage of skills, featuring basic fighter game movement such as dash, jump, and dash-jump combos. Players will travel around new Seoul fighting the invading aliens and completing missions assigned by NPC. All PvE gameplay is instance based.\r\n\r\nClosers also offers a PvP mode similar to MOBA gameplay. It allows players to play as either a Dimensional (alien) or a Closer in an attempt to destroy the other team’s tower while defending their own.',
        'Memory'=>'2',
        'Storage'=>5,
        'Developed_by'=>'Naddic Games',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'En Masse Entertainment',
        'Graphics'=>'Nvidia GeForce 7600 GT',
        'Genre'=>'MMORPG',
        'ReleasedOn'=>'2017-12-19',
                  ]); 
                  //
                  //
                  Game::create([
                    'uuid'=>Str::uuid(),
                    'title' =>'Deceit' ,
                    'size'=>10,
                    'description'=> 'A free-to-play multiplayer first-person shooter set \r\nin an asylum!',
                    'image' => ['games/images/PCnMcNFoFnRGyx1V5BDBQX1ySUtcNM-metaNTk0NDEzNzg2MDgzNzkxMTY5NC5qcGc=-.jpg'],           
                    'url_video'=>'https://www.freetogame.com/open/deceit',
                    'category_id'=>2,
                 
                    'type'=>'freement',
                    'url_download'=>'https://www.freetogame.com/deceit',
                    'long_description'=>'Deceit is a free-to-play multiplayer first-person shooter set in an asylum. Players are part of a group, a third of which has been infected with a virus. The ultimate goal is to get the hell out, but in order to do that players will need to find allies and complete objectives while managing avoid the infected who transform into a nightmare form.\r\n\r\nAs players progress and make decisions that will allow them to achieve their objectives, they will gain information that informs them as to what team they’re on. At the same time, players will need to contend with blackout periods that allow the infected to transform, becoming faster, stronger, and equipped with night vision.\r\n\r\nThe game features fast paced gameplay, and insane combat in which players will need to behave strategically in order to survive.',
                    'Memory'=>'4',
                    'Storage'=>10,
                    'Developed_by'=>'Automaton',
                    'Platform'=>'Windows',
                    'status'=>'Live',
                    'publisher'=>'Automaton',
                    'Graphics'=>'NVIDIA GeForce GTX 650 Ti / AMD Radeon HD 7850',
                    'Genre'=>'Shooter',
                    'ReleasedOn'=>'2017-05-03',
                              ]); 
 //
 //
 Game::create([
    'uuid'=>Str::uuid(),
    'title' =>'Grimoire: Manastorm' ,
    'size'=>2,
    'description'=> 'A free-to-play multiplayer FPS... with wizards',
    'image' =>['games/images/zcSd1vNfsdZTWBkCCakQgTOeyOF0t0-metaNTgzMTMyMDc5MDkzNzc0MzEzNi5qcGc=-.jpg'],           
    'url_video'=>'https://www.freetogame.com/open/grimoire-manastorm',
    'category_id'=>2,

    'type'=>'freement',
    'url_download'=>'https://www.freetogame.com/grimoire-manastorm',
    'long_description'=>'Grimoire: Manastorm is a free-to-play multiplayer FPS… with wizards. Rather than arming players with guns and ammo, they’re given unique spells.\r\n\r\nThe game offers players six classes to chose from and boasts thousands of potential spell loadouts. Players will need to have a sound understanding of their character’s abilities in order to compete. Even more, they’ll need to know how to counter their opponents abilities.\r\n\r\nThe classes offered are Fire, Lightning, Earth, Ice, Nature, and Neather. Each has their own book of spells and can be adjusted to suit each individual player’s style. There are two multiplayer modes that can be played across 12 settings.\r\n\r\nThe game is free-to-play, and offers two rotating classes that can be used at any time. Classes and spells can be unlocked by purchasing them or spending points earned in game.',
    'Memory'=>'2',
    'Storage'=>2,
    'Developed_by'=>'Omniconnection',
    'Platform'=>'Windows',
    'status'=>'Live',
    'publisher'=>'Omniconnection',
    'Graphics'=>'SM3-Compatible',
    'Genre'=>'Shooter',
    'ReleasedOn'=>'2015-02-04',
              ]); 
     //
     //
     Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Fortnite' ,
        'size'=>18,
        'description'=> 'A free-to-play, standalone mode of Epic Games Fortnite. ',
        'image' => [ 'games/images/zQd3sX2bcky1btkmG9mly0u5E5pdiT-metaNTgzMTM3ODIyNzUzNTM5MjQyNS5qcGc=-.jpg'],           
        'url_video'=>'https://www.freetogame.com/open/fortnite-battle-royale',
        'category_id'=>2,
      
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/fortnite-battle-royale',
        'long_description'=>'Fortnite Battle Royale is a free-to-play, standalone mode of Epic Game’s Fortnite. The game offers players one giant map that will accommodate 100-player is an all-out PvP battle. Like the game it is spun off from, it also features the ability to build structures and a destructable environment. There’s also a battle bus.\r\n\r\nAlso like the main Fortnite game, Battle Royale is available on several platforms, including PC, PlayStation 4 and Xbox One.\r\n\r\nPlayers of other battle royale style games will be able to jump into Fortnite Battle Royale easily. Similar to other games, players are dropped onto an island where they’re tasked with gathering weapons and supplies while eliminating the competition. To make things a bit more difficult, the map size will shrink over time — thanks to a storm — pushing players closer to each other and eliminating their ability to hide. Last man standing wins the battle',
        'Memory'=>'4',
        'Storage'=>4,
        'Developed_by'=>'Epic Games',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Epic Games',
        'Graphics'=>'Core i3 2.4',
        'Genre'=>'Shooter',
        'ReleasedOn'=>'2017-09-26',
                  ]); 
 //
 //
 Game::create([
    'uuid'=>Str::uuid(),
    'title' =>'The Ultimatest Battle' ,
    'size'=>300,
    'description'=> 'A free-to-play 2D platform game that pits two teams of players against each other in a variety of modes.',
    'image' => ['games/images/pdjoAT2VmKQ79zq0CDb2d2qWXeCciW-metaNTk3MzMzMzA4MTQyMTA5ODQyMC5qcGc=-.jpg'],           
    'url_video'=>'https://www.freetogame.com/open/the-ultimatest-battle',
    'category_id'=>15,
   
    'type'=>'freement',
    'url_download'=>'https://www.freetogame.com/the-ultimatest-battle',
    'long_description'=>'The Ultimatest Battle is a free-to-play 2D plaform game that pits two teams of players against each other in a variety of modes. The game features real-time combat and an (almost) completely destructible environment.\r\n\r\nPlayers of Ultimatest Battle play as characters called “Nubs”. Nubs come in a variety of classes, each with their own attributes. They’re customizable — both visually and gameplay wise using items earned in game. Nubs are heavily armed and can use a variety of weapons based on their class. There are six classes to chose from including Soldier, Viking, and even Miner.\r\n\r\nGame modes include a variety of scenarios, including zero-gravity Moon battles, ControlPoint, SaveThePrincess, and Versus Boss.',
    'Memory'=>'1',
    'Storage'=>300,
    'Developed_by'=>'Ediogames',
    'Platform'=>'Windows',
    'status'=>'Live',
    'publisher'=>'Ediogames',
    'Graphics'=>'Intel HD 4000',
    'Genre'=>'Fighting',
    'ReleasedOn'=>'2017-09-12',
              ]); 
              //
        //
        Game::create([
            'uuid'=>Str::uuid(),
            'title' =>'Insidia' ,
            'size'=>2,
            'description'=> 'A free-to-play tactical, turn-based dueling game developed and published by Bad Seed',
            'image' => ['games/images/5kseo3HjXJfZk4QLyDpnuhtIZ745S5-metaNTgyODk5MDgxNDEyOTMzNjA1Mi5qcGc=-.jpg'],           
            'url_video'=>'https://www.freetogame.com/open/insidia',
            'category_id'=>14,
           
            'type'=>'freement',
            'url_download'=>'https://www.freetogame.com/insidia',
            'long_description'=>'Insidia is a free-to-play tactical, turn-based dueling game developed and published by Bad Seed. Players build a team of four champions and compete against one another in (sort-of) turn-based combat. Unlike other turn-based games, Insidia features simultaneous turns, meaning both players take their turns at the same time and watch them play out. Because of this, players can knock out a match in less than 15 minutes.\r\n\r\nThe team-building feature allows players to blend their champions’ abilities in order to create combos. And while there are four champion types on a team, there is a larger variety to choose from, making each team unique.\r\n\r\nAs for the maps themselves, the game does not offer simple deathmatches, but requires players to capture and control critical areas of the map while they destroy the opponent base',
            'Memory'=>'4',
            'Storage'=>2,
            'Developed_by'=>'Bad Seed',
            'Platform'=>'Windows',
            'status'=>'Live',
            'publisher'=>'Bad Seed',
            'Graphics'=>'DirectX 10',
            'Genre'=>'Strategy',
            'ReleasedOn'=>'2017-09-07',
                      ]); 
                      //
     //
     Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Brink' ,
        'size'=>8,
        'description'=> 'A free-to-play first-person-shoot developed by Splash \r\nDamage and published by Bethesda Softworks.',
        'image' => [ 'games/images/a6kbWMG4x2NSLqzZ6zMKoayBLpCXH4-metaNTk0Mzk0NTkzNTkyOTMyMjY0Mi5qcGc=-.jpg'],           
        'url_video'=>'https://www.freetogame.com/open/brink',
        'category_id'=>2,
     
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/brink',
        'long_description'=>'Brink is a free-to-play first-person-shoot developed by Splash Damage and published by Bethesda Softworks. The game blends, single-player, co-op, and multiplayer modes into a single experience. In Brink, players occupy the Ark, a floating city built by men. The city is on the brink of war, despite being built as a self-sufficient, 100% green habitat.\r\n\r\nBrink allows players to customize their characters to create a unique appearance as well as build. Players can fight their way through the single-player campaign or choose to go online and participate in co-op activities or engage in full-blown multiplayer action. Long time FPS players should feel right at home with Brink, as it features a control scheme common to the genre.\r\n\r\nBrink is available to play via Steam',
        'Memory'=>'2',
        'Storage'=>8,
        'Developed_by'=>'Splash Damage',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Bethesda Softworks',
        'Graphics'=>'NVIDIA 8800GS / ATI Radeon HD 2900 Pro or equivalent',
        'Genre'=>'Shooter',
        'ReleasedOn'=>'2011-05-09',
                  ]); 
                  //                       


                    
                     ////////////////////////////
    
    //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Black Squad' ,
        'size'=>7,
        'description'=>'Black Squad',
        'image'=>['games/images/1J6llwnrG15G0RtfGJVWEfEZT80Lbb-metaNTc4NjA2OTc4ODYwMTE5OTY3Ny5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/black-squad',
        'category_id'=>16,
        'price'=>29.90,
        'type'=>'payment',
        'url_download'=>'https://www.freetogame.com/black-squad',
        'long_description'=>'Black Squad is a free-to-play military FPS developed by NS STUDIO and published by NEOWIZ. It is built using Unreal Engine 3 and boasts realistic graphics.\r\n\r\nThe game offers players 10 different modes to choose from. These range from classic to massive multi-play modes. Team vs team modes include 5v5, 8v8, 10v10 and 16v16. The 16v16 mode allows players to call for airstrike and artillery support.\r\n\r\nPlayers will also be able to choose from a variety of modern firearms and over 20 maps.',
        'Memory'=>'4',
        'Storage'=>'7',
        'Developed_by'=>'NS Studio',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'NEOWIZ',
        'Graphics'=>'NVIDIA GEFORCE 8600 OR GT630 / RADEON HD 6750',
        'Genre'=>'Shooter',
        'ReleasedOn'=>'2017-07-28'

          ]);
          //
                     //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Kritika: Zero' ,
        'size'=>6,
        'description'=>'A free-to-play hack-and-slash MMORPG with both a single-player adventure combat from Valofe. ',
        'image'=>['games/images/hdkocIXor0f62vLYfv2cy0N5wspqlm-metaNTg0NDc1MjUwNjU4NzAzMjQ2Ny5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/kritika',
        'category_id'=>3,
    
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/kritika',
        'long_description'=>'Kritika: Zero (Kritika Online) is a free-to-play hack-and-slash MMORPG with both a single-player adventure combat from Valofe.\n\nPlayers can choose from four different classes: Gunmage, Warrior, Reaper, and Rogue. Each of these has two to three variations designed to make each player’s character even more unique.\n\nThe game also boasts special areas known as Danger Zones which allow for quick play sessions without the need of excessive in game travel. Each has a massive boss for players to defeat.',
        'Memory'=>'2',
        'Storage'=>6,
        'Developed_by'=>'Valofe',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Valofe',
        'Graphics'=>'GeForce 7600 or Radeon 3850',
        'Genre'=>'MMORPG',
        'ReleasedOn'=>'2024-01-25'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Argo' ,
        'size'=>20,
        'description'=>'A tactical first-person shooter from the Arma 3 de...',
        'image'=>['games/images/goptGdyy3nOrGjgds92t99PRffFfRJ-metaNTg4NTQyNjk4NTA0NjQ4NjMxMS5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/argo',
        'category_id'=>4,
  
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/argo',
        'long_description'=>'Argo is a free-to-play “hardcore tactical first-person shooter” from Arma 3 developer and publisher Bohemia Interactive. Billed as a total conversion of Arma 3, the game allows players to take on the role of mercenaries contracted by one of two rival factions in an updated version of the Arma Malden island map\r\n\r\nPlayers can choose one of three game modes to compete in — all of which utilize 5-man teams. The first is “Clash”, which has two teams fighting over territory. “Link” requires players to capture a chain of points before the other side can, and ‘Raid’ sends one team in search of a data terminal while the opposite team defends the terminal’s three potential locations.\r\n\r\nPlayers can also participate in a 10-man combat patrol co-op wherein they fight against the AI.\r\n\r\nA bonus feature of the game is that it allows players to make use of a 3D scenario editor to create their own playable missions. The editor features an intuitive interface that allows players to place AI, set triggers, and assign waypoints easily.',
        'Memory'=>'4',
        'Storage'=>20,
        'Developed_by'=>'Bohemia Interactive',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Bohemia Interactive',
        'Graphics'=>'NVIDIA GeFeorce 9800GT / AMD Radeon HD 5670',
        'Genre'=>'Shooter',
        'ReleasedOn'=>'2017-06-22'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Secret World Legends' ,
        'size'=>5,
        'description'=>'A free-to-play reboot of The Secret World.',
        'image'=>['games/images/RHeD50Ppo3XgxJBWhLVSCb8lscCgHf-metaNjAyNzI4NTczMDQ0OTAxMDA0My5qcGc=-.jpg '],
        'url_video'=>'https://www.freetogame.com/open/secret-world-legends',
        'category_id'=>17,
       
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/secret-world-legends',
        'long_description'=>'Secret World Legends is a free-to-play reboot of The Secret World. Developed by Funcom, Secret World Legends takes the story aspect of TSW and completely reworked combat, leveling, skills and more. While the focus of the game is still the narrative, thew new action combat and other features are designed to appeal to a broader audience than the original game.\r\n\r\nThe game takes players into a dark and mysterious world filled with conspiricies, magic, and creatures of legend. In the beginning it’s a little Stephen King meets H.P. Lovecraft. There are zombies, Cthuhlu-esque sea creatures, cults, mummies, zombies, and more.\r\n\r\nThe player takes on the role of super powered foot soldier working for one of three groups; the Illuminati, the Templar, or the Dragons. They’ll travel to real-world locations like New York, London, Seoul, and somewhat real places in coastal Maine, Egypt, Transylvania, and more.',
        'Memory'=>'2',
        'Storage'=>2,
        'Developed_by'=>'Funcom',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Funcom',
        'Graphics'=>'nVidia 8800 series 512 VRAM / Radeon HD3850 512MB',
        'Genre'=>'MMORPG',
        'ReleasedOn'=>'2017-07-31'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Pixel Worlds' ,
        'size'=>30,
        'description'=>'A free-to-play, side-scroller MMO sandbox game developed and published by Kukouri Mobile Entertainment.',
        'image'=>['games/images/SKUwM9TpeXPvMIntHeIxLiRLyRW1VE-metaNTgzMTUxMTI0MjY3MjU0OTY5Ni5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/pixel-worlds',
        'category_id'=>6,
     
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/pixel-worlds',
        'long_description'=>'Pixel Worlds is a free-to-play, side-scroller MMO sandbox game developed and published by Kukouri Mobile Entertainment. The game is cross-platform and available not only on PC, but also OSX, iOS and Android.\r\n\r\nIn Pixel Worlds, player can build and create any number of worlds, mine, craft, farm, and participate in a player run economy. They can build their own worlds or play in those created by their friends.. There are also a variety of Live Events that take place every few weeks',
        'Memory'=>'2',
        'Storage'=>300,
        'Developed_by'=>'Kukouri Mobile Entertainment',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Kukouri Mobile Entertainment',
        'Graphics'=>'256 MB HD 2600 or better \\ 256 MB Nvidia 7900 or better',
        'Genre'=>'MMORPG',
        'ReleasedOn'=>'2017-06-09'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Gwent: The Witcher Card Game' ,
        'size'=>4.5,
        'description'=>'A free-to-play card game based on CD Projekt Reds popular Witcher franchise.',
        'image'=>['games/images/wGFHDvUSGWk9vv9pvuPGJWtj8FAM6o-metaNTc2ODM0Nzk0MTc4OTA4NTMwOS5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/gwent',
        'category_id'=>8,
       
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/gwent',
        'long_description'=>'Gwent is a free-to-play card game for PC and XBox One, based on CD Projekt Red’s popular Witcher franchise. The game features both a multi-player and single-player mode with adventures, skirmishes and a player vs. AI mode. All of this is developed by the same team behind The Witcher III: Wild Hunt.\r\n\r\nIn fact, the core game is based on the card game featured in Wild Hunt, but with several new additions. The stand alone card game features new card art, voice overs and skills. There is even a competitive PvP mode built completely from scratch for Gwent.\r\n\r\nAs with any card game, players will be able to choose a deck type (or faction), build it out, and go into battle against other players. Gwent features a gameboard with a battlefield built of three rows, melee, ranged, and siege. Each row can be populated with cards of varying stats. A game is won when a player takes two out of three rounds',
        'Memory'=>'2',
        'Storage'=>4.5,
        'Developed_by'=>'CD Projekt Red',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'CD Projekt Red',
        'Graphics'=>'NVIDIA GeForce GT 710 or GeForce GT 7900 | AMD Radeon R5 330 or Radeon HD 4650',
        'Genre'=>'Card Game',
        'ReleasedOn'=>'2017-05-24'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Awesomenauts' ,
        'size'=>3.5,
        'description'=>'A 3v3 2D battle arena Developed by Ronimo games',
        'image'=>['games/images/xP3lSn9b0qOIaQmtO2zK0ubbzchXKB-metaNjA0NzY0ODgxODkzOTQwNzc0Ni5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/awesomenauts',
        'category_id'=>18,
       
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/awesomenauts',
        'long_description'=>'Awesomenauts is a 3v3 2D battle arena Developed by Ronimo games. Originally launched as a pay-to-play game, the PC version of AwesomeNauts eventually converted to free-to-play. Players take on the role of intergalactic mercenaries (known as Awesomenauts).\r\n\r\nThe game boasts more than 20 Awesomnauts, each with unique skill sets. It incorporates elements from both 2D and Fighting games. There are multiple modes of play. However, its primary mode is the 3v3 match, in which each team attempts to destroy the other’s Solar Collector. Players fight their way through other players, drones, and turrets in order to do this.\r\n\r\nAwesomenauts’ deafult mode is ranked play, featuring 9 different ranks which players can be matched in. Those who finish a season in top ranking will earn rewards. During ranked play, no two players on a team can use the same character. The game’s other available modes allow for more varied play but do count toward ranking and the eventual reward. These modes include skirmishes and round-robin.\r\n\r\nThere is also a meta-game linked to player profiles. Each player will earn experience for playing matches and can purchase character improvements based on those levels. When a player reaches max level they can opt to use the prestige system and return to the lowest level in exchange for a badge.',
        'Memory'=>'2',
        'Storage'=>3.5,
        'Developed_by'=>'Ronimo Games',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Ronimo Games',
        'Graphics'=>'AMD or NVIDIA with at least 512 MB',
        'Genre'=>'MOBA',
        'ReleasedOn'=>'2017-05-24'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Dreadnought' ,
        'size'=>'11',
        'description'=>'A free-to-play combat flight simulator developed by Yager Development and published by Grey Box.',
        'image'=>['games/images/PYKu3kGv0JOBP8Tkf9iZ5bINDsbXdC-metaNTgzMTM4MDQyMjI2MzY4MDg2OS5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/dreadnought',
        'category_id'=>2,
      
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/dreadnought',
        'long_description'=>'Dreadnought is a free-to-play combat flight simulator developed by Yager Development and published by Grey Box. In Dreadnought, players pilot a massive battleship, ranging from the titular Dreadnought to the Tactical Cruiser. All ships are heavily armed with projectile weapons, and each has it’s own variety of advantages and issues. And, all ships are highly customizable — down to the smallest detail. This includes weapons and modules as well as the paint job (hull coatings and decals).\r\n\r\nPlayers take on the enemy in 5v5 class-based arena battles. With each ship having advantages and disadvantages, players will want to work together to build the most efficient team possible.\r\n\r\nDue to the high customization options available in the game, Dreadnought only features 5 actual ships. However, players will be able to outfit them in a variety of ways, resulting in a much wider variety of ships overall.\r\n\r\nPlayer matches in Dreadnought are estimated to last between 5 and 15 minutes, making it a great game for people who may not have hours to spend logged in on any given day.\r\n\r\nOn the monetization end, Dreadnought features two kinds of currency: the currency earned in game — called “Fleet Points (FP), and the currency purchased via the game market using real cash — Grey Box Points (GP). Items bought with GP offer bonuses and customization options but will not impact gameplay',
        'Memory'=>'4',
        'Storage'=>11,
        'Developed_by'=>'Yager Development',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Grey Box',
        'Graphics'=>'DirectX 11-compatible video card with dedicated 1 GB memory',
        'Genre'=>'Shooter',
        'ReleasedOn'=>'2018-10-14'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Cabals: Card Blitz' ,
        'size'=>200,
        'description'=>'A free-to-play game developed by Kyy Games and published by BISBOG SA.',
        'image'=>['games/images/cW5vEHSaIrs7f6S4wMHAcoBGRxixI9-metaNTk0ODM5NTE3ODQ1MDU5NDkxOS5qcGc=-.jpg '],
        'url_video'=>'https://www.freetogame.com/open/cabals-card-blitz',
        'category_id'=>8,
       
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/cabals-card-blitz',
        'long_description'=>'Cabals: Card Blitz is a free-to-play game developed by Kyy Games and published by BISBOG SA. The strategy card game offers players unique features in addition to the familiar CCG gameplay style. These include:\r\n\r\n    Cards are drawn automatically and randomly during battle\r\n    Players can battle against offline opponents\r\n    Players can choose their own path through a non-linear PvE map\r\n    Two different cards can be fused to produce an entirely new card\r\n\r\nIn addition to the above features, the game also offers a speed slider during battle, to allow the players to determine how fast or slow the game can be. With the slider set at Max, a game can take as little as 30 seconds to play.\r\n\r\nLike other CCGs, Cabals offers single and multi-player modes, with the single player mode giving players the opportunity to earn daily rewards in the form of gold, new cards and gems. The PvP mode is designed to guarantee players opponents without waiting in queue by letting them play against those offline.\r\n\r\nThe game is available now on Steam — as well as mobile devices.',
        'Memory'=>'512',
        'Storage'=>200,
        'Developed_by'=>'Kyy Games',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'BISBOG SA',
        'Graphics'=>'128 MB DirectX 9.0c compatible video card',
        'Genre'=>'Card Game',
        'ReleasedOn'=>'2017-02-08'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Alien Swarm: Reactive Drop' ,
        'size'=>10,
        'description'=>'A free-to-play top-down tactical co-op expansion on the Alien swarm game and Source SDK',
        'image'=>['games/images/QCv64lNK8LKxjFMv6vsB6Ptbw9paYC-metaNTk2NjM4MTM5MzM4NDY4MDkwNS5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/alien-swarm-reactive-drop',
        'category_id'=>2,
    
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/alien-swarm-reactive-drop',
        'long_description'=>'Alien Swarm: Reactive Drop is a free-to-play top-down tactical co-op expansion on the Alien swarm game and Source SDK developed by a group of designers at Valve who were hired from the MOD community. Reactive drop no longer grants players access to the Source SDK, however it does offer expanded co-op, with up to 8 players, Steam Workshop support, four PvP modes, a single player mode, and new aliens, weapons, achievements and more.\r\n\r\nThe game sends players on a bug hunt and is a blend of co-op and squad level gameplay. Players team up with friends to form a squad made of IAF Marine classes and use a selection of unlockable weapons featuring a wide variety of loadout configurations to battle aliens in an offworld colony.\r\n\r\nReactive Drop is spectator friendly and features leaderboards as well as the ability for spectators to see hacking minigames and mouse movements in real time. It is available via Steam.',
        'Memory'=>'2',
        'Storage'=>10,
        'Developed_by'=>'Reactive Drop',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Reactive Drop',
        'Graphics'=>'DirectX 9 compatible card with 128 MB, Shader model 2.0, ATI X800, NVidia 6600 or better',
        'Genre'=>'Shooter',
        'ReleasedOn'=>'2017-04-20'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Catan Universe' ,
        'size'=>1,
        'description'=>'A free-to-play strategy game based on the classic board and card games.',
        'image'=>['games/images/7wUzSe8VrBhUquekATNIv2coFt0l5C-metaNTgzMTQyMTgzODYzMzMxNjAxNS5qcGc=-.jpg '],
        'url_video'=>'https://www.freetogame.com/open/catan-universe',
        'category_id'=>8,
   
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/catan-universe',
        'long_description'=>'Catan Universe is a free-to-play strategy game based on the classic board and card games. Players race to settle Catan, building road and towns, as well as a thriving trade.\r\n\r\nThe game allows players to compete in duels against players around the world, offering 1v1v1 matches. Players can play the basic board in multiplayers as well as the introductory game, Catan — The Duel for free. Other modes are available as in-app purchases.\r\n\r\nBasic online features are available. Players can create their own avatar, engage in community functions such as chat, guilds, and more. The game can be played via client or in a browser, whichever works for the player.',
        'Memory'=>'2',
        'Storage'=>1,
        'Developed_by'=>'United Soft Media',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'United Soft Media',
        'Graphics'=>'Open GL 3.1+ Compliant',
        'Genre'=>'Card Game',
        'ReleasedOn'=>'2017-04-25'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Krosmaga' ,
        'size'=>3,
        'description'=>'A free-to-play CCG/tower defense hybrid developed \r\nby Ankama Studio and published by \r\nAnkama Games.',
        'image'=>['games/images/Ei8Jd4VSD9s0DXoqDEo4fWr66NAr8e-metaNjA0MzAwNDYwMjA4Mjc2NjMxMy5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/krosmaga',
        'category_id'=>12,
   
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/krosmaga',
        'long_description'=>'Kosmaga is a free-to-play CCG/tower defense hybrid developed by Ankama Studio and published by Ankama Games.  The game offers players fun in short, strategy-filled bursts… and features characters from both Dofus and Wakfu as controllable heroes.\r\n\r\nPlayers will take on the roll of a god, and control heroes on a battlefield using decks of cards. These decks can either be pre-made or created by the player. There are hundreds of cards available to build these decks with.\r\n\r\nThe game features PvP battles in which players can challenge others, as well as adventures that can be taken on in a single player mode. Cards are tied to players’ Ankama accounts, making it possible for players to access them on any device.',
        'Memory'=>'2',
        'Storage'=>3,
        'Developed_by'=>'Ankama Studio',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Ankama Games',
        'Graphics'=>'NVIDIA GeForce 6800 or ATI Radeon X1600 Pro',
        'Genre'=>'Card Game',
        'ReleasedOn'=>'2017-04-12'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Revelation Online' ,
        'size'=>5,
        'description'=>'A free-to-play fantasy MMO developed by NetEase and published by My.com.',
        'image'=>['games/images/Uq12UwZw6PLgTxy4wYzXpe1EGfz82P-metaNjA0NTUwMzEyNjI5Mjc3MDMyMi5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/revelation-online',
        'category_id'=>3,
 
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/revelation-online',
        'long_description'=>'Revelation Online is a free-to-play fantasy MMO developed by NetEase and published by My.com.\r\n\r\nA game featuring flight, Revelation Online offers players a vast world to explore. There are ten provinces and three Great Cities in the game’s world. Each city boasts a castle of its own and the rest of the world is littered with castles — including some in the sky and others buried in the ocean.\r\n\r\nThe game boasts a variety of content available for both single and group play. There are 5 – 10 player dungeons, 20 player raids, and a variety of world bosses. PvPers also have several different kinds of content to take part in including castle sieges, arena, aerial combat, open world PvP, and 10 different PvP maps to battle it out in.\r\n\r\nPlayers have 6 different classes to choose from; Gunslinger, Blademaster, Spiritshaper, Vanguard, Swordmage, and Occultist. To further customize gameplay, players can also choose between three different control styles, Tab-Target, Click-to-Move and Free Aiming.',
        'Memory'=>'2',
        'Storage'=>5,
        'Developed_by'=>'NetEase',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'https://my.com/',
        'Graphics'=>'Geforce 9500GT / GT610 or Intel HD4000',
        'Genre'=>'MMORPG',
        'ReleasedOn'=>'2017-03-06'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Line of Sight' ,
        'size'=>3,
        'description'=>'Free FPS game described as \"Bioshock meets Call of Duty\"!',
        'image'=>['games/images/mHddBK29rdwY2sa9byr27T2334MyU5-metaNjAyNzEzNzI1NzcyNDU1NDY5MS5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/line-of-sight',
        'category_id'=>19,
       
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/line-of-sight',
        'long_description'=>'Line of Sight is a free-to-play online FPS published by BlackSpot Entertainment. Described as “Bioshock meets Call of Duty,” the game has a modern military setting in a twisted universe.\r\n\r\nLike Bioshock, the game features super human abilities. It also offers players a pure military FPS experience and a “Classic Mode” in which players can play the game like any traditional online FPS.\r\n\r\nFor more serious — or Pro players — the game features class ranking, clan and league systems, and features needed for eSports play.',
        'Memory'=>'2',
        'Storage'=>3,
        'Developed_by'=>'BlackSpot Entertainment',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'BlackSpot Entertainment',
        'Graphics'=>'NVIDIA GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600',
        'Genre'=>'Shooter',
        'ReleasedOn'=>'2017-01-31'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Heavy Metal Machines' ,
        'size'=>3,
        'description'=>'A free-to-play multiplayer vehicular combat game based in a post-apocalyptic world',
        'image'=>['games/images/byYo2T3lQGwqCbFuW0myycnTyM2ZOK-metaNTk0NjI0ODg1MDE0ODc5NzU4Ni5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/heavy-metal-machines',
        'category_id'=>13,
     
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/heavy-metal-machines',
        'long_description'=>'Heavy Metal Machines is a free-to-play multiplayer vehicular combat game based in a post-apocalyptic world. Developed by Brazilian game developer and Publisher Hoplon. The game features 4v4 arena combat using crazy Mad Max style vehicles. It features 8 playable characters and a system that unlocks skills, skins, and abilities.\r\n\r\nThere are three types of roles: Interceptor — prevent enemies from taking the bomb, support — help carriers deliver the bomb by repairing and protecting them, and transporter — are experts in delivering the bomb. Each of the available characters comes with their own unique vechicle, ranging from spiky classic cars topped with giant speakers to odd looking motor cycles and tricked out tractors. All the vehicles have 4 unique weapons (or abilities).\r\n\r\nHeavy Metal Machines is available on PC and can signed up for via the game site."',
        'Memory'=>'3',
        'Storage'=>3,
        'Developed_by'=>'Hoplon',
        'Platform'=>'Windows',
        'status'=>'NotLive',
        'publisher'=>'Hoplon',
        'Graphics'=>'Intel Graphics HD 4000 or Nvidia GT 620',
        'Genre'=>'MOBA',
        'ReleasedOn'=>'2017-01-31'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Infestation: The New Z' ,
        'size'=>10,
        'description'=>'A re-work of the open world zombie shooter game Infestation: Survivor Stories (or as it was formerly known \"The War Z\").',
        'image'=>['games/images/CSdnASPVible5VwuWHBj3heFUP5Na0-metaNTg1ODM4MDUzMjMwNjUyMDg5MS5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/infestation-new-z',
        'category_id'=>2,
     
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/infestation-new-z',
        'long_description'=>'Infestation: The New Z is a re-work of the open world zombie shooter game Infestation: Survivor Stories (or as it was formerly known “The War Z”).Developed by Fredaikis AB and published by OP Productions LLC, the game drops players into a world where they must survive by scavenging for the things they need and either teaming up with or fighting against other players while avoiding the dangers all around them.\r\n\r\nThe New Z features different game modes, a lounge where players can trade loot, warm-up servers to get used to the game before hopping into PvP. For the more competitive players, there is a Battle Royale mode. The objective is to be the last man standing.\r\n\r\nAdding to the open world aspect of the game is the ability to drive around in cars, to create clans, and more.',
        'Memory'=>'2',
        'Storage'=>10,
        'Developed_by'=>'Fredaikis AB',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'OP Productions LLC',
        'Graphics'=>'NVIDIA GeForce GTX 465 / ATI Radeon TM HD 6870',
        'Genre'=>'Shooter',
        'ReleasedOn'=>'2016-11-22'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'MU Legend' ,
        'size'=>25,
        'description'=>'A free-to-play MMORPG developed by Webzen and the followup to MU Online.',
        'image'=>['games/images/s89Nr5zUDf0OYZ0p7VaBL0DWr1KUuw-metaNTg4NzYzNjc2NzE5NTExNDc5Ny5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/mu-legend',
        'category_id'=>3,
      
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/mu-legend',
        'long_description'=>'MU Legend is a free-to-play MMORPG developed by Webzen and the followup to MU Online. A fantasy hack ‘n’ slash game, MU Legend is based on Unreal Engine 3 and shares features from its predecessor, such as the UI and controls.\r\n\r\nThere are four playable character types available for play: Dark Lord, Whisperer, Blader, and War Mage. Dark Lords are former knights who gave up their humanity in exchange for power, making them capable of only cold reasoning. Whisperers harness the energy of nature and excel at stealth. Bladers were created as protectors and are brutal warriors fighting as representatives of the lower class. War Mages are exiles, removed from society after their abilities became too powerful.\r\n\r\nThe game offers a variety of content for players from several dungeons to a guild system and even an arena."',
        'Memory'=>'3',
        'Storage'=>25,
        'Developed_by'=>'VALOFE',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'VALOFE',
        'Graphics'=>'GeForce 8800GT / Radeon HD4850 and above',
        'Genre'=>'MMORPG',
        'ReleasedOn'=>'2017-03-23'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Shadowverse' ,
        'size'=>2,
        'description'=>'A free-to-play strategic CCG developed and published by Cygamesm the creators of Rage of Bahamut and Granblu Fantasy.',
        'image'=>['games/images/sJOBbEKEcndyV1Q4hiYbldFau9DpQm-metaNTc2NTc2OTMzNzkxMzg0NzI2OC5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/shadowverse',
        'category_id'=>20,
     
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/shadowverse',
        'long_description'=>'Shadowverse is a free-to-play strategic CCG developed and published by Cygamesm the creators of Rage of Bahamut and Granblu Fantasy. Available on Steam, iOS and Android, Shadowverse features over 400 cards from which to build customized decks.\r\n\r\nThe game offers single and multiplayer content with tactical gameplay. There are three kinds of cards, followers, spells, and amulets. Followers are the most active in battle, while spells offer an effect that activates once, and amulet cards support you in battle.',
        'Memory'=>'2',
        'Storage'=>2,
        'Developed_by'=>'Cygames, Inc',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Cygames, Inc',
        'Graphics'=>'NVIDIA GeForce 7600GT or AMD Radeon HD 84700',
        'Genre'=>'Card Game',
        'ReleasedOn'=>'2016-10-28'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'AdventureQuest 3D' ,
        'size'=>500,
        'description'=>'A free to play cross-platform MMORPG from the creators of the original 2D RPG game.',
        'image'=>['games/images/L0V5U6LzMrPnTTvLhTzaDGF00oXHGd-metaNTgzMTM2MTQ5NDM0MjgwNzI5MC5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/adventurequest-3d',
        'category_id'=>3,
       
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/adventurequest-3d',
        'long_description'=>'AdventureQuest 3D (AQ3D) is a free to play cross-platform fantasy MMORPG with colorful cartoony graphics from the creators of the original 2D RPG Flash game! AdventureQuest was created by the game’s original designers and is scheduled to come out in 4th Quarter 2016.\r\n\r\nJourney through a colorful persistent world filled with magic, monsters, vampires, werewolves, pirates, ninjas, dragons and more with graphics that will appeal to kids and adults. Unlike traditional MMORPGs, which limit players to a single class, AdventureQuest 3D allows players to switch between any of the game’s classes upon unlocking them. So don’t forget to visit the Hall of Trainers where you can unlock new classes.\r\n\r\nPlay with people around the world in co-op, solo mode or PVP. You can even play with friends who are not at your level, the “side-kicking” feature will boost your friend’s level so they can play with you in dangerous places. AdventureQuest 3D was developed by Artix Entertainment, the creators of AdventureQuest, DragonFable, MechQuest, and AQWorlds. You can access the world of AQ3D from your phone, tablet, and PC',
        'Memory'=>'1',
        'Storage'=>500,
        'Developed_by'=>'Artix Entertainment',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Artix Entertainment',
        'Graphics'=>'512 MB',
        'Genre'=>'MMORPG',
        'ReleasedOn'=>'2016-10-19'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Eternal' ,
        'size'=>3,
        'description'=>'A strategy card game designed to take the best elements of Magic the Gathering, Hearthstone, and Hex and combine them all into one game.',
        'image'=>['games/images/YHx0Pkq04RTKJrakBlir3C0uekATXz-metaNTgzMTQ3MzYwMTU3OTE2NzUxOC5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/eternal',
        'category_id'=>3,
      
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/eternal',
        'long_description'=>'Eternal is a strategy card game from developer Dire Wolf Digital. Designed to take the best elements of Magic the Gathering, Hearthstone, and Hex and combine them all into one game, the game looks to fix the balance issues that its competitors often experience.\r\n\r\nThe game is developed with the assistance of competitive CCG players, allowing the developers to adjust the AI and make it appropriately challenging. Eternal boasts dozens of enemy decks with “boss level” environments. It is billed by the developer as having unlimited choices in gameplay. Players can freely mix cards to create their perfect deck.\r\n\r\nIn addition to the promise of unlimited deck customization, Eternal also promises frequent updates that will add new cards and additional content. As an bonus, all content — cards and game modes — can be unlocked without the need of purchasing it.\r\n\r\nPlayers can sign up for Eternal via the game’s site.',
        'Memory'=>'2',
        'Storage'=>3,
        'Developed_by'=>'Dire Wolf Digital',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Dire Wolf Digital',
        'Graphics'=>'null',
        'Genre'=>'Card Game',
        'ReleasedOn'=>'2018-11-15'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'One Tower' ,
        'size'=>5,
        'description'=>'A unique 1v1 MOBA known as a \"micro-moba\" developed and published by SkyReacher following a successful Kickstarter.',
        'image'=>['games/images/J77u0camfPCltcft9bDiKM6YvBlu31-metaNTgzMTU0OTQ0MjExMTY4MDE4NS5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/one-tower',
        'category_id'=>18,
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/one-tower',
        'long_description'=>'One Tower is a unique 1v1 MOBA — known as a “micro-moba” — developed and published by SkyReacher following a successful Kickstarter. The game pits two players against each other in a small-scale version of MOBA arenas with a single lane and offshoot areas where monsters wait to be downed by either player.\r\n\r\nThe monsters are an important aspect of the game as they can help a player accelerate gold acquisition, which is needed to generate minions. Players have full control over their minions waves, being able to purchase specific minions with gold and chose their position in the wave. Not all gold is accumulated from monster kills, player will automatically receive gold over a certain period of time. Gold is also earned via killing the enemy and their minions.\r\n\r\nPlayers will also find elements of RTS and RPG games have been added to One Tower, to make for a more interesting 1v1 experience. The ultimate goal, like any MOBA, is for each player to protect the structure at their end of the lane while destroying the enemy’s.\r\n\r\nOne Tower is available to play via Steam.',
        'Memory'=>'2',
        'Storage'=>5,
        'Developed_by'=>'SkyReacher Entertainment',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'SkyReacher Entertainment',
        'Graphics'=>'DX11 Compatible GeForce GTX 460 1GB or AMD HD 6850 1GB',
        'Genre'=>'MOBA',
        'ReleasedOn'=>'2016-11-11'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Riding Club Championships' ,
        'size'=>1,
        'description'=>'An online competitive horse riding game inspired by traditional equestrian disciplines.',
        'image'=>['games/images/J8C6c3aoaaEZdSnedyKqmSulT71JYu-metaNjA0MzI2MTU3ODU2NjAyMDYxOS5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/riding-club-championships',
        'category_id'=>21,
    
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/riding-club-championships',
        'long_description'=>'Riding Club Championships is an online competitive horse riding game inspired by traditional equestrian disciplines. As with real world riding championships, players will participate in activities like show jumping, barrel racing, pole bending, and more.\r\n\r\nThe game allows players to play alone or with others, even competing in a weekly ranked tournament. There is also an option to create custom courses and share them with others\r\n\r\nThe game also boasts a horse RPG system, grooming, a selection of horses and gear, and a paddock mode. Of course, there are also standard MMO features such as a quest system, and multiple chat rooms.\r\n\r\nRiding Club Championships can be downloaded via Steam."',
        'Memory'=>'1',
        'Storage'=>1,
        'Developed_by'=>'Artplant',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Artplant',
        'Graphics'=>'NVidia GeForce 8800 GT or better',
        'Genre'=>'Racing',
        'ReleasedOn'=>'2016-09-27'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Battlerite' ,
        'size'=>1.5,
        'description'=>'A free-to-play team arena brawler developed by Stunlock Studios. Players play as one of several available champions on teams in 2v2 or 3v3 matches.',
        'image'=>['games/images/pyBnfnklerbAJqS6tKxW2OWdTodtjL-metaNTgzMTU1ODQ3NDQyNzkwMzc5My5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/battlerite',
        'category_id'=>18,
       
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/battlerite',
        'long_description'=>'Battlerite is a free-to-play team arena brawler developed by Stunlock Studios. Players play as one of several available champions — with more in development — on teams in 2v2 or 3v3 matches.\r\n\r\nThe game features three arenas, Mount Araz — built on a dragon graveyard at the edge of cape Kaal, Orman Temple — built in the garden of an abandoned temple, and Sky Ring — built on a floating island in the desert kingdom of Trolobe.\r\n\r\nPlayers can compete via the game’s ranking system and earn their chance to compete in community tournaments. There is also a variety of rewards to be earned via quests. Rewards come in the form of chests containing cosmetics that can be used to customize outfits, weapons, victory stances and more.\r\n\r\nFeatures unique to the game include battlerites that players can choose from as part of strategically developing their play style to match the gameplay, as well as top-down bullet-time, giving players a second look at their gameplay choices.\r\n\r\nBattlerite is available to play via Steam',
        'Memory'=>'2',
        'Storage'=>1500,
        'Developed_by'=>'Stunlock Studios',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Stunlock Studios',
        'Graphics'=>'Intel HD 3000',
        'Genre'=>'MOBA',
        'ReleasedOn'=>'2016-09-21'

          ]);
          //
           //               
    Game::create([
        'uuid'=>Str::uuid(),
        'title' =>'Paladins' ,
        'size'=>10,
        'description'=>' A free-to-play team-based shooter developed and published by Hi-Rez Games, the creators of SMITE.',
        'image'=>['games/images/TsMjJ6ev9GyfEJUnGG7xIFdXRmE2y4-metaNTgzMTE3OTIzMzExMDYzNDEyNy5qcGc=-.jpg'],
        'url_video'=>'https://www.freetogame.com/open/paladins',
        'category_id'=>2,
        'type'=>'freement',
        'url_download'=>'https://www.freetogame.com/paladins',
        'long_description'=>'Paladins is a free-to-play team-based shooter developed and published by Hi-Rez Games, the creators of SMITE. The game uses a collectible card system to allow players to customize their characters abilities during play.\r\n\r\nPlayers start with a base deck and can unlock additional cards over time. They can also gain additional augments on their characters through the use of burn cards. Cards are unlocked (or crafted) via Raidant Chests and Gold which is earned by leveling up characters via game play. Gold and Radiant Chests can also be used to acquire costumes and weapon skins.\r\n\r\nThe game features nearly 20 champions with a wide variety of abilities and hundreds of cards with which to modify them during play. It offers players a variety of game modes, including:\r\n\r\n    Capture and Siege: in which each team must capture an end point to spawn a Siege Engine used to destroy the enemy’s vault.\r\n    Payload: one team defends while the other Attacks by pushing a payload to the enemy base and destroying the vault.\r\n    Survival: teams battle each other and the clock as a fog slowly envelops the map. The last team standing at the end of a round wins the round while the first team to earn 5 points wins the game.\r\n\r\nAnother unique feature in Paladins is the use of mounts to get around. Mounts can be used in combat in addition to their primary use of getting from one point to another more quickly. Taking damage while on a mount will result in being dismounted and a mount can not be recalled while in combat.\r\n\r\nPaladins is available to download via the official game website or Steam.',
        'Memory'=>'2',
        'Storage'=>10,
        'Developed_by'=>'Hi-Rez Studios',
        'Platform'=>'Windows',
        'status'=>'Live',
        'publisher'=>'Hi-Rez Studios',
        'Graphics'=>'ATI or Nvidia graphics card with 512MB video ram or better and Shader Model 3.0+ support',
        'Genre'=>'Shooter',
        'ReleasedOn'=>'2016-09-16'

          ]);
          //    

    }
}
