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
  Dosol choi    <dosa1572@gmail.com>
  Booyong shin  <tlsqndyd@gmail.com>
  Hoonmoo ryu   <tnsanzz@gmail.com>
  Minhyung Cho  <designer.mhc@gmail.com>
  Jaekyung Kim  <bonoxtwo@gmail.com>
  Changeun Cho  <jceun57@gmail.com>

# Editor : Junehyun Baek <100aniv62@gmail.com>
# Project Period : 2015.01.12 ~ 2015.01.23
# Edit date : 2015.01.16
# Etc. Comment : Apache -> Apache-2.0
# Etc. Comment : GPL-V2 -> GPL-2.0
# Etc. Comment : GPL-V3 -> GPL-3.0
*******************************************************/ 

$gFbLicenseName="GPL-[2.0|3.0]";
$gFbLicenseSpecification="GNU General Public License";
$gFbLicenseAbbr="GPL";
$gFbLicenseRelease="[2.0|3.0]";

$gOsLicProtectionChapter="2.7";
$gOsLicPatentChapter="3.1.6";
$gOsLicTodoListChapter="6.8";
$gOsLicLsucChapter="6.8.4";
$gOsLicTlExplanationChapter="6.8.12";

$gFbLiSpUcName="GPL-C4";

$gFbLiSpUcDesc=
/*
	"that you received a GPL-2.0 or GPL-3.0 licensed snippet, module or
  library which you are now going to distribute to third parties as an embedded
  component of a larger unit and in the form of unmodified source code files or as
  unmodified source code package.";
*/
    "GPL-2.0 또는 GPL-3.0으로 라이선스 된 받은 스니펫, 모듈 또는 라이브러리의 비수정 버전을 더 큰 유닛의 내장 컴포넌트로, 소스코드 파일 형태 또는 소스코드 패키지로 제3자에게 배포하려는 의도를 갖고 있다.";
$gFbLiSpUcRequiresPrefix=
/*
	"the following tasks in order to fulfill the license conditions:";
*/
    "라이선스 조건을 충족하기 위한 작업은 다음과 같다:";
$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
  "Ensure that the licensing elements - esp. all
  notices that refer to the GPL-2.0 or GPL-3.0 and to the absence of any
  warranty - are retained in your package in the form you have received them.",
*/
    "라이선싱하는 요소, 특히 GPL-2.0 또는 GPL-3.0과 보증 없음을 뜻하는 공지는 받았던 형태로 패키지에 포함한다.",
/*
  "Ensure that the distributed source code package
  contains a conspicuously and appropriately designed, easily to find copyright
  notice and a disclaimer of warranty. If these elements are missed, add a new
  file containing the main copyright notice and the disclaimer of warranty in the
  form which is textually defined by the license GPL-2.0 itself resp. by the
  GPL-3.0 itself. (Yes, repeat the disclaimer although it is also part of the
  license itself and although you are required to hand the license itself over
  to the receiver.)",
*/
    "배포된 소스코드 패키지에는 적절히 설계된 명확하고 쉽게 찾아볼 수 있는 저작권 공지와 보증 제한을 포함한다. 이 요소들이 누락되었다면, 각각의 라이선스 GPL-2.0와 GPL-3.0에 의해 문자대로 정의된 형태로 주요 저작권 공지와 보증 제한을 포함하는 파일을 새로 추가한다. (라이선스 일부가 되더라도 그리고 받는 사람에게 라이선스 자체를 양도해야 하더라도 그 권리 포기를 반복한다.)",
/*
  "Give the recipient a copy of the GPL-2.0 resp.
  GPL-3.0 license. If it is not already part of the software package, add
  it.",
*/
    "받는 사람에게 GPL-2.0 및 GPL-3.0 라이선스 사본을 각 각 제공한다. 이미 구성한 소프트웨어 패키지의 일부에서 빠져있다면 이를 추가한다.",
/*
  "Retain all existing copyright notices.",
*/
    "기존의 모든 저작권 공지와 라이선싱하는 요소를 유지한다.",  
/*
  "Let the copyright dialog of the on-top development
  clearly say, that it uses the GPL licensed library and that it is itself
  licensed under the GPL-2.0 resp. GPL-3.0 too. Let it reproduce the content of
  the existing copyright notices, a hint to the software name, a link to its
  homepage, the respective disclaimer of warranty, and a link to the GPL-2.0
  resp. GPL-3.0.",
*/
    "기능 추가 개발물의 저작권 다이얼로그는 GPL 라이선스 라이브러리를 사용하고 GPL-2.0 및 GPL-3.0에 의해 사용 허가되었다는 점을 이 다이얼로그에 명확히 표시한다. 기존의 저작권 공지 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, 각 보증 제한, 각 GPL-2.0 및 GPL-3.0 링크를 이를 통해 복제한다.",
/*
 "Organize the sources of the on-top development in
  a way that they are also covered by the GPL-2.0 resp. GPL-3.0 licensing
  statements."
*/
    "기능 추가 개발 소스는 각 GPL-2.0 및 GPL-3.0 라이선싱 사항에 포함되는 방식으로 구성한다."
);

$gFbLiSpUcRequiresVolArr=array(
/*
	"Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notices, a hint to the software name, a link to its homepage,
  the respective disclaimer of warranty, and a link to the GPL-2.0 resp.
  GPL-3.0."
*/
    "배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, 각 보증 제한, 각 GPL-2.0 및 GPL-3.0 라이선스 링크를 복제한다."
);

$gFbLiSpUcForbidsPrefix=
/*
"nothing explicitly with respect to this use case.";
*/
    "이 사용 사례와 관련하여 명확한 금지사항 없음";
$gFbLiSpUcForbidsArr=array();

?>
