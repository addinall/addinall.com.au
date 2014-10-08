
<?php
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:       footer.php 
//	SYSTEM:     My new home pages 
//	AUTHOR:     Mark Addinall
//	DATE:       14/01/2014
//	SYNOPSIS:   Just the footer.  Nothing fancy
//	            Each social button has a horrendous mixture
//	            of Javascript, CSS and HTML to implement a 
//	            simple bloody button.  The spotty script
//	            kiddies that code this rubbish need things thrown
//	            at them.  Whilst in stocks.
//
//------------+-------------------------------+------------
// DATE       |    CHANGE                     |    WHO
//------------+-------------------------------+------------
//

$footer =<<<EOFOOT
                <div class="linked">
                    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                    <script type="IN/Share" data-url="http://www.addinall.net" data-counter="right"></script>
                </div>

                <div class="fb-like" data-href="http://www.addinall.net" 
                        data-layout="button_count" data-action="like" 
                        data-show-faces="false" data-share="false" data-colorscheme="dark">
                </div>

                <div class="twits">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.addinall.net">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],
                        p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){
                            js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
                            fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                    </script>
                </div>

                <p>
                (C) That's IT QLD 2014 - Design and Programming by <a href="mailto:addinall@addinall.net">Mark Addinall</a>. 
                This Website VALIDATES
                    <a href="http://validator.w3.org/check?uri=referer"> HTML5.</a>
                    &nbsp;&nbsp;
                </p>
EOFOOT;

print $footer;

?>
