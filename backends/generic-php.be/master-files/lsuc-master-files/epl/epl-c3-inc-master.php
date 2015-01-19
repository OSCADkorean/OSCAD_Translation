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
# Edit date : 2015.01.19
# Etc. Comment : last sentence is not translation at Korea License
                 EPL -> EPL-1.0
*******************************************************/   

$gFbLicenseName="EPL-1.0";
$gFbLicenseSpecification="Eclipse Public License";
$gFbLicenseAbbr="EPL";
$gFbLicenseRelease="1.0";

$gOsLicProtectionChapter="2.5";
$gOsLicPatentChapter="3.1.4";
$gOsLicTodoListChapter="6.6";
$gOsLicLsucChapter="6.6.3";
$gOsLicTlExplanationChapter="6.6.10";

$gFbLiSpUcName="EPL-1.0-C3";

$gFbLiSpUcDesc=
/*
	"that you received EPL-1.0 licensed software which you are now
  going to distribute to third parties in the form of unmodified binary files or
  as unmodfied binary package. In this case it does not matter if you distribute
  a program, an application, a server, a snippet, a module, a library, or a
  plugin as an independent or an embedded unit.";
*/

	"EPL-1.0로 라이선스 된 받은 소프트웨어의 비수정 버전을 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 배포하고자 하는 의도를 갖고 있다. 이 경우 독립 또는 내장 유닛으로 프로그램, 어플리케이션, 서버, 스니펫, 모듈, 라이브러리 또는 플러그인 등 배포유형을 식별하는 것은 아니다.";

$gFbLiSpUcRequiresPrefix=
/*
	"the following tasks in order to fulfill the license conditions:";
*/

	"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
		"Ensure that the licensing elements
  (particularly all copyright notices and the disclaimer of warranty and
  disclaimer of liability) are retained in your package in exactly the form you
  have received them. If you compile the
		binary from the sources, ensure that all these licensing elements are also
		incorporated into the package.",
*/

		"라이선싱하는 요소 특히, 저작권 공지와 법적 책임 및 보증에 대한 권리포기는 받았던 정확한 형태로 패키지에 포함한다. 소스에서 바이너리를 컴파일한다면 라이선싱하는 요소가 전부 패키지에 포함되도록 한다.";


		"If still not existing, integrate an explicit, very	prominently placed
		'No warranty' statement into the distributed source code package. Let this
		statement clearly say that all (other) contributors to the software do not
		take over any responsibility for the quality of the software.
		Then, copy the no-warranty clause and the disclaimer of the liability of the
		EPL-1.0 itself into that file.",

		"만약 배포된 소스코드 패키지 안에 존재하지 않는다면, 매우 두드러지게 ‘보증 없음’이란 명확한 문구를 포함시킨다. 이 문구로 모든 소프트웨어 기여자에게 소프트웨어 품질에 대한 책임을 전가하지 않는다는 점을 명확히 한다. 그 다음에 그 파일에 EPL-1.0 법적 책임의 권리포기와 보증 없음 조항을 추가한다.",

		"Make the source code of the software accessible
		via a repository under your own control - even if you did not modified it:
		Push the source code package into an internet repository and enable its
		download function. Integrate an easily to find description into your
		distribution package which explains how the code can be received from where.
		Ensure that this respository is available for a reasonable period of time.",

		"자신의 권한으로 소프트웨어의 소스코드를 저장소(repository)를 통해 이용할 수 있게 한다(이를 수정하지 않았더라도). 인터넷 저장소에 소스코드 패키지를 삽입하고 그 다운로드 기능을 허용한다. 코드를 수신하는 방법을 설명하는 배포 패키지에 손쉽게 찾는 설명을 포함한다. 이 저장소는 충분히 장기간 사용할 수 있도록 한다.",

/*		
		"Insert a prominent hint to the download repository
		into your distribution and/or your additional material.",
*/

		"배포 및 추가 자료에 다운로드 저장소의 눈에 띄는 힌트를 삽입한다.",
	
/*	
		"Execute the to-do list of use case EPL-1.0-C2 (:- the same request parameters,
		 but replace form = binaries by form = sources)."
*/

		"사용 사례 EPL-1.0-C2의 과업 목록을 실행한다."
);

$gFbLiSpUcRequiresVolArr=array(
/*
  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the EPL-1.0 license."
*/

	"배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, EPL-1.0 라이선스 링크를 복제한다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
/*
		"to remove or to alter any copyright notices contained within the
		received software package.",
*/

		"받은 소프트웨어 패키지 내에 포함된 저작권 공지를 제거 또는 변경.",

		"to institute a patent litigation against anyone alleging that this
		 software constitutes patent infringement."
/*last sentence is not translation at Korea License

		"지금 이 소프트웨어가 특허권 침해라고 주장하는 사람들에 대응하는 특허 소송권을 가질 수 있다."
*/
		 );

?>
