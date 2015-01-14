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

$gFbLicenseName="GPL-[2.0|3.0]";
$gFbLicenseSpecification="GNU General Public License";
$gFbLicenseAbbr="GPL";
$gFbLicenseRelease="[2.0|3.0]";

$gOsLicProtectionChapter="2.7";
$gOsLicPatentChapter="3.1.6";
$gOsLicTodoListChapter="6.8";
$gOsLicLsucChapter="6.8.10";
$gOsLicTlExplanationChapter="6.8.12";

$gFbLiSpUcName="GPL-CA";

$gFbLiSpUcDesc=
	"GPL-2.0 또는 GPL-3.0로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의
수정 버전을 소스코드 파일 형태 또는 소스코드 패키지로 제 3자에게 내장 컴포넌트로서 스니펫,
모듈, 라이브러리 또는 플러그인을 포함하는 다른 더 큰 소프트웨어 유닛과 함께 배포하려는 의도
를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "라이선싱하는 요소, 특히, GPL-2.0 또는 GPL-3.0와 보증 없음을 뜻하는 공지는 받았던 형
태로 패키지에 포함한다.",

  "배포된 소스코드 패키지에는 적절히 설계된 명확하고 쉽게 찾아볼 수 있는 저작권 공지
와 보증 제한을 포함한다. 이 요소들이 누락되었다면, 라이선스 GPL-2.0 및 GPL-3.0에 의
해 문자대로 정의된 형태로 주요 저작권 공지와 보증 제한을 포함하는 파일을 새로 추
가한다. (라이선스 일부가 되더라도 그리고 받는 사람에게 라이선스 자체를 양도해야 하
더라도 그 권리 포기를 반복한다.)",

  "받는 사람에게 각 GPL-2.0 및 GPL-3.0 사본을 제공한다. 이미 구성한 소프트웨어 패키지
의 일부에서 빠져있다면 이를 추가한다.",

  "기존의 모든 저작권 공지와 라이선싱하는 요소를 유지한다.",

  "기능 추가 개발물의 저작권 다이얼로그는 GPL 라이선스 라이브러리를 사용하고 GPL-2.0
및 GPL-3.0에 의해 사용 허가되었다는 점을 이 다이얼로그에 명확히 표시한다. 기존의
저작권 공지 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, 각 보증 제한, 각
GPL-2.0 및 GPL-3.0 링크를 이를 통해 복제한다.",
  
  "스니몰리인 내장 라이브러리의 소스코드 수정사항을 소스코드 안에 그리고 수정 날짜를
포함하여 전부 표시한다.",

  "기존의 GPL 라이선싱 사항에 포함되는 방식으로 수정사항을 구성한다. 만약 새로운 소스
코드 파일을 라이브러리 자체에 추가했다면, 헤더에 여러분의 저작권을 명시한 문장과
그 문장이 GPL 프로젝트가 요구하는 양식에 맞게 라이선싱한다는 내용을 추가한다.",

  "GPL-2.0 및 GPL-3.0 라이선싱 사항에 포함되는 방식으로 기능 추가 개발 소스를 구성한다."

);

$gFbLiSpUcRequiresVolArr=array(
  "공지 파일이 존재하지 않으면 수정 텍스트 파일을 작성한다. 수정 설명으로 수정 텍스트
파일을 확장한다.",

  "배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 내용, 소프트웨어 명칭에 대한
힌트, 홈페이지 링크, 각 보증 제한, 각 GPL-2.0 및 GPL-3.0 링크를 복제한다."
);

$gFbLiSpUcForbidsPrefix="이 사용 사례와 관련하여 명확한 금지사항 없음.";
$gFbLiSpUcForbidsArr=array();

?>
