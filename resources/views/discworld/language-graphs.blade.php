@extends('layout.master')

@section('content')

@if ($skillCode)
    <article>
        <p><img src="{{action('DiscworldController@renderlanggraph', ['skills-code'=>$skillCode])}}" alt="Graph of your Language Skills" /></p>
    </article>
@endif

@if ($parseError)
    <article>
        <p>An error occurred parsing the skills you supplied. Please ensure that they are of a valid format, for example:</p>
        <p class="dwquote">
            @obstart('dwq')
=======SKILLS=======Level/Bonus=========================================
other...............    -    -          | | | spoken........  100    -
| language..........    -    -          | | | written.......  100    -
| | uberwaldean.....    -    -          | | ephebian........    -    -
| | | spoken........   35    -          | | | spoken........    7    -
| | | written.......   27    -          | | | written.......   19    -
| | djelian.........    -    -          | | agatean.........    -    -
| | | spoken........   64    -          | | | spoken........   65    -
| | | written.......   38    -          | | | written.......   18    -
| | morporkian......    -    -
            @obend()
            <?php echo str_replace("  ", "&nbsp;&nbsp;", nl2br(obget('dwq'))) ?>
        </p>
    </article>
@endif

<article>
    <p>This page basically draws a graph of your character's language skills once those skills have been entered. Entering your skills is a case of copying the output of the MUD command "skills ot.la" into the box below and hitting the submit button.</p>
    <p>There isn't really a very good reason for doing this - it just looks cool and can be used to visualise how proficient your character is at various languages.</p>
    <p>Only the existing in-game "normal" languages are graphed. If/when any other languages are implemented I will add them to this script. As such Dwarven, Gnomish, Thieves Can't and Wizard Scrolls are ignored.</p>
    <p>Below is an example input:</p>
    <p class="dwquote">
        @obstart('dwq')
=======SKILLS=======Level/Bonus=========================================
other...............    -    -          | | | spoken........  100    -
| language..........    -    -          | | | written.......  100    -
| | uberwaldean.....    -    -          | | ephebian........    -    -
| | | spoken........   35    -          | | | spoken........   10    -
| | | written.......   25    -          | | | written.......   20    -
| | djelian.........    -    -          | | agatean.........    -    -
| | | spoken........   65    -          | | | spoken........   65    -
| | | written.......   40    -          | | | written.......   20    -
| | morporkian......    -    -
        @obend()
        <?php echo str_replace("  ", "&nbsp;&nbsp;", nl2br(obget('dwq'))) ?>
    </p>
    <form method="post" action="">
        {{ csrf_field() }}
        <fieldset>
            <legend>Language Skills</legend>
            <p>Please paste into this box the output of "skills ot.la":</p>
            <textarea name="skills" rows="10" cols="80"></textarea><br />
            <input type="submit" value="Submit" />
        </fieldset>
    </form>
</article>
@endsection
