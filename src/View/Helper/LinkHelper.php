<?php

/* src/View/Helper/LinkHelper.php */
namespace App\View\Helper;

use Cake\View\Helper;

class LinkHelper extends Helper
{

    public function getStyle($id, $request)
    {

        if (!empty($request['pass'])) {
            $path = $request['controller'] . $request['action'] . $request['pass']['0'];
        } else {
            $path = $request['controller'] . $request['action'];
        }

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
                    'Usersdownline'
                );
                break;
            case 'downline':
                $pages = array(
                    'Usersdownline'
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
            case 'steps':
                $pages = array(
                    'Stepsindex1',
                    'Stepsindex2',
                    'Stepsindex3',
                    'Stepsindex4',
                    'Stepsindex5',
                    'Stepsindex6'
                );
                break;
            case '1':
                $pages = array(
                    'Stepsindex1'
                );
                break;
            case '2':
                $pages = array(
                    'Stepsindex2'
                );
                break;
            case '3':
                $pages = array(
                    'Stepsindex3'
                );
                break;
            case '4':
                $pages = array(
                    'Stepsindex4'
                );
                break;
            case '5':
                $pages = array(
                    'Stepsindex5'
                );
                break;
            case '6':
                $pages = array(
                    'Stepsindex6'
                );
                break;
        }

        return $pages;
    }
}