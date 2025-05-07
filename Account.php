<?php  


class Account implements TransactionInterface {
    protected $balance;
    protected $accountHolder;
    protected $accountType;

    public function __construct($accountHolder, $accountType, $initialBalance = 0) {
        $this->accountHolder = $accountHolder;
        $this->accountType = $accountType;
        $this->balance = $initialBalance;
    }

    public function deposit(float $amount): bool {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }

    public function withdraw(float $amount): bool {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function getAccountHolder(): string {
        return $this->accountHolder;
    }

    public function getAccountType(): string {
        return $this->accountType;
    }
}
