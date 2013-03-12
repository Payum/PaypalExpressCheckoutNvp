<?php
namespace Payum\Paypal\ExpressCheckout\Nvp;

use Payum\Exception\InvalidArgumentException;
use Payum\Exception\LogicException;

/**
 * Docs:
 *   SetExpressCheckout: {@link https://www.x.com/developers/paypal/documentation-tools/api/setexpresscheckout-api-operation-nvp}
 */
class PaymentInstruction implements \ArrayAccess, \IteratorAggregate
{
    protected $token = '';

    protected $custom;

    protected $invnum;

    protected $phonenum;

    protected $paypaladjustment;

    protected $note;

    protected $redirectrequired;

    protected $checkoutstatus;

    protected $returnurl;

    protected $cancelurl;

    protected $giftmessage;

    protected $giftreceiptenable;

    protected $giftwrapname;

    protected $giftwrapamount;

    protected $buyermarketingemail;

    protected $surveyquestion;

    protected $surveychoiceselected;

    protected $email;

    protected $payerid;

    protected $payerstatus;

    protected $countrycode;

    protected $business;

    protected $salutation;

    protected $firstname;

    protected $middlename;

    protected $lastname;

    protected $suffix;

    protected $timestamp;

    protected $correlationid;

    protected $version;

    protected $build;

    protected $ack;
    
    protected $noshipping;

    protected $reqconfirmshipping;

    protected $paymentrequest_nnn_shiptoname = array();

    protected $paymentrequest_nnn_shiptostreet = array();

    protected $paymentrequest_nnn_shiptostreet2 = array();

    protected $paymentrequest_nnn_shiptocity = array();

    protected $paymentrequest_nnn_shiptostate = array();

    protected $paymentrequest_nnn_shiptozip = array();

    protected $paymentrequest_nnn_shiptocountrycode = array();

    protected $paymentrequest_nnn_shiptophonenum = array();

    protected $paymentrequest_nnn_addressstatus = array();

    protected $paymentrequest_nnn_amt = array();

    protected $paymentrequest_nnn_currencycode = array();

    protected $paymentrequest_nnn_itemamt = array();

    protected $paymentrequest_nnn_shippingamt = array();

    protected $paymentrequest_nnn_insuranceamt = array();

    protected $paymentrequest_nnn_shipdiscamt = array();

    protected $paymentrequest_nnn_insuranceoptionoffered = array();

    protected $paymentrequest_nnn_handlingamt = array();

    protected $paymentrequest_nnn_taxamt = array();

    protected $paymentrequest_nnn_desc = array();

    protected $paymentrequest_nnn_custom = array();

    protected $paymentrequest_nnn_invnum = array();

    protected $paymentrequest_nnn_notifyurl = array();

    protected $paymentrequest_nnn_notetext = array();

    protected $paymentrequest_nnn_transactionid = array();

    protected $paymentrequest_nnn_allowedpaymentmethod = array();

    protected $paymentrequest_nnn_paymentrequestid = array();

    protected $paymentrequest_nnn_paymentaction = array();

    protected $paymentrequest_nnn_paymentstatus = array();

    protected $paymentrequest_nnn_exchangerate = array();

    protected $paymentrequest_nnn_settleamt = array();

    protected $paymentrequest_nnn_feeamt = array();

    protected $paymentrequest_nnn_ordertime = array();

    protected $paymentrequest_nnn_paymenttype = array();

    protected $paymentrequest_nnn_transactiontype = array();

    protected $paymentrequest_nnn_receiptid = array();

    protected $paymentrequest_nnn_parenttransactionid = array();

    protected $paymentrequest_nnn_pendingreason = array();

    protected $paymentrequest_nnn_reasoncode = array();

    protected $l_paymentrequest_nnn_namemmm = array();

    protected $l_paymentrequest_nnn_descmmm = array();

    protected $l_paymentrequest_nnn_qtymmm = array();

    protected $l_paymentrequest_nnn_amtmmm = array();

    protected $l_paymentrequest_nnn_itemcategorymmm = array();

    protected $l_errorcodennn = array();

    protected $l_shortmessagennn = array();

    protected $l_longmessagennn = array();

    protected $l_severitycodennn = array();

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getCustom()
    {
        return $this->custom;
    }

    public function setCustom($custom)
    {
        $this->custom = $custom;
    }

    public function getInvnum()
    {
        return $this->invnum;
    }

    public function setInvnum($invnum)
    {
        $this->invnum = $invnum;
    }

    public function getPhonenum()
    {
        return $this->phonenum;
    }

    public function setPhonenum($phonenum)
    {
        $this->phonenum = $phonenum;
    }

    public function getPaypaladjustment()
    {
        return $this->paypaladjustment;
    }

    public function setPaypaladjustment($paypaladjustment)
    {
        $this->paypaladjustment = $paypaladjustment;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
        $this->note = $note;
    }

    public function getRedirectrequired()
    {
        return $this->redirectrequired;
    }

    public function setRedirectrequired($redirectrequired)
    {
        $this->redirectrequired = $redirectrequired;
    }

    public function getCheckoutstatus()
    {
        return $this->checkoutstatus;
    }

    public function setCheckoutstatus($checkoutstatus)
    {
        $this->checkoutstatus = $checkoutstatus;
    }

    public function getGiftmessage()
    {
        return $this->giftmessage;
    }

    public function setGiftmessage($giftmessage)
    {
        $this->giftmessage = $giftmessage;
    }

    public function getGiftreceiptenable()
    {
        return $this->giftreceiptenable;
    }

    public function setGiftreceiptenable($giftreceiptenable)
    {
        $this->giftreceiptenable = $giftreceiptenable;
    }

    public function getGiftwrapname()
    {
        return $this->giftwrapname;
    }

    public function setGiftwrapname($giftwrapname)
    {
        $this->giftwrapname = $giftwrapname;
    }

    public function getGiftwrapamount()
    {
        return $this->giftwrapamount;
    }

    public function setGiftwrapamount($giftwrapamount)
    {
        $this->giftwrapamount = $giftwrapamount;
    }

    public function getBuyermarketingemail()
    {
        return $this->buyermarketingemail;
    }

    public function setBuyermarketingemail($buyermarketingemail)
    {
        $this->buyermarketingemail = $buyermarketingemail;
    }

    public function getSurveyquestion()
    {
        return $this->surveyquestion;
    }

    public function setSurveyquestion($surveyquestion)
    {
        $this->surveyquestion = $surveyquestion;
    }

    public function getSurveychoiceselected()
    {
        return $this->surveychoiceselected;
    }

    public function setSurveychoiceselected($surveychoiceselected)
    {
        $this->surveychoiceselected = $surveychoiceselected;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPayerid()
    {
        return $this->payerid;
    }

    public function setPayerid($payerid)
    {
        $this->payerid = $payerid;
    }

    public function getPayerstatus()
    {
        return $this->payerstatus;
    }

    public function setPayerstatus($payerstatus)
    {
        $this->payerstatus = $payerstatus;
    }

    public function getCountrycode()
    {
        return $this->countrycode;
    }

    public function setCountrycode($countrycode)
    {
        $this->countrycode = $countrycode;
    }

    public function getBusiness()
    {
        return $this->business;
    }

    public function setBusiness($business)
    {
        $this->business = $business;
    }

    public function getSalutation()
    {
        return $this->salutation;
    }

    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getMiddlename()
    {
        return $this->middlename;
    }

    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getSuffix()
    {
        return $this->suffix;
    }

    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    public function getCorrelationid()
    {
        return $this->correlationid;
    }

    public function setCorrelationid($correlationid)
    {
        $this->correlationid = $correlationid;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getBuild()
    {
        return $this->build;
    }

    public function setBuild($build)
    {
        $this->build = $build;
    }

    public function getAck()
    {
        return $this->ack;
    }

    public function setAck($ack)
    {
        $this->ack = $ack;
    }

    public function getReturnurl()
    {
        return $this->returnurl;
    }

    public function setReturnurl($returnurl)
    {
        $this->returnurl = $returnurl;
    }

    public function getCancelurl()
    {
        return $this->cancelurl;
    }

    public function setCancelurl($cancelurl)
    {
        $this->cancelurl = $cancelurl;
    }

    public function getNoshipping()
    {
        return $this->noshipping;
    }

    public function setNoshipping($noshipping)
    {
        $this->noshipping = $noshipping;
    }

    public function getReqconfirmshipping()
    {
        return $this->reqconfirmshipping;
    }

    public function setReqconfirmshipping($reqconfirmshipping)
    {
        $this->reqconfirmshipping = $reqconfirmshipping;
    }

    public function getPaymentrequestShiptostreet($n = null)
    {
        return $this->get('paymentrequest_nnn_shiptostreet', $n);
    }

    public function setPaymentrequestShiptostreet($n, $value)
    {
        $this->set('paymentrequest_nnn_shiptostreet', $value, $n);
    }

    public function getPaymentrequestShiptoname($n = null)
    {
        return $this->get('paymentrequest_nnn_shiptoname', $n);
    }

    public function setPaymentrequestShiptoname($n, $value)
    {
        $this->set('paymentrequest_nnn_shiptoname', $value, $n);
    }

    public function getPaymentrequestShiptostreet2($n = null)
    {
        return $this->get('paymentrequest_nnn_shiptostreet2', $n);
    }

    public function setPaymentrequestShiptostreet2($n, $value)
    {
        $this->set('paymentrequest_nnn_shiptostreet2', $value, $n);
    }

    public function getPaymentrequestShiptocity($n = null)
    {
        return $this->get('paymentrequest_nnn_shiptocity', $n);
    }

    public function setPaymentrequestShiptocity($n, $value)
    {
        $this->set('paymentrequest_nnn_shiptocity', $value, $n);
    }

    public function getPaymentrequestShiptostate($n = null)
    {
        return $this->get('paymentrequest_nnn_shiptostate', $n);
    }

    public function setPaymentrequestShiptostate($n, $value)
    {
        $this->set('paymentrequest_nnn_shiptostate', $value, $n);
    }

    public function getPaymentrequestShiptozip($n = null)
    {
        return $this->get('paymentrequest_nnn_shiptozip', $n);
    }

    public function setPaymentrequestShiptozip($n, $value)
    {
        $this->set('paymentrequest_nnn_shiptozip', $value, $n);
    }

    public function getPaymentrequestShiptocountrycode($n = null)
    {
        return $this->get('paymentrequest_nnn_shiptocountrycode', $n);
    }

    public function setPaymentrequestShiptocountrycode($n, $value)
    {
        $this->set('paymentrequest_nnn_shiptocountrycode', $value, $n);
    }

    public function getPaymentrequestShiptophonenum($n = null)
    {
        return $this->get('paymentrequest_nnn_shiptophonenum', $n);
    }

    public function setPaymentrequestShiptophonenum($n, $value)
    {
        $this->set('paymentrequest_nnn_shiptophonenum', $value, $n);
    }

    public function getPaymentrequestAddressstatus($n = null)
    {
        return $this->get('paymentrequest_nnn_addressstatus', $n);
    }

    public function setPaymentrequestAddressstatus($n, $value)
    {
        $this->set('paymentrequest_nnn_addressstatus', $value, $n);
    }

    public function getPaymentrequestAmt($n = null)
    {
        return $this->get('paymentrequest_nnn_amt', $n);
    }

    public function setPaymentrequestAmt($n, $value)
    {
        $this->set('paymentrequest_nnn_amt', $value, $n);
    }

    public function getPaymentrequestCurrencycode($n = null)
    {
        return $this->get('paymentrequest_nnn_currencycode', $n);
    }

    public function setPaymentrequestCurrencycode($n, $value)
    {
        $this->set('paymentrequest_nnn_currencycode', $value, $n);
    }

    public function getPaymentrequestItemamt($n = null)
    {
        return $this->get('paymentrequest_nnn_itemamt', $n);
    }

    public function setPaymentrequestItemamt($n, $value)
    {
        $this->set('paymentrequest_nnn_itemamt', $value, $n);
    }

    public function getPaymentrequestShippingamt($n = null)
    {
        return $this->get('paymentrequest_nnn_shippingamt', $n);
    }

    public function setPaymentrequestShippingamt($n, $value)
    {
        $this->set('paymentrequest_nnn_shippingamt', $value, $n);
    }

    public function getPaymentrequestInsuranceamt($n = null)
    {
        return $this->get('paymentrequest_nnn_insuranceamt', $n);
    }

    public function setPaymentrequestInsuranceamt($n, $value)
    {
        $this->set('paymentrequest_nnn_insuranceamt', $value, $n);
    }

    public function getPaymentrequestShipdiscamt($n = null)
    {
        return $this->get('paymentrequest_nnn_shipdiscamt', $n);
    }

    public function setPaymentrequestShipdiscamt($n, $value)
    {
        $this->set('paymentrequest_nnn_shipdiscamt', $value, $n);
    }

    public function getPaymentrequestInsuranceoptionoffered($n = null)
    {
        return $this->get('paymentrequest_nnn_insuranceoptionoffered', $n);
    }

    public function setPaymentrequestInsuranceoptionoffered($n, $value)
    {
        $this->set('paymentrequest_nnn_insuranceoptionoffered', $value, $n);
    }

    public function getPaymentrequestHandlingamt($n = null)
    {
        return $this->get('paymentrequest_nnn_handlingamt', $n);
    }

    public function setPaymentrequestHandlingamt($n, $value)
    {
        $this->set('paymentrequest_nnn_handlingamt', $value, $n);
    }

    public function getPaymentrequestTaxamt($n = null)
    {
        return $this->get('paymentrequest_nnn_taxamt', $n);
    }

    public function setPaymentrequestTaxamt($n, $value)
    {
        $this->set('paymentrequest_nnn_taxamt', $value, $n);
    }

    public function getPaymentrequestDesc($n = null)
    {
        return $this->get('paymentrequest_nnn_desc', $n);
    }

    public function setPaymentrequestDesc($n, $value)
    {
        $this->set('paymentrequest_nnn_desc', $value, $n);
    }

    public function getPaymentrequestCustom($n = null)
    {
        return $this->get('paymentrequest_nnn_custom', $n);
    }

    public function setPaymentrequestCustom($n, $value)
    {
        $this->set('paymentrequest_nnn_custom', $value, $n);
    }

    public function getPaymentrequestInvnum($n = null)
    {
        return $this->get('paymentrequest_nnn_invnum', $n);
    }

    public function setPaymentrequestInvnum($n, $value)
    {
        $this->set('paymentrequest_nnn_invnum', $value, $n);
    }

    public function getPaymentrequestNotifyurl($n = null)
    {
        return $this->get('paymentrequest_nnn_notifyurl', $n);
    }

    public function setPaymentrequestNotifyurl($n, $value)
    {
        $this->set('paymentrequest_nnn_notifyurl', $value, $n);
    }

    public function getPaymentrequestNotetext($n = null)
    {
        return $this->get('paymentrequest_nnn_notetext', $n);
    }

    public function setPaymentrequestNotetext($n, $value)
    {
        $this->set('paymentrequest_nnn_notetext', $value, $n);
    }

    public function getPaymentrequestTransactionid($n = null)
    {
        return $this->get('paymentrequest_nnn_transactionid', $n);
    }

    public function setPaymentrequestTransactionid($n, $value)
    {
        $this->set('paymentrequest_nnn_transactionid', $value, $n);
    }

    public function getPaymentrequestAllowedpaymentmethod($n = null)
    {
        return $this->get('paymentrequest_nnn_allowedpaymentmethod', $n);
    }

    public function setPaymentrequestAllowedpaymentmethod($n, $value)
    {
        $this->set('paymentrequest_nnn_allowedpaymentmethod', $value, $n);
    }

    public function getPaymentrequestPaymentrequestid($n = null)
    {
        return $this->get('paymentrequest_nnn_paymentrequestid', $n);
    }

    public function setPaymentrequestPaymentrequestid($n, $value)
    {
        $this->set('paymentrequest_nnn_paymentrequestid', $value, $n);
    }

    public function getPaymentrequestPaymentaction($n = null)
    {
        return $this->get('paymentrequest_nnn_paymentaction', $n);
    }

    public function setPaymentrequestPaymentaction($n, $value)
    {
        $this->set('paymentrequest_nnn_paymentaction', $value, $n);
    }

    public function getPaymentrequestPaymentstatus($n = null)
    {
        return $this->get('paymentrequest_nnn_paymentstatus', $n);
    }

    public function setPaymentrequestPaymentstatus($n, $value)
    {
        $this->set('paymentrequest_nnn_paymentstatus', $value, $n);
    }

    public function getPaymentrequestExchangerate($n = null)
    {
        return $this->get('paymentrequest_nnn_exchangerate', $n);
    }

    public function setPaymentrequestExchangerate($n, $value)
    {
        $this->set('paymentrequest_nnn_exchangerate', $value, $n);
    }

    public function getPaymentrequestSettleamt($n = null)
    {
        return $this->get('paymentrequest_nnn_settleamt', $n);
    }

    public function setPaymentrequestSettleamt($n, $value)
    {
        $this->set('paymentrequest_nnn_settleamt', $value, $n);
    }

    public function getPaymentrequestFeeamt($n = null)
    {
        return $this->get('paymentrequest_nnn_feeamt', $n);
    }

    public function setPaymentrequestFeeamt($n, $value)
    {
        $this->set('paymentrequest_nnn_feeamt', $value, $n);
    }

    public function getPaymentrequestOrdertime($n = null)
    {
        return $this->get('paymentrequest_nnn_ordertime', $n);
    }

    public function setPaymentrequestOrdertime($n, $value)
    {
        $this->set('paymentrequest_nnn_ordertime', $value, $n);
    }

    public function getPaymentrequestPaymenttype($n = null)
    {
        return $this->get('paymentrequest_nnn_paymenttype', $n);
    }

    public function setPaymentrequestPaymenttype($n, $value)
    {
        $this->set('paymentrequest_nnn_paymenttype', $value, $n);
    }

    public function getPaymentrequestTransactiontype($n = null)
    {
        return $this->get('paymentrequest_nnn_transactiontype', $n);
    }

    public function setPaymentrequestTransactiontype($n, $value)
    {
        $this->set('paymentrequest_nnn_transactiontype', $value, $n);
    }

    public function getPaymentrequestReceiptid($n = null)
    {
        return $this->get('paymentrequest_nnn_receiptid', $n);
    }

    public function setPaymentrequestReceiptid($n, $value)
    {
        $this->set('paymentrequest_nnn_receiptid', $value, $n);
    }

    public function getPaymentrequestParenttransactionid($n = null)
    {
        return $this->get('paymentrequest_nnn_parenttransactionid', $n);
    }

    public function setPaymentrequestParenttransactionid($n, $value)
    {
        $this->set('paymentrequest_nnn_parenttransactionid', $value, $n);
    }

    public function getPaymentrequestPendingreason($n = null)
    {
        return $this->get('paymentrequest_nnn_pendingreason', $n);
    }

    public function setPaymentrequestPendingreason($n, $value)
    {
        $this->set('paymentrequest_nnn_pendingreason', $value, $n);
    }

    public function getPaymentrequestReasoncode($n = null)
    {
        return $this->get('paymentrequest_nnn_reasoncode', $n);
    }

    public function setPaymentrequestReasoncode($n, $value)
    {
        $this->set('paymentrequest_nnn_reasoncode', $value, $n);
    }

    public function getLPaymentrequestName($n, $m)
    {
        return $this->get('l_paymentrequest_nnn_namemmm', $n, $m);
    }

    public function setLPaymentrequestName($n, $m, $value)
    {
        $this->set('l_paymentrequest_nnn_namemmm', $value, $n, $m);
    }

    public function getLPaymentrequestDesc($n, $m)
    {
        return $this->get('l_paymentrequest_nnn_descmmm', $n, $m);
    }

    public function setLPaymentrequestDesc($n, $m, $value)
    {
        $this->set('l_paymentrequest_nnn_descmmm', $value, $n, $m);
    }

    public function getLPaymentrequestQty($n, $m)
    {
        return $this->get('l_paymentrequest_nnn_qtymmm', $n, $m);
    }

    public function setLPaymentrequestQty($n, $m, $value)
    {
        $this->set('l_paymentrequest_nnn_qtymmm', $value, $n, $m);
    }

    public function getLPaymentrequestAmt($n, $m)
    {
        return $this->get('l_paymentrequest_nnn_amtmmm', $n, $m);
    }

    public function setLPaymentrequestAmt($n, $m, $value)
    {
        $this->set('l_paymentrequest_nnn_amtmmm', $value, $n, $m);
    }

    public function getLPaymentrequestItemcategory($n, $m)
    {
        return $this->get('l_paymentrequest_nnn_itemcategorymmm', $n, $m);
    }

    public function setLPaymentrequestItemcategory($n, $m, $value)
    {
        $this->set('l_paymentrequest_nnn_itemcategorymmm', $value, $n, $m);
    }

    public function getLSeveritycoden($n = null)
    {
        return $this->get('l_severitycodennn', $n);
    }

    public function setLSeveritycoden($n, $value)
    {
        $this->set('l_severitycodennn', $value, $n);
    }

    public function getLLongmessagen($n = null)
    {
        return $this->get('l_longmessagennn', $n);
    }

    public function setLLongmessagen($n, $value)
    {
        $this->set('l_longmessagennn', $value, $n);
    }

    public function getLShortmessagen($n = null)
    {
        return $this->get('l_shortmessagennn', $n);
    }

    public function setLShortmessagen($n, $value)
    {
        $this->set('l_shortmessagennn', $value, $n);
    }

    public function getLErrorcoden($n = null)
    {
        return $this->get('l_errorcodennn', $n);
    }

    public function setLErrorcoden($n, $value)
    {
        $this->set('l_errorcodennn', $value, $n);
    }

    public function clearErrors()
    {
        $this->l_errorcodennn = array();
        $this->l_longmessagennn = array();
        $this->l_severitycodennn = array();
        $this->l_shortmessagennn = array();
    }

    /**
     * @deprecated since 0.3 move the logic to offsetSet
     *
     * @param $nvp array|\Traversable
     */
    protected function fromNvp($nvp)
    {
        if (false == (is_array($nvp) || $nvp instanceof \Traversable)) {
            throw new InvalidArgumentException('Invalid nvp argument. Should be an array of an object implemented \Traversable interface.');
        }

        foreach ($nvp as $name => $value) {
            $property = $name;
            $property = preg_replace('/\d/', 'nnn', $property, 1);

            if (false === strpos($name, 'SHIPTOSTREET2')) {
                $property = preg_replace('/\d/', 'mmm', $property, 1);
            }

            $property = strtolower($property);

            if (false == property_exists($this, $property)) {
                continue;
            }

            $matches = array();
            preg_match_all('/\d/', $name, $matches);
            if (array_key_exists(0, $matches) && array_key_exists(0, $matches[0])) {
                if (array_key_exists(1, $matches[0]) && false === strpos($name, 'SHIPTOSTREET2')) {
                    $this->set($property, $value, $matches[0][1], $matches[0][1]);
                } else {
                    $this->set($property, $value, $matches[0][0]);
                }
            } else {
                $this->$property = $value;
            }
        }
    }

    /**
     * @deprecated since 0.3 move the logic to offsetGet
     *
     * @return array
     */
    protected function toNvp()
    {
        $nvp = array();
        foreach (get_object_vars($this) as $property => $value) {
            $name = strtoupper($property);

            if (is_array($value)) {
                foreach ($value as $indexN => $valueN) {
                    $nameN = str_replace('NNN', $indexN, $name);
                    if (is_array($valueN)) {
                        foreach ($valueN as $indexM => $valueM) {
                            $nameM = str_replace('MMM', $indexM, $nameN);
                            $nvp[$nameM] = $valueM;
                        }
                    } else {
                        $nvp[$nameN] = $valueN;
                    }
                }
            } else {
                $nvp[$name] = $value;
            }
        }

        return array_filter($nvp);
    }

    protected function set($property, $value, $n = null, $m = null)
    {
        $currentValue = $this->$property;
        if (null !== $n && null !== $m) {
            if (false == isset($currentValue[$n])) {
                $currentValue[$n] = array();
            }

            $currentValue[$n][$m] = $value;
        } else if (null !== $n) {
            $currentValue[$n] = $value;
        }

        $this->$property = $currentValue;
    }

    protected function get($property, $n = false, $m = false)
    {
        $currentValue = $this->$property;
        if (false !== $n && false !== $m) {
            if (null === $n && null === $m) {
                return $currentValue;
            }
            if (array_key_exists($n, $currentValue) && array_key_exists($m, $currentValue[$n])) {
                return $currentValue[$n][$m];
            }
        }
        if (null === $n) {
            return $currentValue;
        }
        if (array_key_exists($n, $currentValue)) {
            return $currentValue[$n];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->toNvp());
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->toNvp());
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $nvp = $this->toNvp();

        return array_key_exists($offset, $nvp) ?
            $nvp[$offset] :
            null
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $this->fromNvp(array($offset => $value));
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        throw new LogicException('Not implemented');
    }
}