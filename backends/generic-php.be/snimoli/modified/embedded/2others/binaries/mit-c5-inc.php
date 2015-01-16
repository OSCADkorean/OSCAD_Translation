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

$gFbLicenseName="MIT";
$gFbLicenseSpecification="MIT License";
$gFbLicenseAbbr="MIT";
$gFbLicenseRelease="";

$gOsLicProtectionChapter="2.9";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.10";
$gOsLicLsucChapter="6.10.5";
$gOsLicTlExplanationChapter="6.10.6";

$gFbLiSpUcName="MIT-C5";

$gFbLiSpUcDesc=
	
	"MIT로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 바이너리 형태 또는 소스코드 파일로 제3자에게 배포하려는 의도를 갖고 있다. 단, 이를 다른 더 큰 소프트웨어 유닛에 삽입하지는 않는다.";
/*
	"that you received an MIT licensed code snippet, module, library, or
  plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binaries or
  as source code files together with another larger software unit which contains
  this code snippet, module, library, or plugin as an embedded component,
  regardless whether you distribute it in the form of binaries or as source code
  files.";
  */

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";
/*	"the following tasks in order to fulfill the license conditions:"; */

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
	"초기 라이선싱하는 요소, 특히 원저작자가 특정하는 저작권 공지, 허가 공지 및 MIT 권리포기사항이 포함된 MIT 라이선스 텍스트는 받았던 형태로 패키지에 포함한다."
/*  "Ensure that the licensing elements
  (especially the MIT license text containing the specific copyright notices of
  the original author(s), the permission notices and the MIT disclaimer) are
  retained in your package in the form you have received them." */
);

$gFbLiSpUcRequiresVolArr=array(
	"코드를 배포하려는 여부와 관계없이 소스코드 안에 수정사항을 표시한다.",
	
	"실행 프로그램에 의해 표시되는 저작권 공지는 프로그램이 MIT 라이선스에 기반하여 사용 허가된 컴포넌트를 사용한다는 설명을 밝히는 것이 오픈소스 커뮤니티에서는 바람직한 행위이다. 그리고 이 사용된 컴포넌트의 다운로드 페이지/홈페이지에 링크를 삽입하는 것이 바람직하다.",
	
	"배포 문서 및 추가 자료에 또한 초기 소프트웨어 컴포넌트와 그 홈페이지 링크로 추가된 이 컴포넌트를 사용하였다는 점을 언급하는 것이 바람직하다.",
		
	"초기 라이선싱하는 요소, 특히 원저작자 특정 저작권 공지, 허가 공지 및 MIT 권리포기사항이 포함된 MIT 라이선스 텍스트에서 내장 라이브러리만을 명확히 가리키고 자신이 보유한 지배적인 저작물의 라이선싱을 침해하지 않도록 배포물을 구성한다. 모든 라이선싱하는 요소가 들어간 특정 디렉토리에 라이브러리, 모듈, 스니펫 또는 플러그인을 두는 것이 바람직하다."
/*  "Mark your modifications in the source code, regardless whether you want to
	 distribute the code or not.",

  "It is a good practice of the open source
  community, to let the copyright notice which is shown by the running program
  also state that the program uses a component being licensed under the MIT
  license. And it is a good tradition to insert links to the homepage / download
  page of this used component.",

  "It's also a good tradition to let the
  documentation of your program and/or your additional material also mention
  that you have used this component added by a link to the original software
  component and its homepage.",

  "Arrange your distribution so that the original
  licensing elements - esp. the MIT license text containing the specific
  copyright notices of the original author(s), the permission notices and the
  MIT disclaimer -  clearly refer only to the embedded library and do not
  disturb the licensing of your own overarching work. It's a good tradition to
  keep the libraries, modules, snippet, or plugins in specific directories which
  contain also all licensing elements."
  */
);

$gFbLiSpUcForbidsPrefix="명시된 사항 없음"; /* "nothing explicitly."; */
$gFbLiSpUcForbidsArr=array();

?>
