<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2019-02-27 03:26:43 PM PST
 */

namespace NetSuite\Classes;

class VendorBillExpense {
    public $orderDoc;
    public $orderLine;
    public $line;
    public $category;
    public $account;
    public $amount;
    public $taxAmount;
    public $tax1Amt;
    public $memo;
    public $grossAmt;
    public $taxDetailsReference;
    public $department;
    public $class;
    public $location;
    public $customer;
    public $isBillable;
    public $projectTask;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $amortizationSched;
    public $amortizStartDate;
    public $amortizationEndDate;
    public $amortizationResidual;
    public $customFieldList;
    static $paramtypesmap = array(
        "orderDoc" => "integer",
        "orderLine" => "integer",
        "line" => "integer",
        "category" => "RecordRef",
        "account" => "RecordRef",
        "amount" => "float",
        "taxAmount" => "float",
        "tax1Amt" => "float",
        "memo" => "string",
        "grossAmt" => "float",
        "taxDetailsReference" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "projectTask" => "RecordRef",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "amortizationSched" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "customFieldList" => "CustomFieldList",
    );
}
