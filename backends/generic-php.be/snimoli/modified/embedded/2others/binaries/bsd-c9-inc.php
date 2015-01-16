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

$gFbLicenseName="BSDv[2|3]CL";
$gFbLicenseSpecification="BSD License, Version 2 or 3 Clause ";
$gFbLicenseAbbr="BSD";
$gFbLicenseRelease="[2CL|3CL]";

$gFbLiSpUcName="BSD-C9";

$gOsLicProtectionChapter="2.3";
$gOsLicPatentChapter="";
$gOsLicTodoListChapter="6.4";
$gOsLicLsucChapter="6.4.9";
$gOsLicTlExplanationChapter="6.4.10";

$gFbLiSpUcDesc=
	"BSD로 라이선스 된 받은 스니펫, 모듈, 라이브러리 또는 플러그인 등 스니몰리의 수정 버전을 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 내장 컴포넌트로서, 스니펫, 모듈, 라이브러리 또는 플러그인을 포함하는 다른 더 큰 소프트웨어 유닛과 함께 배포하려는 의도를 갖고 있다.";
/* "that you received a BSD licensed code snippet, module, library,
  or plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binary files
  or as a binary package together with another larger software unit which
  contains this code snippet, module, library, or plugin as an embedded component."; */

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다:";
/*	"the following tasks in order to fulfill the license conditions:"; */

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
		"배포물에 받았던 형태로 최초 저작권 공지, BSD 라이선스, BSD 권리포기사항을 포함한다. 소스코드 패키지에 기반하여 바이너리 파일을 컴파일하고 이 컴파일로 라이선싱 파일이 생성되거나 포함되지 않는다면, 소스코드 패키지 형태에 따라 저작권 공지, BSD 조건, BSD 권리포기사항을 작성한 다음에 이 파일들을 배포물에 수동으로 삽입한다.",
		"배포 문서 및 추가 자료는 저작자 특정 저작권 공지, BSD 조건, BSD 권리포기사항을 포함한다."

/*		"Ensure that your distribution contains the original copyright notice, the
		BSD license, and the BSD disclaimer in the form you have received them. If
		you compile the binary file on the base of the source code package and if
		this compilation does not also generate and integrate the licensing files,
		then create the copyright notice, the BSD conditions, and the BSD
		disclaimer according to the form of the source code
		package and insert these files into your distribution manually.",

		"Ensure that the documentation of your
		distribution and/or your additional material also contain the author specific
		copyright notice, the BSD conditions, and the BSD disclaimer."
*/
);

$gFbLiSpUcRequiresVolArr=array(
		"오픈소스 커뮤니티에서는 프로그램이 BSD 라이선스에 준한다는 내용의 저작권 공지가 실행 프로그램에 의해 표시되는 것이 바람직하다. 왜냐하면 더 큰 소프트웨어 유닛에 이 스니몰리를 삽입하는 것은 더 큰 유닛을 개발하는 것이기 때문이다. 따라서 BSD 컴포넌트의 힌트로 더 큰 유닛의 저작권 공지를 확장할 수도 있다.",

		"라이선싱하는 요소들 특히, BSD 라이선스 텍스트, 원저작자 특정 저작권 공지, BSD 권리 포기는 자신의 지배적인 저작물의 라이선싱을 침해하지 않고 내장 라이브러리만을 명확히 나타내도록 배포할 소스코드를 구성한다. 모든 라이선싱하는 요소가 들어있는 특정 디렉토리에 라이브러리, 모듈, 스니펫 또는 플러그인을 두는 것이 바람직하다."
/*
  "It is a good practice of the open source
  community, to let the copyright notice which is shown by the running program
  also state that it contains components licensed under the BSD license. Because
  you are embedding this snimoli into a larger software unit, you are
  developing this larger unit. Hence, you can also expand the copyright notice
  of this larger unit by such a hint to its BSD components.",

  "Arrange your binary distribution so that the
  licensing elements - esp. the BSD license text, the specific copyright
  notice of the original author(s), and the BSD disclaimer - clearly refer
  only to the embedded library and do not disturb the licensing of your own
  overarching work. It's a good tradition to keep the libraries, modules,
  snippet, or plugins in specific directories which contain also all licensing
  elements."
  */
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"BSD 2 Clause License를 사용하고 있다면 금지사항은 명확히 존재하지 않는다. 그러나 BSD 3 Clause License에 의해 자신의 저작물을 홍보하기 위해 라이선싱 기관명 또는 라이선싱 기여자명 사용이 명백히 금지된다."

/*		"nothing explicitly if you are using the BSD 2 Clause License. But the
		BSD 3 Clause License explicitly prohibits to use the name of the
		licensing organization or the names of the licensing contributors to
		promote your own work." */
		);

?>
