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

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
//Change the DS function to DIRECTORY_SEPARATOR FUNCTION OF PHP.
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_bigbluebuttonconferencing'.DS.'tables');
jimport( 'joomla.application.component.view' );
 
/**
 * Meetings View
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class MeetingsViewMeetings extends JViewLegacy
{
    /**
     * Meetings view display method
     * @return void
     **/
    function display($tpl = null)
    {
		JToolBarHelper::title( JText::_( 'BigBlueButton Conferencing' ), 'generic.png' );
					
        //Get data from the model
        $items =& $this->get( 'Data');
		
		//Gets the url and salt
		$row =& JTable::getInstance('settings', 'Table');
		$row->load(1);
		$row->name == 'salt' ? $salt = $row->varValue : $url = $row->varValue;
		$row->load(2);
		$row->name == 'salt' ? $salt = $row->varValue : $url = $row->varValue;
		
		
		if( $salt && $salt != '' && $url && $url != '' ){
			JToolBarHelper::deleteList();
			JToolBarHelper::addNewX();
		}

		
		$this->assignRef( 'salt', $salt );
		$this->assignRef( 'url', $url );
        $this->assignRef( 'items', $items );
 
        parent::display($tpl);
    }
}
