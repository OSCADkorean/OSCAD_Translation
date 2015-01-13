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

$gFbLicenseName="EPL-1.0";
$gFbLicenseSpecification="Eclipse Public License";
$gFbLicenseAbbr="EPL";
$gFbLicenseRelease="1.0";

$gOsLicProtectionChapter="2.5";
$gOsLicPatentChapter="3.1.4";
$gOsLicTodoListChapter="6.6";
$gOsLicLsucChapter="6.6.2";
$gOsLicTlExplanationChapter="6.6.10";

$gFbLiSpUcName="EPL-1.0-C2";

$gFbLiSpUcDesc=
	"EPL로 라이선스 된 받은 소프트웨어의 비수정 버전을 소스코드 파일 형태 또는 소스코드 패키지
로 제3자에게 배포하고자 하는 의도를 갖고 있다. 이 경우 독립 또는 내장 유닛으로 프로그램, 어
플리케이션, 서버, 스니펫, 모듈, 라이브러리 또는 플러그인 등 배포유형을 식별하는 것은 아니다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
		" 라이선싱하는 요소 특히, 저작권 공지와 법적 책임 및 보증에 대한 권리포기는 받았던
정확한 형태로 패키지에 포함한다.",

		"EPL 1.0 라이선스 사본을 받는 사람에게 제공한다. 이미 구성한 소프트웨어 패키지의 일
부에서 빠져있다면 이를 추가한다.363 패키지의 라이선싱 파일 내 라이선싱 설명 중 이
패키지가 EPL에 준한다는 설명이 명확하지 않으면, 자체적으로 올바른 EPL 라이선싱 파
일을 추가로 삽입한다.",

		" 만약 배포된 소스코드 패키지 안에 존재하지 않는다면, 매우 두드러지게 ‘보증 없음’이란
명확한 문구를 포함시킨다. 이 문구로 모든 소프트웨어 기여자에게 소프트웨어 품질에
대한 책임을 전가하지 않는다는 점을 명확히 한다. 그 다음에 그 파일에 EPL 법적 책임
의 권리포기와 보증 없음 조항을 추가한다."

);

$gFbLiSpUcRequiresVolArr=array(
	"배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 소프트웨어
명칭에 대한 힌트, 홈페이지 링크, EPL 1.0 라이선스 링크를 복제한다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"받은 소프트웨어 패키지 내에 포함된 저작권 공지를 제거 또는 변경",
		"이 소프트웨어의 특허 침해를 한것으로 여겨지는 사람을 상대로 증거없이 소송을 제기하는 것"
		);

?>
