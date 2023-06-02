<?php
$module_name = 'MIDAS_PostMachine';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ten_may',
            'comment' => 'Tên nhánh',
            'label' => 'LBL_TEN_MAY',
          ),
          1 => 
          array (
            'name' => 'ma_may',
            'comment' => 'Chi nhánh',
            'label' => 'LBL_MA_MAY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'chi_nhanh',
            'comment' => 'Chi nhánh',
            'label' => 'LBL_CHI_NHANH',
          ),
          1 => 
          array (
            'name' => 'han_muc',
            'comment' => 'Hạn mức',
            'label' => 'LBL_HAN_MUC',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'da_dung',
            'comment' => 'Đã dùng',
            'label' => 'LBL_DA_DUNG',
          ),
        ),
      ),
    ),
  ),
);
;
?>
