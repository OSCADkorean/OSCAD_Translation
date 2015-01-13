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

$gFbLicenseName="BSDv[2|3]CL";
$gFbLicenseSpecification="BSD License, Version 2 or 3 Clause ";
$gFbLicenseAbbr="BSD";
$gFbLicenseRelease="[2CL|3CL]";

$gOsLicProtectionChapter="2.3";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.4";
$gOsLicLsucChapter="6.4.4";
$gOsLicTlExplanationChapter="6.4.10";

$gFbLiSpUcName="BSD-C4";

$gFbLiSpUcDesc=
"BSD로 라이선스 된 받은 프로그램, 어플리케이션 또는 서버(proapse)의 수정 버전을 소스코드 파일 형태 또는 소스코드 패키지로 제 3자에게 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
		"라이선싱하는 요소들 특히, BSD 라이선스 텍스트, 원저작자 특정 저작권 공지 및 BSD 권리 포기는 받았던 형태로 패키지에 포함한다.",

		"배포 문서 및 추가 자료는 최초 저작권 공지, BSD 조건, BSD 권리 포기사항을 포함한다."

);

$gFbLiSpUcRequiresVolArr=array(
		"오픈소스 커뮤니티에서는 프로그램이 BSD 라이선스에 준한다는 내용의 저작권 공지가 실행프로그램에 의해 표시되는 것이 바람직하다. 왜냐하면 표시된 최초 저작권 공지에 그러한 설명이 없다면 프로그램을 수정하면서 그 힌트를 추가할 수 있기 때문이다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"BSD 2 Clause License를 사용하고 있다면 금지사항은 명확히 존재하지 않는다. 그러나 BSD 3 Clause License에 의해 자신의 저작물을 홍보하기 위해 라이선싱 기관명 또는 라이선싱 기여자 (licensing contributor)명 사용이 명백히 금지된다."
		);

?>
