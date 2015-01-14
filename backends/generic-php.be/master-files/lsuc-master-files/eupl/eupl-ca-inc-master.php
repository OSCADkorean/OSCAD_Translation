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

$gFbLicenseName="EUPL-1.1";
$gFbLicenseSpecification="European Union Public License";
$gFbLicenseAbbr="EUPL";
$gFbLicenseRelease="1.1";

$gOsLicProtectionChapter="2.6";
$gOsLicPatentChapter="3.1.5";
$gOsLicTodoListChapter="6.7";
$gOsLicLsucChapter="6.7.10";
$gOsLicTlExplanationChapter="6.7.12";

$gFbLiSpUcName="EUPL-1.1-CA";

$gFbLiSpUcDesc=
	"EUPL로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 소
스코드 파일 형태 또는 소스코드 패키지로 제3자에게 내장 컴포넌트로서 스니펫, 모듈, 라이브러
리 또는 플러그인을 포함하는 다른 더 큰 소프트웨어 유닛과 함께 배포하려는 의도를 갖고 있다. ";

$gFbLiSpUcRequiresPrefix=
	" 라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

		"라이선싱하는 요소, 특히 저작권, 특허 또는 상표 공지 그리고 라이선스와 보증 제한을
뜻하는 공지 등은 받았던 형태로 패키지에 포함한다.",

		"받는 사람에게 EUPL-1.1 라이선스 사본을 제공한다. 이미 구성한 소프트웨어 패키지의
일부에서 빠져있다면 이를 추가한다",

		"공지 파일이 존재하지 않는다면 수정 텍스트 파일을 작성한다. 수정 설명으로 수정 텍스
트 파일을 확장한다",

		" 기존의 EUPL 라이선싱 사항에 포함되는 방식으로 수정사항을 구성한다. 만약 새로운 소
스코드 파일을 추가했다면, 헤더에 여러분의 저작권을 명시한 문장과 그 문장이 EUPL을
충족시키도록 라이선싱한다는 내용을 추가한다",

		" 내장 라이브러리(스니몰리)의 소스코드의 수정사항을 소스코드 안에 그리고 수정 날짜를
포함하여 전부 표시한다.",

		"기능 추가 개발물의 저작권 다이얼로그는 EUPL-1.1 라이선스 라이브러리를 사용하고
EUPL-1.1에 의해 사용 허가되었다는 점을 이 다이얼로그에 명확히 표시한다."

         " 배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 소프트웨어
            명칭에 대한 힌트, 홈페이지 링크, EUPL-1.1 라이선스 링크를 복제한다. 특히, 자체 저작
권 공지의 하위 구역으로써 포함한다. 		 "

);

$gFbLiSpUcRequiresVolArr=array(

	"기능 추가 개발물의 저작권 다이얼로그는 EUPL-1.1 라이선스 라이브러리를 사용하고
EUPL-1.1에 의해 사용 허가되었다는 점을 이 다이얼로그에 명확히 표시한다.",

  "배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 사용된 EPL
라이선스 컴포넌트 명칭 힌트, 홈페이지 링크, EPL 1.0 라이선스 링크를 복제한다. 특히, 자체 저작권 공지의 하위 구역으로써 포함한다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"사용한 소프트웨어 파일을 공정하게 설명하고 저작권 공지를 복제하는데 필요한 경우를 제외하고
EUPL 소프트웨어에 연결된 명칭, 상표명, 상표, 서비스 마크에 의한 서비스 또는 제품의 홍보"
		);

?>
