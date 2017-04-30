@extends('layout.master')

@section('content')
    <article>
        <p>This is the Discworld MUD section of my site.</p>
        <ul>
            <li>
                <a href="{{action('DiscworldController@crecards')}}">Creator Cards</a>
            </li>
            <li>
                <a href="{{action('DiscworldController@deaths')}}">My Deaths</a>
            </li>
            <li>
                <a href="{{action('DiscworldController@grunthadeaths')}}">Gruntha's Deaths</a>
            </li>
            <li>
                <a href="{{action('DiscworldController@info')}}">Information</a>
            </li>
            <li>
                <a href="{{action('DiscworldController@langgraphs')}}">Language Graphs</a>
            </li>
            <li>
                <a href="{{action('DiscworldController@locations')}}">Passage Locations</a>
            </li>
            <li>
                <a href="{{action('DiscworldController@logs')}}">Logs</a>
            </li>
            <li>
                <a href="{{action('DiscworldController@maps')}}">Maps</a>
            </li>
            <li>
                <a href="{{action('DiscworldController@rods')}}">Faith Rods</a>
            </li>
            <li>
                <a href="{{action('DiscworldController@sbscript')}}">Status Bar Script</a>
            </li>
        </ul>
    </article>
@endsection
