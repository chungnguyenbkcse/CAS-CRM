<?php
    require_once('include/MVC/View/views/view.list.php');
    require_once('modules/Leads/LeadsListViewSmarty.php');

    class CustomLeadsViewList extends ViewList
    {

        

        public function listViewProcess()
        {
            global $current_user;
            $user = BeanFactory::getBean('Users', $current_user->id);

            $GLOBALS['log']->fatal("WHERE: "); 
            $GLOBALS['log']->fatal($this->where);

            

            if ($_COOKIE['role']){
                $role = $_COOKIE['role'];

                if ($role == "MKT"){
                    if ($this->where == ""){
                        $this->where .= " (leads.created_by = '{$user->id}' OR leads.modified_user_id = '{$user->id}') AND leads.data_sources != '9' AND leads.data_sources != '10'";
                    }
                    else {
                        $this->where .= " OR leads.created_by = '{$user->id}' OR leads.modified_user_id = '{$user->id}' AND leads.data_sources != '9' AND leads.data_sources != '10'";
                    }
                }

                if ($role == "RO"){
                    if ($this->where == ""){
                        $this->where .= " (leads.created_by = '{$user->id}') OR (leads.modified_user_id = '{$user->id}' AND leads.ro_modified_sale_stage = true)  OR (leads.ro_name = '{$user->id}' AND leads.sale_stage = '10' AND leads.sale_stage IS NOT NULL AND leads.sale_stage != '0' AND leads.sale_stage != '')";
                    }
                    else {
                        $this->where .= " OR (leads.created_by = '{$user->id}') OR (leads.modified_user_id = '{$user->id}' AND leads.ro_modified_sale_stage = true) OR leads.ro_name = '{$user->id}' AND leads.sale_stage = '10' AND leads.sale_stage IS NOT NULL AND leads.sale_stage != '0' AND leads.sale_stage != ''";
                    }
                }

                if ($role == "HO"){
                    if ($this->where == ""){
                        $this->where .= " (leads.ho_name = '{$user->id}' AND leads.service = '1')";
                    }
                    else {
                        $this->where .= " OR leads.ho_name = '{$user->id}' AND leads.service = '1'";
                    }
                }
                
            }
            $this->lv->searchColumns = $this->searchForm->searchColumns;
            $this->processSearchForm();
            
            if (!$this->headers) {
                return;
            }
            if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
                $this->lv->ss->assign("SEARCH", true);
                $this->lv->ss->assign('savedSearchData', $this->searchForm->getSavedSearchData());
                $GLOBALS['log']->fatal("WHERE1: "); 
                $GLOBALS['log']->fatal($this->where);
                $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
                $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
                echo $this->lv->display();
            }
        }

        /**
         * @see ViewList::preDisplay()
         */
        public function preDisplay()
        {
            require_once('modules/AOS_PDF_Templates/formLetter.php');
            formLetter::LVPopupHtml('Leads');
            $GLOBALS['log']->fatal("CALL AJAX: ");
            echo '<script type="text/javascript" src="custom/modules/Leads/handle_realtime.js"></script>';
            parent::preDisplay();

            $this->lv = new LeadsListViewSmarty();
        }
    }
