<?php
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:       menu.php 
//	SYSTEM:     My new home page 
//	AUTHOR:     Mark Addinall
//	DATE:       14/01/2014
//	SYNOPSIS:   Just the menu choices. Nothing fancy
//
//------------+-------------------------------+------------
// DATE       |    CHANGE                     |    WHO
//------------+-------------------------------+------------
// 15/04/2014 | change code for server move   | MA
//

$menu =<<<EOMENU
                <ul class="bmenu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="/breakout" target="_blank">Breakout!</a></li>
                    <li><a href="/movies" target="_blank">Movies</a></li>
                    <li><a href="/ehealth" target="_blank">eHealth</a></li>
                    <li><a href="/Recent_results/compile.pdf" target="_blank">eLearning</a></li>
                    <li><a href="/natural" target="_blank">Natural</a></li>
                    <li><a href="http://www.crosscitydjs.com.au" target="_blank">Cross City</a></li>
                    <li><a href="http://www.csszengarden.com" target="_blank">Zen Garden</a></li>
                    <li><a href="http://www.addinall.org" target="_blank">addinall.org</a></li>
                </ul>
EOMENU;

print $menu;

?>
