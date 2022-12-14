@extends('layout.master')

@section('content')
<article class="dwmaps">
    @if ($requestedMap === 'monks-of-cool')
        <p class="centre">
            <a href="{{asset('/img/dw/maps/monks-of-cool.png')}}">
                <img src="{{asset('/img/dw/maps/monks-of-cool.png')}}" alt="Map of the Temple of Cool" />
            </a>
        </p>
        <p>The Temple of the Monks of Cool is in Uberwald, south-east of Blackglass and north-east of Escrow. The underground maze complex prevents the performing of rituals, and most likely the casting of spells, too - apparently it is too Cool for that - so escaping without a map is slightly difficult and time-consuming.</p>
    @elseif ($requestedMap === 'pictsie-barrows')
        <p class="centre">
            <a href="{{asset('/img/dw/maps/pictsie-barrows.png')}}">
                <img src="{{asset('/img/dw/maps/pictsie-barrows.png')}}" alt="Map of the Pictsie Barrows" />
            </a>
        </p>
        <p>Mishal's passage location is marked on the map as that is where you will be taken if you request a Taxi here from him. It is <b>not</b> possible to perform Remember Place (or, I'm told, create any form of wizard blorple) on the island itself and, as such, there is no way for you to be transported onto the island.  You will have to ensure that you have sufficient swimming skill and low enough burden to swim the small body of water onto the island yourself. While Mishal can help you if you or your equipment gets stuck underwater, he takes no responsibility for customers drowning, and rescuing your Stuff is not part of the standard Taxi service.</p>
    @else
        <p>This is where I have maps of obscure places mapped. These are mainly places that aren't available in <a href="http://maps.gothmudders.com/">Airk's Atlas</a>.</p>
        <p>Available maps:</p>
        <ul>
            <li><a href="{{action('DiscworldController@maps', ['map'=>'monks-of-cool'])}}">Temple of the Monks of Cool</a></li>
            <li><a href="{{action('DiscworldController@maps', ['map'=>'pictsie-barrows'])}}">Pictsie Barrows</a></li>
        </ul>
    @endif
</article>
@endsection
