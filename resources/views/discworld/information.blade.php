<?php /* <h3>Faith Rod Creation</h3><a id="faith_rod_creation" class="docanchor"></a> */ ?>

<?php /*
Required bonus (+skills) for rituals.
All are for "75% success rate or greater".
Add a bit when performing from rods.

Holy Sacrifice: 250 of.ta, 230 cu.se, ? mi.se
Longsight: 120 mi.ta
Divine Hand: 250 mi.ta
Major Shield: 300 de.(se|ta)
Blight: 330 of.ta
Divine Sentinel: 300 de.ta (plus it.sc depending on ritual)

*/ ?>
@extends('layout.master')

@section('content')

<article>
    <h2>Priests Guild Pre-Titles<a id="priests_guild_pre-titles" class="docanchor"></a></h2>
    <p>A table of guild titles available to priests and the guild level at which you gain them is <a href="http://www.dwpriests.com/wiki/Guild_titles">already available on the Discworld Priests Wiki</a>, however while it lists a few examples of pre-titles it doesn't (yet) give details on when they're obtained.  To remedy this situation I have produced the following table listing the pre-titles that Mishal gained and the guild level he gained them at.  Obviously the gender-specific ones (Brother, Blessed father, etc.) will not be the same if your character is female, but the alternative should be obvious.</p>
    <table class="dwpretitlelist">
        <thead>
            <tr>
                <th>Pre-Title</th>
                <th>Guild Level</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Brother/Sister</td>
                <td>51</td>
            </tr>
            <tr>
                <td>Mostly reverend</td>
                <td>101</td>
            </tr>
            <tr>
                <td>Reverend</td>
                <td>151</td>
            </tr>
            <tr>
                <td>Blessed</td>
                <td>201</td>
            </tr>
            <tr>
                <td>Blessed father/mother</td>
                <td>221</td>
            </tr>
            <tr>
                <td>Blessed brother/sister</td>
                <td>223</td>
            </tr>
            <tr>
                <td>Venerable</td>
                <td>251</td>
            </tr>
            <tr>
                <td>Venerable brother/sister</td>
                <td>261</td>
            </tr>
            <tr>
                <td>Venerable father/mother</td>
                <td>271</td>
            </tr>
            <tr>
                <td>Holy</td>
                <td>300</td>
            </tr>
            <tr>
                <td>Holy brother</td>
                <td>311</td>
            </tr>
        </tbody>
    </table>
</article>
@endsection
