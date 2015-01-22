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
 ******************************************************
 <Open Source Compliance Advisor Korean Project>
 # Contributor :
   Junehyun Baek <100aniv62@gmail.com>
   Dosol choi    <dosa1572@gmail.com>
   Booyong shin  <tlsqndyd@gmail.com>
   Hoonmoo ryu   <tnsanzz@gmail.com>
   Minhyung Cho  <designer.mhc@gmail.com>
   Jaekyung Kim  <bonoxtwo@gmail.com>
   Changeun Cho  <jceun57@gmail.com>

 # Editor : Booyong shin  <tlsqndyd@gmail.com>
 # Project Period : 2015.01.12 ~ 2015.01.23
 # Edit date : 2015.01.20
 # Etc. Comment : no version changing
 *******************************************************
 */

$gFbLicenseName="MPL-2.0";
$gFbLicenseSpecification="Mozilla Public License";
$gFbLicenseAbbr="MPL";
$gFbLicenseRelease="2.0";

$gOsLicProtectionChapter="2.10";
$gOsLicPatentChapter="3.1.8";
$gOsLicTodoListChapter="6.11";
$gOsLicLsucChapter="6.11.5";
$gOsLicTlExplanationChapter="6.11.10";

$gFbLiSpUcName="MPL-2.0-C5";

$gFbLiSpUcDesc=
/*	"that you received an MPL-2.0 licensed program, application, or
  server (proapse), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binary files or as a
  binary package.";*/
  "MPL-2.0로 라이선스 된 받은 프로그램, 어플리케이션 또는 서버 등 프로앱스의 수정 버전을 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
/*	"the following tasks in order to fulfill the license conditions:";*/
"라이선스 조건을 충족하기 위한 작업은 다음과 같다.:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

/*		"Ensure that the licensing elements - esp. all copyright notices, patent
		 notices, disclaimers of warranty, or limitations of
		liability - are retained in your package in exact the form you have received
		them. If you compile the binary from the sources, ensure that all these
		licensing elements are also incorporated into the package.",*/
		"라이선싱하는 요소, 특히 모든 저작권 공지, 특허 공지, 보증 제한 또는 책임 배제는 받았던 형태로 정확히 패키지에 포함한다. 소스에서 바이너리를 컴파일한다면 라이선싱하는 요소를 패키지에 포함하도록 한다.",

/*		"Make the source code of the software accessible
		via a repository under your own control: Push the source code package into an
		internet repository and enable its download function without requiring any fee
		from the downloading user. Integrate an easily to find description into your
		distribution package which explains how the code can be received from where.
		Ensure, that this repository is usable reasonably long enough.",*/
		"자신의 권한으로 배포된 소프트웨어의 소스코드를 저장소(repository)를 통해 이용할 수 있게 한다. 인터넷 저장소에 소스코드 패키지를 삽입하고 다운로드하는 사용자로부터 수수료를 요구하지 않고 다운로드 기능을 허용한다. 코드를 수신하는 방법을 설명하는 배포 패키지에 손쉽게 찾는 설명을 포함한다. 이 저장소는 충분히 오랫동안 사용할 수 있도록 한다",

/*		"Insert a prominent hint to the download repository
		into your distribution and/or your additional material.",*/
		"배포 및 추가 자료에 다운로드 저장소의 힌트를 눈에 띄게 삽입한다.",

/*		"Execute the to-do list of use case MPL-2.0-C4 (:- the same request parameters,
		 but replace form = binaries by form = sources).",*/
		 "사용 사례 MPL-2.0-C4의 과업 목록을 실행한다.",

/*		"Organize your modifications in a way that they are
			covered by the existing MPL-2.0 licensing statements."*/
			"기존의 MPL-2.0 라이선싱 사항에 포함되는 방식으로 수정물을 구성한다."

);

$gFbLiSpUcRequiresVolArr=array(

/*	"Create a modification text file, if such a
	notice file still does not exist. Expand the modification text
	file by a more general description of your modifications. Incorporate it into
	your distribution package.",*/
	"공지 파일이 존재하지 않으면 수정 텍스트 파일을 작성한다. 보다 일반적인 수정에 관한 설명으로 수정 텍스트 파일을 확장한다. 이를 배포 패키지에 포함한다.",

/*	"Give the recipient a copy of the MPL-2.0 license. If it is not already
	part of the software package, add it. If the licensing statement in the
	licensing file of the package does still not clearly state that the package
	is licensed under the MPL-2.0, additionally insert your own correct MPL-2.0 licensing
	file containing the sentence: 'This Source Code Form is subject to the terms
	of the Mozilla Public License, v. 2.0. If a copy of the MPL-2.0 was not
	distributed with this file, You can obtain one at
	http://mozilla.org/MPL/2.0/'.",*/
	"받는 사람에게 MPL-2.0 라이선스 사본을 제공한다. 이미 구성한 소프트웨어 패키지의 일부에서 빠져있다면 이를 추가한다. 패키지의 라이선싱 파일의 라이선싱 설명에서 MPL-2.0에 의거 패키지를 사용 허가하였다는 점이 명시되지 않으면 다음 문장이 들어간 자체 올바른 MPL-2.0 라이선싱 파일을 추가로 삽입한다. 이 소스코드 형태는 Mozila Public License 버전 2.0 조항에 준한다. MPL-2.0 사본이 이 파일과 함께 배포되지 않았다면 htp:/mozila.org/MPL/2.0/에서 사본 하나를 확보할 수 있다",

/*  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the MPL-2.0 license."*/
  "배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, MPL 2.0 라이선스 링크를 복제한다."	//한글판에 있는 내용이 영문판에 없어서 뺌
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(

/*		"to remove or to alter any license notices - including copyright notices,
		patent notices, disclaimers of warranty, or limitations of liablility
		- contained within the software package you have received.",*/
		"받은 소프트웨어 패키지 내에 포함된 라이선스 공지(저작권 공지, 특허 공지, 보증 제한 또는 책임 배제를 포함)를 삭제하거나 변경.",

/*		"to promote any of your products - based on the this software - by
		trademarks, service marks, or logos linked to this MPL-2.0 software, except as 
  		required for reasonable and customary use in describing the origin
  		of the software and reproducing the copyright notice."*/
		"사용된 소프트웨어를 공정하게 설명하고 저작권 공지를 복제해야 하는 경우를 제외하고 MPL-2.0 소프트웨어에 연결된 로고, 상표, 서비스 마크로 자신의 서비스를 해당 소프트웨어에 근거하여 홍보."

		);

?>
