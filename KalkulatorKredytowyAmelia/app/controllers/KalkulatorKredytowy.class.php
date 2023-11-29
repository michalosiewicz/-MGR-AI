<?php

namespace app\controllers;

use core\App;
use app\forms\Dane;
use core\ParamUtils;
use core\Utils;

class KalkulatorKredytowy {

    private $dane;

    // stworzenie danych dla widoku
    public function __construct() {
        $this->dane = new Dane();
    }
    
    // akcja początkowa
    public function action_init() {
        $this->generateView();
    }   

    // akcja dla przycisku oblicz
    public function action_oblicz() {
        $this->dane->kredyt = ParamUtils::getFromRequest('kredyt');
        $this->dane->oprocentowanie = ParamUtils::getFromRequest('oprocentowanie');
        $this->dane->okres_kredytowania = ParamUtils::getFromRequest('okres_kredytowania');

        if($this->isValid()) {
            $this->oblicz();
        }

        $this->generateView();
    }

    // sprawdzenie, czy potrzebne wartości zostały przekazane
    private function isValid() {
        if (empty($this->dane->kredyt)) {
            Utils::addErrorMessage('Nie podano kwoty kredytu');
        }
        if (empty($this->dane->oprocentowanie)) {
            Utils::addErrorMessage('Nie podano oprocentowania');
        }
        if (empty($this->dane->okres_kredytowania)) {
            Utils::addErrorMessage('Nie podano kwoty okresu kredytowania');
        }
        if (App::getMessages()->isError()){
            return false;
        }
        if (! is_numeric($this->dane->kredyt)) {
            Utils::addErrorMessage('Kwota kredytu jest niepoprawna');
        }
        if (! is_numeric($this->dane->oprocentowanie)) {
            Utils::addErrorMessage('Oprocentowanie jest niepoprawne');
        }
        if (! is_numeric($this->dane->okres_kredytowania)) {
            Utils::addErrorMessage('Okres kredytowania jest niepoprawny');
        }
        return !App::getMessages()->isError();
    }

    // obliczanie wyniku
    private function oblicz() {
        $kwota = intval($this->dane->kredyt);
	    $oprocnetowanie = intval($this->dane->oprocentowanie);
	    $okres = intval($this->dane->okres_kredytowania);

	    if ($kwota <= 0) {
            Utils::addErrorMessage('Kwota kredytu jest ujemna');
	    }
	
	    if ($oprocnetowanie <= 0 || $oprocnetowanie >= 100) {
            Utils::addErrorMessage('Oprocentowanie jest niepoprawne');
	    }
	
	    if ($okres <= 0) {
            Utils::addErrorMessage('Okres kredytowania jest ujemna');
	    }
        if (App::getMessages()->isError()){
            return;
        }
        $odestki = $kwota * $oprocnetowanie/100 * $okres;
	    $result = $odestki + $kwota;
        Utils::addInfoMessage("Koszy kredytu: {$result}");
    }

    // generowanie widoku
    private function generateView() {
        App::getSmarty()->assign("dane",$this->dane);    
        App::getSmarty()->display("Kalkulator.tpl");
    }
}
 