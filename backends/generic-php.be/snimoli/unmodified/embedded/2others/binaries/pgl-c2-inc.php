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

# Editor : Jaekyung Kim <bonoxtwo@gmail.com>
# Project Period : 2015.01.12 ~ 2015.01.23
# Edit date : 2015.01.19
# Etc. Comment : no version changing
*******************************************************/

$gFbLicenseName="PostgreSQL";
$gFbLicenseSpecification="Postgres License";
$gFbLicenseAbbr="PgL";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.12";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.13";
$gOsLicLsucChapter="6.13.2";
$gOsLicTlExplanationChapter="6.13.6";

$gFbLiSpUcName="PostgreSQL-C2";

$gFbLiSpUcDesc=
/*	"that you received PostgreSQL licensed software which you are now going to
  distribute to third parties in the form of unmodified binaries or as unmodifed
  source code files. In this case it makes no difference if you distribute a
  program, an application, a server, a snippet, a module, a library, or a plugin
  as an independent package.";*/
  "PostgreSQL로 라이선스 된 받은 소프트웨어의 비수정 버전을 바이너리 형태로 또는 소스코드 파일로 제3자에게 배포하고자 하는 의도를 갖고 있다. 이 경우 프로그램, 어플리케이션, 서버, 스니펫, 모듈, 라이브러리, 플러그 또는 독립패키지 등 배포유형을 식별하는 것은 아니다.";

$gFbLiSpUcRequiresPrefix=
/*	"the following tasks in order to fulfill the conditions of the
	 $gFbLicenseSpecification";*/
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

/*  "Ensure that the complete PostgreSQL license including
  the copyright notice, the permission notices, and the PostgreSQL disclaimer
  are retained in your package in the form you have received them."*/
  "저작권 공지, 허가 공지 및 PostgreSQL 권리포기사항을 포함하여 PostgreSQL라이선스를 받았던 형태로 패키지에 전부 보유한다."
);

$gFbLiSpUcRequiresVolArr=array(
/*  "It's a good tradition to let the documentation of
  your distribution and/or your additional material also contain a link to the
  original software (project) and its homepage."*/
  "배포 문서 및 추가 자료에 또한 초기 소프트웨어(프로젝트)와 그 홈페이지 링크를 포함시키는 것이 바람직하다."
);

$gFbLiSpUcForbidsPrefix=/*"nothing explicitly."*/"명시된 사항 없음.";
$gFbLiSpUcForbidsArr=array();

?>
