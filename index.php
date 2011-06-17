<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">

<?php get_header(); ?>
    
<body>
    
    <?php include(TEMPLATEPATH . '/siteHeader.php'); ?>

    <div id="siteContent" class="clearfix">
        <div class="widthConstraint clearfix">
            
            <div id="definition">
                <div id="definitionInner">
                    <strong>Hacker</strong> [hack·er] /n/ - One who seeks to understand the details of a system and strives to stretch it's capabilities beyond the original intent.
                </div>
            </div>
            
            <?php include(TEMPLATEPATH . '/notifications.php'); ?>
            
            <div id="contentBox">
                <div id="meetingInfo" class="clearfix">
                    <div class="floatLeft">
                        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=lola+coffee,+phoenix,+az&amp;aq=&amp;sll=37.09024,-102.392578&amp;sspn=37.598824,56.513672&amp;ie=UTF8&amp;hq=lola+coffee,&amp;hnear=Phoenix,+Maricopa,+Arizona&amp;cid=17466708338773990751&amp;ll=33.51671,-112.073164&amp;spn=0.025046,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=lola+coffee,+phoenix,+az&amp;aq=&amp;sll=37.09024,-102.392578&amp;sspn=37.598824,56.513672&amp;ie=UTF8&amp;hq=lola+coffee,&amp;hnear=Phoenix,+Maricopa,+Arizona&amp;cid=17466708338773990751&amp;ll=33.51671,-112.073164&amp;spn=0.025046,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    </div>
                    
                    <div class="text">
                        <!-- <h3>Meeting Information</h3> -->
                        <?php $ff = new FirstFriday(); ?>
                        
                        <div id="nextMeetingWrapper">
                            <!-- <h4>Meeting Information</h4> -->
                            
                            <center>
                                <p>The next meeting will be held at 6:00 PM on:</p>
                                <div class="meetingMonth">
                                    <div class="number"><?php echo $ff->firstFriday(true, "M"); ?></div>
                                    <div class="midLine"></div>
                                </div>
                                <div class="meetingDay">
                                    <div class="number"><?php echo $ff->firstFriday(true, "d"); ?></div>
                                    <div class="midLine"></div>
                                </div>
                                <div class="meetingYear">
                                    <div class="number"><?php echo $ff->firstFriday(true, "Y"); ?></div>
                                    <div class="midLine"></div>
                                </div>
                                
                                <p> at Lola Coffee<br/>
                                4700 North Central Avenue<br/>
                                Phoenix, Arizona 85012</p>
                            </center>
                        </div>
                        
                    </div>
                </div>
                
                <div id="meetingGuidelines">
                
                    <h2 class="sectionTitle">Meeting Guidelines</h2>
                    
                    <h3>Official 2600 Guidelines:</h3>
                    <small>These rules are taken directly from the main 2600 website.</small>
                    
                    <ol>
                        <li class="rules">We meet in a public area. Nobody is excluded. We have nothing to hide and we don't presume to judge who is worthy of attending and who is not. If law enforcement harasses us, it will backfire as it did at the infamous Washington DC meeting in 11/92. (You can find more information on this event in the Secret Service section of our web site.)</li>
                        <li class="rules">We act in a responsible manner. We don't do illegal things and we don't cause problems for the place we're meeting in. *Most* 2600 meetings are welcomed by the establishments we choose.</li>
                        <li class="rules">We meet on the first Friday of the month between 5 pm and 8 pm local time. While there will always be people who can't make this particular time, the same will hold true for *any* time or day chosen. By having all of the meetings on the same day, it makes it very easy to remember, opens up the possibility for inter-meeting communication, and really causes hell for the federal agencies who want to monitor everything we do. (A few meetings have slight variations on the meeting time - these are noted accordingly.)</li>
                        <li class="rules">While meetings are not limited to big cities, most of them take place in large metropolitan areas that are easily accessible.While it's convenient to have a meeting in your home town, we encourage people to go to meetings where they'll meet people from as wide an area as possible. So if there's a meeting within an hour or two of your town, go to that one rather than have two smaller meetings fairly close to each other. You always have the opportunity to get together with "home town hackers" any time you want.</li>
                        <li class="rules">All meetings *must* contact us to let us know how things are going even if nothing unusual is happening. If we don't hear from your city on a regular basis, we'll have to stop publicizing the site since telling people to go to where no meeting is really doesn't do anyone a service. You can email us at meetings@2600.com or call us at (631) 751-2600. We also need a way of getting back in touch with you.</li>
                    </ol>
                    
                    <p>Anyone can have meetings and set whatever rules they wish. However, if they're going to be affiliated with 2600, we ask that these few guidelines be observed. Thanks.</p>
                    
                    <div class="note">
                        <h4>NOTE TO ANYONE INTERESTED IN STARTING A NEW MEETING:</h4>
                        <p>If you've read the above guidelines and you're interested in starting a meeting, please do the following: Advertise the meeting place in your community - BBS's are one good way of getting the word out. Post meeting info on the usenet newsgroup alt.2600. Send us email (meetings@2600.com) telling us how your meetings are going after each meeting. We cannot publicize the meetings in 2600 until they have become established and it's up to you to get the word out in your community. Good luck!</p>
                        <p>IRC USERS: Connect to irc.2600.net and go to the channel for your state or country in order to find other people in your area. Use your state's two letter abbreviation followed by 2600 in order to find the right channel (#md2600, #ct2600, etc.) If you're outside the United States, put your two letter Internet country code after the 2600 (#2600au, #2600dk). For example, California and Canada use the same two letter abbreviation (CA). The California channel would be #ca2600 while the Canadian channel would be #2600ca. Other channels may exist for specific meetings within these areas - they should be referenced in the main state or country channels so people can find them. All 2600 channels, like the meetings, are open to all.</p>
                    </div>
                        
                    <h3>PHX2600 Specific Rules:</h3>
                    
                    <ul>
                        <li>Over time our Phoenix meetings have built a reputation of being a very positive environment where no one will get "flamed" by someone that is super "1337." If you think you're better or smarter than someone, keep your arrogance to yourself, but not the knowledge. I'd like to continue to see such a friendly hacker environment and learn even more from it as well.</li>
                        <li>
                            <h4>Projects &amp; Presentations</h4>
                            <ul>
                                <li>There is rarely any planed schedule for the meetings, anyone who is prepared and wishes to give a presentation or show off a project may at any time during a meeting. Also, no one will be forced to give a presentation at any point, ever.</li>
                            </ul>
                        <li>
                            <h4>2550 Meetings (2600 Hangouts)</h4>
                            <ul>
                                <li>2550 meetings (2600 hangouts) are unofficial meetings where a few or more of us from the group get together and just hang out (be it a movie, meal, hack night, etc.). 2550 meetings are rarely planned and usually quite spontaneous but usually announced via PHX2600 public channels (on the forum, via Twitter, etc.).</li>
                            </ul>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </div>
    </div>
    
    <?php get_footer(); ?>

</body>

</html>