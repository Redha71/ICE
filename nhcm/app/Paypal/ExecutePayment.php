<?php

namespace App\Paypal;
use Illuminate\Http\Request;
use App\NhcMed;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Api\Amount;
use PayPal\Api\Details;


class ExecutePayment extends paypal
{

   Public function execute()
   {

      // After Step 1

        $payment= $this->GetThePayment();
        $execution = $this->CreateExecution();
        $execution->addTransaction($this->transaction());
        $result = $payment->execute($execution, $this->apiContext);
        if($result->state=="approved" ){
          return redirect(route('storeData'));
        }else{
          return redirect(route('home'));
        }
 
       
    	

   }
   public function GetThePayment()
   {
        $paymentId = request("paymentId");
        $payment = Payment::get($paymentId, $this->apiContext);
        return $payment;

   }

   public function CreateExecution()
   {
        $execution = new PaymentExecution();
        $execution->setPayerId(request('PayerID'));
        return $execution;

   }
 

    public function transaction(): Transaction
   {
        $transaction = new Transaction();
        $transaction->setAmount($this->Amount());
        return $transaction;

   }
   /**
    *@return Details
    */
    Protected function  Details (): Details {
        $details = new Details();
        $details->setShipping(1.2)
                ->setTax(1.3)
                ->setSubtotal(17.50);
                return $details;
   }
    /**
    *@return Amount
    */
      Protected function  Amount (): Amount {

   	$amount = new Amount();
        $amount->setCurrency("GBP")
               ->setTotal(20)
               ->setDetails($this->Details());
               return $amount;
   }


}