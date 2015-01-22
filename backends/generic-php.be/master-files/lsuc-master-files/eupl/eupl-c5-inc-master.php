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

# Editor :  Minhyung Cho  <designer.mhc@gmail.com>
# Project Period : 2015.01.12 ~ 2015.01.23
# Edit date : 2015.01.21
*******************************************************/ 


$gFbLicenseName="EUPL-1.1";
$gFbLicenseSpecification="European Union Public License";
$gFbLicenseAbbr="EUPL";
$gFbLicenseRelease="1.1";

$gOsLicProtectionChapter="2.6";
$gOsLicPatentChapter="3.1.5";
$gOsLicTodoListChapter="6.7";
$gOsLicLsucChapter="6.7.5";
$gOsLicTlExplanationChapter="6.7.12";

$gFbLiSpUcName="EUPL-1.1-C5";

$gFbLiSpUcDesc=
/*
	"that you received a EUPL-1.1 licensed snippet, module or
  library which you are now going to distribute to third parties as an embedded
  component of a larger unit and in the form of unmodified binary files or as
  unmodified binary package.";
*/
    "EUPL로 라이선스 된 받은 스니펫, 모듈 또는 라이브러리의 비수정 버전을 더 큰 유닛의 내장 컴포넌트로, 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 배포하려는 의도를 갖고 있다. ";
    
$gFbLiSpUcRequiresPrefix=
/*
	"the following tasks in order to fulfill the license conditions:";
*/
    "라이선스 조건을 충족하기 위한 작업은 다음과 같다:";
    
$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
		"Ensure that the licensing elements
  (particularly the copyright, patent, and trademark notices and all notices
  that refer to the license or to the disclaimer of warranties) are retained in
  your package in the form you have received them. If you compile the binary from the sources, ensure that
		all the licensing elements are also incorporated into the package.",
*/
    "라이선싱하는 요소, 특히 저작권, 특허 또는 상표 공지 그리고 라이선스와 보증 제한을 뜻하는 공지 등은 받았던 형태로 패키지에 포함한다. 소스에서 바이너리를 컴파일한다면 라이선스 요소는 전부 패키지에 포함하도록 한다.",
/*
		"Give the recipient a copy of the EUPL-1.1
		license. If it is not already part of the binary package, add
		it.",
*/
    "받는 사람에게 EUPL-1.1 라이선스 사본을 제공한다. 이미 구성한 바이너리 패키지의 일부에서 빠져있다면 이를 추가한다.",
/*
		"Make the source code of the embedded library and the source code of
		your overarching program accessible via a repository under your own
		control (even if you do not modified it): Push the source code package into
		a repository, make it downloadable via the internet, and integrate an
		easily to find description into the distribution package which explains how
		the code can be received from where. Ensure, that this repository is online
		for as long as you continue to distribute the software.",
*/
    "자신의 권한으로 내장 라이브러리의 소스코드 그리고 지배적인 프로그램의 소스코드를 저장소(repository)를 통해 이용할 수 있게 한다(이를 수정하지 않더라도). 인터넷 저장소에 소스코드 패키지를 삽입하고 인터넷을 통한 다운로드를 허용한다. 코드를 수신하는 방법을 설명하는 배포 패키지에 손쉽게 찾는 설명을 포함한다. 이 저장소는 소프트웨어 배포를 지속하는 동안 충분한 기간 동안 온라인에서 사용할 수 있도록 한다.",
/*
		"Insert a prominent hint to the download repository
		into your distribution and/or your additional material.",
*/
    "배포 및 추가 자료에 다운로드 저장소의 힌트를 눈에 띄게 삽입한다.",
/*
		"License your overarching program also under the
		EUPL-1.1: Organize the binaries of the on-top development in a way that they
		are also covered by the EUPL-1.1 licensing statements.",
*/
    " EUPL-1.1에 의거 지배적인 프로그램의 사용을 허가한다. EUPL-1.1 라이선싱 사항에 포함 되는 방식으로 기능 추가 개발물의 바이너리를 구성한다.",
/*
		"Execute the to-do list of use case EUPL-1.1-C4 (:- the same request parameters,
	  but replace form = binaries by form = sources)."
*/
    "사용 사례 EUPL-1.1-C4의 과업 목록을 실행한다."
);

$gFbLiSpUcRequiresVolArr=array(
/*
	"Let the copyright dialog of the on-top development clearly say, that it
	uses the EUPL-1.1 licensed library and that it is itself
	licensed under the EUPL-1.1 too.",
*/
    "기능 추가 개발물의 저작권 다이얼로그는 EUPL-1.1 라이선스 라이브러리를 사용하고 EUPL-1.1에 의해 사용 허가되었다는 점을 이 다이얼로그에 명확히 표시한다.",
/*
  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the EUPL-1.1 license, preferably as a subsection
  of your own copyright notice."
*/
    "배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, EUPL-1.1 라이선스 링크를 복제한다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
/*
	"to promote any of your services or products - based on the this software
	- by trade names, trademarks, service marks, or names linked to this EUPL-1.1
	software, except as required for reasonable and customary use in describing 
	the origin of the software and reproducing the copyright notice."
*/
    "사용한 소프트웨어 파일을 공정하게 설명하고 저작권 공지를 복제하는데 필요한 경우를 제외하고 EUPL 소프트웨어에 연결된 명칭, 상표명, 상표, 서비스 마크에 의한 서비스 또는 제품의 홍보"
	);

?>
