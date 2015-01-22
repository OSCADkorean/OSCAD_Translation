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
# Edit date : 2015.01.16
# Etc. Comment : 
*******************************************************/ 
$gFbLicenseName="BSDv[2|3]CL";
$gFbLicenseSpecification="BSD License, Version 2 or 3 Clause ";
$gFbLicenseAbbr="BSD";
$gFbLicenseRelease="[2CL|3CL]";

$gOsLicProtectionChapter="2.3";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.4";
$gOsLicLsucChapter="6.4.7";
$gOsLicTlExplanationChapter="6.4.10";

$gFbLiSpUcName="BSD-C7";

$gFbLiSpUcDesc=
/*	"that you received a BSD licensed code snippet, module, library,
  or plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binary files
  or as a binary package but without embedding it into another larger software
  unit.";
*/

"BSD로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 배포하려는 의도를 갖고 있다. 단, 이를 다른 더 큰 소프트웨어 유닛에 삽입하지는 않는다. ";
$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.
";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*	
	"Ensure that your distribution contains the
  original copyright notice, the BSD license, and the BSD disclaimer in the form
  you have received them. If you compile the binary file on the base of the
  source code package and if this compilation does not also generate and
  integrate the licensing files, then create the copyright notice, the BSD
  conditions, and the BSD disclaimer according to the form of the source code
  package and insert these files into your distribution manually.",

  "Ensure that the documentation of your
  distribution and/or your additional material also contain the author specific
  copyright notice, the BSD conditions, and the BSD disclaimer."

);
*/
"배포물에 받았던 형태로 최초 저작권 공지, BSD 라이선스, BSD 권리포기사항을 포함한다. 소스코드 패키지에 기반하여 바이너리 파일을 컴파일하고 이 컴파일로 라이선싱 파일이 생성되거나 포함되지 않는다면, 소스코드 패키지 형태에 따라 저작권 공지, BSD 조건, BSD 권리포기사항을 작성한 다음에 이 파일들을 배포물에 수동으로 삽입한다.",

"배포 문서 및 추가 자료는 저작자 특정 저작권 공지, BSD 조건, BSD 권리포기사항을 포함한다. ");

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
/*			"nothing explicitly if you are using the BSD 2 Clause License. But the
		BSD 3 Clause License explicitly prohibits to use the name of the
		licensing organization or the names of the licensing contributors to
		promote your own work."
		);
*/
"BSD 2 Clause License를 사용하고 있다면 금지사항은 명확히 존재하지 않는다. 그러나 BSD 3 Clause License에 의해 자신의 저작물을 홍보하기 위해 라이선싱 기관명 또는 라이선싱 기여자명 사용이 명백히 금지된다");
?>
