<?php

ini_set('display_errors', true);
require_once 'constant-contact/Ctct/autoload.php';

use Ctct\ConstantContact;
use Ctct\Components\Contacts\Contact;
use Ctct\Components\Contacts\ContactList;
use Ctct\Components\Contacts\EmailAddress;
use Ctct\Exceptions\CtctException;

// Enter your Constant Contact APIKEY and ACCESS_TOKEN
define("APIKEY", "9te6mw3q8wuvs69mmu4f7ex3");
//define("ACCESS_TOKEN", "589e8726-b2f8-43a8-8e1e-6bd457c90cc7"); // Test Token
define("ACCESS_TOKEN", "bd6c0f96-e008-4139-b1b0-5a5e73098382"); // SEF Constant Contact 4774ee78-988e-4ad8-adc6-99032d75d1d1

$cc = new ConstantContact(APIKEY);
$list = '1694976329';

$action = "Creating Contact";

$contact = new Contact();
$contact->addEmail('mayank.patel104@gmail.com');
$contact->addList($list);
$contact->first_name = 'Mayank';
$contact->last_name = 'Patel';

/*
 * The third parameter of addContact defaults to false, but if this were set to true it would tell Constant
 * Contact that this action is being performed by the contact themselves, and gives the ability to
 * opt contacts back in and trigger Welcome/Change-of-interest emails.
 *
 * See: http://developer.constantcontact.com/docs/contacts-api/contacts-index.html#opt_in
 */
$returnContact = $cc->addContact(ACCESS_TOKEN, $contact, true);
print_r($returnContact);

echo 'complete';
?>