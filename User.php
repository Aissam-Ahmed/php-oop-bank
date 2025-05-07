<?php 

class User {
    private $name;
    private $accounts = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addAccount(Account $account): void {
        $this->accounts[] = $account;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAccounts(): array {
        return $this->accounts;
    }
}
