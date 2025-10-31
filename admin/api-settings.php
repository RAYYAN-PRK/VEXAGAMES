<?php $page = "Tools"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>

<?php

if (isset($_GET) && isset($_GET['platform'])) {
    $platform = Secure_DATA($_GET['platform']);
}

?>

<body>
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <!-- <div class="games-list flex gap-6"> -->
            <form method="post" action="functions/api.php" class="w-full">
                <?php if ($platform == "gamemonetize") { ?>
                    <div class="specific-div">
                        <input type="hidden" name="platform" value="gamemonetize">
                        <div class="flex gap-5">
                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Type</label>
                                <select name="type" id="type" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option value="html5">HTML5</option>
                                    <option value="mobile">Mobile Games (HTML5)</option>
                                </select>
                            </div>

                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Popularity</label>
                                <select name="popularity" id="popularity" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option value="newest">Newest</option>
                                    <option value="mostplayed">Most Popular</option>
                                    <option value="hotgames">Hot Games</option>
                                    <option value="bestgames">Best Games</option>
                                    <option value="exclusivegames">Exclusive Games</option>
                                    <option value="editorpicks">Editor Picks</option>
                                </select>
                            </div>

                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Category</label>
                                <select name="category" id="category" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option value="All">All</option>
                                    <option value="1">.IO</option>
                                    <option value="2">2 Player</option>
                                    <option value="3">3D</option>
                                    <option value="0">Action</option>
                                    <option value="4">Adventure</option>
                                    <option value="5">Arcade</option>
                                    <option value="19">Baby Hazel</option>
                                    <option value="6">Bejeweled</option>
                                    <option value="7">Boys</option>
                                    <option value="8">Clicker</option>
                                    <option value="9">Cooking</option>
                                    <option value="10">Girls</option>
                                    <option value="11">Hypercasual</option>
                                    <option value="12">Multiplayer</option>
                                    <option value="13">Puzzle</option>
                                    <option value="14">Racing</option>
                                    <option value="15">Shooting</option>
                                    <option value="16">Soccer</option>
                                    <option value="17">Sports</option>
                                    <option value="18">Stickman</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex gap-5 mt-6">
                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Company</label>
                                <select name="company" id="company" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option value="&amp;company=All">All</option>
                                    <option value="&amp;company=013Games">013 Games</option>
                                    <option value="&amp;company=0f2Studio">0f2 Studio</option>
                                    <option value="&amp;company=1000WebGames">1000WebGames</option>
                                    <option value="&amp;company=27thstudio">27th studio</option>
                                    <option value="&amp;company=2SGamix">2SGamix</option>
                                    <option value="&amp;company=3d">3d</option>
                                    <option value="&amp;company=3v3.info">3v3.info</option>
                                    <option value="&amp;company=436PLAY">436PLAY</option>
                                    <option value="&amp;company=4399">4399</option>
                                    <option value="&amp;company=4FanGames">4FanGames</option>
                                    <option value="&amp;company=4GameGround">4GameGround</option>
                                    <option value="&amp;company=4gamegrounds">4gamegrounds</option>
                                    <option value="&amp;company=4games">4games</option>
                                    <option value="&amp;company=4GamesStudio">4Games Studio</option>
                                    <option value="&amp;company=4kun">4kun</option>
                                    <option value="&amp;company=619Games">619 Games</option>
                                    <option value="&amp;company=6woo.com">6woo.com</option>
                                    <option value="&amp;company=7Games">7Games</option>
                                    <option value="&amp;company=7thReactor">7thReactor</option>
                                    <option value="&amp;company=8BGames">8BGames</option>
                                    <option value="&amp;company=94NOIZEStudio">94NOIZE Studio</option>
                                    <option value="&amp;company=9minutegames">9minutegames</option>
                                    <option value="&amp;company=a.partik">a.partik</option>
                                    <option value="&amp;company=a437384801">a437384801</option>
                                    <option value="&amp;company=AAGames">AA Games</option>
                                    <option value="&amp;company=ABNorriStockholm">AB Norri Stockholm</option>
                                    <option value="&amp;company=AbaidUllah">Abaid Ullah</option>
                                    <option value="&amp;company=abdox">abdox</option>
                                    <option value="&amp;company=ABERIANE">ABERIANE</option>
                                    <option value="&amp;company=AbuAlrubStudios">AbuAlrub Studios</option>
                                    <option value="&amp;company=achlink">achlink</option>
                                    <option value="&amp;company=actiongameshub.com">actiongameshub.com</option>
                                    <option value="&amp;company=ActiveGames">Active Games</option>
                                    <option value="&amp;company=AdawadaGames">Adawada Games</option>
                                    <option value="&amp;company=adgard">adgard</option>
                                    <option value="&amp;company=Adult-Puzzles.com">Adult-Puzzles.com</option>
                                    <option value="&amp;company=AdvanceStudioGames">Advance Studio Games</option>
                                    <option value="&amp;company=Adventure">Adventure</option>
                                    <option value="&amp;company=AEGames">AE Games</option>
                                    <option value="&amp;company=AFKGamestudio">AFK Gamestudio</option>
                                    <option value="&amp;company=AGGames">AG Games</option>
                                    <option value="&amp;company=AGames">AGames</option>
                                    <option value="&amp;company=AgeSimpleGames">AgeSimpleGames</option>
                                    <option value="&amp;company=AgtGameZone">AgtGameZone</option>
                                    <option value="&amp;company=AhtleticDesign">Ahtletic Design</option>
                                    <option value="&amp;company=aikyuklash">aikyuklash</option>
                                    <option value="&amp;company=Airapport">Airapport</option>
                                    <option value="&amp;company=Airem">Airem</option>
                                    <option value="&amp;company=ajerartech">ajerartech</option>
                                    <option value="&amp;company=akGames">ak Games</option>
                                    <option value="&amp;company=akchichou12">akchichou12</option>
                                    <option value="&amp;company=akrapov07ic">akrapov07ic</option>
                                    <option value="&amp;company=alaab">alaab</option>
                                    <option value="&amp;company=Albayoo">Albayoo</option>
                                    <option value="&amp;company=AlexWhite">Alex White</option>
                                    <option value="&amp;company=alexbcgames">alexbcgames</option>
                                    <option value="&amp;company=AlexGM">AlexGM</option>
                                    <option value="&amp;company=alijob">ali job</option>
                                    <option value="&amp;company=AlienGames">AlienGames</option>
                                    <option value="&amp;company=Alisgame">Alisgame</option>
                                    <option value="&amp;company=AliTura1">AliTura1</option>
                                    <option value="&amp;company=ali_games">ali_games</option>
                                    <option value="&amp;company=allgearama">allgearama</option>
                                    <option value="&amp;company=ALMAGames">ALMA Games</option>
                                    <option value="&amp;company=Alnars">Alnars</option>
                                    <option value="&amp;company=alohagames">alohagames</option>
                                    <option value="&amp;company=AMARIASOFT">AMARIASOFT</option>
                                    <option value="&amp;company=AmazingHedgehogStudio">Amazing Hedgehog Studio</option>
                                    <option value="&amp;company=amazingms">amazingms</option>
                                    <option value="&amp;company=ambassadeur">ambassadeur</option>
                                    <option value="&amp;company=AmbitiousGameStudio">Ambitious Game Studio</option>
                                    <option value="&amp;company=Amfich">Amfich</option>
                                    <option value="&amp;company=Amgelescape">Amgelescape</option>
                                    <option value="&amp;company=amongpick7">among pick7</option>
                                    <option value="&amp;company=AmongUndead">Among Undead</option>
                                    <option value="&amp;company=amongus">amongus</option>
                                    <option value="&amp;company=Anadtasia">Anadtasia</option>
                                    <option value="&amp;company=Anaikous">Anaikous</option>
                                    <option value="&amp;company=anajahtech">anajahtech</option>
                                    <option value="&amp;company=AnamikMajumdar">Anamik Majumdar</option>
                                    <option value="&amp;company=Andrey">Andrey</option>
                                    <option value="&amp;company=androidpro">androidpro</option>
                                    <option value="&amp;company=AngryGames">Angry Games</option>
                                    <option value="&amp;company=AngryGamez">AngryGamez</option>
                                    <option value="&amp;company=ANMDGames">ANMD Games</option>
                                    <option value="&amp;company=AntarctiCode">AntarctiCode</option>
                                    <option value="&amp;company=Anuj">Anuj</option>
                                    <option value="&amp;company=AnybodyParty">Anybody Party</option>
                                    <option value="&amp;company=AppDayDev">AppDayDev</option>
                                    <option value="&amp;company=ara9">ara9</option>
                                    <option value="&amp;company=ArcadAGames">ArcadAGames</option>
                                    <option value="&amp;company=ArcadeGears.Com">ArcadeGears.Com</option>
                                    <option value="&amp;company=ArcareBomb">ArcareBomb</option>
                                    <option value="&amp;company=Arkboxgames">Arkboxgames</option>
                                    <option value="&amp;company=Artlimited">Art limited</option>
                                    <option value="&amp;company=ArtBit">ArtBit</option>
                                    <option value="&amp;company=ArtDob">ArtDob</option>
                                    <option value="&amp;company=ArtisWeb">Artis Web</option>
                                    <option value="&amp;company=arygames">arygames</option>
                                    <option value="&amp;company=AshokaGames">Ashoka Games</option>
                                    <option value="&amp;company=Askar-Games">Askar-Games</option>
                                    <option value="&amp;company=AsmaTec">AsmaTec</option>
                                    <option value="&amp;company=ASROnlineGames">ASROnlineGames</option>
                                    <option value="&amp;company=ASTAGAMES">ASTAGAMES</option>
                                    <option value="&amp;company=AtiiGames">Atii Games</option>
                                    <option value="&amp;company=ATLASNUBEautogestión">ATLASNUBE autogestión</option>
                                    <option value="&amp;company=AuroraGames">AuroraGames</option>
                                    <option value="&amp;company=AvidGame">AvidGame</option>
                                    <option value="&amp;company=AwaisJaveed">Awais Javeed</option>
                                    <option value="&amp;company=Axeleration">Axeleration</option>
                                    <option value="&amp;company=AxisEntertainmentLimited">Axis Entertainment Limited</option>
                                    <option value="&amp;company=AYATechno">AYA Techno</option>
                                    <option value="&amp;company=AYNGames">AYN Games</option>
                                    <option value="&amp;company=AyourSoft">AyourSoft</option>
                                    <option value="&amp;company=Ayushi">Ayushi</option>
                                    <option value="&amp;company=azeemdesigner">azeemdesigner</option>
                                    <option value="&amp;company=azfgamedev">azfgamedev</option>
                                    <option value="&amp;company=AZGAME">AZGAME</option>
                                    <option value="&amp;company=AzoogaTechnologiesSRL">Azooga Technologies SRL</option>
                                    <option value="&amp;company=AzurGames">Azur Games</option>
                                    <option value="&amp;company=AzureSky">AzureSky</option>
                                    <option value="&amp;company=A_B_VStudio">A_B_VStudio</option>
                                    <option value="&amp;company=b10b">b10b</option>
                                    <option value="&amp;company=BabyDaisyGames">Baby Daisy Games</option>
                                    <option value="&amp;company=babygames.com">babygames.com</option>
                                    <option value="&amp;company=BADIS">BADIS</option>
                                    <option value="&amp;company=BahaaGameDev">Bahaa GameDev</option>
                                    <option value="&amp;company=bambideath">bambideath</option>
                                    <option value="&amp;company=BananaGames">Banana Games</option>
                                    <option value="&amp;company=BarlodGames">BarlodGames</option>
                                    <option value="&amp;company=BassoGames">BassoGames</option>
                                    <option value="&amp;company=BATTLEGROUNDINDIA">BATTLE GROUND INDIA</option>
                                    <option value="&amp;company=ΒBTop">BBTop</option>
                                    <option value="&amp;company=BeastGames">BeastGames</option>
                                    <option value="&amp;company=beaStudios.LTD">beaStudios.LTD</option>
                                    <option value="&amp;company=BeaverSoftware">Beaver Software</option>
                                    <option value="&amp;company=BeetleJuiceStudios">BeetleJuice Studios</option>
                                    <option value="&amp;company=begaming">begaming</option>
                                    <option value="&amp;company=Behappy">Behappy</option>
                                    <option value="&amp;company=Beijingyiletongtechnologydevelopmentcompany">Beijing yiletong technology development company</option>
                                    <option value="&amp;company=Berezka">Berezka</option>
                                    <option value="&amp;company=BestGamesStudios">Best Games Studios</option>
                                    <option value="&amp;company=BestKidsGames">Best Kids Games</option>
                                    <option value="&amp;company=BestCrazyGames">BestCrazyGames</option>
                                    <option value="&amp;company=bestfreegames">bestfreegames</option>
                                    <option value="&amp;company=bestgame">bestgame</option>
                                    <option value="&amp;company=bestgames.com">bestgames.com</option>
                                    <option value="&amp;company=BestGamesDevelopers">BestGamesDevelopers</option>
                                    <option value="&amp;company=BestGamesFreePlay.com">BestGamesFreePlay.com</option>
                                    <option value="&amp;company=BestGameSpot.Com">BestGameSpot.Com</option>
                                    <option value="&amp;company=BestGamingweb">BestGaming web</option>
                                    <option value="&amp;company=bestnewgames">bestnewgames</option>
                                    <option value="&amp;company=BestOnlineGames">BestOnlineGames</option>
                                    <option value="&amp;company=BetaPub">BetaPub</option>
                                    <option value="&amp;company=Betsuites">Betsuites</option>
                                    <option value="&amp;company=BGOGames">BGO Games</option>
                                    <option value="&amp;company=BigGame">BigGame</option>
                                    <option value="&amp;company=BiliGames">BiliGames</option>
                                    <option value="&amp;company=Bimowi">Bimowi </option>
                                    <option value="&amp;company=BinoSuperGames">BinoSuperGames</option>
                                    <option value="&amp;company=BioGhostGames">BioGhost Games</option>
                                    <option value="&amp;company=BiolabADV">Biolab ADV</option>
                                    <option value="&amp;company=BizoGames">Bizo Games</option>
                                    <option value="&amp;company=BizoGames.com">BizoGames.com</option>
                                    <option value="&amp;company=BKGSTUDIO">BKG STUDIO</option>
                                    <option value="&amp;company=BlackAdams">Black Adams</option>
                                    <option value="&amp;company=Blackcatgames">Blackcatgames</option>
                                    <option value="&amp;company=Blackmamba">Blackmamba</option>
                                    <option value="&amp;company=BlobStudio">BlobStudio</option>
                                    <option value="&amp;company=BlueFireGames">Blue Fire Games</option>
                                    <option value="&amp;company=Bnagames">Bnagames</option>
                                    <option value="&amp;company=Boa">Boa</option>
                                    <option value="&amp;company=BoilingMountStudios">BoilingMount Studios</option>
                                    <option value="&amp;company=BomPraJogar">BomPraJogar</option>
                                    <option value="&amp;company=BORIRA">BORIRA</option>
                                    <option value="&amp;company=BotaGame">BotaGame</option>
                                    <option value="&amp;company=Botijonline">Botijonline</option>
                                    <option value="&amp;company=BravoGames">Bravo Games</option>
                                    <option value="&amp;company=BrightestGames">BrightestGames</option>
                                    <option value="&amp;company=brillientgames.com">brillientgames.com</option>
                                    <option value="&amp;company=BRMGAME">BRM GAME</option>
                                    <option value="&amp;company=BroadSolutions,LLC">Broad Solutions, LLC</option>
                                    <option value="&amp;company=Brullworfellab.">Brullworfel lab.</option>
                                    <option value="&amp;company=BTop">BTop</option>
                                    <option value="&amp;company=BubbleShooter">Bubble Shooter</option>
                                    <option value="&amp;company=BubbleLabGames">BubbleLab Games</option>
                                    <option value="&amp;company=Bubito">Bubito</option>
                                    <option value="&amp;company=Bunnygames">Bunnygames</option>
                                    <option value="&amp;company=BurbitoGames">Burbito Games</option>
                                    <option value="&amp;company=BytehopStudios">Bytehop Studios</option>
                                    <option value="&amp;company=CarGameLLC">Car Game LLC </option>
                                    <option value="&amp;company=cargames.com">cargames.com</option>
                                    <option value="&amp;company=caribu">caribu</option>
                                    <option value="&amp;company=cartifica">cartifica</option>
                                    <option value="&amp;company=CartoonGlitch">CartoonGlitch</option>
                                    <option value="&amp;company=CASHSPINNER.2023">CASHSPINNER.2023</option>
                                    <option value="&amp;company=CastalidesLtd">Castalides Ltd</option>
                                    <option value="&amp;company=CasualGames">Casual Games</option>
                                    <option value="&amp;company=CatomGames">Catom Games</option>
                                    <option value="&amp;company=CawShow">CawShow</option>
                                    <option value="&amp;company=CBGames">CB Games</option>
                                    <option value="&amp;company=CDGames">CD Games</option>
                                    <option value="&amp;company=Centipede5">Centipede5</option>
                                    <option value="&amp;company=ChaiiGamez">ChaiiGamez</option>
                                    <option value="&amp;company=ChainNations">Chain Nations</option>
                                    <option value="&amp;company=ChaosInteractive">Chaos Interactive</option>
                                    <option value="&amp;company=CHCStudioGame">CHC Studio Game</option>
                                    <option value="&amp;company=cheapa">cheapa</option>
                                    <option value="&amp;company=chif">chif</option>
                                    <option value="&amp;company=chigx">chigx</option>
                                    <option value="&amp;company=ChrisSkyRo">ChrisSkyRo</option>
                                    <option value="&amp;company=Clarus">Clarus</option>
                                    <option value="&amp;company=ClarusGames">ClarusGames</option>
                                    <option value="&amp;company=classic-mahjong.com">classic-mahjong.com</option>
                                    <option value="&amp;company=CodeSoluções">Code Soluções</option>
                                    <option value="&amp;company=CodeThisLabS.r.l.">Code This Lab S.r.l.</option>
                                    <option value="&amp;company=CodoStudio">Codo Studio</option>
                                    <option value="&amp;company=Coinpro">Coinpro</option>
                                    <option value="&amp;company=collapside">collapside</option>
                                    <option value="&amp;company=Com2Games">Com2 Games</option>
                                    <option value="&amp;company=commagames">comma games</option>
                                    <option value="&amp;company=Companyy">Companyy</option>
                                    <option value="&amp;company=ConchGame">ConchGame</option>
                                    <option value="&amp;company=CoolGames">Cool Games</option>
                                    <option value="&amp;company=coolfreegames">coolfreegames</option>
                                    <option value="&amp;company=Coolittle">Coolittle</option>
                                    <option value="&amp;company=copolla">copolla</option>
                                    <option value="&amp;company=CoreUnknown">CoreUnknown</option>
                                    <option value="&amp;company=CrazyJokers3D">Crazy Jokers 3D</option>
                                    <option value="&amp;company=CrazyGame">CrazyGame</option>
                                    <option value="&amp;company=crazygameland">crazygameland</option>
                                    <option value="&amp;company=crazygames.cc">crazygames.cc</option>
                                    <option value="&amp;company=CrazyOnlineGames">CrazyOnlineGames</option>
                                    <option value="&amp;company=crazyschoolgames.com">crazyschoolgames.com</option>
                                    <option value="&amp;company=CrazyTea">CrazyTea </option>
                                    <option value="&amp;company=CreacleStudio">Creacle Studio</option>
                                    <option value="&amp;company=creativegames">creative games</option>
                                    <option value="&amp;company=CrimsonDev">Crimson Dev</option>
                                    <option value="&amp;company=CrimsonGames">Crimson Games</option>
                                    <option value="&amp;company=cristiandasilva">cristian da silva</option>
                                    <option value="&amp;company=CSGAMES">CSGAMES</option>
                                    <option value="&amp;company=CTP~design">CTP~design</option>
                                    <option value="&amp;company=Cubechihuahuagames">Cube chihuahua games</option>
                                    <option value="&amp;company=Cupcake.inc">Cupcake.inc</option>
                                    <option value="&amp;company=cutedressup.com">cutedressup.com</option>
                                    <option value="&amp;company=cv">cv</option>
                                    <option value="&amp;company=D.Stevenson">D. Stevenson</option>
                                    <option value="&amp;company=DAB3GamesLLC">DAB 3 Games LLC</option>
                                    <option value="&amp;company=dadyat">dadyat</option>
                                    <option value="&amp;company=Daeda1">Daeda1</option>
                                    <option value="&amp;company=DailyGame">DailyGame</option>
                                    <option value="&amp;company=dameng">dameng</option>
                                    <option value="&amp;company=DarknesGamesStudio">Darknes Games Studio</option>
                                    <option value="&amp;company=DAVIDdev">DAVIDdev</option>
                                    <option value="&amp;company=DaysevenGames">Dayseven Games</option>
                                    <option value="&amp;company=ddsh">ddsh</option>
                                    <option value="&amp;company=DebCorp">DebCorp</option>
                                    <option value="&amp;company=DedRetrowave">DedRetrowave</option>
                                    <option value="&amp;company=DeemoGames">Deemo Games</option>
                                    <option value="&amp;company=DefiantExtropia">DefiantExtropia</option>
                                    <option value="&amp;company=defthandsgames">defthandsgames</option>
                                    <option value="&amp;company=DENISISTUDIO">DENISI STUDIO</option>
                                    <option value="&amp;company=DerekJohnEvers">Derek John Evers</option>
                                    <option value="&amp;company=desagames">desa games</option>
                                    <option value="&amp;company=DesertFoxGaming">DesertFox Gaming</option>
                                    <option value="&amp;company=DESIGNGAMESINC">DESIGN GAMES INC</option>
                                    <option value="&amp;company=designdev">designdev</option>
                                    <option value="&amp;company=Despinco">Despinco</option>
                                    <option value="&amp;company=DestinyStudio">Destiny Studio</option>
                                    <option value="&amp;company=Destweb">Destweb</option>
                                    <option value="&amp;company=deusx.com">deusx.com</option>
                                    <option value="&amp;company=DevDude">Dev Dude</option>
                                    <option value="&amp;company=Devcom56">Devcom56</option>
                                    <option value="&amp;company=deveakil">deveakil</option>
                                    <option value="&amp;company=DeveloperFriends">Developer Friends</option>
                                    <option value="&amp;company=DevingStudio">DevingStudio</option>
                                    <option value="&amp;company=DevMaker">DevMaker</option>
                                    <option value="&amp;company=DexteryGames">Dextery Games</option>
                                    <option value="&amp;company=DiaMMax">DiaMMax</option>
                                    <option value="&amp;company=DICEMOON">DICEMOON</option>
                                    <option value="&amp;company=digidevco">digidevco</option>
                                    <option value="&amp;company=DigitalLegends">Digital Legends</option>
                                    <option value="&amp;company=Digvn">Digvn</option>
                                    <option value="&amp;company=DiHits">DiHits</option>
                                    <option value="&amp;company=DilStudio">DilStudio</option>
                                    <option value="&amp;company=DinoGames">DinoGames</option>
                                    <option value="&amp;company=DJKamalMustafa">DJ Kamal Mustafa</option>
                                    <option value="&amp;company=DL-studio">DL-studio</option>
                                    <option value="&amp;company=Dmkcompany">Dmkcompany</option>
                                    <option value="&amp;company=Do">Do</option>
                                    <option value="&amp;company=DobGame">DobGame</option>
                                    <option value="&amp;company=DobsoftStudio">Dobsoft Studio</option>
                                    <option value="&amp;company=Dolabstudio">Dolab studio</option>
                                    <option value="&amp;company=dominigame">dominigame</option>
                                    <option value="&amp;company=Domino">Domino</option>
                                    <option value="&amp;company=Dooshbug">Dooshbug</option>
                                    <option value="&amp;company=Dop5">Dop5</option>
                                    <option value="&amp;company=DORAIMON">DORAIMON</option>
                                    <option value="&amp;company=DPB">DPB</option>
                                    <option value="&amp;company=DRStudio">DR Studio</option>
                                    <option value="&amp;company=DRA">DRA</option>
                                    <option value="&amp;company=Dragames">Dragames</option>
                                    <option value="&amp;company=DreamingBoy">DreamingBoy</option>
                                    <option value="&amp;company=DreamlyGames">Dreamly Games</option>
                                    <option value="&amp;company=DreamsPioner">DreamsPioner</option>
                                    <option value="&amp;company=dressup">dressup</option>
                                    <option value="&amp;company=DressUpGames">DressUpGames</option>
                                    <option value="&amp;company=DumaduGamesPvtLtd">Dumadu Games Pvt Ltd</option>
                                    <option value="&amp;company=DunaliGames">Dunali Games</option>
                                    <option value="&amp;company=DurmanGamesStudio">Durman Games Studio</option>
                                    <option value="&amp;company=Duzzil">Duzzil</option>
                                    <option value="&amp;company=DvD">DvD</option>
                                    <option value="&amp;company=DyakoGD">DyakoGD</option>
                                    <option value="&amp;company=DynaDev">DynaDev</option>
                                    <option value="&amp;company=Dynostd">Dynostd</option>
                                    <option value="&amp;company=DzireGames">Dzire Games</option>
                                    <option value="&amp;company=EAETST">EAE TST</option>
                                    <option value="&amp;company=EagleStudio">Eagle Studio</option>
                                    <option value="&amp;company=Easygame">Easygame</option>
                                    <option value="&amp;company=EcapsGames.com">EcapsGames.com</option>
                                    <option value="&amp;company=educationkidgaming">education kid gaming</option>
                                    <option value="&amp;company=eeStudio">eeStudio</option>
                                    <option value="&amp;company=EggysGames">Eggys Games</option>
                                    <option value="&amp;company=EJOOOS">EJOOOS</option>
                                    <option value="&amp;company=eldorado">eldorado</option>
                                    <option value="&amp;company=ElectedSheriffKaynny">Elected Sheriff Kaynny</option>
                                    <option value="&amp;company=elhdev">elhdev</option>
                                    <option value="&amp;company=elmourtajiazeddine">elmourtajiazeddine</option>
                                    <option value="&amp;company=EmbersonInvestments">Emberson Investments</option>
                                    <option value="&amp;company=EmirÖztürk">Emir Öztürk</option>
                                    <option value="&amp;company=emolingogames">emolingo games</option>
                                    <option value="&amp;company=enarmi">enarmi</option>
                                    <option value="&amp;company=Endel">Endel</option>
                                    <option value="&amp;company=EneaEntertainment">Enea Entertainment</option>
                                    <option value="&amp;company=EnroGame">EnroGame</option>
                                    <option value="&amp;company=EpicEarthGames">Epic Earth Games</option>
                                    <option value="&amp;company=Eponesh.Technologies">Eponesh.Technologies</option>
                                    <option value="&amp;company=eren">eren</option>
                                    <option value="&amp;company=Erhany">Erhany</option>
                                    <option value="&amp;company=Erigato.space">Erigato.space</option>
                                    <option value="&amp;company=EscapeFan">EscapeFan</option>
                                    <option value="&amp;company=eseyGame">eseyGame</option>
                                    <option value="&amp;company=Esklavos">Esklavos</option>
                                    <option value="&amp;company=espacegames">espacegames</option>
                                    <option value="&amp;company=EvilGamesStudio">Evil Games Studio</option>
                                    <option value="&amp;company=EvilObjective">Evil Objective</option>
                                    <option value="&amp;company=EvilMushroom99">EvilMushroom99</option>
                                    <option value="&amp;company=EVIVGames">EVIV Games</option>
                                    <option value="&amp;company=Fare">Fare</option>
                                    <option value="&amp;company=Fariscan">Fariscan</option>
                                    <option value="&amp;company=FarrukhGaming">Farrukh Gaming</option>
                                    <option value="&amp;company=FatBoyStudio">Fat Boy Studio</option>
                                    <option value="&amp;company=FatBytesGaming">FatBytes Gaming</option>
                                    <option value="&amp;company=FatihKarabulut">Fatih Karabulut</option>
                                    <option value="&amp;company=FBGNetwork">FBG Network</option>
                                    <option value="&amp;company=FBK">FBK</option>
                                    <option value="&amp;company=fightboys">fight boys</option>
                                    <option value="&amp;company=Fik">Fik</option>
                                    <option value="&amp;company=finexfast">finexfast</option>
                                    <option value="&amp;company=FIREBEAST">FIREBEAST</option>
                                    <option value="&amp;company=FirefliesStudio">Fireflies Studio</option>
                                    <option value="&amp;company=FirstArtPoster">FirstArtPoster</option>
                                    <option value="&amp;company=FishPondStudio">Fish Pond Studio</option>
                                    <option value="&amp;company=FiveStarGames">Five Star Games</option>
                                    <option value="&amp;company=FlikesGames">Flikes Games</option>
                                    <option value="&amp;company=FluStudio">FluStudio</option>
                                    <option value="&amp;company=FoXSkr">FoXSkr</option>
                                    <option value="&amp;company=Foxyyzy">Foxyyzy</option>
                                    <option value="&amp;company=FoxZin.com">FoxZin.com</option>
                                    <option value="&amp;company=FOXZOID">FOXZOID</option>
                                    <option value="&amp;company=FreakXGames">Freak X Games</option>
                                    <option value="&amp;company=FreeFun.io">FreeFun.io</option>
                                    <option value="&amp;company=FreeGameHost">FreeGameHost</option>
                                    <option value="&amp;company=FreeGames.org">FreeGames.org</option>
                                    <option value="&amp;company=Freegamesforplay.com">Freegamesforplay.com</option>
                                    <option value="&amp;company=freeonlinebaseballgames">freeonlinebaseballgames</option>
                                    <option value="&amp;company=freindsgame">freinds game</option>
                                    <option value="&amp;company=FrenchFries">FrenchFries</option>
                                    <option value="&amp;company=Frikis">Frikis</option>
                                    <option value="&amp;company=friv.ee">friv.ee</option>
                                    <option value="&amp;company=Friv432andmidl">Friv432 and midl</option>
                                    <option value="&amp;company=FrivClub">FrivClub</option>
                                    <option value="&amp;company=FTG">FTG</option>
                                    <option value="&amp;company=FTXSTUDIO">FTX STUDIO</option>
                                    <option value="&amp;company=Fuego!Games">Fuego! Games</option>
                                    <option value="&amp;company=FunEagleGames">Fun Eagle Games</option>
                                    <option value="&amp;company=FunFreeArcadeGames">Fun Free Arcade Games</option>
                                    <option value="&amp;company=FunGameStudioX">Fun Game Studio X</option>
                                    <option value="&amp;company=FunGames">Fun Games</option>
                                    <option value="&amp;company=FunCtc">FunCtc</option>
                                    <option value="&amp;company=Funis">Funis</option>
                                    <option value="&amp;company=FunnyGamesInc.">FunnyGames Inc.</option>
                                    <option value="&amp;company=Funova">Funova</option>
                                    <option value="&amp;company=FurkanKarapınar">Furkan Karapınar</option>
                                    <option value="&amp;company=G4AA">G4AA</option>
                                    <option value="&amp;company=G55.CO">G55.CO</option>
                                    <option value="&amp;company=galaktikalimited">galaktika limited</option>
                                    <option value="&amp;company=GalimatixGames">Galimatix Games</option>
                                    <option value="&amp;company=gamaverse.com">gamaverse.com</option>
                                    <option value="&amp;company=game2021">game 2021</option>
                                    <option value="&amp;company=GameArtStudios">Game Art Studios</option>
                                    <option value="&amp;company=GameAshlar">Game Ashlar</option>
                                    <option value="&amp;company=GameForest">Game Forest</option>
                                    <option value="&amp;company=gameissak">game issak</option>
                                    <option value="&amp;company=Gameitup">Game it up</option>
                                    <option value="&amp;company=GamePaintStudio">Game Paint Studio</option>
                                    <option value="&amp;company=GameProductions">Game Productions</option>
                                    <option value="&amp;company=GAMEREALM">GAME REALM</option>
                                    <option value="&amp;company=Game-Devs">Game-Devs</option>
                                    <option value="&amp;company=Game2Play">Game2Play</option>
                                    <option value="&amp;company=Game3D">Game3D</option>
                                    <option value="&amp;company=game4fun">game4fun</option>
                                    <option value="&amp;company=game8">game8</option>
                                    <option value="&amp;company=Gamealliz">Gamealliz</option>
                                    <option value="&amp;company=Gameart3d">Gameart3d</option>
                                    <option value="&amp;company=Gamebol">Gamebol</option>
                                    <option value="&amp;company=Gamebuilt">Gamebuilt</option>
                                    <option value="&amp;company=Gamedev">Gamedev</option>
                                    <option value="&amp;company=GameDeveloper2D">GameDeveloper2D</option>
                                    <option value="&amp;company=gamedevjana">gamedevjana</option>
                                    <option value="&amp;company=GameDevMaicon">GameDevMaicon</option>
                                    <option value="&amp;company=GameDevs00">GameDevs00</option>
                                    <option value="&amp;company=Gamedvam">Gamedvam</option>
                                    <option value="&amp;company=GameefyStudios">Gameefy Studios</option>
                                    <option value="&amp;company=GameFlare.com">GameFlare.com</option>
                                    <option value="&amp;company=gamegutter.com">gamegutter.com</option>
                                    <option value="&amp;company=gamehotStudio">gamehot Studio</option>
                                    <option value="&amp;company=gamehub">gamehub</option>
                                    <option value="&amp;company=GameIndex">GameIndex</option>
                                    <option value="&amp;company=gamekidgame">gamekidgame</option>
                                    <option value="&amp;company=gameku.id">gameku.id</option>
                                    <option value="&amp;company=GAMELAB">GAMELAB</option>
                                    <option value="&amp;company=GameLoL">GameLoL</option>
                                    <option value="&amp;company=Gamemonks">Gamemonks</option>
                                    <option value="&amp;company=GameNing">GameNing</option>
                                    <option value="&amp;company=gamenjoy">gamenjoy</option>
                                    <option value="&amp;company=gameobiha">gameobiha</option>
                                    <option value="&amp;company=GameOnHai">GameOnHai</option>
                                    <option value="&amp;company=Gameonline.co.id">Gameonline.co.id</option>
                                    <option value="&amp;company=Gameotoria">Gameotoria</option>
                                    <option value="&amp;company=GameOZ">GameOZ</option>
                                    <option value="&amp;company=Gamepro">Gamepro</option>
                                    <option value="&amp;company=GAMERFAN">GAMERFAN</option>
                                    <option value="&amp;company=GAMERNICE">GAMERNICE</option>
                                    <option value="&amp;company=GamersGenie">Gamers Genie</option>
                                    <option value="&amp;company=GamerZity">GamerZity</option>
                                    <option value="&amp;company=GamesandNonsenseGames">Games and Nonsense Games</option>
                                    <option value="&amp;company=GamesGallery">Games Gallery</option>
                                    <option value="&amp;company=GamesHubStudio">Games Hub Studio</option>
                                    <option value="&amp;company=GamesParc">Games Parc</option>
                                    <option value="&amp;company=games-dk">games-dk</option>
                                    <option value="&amp;company=Games-Games">Games-Games</option>
                                    <option value="&amp;company=Games-kids.com">Games-kids.com</option>
                                    <option value="&amp;company=Games-town">Games-town</option>
                                    <option value="&amp;company=Games.Pro">Games.Pro</option>
                                    <option value="&amp;company=Games101">Games101</option>
                                    <option value="&amp;company=Games360">Games360</option>
                                    <option value="&amp;company=Games4Fun">Games4Fun</option>
                                    <option value="&amp;company=GAMES4KING">GAMES4KING</option>
                                    <option value="&amp;company=games54">games54</option>
                                    <option value="&amp;company=GAMES65">GAMES65</option>
                                    <option value="&amp;company=gamesbest">gamesbest</option>
                                    <option value="&amp;company=GamesCreative">GamesCreative</option>
                                    <option value="&amp;company=GamesFine.com">GamesFine.com</option>
                                    <option value="&amp;company=gamesforgame">gamesforgame</option>
                                    <option value="&amp;company=GamesFun">GamesFun</option>
                                    <option value="&amp;company=GamesHub">GamesHub</option>
                                    <option value="&amp;company=GamesHubApp">GamesHubApp</option>
                                    <option value="&amp;company=Gamesigniter">Gamesigniter</option>
                                    <option value="&amp;company=GameSkyDome">GameSkyDome</option>
                                    <option value="&amp;company=gameslab">gameslab</option>
                                    <option value="&amp;company=GamesLand">GamesLand</option>
                                    <option value="&amp;company=gamesmunch.com">gamesmunch.com</option>
                                    <option value="&amp;company=gamesnew">gamesnew</option>
                                    <option value="&amp;company=GamesoftLA">Gamesoft LA</option>
                                    <option value="&amp;company=gamesoyun">gamesoyun</option>
                                    <option value="&amp;company=GAMESpin">GAMESpin</option>
                                    <option value="&amp;company=Gamesplay.io">Gamesplay.io</option>
                                    <option value="&amp;company=Gamesstudio">Gamesstudio</option>
                                    <option value="&amp;company=GamesStudio4U">GamesStudio4U</option>
                                    <option value="&amp;company=GamesYouWant">GamesYouWant</option>
                                    <option value="&amp;company=GamesYug">GamesYug</option>
                                    <option value="&amp;company=Gameterest">Gameterest</option>
                                    <option value="&amp;company=GameTime">GameTime</option>
                                    <option value="&amp;company=GameTop">GameTop</option>
                                    <option value="&amp;company=GameusApp.com">GameusApp.com</option>
                                    <option value="&amp;company=gamewelt">gamewelt</option>
                                    <option value="&amp;company=Gamezas">Gamezas</option>
                                    <option value="&amp;company=gamezastar">gamezastar</option>
                                    <option value="&amp;company=Gamezen">Gamezen</option>
                                    <option value="&amp;company=GAMEZING">GAMEZING</option>
                                    <option value="&amp;company=GameZoneDev">GameZoneDev</option>
                                    <option value="&amp;company=Gamezoon">Gamezoon</option>
                                    <option value="&amp;company=GamingBoothStudios">Gaming Booth Studios</option>
                                    <option value="&amp;company=GamingCafess">Gaming Cafess</option>
                                    <option value="&amp;company=GamingEra">Gaming Era</option>
                                    <option value="&amp;company=GamingHub">Gaming Hub</option>
                                    <option value="&amp;company=GamingStudio">Gaming Studio</option>
                                    <option value="&amp;company=gaming0nft">gaming0nft</option>
                                    <option value="&amp;company=gamingcafe">gamingcafe</option>
                                    <option value="&amp;company=GamingZone">GamingZone</option>
                                    <option value="&amp;company=Gamlist">Gamlist</option>
                                    <option value="&amp;company=gamme">gamme</option>
                                    <option value="&amp;company=Gamotions">Gamotions</option>
                                    <option value="&amp;company=GCS">GCS</option>
                                    <option value="&amp;company=gece3509">gece3509</option>
                                    <option value="&amp;company=GectoLab">GectoLab</option>
                                    <option value="&amp;company=GeeKid-школапрограммирования">GeeKid - школа программирования</option>
                                    <option value="&amp;company=Gembulinch">Gembul inch</option>
                                    <option value="&amp;company=Gemioli">Gemioli</option>
                                    <option value="&amp;company=GermanGames">German Games</option>
                                    <option value="&amp;company=Gerrard">Gerrard</option>
                                    <option value="&amp;company=GesinimoGames">Gesinimo Games</option>
                                    <option value="&amp;company=GGDESIGN">GGDESIGN</option>
                                    <option value="&amp;company=GGS">GGS</option>
                                    <option value="&amp;company=GhosterGames">Ghoster Games</option>
                                    <option value="&amp;company=gimdev08">gimdev08</option>
                                    <option value="&amp;company=Giogame">Giogame</option>
                                    <option value="&amp;company=GiraffeGames">Giraffe Games</option>
                                    <option value="&amp;company=girlsgames">girlsgames</option>
                                    <option value="&amp;company=GLITIK">GLITIK</option>
                                    <option value="&amp;company=GMMedia">GM Media</option>
                                    <option value="&amp;company=GMG">GMG</option>
                                    <option value="&amp;company=GoTech">Go Tech</option>
                                    <option value="&amp;company=GoGames">GoGames</option>
                                    <option value="&amp;company=GoGoMan">GoGoMan</option>
                                    <option value="&amp;company=goodboy">goodboy</option>
                                    <option value="&amp;company=GoodGamedev">GoodGamedev</option>
                                    <option value="&amp;company=GoodVibesGames.com">GoodVibesGames.com</option>
                                    <option value="&amp;company=Goolgames.com">Goolgames.com</option>
                                    <option value="&amp;company=GoPlay">GoPlay</option>
                                    <option value="&amp;company=GoTet">GoTet</option>
                                    <option value="&amp;company=GouriaGame">GouriaGame</option>
                                    <option value="&amp;company=grandgames.space">grandgames.space</option>
                                    <option value="&amp;company=grimmtec">grimmtec</option>
                                    <option value="&amp;company=GrindingGames">Grinding Games</option>
                                    <option value="&amp;company=GrowGaming">Grow Gaming</option>
                                    <option value="&amp;company=GRZ">GRZ </option>
                                    <option value="&amp;company=GuerilaGames">Guerila Games</option>
                                    <option value="&amp;company=GuiGhostLLC">GuiGhost LLC</option>
                                    <option value="&amp;company=GuikelGames">Guikel Games</option>
                                    <option value="&amp;company=GxSpace">Gx Space</option>
                                    <option value="&amp;company=H5Games">H5 Games</option>
                                    <option value="&amp;company=Hajoui">Hajoui</option>
                                    <option value="&amp;company=hanafidev">hanafidev</option>
                                    <option value="&amp;company=HappyGames">Happy Games</option>
                                    <option value="&amp;company=happyGames">happyGames</option>
                                    <option value="&amp;company=HappyGameStudio">HappyGameStudio</option>
                                    <option value="&amp;company=happyland">happyland</option>
                                    <option value="&amp;company=HarbiGames">Harbi Games</option>
                                    <option value="&amp;company=HasanSerdalKöksal">Hasan Serdal Köksal</option>
                                    <option value="&amp;company=HasanKlncc">HasanKlncc</option>
                                    <option value="&amp;company=HatredEntertainment">Hatred Entertainment</option>
                                    <option value="&amp;company=Haykdev">Haykdev</option>
                                    <option value="&amp;company=HBGameStudio">HB Game Studio</option>
                                    <option value="&amp;company=Hdev">Hdev</option>
                                    <option value="&amp;company=HelcioLima">Helcio Lima</option>
                                    <option value="&amp;company=HepyGames">Hepy Games</option>
                                    <option value="&amp;company=HexaGames">Hexa Games</option>
                                    <option value="&amp;company=hexapp">hexapp</option>
                                    <option value="&amp;company=HighGames">HighGames</option>
                                    <option value="&amp;company=HihoyGames">Hihoy Games</option>
                                    <option value="&amp;company=HihoyGamesStudio">Hihoy Games Studio</option>
                                    <option value="&amp;company=HillinGames">HillinGames</option>
                                    <option value="&amp;company=HitBox">HitBox</option>
                                    <option value="&amp;company=HITyaraGames">HITyara Games</option>
                                    <option value="&amp;company=hmp">hmp</option>
                                    <option value="&amp;company=HMTECH">HMTECH</option>
                                    <option value="&amp;company=HolaGames">HolaGames</option>
                                    <option value="&amp;company=HOMEIICLTD">HOMEIIC LTD</option>
                                    <option value="&amp;company=hongan">hongan</option>
                                    <option value="&amp;company=Horizonicblue">Horizonicblue</option>
                                    <option value="&amp;company=HotGames">HotGames</option>
                                    <option value="&amp;company=hotOnline">hotOnline</option>
                                    <option value="&amp;company=hoxxin">hoxxin</option>
                                    <option value="&amp;company=hsinidevapp">hsinidevapp</option>
                                    <option value="&amp;company=HTML5Oyun">HTML5 Oyun</option>
                                    <option value="&amp;company=HTML5Dev">HTML5Dev</option>
                                    <option value="&amp;company=html5minigame.com">html5minigame.com</option>
                                    <option value="&amp;company=HuloGames">Hulo Games</option>
                                    <option value="&amp;company=HumanbalanceLtd.">Humanbalance Ltd.</option>
                                    <option value="&amp;company=HyHyGames.com">HyHyGames.com</option>
                                    <option value="&amp;company=HyperCasualBoss">HyperCasualBoss</option>
                                    <option value="&amp;company=IbraTechnology">IbraTechnology</option>
                                    <option value="&amp;company=Icaneefoeva">Icaneefoeva</option>
                                    <option value="&amp;company=IDAGamezone">IDA Gamezone</option>
                                    <option value="&amp;company=idefixe">idefixe </option>
                                    <option value="&amp;company=IGamzs">IGamzs</option>
                                    <option value="&amp;company=igirlgames">igirlgames</option>
                                    <option value="&amp;company=Igr">Igr</option>
                                    <option value="&amp;company=Igri">Igri</option>
                                    <option value="&amp;company=igroutka">igroutka</option>
                                    <option value="&amp;company=IkonGames">IkonGames</option>
                                    <option value="&amp;company=IllusionsGames">Illusions Games</option>
                                    <option value="&amp;company=Ineasoft">Ineasoft</option>
                                    <option value="&amp;company=Inertia">Inertia</option>
                                    <option value="&amp;company=Ing.MichalMihálik-SoftwareSolutions">Ing. Michal Mihálik - Software Solutions</option>
                                    <option value="&amp;company=IngmarWittmann">Ingmar Wittmann</option>
                                    <option value="&amp;company=InKHouse">InKHouse</option>
                                    <option value="&amp;company=InlogicSoftwares.r.o.">Inlogic Software s.r.o.</option>
                                    <option value="&amp;company=inn3r">inn3r</option>
                                    <option value="&amp;company=Innovsatrapp">Innovsatrapp</option>
                                    <option value="&amp;company=InstantGamesStudio">Instant Games Studio</option>
                                    <option value="&amp;company=InstantOnlineGames.com">InstantOnlineGames.com</option>
                                    <option value="&amp;company=INTCH">INTCH</option>
                                    <option value="&amp;company=Intellobytes">Intellobytes</option>
                                    <option value="&amp;company=IntersoftLtd">Intersoft Ltd</option>
                                    <option value="&amp;company=inyourgames.com">inyourgames.com</option>
                                    <option value="&amp;company=IPGuselnikovValeriyAndreevich">IP Guselnikov Valeriy Andreevich</option>
                                    <option value="&amp;company=ippo">ippo</option>
                                    <option value="&amp;company=IppoGames">IppoGames</option>
                                    <option value="&amp;company=IriySoft">IriySoft</option>
                                    <option value="&amp;company=IsaskeGames">Isaske Games</option>
                                    <option value="&amp;company=Israsoft">Israsoft</option>
                                    <option value="&amp;company=ivigames.com">ivigames.com</option>
                                    <option value="&amp;company=IvyGames">Ivy Games</option>
                                    <option value="&amp;company=Iwense">Iwense</option>
                                    <option value="&amp;company=ixigames.com">ixigames.com</option>
                                    <option value="&amp;company=IYIGAMES">IYIGAMES</option>
                                    <option value="&amp;company=IzvolgarStudio">Izvolgar Studio</option>
                                    <option value="&amp;company=Jakapp">Jakapp</option>
                                    <option value="&amp;company=JansonZhai">JansonZhai</option>
                                    <option value="&amp;company=JeFawksSpaghettorium">JeFawks Spaghettorium</option>
                                    <option value="&amp;company=JellyGames">Jelly Games</option>
                                    <option value="&amp;company=Jetlab">Jetlab</option>
                                    <option value="&amp;company=JettiGames">Jetti Games</option>
                                    <option value="&amp;company=Jeuenligne">Jeuenligne</option>
                                    <option value="&amp;company=JoaoMarcos">Joao Marcos</option>
                                    <option value="&amp;company=JOeStudio.inc">JOe Studio.inc</option>
                                    <option value="&amp;company=JogarJogos">JogarJogos</option>
                                    <option value="&amp;company=JogosGratisPro">Jogos Gratis Pro</option>
                                    <option value="&amp;company=JollyGames">JollyGames</option>
                                    <option value="&amp;company=Joy23">Joy23</option>
                                    <option value="&amp;company=JOYNOW">JOYNOW</option>
                                    <option value="&amp;company=JoypadMedia">Joypad Media</option>
                                    <option value="&amp;company=joystudio">joystudio</option>
                                    <option value="&amp;company=jssgame">jssgame</option>
                                    <option value="&amp;company=JuegosDestro">JuegosDestro</option>
                                    <option value="&amp;company=JumpGame">JumpGame</option>
                                    <option value="&amp;company=Justforward">Justforward</option>
                                    <option value="&amp;company=JustGameDev">JustGameDev</option>
                                    <option value="&amp;company=JZJO.COM">JZJO.COM</option>
                                    <option value="&amp;company=KalaiArasan">KalaiArasan</option>
                                    <option value="&amp;company=Kalimin">Kalimin</option>
                                    <option value="&amp;company=karo">karo</option>
                                    <option value="&amp;company=KasoiGame">KasoiGame</option>
                                    <option value="&amp;company=KataniGames">KataniGames</option>
                                    <option value="&amp;company=KawaiiGames">Kawaii Games</option>
                                    <option value="&amp;company=KAYDSoftware">KAYD Software</option>
                                    <option value="&amp;company=kbvpneofit">kbvpneofit</option>
                                    <option value="&amp;company=KDen">KDen</option>
                                    <option value="&amp;company=KECHGAMING">KECHGAMING</option>
                                    <option value="&amp;company=Keeru9">Keeru9</option>
                                    <option value="&amp;company=KennyGames">KennyGames</option>
                                    <option value="&amp;company=KevinTech">Kevin Tech</option>
                                    <option value="&amp;company=KGonen">KGonen</option>
                                    <option value="&amp;company=khalidraf">khalidraf</option>
                                    <option value="&amp;company=KidGame">KidGame</option>
                                    <option value="&amp;company=KidsBus">KidsBus</option>
                                    <option value="&amp;company=kidsgame">kidsgame</option>
                                    <option value="&amp;company=kidsgamesplay">kidsgamesplay</option>
                                    <option value="&amp;company=KingdomofPixels">Kingdom of Pixels</option>
                                    <option value="&amp;company=kizGame.com">kizGame.com</option>
                                    <option value="&amp;company=Kizi10">Kizi10</option>
                                    <option value="&amp;company=kkgames.com">kkgames.com</option>
                                    <option value="&amp;company=KlemenZ">Klemen Z</option>
                                    <option value="&amp;company=Kooxpi">Kooxpi</option>
                                    <option value="&amp;company=kor6k">kor6k</option>
                                    <option value="&amp;company=kovcrafts">kovcrafts</option>
                                    <option value="&amp;company=Kozhagames">Kozha games</option>
                                    <option value="&amp;company=kraloyunskor.com">kraloyunskor.com</option>
                                    <option value="&amp;company=KSGames">KS Games</option>
                                    <option value="&amp;company=ksidyBuild">ksidyBuild</option>
                                    <option value="&amp;company=KuttyCompany">Kutty Company</option>
                                    <option value="&amp;company=KyryloBespoludin">Kyrylo Bespoludin</option>
                                    <option value="&amp;company=Labogames">Labogames</option>
                                    <option value="&amp;company=LaManyGames">LaManyGames</option>
                                    <option value="&amp;company=LapaMauve">LapaMauve</option>
                                    <option value="&amp;company=lapxiro">lapxiro</option>
                                    <option value="&amp;company=LaykaStudio">Layka Studio</option>
                                    <option value="&amp;company=LazyShaman">LazyShaman</option>
                                    <option value="&amp;company=LDGEngineering">LDGEngineering</option>
                                    <option value="&amp;company=LeoGames">LeoGames</option>
                                    <option value="&amp;company=LEOGAMESINC">LEOGAMESINC</option>
                                    <option value="&amp;company=LevShvetsov">Lev Shvetsov</option>
                                    <option value="&amp;company=LibBota">LibBota</option>
                                    <option value="&amp;company=lifegamextrem">lifegamextrem </option>
                                    <option value="&amp;company=LifeStyleGAMES">LifeStyleGAMES</option>
                                    <option value="&amp;company=lilshake">lilshake</option>
                                    <option value="&amp;company=LimitGames">LimitGames</option>
                                    <option value="&amp;company=LinearGames">Linear Games</option>
                                    <option value="&amp;company=linklik">linklik</option>
                                    <option value="&amp;company=LIOP">LIOP</option>
                                    <option value="&amp;company=LisGames">LisGames</option>
                                    <option value="&amp;company=LittleMissle">Little Missle</option>
                                    <option value="&amp;company=LizSmith">Liz Smith</option>
                                    <option value="&amp;company=lo3abi.com">lo3abi.com</option>
                                    <option value="&amp;company=LofGames.com">LofGames.com</option>
                                    <option value="&amp;company=LogFuncLtd">LogFunc Ltd</option>
                                    <option value="&amp;company=LOKO8">LOKO8</option>
                                    <option value="&amp;company=LoopPlay">LoopPlay</option>
                                    <option value="&amp;company=LOOWZ">LOOWZ</option>
                                    <option value="&amp;company=Loregret">Loregret</option>
                                    <option value="&amp;company=LoveDev">LoveDev</option>
                                    <option value="&amp;company=LovelyGames">Lovely Games</option>
                                    <option value="&amp;company=lover3d">lover3d</option>
                                    <option value="&amp;company=Ltd-prodev">Ltd-prodev</option>
                                    <option value="&amp;company=LucasSanBra">LucasSanBra</option>
                                    <option value="&amp;company=LudusDare">Ludus Dare</option>
                                    <option value="&amp;company=luiemela">luiemela</option>
                                    <option value="&amp;company=M1000">M1000</option>
                                    <option value="&amp;company=mabno">mabno</option>
                                    <option value="&amp;company=MADExtreme">MAD Extreme</option>
                                    <option value="&amp;company=MadBuffer">MadBuffer</option>
                                    <option value="&amp;company=MadPuffers">MadPuffers</option>
                                    <option value="&amp;company=Madriver">Madriver</option>
                                    <option value="&amp;company=Mageclash.io">Mageclash.io</option>
                                    <option value="&amp;company=MagnificStudios">Magnific Studios</option>
                                    <option value="&amp;company=mahgames7253">mahgames7253</option>
                                    <option value="&amp;company=MaksimKochergin">Maksim Kochergin</option>
                                    <option value="&amp;company=Mamista">Mamista</option>
                                    <option value="&amp;company=MapiGames">Mapi Games</option>
                                    <option value="&amp;company=Mar4i">Mar4i</option>
                                    <option value="&amp;company=Marcus7z">Marcus7z</option>
                                    <option value="&amp;company=MarketGames">MarketGames</option>
                                    <option value="&amp;company=MartinPereson">Martin Pereson</option>
                                    <option value="&amp;company=MaskedGames">MaskedGames</option>
                                    <option value="&amp;company=MassiveCube">Massive Cube</option>
                                    <option value="&amp;company=Mastadan">Masta dan</option>
                                    <option value="&amp;company=MasterGame">MasterGame</option>
                                    <option value="&amp;company=MasterMb">MasterMb</option>
                                    <option value="&amp;company=MathNook">MathNook</option>
                                    <option value="&amp;company=MathNook2">MathNook 2</option>
                                    <option value="&amp;company=Matrix">Matrix</option>
                                    <option value="&amp;company=mattiesgames.com">mattiesgames.com</option>
                                    <option value="&amp;company=Mauriz">Mauriz</option>
                                    <option value="&amp;company=MavoGame">MavoGame</option>
                                    <option value="&amp;company=maxim">maxim</option>
                                    <option value="&amp;company=Maxiretos">Maxiretos</option>
                                    <option value="&amp;company=maz.games">maz.games</option>
                                    <option value="&amp;company=MBEntertainment">MB Entertainment</option>
                                    <option value="&amp;company=MCArth">MCArth</option>
                                    <option value="&amp;company=MDVGames">MDV Games</option>
                                    <option value="&amp;company=MebGames">MebGames</option>
                                    <option value="&amp;company=Medazd">Medazd</option>
                                    <option value="&amp;company=MegaCoolGames">MegaCool Games</option>
                                    <option value="&amp;company=Mekshapp">Mekshapp</option>
                                    <option value="&amp;company=Memomine">Memomine</option>
                                    <option value="&amp;company=menagames">menagames</option>
                                    <option value="&amp;company=Merson">Merson</option>
                                    <option value="&amp;company=mesfan">mesfan</option>
                                    <option value="&amp;company=MetaGames">MetaGames</option>
                                    <option value="&amp;company=Metajoy">Metajoy</option>
                                    <option value="&amp;company=MewtonGames">Mewton Games</option>
                                    <option value="&amp;company=MeyaGames">MeyaGames</option>
                                    <option value="&amp;company=MezzoGames">Mezzo Games</option>
                                    <option value="&amp;company=MFun">MFun</option>
                                    <option value="&amp;company=MGS">MGS</option>
                                    <option value="&amp;company=MHK">MHK</option>
                                    <option value="&amp;company=MinanStudios">MinanStudios</option>
                                    <option value="&amp;company=Mindfoggames">Mindfog games</option>
                                    <option value="&amp;company=miniFun">miniFun</option>
                                    <option value="&amp;company=MinitofuGames">Minitofu Games </option>
                                    <option value="&amp;company=minivers.online">minivers.online</option>
                                    <option value="&amp;company=minyikeji">minyi keji</option>
                                    <option value="&amp;company=mir-games.net">mir-games.net</option>
                                    <option value="&amp;company=Misc.261Games">Misc.261 Games</option>
                                    <option value="&amp;company=mitsuhashish">mitsuhashish</option>
                                    <option value="&amp;company=Mixgame.net">Mixgame.net</option>
                                    <option value="&amp;company=mixworldgames">mixworldgames</option>
                                    <option value="&amp;company=MMM">MMM</option>
                                    <option value="&amp;company=mmors">mmors</option>
                                    <option value="&amp;company=MoanaGames">Moana Games</option>
                                    <option value="&amp;company=MobiClick">MobiClick</option>
                                    <option value="&amp;company=mobiecool">mobiecool</option>
                                    <option value="&amp;company=MobileGame,LLC">Mobile Game, LLC</option>
                                    <option value="&amp;company=MobileSportsTime">Mobile Sports Time</option>
                                    <option value="&amp;company=Mobilearcades.com">Mobilearcades.com</option>
                                    <option value="&amp;company=Mofunga">Mofunga</option>
                                    <option value="&amp;company=mohandis">mohandis</option>
                                    <option value="&amp;company=MOHSINGAMES">MOHSIN GAMES</option>
                                    <option value="&amp;company=molamul">molamul</option>
                                    <option value="&amp;company=MonstroCat">MonstroCat</option>
                                    <option value="&amp;company=Moo-Verse">Moo-Verse</option>
                                    <option value="&amp;company=Moonite">Moonite</option>
                                    <option value="&amp;company=MoonMedia">MoonMedia</option>
                                    <option value="&amp;company=Morabitos">Morabitos</option>
                                    <option value="&amp;company=MoreGames">More Games</option>
                                    <option value="&amp;company=Morningstar.Io">Morningstar.Io</option>
                                    <option value="&amp;company=MostafaEllethy">Mostafa Ellethy</option>
                                    <option value="&amp;company=MostafaZaki">Mostafa Zaki </option>
                                    <option value="&amp;company=MotiGames">Moti Games</option>
                                    <option value="&amp;company=MotionTheory">Motion Theory</option>
                                    <option value="&amp;company=MountGamer">Mount Gamer</option>
                                    <option value="&amp;company=MountainGame">Mountain Game</option>
                                    <option value="&amp;company=MRBestGames">MR Best Games</option>
                                    <option value="&amp;company=MRGAMES">MR GAMES</option>
                                    <option value="&amp;company=MRGaming">MR Gaming</option>
                                    <option value="&amp;company=MrGames">MrGames</option>
                                    <option value="&amp;company=MRN">MRN</option>
                                    <option value="&amp;company=mtapush">mtapush</option>
                                    <option value="&amp;company=MTIGAPPS">MTIGAPPS</option>
                                    <option value="&amp;company=MuhammadAmirulHaq">Muhammad Amirul Haq</option>
                                    <option value="&amp;company=MULTOIGRI">MULTOIGRI</option>
                                    <option value="&amp;company=myhiddengame">myhiddengame</option>
                                    <option value="&amp;company=mzworks">mzworks</option>
                                    <option value="&amp;company=N2kStudio">N2kStudio</option>
                                    <option value="&amp;company=NacerGames">Nacer Games</option>
                                    <option value="&amp;company=NaitStudio">NaitStudio</option>
                                    <option value="&amp;company=najingailisi">najingailisi</option>
                                    <option value="&amp;company=NaleDev">NaleDev</option>
                                    <option value="&amp;company=NanjingmaileyouNetworkTechnologyCo.,Ltd">Nanjing maileyou Network Technology Co., Ltd</option>
                                    <option value="&amp;company=NanoProd">NanoProd</option>
                                    <option value="&amp;company=NapTechGames">NapTech Games</option>
                                    <option value="&amp;company=NAPTECHLABSLTD">NAPTECH LABS LTD</option>
                                    <option value="&amp;company=nativieasyapps">nativi easy apps</option>
                                    <option value="&amp;company=nau.kids">nau.kids</option>
                                    <option value="&amp;company=nau.kidsgames">nau.kids games</option>
                                    <option value="&amp;company=nau.studio">nau.studio</option>
                                    <option value="&amp;company=Nefdor">Nefdor</option>
                                    <option value="&amp;company=Neolux">Neolux</option>
                                    <option value="&amp;company=NeoxLLC">Neox LLC</option>
                                    <option value="&amp;company=NEOXGAME">NEOXGAME</option>
                                    <option value="&amp;company=NewGames">New Games</option>
                                    <option value="&amp;company=NewKidsGames">New Kids Games</option>
                                    <option value="&amp;company=NewAppHtml">NewAppHtml</option>
                                    <option value="&amp;company=newgamess">newgamess</option>
                                    <option value="&amp;company=NewnessGames">Newness Games</option>
                                    <option value="&amp;company=newsgames">news games</option>
                                    <option value="&amp;company=NextGames">NextGames</option>
                                    <option value="&amp;company=Ngsufian">Ng sufian</option>
                                    <option value="&amp;company=nicewan8">nicewan8</option>
                                    <option value="&amp;company=nikaki">nikaki</option>
                                    <option value="&amp;company=nikolayship">nikolayship</option>
                                    <option value="&amp;company=Nikvai">Nikvai</option>
                                    <option value="&amp;company=Ninagames">Nina games</option>
                                    <option value="&amp;company=Ninagames">Ninagames</option>
                                    <option value="&amp;company=NjordGameStudio">Njord Game Studio</option>
                                    <option value="&amp;company=nk7reskin">nk7reskin</option>
                                    <option value="&amp;company=NNT">NNT</option>
                                    <option value="&amp;company=NoOutlinks">No Outlinks</option>
                                    <option value="&amp;company=NoaDev">NoaDev</option>
                                    <option value="&amp;company=nogatgames">nogat games</option>
                                    <option value="&amp;company=NoobvsProgame">Noob vs Pro game</option>
                                    <option value="&amp;company=NortheasternCat">Northeastern Cat</option>
                                    <option value="&amp;company=NovaGames">Nova Games</option>
                                    <option value="&amp;company=NovelGamesLimited">Novel Games Limited</option>
                                    <option value="&amp;company=NPTacgorian">NPTacgorian</option>
                                    <option value="&amp;company=NuGames">Nu Games</option>
                                    <option value="&amp;company=OAGNetwork">OAG Network</option>
                                    <option value="&amp;company=Oazis">Oazis</option>
                                    <option value="&amp;company=OcelotGames">OcelotGames</option>
                                    <option value="&amp;company=OdoGames">Odo Games</option>
                                    <option value="&amp;company=Ohayō">Ohayō</option>
                                    <option value="&amp;company=OKIgames">OKI games</option>
                                    <option value="&amp;company=OLDguardgames">OLD guard games</option>
                                    <option value="&amp;company=OleAle">OleAle</option>
                                    <option value="&amp;company=OMInc.">OM Inc.</option>
                                    <option value="&amp;company=omardev">omar dev</option>
                                    <option value="&amp;company=OnduckGames">Onduck Games</option>
                                    <option value="&amp;company=OneBigLove">OneBigLove</option>
                                    <option value="&amp;company=OneBiteGames">OneBite Games</option>
                                    <option value="&amp;company=ONEEYESTUDIO">ONEEYE STUDIO</option>
                                    <option value="&amp;company=OneMoon">OneMoon</option>
                                    <option value="&amp;company=OnlineGames.io">OnlineGames.io</option>
                                    <option value="&amp;company=OnlineGamess">OnlineGamess</option>
                                    <option value="&amp;company=onurdemirgames">onurdemirgames</option>
                                    <option value="&amp;company=OOOFRIVEIINTERAKTIV">OOO FRIVEI INTERAKTIV</option>
                                    <option value="&amp;company=Orcavan">Orcavan</option>
                                    <option value="&amp;company=orosulagames">orosulagames</option>
                                    <option value="&amp;company=Oultrox">Oultrox</option>
                                    <option value="&amp;company=outlive.ai">outlive.ai</option>
                                    <option value="&amp;company=Owagame">Owagame</option>
                                    <option value="&amp;company=OY">OY</option>
                                    <option value="&amp;company=oyun.info">oyun.info</option>
                                    <option value="&amp;company=OyunCanavari">OyunCanavari</option>
                                    <option value="&amp;company=oyuncuk">oyuncuk</option>
                                    <option value="&amp;company=PaintStudios">Paint Studios</option>
                                    <option value="&amp;company=pancake">pancake</option>
                                    <option value="&amp;company=Paradine">Paradine</option>
                                    <option value="&amp;company=ParadoxPlay">ParadoxPlay</option>
                                    <option value="&amp;company=parakul">parakul</option>
                                    <option value="&amp;company=ParkerGames">Parker Games</option>
                                    <option value="&amp;company=patriciagames">patriciagames</option>
                                    <option value="&amp;company=PaulHung">Paul Hung</option>
                                    <option value="&amp;company=PeakselGamesS.A.">Peaksel Games S.A.</option>
                                    <option value="&amp;company=PEKA">PEKA</option>
                                    <option value="&amp;company=PerfectCircleLtd">Perfect Circle Ltd</option>
                                    <option value="&amp;company=PhaseOne">PhaseOne</option>
                                    <option value="&amp;company=PhenomenalGAMES">Phenomenal GAMES</option>
                                    <option value="&amp;company=Phoenixgamestudio">Phoenix game studio</option>
                                    <option value="&amp;company=phonex">phonex</option>
                                    <option value="&amp;company=PhysicalForm">Physical Form</option>
                                    <option value="&amp;company=PicaxelTechPte">Picaxel Tech Pte</option>
                                    <option value="&amp;company=PidomTech">PidomTech</option>
                                    <option value="&amp;company=PikachuGames">Pikachu Games</option>
                                    <option value="&amp;company=pikago">pikago</option>
                                    <option value="&amp;company=PikaGoo.com">PikaGoo.com</option>
                                    <option value="&amp;company=PIKPOK">PIKPOK</option>
                                    <option value="&amp;company=PiwlandGames">PiwlandGames</option>
                                    <option value="&amp;company=PixelCave">Pixel Cave</option>
                                    <option value="&amp;company=PixelUniversia">Pixel Universia</option>
                                    <option value="&amp;company=Pixellicious">Pixellicious</option>
                                    <option value="&amp;company=PlanetGame">Planet Game</option>
                                    <option value="&amp;company=Planetonia">Planetonia</option>
                                    <option value="&amp;company=PlanetStudios">PlanetStudios</option>
                                    <option value="&amp;company=PlayGames">Play Games</option>
                                    <option value="&amp;company=PlayKids">Play Kids</option>
                                    <option value="&amp;company=PLAY365">PLAY365</option>
                                    <option value="&amp;company=Playcombo.com">Playcombo.com</option>
                                    <option value="&amp;company=Playcutegames.com">Playcutegames.com</option>
                                    <option value="&amp;company=PlayerOnline">PlayerOnline</option>
                                    <option value="&amp;company=playgame">playgame</option>
                                    <option value="&amp;company=playit-online">playit-online</option>
                                    <option value="&amp;company=Playnec.com">Playnec.com</option>
                                    <option value="&amp;company=playnewgames">playnewgames</option>
                                    <option value="&amp;company=PlayNowLab.com">PlayNowLab.com</option>
                                    <option value="&amp;company=playonline.top">playonline.top</option>
                                    <option value="&amp;company=PLAYS.CO">PLAYS.CO</option>
                                    <option value="&amp;company=playschoolgames">playschoolgames</option>
                                    <option value="&amp;company=playschoolgames.com">playschoolgames.com</option>
                                    <option value="&amp;company=Playtouch">Playtouch</option>
                                    <option value="&amp;company=Pnfreegames.com">Pnfreegames.com</option>
                                    <option value="&amp;company=PocketGames">Pocket Games</option>
                                    <option value="&amp;company=pogames">pogames</option>
                                    <option value="&amp;company=PoisonGames">Poison Games</option>
                                    <option value="&amp;company=Pokikids">Poki kids</option>
                                    <option value="&amp;company=PokiOnline">Poki Online</option>
                                    <option value="&amp;company=pokiFun">pokiFun</option>
                                    <option value="&amp;company=POKO8">POKO8</option>
                                    <option value="&amp;company=Polantronic">Polantronic</option>
                                    <option value="&amp;company=PolarGames">Polar Games</option>
                                    <option value="&amp;company=PolarisGameStudio">PolarisGameStudio</option>
                                    <option value="&amp;company=PopGames">PopGames</option>
                                    <option value="&amp;company=PowerSlashStudios">PowerSlash Studios</option>
                                    <option value="&amp;company=PrickleGames">Prickle Games</option>
                                    <option value="&amp;company=progdamn">progdamn</option>
                                    <option value="&amp;company=ProngoGroupLLC.">Prongo Group LLC.</option>
                                    <option value="&amp;company=Prossino">Prossino</option>
                                    <option value="&amp;company=prostoplay">prostoplay</option>
                                    <option value="&amp;company=ProtoGames">Proto Games</option>
                                    <option value="&amp;company=PUZZLEDEV">PUZZLE DEV</option>
                                    <option value="&amp;company=puzzlegame">puzzle game</option>
                                    <option value="&amp;company=Puzzle2Next">Puzzle2Next</option>
                                    <option value="&amp;company=PuzzleGames">PuzzleGames</option>
                                    <option value="&amp;company=PuzzlesGamesOnline.com">PuzzlesGamesOnline.com</option>
                                    <option value="&amp;company=pxlbay">pxlbay</option>
                                    <option value="&amp;company=q3olegka">q3olegka</option>
                                    <option value="&amp;company=QbisoftGameStudio">Qbisoft Game Studio</option>
                                    <option value="&amp;company=Qeshi">Qeshi</option>
                                    <option value="&amp;company=QiGamesStudio">QiGames Studio</option>
                                    <option value="&amp;company=QkyGames">QkyGames</option>
                                    <option value="&amp;company=QualityEasyShop">Quality Easy Shop</option>
                                    <option value="&amp;company=Quiz">Quiz</option>
                                    <option value="&amp;company=R1Games.com">R1Games.com</option>
                                    <option value="&amp;company=Rachidev">Rachidev</option>
                                    <option value="&amp;company=RADBROTHERS">RAD BROTHERS</option>
                                    <option value="&amp;company=RaguronIT">Raguron IT</option>
                                    <option value="&amp;company=RainbowStudio">Rainbow Studio</option>
                                    <option value="&amp;company=Raiper34">Raiper34</option>
                                    <option value="&amp;company=RakechDev">Rakech Dev</option>
                                    <option value="&amp;company=ralfekiyo">ralfekiyo</option>
                                    <option value="&amp;company=rampgamerz">ramp gamerz</option>
                                    <option value="&amp;company=RAMSER">RAMSER</option>
                                    <option value="&amp;company=ramsey">ramsey</option>
                                    <option value="&amp;company=Ravalmatic">Ravalmatic</option>
                                    <option value="&amp;company=RBIN">RBIN</option>
                                    <option value="&amp;company=RBPGames">RBP Games</option>
                                    <option value="&amp;company=RDVIndieGames">RDV Indie Games</option>
                                    <option value="&amp;company=REGAMES">RE GAMES</option>
                                    <option value="&amp;company=RealGamer">Real Gamer</option>
                                    <option value="&amp;company=RebelRyk">RebelRyk</option>
                                    <option value="&amp;company=RedDiamondGames">Red Diamond Games</option>
                                    <option value="&amp;company=redfoc">redfoc</option>
                                    <option value="&amp;company=redoinfs">redoinfs</option>
                                    <option value="&amp;company=RedolApps">RedolApps</option>
                                    <option value="&amp;company=ReinarteGames">Reinarte Games</option>
                                    <option value="&amp;company=Relicware">Relicware</option>
                                    <option value="&amp;company=RenanGames">Renan Games</option>
                                    <option value="&amp;company=Replay10">Replay10</option>
                                    <option value="&amp;company=RetroDries">RetroDries</option>
                                    <option value="&amp;company=Retrostyle">Retrostyle</option>
                                    <option value="&amp;company=RH-DEV">RH-DEV</option>
                                    <option value="&amp;company=RHMInteractiveOU">RHM Interactive OU</option>
                                    <option value="&amp;company=RicardoCox">Ricardo Cox</option>
                                    <option value="&amp;company=RicciGame">Ricci Game</option>
                                    <option value="&amp;company=RichGames">Rich Games</option>
                                    <option value="&amp;company=ricreator">ricreator</option>
                                    <option value="&amp;company=Rigalo">Rigalo</option>
                                    <option value="&amp;company=RipoGame">RipoGame</option>
                                    <option value="&amp;company=RobertCastillo">Robert Castillo</option>
                                    <option value="&amp;company=RoboWhale">RoboWhale</option>
                                    <option value="&amp;company=RocketGames">Rocket Games</option>
                                    <option value="&amp;company=RocketStudio">Rocket Studio</option>
                                    <option value="&amp;company=Roro8.COM">Roro8.COM</option>
                                    <option value="&amp;company=Rousafgames">Rousaf games</option>
                                    <option value="&amp;company=RRUGAME">RRUGAME</option>
                                    <option value="&amp;company=RsStudio">Rs Studio</option>
                                    <option value="&amp;company=rungames.org">rungames.org</option>
                                    <option value="&amp;company=RythmeGames">RythmeGames</option>
                                    <option value="&amp;company=R_Games">R_Games</option>
                                    <option value="&amp;company=S22.su">S22.su</option>
                                    <option value="&amp;company=saalavar">saalavar</option>
                                    <option value="&amp;company=SachinDas">Sachin Das</option>
                                    <option value="&amp;company=SafingInc">Safing Inc</option>
                                    <option value="&amp;company=SakiGames.com">SakiGames.com</option>
                                    <option value="&amp;company=SakoDEV">SakoDEV</option>
                                    <option value="&amp;company=SaltPastelStudio">Salt Pastel Studio</option>
                                    <option value="&amp;company=SarpGames">SarpGames</option>
                                    <option value="&amp;company=Sarunas">Sarunas </option>
                                    <option value="&amp;company=Satewold">Satewold</option>
                                    <option value="&amp;company=SaturnGames">Saturn Games</option>
                                    <option value="&amp;company=Savelev">Savelev</option>
                                    <option value="&amp;company=SBFGames">SBFGames</option>
                                    <option value="&amp;company=SBHGames">SBHGames</option>
                                    <option value="&amp;company=SeasonQuest">SeasonQuest</option>
                                    <option value="&amp;company=sega16">sega16</option>
                                    <option value="&amp;company=SENSORNOTES">SENSOR NOTES</option>
                                    <option value="&amp;company=SergioSST">SergioSST</option>
                                    <option value="&amp;company=SeryasGames">Seryas Games</option>
                                    <option value="&amp;company=SHGames">SH Games</option>
                                    <option value="&amp;company=SHADOWBEAST">SHADOW BEAST</option>
                                    <option value="&amp;company=SharedDreamsStudios">Shared Dreams Studios</option>
                                    <option value="&amp;company=SheepStudiosLLC">Sheep Studios LLC</option>
                                    <option value="&amp;company=ShivayGames">Shivay Games</option>
                                    <option value="&amp;company=ShmidthsOne">Shmidths One</option>
                                    <option value="&amp;company=shootingeducation">shooting education</option>
                                    <option value="&amp;company=ShootingGames">ShootingGames</option>
                                    <option value="&amp;company=SIALightsourceGames">SIA Lightsource Games</option>
                                    <option value="&amp;company=sienargames">sienargames</option>
                                    <option value="&amp;company=SIMAYA">SIMAYA</option>
                                    <option value="&amp;company=SIMOELLTD">SIMOEL LTD</option>
                                    <option value="&amp;company=simplegames">simple games</option>
                                    <option value="&amp;company=sina167">sina 167</option>
                                    <option value="&amp;company=SINANE">SINANE</option>
                                    <option value="&amp;company=Singapro">Singapro</option>
                                    <option value="&amp;company=SkyApk">SkyApk</option>
                                    <option value="&amp;company=SKYGAMES3D">SKYGAMES 3D</option>
                                    <option value="&amp;company=SleepyApe">SleepyApe</option>
                                    <option value="&amp;company=SlopeRunDev">Slope Run Dev</option>
                                    <option value="&amp;company=sluggames">slug games</option>
                                    <option value="&amp;company=Smartline-Games">Smartline-Games</option>
                                    <option value="&amp;company=SMDev">SMDev</option>
                                    <option value="&amp;company=SMOKOKOLTD">SMOKOKO LTD</option>
                                    <option value="&amp;company=SNSHUB">SNSHUB</option>
                                    <option value="&amp;company=sofgames">sofgames</option>
                                    <option value="&amp;company=SofSGames">SofSGames</option>
                                    <option value="&amp;company=Softlitude">Softlitude</option>
                                    <option value="&amp;company=softygame">softygame</option>
                                    <option value="&amp;company=SoPartyGames">SoParty Games</option>
                                    <option value="&amp;company=SoulHouse">SoulHouse</option>
                                    <option value="&amp;company=SpaceGame">Space Game </option>
                                    <option value="&amp;company=SpaceFishing">SpaceFishing</option>
                                    <option value="&amp;company=Spiel1">Spiel1</option>
                                    <option value="&amp;company=SpiritGame">SpiritGame</option>
                                    <option value="&amp;company=SpongeBoob">SpongeBoob</option>
                                    <option value="&amp;company=SpoonBoxStudio">SpoonBox Studio</option>
                                    <option value="&amp;company=spoxgames">spoxgames</option>
                                    <option value="&amp;company=SquareLemurs">SquareLemurs</option>
                                    <option value="&amp;company=SquidGame">Squid Game</option>
                                    <option value="&amp;company=st4life">st4life</option>
                                    <option value="&amp;company=STA">STA</option>
                                    <option value="&amp;company=stanlight.ch">stanlight.ch</option>
                                    <option value="&amp;company=StarLight">Star Light</option>
                                    <option value="&amp;company=Stars">Stars</option>
                                    <option value="&amp;company=StartGames">Start Games</option>
                                    <option value="&amp;company=Staryshko">Staryshko</option>
                                    <option value="&amp;company=Stationreward">Stationreward</option>
                                    <option value="&amp;company=SteelCycloneStudiosLLC">Steel Cyclone Studios LLC</option>
                                    <option value="&amp;company=stelennnn">stelennnn</option>
                                    <option value="&amp;company=Stevika">Stevika</option>
                                    <option value="&amp;company=StickmanGamesFree">Stickman Games Free</option>
                                    <option value="&amp;company=StickmanvsMonsterSchoolteam">Stickman vs Monster School team</option>
                                    <option value="&amp;company=stone">stone</option>
                                    <option value="&amp;company=Stormanimes">Storm animes</option>
                                    <option value="&amp;company=StreakGame">Streak Game</option>
                                    <option value="&amp;company=StrongGames">Strong Games</option>
                                    <option value="&amp;company=Studiogamepro">Studio game pro</option>
                                    <option value="&amp;company=StudioClone">StudioClone</option>
                                    <option value="&amp;company=StudioGameDev">StudioGameDev</option>
                                    <option value="&amp;company=StudioGames">StudioGames</option>
                                    <option value="&amp;company=SubMedia">SubMedia</option>
                                    <option value="&amp;company=Sudo">Sudo</option>
                                    <option value="&amp;company=SUGAR87">SUGAR87</option>
                                    <option value="&amp;company=Sun.Studio">Sun.Studio</option>
                                    <option value="&amp;company=SunnyBearStudio">Sunny Bear Studio</option>
                                    <option value="&amp;company=SunriaseGames">Sunriase Games</option>
                                    <option value="&amp;company=suns">suns</option>
                                    <option value="&amp;company=sun_gaimon">sun_gaimon</option>
                                    <option value="&amp;company=SuperFighter">Super Fighter</option>
                                    <option value="&amp;company=SuperMasters">Super Masters</option>
                                    <option value="&amp;company=Superbox">Superbox</option>
                                    <option value="&amp;company=SuperCoolGames">SuperCoolGames</option>
                                    <option value="&amp;company=Superkidgames">Superkidgames</option>
                                    <option value="&amp;company=Supernapie">Supernapie</option>
                                    <option value="&amp;company=SuperOnly">SuperOnly</option>
                                    <option value="&amp;company=superxgames">superxgames</option>
                                    <option value="&amp;company=sv3tav1">sv3tav1</option>
                                    <option value="&amp;company=SYBOGAME">SYBO GAME</option>
                                    <option value="&amp;company=SYBOGames">SYBO Games</option>
                                    <option value="&amp;company=sybogames">sybogames</option>
                                    <option value="&amp;company=T.A.studio">T.A. studio</option>
                                    <option value="&amp;company=T3eReviews">T3eReviews</option>
                                    <option value="&amp;company=Tadster">Tadster</option>
                                    <option value="&amp;company=taictdev">taictdev</option>
                                    <option value="&amp;company=Tanaga">Tanaga</option>
                                    <option value="&amp;company=Tanat">Tanat</option>
                                    <option value="&amp;company=TANKED.IO">TANKED.IO</option>
                                    <option value="&amp;company=TapLabGames">TapLabGames</option>
                                    <option value="&amp;company=TapTap">TapTap</option>
                                    <option value="&amp;company=Taptapking">Taptapking</option>
                                    <option value="&amp;company=TashiBhutia">Tashi Bhutia</option>
                                    <option value="&amp;company=TatakiStudio">Tataki Studio</option>
                                    <option value="&amp;company=TD2TL">TD2TL</option>
                                    <option value="&amp;company=Teagle">Teagle</option>
                                    <option value="&amp;company=TeamLava">TeamLava</option>
                                    <option value="&amp;company=TechBoxNorth">TechBox North</option>
                                    <option value="&amp;company=TEENPLAYS">TEEN PLAYS</option>
                                    <option value="&amp;company=TeeToo">TeeToo</option>
                                    <option value="&amp;company=tegagame.com">tegagame.com</option>
                                    <option value="&amp;company=TerriGames">TerriGames</option>
                                    <option value="&amp;company=Terry911">Terry911</option>
                                    <option value="&amp;company=TETEGAME">TETE GAME</option>
                                    <option value="&amp;company=TETE22">TETE22</option>
                                    <option value="&amp;company=TFTCash">TFT Cash</option>
                                    <option value="&amp;company=Tgames">Tgames</option>
                                    <option value="&amp;company=TGB">TGB</option>
                                    <option value="&amp;company=TGinvest">TGinvest</option>
                                    <option value="&amp;company=TheArdents">The Ardents</option>
                                    <option value="&amp;company=TheDailyColoring">The Daily Coloring</option>
                                    <option value="&amp;company=TheNuthouseGames">The Nuthouse Games</option>
                                    <option value="&amp;company=TheOnlineGames">The Online Games</option>
                                    <option value="&amp;company=TheVoicesGames">The Voices Games</option>
                                    <option value="&amp;company=THEBOXGAMES">THEBOXGAMES</option>
                                    <option value="&amp;company=tihbgameinc">tihb game inc</option>
                                    <option value="&amp;company=TimofeiiNasedkin">Timofeii Nasedkin</option>
                                    <option value="&amp;company=TinyLeaf">TinyLeaf</option>
                                    <option value="&amp;company=TinySimpleGames">TinySimpleGames</option>
                                    <option value="&amp;company=titangames">titangames</option>
                                    <option value="&amp;company=TK">TK</option>
                                    <option value="&amp;company=To43">To43</option>
                                    <option value="&amp;company=Tobikima">Tobikima</option>
                                    <option value="&amp;company=ToDevgames">ToDevgames</option>
                                    <option value="&amp;company=togoo">togoo</option>
                                    <option value="&amp;company=tonsomar">tonsomar</option>
                                    <option value="&amp;company=TopNotchGames">Top Notch Games</option>
                                    <option value="&amp;company=TopHatgames">TopHat games</option>
                                    <option value="&amp;company=ToriGames">Tori Games</option>
                                    <option value="&amp;company=TouraGames">TouraGames</option>
                                    <option value="&amp;company=TrandStudioGame.Lts">TrandStudioGame.Lts</option>
                                    <option value="&amp;company=TransportingStudio">Transporting Studio</option>
                                    <option value="&amp;company=TrashUnlimited">Trash Unlimited</option>
                                    <option value="&amp;company=treeorange">tree orange</option>
                                    <option value="&amp;company=TrendGamesNew">TrendGamesNew</option>
                                    <option value="&amp;company=TrendGameStar">TrendGameStar</option>
                                    <option value="&amp;company=TrendyGames">Trendy Games</option>
                                    <option value="&amp;company=trezegames">trezegames</option>
                                    <option value="&amp;company=TrodeStudio">TrodeStudio</option>
                                    <option value="&amp;company=TrumduProjects">Trumdu Projects</option>
                                    <option value="&amp;company=TSF">TSF</option>
                                    <option value="&amp;company=TuftyFluff">Tufty Fluff</option>
                                    <option value="&amp;company=TupTum">TupTum</option>
                                    <option value="&amp;company=Ty4ka">Ty4ka</option>
                                    <option value="&amp;company=UCoolGames.com">UCoolGames.com</option>
                                    <option value="&amp;company=UisteGames">Uiste Games</option>
                                    <option value="&amp;company=uness">uness</option>
                                    <option value="&amp;company=UnitRadius">UnitRadius</option>
                                    <option value="&amp;company=UnknownProjectX">UnknownProjectX</option>
                                    <option value="&amp;company=UPIGGLLC">UPIGG LLC</option>
                                    <option value="&amp;company=upjersGmbH">upjers GmbH</option>
                                    <option value="&amp;company=Upland">Upland</option>
                                    <option value="&amp;company=URGAMES">UR GAMES</option>
                                    <option value="&amp;company=Uriel">Uriel</option>
                                    <option value="&amp;company=uzngames.com">uzngames.com</option>
                                    <option value="&amp;company=VadGames">Vad Games</option>
                                    <option value="&amp;company=Vahidz">Vahidz</option>
                                    <option value="&amp;company=Valhalla">Valhalla</option>
                                    <option value="&amp;company=ValleryCorrea">Vallery Correa</option>
                                    <option value="&amp;company=vanDev">vanDev</option>
                                    <option value="&amp;company=vankizzle">vankizzle</option>
                                    <option value="&amp;company=VanomainGames">Vanomain Games</option>
                                    <option value="&amp;company=VardanyanLevon">Vardanyan Levon</option>
                                    <option value="&amp;company=VdoGamesLtd">Vdo Games Ltd</option>
                                    <option value="&amp;company=VediaGames">Vedia Games</option>
                                    <option value="&amp;company=VekaPlay">Veka Play</option>
                                    <option value="&amp;company=Vengo">Vengo</option>
                                    <option value="&amp;company=VeredianaGames">Verediana Games</option>
                                    <option value="&amp;company=VibeToon">VibeToon</option>
                                    <option value="&amp;company=VideoIgrice">Video Igrice</option>
                                    <option value="&amp;company=Vidoogames">Vidoogames</option>
                                    <option value="&amp;company=VietnamNeko">VietnamNeko</option>
                                    <option value="&amp;company=violetinteractive">violetinteractive</option>
                                    <option value="&amp;company=Visu">Visu</option>
                                    <option value="&amp;company=VIVI">VIVI</option>
                                    <option value="&amp;company=VividLabs">Vivid Labs</option>
                                    <option value="&amp;company=VkmWeb.com">VkmWeb.com</option>
                                    <option value="&amp;company=VodoGame">VodoGame</option>
                                    <option value="&amp;company=VodoGame.com">VodoGame.com</option>
                                    <option value="&amp;company=VodoGaming">VodoGaming</option>
                                    <option value="&amp;company=vodoo">vodoo</option>
                                    <option value="&amp;company=VolkanTuran">Volkan Turan</option>
                                    <option value="&amp;company=Voodo">Voodo</option>
                                    <option value="&amp;company=Vowwa">Vowwa</option>
                                    <option value="&amp;company=Vseigru.net">Vseigru.net</option>
                                    <option value="&amp;company=WaliGames">Wali Games</option>
                                    <option value="&amp;company=waqigamestudio">waqigamestudio</option>
                                    <option value="&amp;company=wast">wast</option>
                                    <option value="&amp;company=WaveGames">Wave Games</option>
                                    <option value="&amp;company=Waytowin">Way to win</option>
                                    <option value="&amp;company=WazoraGames">Wazora Games</option>
                                    <option value="&amp;company=Webgames">Web games</option>
                                    <option value="&amp;company=WebDevGaming">WebDevGaming</option>
                                    <option value="&amp;company=webfory">webfory</option>
                                    <option value="&amp;company=Websat">Websat</option>
                                    <option value="&amp;company=WePLaY">WePLaY</option>
                                    <option value="&amp;company=wey.game">wey.game</option>
                                    <option value="&amp;company=WhiteFox2Studio">WhiteFox2Studio</option>
                                    <option value="&amp;company=WieringSoftware">Wiering Software</option>
                                    <option value="&amp;company=WildSpike">Wild Spike</option>
                                    <option value="&amp;company=WilkinGames">Wilkin Games</option>
                                    <option value="&amp;company=WOK">WOK</option>
                                    <option value="&amp;company=wopainteractive">wopa interactive</option>
                                    <option value="&amp;company=WorldofAlice">World of Alice </option>
                                    <option value="&amp;company=WorldofWeb">World of Web</option>
                                    <option value="&amp;company=Wydners">Wydners</option>
                                    <option value="&amp;company=XDdeveloper">XDdeveloper</option>
                                    <option value="&amp;company=Xenolia">Xenolia</option>
                                    <option value="&amp;company=XFUNGameStudio">XFUN Game Studio</option>
                                    <option value="&amp;company=xGames">xGames</option>
                                    <option value="&amp;company=XiferGames">XiferGames</option>
                                    <option value="&amp;company=XlabGameStudio">Xlab Game Studio</option>
                                    <option value="&amp;company=XpresateStudio">Xpresate Studio</option>
                                    <option value="&amp;company=xrxgames">xrxgames</option>
                                    <option value="&amp;company=XTStudio">XTStudio</option>
                                    <option value="&amp;company=XXY">XXY</option>
                                    <option value="&amp;company=y9-games">y9-games</option>
                                    <option value="&amp;company=yaaygames.com">yaaygames.com</option>
                                    <option value="&amp;company=yad.com">yad.com</option>
                                    <option value="&amp;company=yahoogamers">yahoo gamers</option>
                                    <option value="&amp;company=YAHYALTD">YAHYA LTD</option>
                                    <option value="&amp;company=yakpigames">yakpi games</option>
                                    <option value="&amp;company=yaznGame">yaznGame</option>
                                    <option value="&amp;company=YcGames">YcGames</option>
                                    <option value="&amp;company=yellowgames">yellowgames</option>
                                    <option value="&amp;company=YetiGames">Yeti Games</option>
                                    <option value="&amp;company=yimin">yimin</option>
                                    <option value="&amp;company=yiv.com">yiv.com</option>
                                    <option value="&amp;company=ym.apps">ym.apps</option>
                                    <option value="&amp;company=YM.Games">YM.Games</option>
                                    <option value="&amp;company=YoloGames">Yolo Games</option>
                                    <option value="&amp;company=YoshiDev">YoshiDev</option>
                                    <option value="&amp;company=Youdevice!">Youdevice!</option>
                                    <option value="&amp;company=youngdggames">young dg games</option>
                                    <option value="&amp;company=yoyogames">yoyogames</option>
                                    <option value="&amp;company=YSOCorp">YSO Corp</option>
                                    <option value="&amp;company=YuXinyi">Yu Xinyi</option>
                                    <option value="&amp;company=YUMEGAMESTUDIO">YUME GAME STUDIO</option>
                                    <option value="&amp;company=YunbuGameStudio">Yunbu Game Studio</option>
                                    <option value="&amp;company=Yup7Games">Yup7 Games</option>
                                    <option value="&amp;company=Yupi.io">Yupi.io</option>
                                    <option value="&amp;company=yupiy">yupiy</option>
                                    <option value="&amp;company=Yurii">Yurii</option>
                                    <option value="&amp;company=YZSTUDIO">YZ STUDIO</option>
                                    <option value="&amp;company=Z-Game">Z-Game</option>
                                    <option value="&amp;company=ZAFFGAMES">ZAFF GAMES </option>
                                    <option value="&amp;company=Zaghough">Zaghough</option>
                                    <option value="&amp;company=zakgame">zakgame</option>
                                    <option value="&amp;company=ZakStudios">ZakStudios</option>
                                    <option value="&amp;company=ZanGames">Zan Games</option>
                                    <option value="&amp;company=zanime">zanime</option>
                                    <option value="&amp;company=zara">zara</option>
                                    <option value="&amp;company=Zazgames.com">Zazgames.com</option>
                                    <option value="&amp;company=ZedEye">ZedEye</option>
                                    <option value="&amp;company=zello">zello</option>
                                    <option value="&amp;company=Zempie.com">Zempie.com</option>
                                    <option value="&amp;company=ZeroIdentidad">ZeroIdentidad</option>
                                    <option value="&amp;company=ZFStudio">ZF Studio</option>
                                    <option value="&amp;company=ZFun">ZFun</option>
                                    <option value="&amp;company=zigziGames">zigziGames</option>
                                    <option value="&amp;company=zikogfx">zikogfx</option>
                                    <option value="&amp;company=ZipUpGames">ZipUp Games</option>
                                    <option value="&amp;company=Zombif.com">Zombif.com</option>
                                    <option value="&amp;company=ZoomGames">Zoom Games</option>
                                    <option value="&amp;company=ZoombitStudio">Zoombit Studio</option>
                                    <option value="&amp;company=zurakonlygames">zurakonlygames</option>
                                    <option value="&amp;company=Zuwagames.com">Zuwagames.com</option>
                                    <option value="&amp;company=ZUZU.GAMES">ZUZU.GAMES</option>
                                    <option value="&amp;company=Zuzug">Zuzug</option>
                                    <option value="&amp;company=zzgames">zzgames</option>
                                    <option value="&amp;company=ΒTop">ΒTop</option>
                                    <option value="&amp;company=睚喻">睚喻</option>
                                    <option value="&amp;company=福州好哒网络科技有限公司">福州好哒网络科技有限公司</option>

                                </select>
                            </div>

                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Items</label>
                                <select name="amount" id="amount" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option value="&amp;amount=10">10</option>
                                    <option value="&amp;amount=20">20</option>
                                    <option value="&amp;amount=30">30</option>
                                    <option value="&amp;amount=40">40</option>
                                    <option value="&amp;amount=100">100</option>
                                    <option value="&amp;amount=All">All</option>
                                </select>
                            </div>
                        </div>


                        <p class="capitalize mt-6 text-gray-500 text-xs">this process required the internet, This process take upto few seconds or minutes. If you are adding a game, then the game is not being added, it means that no new game has come in that platform.</p>
                        <button name="add_games_from_api" class="bg-blue-500  py-2 px-4 rounded-md mt-2 text-white">Add Game</button>

                    </div>
                <?php } ?>




                <?php if ($platform == "gamedistribution") { ?>
                    <div class="specific-div">
                        <input type="hidden" name="platform" value="gamedistribution">
                        <div class="flex gap-5">
                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Collection</label>
                                <select name="collection" id="collection" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option selected="selected" data-v-0d0b0332="">All</option>
                                    <option value="11" data-v-0d0b0332="">Top Hypercasual</option>
                                    <option value="8" data-v-0d0b0332="">Ubisoft</option>
                                    <option value="3" data-v-0d0b0332="">Hot</option>
                                    <option value="2" data-v-0d0b0332="">Exclusive</option>
                                    <option value="1" data-v-0d0b0332="">Top Picks</option>
                                    <option value="4" data-v-0d0b0332="">New</option>
                                    <option value="5" data-v-0d0b0332="">In Game Purchase</option>
                                    <option value="6" data-v-0d0b0332="">IceStone</option>
                                    <option value="7" data-v-0d0b0332="">Ubisoft</option>
                                    <option value="10" data-v-0d0b0332="">Gameloft</option>
                                </select>
                            </div>

                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Category</label>
                                <select name="categories" id="categories" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option selected="selected" value="All" data-v-0d0b0332="">All</option>
                                    <option value=".IO" data-v-0d0b0332="">.IO</option>
                                    <option value=".io" data-v-0d0b0332="">.io</option>
                                    <option value="2 Player" data-v-0d0b0332="">2 Player</option>
                                    <option value="3D" data-v-0d0b0332="">3D</option>
                                    <option value="Action" data-v-0d0b0332="">Action</option>
                                    <option value="Adventure" data-v-0d0b0332="">Adventure</option>
                                    <option value="Arcade" data-v-0d0b0332="">Arcade</option>
                                    <option value="Bejeweled" data-v-0d0b0332="">Bejeweled</option>
                                    <option value="Boys" data-v-0d0b0332="">Boys</option>
                                    <option value="Cooking" data-v-0d0b0332="">Cooking</option>
                                    <option value="Hypercasual" data-v-0d0b0332="">Hypercasual</option>
                                    <option value="Multiplayer" data-v-0d0b0332="">Multiplayer</option>
                                    <option value="Puzzle" data-v-0d0b0332="">Puzzle</option>
                                    <option value="Racing" data-v-0d0b0332="">Racing</option>
                                    <option value="Shooting" data-v-0d0b0332="">Shooting</option>
                                    <option value="Sports" data-v-0d0b0332="">Sports</option>
                                    <option value="Stickman" data-v-0d0b0332="">Stickman</option>
                                </select>
                            </div>

                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Tag</label>
                                <select name="tags" id="tags" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option selected="selected" value="All" data-v-0d0b0332="">All</option>
                                    <option value="#1" data-v-0d0b0332="">#1</option>
                                    <option value="#1player" data-v-0d0b0332="">#1player</option>
                                    <option value="#2048" data-v-0d0b0332="">#2048</option>
                                    <option value="#2d" data-v-0d0b0332="">#2d</option>
                                    <option value="#2players" data-v-0d0b0332="">#2players</option>
                                    <option value="#3d" data-v-0d0b0332="">#3d</option>
                                    <option value="#action" data-v-0d0b0332="">#action</option>
                                    <option value="#action#" data-v-0d0b0332="">#action#</option>
                                    <option value="#addictive" data-v-0d0b0332="">#addictive</option>
                                    <option value="#adventure" data-v-0d0b0332="">#adventure</option>
                                    <option value="#amazing" data-v-0d0b0332="">#amazing</option>
                                    <option value="#animal" data-v-0d0b0332="">#animal</option>
                                    <option value="#animals" data-v-0d0b0332="">#animals</option>
                                    <option value="#arcade" data-v-0d0b0332="">#arcade</option>
                                    <option value="#ball" data-v-0d0b0332="">#ball</option>
                                    <option value="#bejeweled" data-v-0d0b0332="">#bejeweled</option>
                                    <option value="#bestgame" data-v-0d0b0332="">#bestgame</option>
                                    <option value="#bestpuzzle" data-v-0d0b0332="">#bestpuzzle</option>
                                    <option value="#bike" data-v-0d0b0332="">#bike</option>
                                    <option value="#block" data-v-0d0b0332="">#block</option>
                                    <option value="#blocks" data-v-0d0b0332="">#blocks</option>
                                    <option value="#boy" data-v-0d0b0332="">#boy</option>
                                    <option value="#boys" data-v-0d0b0332="">#boys</option>
                                    <option value="#brain" data-v-0d0b0332="">#brain</option>
                                    <option value="#braining" data-v-0d0b0332="">#braining</option>
                                    <option value="#brainstorm" data-v-0d0b0332="">#brainstorm</option>
                                    <option value="#bubble" data-v-0d0b0332="">#bubble</option>
                                    <option value="#bubbleshooter" data-v-0d0b0332="">#bubbleshooter</option>
                                    <option value="#car" data-v-0d0b0332="">#car</option>
                                    <option value="#card" data-v-0d0b0332="">#card</option>
                                    <option value="#cars" data-v-0d0b0332="">#cars</option>
                                    <option value="#casual" data-v-0d0b0332="">#casual</option>
                                    <option value="#classic" data-v-0d0b0332="">#classic</option>
                                    <option value="#color" data-v-0d0b0332="">#color</option>
                                    <option value="#construct3" data-v-0d0b0332="">#construct3</option>
                                    <option value="#cooking" data-v-0d0b0332="">#cooking</option>
                                    <option value="#crossyroad" data-v-0d0b0332="">#crossyroad</option>
                                    <option value="#crush" data-v-0d0b0332="">#crush</option>
                                    <option value="#drop" data-v-0d0b0332="">#drop</option>
                                    <option value="#education" data-v-0d0b0332="">#education</option>
                                    <option value="#educational" data-v-0d0b0332="">#educational</option>
                                    <option value="#educationalgame" data-v-0d0b0332="">#educationalgame</option>
                                    <option value="#escape" data-v-0d0b0332="">#escape</option>
                                    <option value="#family" data-v-0d0b0332="">#family</option>
                                    <option value="#food" data-v-0d0b0332="">#food</option>
                                    <option value="#football" data-v-0d0b0332="">#football</option>
                                    <option value="#frog" data-v-0d0b0332="">#frog</option>
                                    <option value="#fruit" data-v-0d0b0332="">#fruit</option>
                                    <option value="#funny" data-v-0d0b0332="">#funny</option>
                                    <option value="#game" data-v-0d0b0332="">#game</option>
                                    <option value="#gameforkids" data-v-0d0b0332="">#gameforkids</option>
                                    <option value="#hard" data-v-0d0b0332="">#hard</option>
                                    <option value="#hero" data-v-0d0b0332="">#hero</option>
                                    <option value="#hit" data-v-0d0b0332="">#hit</option>
                                    <option value="#html" data-v-0d0b0332="">#html</option>
                                    <option value="#html5" data-v-0d0b0332="">#html5</option>
                                    <option value="#html5games" data-v-0d0b0332="">#html5games</option>
                                    <option value="#hypercasual" data-v-0d0b0332="">#hypercasual</option>
                                    <option value="#indie" data-v-0d0b0332="">#indie</option>
                                    <option value="#iq" data-v-0d0b0332="">#iq</option>
                                    <option value="#jelly" data-v-0d0b0332="">#jelly</option>
                                    <option value="#jump" data-v-0d0b0332="">#jump</option>
                                    <option value="#kids" data-v-0d0b0332="">#kids</option>
                                    <option value="#kidsgame" data-v-0d0b0332="">#kidsgame</option>
                                    <option value="#lightweight" data-v-0d0b0332="">#lightweight</option>
                                    <option value="#logic" data-v-0d0b0332="">#logic</option>
                                    <option value="#logical" data-v-0d0b0332="">#logical</option>
                                    <option value="#logicgame" data-v-0d0b0332="">#logicgame</option>
                                    <option value="#mario" data-v-0d0b0332="">#mario</option>
                                    <option value="#match3" data-v-0d0b0332="">#match3</option>
                                    <option value="#maze" data-v-0d0b0332="">#maze</option>
                                    <option value="#mazegame" data-v-0d0b0332="">#mazegame</option>
                                    <option value="#memory" data-v-0d0b0332="">#memory</option>
                                    <option value="#merge" data-v-0d0b0332="">#merge</option>
                                    <option value="#minecraft" data-v-0d0b0332="">#minecraft</option>
                                    <option value="#mini" data-v-0d0b0332="">#mini</option>
                                    <option value="#mobile" data-v-0d0b0332="">#mobile</option>
                                    <option value="#new" data-v-0d0b0332="">#new</option>
                                    <option value="#ninja" data-v-0d0b0332="">#ninja</option>
                                    <option value="#numbergame" data-v-0d0b0332="">#numbergame</option>
                                    <option value="#numbers" data-v-0d0b0332="">#numbers</option>
                                    <option value="#numbersgame" data-v-0d0b0332="">#numbersgame</option>
                                    <option value="#onetouch" data-v-0d0b0332="">#onetouch</option>
                                    <option value="#online" data-v-0d0b0332="">#online</option>
                                    <option value="#pets" data-v-0d0b0332="">#pets</option>
                                    <option value="#physics" data-v-0d0b0332="">#physics</option>
                                    <option value="#platform" data-v-0d0b0332="">#platform</option>
                                    <option value="#playonline" data-v-0d0b0332="">#playonline</option>
                                    <option value="#puzzle" data-v-0d0b0332="">#puzzle</option>
                                    <option value="#puzzles" data-v-0d0b0332="">#puzzles</option>
                                    <option value="#race" data-v-0d0b0332="">#race</option>
                                    <option value="#responsive" data-v-0d0b0332="">#responsive</option>
                                    <option value="#restaurant" data-v-0d0b0332="">#restaurant</option>
                                    <option value="#run" data-v-0d0b0332="">#run</option>
                                    <option value="#runner" data-v-0d0b0332="">#runner</option>
                                    <option value="#shoot" data-v-0d0b0332="">#shoot</option>
                                    <option value="#shooter" data-v-0d0b0332="">#shooter</option>
                                    <option value="#simple" data-v-0d0b0332="">#simple</option>
                                    <option value="#skill" data-v-0d0b0332="">#skill</option>
                                    <option value="#smart" data-v-0d0b0332="">#smart</option>
                                    <option value="#space" data-v-0d0b0332="">#space</option>
                                    <option value="#sports" data-v-0d0b0332="">#sports</option>
                                    <option value="#tap" data-v-0d0b0332="">#tap</option>
                                    <option value="#topgame" data-v-0d0b0332="">#topgame</option>
                                    <option value="#touch" data-v-0d0b0332="">#touch</option>
                                    <option value="1player" data-v-0d0b0332="">1player</option>
                                    <option value="2048" data-v-0d0b0332="">2048</option>
                                    <option value="3d-game" data-v-0d0b0332="">3d-game</option>
                                    <option value="8b" data-v-0d0b0332="">8b</option>
                                    <option value="IceS" data-v-0d0b0332="">IceS</option>
                                    <option value="adrenalin" data-v-0d0b0332="">adrenalin</option>
                                    <option value="adult" data-v-0d0b0332="">adult</option>
                                    <option value="adventurer" data-v-0d0b0332="">adventurer</option>
                                    <option value="angry" data-v-0d0b0332="">angry</option>
                                    <option value="avoid" data-v-0d0b0332="">avoid</option>
                                    <option value="base" data-v-0d0b0332="">base</option>
                                    <option value="bestarcadegame" data-v-0d0b0332="">bestarcadegame</option>
                                    <option value="bike" data-v-0d0b0332="">bike</option>
                                    <option value="biker" data-v-0d0b0332="">biker</option>
                                    <option value="bikes" data-v-0d0b0332="">bikes</option>
                                    <option value="boy" data-v-0d0b0332="">boy</option>
                                    <option value="bubble" data-v-0d0b0332="">bubble</option>
                                    <option value="casual" data-v-0d0b0332="">casual</option>
                                    <option value="ccg" data-v-0d0b0332="">ccg</option>
                                    <option value="click" data-v-0d0b0332="">click</option>
                                    <option value="conundrum" data-v-0d0b0332="">conundrum</option>
                                    <option value="coop" data-v-0d0b0332="">coop</option>
                                    <option value="customer" data-v-0d0b0332="">customer</option>
                                    <option value="defend" data-v-0d0b0332="">defend</option>
                                    <option value="driving" data-v-0d0b0332="">driving</option>
                                    <option value="escape" data-v-0d0b0332="">escape</option>
                                    <option value="escape.adventure" data-v-0d0b0332="">escape.adventure</option>
                                    <option value="escapegames" data-v-0d0b0332="">escapegames</option>
                                    <option value="escapes" data-v-0d0b0332="">escapes</option>
                                    <option value="fast-jump-3d" data-v-0d0b0332="">fast-jump-3d</option>
                                    <option value="fun" data-v-0d0b0332="">fun</option>
                                    <option value="game" data-v-0d0b0332="">game</option>
                                    <option value="games" data-v-0d0b0332="">games</option>
                                    <option value="grid" data-v-0d0b0332="">grid</option>
                                    <option value="haven" data-v-0d0b0332="">haven</option>
                                    <option value="heroes" data-v-0d0b0332="">heroes</option>
                                    <option value="hex" data-v-0d0b0332="">hex</option>
                                    <option value="historical" data-v-0d0b0332="">historical</option>
                                    <option value="html5game" data-v-0d0b0332="">html5game</option>
                                    <option value="japan" data-v-0d0b0332="">japan</option>
                                    <option value="jelly" data-v-0d0b0332="">jelly</option>
                                    <option value="jigsaw" data-v-0d0b0332="">jigsaw</option>
                                    <option value="kid" data-v-0d0b0332="">kid</option>
                                    <option value="kidgames" data-v-0d0b0332="">kidgames</option>
                                    <option value="kids" data-v-0d0b0332="">kids</option>
                                    <option value="kidspuzzles" data-v-0d0b0332="">kidspuzzles</option>
                                    <option value="labyrinth" data-v-0d0b0332="">labyrinth</option>
                                    <option value="logic" data-v-0d0b0332="">logic</option>
                                    <option value="logica" data-v-0d0b0332="">logica</option>
                                    <option value="logical" data-v-0d0b0332="">logical</option>
                                    <option value="management" data-v-0d0b0332="">management</option>
                                    <option value="mario" data-v-0d0b0332="">mario</option>
                                    <option value="maze" data-v-0d0b0332="">maze</option>
                                    <option value="mexican" data-v-0d0b0332="">mexican</option>
                                    <option value="minecraft" data-v-0d0b0332="">minecraft</option>
                                    <option value="mobile-game" data-v-0d0b0332="">mobile-game</option>
                                    <option value="moto" data-v-0d0b0332="">moto</option>
                                    <option value="motor" data-v-0d0b0332="">motor</option>
                                    <option value="motorbike" data-v-0d0b0332="">motorbike</option>
                                    <option value="motorcycle" data-v-0d0b0332="">motorcycle</option>
                                    <option value="motorcycles" data-v-0d0b0332="">motorcycles</option>
                                    <option value="naija" data-v-0d0b0332="">naija</option>
                                    <option value="obstacle" data-v-0d0b0332="">obstacle</option>
                                    <option value="obstacles" data-v-0d0b0332="">obstacles</option>
                                    <option value="online" data-v-0d0b0332="">online</option>
                                    <option value="panda" data-v-0d0b0332="">panda</option>
                                    <option value="penguin" data-v-0d0b0332="">penguin</option>
                                    <option value="physics" data-v-0d0b0332="">physics</option>
                                    <option value="point" data-v-0d0b0332="">point</option>
                                    <option value="rag" data-v-0d0b0332="">rag</option>
                                    <option value="ragdoll" data-v-0d0b0332="">ragdoll</option>
                                    <option value="rope" data-v-0d0b0332="">rope</option>
                                    <option value="runner" data-v-0d0b0332="">runner</option>
                                    <option value="rush" data-v-0d0b0332="">rush</option>
                                    <option value="shoot" data-v-0d0b0332="">shoot</option>
                                    <option value="shooter" data-v-0d0b0332="">shooter</option>
                                    <option value="simulation" data-v-0d0b0332="">simulation</option>
                                    <option value="smart" data-v-0d0b0332="">smart</option>
                                    <option value="smile" data-v-0d0b0332="">smile</option>
                                    <option value="star" data-v-0d0b0332="">star</option>
                                    <option value="stars" data-v-0d0b0332="">stars</option>
                                    <option value="stunt" data-v-0d0b0332="">stunt</option>
                                    <option value="subway" data-v-0d0b0332="">subway</option>
                                    <option value="super" data-v-0d0b0332="">super</option>
                                    <option value="superhero" data-v-0d0b0332="">superhero</option>
                                    <option value="superheroes" data-v-0d0b0332="">superheroes</option>
                                    <option value="supermario" data-v-0d0b0332="">supermario</option>
                                    <option value="surfers" data-v-0d0b0332="">surfers</option>
                                    <option value="swing" data-v-0d0b0332="">swing</option>
                                    <option value="temple" data-v-0d0b0332="">temple</option>
                                    <option value="think" data-v-0d0b0332="">think</option>
                                    <option value="thinking" data-v-0d0b0332="">thinking</option>
                                    <option value="touchscreen" data-v-0d0b0332="">touchscreen</option>
                                    <option value="turn-based" data-v-0d0b0332="">turn-based</option>
                                    <option value="war" data-v-0d0b0332="">war</option>
                                    <option value="wrestler" data-v-0d0b0332="">wrestler</option>
                                    <option value="wrestling" data-v-0d0b0332="">wrestling</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex gap-5 mt-6">
                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Game Type</label>
                                <select name="type" id="type" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option selected="selected" value="all" data-v-0d0b0332="">All</option>
                                    <option value="flash" data-v-0d0b0332="">Flash</option>
                                    <option value="html5" data-v-0d0b0332="">HTML5</option>
                                </select>
                            </div>

                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Game Sub Type</label>
                                <select name="subType" id="subType" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option selected="selected" value="all" data-v-0d0b0332="">All</option>
                                    <option value="WebGL" data-v-0d0b0332="">WebGL</option>
                                    <option value="Javascript" data-v-0d0b0332="">Javascript</option>
                                    <option value="Construct2" data-v-0d0b0332="">Construct2</option>
                                    <option value="Construct3" data-v-0d0b0332="">Construct3</option>
                                </select>
                            </div>
                        </div>


                        <div class="flex gap-5 mt-6">
                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Mobile Ready</label>
                                <select name="mobile" id="mobile" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option selected="selected" value="all" data-v-0d0b0332="">All</option>
                                    <option value="1" data-v-0d0b0332="">Yes</option>
                                    <option value="0" data-v-0d0b0332="">No</option>
                                </select>
                            </div>

                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Rewarded Ads Video</label>
                                <select name="rewarded" id="rewarded" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option selected="selected" value="all" data-v-0d0b0332="">All</option>
                                    <option value="1" data-v-0d0b0332="">Yes</option>
                                    <option value="0" data-v-0d0b0332="">No</option>
                                </select>
                            </div>
                        </div>


                        <div class="flex gap-5 mt-6">
                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Item</label>
                                <select name="amount" id="amount" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                    <option selected="selected" value="100" data-v-0d0b0332="">100</option>
                                </select>
                            </div>

                            <div class="input-group w-full flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Offset</label>
                                <input type="number" name="page" value="79" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" minlength="1" value="1">
                            </div>
                        </div>


                        <p class="capitalize mt-6 text-gray-500 text-xs">this process required the internet, This process take upto few seconds or minutes. If you are adding a game, then the game is not being added, it means that no new game has come in that platform.</p>
                        <button name="add_games_from_api" class="bg-blue-500 text-sm py-2 px-4 rounded-md mt-4 text-white">Add Game</button>

                    </div>
                <?php } ?>

                <?php if ($platform == "gamepix") { ?>
                    <div class="flex gap-5 mt-6">
                        <input type="hidden" value="gamepix" name="platform">
                        <div class="input-group w-full flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Category</label>
                            <select name="category" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs">
                                <option value="">All</option>
                                <option value="adventure">Adventure</option>
                                <option value="arcade">Arcade</option>
                                <option value="board">Board</option>
                                <option value="classics">Classics</option>
                                <option value="junior">Junior</option>
                                <option value="puzzles">Puzzles</option>
                                <option value="sports">Sports</option>
                                <option value="strategy">Strategy</option>
                            </select>
                        </div>

                        <div class="input-group w-full flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">items</label>
                            <select name="items" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs">
                                <option value="96">96</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-5 mt-6">
                        <div class="input-group w-full flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">order by</label>
                            <select name="order" id="order" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs">
                                <option value="" selected>Quality</option>
                                <option value="pubdate">Last Published</option>
                            </select>
                        </div>

                        <div class="input-group w-full flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Offset</label>
                            <input type="number" name="page" value="1" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" minlength="1" placeholder="Max Length 47">
                        </div>
                    </div>

                    <p class="capitalize mt-6 text-gray-500 text-xs">this process required the internet, This process take upto few seconds or minutes. If you are adding a game, then the game is not being added, it means that no new game has come in that platform.</p>
                        <button name="add_games_from_api" class="bg-blue-500 text-sm py-2 px-4 rounded-md mt-4 text-white">Add Game</button>
                <?php } ?>
            </form>
        </div>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>