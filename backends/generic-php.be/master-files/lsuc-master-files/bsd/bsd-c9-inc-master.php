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

$gFbLiSpUcName="BSD-C9";

$gOsLicProtectionChapter="2.3";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.4";
$gOsLicLsucChapter="6.4.9";
$gOsLicTlExplanationChapter="6.4.10";

$gFbLiSpUcDesc=
"BSD로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 내장 컴포넌트로서, 스니펫, 모듈, 라이브러리 또는 플러그인을 포함하는 다른 더 큰 소프트웨어 유닛과 함께 배포하려는 의도를 갖고있다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
		"배포물에 받았던 형태로 최초 저작권 공지, BSD 라이선스, BSD 권리포기사항을 포함한다. 소스코드 패키지에 기반하여 바이너리 파일을 컴파일하고 이 컴파일로 라이선싱 파일이 생성되거나 포함되지 않는다면, 소스코드 패키지 형태에 따라 저작권 공지, BSD 조건, BSD 권리포기사항을 작성한 다음에 이 파일들을 배포물에 수동으로 삽입한다.",

		"배포 문서 및 추가 자료는 저작자 특정 저작권 공지, BSD 조건, BSD 권리포기사항을 포함한다."

);

$gFbLiSpUcRequiresVolArr=array(

  "오픈소스 커뮤니티에서는 프로그램이 BSD 라이선스에 준한다는 내용의 저작권 공지가 실행 프로그램에 의해 표시되는 것이 바람직하다. 왜냐하면 더 큰 소프트웨어 유닛에 이 스니몰리를 삽입하는 것은 더 큰 유닛을 개발하는 것이기 때문이다. 따라서 BSD 컴포넌트의 힌트로 더 큰 유닛의 저작권 공지를 확장할 수도 있다.",

  "라이선싱하는 요소들 특히, BSD 라이선스 텍스트, 원저작자 특정 저작권 공지, BSD 권리포기는 자신의 지배적인 저작물의 라이선싱을 침해하지 않고 내장 라이브러리만을 명확히 나타내도록 배포할 소스코드를 구성한다. 모든 라이선싱하는 요소가 들어있는 특정 디렉토리에 라이브러리, 모듈, 스니펫 또는 플러그인을 두는 것이 바람직하다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"BSD 2 Clause License를 사용하고 있다면 금지사항은 명확히 존재하지 않는다. 그러나 BSD 3 Clause License에 의해 자신의 저작물을 홍보하기 위해 라이선싱 기관명 또는 라이선싱 기여자 (licensing contributor)명 사용이 명백히 금지된다."
		);

?>
