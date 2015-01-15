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
$gOsLicLsucChapter="6.13.3";
$gOsLicTlExplanationChapter="6.13.6";

$gFbLiSpUcName="PostgreSQL-C3";

$gFbLiSpUcDesc=
	"PGL로 라이선스 된 받은 프로그램, 어플리케이션 또는 서버 등 프로앱스의 수정 버전을 바이너리
형태 또는 소스코드 파일로 제3자에게 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
		"저작권 공지, 허가 공지 및 PGL 권리포기사항을 포함하여 Postgres 라이선스를 받았던
형태로 패키지에 전부 보유한다."
);

$gFbLiSpUcRequiresVolArr=array(
  "코드를 배포하고 싶은 여부와 관계없이 소스코드 안에 수정사항을 표시한다.",

  "배포 문서 및 추가 자료에 또한 초기 소프트웨어(프로젝트)와 그 홈페이지 링크를 포함
시키는 것이 바람직하다.",

  "자신의 저작물 또는 수정에 관한 정보가 들어간 프로그램으로 제시되는 기존의 저작권 공지를 확대할 수 있다.You can add information about your own work or
  modifications to an existing copyright notice presented by the program.",

  "프로그램에 의해 표시되는 저작권 공지는 PGL 라이선스에 기반하여 초기에 사용 허가된
버전에 근거한다는 설명을 이 공지에서 밝히는 것이 오픈소스 커뮤니티에서는 바람직한
행위이다. 왜냐하면, 프로그램을 수정하는 중이므로, 제시한 초기 저작권 공지에 그러한
설명이 부족하다면 그런 힌트를 추가할 수도 있다."
);

$gFbLiSpUcForbidsPrefix="명시된 사항 없음.";
$gFbLiSpUcForbidsArr=array();

?>
