<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Wombat theme.
 *
 * @package    theme_wombat
 * @copyright  &copy; 2019-onwards G J Barnard.
 * @author     G J Barnard - {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */

$string['choosereadme'] = '
<div class="clearfix">
<h2>Wombat</h2>
<h3>About</h3>
<p>Wombat is a basic child theme of the Boost theme.</p>
<h3>Theme Credits</h3>
<p>Author: G J Barnard<br>
Contact: <a href="http://moodle.org/user/profile.php?id=442195">Moodle profile</a><br>
Website: <a href="http://about.me/gjbarnard">about.me/gjbarnard</a>
</p>
<h3>More information</h3>
<p><a href="wombat/Readme.md">How to use this theme.</a></p>
</div></div>';

$string['configtitle'] = 'Wombat';
$string['pluginname'] = 'Wombat';

$string['region-side-pre'] = 'Left';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Add custom CSS to the theme.';

// Privacy.
$string['privacy:nop'] = 'The Wombat theme stores has settings that pertain to its configuration.  It also may inherit settings and user preferences from the parent Boost theme, please examine the \'Plugin privacy compliance registry\' for \'Boost\' for details.  For the settings, it is your responsibility to ensure that no user data is entered in any of the free text fields.  Setting a setting will result in that action being logged within the core Moodle logging system against the user whom changed it, this is outside of the themes control, please see the core logging system for privacy compliance for this.  When uploading images, you should avoid uploading images with embedded location data (EXIF GPS) included or other such personal data.  It would be possible to extract any location / personal data from the images.  Please examine the code carefully to be sure that it complies with your interpretation of your privacy laws.  I am not a lawyer and my analysis is based on my interpretation.  If you have any doubt then remove the theme forthwith.';

$string['titlesize'] = 'Point size for title';
$string['titlesize_desc'] = 'Set the point size (in pixels) for the title';
$string['morning'] = 'Good morning';
$string['afternoon'] = 'Good afternoon';
$string['evening'] = 'Good evening';
$string['loggedin'] = '. You have been logged in for {$a->duration}.';
$string['durationformat'] = 'G\h i\m \a\n\d s\s';