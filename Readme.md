Introduction
============
Wombat theme.

Modified from Dennis theme, see below for details.
Used in course: MoodleBites for Theme Developers, Level 1.

This is a basic child theme of the Boost theme that aims to provide a starting platform upon which to learn about theme
design with SCSS and Mustache, overloading of renderers, SCSS and templates.

About
=====
Copyright  &copy; 2020-onwards G J Barnard.
Author     G J Barnard - http://about.me/gjbarnard and http://moodle.org/user/profile.php?id=442195
License    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.

Developed and maintained by
===========================
G J Barnard MSc. BSc(Hons)(Sndw). MBCS. CEng. CITP. PGCE.
Moodle profile | http://moodle.org/user/profile.php?id=442195
Web profile | http://about.me/gjbarnard

Free Software
=============
The Wombat theme is 'free' software under the terms of the GNU GPLv3 License, please see 'COPYING.txt'.

You have all the rights granted to you by the GPLv3 license.  If you are unsure about anything, then the
FAQ - www.gnu.org/licenses/gpl-faq.html - is a good place to look.

If you reuse any of the code then I kindly ask that you make reference to the theme.

Required version of Moodle
==========================
This version works with Moodle 3.9 version 2020061500.00 (Build: 20200615) and above within the 3.9 branch until the
next release.

Please ensure that your hardware and software complies with 'Requirements' in 'Installing Moodle' on
'docs.moodle.org/39/en/Installing_Moodle'.

Installation
============
 1. Ensure you have the version of Moodle as stated above in 'Required version of Moodle'.  This is essential as the
    theme relies on underlying core code that is out of my control.
 2. Login as an administrator and put Moodle in 'Maintenance Mode' so that there are no users using it bar you as the administrator.
 3. Copy the extracted 'wombat' folder to the '/theme/' folder.
 4. Go to 'Site administration' -> 'Notifications' and follow standard the 'plugin' update notification.
 5. Select as the theme for the site.
 6. Put Moodle out of Maintenance Mode.

Upgrading
=========
 1. Ensure you have the version of Moodle as stated above in 'Required version of Moodle'.  This is essential as the
    theme relies on underlying core code that is out of my control.
 2. Login as an administrator and put Moodle in 'Maintenance Mode' so that there are no users using it bar you as the administrator.
 3. Make a backup of your old 'wombat' folder in '/theme/' and then delete the folder.
 4. Copy the replacement extracted 'wombat' folder to the '/theme/' folder.
 5. Go to 'Site administration' -> 'Notifications' and follow standard the 'plugin' update notification.
 6. If automatic 'Purge all caches' appears not to work by lack of display etc. then perform a manual 'Purge all caches'
    under 'Home -> Site administration -> Development -> Purge all caches'.
 7. Put Moodle out of Maintenance Mode.

Uninstallation
==============
 1. Put Moodle in 'Maintenance Mode' so that there are no users using it bar you as the administrator.
 2. Change the theme to another theme of your choice.
 3. In '/theme/' remove the folder 'wombat'.
 4. Put Moodle out of Maintenance Mode.

Reporting Issues
================
Before reporting an issue, please ensure that you are running the latest version for your release of Moodle.  It is essential
that you are operating the required version of Moodle as stated at the top - this is because the theme relies on core
functionality that is out of its control.

It is essential that you provide as much information as possible, the critical information being the contents of the theme's
version.php file.  Other version information such as specific Moodle version, theme name and version also helps.  A screen shot
can be really useful in visualising the issue along with any files you consider to be relevant.

Version Information
===================
See Changes.md

Me
==
G J Barnard MSc. BSc(Hons)(Sndw). MBCS. CEng. CITP. PGCE.
Moodle profile: http://moodle.org/user/profile.php?id=442195
Web profile   : http://about.me/gjbarnard
