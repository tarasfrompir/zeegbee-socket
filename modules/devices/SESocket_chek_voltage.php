<?php
//if ($params['NEW_VALUE'] == $params['OLD_VALUE'] || strlen($params['NEW_VALUE']) > 6) return;
$ot = $this->description;

if ($params['NEW_VALUE'] > 245  or $params['NEW_VALUE'] < 180) {
   say('Хазяйва! Блін !!! На пристрої - '.$ot.' зараз  '.$params['NEW_VALUE']. ' вольтів. Можливо треба вимкнути пристрої електричні в будинку, чи перевірити розетку з назвою - ' . $ot, 0);
   registerError('Розетка ' . $ot, 'Хазяйва! Блін !!! На пристрої - '.$ot.' зараз  '.$params['NEW_VALUE']. ' вольтів. Можливо треба вимкнути пристрої електричні в будинку, чи перевірити розетку з назвою - ' . $ot);
}
