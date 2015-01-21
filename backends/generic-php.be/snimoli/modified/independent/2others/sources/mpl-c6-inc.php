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
  Dosol Choi    <dosa1572@gmail.com>
  Booyong shin  <tlsqndyd@gmail.com>
  Hoonmoo ryu   <tnsanzz@gmail.com>
  Minhyung Cho  <designer.mhc@gmail.com>
  Jaekyung Kim  <bonoxtwo@gmail.com>
  Changeun Cho  <jceun57@gmail.com>

# Editor : Dosol Choi <dosa1572@gmail.com>
# Project Period : 2015.01.12 ~ 2015.01.23
# Edit date : 2015.01.21
# Etc. Comment :
*******************************************************/  
$gFbLicenseName="MPL-2.0";
$gFbLicenseSpecification="Mozilla Public License";
$gFbLicenseAbbr="MPL";
$gFbLicenseRelease="2.0";

$gOsLicProtectionChapter="2.10";
$gOsLicPatentChapter="3.1.8";
$gOsLicTodoListChapter="6.11";
$gOsLicLsucChapter="6.11.6";
$gOsLicTlExplanationChapter="6.11.10";

$gFbLiSpUcName="MPL-2.0-C6";

$gFbLiSpUcDesc=
	"MPL로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 소스코드 파일 형태 또는 소스코드 패키지로 제3자에게 배포하려는 의도를 갖고 있다. 단, 이를 다른 더 큰 소프트웨어 유닛에 삽입하지는 않는다.";
/*	"that you received an MPL-2.0 licensed code snippet, module, library,
  or plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of source code
  files or as a source code package, but without embedding it into another
  larger software unit."; */

$gFbLiSpUcRequiresPrefix="라이선스 조건을 충족하기 위한 작업은 다음과 같다:";
/*	"the following tasks in order to fulfill the license conditions:"; */

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
	"라이선싱하는 요소, 특히 모든 저작권 공지, 특허 공지, 보증 제한 또는 책임 배제는 받았던 형태로 정확히 패키지에 포함한다.",
	"받는 사람에게 MPL 2.0 라이선스 사본을 제공한다. 이미 구성한 소프트웨어 패키지의 일부에서 빠져있다면 이를 추가한다. 패키지의 라이선싱 파일의 라이선싱 설명에서 MPL에 의거 패키지를 사용 허가하였다는 점이 명시되지 않으면 다음 문장이 들어간 자체 올바른 MPL 라이선싱 파일을 추가로 삽입한다. 이 소스코드 형태는 Mozilla Public License 버전 2.0 조항에 준한다. MPL 사본이 이 파일과 함께 배포되지 않았다면 http://mozilla.org/MPL/2.0/에서 사본 하나를 확보할 수 있다.",
	"기존의 MPL 라이선싱 사항에 포함되는 방식으로 수정물을 구성한다. 만약 새로운 소스코드 파일을 추가했다면, 헤더에 여러분의 저작권을 명시한 문장과 그 문장이 MPL을 충족하도록 라이선싱한다는 내용을 추가한다."
/*  "Ensure that the licensing elements - esp. all
  copyright notices, patent notices, disclaimers of warranty, or limitations of
  liability - are retained in your package in exact the form you have received
  them.",

	"Give the recipient a copy of the MPL-2.0 license. If it is not already
	part of the software package, add it. If the licensing statement in the
	licensing file of the package does still not clearly state that the package
	is licensed under the MPL-2.0, additionally insert your own correct MPL-2.0 licensing
	file containing the sentence: 'This Source Code Form is subject to the terms
	of the Mozilla Public License, v. 2.0. If a copy of the MPL-2.0 was not
	distributed with this file, You can obtain one at
	http://mozilla.org/MPL/2.0/'.",

  "Organize your modifications in a way that they are
  covered by the existing MPL-2.0 licensing statements. If you add new source code
  files, insert a header containing your copyright line and an MPL-2.0 adequate
  licensing the statement."
*/
);

$gFbLiSpUcRequiresVolArr=array(
	"공지 파일이 존재하지 않으면 수정 텍스트 파일을 작성한다. 보다 일반적인 수정에 관한 설명으로 수정 텍스트 파일을 확장한다. 이를 배포 패키지에 포함한다.",
	"스니몰리인 라이브러리의 소스코드 수정사항을 수정된 소스코드 안에 전부 표시한다.",
	"배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, MPL 2.0 라이선스 링크를 복제한다."
/*		"Create a modification text file, if such a
		notice file still does not exist. Expand the modification text
		file by a more general description of your modifications. Incorporate it into
		your distribution package.",

		"Mark all modifications of the source code of the
		library (snimoli) thoroughly - namely within
		the modfied source code.",

  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the MPL-2.0 license." */
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
	"받은 소프트웨어 패키지 내에 포함된 라이선스 공지(저작권 공지, 특허 공지, 보증 제한 또는 책임 배제를 포함)를 삭제하거나 변경.",
	
	"사용된 소프트웨어를 공정하게 설명하고 저작권 공지를 복제해야 하는 경우를 제외하고 MPL 소프트웨어에 연결된 로고, 상표, 서비스 마크로 자신의 서비스를 해당 소프트웨어에 근거하여 홍보."

/*		"to remove or to alter any license notices - including copyright notices,
		patent notices, disclaimers of warranty, or limitations of liablility
		- contained within the software package you have received.",

		"to promote any of your products - based on the this software - by
		trademarks, service marks, or logos linked to this MPL-2.0 software, except as 
  		required for reasonable and customary use in describing the origin
  		of the software and reproducing the copyright notice."
*/
		);

?>
