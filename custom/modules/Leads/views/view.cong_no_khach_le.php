<?php
    require_once('include/MVC/View/views/view.list.php');
    require_once('modules/Leads/LeadsListViewSmarty.php');

    class LeadsViewCong_no_khach_le extends ViewList
    {
        /**
         * @see ViewList::preDisplay()
         */
        public function display() {
            parent::display();
        }
    }