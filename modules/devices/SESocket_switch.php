<?php

if ($this->getProperty('status') == 1) {
    $this->setProperty('status', 0);
} else {
    $this->setProperty('status', 1);
}