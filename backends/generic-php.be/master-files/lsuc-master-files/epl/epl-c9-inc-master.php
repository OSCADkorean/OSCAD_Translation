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
# Edit date : 2015.01.23
# Etc. Comment : EPL -> EPL-1.0
*******************************************************/   

$gFbLicenseName="EPL-1.0";
$gFbLicenseSpecification="Eclipse Public License";
$gFbLicenseAbbr="EPL";
$gFbLicenseRelease="1.0";

$gOsLicProtectionChapter="2.5";
$gOsLicPatentChapter="3.1.4";
$gOsLicTodoListChapter="6.6";
$gOsLicLsucChapter="6.6.9";
$gOsLicTlExplanationChapter="6.6.10";

$gFbLiSpUcName="EPL-1.0-C9";

$gFbLiSpUcDesc=
/*
	"that you received an EPL-1.0 licensed code snippet, module, library,
  or plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binary files
  or as a binary package together with another larger software unit which
  contains this code snippet, module, library, or plugin as an embedded component.";
*/

	"EPL-1.0로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인의 수정 버전을 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 내장 컴포넌트로서 스니펫, 모듈, 라이브러리 또는 플러그인을 포함하는 다른 더 큰 소프트웨어 유닛과 함께 배포하려는 의도를 갖고 있다.";

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

		"라이선싱하는 요소 특히, 저작권 공지와 법적 책임 및 보증에 대한 권리포기는 받았던 정확한 형태로 패키지에 포함한다. 소스에서 바이너리를 컴파일한다면, 라이선싱하는 요소가 전부 패키지에 포함되도록 한다.",

/*		
		"Create a modification text file, if such a	notice file still does not
		exist. Expand the modification text	file by a more general description
		of your modifications. Incorporate it into
		your distribution package.",
*/

		"공지 파일이 존재하지 않으면 수정 텍스트 파일을 작성한다. 보다 일반적인 수정 설명으로 수정 텍스트 파일을 확장한다. 이를 배포 패키지에 포함한다.",

/*		
		"Mark all modifications of the source code of the
		embedded library (snimoli) thoroughly - namely within the source code.",
*/

		"모든 소스코드의 수정사항을 내장 라이브러리(스니몰리)에 전부 표시한다. 즉 수정된 소스코드 내에 표시한다.",

/*
		"If still not existing, integrate an explicit, very
		prominently placed 'No warranty' statement into the distributed source code
		package. Let this statement clearly say that all (other) contributors to the
		software do not take over any responsibility for the quality of the software.
		Then, copy the no-warranty clause and the disclaimer of the liability of the
		EPL-1.0 itself into that file. Let the copyright screen of your own overarching
		program show the same information  - as a specification for the embedded
		component.",
*/

		"만약 배포된 소스코드 패키지 안에 존재하지 않는다면, 매우 두드러지게 ‘보증 없음’이란 명확한 문구를 포함시킨다. 이 문구로 모든 소프트웨어 기여자에게 소프트웨어 품질에 대한 책임을 전가하지 않는다는 점을 명확히 한다. 그 다음에 그 파일에 EPL-1.0-법적 책임의 권리포기와 보증 없음 조항을 추가한다. 내장 컴포넌트 스펙으로서 동일한 정보를 자체의 지배적인 프로그램의 저작권 화면에 표시한다.",

/*
		"Make the source code of the embedded library
		accessible via a repository under your own control: Push the source code
		package into an internet repository and enable its download function.
		Integrate an easily to find description into your distribution package which
		explains how the code can be received from where. Ensure that this respository 
		is available for a reasonable period of time.",
*/

		"자신의 권한으로 내장 라이브러리의 소스코드를 저장소(repository)를 통해 이용할 수 있게 한다. 인터넷 저장소에 소스코드 패키지를 삽입하고 그 다운로드 기능을 허용한다. 코드를 수신하는 방법을 설명하는 배포 패키지에 손쉽게 찾는 설명을 포함한다. 이 저장소는 충분히 장기간 사용할 수 있도록 한다.",

/*		
		"Insert a prominent hint to the download repository
		into your distribution and/or your additional material.",
*/

		"배포 및 추가 자료에 다운로드 저장소의 눈에 띄는 힌트를 삽입한다.",

/*
		"Organize your modifications of the embedded library in a way that they are
		covered by the existing EPL-1.0 licensing statements.",
*/
		"기존의 EPL-1.0라이선싱 문구로 적용되는 방식으로 내장 라이브러리의 수정물을 구성한다."

/*
		"Execute the to-do list of use case EPL-1.0-C8 (:- the same request parameters,
		 but replace form = binaries by form = sources)."
*/
		 "사용 사례 EPL-1.0-C8의 과업 목록을 실행한다."
);

$gFbLiSpUcRequiresVolArr=array(
/*
  "Arrange your binary distribution so that the
  integrated EPL-1.0 and the licensing files clearly refer only to the
  embedded library and do not disturb the licensing of your own overarching
  work. It's a good tradition to keep the embedded components like libraries,
  modules, snippets, or plugins in specific directory which contains also all
  additional licensing elements.",
*/

	"통합된 EPL-1.0과 라이선싱 파일이 자신이 보유한 지배적인 저작물의 라이선싱을 침해하지 않고 내장 라이브러리만을 명확히 나타내도록 바이너리(binary distribution)를 구성한다. 모든 라이선싱하는 요소가 추가로 들어있는 특정 디렉토리에 라이브러리, 모듈, 스니펫 또는 플러그인과 같은 내장 컴포넌트를 두는 것이 바람직하다.",

/*
	"Let the documentation of your distribution and/or
  your additional material  also reproduce the content of the existing
  copyright notice text files, a hint to the name of the used EPL-1.0
  licensed component, a link to its homepage, and a link to the EPL-1.0 license
  - especially as subsection of your own copyright notice."
*/

	"배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 사용된 EPL-1.0 라이선스 컴포넌트 명칭 힌트, 홈페이지 링크, EPL-1.0 라이선스 링크를 복제한다. 특히, 자체 저작권 공지의 하위 구역으로써 포함한다."

);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
/*
		"to remove or to alter any copyright notices contained within the
		received software package.",
*/

		"받은 소프트웨어 패키지 내에 포함된 저작권 공지를 제거 또는 변경.",
		
/*
		"to institute a patent litigation against anyone alleging that this
		 software constitutes patent infringement."
*/

		"소프트웨어가 특허 침해에 해당한다고 주장하는 자에 대해 특허 소송을 제기."
		);

?>
