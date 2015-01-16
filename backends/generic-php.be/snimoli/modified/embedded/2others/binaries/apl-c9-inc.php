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
# Edit date : 2015.01.16
# Etc. Comment : 
*******************************************************/  
 
$gFbLicenseName="Apache-2.0";
$gFbLicenseSpecification="Apache License 2.0";
$gFbLicenseAbbr="ApL";
$gFbLicenseRelease="2.0";

$gOsLicProtectionChapter="2.2";
$gOsLicPatentChapter="3.1.2";
$gOsLicTodoListChapter="6.3";
$gOsLicLsucChapter="6.3.9";
$gOsLicTlExplanationChapter="6.3.10";

$gFbLiSpUcName="Apache-2.0-C9";

$gFbLiSpUcDesc=
"아파치로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 내장 컴포넌트로서, 스니펫, 모듈, 라이브러리 또는 플러그인을 포함하는 다른 더 큰 소프트웨어 유닛과 함께 배포하려는 의도를 갖고 있다.";
/*"that you received an Apache-2.0 licensed code snippet, module, library,
  or plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binary files
  or as a binary package together with another larger software unit which
  contains this code snippet, module, library, or plugin as an embedded component.";*/

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다";
	/*"the following tasks in order to fulfill the license conditions:";*/

$gFbLiSpUcNoTasks="";


$gFbLiSpUcRequiresManArr=array(

		"아파치 2.0 라이선스 사본을 받는 사람에게 제공한다. 이미 구성한 바이너리 패키지의 일부에서 빠져있다면 이를 추가한다.",
		
		"라이선싱하는 요소(특히, 원저작자 특정 저작권 공지)는 받았던 형태로 패키지에 포함한다. 소스에서 바이너리를 컴파일한다면 라이선싱하는 요소가 전부 패키지에 포함되어야 한다.",
		
		"받았던 공지 텍스트 파일의 정보는 최소한 전부 이 공지 텍스트 파일에 포함한다. 없으면 작성한다. 공지 텍스트 파일은 수정 설명으로 확장한다.",
		
		"제3자 공지가 표시된다면 공지 텍스트 파일을 복제한다. 지배적인 프로그램에서 자체 저
작권 다이얼로그를 표시하면 거기에 이 정보를 삽입한다."
		
/*		"Give the recipient a copy of the Apache-2.0
		license. If it is not already part of the binary package, add it",

		"Ensure that the licensing elements (especially the specific copyright notice
  of the original author(s)) are retained in your package in the form you have
  received them. If you compile the binary from the sources, ensure that
		all the licensing elements are also incorporated into the package.",

		"Ensure that the notice text file contains
		at least all the information of that notice text file you have
		received.  If it still does not exist, create it. Expand the
		notice text file by a description of your modifications.",

		"Ensure that the notice text file is also reproduced if and whereever
		such third-party notices normally appear. If your overarching program
		displays its own copyright dialog, insert this information there."
*/
);

$gFbLiSpUcRequiresVolArr=array(
		"수정된 소스코드를 배포하고 싶지 않더라도 내장 라이브러리에는 수정사항을 전부 표시한다.",
		
		"배포 문서 및 추가 자료를 통해 또한 공지 텍스트 파일 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, 아파치 2.0 라이선스 링크를 복제한다. 특히, 자체 저작권 공지의 하위 구역으로써 포함한다.",
		
		"포함된 아파치 라이선스와 공지 텍스트 파일이 자신의 지배적인 저작물의 라이선싱을 침해하지 않고 내장 라이브러리만을 명확히 나타내도록 배포할 소스코드를 구성한다. 추가로 모든 라이선싱하는 요소가 들어있는 특정 디렉토리에 라이브러리, 모듈, 스니펫 또는 플러그인을 두는 것이 바람직하다."

/*		"Even if you do not want to distribute your
		modified source code, mark all your modifications of the embedded
		libary or snippet, or module, or plugin thoroughly.",

		"Let the documentation of your distribution and/or
		your additional material also reproduce the content of the notice text
		file, a hint to the software name, a link to its homepage, and a link to the
		Apache 2.0 license, especially as subsection of your own copyright
		notice.",

		"Arrange your binary distribution so that the
		integrated Apache license and the notice text file clearly refer only
		to the embedded library and do not disturb the licensing of your own
		overarching work. It's a good tradition to keep the libraries, modules,
		snippet, or plugins in a specific directories which contain also all licensing
		elements."
*/
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"사용한 소프트웨어 파일을 공정하게 설명하는데 필요한 경우를 제외하고, 아파치 소프트웨어에 연결된 제품명, 제품 상표 또는 서비스 마크에 기반하여 자신의 서비스나 제품을 홍보.",
		"소프트웨어가 특허 침해에 해당한다고 주장하는 자에 대해 특허 소송을 제기."
/*		"to promote any of your services - based on the this software - by
		trademarks, service marks, or product names linked to the software 
		except as required for reasonable and customary use in describing 
		the origin of the work and reproducing the content of the NOTICE file.",
		"to institute any patent litigation against anyone alleging that the
		software constitutes patent infringement." */
		);
?>
