<?php
//if ($params['NEW_VALUE'] == $params['OLD_VALUE'] || strlen($params['NEW_VALUE']) > 6) return;
$ot = $this->description;

if ($params['NEW_VALUE'] > 0 and $params['OLD_VALUE'] == 0 ) {
   sayTo('Хазяїн !!! Пристрій - '.$ot.' зявилось споживання, отже підключений прилад запрацював.', 3, 'Vasilisa_Alarm');
}

if ($params['NEW_VALUE'] == 0 and $params['OLD_VALUE'] > 0 ) {
   sayTo('Хазяїн !!! Пристрій - '.$ot.' зникло споживання, отже підключений прилад вимкнувся.', 3, 'Vasilisa_Alarm');
}

if ($params['NEW_VALUE'] > 3000 ) {
   say('Хазяйва! Блін !!! На пристрої - '.$ot.' зараз споживається '.$params['NEW_VALUE']. ' ват. Можливо треба вимкнути пристрої електричні в будинку, чи перевірити розетку з назвою - ' . $ot, 3);
    registerError('Розетка ' . $ot, 'Хазяйва! Блін !!! На пристрої - '.$ot.' зараз споживається '.$params['NEW_VALUE']. ' ват. Можливо треба вимкнути пристрої електричні в будинку, чи перевірити розетку з назвою - ' . $ot);
}

if ( $this->getProperty('canTakeAmper') == 1 ) {
    $this->setProperty('current' , round($params['NEW_VALUE']/220, 2));
}