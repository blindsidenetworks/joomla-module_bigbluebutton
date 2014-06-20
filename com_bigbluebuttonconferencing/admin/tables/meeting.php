<?php
/*

   Copyright 2010 Blindside Networks

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Versions:
   0.1 --  Initial version written by Omar Shammas
                    (email : omar DOT shammas [a t ] g m ail DOT com)
*/

// No direct access
defined('_JEXEC') or die('Restricted access');
//Change the DS function to DIRECTORY_SEPARATOR FUNCTION OF PHP.
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
 
/**
 * Meeting Table class
 */
class TableMeeting extends JTable
{
    /**
     * Primary Key
     *
     * @var int
     */
    var $id = null;
 
    /**
     * @var string
     */
    var $meetingName = null;
	var $meetingVersion = null;
	var $moderatorPW = null;
	var $attendeePW = null;
	var $waitForModerator = null;
 
    /**
     * Constructor
     *
     * @param object Database connector object
     */
    function TableMeeting( &$db ) {
        parent::__construct('xlgj5_bbb', 'id', $db);
    }
}
