<?php

   

    require_once '../paymentGateway/Paypal/Transaction.php';
    require_once '../paymentGateway/Stripe/Transaction.php';

    use paymentGateway\Paypal\Transaction as PaypalTransaction;
    use paymentGateway\Stripe\Transaction as StripeTransaction;

    $raba = new PaypalTransaction();
    $raba->person();

    class PaymentService {

        public function createTransaction($transactionMethod) {
            if ($transactionMethod == 'paypal') {
                $transaction = new PaypalTransaction();
            }else if($transactionMethod == 'stripe') {
                $transaction = new StripeTransaction();
            }
        }

    }

    $obj = new PaymentService();






