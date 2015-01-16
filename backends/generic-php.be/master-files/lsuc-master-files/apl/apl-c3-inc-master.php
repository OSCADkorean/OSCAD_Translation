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
*******************************************************/ 
 
$gFbLicenseName="Apache-2.0";
$gFbLicenseSpecification="Apache License 2.0";
$gFbLicenseAbbr="ApL";
$gFbLicenseRelease="2.0";

$gOsLicProtectionChapter="2.2";
$gOsLicPatentChapter="3.1.2";
$gOsLicTodoListChapter="6.3";
$gOsLicLsucChapter="6.3.3";
$gOsLicTlExplanationChapter="6.3.10";

$gFbLiSpUcName="Apache-2.0-C3";

$gFbLiSpUcDesc=
/*
	"that you received Apache-2.0 licensed software which you are now
  going to distribute to third parties in the form of unmodified binary files or
  as unmodfied binary package. In this case it does not matter if you distribute
  a program, an application, a server, a snippet, a module, a library, or a
  plugin as an independent or an embedded unit.";
*/

	"아파치-2.0으로 라이선스 된 받은 소프트웨어의 비수정 버전을 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 배포하려는 의도를 갖고 있다. 이 경우 독립 또는 내장 유닛으로 프로그램, 어플리케이션, 서버, 스니펫, 모듈, 라이브러리 또는 플러그인 등 배포유형을 식별하는 것은 아니다.";

$gFbLiSpUcRequiresPrefix
/*
	"the following tasks in order to fulfill the license conditions:";
*/

	"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";
	
$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
		"Give the recipient a copy of the Apache 2.0
		license. If it is not already part of the binary package, add it",
*/

		"아파치 2.0 라이선스 사본을 받는 사람에게 제공한다. 이미 구성한 바이너리 패키지의일부에서 빠져있다면 이를 추가한다.",

/*		
		"Ensure that the licensing elements (especially the specific copyright notice
		of the original author(s)) are retained in your package in the form you have
		received them. If you compile the binary from the sources, ensure
		that all the licensing elements are also incorporated into the
		package.",
*/

		"라이선싱하는 요소(특히, 원저작자의 저작권 공지)는 받았던 형태로 패키지에 포함한다. 소스에서 바이너리를 컴파일하는 경우, 라이선싱하는 요소가 패키지에 전부 포함되도록 한다.",

/*		
		"Ensure that the notice text file is retained or integrated into your
		binary package in the form you have initially received it.",
*/

		"공지 텍스트 파일은 처음에 받았던 형태로 바이너리 패키지에 보유하거나 포함하도록 한다.",

/*		
		"Ensure that the notice text file is also reproduced if and
		whereever such third-party notices normally appear - especially, if
		you are distributing an unmodified Apache-2.0 licensed library as
		embedded component of your own work which displays its own copyright
		notice."
*/
		"제3자 공지가 표시된다면, 특히, 여러분의 저작권 공지를 표시한 자체 저작물의 내장 컴포넌트로서 비수정 아파치-2.0 라이선스 라이브러리를 포함하여 배포하는 경우라면 공지 텍스트 파일을 복제한다."
);

$gFbLiSpUcRequiresVolArr=array(
/*
  "Let the documentation of your distribution and/or your additional
	 material also reproduce the content of the notice text file, a hint to
	 the software name, a link to its homepage, and a link to the
   Apache 2.0 license, especially as a subsection of your own copyright
		notice."
*/
	"배포 문서 및 추가 자료를 통해 또한 공지 텍스트 파일 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, 아파치 2.0 라이선스 링크를 복제한다. 특히, 자체 저작권 공지의 하위 구역으로써 포함한다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
/*
		"to promote any of your services - based on the this software - by
		trademarks, service marks, or product names linked to the software 
		except as required for reasonable and customary use in describing 
		the origin of the work and reproducing the content of the NOTICE file.",
		"to institute any patent litigation against anyone alleging that the
		software constitutes patent infringement."
*/

		"사용한 소프트웨어 파일을 공정하게 설명하는데 필요한 경우를 제외하고, 아파치 소프트웨어에 연결된 제품명, 제품 상표 또는 서비스 마크에 기반하여 자신의 서비스나 제품을 홍보."

		);

?>
