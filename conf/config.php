<?php
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:       mailto.conf 
//	SYSTEM:     RAAMC Association web site
//	AUTHOR:     Mark Addinall
//	DATE:       22/12/2013
//	SYNOPSIS:   This just tells the mailing system inside
//              the membership form whom to send to etc.
//              Nothing very complex.

// You can stick in a few
// recipients of you seperate the email addresses with 
// commas, like so
//
// $to = 'mark_addinall@yahoo.com.au, mickey_mouse@disney.com';
//

$to = 'mark_addinall@yahoo.com.au';

// I suggest you not change this one.  PHP mail is
// quirky and if you are one character over some
// 'secret' undocumented number, the whole thing
// stops.  No errors, just stops.

$subject = 'Message from Home Page';

$platform="WEBPAGE";

?>

