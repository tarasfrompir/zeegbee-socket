<?php
$command = $details['message'];
if ($device_type == 'electric_socket') {
    if (preg_match('/' . LANG_DEVICES_PATTERN_TURNON . '/uis', $command)) {
            //sayReplySafe(LANG_TURNING_ON . ' ' . $device_title . $add_phrase, 2);
            $run_code.= "setGlobal('$linked_object.status', 1);";
            $opposite_code.= "setGlobal('$linked_object.status', 1);";
            $processed = 1;
            $reply_confirm = 1;
        }  else {
            $processed = 0;
            $reply_confirm = 0;
        }

}