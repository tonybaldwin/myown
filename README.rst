MyOwn
=======

MyOwn is a template for DokuWiki_ (standards compliant and 
simple Wiki engine written in PHP). Template has many customizable options 
including menu, keywords and description. 

.. _DokuWiki: http://www.dokuwiki.org

.. image:: http://tonybaldwin.me/images/myowndokushot.jpg
   :align: center

MyOwn has the following features 

  - Menu - customizable menu, that is displayed on every page
  - Description - user defined meta tag for every generated page


Selected Users:
=============================

  - http://wiki.myownsite.me

Installation
=============================

  1. Download the MyOwn template zip-file
  #. Unpack it into *<dokuwiki>/lib/tpl/* directory
  #. Change template parameter to MyOwn in *<dokuwiki>/conf/local.php* file

    :: 

      $conf['template'] = 'MyOwn';


Configuration
=============================
Configuration parameters are located in *<dokuwiki>/lib/tpl/myown/conf.php* 
PHP file.

============== ================================================================
Parameter      Description
============== ================================================================
description    Description META tag. This tag is inserted on every rendered page
footer         Text that is inserted in the footer
menu2Permanent menu2 is permanent (it is taken from main directory)
wikiBar        Display Wikibar (Recent Changes, Old Version, Login)
============== ================================================================


File structure
=============================

  ::
 
    + pages
    |-- menu1.txt      [1]
    |-- start.txt
    |-+ projects      
      |-- menu1.txt    [1]
      |-- menu2.txt    [2]
      |-- MyOwn 


menu1.txt
------------------------------
menu1.txt file is displayed on every generated web page and it contains main menu
content.

  :: 
  
    * [[/|Blog]] 
    * [[photography|Photography]] 
    * [[projects|Software]]
    * [[articles|Design]]


menu2.txt
------------------------------
menu2.txt file is displayed on every generated web page and it constains sidebar menu content.

  ::
  
    * __DokuWiki__
    * [[:sofwtare/MyOwn|MyOwn]]

    * __Web Development__
    * [[:design/modelarstwo|Modelartstwo]]


Download
=======================================

MyOwn releases are available for download from 
http://github.com/tonybaldwin/myown


Source Code
=======================================

Source code is available on http://github.com/tonybaldwin/myown


Changelog
================================

Version 0.1 - released 15 January 2015

Authors
=======

 - Tony Baldwin | http://tonybaldwin.me , http://myownsite.me
