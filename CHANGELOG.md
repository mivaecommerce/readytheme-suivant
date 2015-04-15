2015.04.15 - [v1.2.0](https://github.com/mivaecommerce/readytheme-suivant/wiki/v1.2.0-Updates)
---
*	Updates and additions to support the new features released in Miva 9.3: http://www.miva.com/mm9.3_template_changes.html http://extranet.miva.com/forums/showthread.php?115591-Miva-Merchant-9-0003-Is-Now-Available&p=430880#post430880
*	Added new pages to "screenCheck" variable in HEAD tag.
*	Added support for forgot password on GFTL page in scripts.js.
*	Added support for additional icons on ACLN page at line 902 in pages.css.
*	Fixed [Issue #1](https://github.com/mivaecommerce/readytheme-suivant/issues/1), [Issue #3](https://github.com/mivaecommerce/readytheme-suivant/issues/3), and [Issue #4](https://github.com/mivaecommerce/readytheme-suivant/issues/4)

2015.02.24 - [v1.1.0](https://github.com/mivaecommerce/readytheme-suivant/wiki/v1.1.0-Updates)
---
*	Updated "Mobile Navigation Functions" in plugins.js at line 98 to better accommodate tablets.
*	Updated "Mini-Basket Functions" in plugins.js at line 114 to correct for Internet Explorer 9.
*	In scripts.js, we replaced $(document).ready(function () with self-executing anonymous functions which pass along jQuery.
*	Updated "Open Product Image Gallery" function in scripts.js at line 206 to allow for correct starting index of image carousel.
*	Updated "Update Display When Attribute Machine Fires" within the "jsPROD" function in scripts.js to update the thumbnail indexing.
*	Updated ".mini-basket-container" top position in structure.css.
*	Updated "quick-view" section in pages.css to accommodate for using quick view on the search page.
*	Added ".order-contents" to ".basket-contents" within "BASK PAGE" in pages.css to mimic style.
*	Corrected mega-menu visibility within "OCST, OSEL, OPAY AND INVC PAGES" in pages.css.
*	Added the invoice page to display options for mobile navigation and pre-header within "OCST, OSEL, OPAY AND INVC PAGES" in pages.css.
*	Added ".update-record label" font size in pages.css.
*	Corrected improperly named META tag from "keywords" to "description" in HEAD tag.
*	Added "data-norem" to Google font call in HEAD tag to correct for Internet Explorer 8 scripting error.
*	Corrected improperly closed SMALL tag within "Order Contents" on INVC page.
*	Updated "Product Display Layout Image Machine" on PROD page for better gallery zoom functionality.
*	Updated "Order Content Section" on ORDS page to remove encoded order status.
*	Updated "contactForm.php" to better prevent spamming.

2014.12.04 - v1.0.1
---
*	Replaced hard-coded store code with Miva variable in "product_quick_view" on PROD page.
*	Added ID to form in "product_quick_view" on PROD page to facilitate dynamic pricing when inventory variants are not being used.
*	Reverted conditional in scripts.js at line 503 checking for "attrMachCall".

2014.12.02 - v1.0.0
---
*	Corrected improperly closed SMALL tag at line 116 of "Basket Contents" in BASK page.
*	Updated "Product Attribute Template" in PROD page to round attribute and option prices correctly.
*	Updated CSS for horizontal mega-menu: in structure.css at line 395, change "position: initial;" to "position: static;".
