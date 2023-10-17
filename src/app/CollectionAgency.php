<?php

namespace App;

class CollectionAgency implements DebtCollector {

	public function collect(float $owedAmount): float {
		$guaranteed = $owedAmount * 0.5;

		return mt_rand($guaranteed, $owedAmount);	// mt_rand accetta interi come argomenti, ma qui si passano float. Se si attivassero gli strict types verrebbe sollevato un errore.
	}

}