<?php  

class Bank {
    private $accounts = [];

    public function addAccount(Account $account): void {
        $this->accounts[] = $account;
    }

    public function findAccountByHolder($accountHolder): ?Account {
        foreach ($this->accounts as $account) {
            if ($account->getAccountHolder() === $accountHolder) {
                return $account;
            }
        }
        return null;
    }

    public function getAccountBalance($accountHolder): float {
        $account = $this->findAccountByHolder($accountHolder);
        return $account ? $account->getBalance() : 0;
    }

    public function processTransaction(Transaction $transaction): bool {
        return $transaction->processTransaction();
    }
}
