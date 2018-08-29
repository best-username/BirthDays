<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Yarosh\Dates;

/**
 * Description of BirthDates
 *
 * @author collapse
 */
class BirthDates {
    
    private $birthDate;
    private $todayDate;
    
    public function __construct($birthDate) {
        $this->birthDate = $birthDate;
        $this->todayDate = date("Y-m-d");
    }
    public function findTotalDays() {
        $birthTime = strtotime($this->birthDate);
        $todayTime = strtotime($this->todayDate);
        
        $totalSecs = $todayTime - $birthTime;
        $totalDays = floor($totalSecs / 3600 / 24);
        return $totalDays;
    }
}
