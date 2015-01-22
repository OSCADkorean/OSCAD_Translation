<?php

/*  This file is part of OSCAd, the Open Source Compliance Advisor
 *
 *  Copyright (C) 2013 Karsten Reincke, Deutsche Telekom AG
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.

 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.

 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

$gFbLicenseName="PHP-3.0";
$gFbLicenseSpecification="PHP-3.0 License";
$gFbLicenseAbbr="PHP";
$gFbLicenseRelease="3.0";

$gOsLicProtectionChapter="2.13";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.14";
$gOsLicLsucChapter="6.14.9";
$gOsLicTlExplanationChapter="6.14.10";

$gFbLiSpUcName="PHP-3.0-C9";

$gFbLiSpUcDesc=
	"that you received a PHP-3.0 licensed code snippet, module, library,
  or plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binary files
  or as a binary package together with another larger software unit which
  contains this code snippet, module, library, or plugin as an embedded component.";

$gFbLiSpUcRequiresPrefix=
	"the following tasks in order to fulfill the license conditions:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "Let the documentation of your distribution and/or
  your additional material also contain a line of acknowledgment in the form
  'This product includes PHP, freely available from
  http://www.php.net/'.",
  
  "Let the documentation of your distribution and/or
  your additional material also contain the original copyright notice, the PHP-3.0
  conditions, and the PHP-3.0 disclaimer."
);

$gFbLiSpUcRequiresVolArr=array(
 "Ensure that the complete PHP-3.0 license - esp. the
  copyright notice, the PHP-3.0 conditions, and the PHP-3.0 disclaimer - are
  reproduced by your package, esp. by the copyright screen of your
  overaching program which uses the library.",
  
  "Mark your modifications in the source code,
  even if you do not you want to distribute the code.",

  "Arrange your binary distribution so that the
  licensing elements - esp. the PHP-3.0 license text, the specific copyright
  notice of the original author(s), and the PHP-3.0 disclaimer - clearly refer
  only to the embedded library and do not disturb the licensing of your own
  overarching work. It's a good tradition to keep the libraries, modules,
  snippet, or plugins in specific directories which contain also all licensing
  elements."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"to endorse or promote your product by mentioning PHP, esp. not
by making the string 'PHP' part of its name."
		);


?>
