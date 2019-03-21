<?php

class UserFormsLeftAndMainExtension extends LeftAndMainExtension
{
    private static $better_buttons_actions = array (
        'removeAllEnquiries'
    );
    public function removeAllEnquiries(){
        $pageID = $this->owner->currentPageID();;
        foreach(SubmittedForm::get()->filter('ParentID',$pageID) as $submission)
        {
            foreach(SubmittedFormField::get()->filter('ParentID',$submission->ID) as $subfield){
                $subfield->delete();
            }
            $submission->delete();
        }

        $this->owner->redirect();
    }
}
