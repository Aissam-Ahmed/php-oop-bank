<?php  


class Transaction {
    private $account;
    private $amount;
    private $type;

    public function __construct(Account $account, float $amount, string $type) {
        $this->account = $account;
        $this->amount = $amount;
        $this->type = $type;
    }

    public function processTransaction(): bool {
        if ($this->type == 'deposit') {
            return $this->account->deposit($this->amount);
        } elseif ($this->type == 'withdraw') {
            return $this->account->withdraw($this->amount);
        }
        return false;
    }

    public function getTransactionDetails(): string {
        return "{$this->type} of {$this->amount} to account of {$this->account->getAccountHolder()}";
    }
}
