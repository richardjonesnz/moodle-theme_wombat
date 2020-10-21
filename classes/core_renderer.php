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
 * @copyright  &copy; 2020-onwards G J Barnard.
 * @author     G J Barnard - {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */

class theme_wombat_core_renderer extends \theme_boost\output\core_renderer {

    // Override standard edit button.
    public function edit_button(moodle_url $url) {

        $url->param('sesskey', sesskey());

        if ($this->page->user_is_editing()) {
            $url->param('edit', 'off');
            $editstring = get_string('turneditingoff');
            $editimage = $this->image_url('edit_on', 'theme');
            $btn = 'btn-danger';
        } else {
            $url->param('edit', 'on');
            $editstring = get_string('turneditingon');
            $editimage = $this->image_url('edit_off', 'theme');
            $btn = 'btn-success';
        }
        $editimage = html_writer::empty_tag('img', ['src' => $editimage]);
        return html_writer::tag('a', $editimage, ['href' => $url, 'class' =>
                'btn ' . $btn, 'title' => $editstring]);
    }
    /**
     * Wrapper for header elements.
     *
     * @return string HTML to display the main header.
     */
    public function full_header() {
        global $PAGE, $USER;

        $hour = intval(userdate(time(), '%H'));
        if ($hour < 11) {
            $timeofday = get_string('morning', 'theme_wombat');
        } else if ($hour < 18) {
            $timeofday = get_string('afternoon', 'theme_wombat');

        } else {
            $timeofday = get_string('evening', 'theme_wombat');
        }
        $loggedinduration = get_string('loggedin', 'theme_wombat',
                ['duration' => gmdate(get_string('durationformat', 'theme_wombat'), time() - $USER->currentlogin)]);

        if ($this->page->include_region_main_settings_in_header_actions() &&
                !$this->page->blocks->is_block_present('settings')) {
            // Only include the region main settings if the page has requested it and it doesn't already have
            // the settings block on it. The region main settings are included in the settings block and
            // duplicating the content causes behat failures.
            $this->page->add_header_action(html_writer::div(
                $this->region_main_settings_menu(),
                'd-print-none',
                ['id' => 'region-main-settings-menu']
            ));
        }

        $header = new stdClass();
        $header->settingsmenu = $this->context_header_settings_menu();
        $header->contextheader = $this->context_header();
        $header->hasnavbar = empty($this->page->layout_options['nonavbar']);
        $header->navbar = $this->navbar();
        $header->pageheadingbutton = $this->page_heading_button();
        $header->courseheader = $this->course_header();
        $header->headeractions = $this->page->get_header_actions();
        $header->timeofday = $timeofday;
        $header->firstname = $USER->firstname;
        $header->loggedinduration = $loggedinduration;

        return $this->render_from_template('theme_wombat/full_header', $header);
    }

}
