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
$gOsLicLsucChapter="6.4.3";
$gOsLicTlExplanationChapter="6.4.10";

$gFbLiSpUcName="BSD-C3";

$gFbLiSpUcDesc=
"BSD로 라이선스 된 받은 소프트웨어의 비수정 버전을 소스코드 파일 형태 또는 소스코드 패키지로 제3자에게 배포하고자 하는 의도를 갖고있다. 이 경우 독립 또는 내장 유닛으로 프로그램, 어플리케이션, 서버, 스니펫, 모듈, 라이브러리 또는 플러그인 등 배포유형을 식별하는 것은 아니다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

		"배포물에 받았던 형태로 최초 저작권 공지, BSD 라이선스, BSD 권리포기사항을 포함한다. 소스코드 패키지에 기반하여 바이너리 파일을 컴파일하고 이 컴파일로 라이선싱 파일이 생성되거나 포함되지 않는다면, 소스코드 패키지 형태에 따라 저작권 공지, BSD 조건, BSD 권리 포기사항을 작성한 다음에 이파일들을 배포물에 수동으로 삽입한다.",

		"배포 문서 및 추가  자료는 최초 저작권 공지, BSD 조건, BSD 권리 포가사항을 포함한다."
);

$gFbLiSpUcRequiresVolArr=array(
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"BSD 2 Clause License를 사용하고 있다면 금지사항은 명확히 존재하지 않는다. 그러나 BSD 3 Clause License에 의해 자신의 저작물을 홍보하기 위해 라이선싱 기관명 또는 라이선싱 기여자 (licensing contributor)명 사용이 명백히 금지된다."
		);

?>
