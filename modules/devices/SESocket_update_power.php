<?php
//if ($params['NEW_VALUE'] == $params['OLD_VALUE'] || strlen($params['NEW_VALUE']) > 6) return;
$ot = $this->object_title;

$history = getHistory($ot.".power", strtotime("-7 day"));
$this->setProperty('power_week', intval($history[count($history) - 1]["VALUE"] - $history[0]["VALUE"]));

$history = getHistory($ot.".power", strtotime("-31 day"));
$this->setProperty('power_month', intval($history[count($history) - 1]["VALUE"] - $history[0]["VALUE"]));
