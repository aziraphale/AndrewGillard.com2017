@extends('layout.master')

@section('content')
<article>
    <p>Below is a list of all the (114) passage locations Mishal has. As a member of the Taxi club he will be willing to transport you from any one of these locations (or close to one) to any other location on the list.</p>

    <p>Simply send a 'tell' to him stating where you want to go to and where you currently are.</p>

    <p>All locations cost A$5 unless otherwise stated.</p>

    <h3>Ankh-Morpork [34]</h3>
    <ul>
        <li>Mended Drum</li>
        <li>Taxi Club House</li>
        <li>Flintwick Building Doctor</li>
        <li>Troll's Head Bar (Jak Raplin)</li>
        <li>Baths</li>
        <li>Nella's Vault</li>
        <li>Jonas' Vault</li>
        <li>Hall of Heroes (Old Warriors Guild - Lanfear's place)</li>
        <li>Pseudopolis Yard Watch House</li>
        <li>Patrician's Palace</li>
        <li>Rathole</li>
        <li>Retrophenologist</li>
        <li><b>Guilds</b>
            <ul>
                <li>Assassins Guild</li>
                <li>Thieves Guild</li>
                <li>Unseen University</li>
                <li>Sek's Temple (Street of Small Gods)</li>
                <li>Pishe's Garden</li>
                <li>Cockbill Street (Fish temple)</li>
                <li>Weapon Masters' Court</li>
            </ul>
        </li>
        <li><b>Banks</b>
            <ul>
                <li>Bird of Paradise Bank</li>
                <li>Stabba's Bank</li>
                <li>Bing's Bank (Upper Broadway)</li>
                <li>Lancre Co-op</li>
                <li>Money Changer (Street of Bookkeepers)</li>
                <li>Money Changer (Ankh Bridge)</li>
            </ul>
        </li>
        <li><b>Gates</b>
            <ul>
                <li>Widdershin's Gate</li>
                <li>Hubward Gate</li>
                <li>Limping Gate</li>
                <li>Onion Gate</li>
                <li>Shambling Gate</li>
                <li>Traitors Gate</li>
                <li>Rimward Gate</li>
                <li>Deosil Gate</li>
                <li>Least Gate</li>
            </ul>
        </li>
    </ul>

    <h3>Sto Plains [18]</h3>
    <ul>
        <li>Bleak Prospect</li>
        <li>Capture The Flag Monastery</li>
        <li>Death's Domain (A$10)</li>
        <li>Dinky</li>
        <li>Gingerbread Cottage</li>
        <li>Grflx Caves (A$10)</li>
        <li>Grflx Caves Inside (A$10)</li>
        <li>Hillshire</li>
        <li>Holy Wood</li>
        <li>Nowhere</li>
        <li>Pekan Ford</li>
        <li>Scrogden</li>
        <li>Sheepridge</li>
        <li>Squinty Jeb</li>
        <li><b>Sto Lat</b>
            <ul>
                <li>Market</li>
                <li>East gate</li>
                <li>West gate</li>
            </ul>
        </li>
        <li>Wolf Trail</li>
    </ul>

    <h3>Lancre / Ramtops [21]</h3>
    <ul>
        <li>Bad Ass</li>
        <li>Bandit Camp</li>
        <li>Barbarian Summer Camp</li>
        <li>Blackglass</li>
        <li>Brass Neck</li>
        <li>Creel Springs</li>
        <li>Druid Circle</li>
        <li>Feegle Island (More information on the <a href="{{action('DiscworldController@maps', ['map'=>'pictsie-barrows'])}}">Pictsie Barrows map page</a>)</li>
        <li>Gloomy Forest (West side)</li>
        <li>Hunters' Guild</li>
        <li>Lancre Town</li>
        <li>Listening Monks Temple</li>
        <li>Mad Wolf</li>
        <li>Mad Stoat</li>
        <li>Mad Stoat (Dodgy Bill)</li>
        <li>Ohulan-Cutash</li>
        <li>Razorback</li>
        <li>Slice</li>
        <li>Temple of Soyin (A$20)</li>
        <li>The Hub</li>
        <li>Granny Weatherwax's Cottage (Inside)</li>
    </ul>

    <h3>Uberwald [6]</h3>
    <ul>
        <li>Barbarian Winter Camp</li>
        <li>Escrow</li>
        <li>Inside Magpyr Castle (A$20)</li>
        <li>Outside Magpyr castle (A$10)</li>
        <li>Unnamed Town</li>
        <li>Temple of Cool</li>
    </ul>

    <h3>Genua [6]</h3>
    <ul>
        <li>Bois</li>
        <li><b>Genua</b>
            <ul>
                <li>Genua National Bank</li>
                <li>Genua Casino</li>
                <li>Genua Charm Shop</li>
                <li>Genua Market</li>
                <li>Genua Carriage Stop (West)</li>
            </ul>
        </li>
    </ul>

    <h3>Klatch [5]</h3>
    <ul>
        <li>Djelibeybi (Market Crossroads)</li>
        <li>Hashishim Guild</li>
        <li>Oasis</li>
        <li>Djelibeybi Harbour</li>
        <li>Thella's Vault</li>
    </ul>

    <h3>Counterweight Continent [19]</h3>
    <ul>
        <li>Brown Islands</li>
        <li><b>Bes Pelargic</b>
            <ul>
                <li>Tuna Walk ferry stop</li>
                <li>Vault</li>
                <li>Blue Moon Park</li>
                <li>Post Office (Market Street)</li>
                <li>Confiscated Goods shop (Rhinu Road)</li>
                <li><b>Guilds</b>
                    <ul>
                        <li>Imperial Palace</li>
                        <li>Ninja Guild</li>
                        <li>Samurai Dojo</li>
                    </ul>
                </li>
                <li><b>Estates</b>
                    <ul>
                        <li>Fang Estate</li>
                        <li>Hong Estate</li>
                        <li>Tang Estate</li>
                        <li>Sung Estate</li>
                        <li>McSweeny Estate</li>
                    </ul>
                </li>
                <li>Mr. Foo's House of Paint</li>
                <li>Calligraphy shop</li>
                <li>Culture Institute</li>
                <li>Culture Institute (History room)</li>
                <li>Language Institute</li>
            </ul>
        </li>
    </ul>

    <h3>Other / Unknown [5]</h3>
    <ul>
        <li>Brigand Cave</li>
        <li>Crystal Egg Tree</li>
        <li>Dragon Lands</li>
        <li>Frozen Wastes</li>
        <li>Sea Bed</li>
    </ul>
</article>
@endsection
