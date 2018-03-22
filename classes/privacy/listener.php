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
 * Contains the privacy metadata listener implementation.
 *
 * @package    tool_dataprivacy
 * @copyright  2018 Jake Dallimore <jrhdallimore@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace tool_dataprivacy\privacy;

use core_privacy\local\metadata\collection;

/**
 * Privacy class for receiving and processing metadata updates from core_privacy, during upgrade and install.
 *
 * @copyright  2018 Jake Dallimore <jrhdallimore@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class listener implements
        // Listens for metadata updates from core
        \core_privacy\local\metadata\listener {

    /**
     * Receives the complete collection of component privacy metadata for the site.
     *
     * @param array $metadata The assoc array of \core_privacy\metadata\collection objects, indexed by frankenstyle component name.
     */
    public static function process_metadata(array $metadata) {
        echo "<<<<<<<< NEW METADATA FOUND >>>>>>>>>>>>>>\n";
        print_r($metadata);
    }
}
