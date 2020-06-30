<?php

namespace App\Services;

use App\Entity\PiggyBank;
use App\Entity\Transaction;



class TransactionChecker
{
    public function isAllowed(string $type, float $amount) : bool
    {
        
        $pb = new PiggyBank();

        if ($pb->getBalance() + $amount > 1000 && $type == 'crédit' ) {
            return false; 
        } elseif ($pb->getBalance() - $amount < 0 && $type == 'débit') {
            return false;
        } else {
            return true;
        }
    }
}