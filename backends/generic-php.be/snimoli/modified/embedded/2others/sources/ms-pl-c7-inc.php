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
<translation>
date : 2015.01.15
subject : MS-PL-C7 : 내장 소스코드로 수정 라이브러리 배포
name : junehyunBaek(Koscom_Intern)
*******************************************************/ 
 
$gFbLicenseName="MS-PL";
$gFbLicenseSpecification="Microsoft Public License";
$gFbLicenseAbbr="MS-PL";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.11";
$gOsLicPatentChapter="3.1.9";
$gOsLicTodoListChapter="6.12";
$gOsLicLsucChapter="6.12.7";
$gOsLicTlExplanationChapter="6.12.9";

$gFbLiSpUcName="MS-PL-C7";

$gFbLiSpUcDesc=
/*
	"that you received an MS-PL licensed code snippet, module, library,
  or plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of source code
  files or as a source code package together with another larger software unit
  which contains this code snippet, module, library, or plugin as an embedded
  component.";
*/

"MS-PL로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 소스코드 파일 형태 또는 소스코드 패키지로 제3자에게 내장 컴포넌트로 스니펫, 모듈, 라이브러리 또는 플러그인을 포함하는 다른 더 큰 소프트웨어 유닛과 함께 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
/*
	"the following tasks in order to fulfill the license conditions:";
*/

"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
  "Ensure that all licensing elements (particularly all
   copyright, patent, trademark, and attribution notices that are part of the
   version you received) are completely retained in your package.",
*/

"라이선싱하는 요소, 특히 받은 버전의 일부인 귀속 공지, 상표, 특허, 저작권은 패키지에 전부 보유한다.",

/*
  "Incorporate a complete copy of the MS-PL license
  into your package.",
*/

"MS-PL 라이선스 카피 전체를 패키지에 포함한다.",

/*
  "If you do not want to publish your modifications
  and/or your overarching application under the MS-PL too, then cleanly separate
  your own sources and licensing documents from original elements of the adopted
  work."
*/

" MS-PL에 의거 수정물 및 지배적인 어플리케이션을 공표하고 싶지 않다면 사용한 저작물의 초기 요소들로부터 자체 소스와 라이선싱 문서를 깔끔하게 분리한다."

);

$gFbLiSpUcRequiresVolArr=array(
/*
  "Mark your modifications in the sourcecode.",
*/

"소스코드 내 수정사항을 표시한다.",

/*
  "It's a good tradition to let the documentation of
  your distribution and/or your additional material also contain a link to the
  original software (project) and its homepage (as far as this does not clashes
  with with the prohibitions stated below).",
*/

"아래에 명시된 금지사항과 상충하지 않는 한, 배포 문서 및 추가 자료에 또한 초기 소프트웨어(프로젝트)와 그 홈페이지 링크를 포함시키는 것이 바람직하다.",

/*
  "It is a good practice of the open source
  community, to let the copyright notice shown by your overarching program also
  state that it is based on a component originally licensed under the MS-PL
  license - perhaps by linking the project homepage of the original (as far as
  this does not clashes with the prohibitions stated below)."
*/

"아래에 명시된 금지사항과 상충하지 않는 한, 지배적인 프로그램에 의해 표시되는 저작권 공지는 초기에 MS-PL 라이선스에 기반하여 사용 허가된 컴포넌트에 근거한다는 설명을 예를 들어, 원저작물의 프로젝트 홈페이지에 링크하여 이 공지에서 밝히는 것이 오픈소스 커뮤니티에서는 바람직한 행위이다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
/*
		"to use any contributors' name, logo, or trademarks (without an
		additional or general legally based approval)"
*/

		"추가적인 승인 또는 법에 의한 승인 없이 기여자의 이름, 로고 또는 상표를 사용"
		);


?>
