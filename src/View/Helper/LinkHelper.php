<?php

/* src/View/Helper/LinkHelper.php */
namespace App\View\Helper;

use Cake\View\Helper;

class LinkHelper extends Helper
{

    public function getStyle($id, $request)
    {

        $path = $request['controller'] . $request['action'];

        $style = '';

        $pages = $this->_pages($id);

        if (in_array($path, $pages)) {
            return 'mm-active';
        }
        return $style;
    }

    private function _pages($id)
    {

        switch ($id) {
            case 'dashboard':
                $pages = array(
                    'Usersdashboard'
                );
                break;
            case 'news':
                $pages = array(
                    'Newsindex',
                    'Newsview',
                );
                break;
            case 'team':
                $pages = array(
                    'PagesadvertisingResources',
                    'Invitationsindex',
                    'Invitationsadd',
                );
                break;
            case 'downline':
                $pages = array(
                    'Newsindex',
                    'Newsview',
                );
                break;
            case 'invitations':
                $pages = array(
                    'Invitationsindex',
                    'Invitationsadd',
                );
                break;
            case 'advertisingresources':
                $pages = array(
                    'PagesadvertisingResources'
                );
                break;
            case 'conferences':
                $pages = array(
                    'Conferenceswebinars',
                    'Conferencespresentations',
                    'Conferencesrecordings',
                );
                break;
            case 'webinars':
                $pages = array(
                    'Conferenceswebinars'
                );
                break;
            case 'presentations':
                $pages = array(
                    'Conferencespresentations'
                );
                break;
            case 'recordings':
                $pages = array(
                    'Conferencesrecordings'
                );
                break;
        }

        return $pages;
    }
}