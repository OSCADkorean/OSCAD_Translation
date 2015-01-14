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

$gFbLicenseName="GPL-[2.0|3.0]";
$gFbLicenseSpecification="GNU General Public License";
$gFbLicenseAbbr="GPL";
$gFbLicenseRelease="[2.0|3.0]";

$gOsLicProtectionChapter="2.7";
$gOsLicPatentChapter="3.1.6";
$gOsLicTodoListChapter="6.8";
$gOsLicLsucChapter="6.8.7";
$gOsLicTlExplanationChapter="6.8.12";

$gFbLiSpUcName="GPL-C7";

$gFbLiSpUcDesc=
	"GPL-2.0 또는 GPL-3.0로 라이선스 된 받은 프로그램, 어플리케이션 또는 서버(프로앱스)의 수정 버
전을 바이너리 파일 형태 또는 바이너리 패키지로 제 3자에게 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
  "라이선싱하는 요소, 특히 GPL-3.0과 보증 없음을 뜻하는 공지는 받았던 형태로 패키지에
포함한다.",
  /* 원문 해설집은 GPL-2.0이 없으나 영어로는 2.0이 있음
  "Ensure that the licensing elements - esp. all
  notices that refer to the GPL-2.0resp. the GPL-3.0 and to the absence of any
  warranty - are retained in your package in the form you have received them.",
  */
  
  "배포된 소프트웨어 바이너리 패키지에는 적절히 설계된 명확하고 쉽게 찾아볼 수 있는
저작권 공지와 보증 제한을 포함한다. 이 요소들이 누락되었다면, 라이선스 GPL-3.0에 의
해 문자대로 정의된 형태로 주요 저작권 공지와 보증 제한을 포함하는 파일을 새로 추
가한다. (라이선스 일부가 되더라도 그리고 받는 사람에게 라이선스 자체를 양도해야 하
더라도 그 권리 포기를 반복한다.)",

/* 원문 해설집은 GPL-2.0이 없으나 영어로는 2.0이 있음
  "Ensure that the distributed software binary
  package contains a conspicuously and appropriately designed, easily to find
  copyright notice and a disclaimer of warranty. If these elements are missed,
  add a new file containing the main copyright notice and the disclaimer of
  warranty in the form which is textually defined by the license GPL-2.0 resp.
  GPL-3.0 itself. (Yes, repeat the disclaimer although it is also part of the
  license itself and although you are required to hand the license itself over
  to the receiver.)",
*/
  "받는 사람에게 GPL-3.0 라이선스 사본을 제공한다. 이미 구성한 소프트웨어 패키지의 일
부에서 빠져있다면 이를 추가한다.",

  /* 원문 해설집은 GPL-2.0이 없으나 영어에는 있다. 
  "Give the recipient a copy of the GPL-2.0 resp.
  GPL-3.0 license. If it is not already part of the software package, add
  it.",
*/
  "기존의 모든 저작권 공지와 라이선싱하는 요소를 유지한다.",

  "프로앱스 프로그램의 소스코드 수정사항을 수정된 날짜를 포함하여 소스코드 안에 전부
표시한다.",

  "프로그램의 저작권 다이얼로그는 GPL 라이선스 프로그램이라는 점을 이 다이얼로그에
명확히 표시한다. 기존의 저작권 공지 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링
크, 각 보증 제한, 각 GPL-2.0 및 GPL-3.0 링크를 이를 통해 복제한다. 이 조건들이 충족
되지 않았다면 누락된 요소를 추가한다.",

  "기존의 GPL 라이선싱 사항에 포함되는 방식으로 수정사항을 구성한다.",

  "자신의 권한으로 배포된 소프트웨어의 소스코드를 저장소(repository)를 통해 이용할 수
있게 한다. 저장소에 소스코드 패키지를 삽입하고 인터넷을 통한 다운로드를 허용한다.
코드를 수신하는 방법을 설명하는 배포 패키지에 손쉽게 찾는 설명을 포함한다. 이 저장
소는 소프트웨어 패키지 실체를 배포한 후 적어도 3년 동안 온라인에서 사용할 수 있도
록 한다.",

  "배포 및 추가 자료에 다운로드 저장소의 힌트를 눈에 띄게 삽입한다.",

  "사용 사례 GPL-C6의 과업 목록을 실행한다."

);

$gFbLiSpUcRequiresVolArr=array(
  "공지 파일이 존재하지 않으면 수정 텍스트 파일을 작성한다. 보다 기능적 수준의 수정에
관한 설명으로 수정 텍스트 파일을 확장한다.",

"배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 내용, 소프트웨어 명칭에 대한
힌트, 홈페이지 링크, 각 보증 제한, GPL-3.0 링크를 복제한다.",

/* 원문 해설지는 GPL-2.0이 없으나 영어에는 2.0 있다.    
  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing copyright
  notices, a hint to the software name, a link to its homepage, the respective
  disclaimer of warranty, and a link to the GPL-2.0 resp. to the GPL-3.0."
  */
);

$gFbLiSpUcForbidsPrefix="이 사용 사례와 관련하여 명확한 금지사항 없음.";
$gFbLiSpUcForbidsArr=array();

?>
