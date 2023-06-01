<?php
    require_once('include/MVC/View/views/view.list.php');
    require_once('modules/Leads/LeadsListViewSmarty.php');

    class CustomLeadsViewList extends ViewList
    {
        /**
         * @see ViewList::preDisplay()
         */
        public function preDisplay()
        {
            require_once('modules/AOS_PDF_Templates/formLetter.php');
            formLetter::LVPopupHtml('Leads');
            //$GLOBALS['log']->fatal("CALL AJAX: ");
            echo '<script type="text/javascript" src="custom/modules/Leads/js/list.js"></script>';
            parent::preDisplay();

            $this->lv = new LeadsListViewSmarty();
        }
    }
