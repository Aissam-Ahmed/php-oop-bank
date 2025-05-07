<?php  
spl_autoload_register(function($class) {
    require_once("./$class.php");
});

// إنشاء البنك
$bank = new Bank();

// إنشاء المستخدمين
$user1 = new User("Ali");
$user2 = new User("Fatima");

// إضافة حسابات للمستخدمين
$account1 = new Account("Ali", "Saving", 1000);
$account2 = new Account("Fatima", "Current", 500);

$user1->addAccount($account1);
$user2->addAccount($account2);

// إضافة الحسابات للبنك
$bank->addAccount($account1);
$bank->addAccount($account2);

// إجراء عملية إيداع وسحب
$depositTransaction = new Transaction($account1, 500, 'deposit');
$withdrawTransaction = new Transaction($account2, 200, 'withdraw');

// معالجة المعاملات
$bank->processTransaction($depositTransaction);
$bank->processTransaction($withdrawTransaction);

// عرض الرصيد النهائي
echo "Ali's balance: " . $bank->getAccountBalance("Ali") . PHP_EOL;
echo "Fatima's balance: " . $bank->getAccountBalance("Fatima") . PHP_EOL;
