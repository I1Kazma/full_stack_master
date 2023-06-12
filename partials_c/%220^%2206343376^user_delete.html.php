<div class="modal_head">
    <i class="icon_close" onclick="common.modal_hide()"></i>
</div>
<div class="modal_body">
    <div class="input_group_modal">
        <div>Delete user <?php echo self::$_tpl_vars['user']['first_name']; ?>
 <?php echo self::$_tpl_vars['user']['last_name']; ?>
 ?</div>
    </div>
    <div class="modal_controls">
        <div>
            <div class="btn_modal" onclick="common.user_delete(<?php echo self::$_tpl_vars['user']['id']; ?>
);">Yes</div>
        </div>
        <div>
            <div class="btn_modal light" onclick="common.modal_hide();">No</div>
        </div>
    </div>
</div>