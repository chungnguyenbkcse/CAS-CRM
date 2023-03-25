<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

class HandleDB {
    function removeDataLead(){
        $query_1 = "SELECT COUNT(*) AS total  FROM relationship_sale_stage_lead_status";
        $result_1 = $GLOBALS['db']->query($query_1);
        $row_1 = $GLOBALS['db']->fetchByAssoc($result_1);
        $total_1 = $row_1['total'];

        if ($total_1 != 0) {
            $query_11 = "DELETE FROM relationship_sale_stage_lead_status";
            $GLOBALS['db']->query($query_11);
        }
    }
}