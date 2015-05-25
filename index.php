<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--
 vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
// CAPTAIN  SLOG
//
//  FILE:       index.php 
//  SYSTEM:     My new home page` 
//  AUTHOR:     Mark Addinall
//  DATE:       12/01/2014
//  SYNOPSIS:

    This page in all of its manifistations is RESPONSIVE and FLUID.
    It will work on a PC, Fondleslab or telephone.  Perhaps not a
    Rotary Telephone.

    I did my first home page well over a decade ago, spent two hour
    on it and ignored it ever since!  "Painters Houses"...    

    Everything in this site is built responsive from the ground up,
    the slider, the forms, image containers, movie containers.

    Again, I looked at some WordPress themes thinking I could save
    some effort, but as usual they were awful, fat and hard to
    use.  Fair dinkum, the CMS ststems on offer are very poor quality.
    As soon as this site is done I am going to tie a copy of Chameleon
    to it to manage the content.


-->

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="A web site created for me.">
<meta name="keywords"  content="HTML5, CSS3, PHP, Responsive, Fluid, Web, Design, Modern">
<meta name="author" content="Mark Addinall.  Brisbane. Australia">
<meta name="robots" content="all">

<link href='http://fonts.googleapis.com/css?family=Rosarivo:400,400italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">

<title>That's IT - Mark Addinall </title>

<!-- I am going to include a LEETLE bit of Javascript
     to stick some extra verification on a couple of input fields.  I THOUGHT
     I  might have been able to do it with HTML5 native verifications, but they
     are not yet really implemented and are all over the place.  I am not
     going to import libraries or framworks.  Using native Javascript it
     should only take 1-2KB to get what I require.  I want to guard against
     potential mail address injection attacks.  
     ALL of the animation, transformations, sliders, tricky DOM bits
     are being done in CSS3.  The Javascript is limited to client
     side authentication on the content form.  Full stop.   -->

<?php

// global debug variable to turn on and off testing code
// you might want to leave this alone

if ($debug) {
    error_reporting(-1);
}

?>



<!-- Jesus christ!  It takes HOURS and lines and lines of new code, CSS changes,
     just to implement a LIKE Button!  What a CRAP implementation by Faceslap.
     Really, really, really poor!  I went back to the iFrame implementation,
     but THAT breaks HTML5 validation!!!  AAARRRRGGGGHHHH!!!   -->


  <meta property="fb:app_id" content="249303871912490" /> 
  <meta property="og:type"   content="website" /> 
  <meta property="og:url"    content="http://www.addinall.net" /> 
  <meta property="og:title"  content="That's IT - Mark Addinall" /> 
  <meta property="og:image"  content="http://www.addinall.net/mylogo.jpg" /> 

<!-- This is all straightforward HTML at the moment.  When the system
    gets tied to the Chameleon CMS, this will end up being a template driven
    PHP HEREDOC.  But we will get the outline woked out first, then we can worry
    about the CMS -->

<!-- Turn on GOOGLE analytics for the new home site -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-20182761-1', 'addinall.net');
  ga('send', 'pageview');

</script>

</head>


<body>


<!--  MORE Faceslap crap just to get a button on the screen!  -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div id="container">
        <div id="header">
            <div id="logo">
                <h1>That's IT - Mark Addinall</h1>
            </div>
            <div id="head_right">

                <!-- the HERO slider area.  The slider is PURE CSS3.  No FLASH!
                     no Javascript, nothing but CSS.  It is only a handle full of
                     lines of code.  Proviso, ALL oy your photos HAVE to be the
                     same size.  So you need to get your GIMP on!  It only has one transition
                     at the moment.  Slides to the left.  That's all I need it
                     to do.  So, rather than 8000 lines of Javascript, we have 61 lines
                     of CSS  and the little table of figures below.  I chose 9
                     heros as an arbitary number because base 10 arithmatic makes
                     calculations a doddle!  I am LAZY!  -->

                <div id="slider">
                    <figure>
                        <img src="images/bonsai1.jpg" alt="A picture of some bonsai art">
                        <img src="images/bonsai2.jpg" alt="A picture of some bonsai art">
                        <img src="images/bonsai3.jpg" alt="A picture of some bonsai art">
                        <img src="images/bonsai4.jpg" alt="A picture of some bonsai art">
                        <img src="images/bonsai5.jpg" alt="A picture of some bonsai art">
                        <img src="images/bonsai6.jpg" alt="A picture of some bonsai art">
                        <img src="images/bonsai7.jpg" alt="A picture of some bonsai art">
                        <img src="images/bonsai8.jpg" alt="A picture of some bonsai art">
                        <img src="images/bonsai9.jpg" alt="A picture of some bonsai art">
                        <img src="images/bonsai1.jpg" alt="A picture of some bonsai art">
                    </figure>
                </div>
            </div>

            <!-- Left hand side of the header is where we ALWAYS keep the menu. 
                 Again, PURE CSS3, FLUID and RESPONSIVE.  NO Javascript. -->

            <div id="head_left">
                <?php require("menu.php"); ?>
            </div>
        </div>


        <div id="content">
            <div id="column_one">
                <h1 class="white">Welcome!</h1>
                <p class="p1">
                Welcome to my new home page.  There is not much of it. I put up my last web site about fourteen years ago.  I spent a whole two hours on it, and left it standing in a horrible ugly mess for all of that time!  "Painters Houses!".  So I decided to stick this  little one up in place.  It is a result of one of my lightweight templates, designed to be RESPONSIVE and FLUID from the ground up.  Lightweight, including graphics, 610KB.  Like I said though, there is not much to it.  What there is is CSS3 and HTML5, no FLASH!, ImageMagik or Javascript trickery!  I don't mind Javascript, I use it and the library jQuery a LOT, it just happens to be fun to see what can be done using the new web standards.
                </p>
                <p class="p1">
                The menu mostly contains links to some of my other work, a couple commercial and a couple experimental.  Most of the stuff you can "View source" and read how the things are put together.  Be <em>WARNED!</em>  I swear in my comments when people make me do <em>STUPID</em> things!  You will not be able to do this with Cross City DJs, <em>THAT</em> is a <em>HUGE</em> heavily modified Wordpress site with a <em>LOT</em> going on!
                </p>
                <p class="p1">
                These menu selections open a new page or a new tab depending on your browser set up.  I did this because each site has a different user interface and are <em>ALL</em> very different from this page.
                </p>
                <h1 class="black">Contact Page</h1>
                <p class="p2">
                Just another contact form.  I like playing with custom forms!  A little page that describes my services and the opportunity to say hello.  Nothing mind blowing!
                </p>
                <h1 class="white">Breakout</h1>
                <p class="p1">
                A little RETRO game I wrote to experiment with the new HTML5 &lt;canvas&gt; object.  Almost pure Javascript.  It was quite a lot of fun having never written a game in the past. 
                </p>
                <h1 class="black">Movies</h1>
                <p class="p2">
                Again, this was and is an experimental couple of pages that explore the new HTML5 &lt;video&gt; object.  I must have been in a RETRO mood that month!  Only the first two movies on the menu work.  I did stick the lot up once, it grabbed a LOT of disk!  Maybe I'll dedicate a virtual machine to it one of these days and implement a large library.  Enjoy, sit back, and why not share a Hamburger sandwich?  OR TWO? 
                </p>
                <h1 class="white">eLearning</h1>
                <p class="p1">
                People that know me know that I have been a student pretty much all of my life.  Never once attended Uni full time, always had a job to do, but made sure I studied every year.  Lately I became interested in eLearning.  Here are a few of the electronic course I have taken during 2012, 2013 and 2014 along with results.  The concept is fantastic.  One course I took, Virology I was possible <em>THE BEST</em> course I have ever done, bar none.  I would like to get involved in education - educational software as an occupation.  The concepts are fine, the user interfaces are clunky! Open to offers, see my contact page!  eLearning from a software point of view; I am currently in the throes of advanced AngularJS with Meteor.  MVC as it is SUPPOSED to be done.  So very, very, very good.  Also WebGL for tightly bound PUSH pages using a new interface paradigm.  I am having a LOT of fun with this stuff!
                </p>
            </div>

            <div id="column_two">
                <h1 class="black">eHealth</h1>
                <p class ="p2">
                Twelve months to two years ago there was a <em>LOT</em> of nonsense talked about how the FTTH NBN was going to <em>REVOLUTIONISE</em> eHEalth.  So I put up this page that briefly discusses some of the different aspects of eHealth, and why that an NBN will improve the field is pure fiction.  It also served as an experiment to play with some newer &lsquo;Look and Feel&rsquo; models for my future web sites. We see this year that the gubbermint National Health Tranking Thingy is another <em>$BILLION disaster!</em>
                </p>
                <h1 class="white">Natural</h1>
                <p class="p3">
                A very simple, minimalistic web site for my good friend in Africa, Belinda Addinall. It is responsive apart from the Heading.  I must fix that now that I remember.   Just an example of how a web site can be pretty, functional, and not take up a terabyte of space and a development team for a year!  This is a free plug and a cross link!
                </p>
                <h1 class="black">Cross City DJs</h1>
                <p class="p2">
                A <em>NOT</em> very simple, <em>UN-</em>minimalistic web site for my good friend Lawrence Ridolfi.  This one took some time and effort!  It is a busy busy busy site!  That is what the customer wanted!  So after blood, sweat and tears, <em>FIGHTING</em> WordPress at every step of the way, we finally finished the thing!  The Contact Page has more code in it that the Junk Strike Fighter!  Some Web sites turn out bigger than Ben Hur!  I have had a few in the past...  Again this is a free cross-link and an unashamed plug for Cross City DJs, Brisbane and the Gold Coast! Terrific DJ!  Here is a more recent web page put together for <a href="http://www.crosscitydjs.com.au/eportfolio" target="_blank">Cross City.</a> Somewhat sadly I taught the owner how to use Wordpress CMS and what was once a couple of lovely sites now really look and feel BLOODY AWFUL.  My name has gone away from the footer.  "The customer is always right".  Except when they are colour blind and talentless.  NO LONGER MY DESIGN.
                </p>
                <h1 class="white">Zen Garden</h1>
                <p class="p3">
                 This is one of my <em>VERY</em> favourite pages on the Web.  I have been visiting the site for ten years now and it has influenced the way I code to a great extent.  Keeping the HTML simple, clean, small, readable and <em>FREE</em> of in-line styling, and have the work done by CSS.  This was difficult in the past, but do-able.  There were many cross-browser "hacks" to consider and some fundemental differences in architecture as in &lsquo;What is the BORDER-WIDTH&rsquo;!  Thankfully most of this clumsiness has vanished, and we CSS3 we are truly able to work magic! I am still exploring the CSS3 attributes and transistions  I still have a way to go and am <em>NEVER</em> going to be a Graphic Artist, but I have fun with it. I hope you like having a little look around.  Visit the <em>CONTACT</em> page and send me a message! Suggestions very welcome.
                </p>
                <h1 class="black">More Work.</h1>
                <p class="p2">
                A lot of my work over the last two decades has been implementing applications on intranets, CAMEL (Coal and Mineral Electonic Link) for QLD Rail and BHP, QuickTools for Telstra, Quicktools for OPTUS, QuickTools for iiNEt, various in-house management systems and such-like, so it is not easy to view that side of my work.  I have taken screenshots of a few of them <a href="https://www.facebook.com/photo.php?fbid=10202054196654778&amp;set=a.1700744196760.2086870.1182579989&amp;type=3&amp;theater" target="_blank">HERE</a> if you would like a peek!  Some live sites in the travel industry live <a href="http://www.africa-adventure.com" target="_blank">HERE</a> and <a href="http://www.outbackencounter.com"  target="_blank">HERE</a>.   My CV is <a href="http://www.addinall.net/Mark_Addinall_cv_plain.pdf" target="_blank">HERE</a>.  Be warned, it is <em>LONG</em>.  I have been coding every day just about for thirty five years now!  Thanks for dropping in!      
                </p>
            </div>
        </div>
        <div id="footer">
            <?php require("footer.php");  ?>
        </div>
    </div>
</body>
</html>


