<?php

class UserFormExtension extends DataExtension
{
    public function updateCMSActions(FieldList $actions) {

        $actions->push(FormAction::create('removeAllEnquiries', 'Remove all enquiries')->addExtraClass('gridfield-better-buttons-delete'));

        return $actions;
    }
}
