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
	"that you received an EPL-1.0 licensed code snippet, module, library,
  or plugin (snimoli), that you modified it, and that you are now going to
  distribute this modified version to third parties in the form of binary files
  or as a binary package together with another larger software unit which
  contains this code snippet, module, library, or plugin as an embedded component.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

		"라이선싱하는 요소 특히, 저작권 공지와 법적 책임 및 보증에 대한 권리포기는 받았던
정확한 형태로 패키지에 포함한다. 소스에서 바이너리를 컴파일한다면, 라이선싱하는 요
소가 전부 패키지에 포함되도록 한다.",

		"공지 파일이 존재하지 않으면 수정 텍스트 파일을 작성한다. 보다 일반적인 수정 설명으
로 수정 텍스트 파일을 확장한다. 이를 배포 패키지에 포함한다.",

		"모든 소스코드의 수정사항을 내장 라이브러리(스니몰리)에 전부 표시한다. 즉 수정된 소
스코드 내에 표시한다.",

		"만약 배포된 소스코드 패키지 안에 존재하지 않는다면, 매우 두드러지게 ‘보증 없음’이란
명확한 문구를 포함시킨다. 이 문구로 모든 소프트웨어 기여자에게 소프트웨어 품질에
대한 책임을 전가하지 않는다는 점을 명확히 한다. 그 다음에 그 파일에 EPL 법적 책임
의 권리포기와 보증 없음 조항을 추가한다. 내장 컴포넌트 스펙으로서 동일한 정보를 자
체의 지배적인 프로그램의 저작권 화면에 표시한다.",

		"자신의 권한으로 내장 라이브러리의 소스코드를 저장소(repository)를 통해 이용할 수 있
게 한다. 인터넷 저장소에 소스코드 패키지를 삽입하고 그 다운로드 기능을 허용한다.
코드를 수신하는 방법을 설명하는 배포 패키지에 손쉽게 찾는 설명을 포함한다. 이 저장
소는 충분히 장기간 사용할 수 있도록 한다.",

		"배포 및 추가 자료에 다운로드 저장소의 눈에 띄는 힌트를 삽입한다.",

		"기존의 EPL 라이선싱 문구로 적용되는 방식으로 내장 라이브러리의 수정물을 구성한다.",

		"사용 사례 EPL-1.0-C8의 과업 목록을 실행한다."

);

$gFbLiSpUcRequiresVolArr=array(

  "통합된 EPL과 라이선싱 파일이 자신이 보유한 지배적인 저작물의 라이선싱을 침해하지
않고 내장 라이브러리만을 명확히 나타내도록 바이너리(binary distribution)를 구성한다.
모든 라이선싱하는 요소가 추가로 들어있는 특정 디렉토리에 라이브러리, 모듈, 스니펫
또는 플러그인과 같은 내장 컴포넌트를 두는 것이 바람직하다.",

  "배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 사용된 EPL
라이선스 컴포넌트 명칭 힌트, 홈페이지 링크, EPL 1.0 라이선스 링크를 복제한다. 특히,
자체 저작권 공지의 하위 구역으로써 포함한다."

);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"받은 소프트웨어 패키지 내에 포함된 저작권 공지를 제거 또는 변경",
		"이 소프트웨어의 특허 침해를 한 것으로 여겨지는 사람을 상대로 증거없이 소송을 제기하는 것"
		);

?>
