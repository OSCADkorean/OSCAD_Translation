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
$gOsLicLsucChapter="6.6.4";
$gOsLicTlExplanationChapter="6.6.10";

$gFbLiSpUcName="EPL-1.0-C4";

$gFbLiSpUcDesc=
/*
	"that you received an EPL-1.0 licensed program, application, or
  server (proapse), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of source code files or as
  a source code package.";
*/

	"EPL-1.0로 라이선스 된 받은 프로그램, 어플리케이션 또는 서버(proapse)의 수정 버전을 소스코드 파일 형태 또는 소스코드 패키지로 제3자에게 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
/*
	"the tasks in order to fulfill the license conditions:";
*/

	"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
		"Ensure that the licensing elements
  (particularly all copyright notices and the disclaimer of warranty and
  disclaimer of liability) are retained in your package in exactly the form you
  have received them.",
*/

		"라이선싱하는 요소 특히, 저작권 공지와 법적 책임 및 보증에 대한 권리포기는 받았던 정확한 형태로 패키지에 포함한다.",

/*		
		"Create a modification text file, if such a	notice file still does not
		exist. Expand the modification text	file by a more general description of
		your modifications. Incorporate it into your distribution package.",
*/

		"공지 파일이 존재하지 않으면 수정 텍스트 파일을 작성한다. 보다 일반적인 수정 설명으로 수정 텍스트 파일을 확장한다. 이를 배포 패키지에 포함한다.",

/*		
		"Mark all modifications of the source code of the program (proapse)
		thoroughly - namely within the modfied source code.",
*/

		"모든 소스코드의 수정사항을 프로그램(프로앱스)에 전부 표시한다. 즉 수정된 소스코드 내에 표시한다.",

/*		
		"Give the recipient a copy of the EPL-1.0 license. If it is not already
		part of the software package, add it. If the licensing statement in the
		licensing file of the package does still not clearly state that the
		package is licensed under the EPL-1.0, additionally insert your own
		correct EPL-1.0 licensing file.",
*/

		"받는 사람에게 EPL 1.0 라이선스 사본을 제공한다. 이미 구성한 소프트웨어 패키지의 일부에서 빠져있다면 이를 추가한다.367 패키지의 라이선싱 파일 내 라이선싱 문구에서 패키지가 EPL-1.0에 준한다는 설명이 명확하지 않으면 추가로 정확한 EPL-1.0 라이선싱 파일을 삽입한다.",

/*		
		"Organize your modifications in a way that they are
		covered by the existing EPL-1.0 licensing statements. If you add new source code
		files, insert a header containing your copyright line and an EPL-1.0 adequate
		licensing the statement.",
*/

		"기존의 EPL-1.0 라이선싱 문구로 적용되는 방식으로 수정물을 구성한다. 만약 새로운 소스코드 파일을 추가했다면, 헤더에 여러분의 저작권을 명시한 문장과 그 문장이 EPL-1.0을 충족 시키도록 라이선싱한다는 내용을 추가한다.",

/*		
		"If still not existing, integrate an explicit, very
		prominently placed 'No warranty' statement into the distributed source code
		package. Let this statement clearly say that all (other) contributors to the
		software do not take over any responsibility for the quality of the software.
		Then, copy the no-warranty clause and the disclaimer of the liability of the
		EPL-1.0 itself into that file. Update an existing copyright screen presented by
		the program so that it shows the same information."
*/

		"만약 배포된 소스코드 패키지 안에 존재하지 않는다면, 매우 두드러지게 ‘보증 없음’이란 명확한 문구를 포함시킨다. 이 문구로 모든 소프트웨어 기여자에게 소프트웨어 품질에 대한 책임을 전가하지 않는다는 점을 명확히 한다. 그 다음에 그 파일에 EPL 법적 책임의 권리포기와 보증 없음 조항을 추가한다. 동일한 정보가 표시되도록 프로그램으로 표시되는 기존의 저작권 화면을 업데이트한다."
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
		"
		);

?>
