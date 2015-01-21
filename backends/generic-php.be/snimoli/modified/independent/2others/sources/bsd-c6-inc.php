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
/******************************************************
<Open Source Compliance Advisor Korean Project>
# Contributor :
  Junehyun Baek <100aniv62@gmail.com>
  Dosol Choi    <dosa1572@gmail.com>
  Booyong shin  <tlsqndyd@gmail.com>
  Hoonmoo ryu   <tnsanzz@gmail.com>
  Minhyung Cho  <designer.mhc@gmail.com>
  Jaekyung Kim  <bonoxtwo@gmail.com>
  Changeun Cho  <jceun57@gmail.com>

# Editor : Dosol Choi <dosa1572@gmail.com>
# Project Period : 2015.01.12 ~ 2015.01.23
# Edit date : 2015.01.21
# Etc. Comment :
*******************************************************/  

$gFbLicenseName="BSDv[2|3]CL";
$gFbLicenseSpecification="BSD License, Version 2 or 3 Clause ";
$gFbLicenseAbbr="BSD";
$gFbLicenseRelease="[2CL|3CL]";

$gOsLicProtectionChapter="2.3";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.4";
$gOsLicLsucChapter="6.4.6";
$gOsLicTlExplanationChapter="6.4.10";

$gFbLiSpUcName="BSD-C6";

$gFbLiSpUcDesc=	
	"BSD로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 소스코드 파일 형태 또는 소스코드 패키지로 제3자에게 배포하려는 의도를 갖고 있다. 단, 이를 다른 더 큰 소프트웨어 유닛에 삽입하지는 않는다.";
/* "that you received a BSD licensed code snippet, module, library,
  or plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of source code
  files or as a source code package, but without embedding it into another
  larger software unit."; */

$gFbLiSpUcRequiresPrefix="라이선스 조건을 충족하기 위한 작업은 다음과 같다:";
/*	"the following tasks in order to fulfill the license conditions:"; */

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
		"라이선싱하는 요소(특히, BSD 라이선스 텍스트, 원저작자 특정 저작권 공지, BSD 권리포기)는 받았던 형태로 패키지에 포함한다."
/*		"Ensure that the licensing elements - esp. the BSD license text, the
		specific copyright notice of the original author(s), and the BSD disclaimer
		- are retained in your package in the form you have	received them." */
);

$gFbLiSpUcRequiresVolArr=array(
	"배포 문서 및 추가 자료는 저작자 특정 저작권 공지, BSD 조건, BSD 권리포기사항을 포함한다."
/*	"Let the documentation of your distribution  and/or your additional material
	also contain the original copyright notice, the BSD conditions, and the
	BSD disclaimer." */
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
	"BSD 2 Clause License를 사용하고 있다면 금지사항은 명확히 존재하지 않는다. 그러나 BSD 3 Clause License에 의해 자신의 저작물을 홍보하기 위해 라이선싱 기관명 또는 라이선싱 기여자명 사용이 명백히 금지된다."
		/* "nothing explicitly if you are using the BSD 2 Clause License. But the
		BSD 3 Clause License explicitly prohibits to use the name of the
		licensing organization or the names of the licensing contributors to
		promote your own work." */
		);

?>
