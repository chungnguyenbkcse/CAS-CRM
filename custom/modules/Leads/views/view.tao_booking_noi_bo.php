<?php
    require_once('include/MVC/View/views/view.list.php');
    require_once('modules/Leads/LeadsListViewSmarty.php');

    class LeadsViewTao_booking_noi_bo extends ViewList
    {

        // Call function  _getModuleTitleParams( $show_help = true ) to custom title for new tab bar
        public function _getModuleTitleParams($show_help = true)
        {
            //[logic here]ETCETCETC
            $params[] = $GLOBALS['app_strings']['LBL_BOOKING_NOI_BO'];
            return $params;
        }


        /**
         * @see ViewList::preDisplay()
         */
        public function preDisplay()
        {
            require_once('modules/AOS_PDF_Templates/formLetter.php');
            formLetter::LVPopupHtml('Leads');
            //$GLOBALS['log']->fatal("CALL AJAX: ");
            echo '<script type="text/javascript" src="custom/modules/Leads/js/tao_booking_noi_bo.js"></script>';
            parent::preDisplay();

            $this->lv = new LeadsListViewSmarty();
        }

        /**
         * @see ViewList::preDisplay()
         */
        public function display() {
            parent::display();
        }
    }