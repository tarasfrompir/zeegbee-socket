<?php

$this->device_types['electric_socket'] = array(
    'TITLE'=>'Електрична розетка',
    'PARENT_CLASS'=>'SDevices',
    'CLASS'=>'SESocket',
    'PROPERTIES'=>array(
        'groupEco' => array('DESCRIPTION' => LANG_DEVICES_GROUP_ECO, '_CONFIG_TYPE' => 'yesno', '_CONFIG_RESTRICTIONS' => 1, '_CONFIG_HELP' => 'SdGroupEco'),
            'groupEcoOn' => array('DESCRIPTION' => LANG_DEVICES_GROUP_ECO_ON, '_CONFIG_TYPE' => 'yesno', '_CONFIG_RESTRICTIONS' => 1, '_CONFIG_HELP' => 'SdGroupEcoOn'),
            'groupSunrise' => array('DESCRIPTION' => LANG_DEVICES_GROUP_SUNRISE, '_CONFIG_TYPE' => 'yesno', '_CONFIG_RESTRICTIONS' => 1, '_CONFIG_HELP' => 'SdGroupSunrise'),
            'groupSunset' => array('DESCRIPTION' => LANG_DEVICES_GROUP_SUNSET, '_CONFIG_TYPE' => 'yesno', '_CONFIG_RESTRICTIONS' => 1, '_CONFIG_HELP' => 'SdGroupSunset'),
            'groupNight' => array('DESCRIPTION' => LANG_DEVICES_GROUP_NIGHT, '_CONFIG_TYPE' => 'yesno', '_CONFIG_RESTRICTIONS' => 1, '_CONFIG_HELP' => 'SdGroupNight'),
        'curent_power'=>array('DESCRIPTION'=>'Теперішнє споживання електричної розетки.','ONCHANGE'=>'chek_power','DATA_KEY'=>1),
        'canTakeAmper' => array('DESCRIPTION' => 'Альтернативний спосіб розрахунку струму споживання', '_CONFIG_TYPE' => 'yesno', '_CONFIG_RESTRICTIONS' => 1),
        //'state'=>array('DESCRIPTION'=>'Статаус електричної розетки','ONCHANGE'=>'valueUpdated','KEEP_HISTORY'=>365,'DATA_KEY'=>1),
        'current'=>array('DESCRIPTION'=>'Струм споживання електричної розетки. А.','KEEP_HISTORY'=>365),
        'voltage'=>array('DESCRIPTION'=>'Напруга електричної розетки.','ONCHANGE'=>'chek_voltage','KEEP_HISTORY'=>365),
        'power'=>array('DESCRIPTION'=>'Спожита загальна потужність електричної розетки.','ONCHANGE'=>'update_power','KEEP_HISTORY'=>365),
        'power_week'=>array('DESCRIPTION'=>'Спожито потужності за останній тиждень електричної розетки.'),
        'power_month'=>array('DESCRIPTION'=>'Спожито загальної потужності за місяць електричної розетки.'),
        'device_temperature'=>array('DESCRIPTION'=>'Температура пристрою.','ONCHANGE'=>'chek_temp'),
        'linkquality'=>array('DESCRIPTION'=>'Якість сигналу пристрою.'),
        'icon' => array('DESCRIPTION' => 'Зображення пристрою.', '_CONFIG_TYPE' => 'style_image', '_CONFIG_HELP' => 'SdIcon'),
        
    ),
    'METHODS'=>array(
        'turnOn' => array('DESCRIPTION' =>'Включити пристрій.', '_CONFIG_SHOW' => 1,'CALL_PARENT'=>0),
        'turnOff' => array('DESCRIPTION' => 'Виключити пристрій', '_CONFIG_SHOW' => 1,'CALL_PARENT'=>0),
        'switch'=>array('DESCRIPTION'=>'Зміна стану розетки. Вкл/Викл.', '_CONFIG_SHOW' => 1,'CALL_PARENT'=>0),
        'chek_voltage'=>array('DESCRIPTION'=>'Перевірка напруги в мережі.','CALL_PARENT'=>0),
        'update_power'=>array('DESCRIPTION'=>'Оновлення даних споживання цього пристрою.','CALL_PARENT'=>0),
        'chek_temp'=>array('DESCRIPTION'=>'Перевірка темеператури цього пристрою.','CALL_PARENT'=>0),
        'chek_power'=>array('DESCRIPTION'=>'Перевірка потужності, яка споживється на  цьому пристрої.','CALL_PARENT'=>0),
    ));



