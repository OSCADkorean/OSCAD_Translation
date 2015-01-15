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
subject : MIT-C2 : 비수정 소프트웨어 배포
name : junehyunBaek(Koscom_Intern)
*******************************************************/   
 
$gFbLicenseName="MIT";
$gFbLicenseSpecification="MIT License";
$gFbLicenseAbbr="MIT";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.9";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.10";
$gOsLicLsucChapter="6.10.2";
$gOsLicTlExplanationChapter="6.10.6";

$gFbLiSpUcName="MIT-C2";

$gFbLiSpUcDesc=
/*
	"that you received MIT licensed software which you are now going to
  distribute to third parties in the form of unmodified binaries or as unmodifed
  source code files. In this case it makes no difference if you distribute a
  program, an application, a server, a snippet, a module, a library, or a plugin
  as an independent package.";
*/

"MIT로 라이선스 된 받은 소프트웨어의 비수정 버전을 바이너리 형태로 또는 소스코드 파일로 제3자에게 배포하고자 하는 의도를 갖고 있다. 이 경우 프로그램, 어플리케이션, 서버, 스니펫, 모듈, 라이브러리, 플러그 또는 독립패키지 등 배포유형을 식별하는 것은 아니다.";

$gFbLiSpUcRequiresPrefix=
/*
	"the following tasks in order to fulfill the license conditions:";
*/
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";
	
$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
 "Ensure that the licensing elements
  (especially the MIT license text containing the specific copyright notices of
  the original author(s), the permission notices and the MIT disclaimer) are
  retained in your package in the form you have received them."
*/

 "라이선싱하는 요소, 특히 원저작자가 특정하는 저작권 공지, 허가 공지 및 MIT 권리포기 사항이 포함된 MIT 라이선스 텍스트는 받았던 형태로 패키지에 포함한다."
 
);

$gFbLiSpUcRequiresVolArr=array(
/*
  "It's a good tradition to let the documentation of
  your distribution and/or your additional material also contain a link to the
  original software (project) and its homepage."
*/

  "배포 문서 및 추가 자료에 또한 초기 소프트웨어(프로젝트)와 그 홈페이지 링크를 포함 시키는 것이 바람직하다."
);

$gFbLiSpUcForbidsPrefix=/*"nothing explicitly."*/ "명시된 사항 없음;"
$gFbLiSpUcForbidsArr=array();

?>
