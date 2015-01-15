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
date : 2015.01.14
subject : MS-PL-C3 : 소스코드로 수정 프로그램 배포
name : junehyunBaek(Koscom_Intern)
*******************************************************/ 
 
$gFbLicenseName="MS-PL";
$gFbLicenseSpecification="Microsoft Public License";
$gFbLicenseAbbr="MS-PL";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.11";
$gOsLicPatentChapter="3.1.9";
$gOsLicTodoListChapter="6.12";
$gOsLicLsucChapter="6.12.3";
$gOsLicTlExplanationChapter="6.12.9";

$gFbLiSpUcName="MS-PL-C3";

$gFbLiSpUcDesc=
/*
	"that you received an MS-PL licensed program, application, or
  server (proapse), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of source code files or as
  a source code package.";
*/

"MS-PL로 라이선스 된 받은 프로그램, 어플리케이션 또는 서버 등 프로앱스의 수정 버전을 소스코드 파일 형태 또는 소스코드 패키지로 제3자에게 배포하려는 의도를 갖고 있다.";
$gFbLiSpUcRequiresPrefix=
/*
	"the following tasks in order to fulfill the license conditions:";
*/

"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";
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

		"MS-PL 라이선스 카피 전체를 패키지에 포함한다";,
/*		
		"If you do not want to publish your modifications
		under the MS-PL too, then cleanly separate your own sources and licensing
		documents from original elements of the adopted work."
*/

		"MS-PL에 의거 수정물을 공표하고 싶지 않다면 사용한 저작물의 초기 요소들로부터 자신의 소스와 라이선싱 문서를 깔끔하게 분리한다."

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
  with the prohibitions stated below).",
*/

" 아래에 명시된 금지사항과 상충하지 않는 한, 배포 문서 및 추가 자료에 또한 초기 소프트웨어(프로젝트)와 그 홈페이지 링크를 포함시키는 것이 바람직하다.",
/*
  "You are allowed to expand an existing copyright
  notice of the program to mention your own contributions.",
*/

" 자체 제공물을 언급하기 위해 기존의 프로그램의 저작권 공지를 확대할 수 있다.",
/*
  "It is a good practice of the open source
  community, to let the copyright notice which is shown by the running program
  also state that the program is licensed under the MS-PL license (as far as
  this does not clashes with the prohibitions stated below). Because you are
  already modifying the program, you can also add such a hint, if the
  original copyright notice lacks such a statement.",
*/

"아래에 명시된 금지사항과 상충하지 않는 한, 실행 프로그램에 의해 표시되는 저작권 공지에서는 프로그램이 MS-PL 라이선스에 기반하여 사용 허가된 컴포넌트를 사용한다는 설명을 밝히는 것이 오픈소스 커뮤니티에서는 바람직한 행위이다. 왜냐하면, 프로그램을 수정하고 있기 때문에 초기 저작권 공지에 그 설명이 결여되었다면 그런 힌트를 추가할 수 있다.", 
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
