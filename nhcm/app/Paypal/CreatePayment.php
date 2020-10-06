<?php

namespace App\Paypal;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;

class CreatePayment extends paypal{

   public function create(){

        $item1 = new Item();
       $item1->setName('Ground Coffee 40 oz')
             ->setCurrency('GBP')
             ->setQuantity(1)
             ->setSku("123123") // Similar to `item_number` in Classic API
             ->setPrice(7.5);
       $item2 = new Item();
       $item2->setName('Granola bars')
             ->setCurrency('GBP')
             ->setQuantity(5)
             ->setSku("321321") // Similar to `item_number` in Classic API
             ->setPrice(2);

        $itemList = new ItemList();
        $itemList->setItems(array($item1, $item2));
 
        $payment = $this->Payment($itemList);

        $payment->create($this->apiContext);
        
    return redirect($payment->getApprovalLink());
   }

   protected function Payer(): Payer
   {

   	$payer = new Payer();
       $payer->setPaymentMethod("paypal");
       return $payer;

   }


   Protected function  Transaction ($itemList): Transaction {

     $transaction = new Transaction();
        $transaction->setAmount($this->Amount())
                    ->setItemList($itemList)
                    ->setDescription("Payment description")
                    ->setInvoiceNumber(uniqid());
                    return $transaction;
   }
   Protected function  RedirectUrls (): RedirectUrls {

   	$redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(config("services.paypal.url.redirect"))
                     ->setCancelUrl(config("services.paypal.url.cancel") );
                     return $redirectUrls;
   }
   Protected function  Payment ($itemList): Payment {

   	 $payment = new Payment($itemList);
        $payment->setIntent("sale")
                ->setPayer($this->Payer())
                ->setRedirectUrls($this->RedirectUrls())
                ->setTransactions([$this->Transaction($itemList)]);
                return $payment;
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