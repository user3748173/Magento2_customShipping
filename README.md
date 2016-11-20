<h1><i>[DEVELOPING]</i> CUSTOM SHIPPING MODULE</h1>
 This module, when it is finished is going to add html code below shipping method block depending on what radio button has been chosen and then replacing magento 2 default shipping method value within order. 
 
 * The html that is used would be displaying: dropdown, input or nothing. (The html code is stored in custom_shipping_settings table at column shipping_html.) 
 * To accomplish this the html will be put to the right place using jquery “afther”. 
 * To use as little resources as possible the module checks after every click if  the checkout page is already displaying that carriers options by searching certain id that is generated from shipping method id.  
 * The user chosen value will replaced the default value that Magento sends to the database using ordinary shipping method extension method.  
 
 Extensions 
 The html code would be put to custom_shipping_settings table by carrier module made for that purpose that the shop owner wants to use.
  
<b>[CURRENT STATE: REPLACING SHIPPING METHOD VALUE WITH DROPDOWNS.]</b>
