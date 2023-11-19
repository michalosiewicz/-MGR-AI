<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$loanAmount = $_REQUEST ['loanAmount'];
$interest = $_REQUEST ['interest'];
$repaymentPeriod = $_REQUEST ['repaymentPeriod'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($loanAmount) && isset($interest) && isset($repaymentPeriod))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $loanAmount == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $interest == "") {
	$messages [] = 'Nie podano oprocentowania';
}
if ( $repaymentPeriod == "") {
	$messages [] = 'Nie podano okresu kredytowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $loanAmount )) {
		$messages [] = 'Kwota kredytu jest niepoprawna';
	}
	
	if (! is_numeric( $interest )) {
		$messages [] = 'Oprocentowanie jest niepoprawne';
	}
	
	if (! is_numeric( $repaymentPeriod )) {
		$messages [] = 'Okres kredytowania jest niepoprawny';
	}

}

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$loanAmount = intval($loanAmount);
	$interest = intval($interest);
	$repaymentPeriod = intval($repaymentPeriod);

	if ($loanAmount <= 0) {
		$messages [] = 'Kwota kredytu jest ujemna';
	}
	
	if ($interest <= 0 || $interest >= 100) {
		$messages [] = 'Oprocentowanie jest niepoprawne';
	}
	
	if ($repaymentPeriod <= 0) {
		$messages [] = 'Okres kredytowania jest ujemna';
	}
	
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) {
	//wykonanie operacji
	$interestAfterYears = $loanAmount * $interest/100 * $repaymentPeriod;
	$result = $interestAfterYears + $loanAmount;
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';