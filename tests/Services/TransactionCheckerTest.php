<?php 

namespace App\Tests\Services;

use App\Services\TransactionChecker;
use PHPUnit\Framework\TestCase;

class TransactionCheckerTest extends TestCase
{

    /**
     * @test
     */
    public function negativeSum()
    {
        $transactionChecker = new TransactionChecker();

        $result = $transactionChecker->isAllowed('debit', 10);

        $this->assertEquals(true, $result);

    }

    /**
     * @test
     */
    public function moreThanThousand()
    {
        $transactionChecker = new TransactionChecker();

        $result = $transactionChecker->isAllowed('credit', 15212);

        $this->assertEquals(false, $result);
    }
}