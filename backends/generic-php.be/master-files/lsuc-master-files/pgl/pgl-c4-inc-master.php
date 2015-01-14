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

$gFbLicenseName="PostgreSQL";
$gFbLicenseSpecification="Postgres License";
$gFbLicenseAbbr="PgL";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.12";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.13";
$gOsLicLsucChapter="6.13.4";
$gOsLicTlExplanationChapter="6.13.6";

$gFbLiSpUcName="PostgreSQL-C4";

$gFbLiSpUcDesc=
/*	"that you received a PostgreSQL licensed code snippet, module, library, or
  plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binaries or
  as source code files together with another larger software unit which contains
  this code snippet, module, library, or plugin as an embedded component,
  regardless whether you distribute it in the form of binaries or as source code
  files.";*/
  "사용자가 받은 PostgreSQL로 라이선스 된 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 바이너리 형태 또는 소스코드 파일로 제3자에게 내장 컴포넌트로 스니펫, 모듈, 라이브러리 또는 플러그인을 포함하는 다른 더 큰 소프트웨어 유닛과 함께 어떤 형태로든 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
/*	"the following tasks in order to fulfill the license conditions:"*/
"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
  "Ensure that the complete PostgreSQL license including
  the copyright notice, the permission notices, and the PostgreSQL disclaimer
  are retained in your package in the form you have received them."*/
  "저작건 공지, 허가 공지 및 PostgreSQL 권리포기사항을 포함하여 PostgreSQL 라이선스를 받았던 형태로 패키지에 전부 보유한다."
);

$gFbLiSpUcRequiresVolArr=array(
/*  "Mark your modifications in the source code,
  regardless whether you want to distribute the code or not."*/
  "배포 여부와 관계없이 소스코드에 수정 부분을 표시하라.",

/*  "It's a good tradition to let the documentation of
  your distribution and/or your additional material also contain a link to the
  original software (project) and its homepage."*/
  "또한 프로그램 문서 및 추가 자료에 초기 소프트웨어(프로젝트)와 그 홈페이지 링크를 포함하는 것이 바람직하다.",

);

$gFbLiSpUcForbidsPrefix=/*"nothing explicitly."*/"명시된 사항 없음.";
$gFbLiSpUcForbidsArr=array();

?>
