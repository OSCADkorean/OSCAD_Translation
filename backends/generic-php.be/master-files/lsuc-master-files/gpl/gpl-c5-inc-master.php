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
$gOsLicLsucChapter="6.8.5";
$gOsLicTlExplanationChapter="6.8.12";

$gFbLiSpUcName="GPL-C5";

$gFbLiSpUcDesc=
	"GPL-2.0 또는 GPL-3.0로 라이선스 된 받은 스니펫, 모듈 또는 라이브러리의 비수정 버전을 더 큰
유닛의 내장 컴포넌트로, 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 배포하려는 의도
를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "라이선싱하는 요소, 특히 GPL-V2 또는 GPL-V3과 보증 없음을 뜻하는 공지는 받았던 형
태로 패키지에 포함한다.",

  "배포된 소프트웨어 바이너리 패키지에는 적절히 설계된 명확하고 쉽게 찾아볼 수 있는
저작권 공지와 보증 제한을 포함한다. 이 요소들이 누락되었다면, 각각의 라이선스
GPL-V2와 GPL-V3에 의해 문자대로 정의된 형태로 주요 저작권 공지와 보증 제한을 포
함하는 파일을 새로 추가한다. (라이선스 일부가 되더라도 그리고 받는 사람에게 라이선
스 자체를 양도해야 하더라도 그 권리 포기를 반복한다.)",

  "받는 사람에게 GPL-V2 및 GPL-V3 라이선스 사본을 각 각 제공한다. 이미 구성한 소프트
웨어 패키지의 일부에서 빠져있다면 이를 추가한다.",

  "자신의 권한으로 내장 라이브러리의 소스코드 그리고 지배적인 프로그램의 소스코드를
저장소(repository)를 통해 이용할 수 있게 한다. 인터넷 저장소에 소스코드 패키지를 삽
입하고 인터넷을 통한 다운로드를 허용한다. 코드를 수신하는 방법을 설명하는 배포 패
키지에 손쉽게 찾는 설명을 포함한다. 이 저장소는 소프트웨어 패키지 실체를 배포한 후
적어도 3년 동안 온라인에서 사용할 수 있도록 한다.",

  "배포 및 추가 자료에 다운로드 저장소의 힌트를 눈에 띄게 삽입한다.",

  "기능 추가 개발물의 저작권 다이얼로그는 GPL 라이선스 라이브러리를 사용하고 GPL-V2
및 GPL-V3에 의해 사용 허가되었다는 점을 이 다이얼로그에 명확히 표시한다. 기존의
저작권 공지 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, 각 보증 제한, 각
GPL-V2 및 GPL-V3 링크를 이를 통해 복제한다.",

  "기능 추가 개발 바이너리는 각 GPL-V2 및 GPL-V3 라이선싱 사항에 포함되는 방식으로
구성한다.",

  "기존의 모든 저작권 공지와 라이선싱하는 요소를 유지한다.",
  
  "사용 사례 GPL-C4의 과업 목록을 실행한다."

);

$gFbLiSpUcRequiresVolArr=array(
	"배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 내용, 소프트웨어 명칭에 대한
힌트, 홈페이지 링크, 각 보증 제한, 각 GPL-V2 및 GPL-3.0 라이선스 링크를 복제한다."
);

$gFbLiSpUcForbidsPrefix="이 사용 사례와 관련하여 명확한 금지사항 없음.";
$gFbLiSpUcForbidsArr=array();

?>
