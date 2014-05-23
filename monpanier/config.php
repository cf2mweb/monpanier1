<?php

// monpanier v1

$config['accueil']="./exemple1.php";

$config['jcartPath']              = 'monpanier/';

// Path to your checkout page
$config['checkoutPath']           = 'commande.php';

// The HTML name attributes used in your item forms
$config['item']['id']             = 'id-panier';    // Item id
$config['item']['name']           = 'nom-panier';    // Item name
$config['item']['price']          = 'prix-panier';    // Item price
$config['item']['qty']            = 'nb-panier';    // Item quantity
$config['item']['url']            = 'url-panier';    // Item URL (optional)
$config['item']['add']            = 'ajouter-panier';    


// Your PayPal secure merchant ID
// Found here: https://www.paypal.com/webapps/customerprofile/summary.view
$config['paypal']['id']           = 'K7XDJ7837U33Q';

////////////////////////////////////////////////////////////////////////////////
// OPTIONAL SETTINGS

// Three-letter currency code, defaults to USD if empty
// See available options here: http://j.mp/agNsTx
$config['currencyCode']           = 'EUR';

// Add a unique token to form posts to prevent CSRF exploits
// Learn more: http://conceptlogic.com/jcart/security.php
$config['csrfToken']              = true;

// Override default cart text
$config['text']['cartTitle']      = 'Mon panier';    // Shopping Cart
$config['text']['singleItem']     = 'article';    // Item
$config['text']['multipleItems']  = 'articles';    // Items
$config['text']['subtotal']       = 'sous-total';    // Subtotal
$config['text']['update']         = 'mettre à jour';    // update
$config['text']['checkout']       = 'Passer ma commande';    // checkout
$config['text']['checkoutPaypal'] = 'Passer ma commande';    // Checkout with PayPal
$config['text']['removeLink']     = 'retirer';    // remove
$config['text']['emptyButton']    = 'vider';    // empty
$config['text']['emptyMessage']   = 'Votre panier est vide';    // Your cart is empty!
$config['text']['itemAdded']      = 'article ajouté';    // Item added!
$config['text']['priceError']     = 'Prix non valide';    // Invalid price format!
$config['text']['quantityError']  = 'La quantité doit être un entier';    // Item quantities must be whole numbers!
$config['text']['checkoutError']  = 'Echec de la vente, merci de réessayer!';    // Your order could not be processed!

// Override the default buttons by entering paths to your button images
$config['button']['checkout']     = '';
$config['button']['paypal']       = '';
$config['button']['update']       = '';
$config['button']['empty']        = '';


////////////////////////////////////////////////////////////////////////////////
// ADVANCED SETTINGS

// Display tooltip after the visitor adds an item to their cart?
$config['tooltip']                = true;

// Allow decimals in item quantities?
$config['decimalQtys']            = false;

// How many decimal places are allowed?
$config['decimalPlaces']          = 1;

// Number format for prices, see: http://php.net/manual/en/function.number-format.php
$config['priceFormat']            = array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',');

// Send visitor to PayPal via HTTPS?
$config['paypal']['https']        = true;

// Use PayPal sandbox?
$config['paypal']['sandbox']      = false;

// The URL a visitor is returned to after completing their PayPal transaction
$config['paypal']['returnUrl']    = '';

// The URL of your PayPal IPN script
$config['paypal']['notifyUrl']    = '';

?>