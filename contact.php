<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
// CAPTAIN  SLOG
//
//  FILE:       contact.php 
//  SYSTEM:     My new Home pages 
//  AUTHOR:     Mark Addinall
//  DATE:       21/12/2013
//  SYNOPSIS:

    A contact form cobbled up.

    I had a look at several "off the shelf" open source based 
    solutions, most of which had a fee accompanying the code, and as 
    usual, all of them were hard to use ugly rubbish.  So I wrote 
    my own as per normal.

    I decided not to AJAXify it.  I implemented the code but could
    see no added value in doing so and it added complexity that
    meant we would have different versions for different platforms.
    Not the addinall way of Zen - KISS.  So AJAX was chucked.

    Start.
    Tues January 14th 2014
    (14114) Neat!
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
<link rel="stylesheet" type="text/css" href="css/slim-silver.css">

<script src="js/validate.js" ></script>

<!-- OK, turn on GOOGLE analytics for the new home pages -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-20182761-1', 'addinall.net');
  ga('send', 'pageview');

</script>


<title>That's IT - Contact Form</title>


<!-- Jesus christ!  It takes HOURS and lines and lines of new code, CSS changes,
     just to implement a LIKE Button!  What a CRAP implementation by Faceslap.
     Really, really, really poor!  I went back to the iFrame implementation,
     but THAT breaks HTML5 validation!!!  AAARRRRGGGGHHHH!!!   -->


<meta property="fb:app_id" content="249303871912490" /> 
<meta property="og:type"   content="website" /> 
<meta property="og:url"    content="http://www.addinall.net" /> 
<meta property="og:title"  content="That's IT - Mark Addinall" /> 
<meta property="og:image"  content="http://www.addinall.net/mylogo.jpg" /> 


</head>


<!-- This is all straightforward HTML at the moment.  When the system
    gets tied to the Chameleon CMS, this will end up being a template driven
    PHP HEREDOC.  But we will get the outline woked out first, then we can worry
    about the CMS -->

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
                <h1>That's IT - Contact Form</h1>
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
                        <img src="images/art1.jpg" alt="A picture of some art">
                        <img src="images/art2.jpg" alt="A picture of some art">
                        <img src="images/art3.jpg" alt="A picture of some art">
                        <img src="images/art4.jpg" alt="A picture of some art">
                        <img src="images/art5.jpg" alt="A picture of some art">
                        <img src="images/art6.jpg" alt="A picture of some art">
                        <img src="images/art7.jpg" alt="A picture of some art">
                        <img src="images/art8.jpg" alt="A picture of some art">
                        <img src="images/art9.jpg" alt="A picture of some art">
                        <img src="images/art1.jpg" alt="A picture of some art">
                    </figure>
                </div>
            </div>

            <!-- Left hand side of the header is where we ALWAYS keep the menu. 
                 Again, PURE CSS3, FLUID and RESPONSIVE.  NO Javascript. -->

            <div id="head_left">
                <?php require("menu.php");  ?>
            </div>
        </div>


        <div id="content">
            <div id="column_one">
<?php

// global debug variable to turn on and off testing code
// you might want to leave this alone

$debug = false; 

if ($debug) {
    error_reporting(-1);
}


// global variable that tells this module where it is going to run.
// - Stand alone Web Pages
// - Facebook
// - WordPress
// That is all I am going to bother with.  Can't be fucked
// dicking around with JOOMLA! or any of the other monster CMS systems.

// $platform = "WEBPAGE";
// $platform = "FACEBOOK";
// $platform = "WORDPRESS";


// The following mail file contains the To:  From: CC: Subject:
// information that the customer can modify without calling me.
// Doing an include of course is not possible on FaceSlap, so...

if ($platform == "FACEBOOK") {
    $to = 'mark_addinall@yahoo.com.au';

    // I suggest you not change this one.  PHP mail is
    // quirky and if you are one character over some
    // 'secret' undocumented number, the whole thing
    // stops.  No errors, just stops.
    
    $subject = 'Contact Form - Facebook';
} else {

    include("conf/config.php");
}

// Instantiate the AYAH object. You need to instantiate the AYAH object
// on each page that is using PlayThru.   AYAH (Are You A Human) is the
// graphical replacement for CAPTCHA.  CAPTCHA is getting fucking hard to read,
// even for screen addicts like myself.  The target audience for this
// for is mostly men 50+ that have spent a significant few years
// squinting into the sun or down a rifle barrel!  ex Army.  Blind as
// Coots!  Just like me!  I really can  not see the world any longer!

    if ($platform == "WEBPAGE") {
        require_once("tools/ayah.php");
        $ayah = new AYAH();
    }


    // Check to see if the user has submitted the form.

    if (array_key_exists('submit', $_POST)) {

    // Use the AYAH object to see if the user passed or failed the game.
    // but only if we are on a stand alone web application.  This CAPTCHA
    // tool has o't been integrated by me on the Faceslap or Wordpress models
    // as yet.  So those platforms get no CAPTCHA security at the moment.

    if ($platform == "WEBPAGE") {
        $score = $ayah->scoreResult();
    } else {
        $score = true;
    }

    // now we set up what is going to be common amongst these
    // subsequent information pages in all state.  Worked,
    // mailer fuck up, we think a BOT is playing with us.
    // Everyone gets the left float information page displayed.

    $page = <<<EOH
    <form autocomplete="off" action="index.php" method="post" class="slim-silver">
       <label>Full name:</label>
            <input type="text" name="username" value="{$_REQUEST['username']}" disabled />
       <label>Address 1:</label>
            <input type="text" name="address1" value="{$_REQUEST['address1']}" disabled />
       <label>Address 2:</label>
            <input type="text" name="address2" value="{$_REQUEST['address2']}" disabled />
       <label>Telephone:</label>
            <input type="tel" name="phone" value="{$_REQUEST['phone']}" disabled />
       <label>eMail:</label>
            <input type="email" name="email" value="{$_REQUEST['email']}" disabled  />
       <label>State:</label>
            <input type="text" name="state2" class="small_input" value="{$_REQUEST['state']}" disabled />
       <label>Postcode:</label>
            <input type="text" name="postcode" class="small_input" value="{$_REQUEST['postcode']}" disabled />
       <label>urgency:</label>
            <input type="text" name="urgency2" class="small_input" value="{$_REQUEST['urgency']}" disabled />
       <label>query:</label>
        <textarea name="Query" disabled>
            {$_REQUEST['query']}
        </textarea>
        
       <br>
       <input type="submit" value="Go Home" name="bye" class="submit" />
     </form>     
    </div>      <!-- end of div column_one -->
EOH;

    // OK, dope the customers email address from the form.

    $from = $_REQUEST['email'];
    
    if ($score) {

        // This happens if the user passes the game. In this case,
        // send the details to me. 

        $today    = date("D-d-M-Y-H:i T O");

        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
        $headers .=  'From: ' . $from . "\r\n";

        $postscript= "\n\n<br><br>A confirmation of receipt email has been sent to <em>" 
            .  $_REQUEST['email'] . "</em>\n";

        $message  = "<html>\n";
        $message .= "<head>\n";
        $message .= '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />' . "\n";
        $message .= "<title>HTML Mail Contact Form!</title> \n";
        $message .= "</head> \n";
        $message .= "<body> \n";
        $message .= '<table border="1" cellpadding="3" cellspacing="0">' . "\n";
        $message .= '<tbody align="center" style="font-family:veranda; color:black;background-color:hotpink">' 
                        . "\n";
        $message .= "<tr><td colspan='2'>Home Page Contact Form</td></tr>\n"; 
        $message .= "</tbody>\n";
        $message .= '<tbody align="left" style="font-family:veranda; color:DarkMagenta;background-color:LightPink">' . "\n"; 
        $message .= "<tr><td>Submitted at</td><td>" . $today . "</td></tr>\n";

        $message .= "<tr><td>From</td><td>"             . $_REQUEST['username'] . "</td></tr>\n";
        $message .= "<tr><td>Address line 1</td><td>"   . $_REQUEST['address1'] . "</td></tr>\n";
        $message .= "<tr><td>Address line 2</td><td>"   . $_REQUEST['address2'] . "</td></tr>\n";
        $message .= "<tr><td>Telephone</td><td>"        . $_REQUEST['phone']    . "</td></tr>\n";
        $message .= "<tr><td>Email</td><td>"            . $_REQUEST['email']    . "</td></tr>\n";
        $message .= "<tr><td>State</td><td>"            . $_REQUEST['state']    . "</td></tr>\n";
        $message .= "<tr><td>Query</td><td>"            . $_REQUEST['query']    . "</td></tr>\n";
        $message .= "<tr><td>Urgency</td><td>"          . $_REQUEST['urgency']  . "</td></tr>\n";
        $message .= "<tr><td>Postcode</td><td>"         . $_REQUEST['postcode'] . "</td></tr>\n";

        $message .- "</tbody>\n";
        $message .= "</table>\n";
        $message .= $postscript; 
        $message .= "\n\n</body>\n";
        $message .= "\n</html>\n";


        if ($debug) {
            print "To:       $to <br>";
            print "Subject:  $subject <br>";
            print "From:     $from <br>";
            print "Message:  $message <br>";
            print "Headers:  $headers <br>";

        }


        if (mail($to, $subject, $message, $headers)) {
            // happy
            // get some action to the screen
            // the mailer might make us wait


            print $page;

            $page_two =  <<<EOP2
    <div id="column_two">
    <h1>Mail Sent!</h1>
    <h2 class="white">Congratulations!  It worked!</h2>
      <p class="p1">
      That's IT has been sent mail containg the information displayed on the left in our data tablet. Thank you for contacting me, and I will get back to you shortly. 
      </p>
    <h2 class="black">Why the DUMB CARTOON!</h2>
      <p class="p2">
Why play with the weird cartoons? CAPTCHA. It is a nuisance at times, and yet, it’s a necessity to keep web forms from getting spammed by bots. Consisting of an image with distorted letters and words (that are often illegible), its primary use is to tell the difference between computers and humans. Until now, it’s been mostly successful. However, startup company Vicarious has shown that it has developed an artificial intelligence algorithm that can convince CAPTCHA that its computers are human, bypassing the security, with up to 90% accuracy.
     </p>
    <h2 class="white">What can Happen?</h2>
     <p class="p1">
This will allow bots to use this machine as a SPAM bulk mailer, or worse, a part of DDoS (Distributed Denial of Service attacks) and since I am a white hat, I guard against intrusions as well as I can.  So thanks!
     </p>
EOP2;

    //</div>
            print $page_two;

            // send a copy of the mail to the applicant

            $subject = "Contact Form Information.";


            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
            $headers .=  'From: addinall@addinall.net'  . "\r\n" ;

            // modify the message to suit the customer and shut
            // the fuck up out of Bernd Felsche!  ;-)

            $message = str_replace($postscript,
                        "\n\n<br><br>Your request has been sent to <em>Mark Addinall - That's IT</em>\n",
                            $message);

                
            mail($from, $subject, $message, $headers);

        } else {

            print $page;

            $page_three = <<<EOP3
    <div id="column_two">
    <h1>Contact Form</h1>
    <h2>Bummer!  The mailer broke!</h2>
      <p class="p1">
      The Smallpond cluster in Texas seems to have a broken mailer at the moment.  Your contact details could not be forwarded.  The very BEST thing to do now is to just send some email directly to addinall@addinall.net and ignore this form for a day!  Sorry about that.  I shall go and look at what is broken..
      </p>
EOP3;
            print $page_three;

        }

    } else {
        // This happens if the user does not pass the game.
        // Having had two or three re-tries.  It is a shame that the
        // widget does not terminate after n tries or I seconds.


            print $page;

            $page_four = <<<EOP4
    <div id="coltwo">
    <h1>Contact Form</h1>
    <h2 class="black">Bummer!  Security failure</h2>
      <p class="p1">
      Our security robot seems to think you might be a BOT trying to use us as a SPAM remailer.  This is due to input failing the security game.  Your application could not be forwarded.  We will however re-direct you to our home page and you can have another go if you REALLY ARE HUMAN!If you are a human, and this message keeps pestering you, then WE have broken something.  The very BEST thing to do now is to contact me via normal email at addinall.addinall.net. 
      </p>
    <h2 class="white">What is THIS?</h2>
      <p class="p2">
Why play with the weird cartoons? CAPTCHA. It is a nuisance at times, and yet, it’s a necessity to keep web forms from getting spammed by bots. Consisting of an image with distorted letters and words (that are often illegible), its primary use is to tell the difference between computers and humans. Until now, it’s been mostly successful. However, startup company Vicarious has shown that it has developed an artificial intelligence algorithm that can convince CAPTCHA that its computers are human, bypassing the security, with up to 90% accuracy.  This routine keeps a count of howmany correct moves vs. incorrect moves you made on the cartoon challenge.
     </p>
    <h2 class="black">What can Happen?</h2>
     <p class="p1">
This will allow bots to use this machine as a SPAM bulk mailer, or worse, a part of DDoS (Distributed Denial of Service attacks) and since I am a white hat, I guard against intrusions as well as I can.  So thanks!
     </p>
EOP4;
            print $page_four;

    }
} else {

    // first time in
    // set up the registration form for the customer.
    // looks plain here but the CSS3 makes it pretty.
    //
    // I turned of autofill on this form because GOOGLE
    // and Chrome ignore my CSS and draw their own God
    // awful shitty yeller colour....bastards....

$form = <<<EOF
    <form id="contact_form" name="contact_form" autocomplete="off" method="post" class="slim-silver">
    
        <label>Full name:</label>
            <input type="text" name="username" required placeholder="Full Name with preferred title please. "/>
        <label>Address 1:</label>
            <input type="text" name="address1"  placeholder="First line of street address (optional). "/>
        <label>Address 2:</label>
            <input type="text" name="address2"  placeholder="Second line (optional). "/>
        <label>Telephone:</label>
            <input type="tel" name="phone"  placeholder="Telephone number (optional)." />
        <label>eMail:</label>
            <input type="email" name="email"  required placeholder="MUST supply a valid email address." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                
        <label>State:</label>

        <select name="state">
          <option value="QLD">QLD</option>
          <option value="NSW">NSW</option>
          <option value="Vic">Vic</option>
          <option value="TAS">TAS</option>
          <option value="SA">SA</option>
          <option value="WA">WA</option>
          <option value="NT">NT</option>
          <option value="OTHER">Other</option>
       </select>


       <label>Postcode:</label>
       <input type="text" name="postcode" class="small_input"  placeholder="Optional" pattern="^[0-9]{4}$" />

        <label>Query:</label>

        <select name="query">
          <option value="HELLO">Just Hello</option>
          <option value="DEVELOPMENT">Development required</option>
          <option value="SUPPORT">Support required</option>
          <option value="TRAINING">Training request</option>
          <option value="JOB">Employment offer</option>
          <option value="OTHER">Other</option>
       </select>


        <label>Urgency:</label>

        <select name="urgency">
          <option value="ASAP">ASAP</option>
          <option value="important">Important</option>
          <option value="not_urgent">Not Urgent</option>
          <option value="hello">Just Hello!</option>
       </select>

        <label>Send a Message:</label>

        <textarea id-"description" name="query" class="textarea" cols="50" rows="50"></textarea>
        

EOF;

   print $form;

// Use the AYAH object to get the HTML code needed to
// load and run PlayThru. We must place this code
// directly before your 'Submit' button.

    echo $ayah->getPublisherHTML();

$part_two = <<<EOE
            <input type="submit" value="Submit" id="submit" name="submit" style="display:none;" />
        </form>    

        <div class="form_helper">
            <button class="go_button" onclick="checkAndSubmit()"> Submit </button>
        </div> 

    <!--  now some blurb under the form -->

        <h2 class="black">Database.</h2>
      <p class="p2">
      I have designed, implemented and supported database systems since 1984.  Including mySQL, postgreSQL, ORACLE, MS-SQL, DB/2, Mongo, Mantis, FOCUS, IMS and a few custom ISAM data stores.  My current work includes providing database agnostic Objects/APIs for PHP and Perl frameworks. This work can be found in my GIT HTML5-Toolset /oop/database.php if you want a look. 
      </p>
        <h2 class="white">SQL</h2>
      <p class="p1">
      Very experienced SQL coder in many flavours.  They are all pretty much a muchness.  I spent a good deal of time coding in ORACLE PL/SQL, most notably for the Australian Bureau of Statistics on the new (2006) implementation of the population demographic collection and analysis software. 
      </p>
        <h2 class="black">Network and Storage</h2>
      <p class="p2">
     Very experienced with CISCO and other network apparatus.  I was the development manager at STALLION Technologies, the manufacturer of world famous Australian network devices.  I have experience with SAN and NAS storage architectures, several network fabrics and volume management tools.  I have worked in a role of Systems Architect for organisations including the Queensland University of Technology. 
      </p>
        <h2 class="white">Dark Ages</h2>
      <p class="p1">
      I served with the Australian Regular Army during the 70s.  I have been employed as an underground coal miner, above and below ground lead miner, a welder, farmer and a nurse in the past! 
      </p>
        <h2 class="black">Education</h2>
      <p class="p2">
      Completed degrees (post grad) in engineering and IT in the past. The last attendence in person being 1992.  So possibly no longer relevant.  Details in my <a href="Mark_Addinall_cv_plain.pdf" target="_blank">LONG CV!</a>  Recently I have been making use of Web based distance education a great deal.  A link to some of my recent results can be found <a href="http://www.addinall.com.au/Recent_results/compile.pdf" target="_blank">HERE</a>.  I am committed so far to another two years consisting of Biology, Epidemiology and Education studies.  I have an idea that my IT future will probably be either in the Life Sciences or Education fields.  I am still interested in mainstream coding.  Looking at Bioinformatic and Educational software tells me that they need help; right now! The ability to be creative in a position very welcome. Open for offers! 
      </p>



    </div>  <!-- should be the end of column_one div -->


<!--  Page split here -->

    <div id="column_two">
      <h1 class="white">Zen Web Engineering - Networks</h1>
      <p class="p1">
        Thanks for visiting my site, and my contact page.  You are welcome to use the form just to say HELLO!, but I have included a couple of business related items if you want to discuss any development/support/training issues.  Before we go anywhere, I have to make a point.  <em>I am not keen on PHP MVC Frameworks.</em>  I know how they work, I have used all of them and I can't see the point in today's world of responsive design and AJaXy - AngularJS types of design. Also frameworks encourage people to write messy code. So if you have a CodeIgniter, CakePHP, Symfony, Xii or Zend Framework task in mind, the code had better be clean.  Seriously, the dozen or so projects I have worked on that tried to build an application using one of these systems all went the same way.  First three weeks were just <em>DANDY!</em>  Then when the application started to get complex, the design fell in a heap, leaving non-working, un-maintainable code. So no thanks.  I also <em>NO LONGER</em> do Java (love Javascript) because it is fat, old, slow and ugly.  I don't do Haskell, Ruby, Scala or F# for very similar reasons.  Now that we have covered what I <em>DON'T</em> do, let's have a look at what I <em>DO</em> do! 
      </p>
        <h2 class="black">PHP OOD/OOP Development</h2>
      <p class="p2">
      PHP has been my major weapon of choice for over a decade now.  It is a simple and elegant little language that is <em>MESSED UP</em> on a regular basis by people trying to be too clever by half.  <em>KISS</em>.  When used properly PHP allows us to develop small, reliable and easy to maintain source code for applications small and large. I would think that PHP represent around 75% of my total work to date. 
      </p>
        <h2 class="white">Modern Perl Development</h2>
      <p class="p1">
        I <em>LOVE</em> Perl!  I had the opportunity to code a small system just recently for OzLotto that allowed me to use Modern Perl.  Perl is already fantastic.  The Moose Libraries just make it a whole heap (sic) better.  
      </p>
        <h2 class="black">HTML 5 - CSS 3</h2>
      <p class="p2">
        Goes without saying really, but unless you spell it out, the people that infest the HR departments of the Yooniverse get all confused, twisted and bitter.  I am well experienced in HTML (of all flavours, I concentrate on HTML5 these days), CSS3, responsive Web design for mobile devices. I am having a lot of fun learning and exploring the CSS3 transitions and animations.  Some play code is <a href="http://www.addinall.net/boxmenu" target="_blank">HERE</a>.  Having a play and a think about how more interactive choices could be made in a UI design!
      </p>
        <h2 class="white">Javascript</h2>
      <p class="p1">
        Again I can't see how anyone could AVOID Javascript.  I have had several years coding both native Javascript and jQuery framework.  I enjoy them both.  At the moment I am transfixed with AngularJS and WebGL.  I am working on a few projects that use this new technology right now!  REALLY GOOD tools! 
      </p>
        <h2 class="black">Other Languages</h2>
      <p class="p2">
       Not a <em>LOT</em> of call for these any longer, however I am still very proficient using C, COBOL,  Ada, Pascal, Modula, Algol, PL/1. 
      </p>
        <h2 class="white">Methodologies</h2>
      <p class="p1">
       Have been on teams using LBMS, SSADM, Cascade RAD, Rational Rose, PRINCE2, AGILE.  I have been a Scrum-master, leader of Quality control groups and leader of Project control groups. 
      </p>

        <h2 class="black">Systems Administration</h2>
      <p class="p2">
     I have ALWAYS been the administrator of my development machines.  In a number of roles I have been hired purely as a systems administrator.  My skills include UNIX (Solaris, AIX, BSD, HP-UX), Linux (Red Hat, Debian, Fedora, UBUNTU, Centos), VMWare, VirtualBox, BASH, ksh, Perl, Python, monitoring, patch administration, backup implementation, operation, testing and recovery. 
      </p>

        <h2 class="white">Other Tools</h2>
      <p class="p1">
       I document well, both in-source and application documentation.  Many have commented kindly on this over the years.  I am an average user of Word and the Libre Office suit of software.  I can use GIMP and Photoshop, but not as well as I would like.  I have not found a decent GIMP tutorial yet.  If you know of one, please share!
      </p>
        <h2 class="black">Other Interests</h2>
      <p class="p2">
My guitars!  My surfboard and my pushie!  Reading. Quiet BBQs.  Beer.  Family Guy, Southpark and The Big Bang Theory.  Dark stained Gibson SGJs with black furniture.
      </p>
EOE;

    print $part_two;
}

?>

            </div> <!-- column_two -->
        </div> <!-- content -->
        <div id="footer">
            <?php require("footer.php");  ?>
        </div>
    </div>   <!-- container -->
</body>
</html>

