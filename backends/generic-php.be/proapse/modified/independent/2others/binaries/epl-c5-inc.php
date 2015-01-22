<?php

/*  This file is part of OSCAd, the Open Source Compliance Advisor
 
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
 *****************************************************
 *  <Open Source Compliance Advisor Korean Project>
 *  Contributor : 
    Junehyun Baek <100aniv62@gmail.com>
    Dosol choi    <dosa1572@gmail.com>
    Booyong shin  <tlsqndyd@gmail.com>
    Hoonmoo ryu   <tnsanzz@gmail.com>
    Minhyung Cho  <designer.mhc@gmail.com>
    Jaekyung Kim  <bonoxtwo@gmail.com>
    Changeun Cho  <jceun57@gmail.com>

 *  Editor : Changeun Cho  <jceun57@gmail.com>
 *  Project Period : 2015.01.12 ~ 2015.01.23
 *  Edit date : 2015.01.16
 *  Etc. Comment : EPL(KOR) -> EPL-1.0(ENG)
 *****************************************************
 */

$gFbLicenseName="EPL-1.0";
$gFbLicenseSpecification="Eclipse Public License";
$gFbLicenseAbbr="EPL";
$gFbLicenseRelease="1.0";

$gOsLicProtectionChapter="2.5";
$gOsLicPatentChapter="3.1.4";
$gOsLicTodoListChapter="6.6";
$gOsLicLsucChapter="6.6.5";
$gOsLicTlExplanationChapter="6.6.10";

$gFbLiSpUcName="EPL-1.0-C5";

$gFbLiSpUcDesc=
	/*"that you received an EPL-1.0 licensed program, application, or
  server (proapse), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binary files or as a
  binary package.";*/
  
  "EPL-1.0으로 라이선스 된 받은 프로그램, 어플리케이션 또는 서버 등 프로앱스의 수정 버전을 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다: ";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  /*"Ensure that the licensing elements
  (particularly all copyright notices and the disclaimer of warranty and
  disclaimer of liability) are retained in your package in exactly the form you
  have received them. If you compile the
  binary from the sources, ensure that all these licensing elements are also
  incorporated into the package.",

  "Create a modification text file, if such a
  notice file still does not exist. Expand the modification text
  file by a more general description of your modifications. Incorporate it into
  your distribution package.",

  "Mark all modifications of the source code of the
  program (proapse) thoroughly - namely within the  modfied source code.",

  "Organize your modifications in a way that they are
  covered by the (existing) EPL-1.0 licensing statements.",

  "If still not existing, integrate an explicit, very
  prominently placed 'No warranty' statement into the distributed source code
  package. Let this statement clearly say that all (other) contributors to the
  software do not take over any responsibility for the quality of the software.
  Then, copy the no-warranty clause and the disclaimer of the liability of the
  EPL-1.0 itself into that file. Update an existing copyright screen presented by
  the program so that it shows the same information.",

  "Make the source code of the modified program
  accessible via a repository under your own control: Push the source code
  package into an internet repository and enable its download function.
  Integrate an easily to find description into your distribution package which
  explains how the code can be received from where. Ensure that this respository 
  is available for a reasonable period of time.",

  "Insert a prominent hint to the download repository
  into your distribution and/or your additional material.",

  "Execute the to-do list of use case EPL-1.0-C4 (:- the same request parameters,
		 but replace form = binaries by form = sources)."*/
		 
	"라이선싱하는 요소 특히, 저작권 공지와 법적 책임 및 보증에 대한 권리포기는 받았던 정확한 형태로 패키지에 포함한다. 소스코드에서 바이너리를 컴파일한다면 라이선싱하는 요소가 패키지에 전부 포함되도록 한다.",

	"공지 파일이 존재하지 않으면 수정 텍스트 파일을 작성한다. 보다 일반적인 수정 설명으로 수정 텍스트 파일을 확장한다. 이를 배포 패키지에 포함한다.",

	"모든 소스코드의 수정사항을 프로그램(프로앱스)에 전부 표시한다. 즉 수정된 소스코드 내에 표시한다.",

	"기존의 EPL-1.0 라이선싱 문구로 적용되는 방식으로 수정물을 구성한다.",

	"만약 배포된 소스코드 패키지 안에 존재하지 않는다면, 매우 두드러지게 ‘보증 없음’이란 명확한 문구를 포함시킨다. 이 문구로 모든 소프트웨어 기여자에게 소프트웨어 품질에 대한 책임을 전가하지 않는다는 점을 명확히 한다. 그 다음에 그 파일에 EPL-1.0 법적 책임의 권리포기와 보증 없음 조항을 추가한다. 동일한 정보가 표시되도록 프로그램으로 표시되는 기존의 저작권 화면을 업데이트한다.",

	"자신의 권한으로 소프트웨어의 소스코드를 저장소(repository)를 통해 이용할 수 있게 한다. 인터넷 저장소에 소스코드 패키지를 내보내고 그 다운로드 기능을 허용한다. 코드를 수신하는 방법을 설명하는 내용을 배포 패키지에 손쉽게 찾도록 하여 포함한다. 이 저장소는 충분히 장기간 사용할 수 있도록 한다.",

	"배포 및 추가 자료에 다운로드 저장소의 눈에 띄는 힌트를 삽입한다.",

	"사용 사례 EPL-1.0-C4의 과업 목록을 실행한다."	

);

$gFbLiSpUcRequiresVolArr=array(
  /*"Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the EPL-1.0 license."*/
  
  "배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, EPL-1.0 라이선스 링크를 복제한다. 특히, 자체 저작권 공지의 하위 구역으로써 포함한다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		/*"to remove or to alter any copyright notices contained within the
		received software package.",
		"to institute a patent litigation against anyone alleging that this
		 software constitutes patent infringement."*/
		 
		 "받은 소프트웨어 패키지 내에 포함된 저작권 공지를 제거 또는 변경",
		 
		 "소프트웨어가 특허 침해에 해당한다고 주장하는 자에 대해 특허 소송을 제기"
		 
		);

?>
