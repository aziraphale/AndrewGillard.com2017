@extends('layout.master')

@section('content')
<article class="dwsbscript">
    <p>This is the script that I use in MUSHclient to give me a status bar at the bottom of the window displaying my current HP, GP and XP.</p>

    <p>It collects data from "<code>score</code>", "<code>score brief</code>", the combat monitor ("<code>monitor on</code>" if you haven't already done that...) and the MXP entities that the MUD sends back every time you enter a command (if you have MXP enabled), then estimates your current HP/GP/XP based on the number of heartbeats that have elapsed since the last set of data was received and your HP/GP regen rate.  It isn't 100% accurate, but I've found that it's good enough for my purposes.</p>

    <p>
        It looks something like this:<br>
        <a href="{{asset('/img/dw/sb_script/status_bar.png')}}">
            <img src="{{asset('/img/dw/sb_script/status_bar.png')}}" alt="Status Bar">
        </a>
    </p>

    <p><strong>Notes:</strong></p>
    <ul>
        <li>The MUD only sends MXP entities for HP/GP/XP immediately upon you sending a command, so if, for example, you queue commands to perform rituals, at the end of the queue your GP will have reduced, but the status bar won't have been updated to reflect that.  If you only send a single command, the GP cost of it is likely to be updated correctly, but only if the command is executed immediately.</li>
        <li>This script is unable to detect if your HP and/or GP regen rates are changed at any point while playing, such as from stat changes.  Mishal's GP regen rate is changed from 3 to 4 when he wears his flat cap, so I set up extra triggers and script functions to handle it correctly, but that's outside the scope of this little page.  (It doesn't require much JScript/MUSHclient knowledge to implement, however).</li>
        <li>Similarly it will be unable to detect when your idle XP rate changes.  It's set to always use 3 XP per heartbeat, but apparently this changes if you gain too much XP in a given time period (over 500,000 XP per hour or something like that).  I doubt that this will be an issue for too many people, though.</li>
    </ul>

    <p><strong>Installation:</strong></p>
    <ul>
        <li>(I will be assuming in the below instructions that you do not already have a MUSHclient script installed. If you do, you will need to merge them, and that is up to you.)</li>
        <li>Firstly you will need <a href="{{asset('/files/dw_statusbar.zip')}}">this .js file</a>.</li>
        <li>Extract the .js file from the .zip somewhere (the location does not matter, but remember it as you will need it later).</li>
        <li>
            Open the world properties dialog in MUSHclient and select the Scripts section.  In there, set the "Script File" text box to be the path to the .js file you just extracted, and ensure that "JScript" is selected as the Scripting Language.<br>
            <a href="{{asset('/img/dw/sb_script/scripts.png')}}">
                <img src="{{asset('/img/dw/sb_script/scripts.png')}}" alt="Scripts section">
            </a>
        </li>
        <li>
            Next select the Triggers section of preferences.  You will need to create three new triggers:<br>
            <a href="{{asset('/img/dw/sb_script/triggers_list.png')}}">
                <img src="{{asset('/img/dw/sb_script/triggers_list.png')}}" alt="Triggers">
            </a>
            <ul>
                <li>
                    <ul>
                        <li><b>Trigger #1:</b></li>
                        <li><b>Trigger:</b> <code>^[ &gt;]*You have ([0-9]+) \(([0-9]+)\) hit points, ([0-9]+) \(([0-9]+)\) guild points, [0-9]+ \([0-9]+\) quest points, [0-9]+ \([0-9]+\) achievement points and [0-9]+ \([0-9]+\) social points.$</code></li>
                        <li><b>Regular Expression:</b> Yes</li>
                        <li><b>Script:</b> <code>handleScoreLineOne</code></li>
                        <li>
                            <a href="{{asset('/img/dw/sb_script/trigger1.png')}}">
                                <img src="{{asset('/img/dw/sb_script/trigger1.png')}}" alt="Trigger #1">
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><b>Trigger #2:</b></li>
                        <li><b>Trigger:</b> <code>^[ &gt;]*Your current experience is [0-9]+ and [^;]+; your overall rating is [0-9]+.$</code></li>
                        <li><b>Regular Expression:</b> Yes</li>
                        <li><b>Script:</b> <code>handleScoreLineTwo</code></li>
                        <li>
                            <a href="{{asset('/img/dw/sb_script/trigger2.png')}}">
                                <img src="{{asset('/img/dw/sb_script/trigger2.png')}}" alt="Trigger #2">
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><b>Trigger #3:</b></li>
                        <li><b>Trigger:</b> <code>^[ &gt;]*Hp: ?[0-9]+ ?\([0-9]+\)  ?Gp: ?[0-9]+ ?\([0-9]+\)  ?Xp: ?[0-9]+$</code></li>
                        <li><b>Regular Expression:</b> Yes</li>
                        <li><b>Script:</b> <code>handleSBOrMonitor</code></li>
                        <li>
                            <a href="{{asset('/img/dw/sb_script/trigger3.png')}}">
                                <img src="{{asset('/img/dw/sb_script/trigger3.png')}}" alt="Trigger #3">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            Remember that for each of these triggers you must <b>not</b> enter anything in the "Send:" box or you will be breaking MUD rules.
        </li>
        <li>
            Then select the Timers section.  You will need to create two new timers:<br>
            <a href="{{asset('/img/dw/sb_script/timers.png')}}">
                <img src="{{asset('/img/dw/sb_script/timers.png')}}" alt="Timers">
            </a>
            <ul>
                <li>
                    <ul>
                        <li><b>Interval:</b> Every 1 second</li>
                        <li><b>Label:</b> <code>handleMXPEntityChanges</code></li>
                        <li><b>Script:</b> <code>handleMXPEntityChanges</code></li>
                        <li>
                            <a href="{{asset('/img/dw/sb_script/timer1.png')}}">
                                <img src="{{asset('/img/dw/sb_script/timer1.png')}}" alt="Timer #1">
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><b>Interval:</b> Every 2 seconds</li>
                        <li><b>Label:</b> incrementGPHPOnHB</li>
                        <li><b>Script:</b> incrementGPHPOnHB</li>
                        <li>
                            <a href="{{asset('/img/dw/sb_script/timer2.png')}}">
                                <img src="{{asset('/img/dw/sb_script/timer2.png')}}" alt="Timer #2">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            Again, do not enter anything in the "Send" box to avoid breaking MUD rules.
        </li>
        <li>Ensure that the "Info Bar" option is ticked in the "View" menu of MUSHclient's main window.</li>
    </ul>

    <p><strong>Configuration:</strong></p>
    <p>Only limited configuration is needed.  Open up the downloaded .js file in Notepad (or your text editor of choice - Visual Studio handles .js files nicely, but that's overkill for these purposes); the only two lines that you <b>need</b> to check are the first two non-comment lines:</p>
    <ul>
        <li>
            <code>var HPRegenRate = 3;</code><br>
            This needs to be changed to your HP regeneration rate.  If you don't know it, you can get a calculator to determine it at <a href="http://bonuses.darkmud.co.uk/">Skills, Stats and Bonuses web site</a>, and it will probably be a value between 1 and 6.
        </li>
        <li>
            <code>var GPRegenRate = 3;</code><br>
            This needs to be changed to your GP regeneration rate.  If you don't know it, you can get a calculator to determine it at <a href="http://bonuses.darkmud.co.uk/">Skills, Stats and Bonuses web site</a>, and it will probably be a value between 1 and 4.
        </li>
    </ul>

    <p>After those two lines, the rest of the configuration only affects the aesthetics of the status bar:</p>
    <ul>
        <li>
            <code>var barRedPercent = 0;</code><br>
            This is the percentage of HP/GP at which the bar will be "red".  Obviously this should be left at 0.
        </li>
        <li>
            <code>var barYellowPercent = 33;</code><br>
            This is the percentage of HP/GP at which the bar will be "yellow".  Default is 33, i.e. a third.
        </li>
        <li>
            <code>var barGreenPercent = 66;</code><br>
            This is the percentage of HP/GP at which the bar will be "green" (dark green).  Default is 66, i.e. two thirds.
        </li>
        <li>
            <code>var barFullPercent = 100;</code><br>
            This is the percentage of HP/GP at which the bar will be "full" (bright green).  Default is 100, but a slightly lower value might be preferable, depending on your purposes.
        </li>
        <li>
            <code>var barRed = "#ff0000";</code><br>
            The HTML hex code that the bar will be in its "red" state.  Default is "<code>#ff0000</code>", i.e. bright red.
        </li>
        <li>
            <code>var barYellow = "#ffff00";</code><br>
            The HTML hex code that the bar will be in its "yellow" state.  Default is "<code>#ffff00</code>", i.e. bright yellow.
        </li>
        <li>
            <code>var barGreen = "#00a000";</code><br>
            The HTML hex code that the bar will be in its "green" state.  Default is "<code>#00a000</code>", i.e. dark green.
        </li>
        <li>
            <code>var barFull = "#00ff00";</code><br>
            The HTML hex code that the bar will be in its "full" state.  Default is "<code>#00ff00</code>", i.e. bright green.
        </li>
        <li>
            <code>var barBackground = "#808080";</code><br>
            The HTML hex code for the status bar background.  Default is "<code>#808080</code>", i.e. a neutral grey.
        </li>
    </ul>

    <p>I provide this script for free without any warranties, implied or otherwise, etc. etc. etc., but should you have problems with it, feel free to give me (i.e. Mishal) a shout on the MUD and I can try to help you.  As for the copyright status of this script; yes, I made it, but it's so short (under 200 lines) and comparitively trivial, so I'm not going to come running after anyone using it in any way, so long as it's not in a way that is detrimental to myself (e.g. converting it to a script that does damage to the user's computer, then blaming it on me).</p>

    <p>Also, major fluffs to Wodan for adding the MaxGP and MaxHP MXP entities recently.  The data has existed inside the entities as an attribute for some time, but MUSHclient wasn't able to extract it - the new entities have fixed that little problem.</p>
</article>
@endsection
