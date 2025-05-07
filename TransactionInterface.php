<?php  

interface TransactionInterface {
    public function deposit(float $amount): bool;
    public function withdraw(float $amount): bool;
    public function getBalance(): float;
}