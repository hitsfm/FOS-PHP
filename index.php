<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<title> FOS Desktop</title>';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">';
echo '<meta name="mobile-web-app-capable" content="yes">';
echo '<meta property="og:url" content="index.html" />';
echo '<meta property="og:type" content="article" />';
echo '<meta property="og:title" content="FOS Desktop" />';
echo '<meta property="og:author" content="WebOS" />';
echo '<meta property="og:description" content="WebOS" />';
echo '<meta property="og:image:width" content="1280" />';
echo '<meta property="og:image:height" content="640" />';
echo '<link rel="icon" href="favicon.png" sizes="256x256"/>';
// Calling Main FOS Desktop Theme CSS File
echo '<link type="text/css" rel="stylesheet" media="all" href="css/main.css" id="theme_css" />';
echo '<script src="js/fos.m.js"></script>';
// Calling Theme Selector includes script
readfile('includes/themeselect.html');
echo '<head>';
echo '<body>';
// Hint, FOS Root Desktop Site ID In All FOS "Desktops" Content html Files Must Always Match OR FOS Breaks.
echo '<fos-desktop id="mainDesktop">';
// Calling FOS Bottom "Start" Button Menu bar.
readfile('includes/startmenubar.html');
// Calling FOS Root Desktop Icons. (Icons On Root Desktop Are Made Draggable. Do to Web Browser "title" tag text display hover.Secondary FOS Desktops have icon dragging disabled)
readfile('includes/rootdesktop_icons.html');
// Calling FOS Root Desktop LOGO Placement
readfile('includes/rootdesktop_logo.html');
// Calling First FOS Root Desktop Icon "Home" FOS Window. Secondary FOS "Desktop" Without Start Menu Bar.
readfile('includes/FOS_home.html');
// Calling second FOS Root Desktop Icon "About" FOS Window. Feel free to edit the about/index.html page html source to suit your needs.
readfile('includes/FOS_about.html');
// Calling Third FOS Root Desktop Icon "Theme" Selector Control FOS Window Page Content.
readfile('includes/FOS_theme.html');
//Calling Fourth FOS Root Desktop Icon "reload" FOS Window Page Content.
readfile('includes/FOS_reload.html');
//calling Fifth FOS Root Desktop Icon "Win Sol.exe" FOS Window Page Content That injects information from an iframe defined in file includes/FOS_winsol.html
readfile('includes/FOS_winsol.html');
//FOS Root Desktop Closing
echo '</fos-desktop>';
//Calling JS control script.
echo '<script src="js/main.js"></script>';
//Closing
echo '</body>';
echo '</html>';
?>