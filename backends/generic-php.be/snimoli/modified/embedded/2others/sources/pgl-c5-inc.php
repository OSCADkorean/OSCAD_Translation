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
subject : PGL-C5 : 내장 컴포넌트로 수정 라이브러리 배포
name : junehyunBaek(Koscom_Intern)
*******************************************************/   

$gFbLicenseName="PostgreSQL";
$gFbLicenseSpecification="Postgres License";
$gFbLicenseAbbr="PgL";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.12";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.13";
$gOsLicLsucChapter="6.13.5";
$gOsLicTlExplanationChapter="6.13.6";

$gFbLiSpUcName="PostgreSQL-C5";

$gFbLiSpUcDesc=
/*
	"that you received a PostgreSQL licensed code snippet, module, library, or
  plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binaries or
  as source code files together with another larger software unit which contains
  this code snippet, module, library, or plugin as an embedded component,
  regardless whether you distribute it in the form of binaries or as source code
  files.";
*/

"PostgreSQL로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 바이너리 형태 또는 소스코드 파일로 제3자에게 내장 컴포넌트로 스니펫, 모듈, 라이브러리 또는 플러그인을 포함하는 다른 더 큰 소프트웨어 유닛과 함께 배포하려는 의도를 갖고 있다."; 

$gFbLiSpUcRequiresPrefix=
/*
	"the following tasks in order to fulfill the license conditions:";
*/

"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
  "Ensure that the complete PostgreSQL license including
  the copyright notice, the permission notices, and the PostgreSQL disclaimer
  are retained in your package in the form you have received them."
*/

"저작권 공지, 허가 공지 및 PostgreSQL 권리포기사항을 포함하여 Postgres 라이선스를 받았던 형태로 패키지에 전부 보유한다."

);

$gFbLiSpUcRequiresVolArr=array(
/*
  "Mark your modifications in the source code,
  regardless whether you want to distribute the code or not.",
*/

"코드를 배포하려는 여부와 관계없이 소스코드 안에 수정사항을 표시한다.",

/*
  "It is a good practice of the open source
  community to let the copyright notice, which is shown by the running program,
  also state that the program uses a component being licensed under the
  PostgreSQL license.  And it is a good tradition to insert links to the
  homepage or download page of this embedded component",
*/

"실행 프로그램에 의해 표시되는 저작권 공지에서는 PostgreSQL 라이선스에 기반하여 사용 허가 된 컴포넌트를 프로그램이 사용한다는 설명을 밝히는 것이 오픈소스 커뮤니티에서는 바람직한 행위이다. 그리고 이 사용된 컴포넌트의 홈페이지/다운로드페이지 링크를 삽입하는 것이 바람직하다.",

/*
  "It's a good tradition to let the documentation of
  your distribution or your additional material also contain a link to the
  original software (project) and its homepage.",
*/

"또한 프로그램 문서 및 추가 자료에 초기 소프트웨어 컴포넌트와 그 홈페이지 링크로 추가한 이 컴포넌트를 사용하였다는 점을 언급하는 것이 바람직하다.",

/*
  "Arrange your distribution so that the original
  licensing elements (in particular the PostgreSQL license text containing the
  copyright notices of the original author(s), the permission notices and the
  PostgrSGL disclaimer) clearly refer only to the embedded library and do not
  affect the licensing of your own overarching work. Consider keeping embedded
  libraries, modules, snippets, or plugins in separate directories which also
  contain all their licensing elements."
*/

"초기 라이선싱하는 요소, 특히 원저작자 특정 저작권 공지, 허가 공지 및 PostgreSQL 권리포기 사항이 들어있는 PostgreSQL 라이선스 텍스트가 내장 라이브러리만을 확실히 뜻하고 자신의 지배적인 저작물의 라이선싱을 침해하지 않도록 배포물을 구성한다. 모든 라이선싱하는 요소가 들어간 특정 디렉토리에 라이브러리, 모듈, 스니펫 또는 플러그인을 두는 것이 바람직하다." 
);

$gFbLiSpUcForbidsPrefix=/*"nothing explicitly."*/ "명시된 사항 없음";
$gFbLiSpUcForbidsArr=array();

?>
