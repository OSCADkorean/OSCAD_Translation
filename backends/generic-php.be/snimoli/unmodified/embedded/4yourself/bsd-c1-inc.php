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
 *****************************************************
 *  <Open Source Compliance Advisor Korean Project>
 *  Contributor : 
    Junehyun Baek <100aniv62@gmail.com>
    Dosol choi    <dosa1572@gmail.com>
    Booyong shin  <tlsqndyd@gmail.com>
    Hoonmoo ryu   <tnsanzz@gmail.com>
    Minhyung Cho  <designer.mhc@gmail.com>
    Jaekyung Kim  <bonoxtwo@gmail.com>
    Changeun Cho  <jceun57@gmail.com>

 *  Editor : Jaekyung Kim  <bonoxtwo@gmail.com>
 *  Project Period : 2015.01.12 ~ 2015.01.23
 *  Edit date : 2015.01.19
 *  Etc. Comment : Apache(KOR) -> Apache-2.0(ENG)
 *****************************************************
 */

$gFbLicenseName="BSDv[2|3]CL";
$gFbLicenseSpecification="BSD License, Version 2 or 3 Clause ";
$gFbLicenseAbbr="BSD";
$gFbLicenseRelease="[2CL|3CL]";

$gOsLicProtectionChapter="2.3";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.4";
$gOsLicLsucChapter="6.4.1";
$gOsLicTlExplanationChapter="6.4.10";

$gFbLiSpUcName="BSD-C1";

$gFbLiSpUcDesc=
/*"that you received BSD licensed software, that you will use it
  only for yourself and that you do not hand it over to any 3rd party in any
  sense.";*/
  
  "BSD로 라이선스 된 받은 소프트웨어를 단독으로 사용하고 제3자에게 양도하지 않으려 하는 의도를 갖고 있다.";
  

$gFbLiSpUcRequiresPrefix=
/*"no tasks in order to fulfill the conditions of the BSD license
with respect to this use case:";*/

"다음 사용 사례에 관련하여 BSD 라이선스 조건을 충족하기 위한 작업은 없다:";


$gFbLiSpUcNoTasks=
/*"You are allowed to use any kind of BSD software in any sense and in
    any context without any obligations as long as you do not give the software
    to 3rd parties";*/
	
	"제3자에게 소프트웨어를 제공하지 않는 한 어떠한 의무가 부과되지 않고, 어떠한 정황에서 어떠한 유형의 BSD 소프트웨어를 사용할 수 있다.";
	

$gFbLiSpUcRequiresManArr=array();

$gFbLiSpUcRequiresVolArr=array();

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		/*"nothing explicitly if you are using the BSD 2 Clause License. But
		the BSD 3 Clause License explicitly prohibits to use the name of the
		licensing organization or the names of the licensing contributors to
		promote your own work"*/
		
		"BSD 2 Clause License를 사용하고 있다면 금지사항은 명확히 존재하지 않는다. 그러나 BSD 3 Clause License에 의해 자신의 저작물을 홍보하기 위해 라이선싱 기관명 또는 라이선싱 기여자(licensing contributor)명 사용이 명백히 금지된다."
		
);
?>
