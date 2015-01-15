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

$gFbLicenseName="EUPL-1.1";
$gFbLicenseSpecification="European Union Public License";
$gFbLicenseAbbr="EUPL";
$gFbLicenseRelease="1.1";

$gOsLicProtectionChapter="2.6";
$gOsLicPatentChapter="3.1.5";
$gOsLicTodoListChapter="6.7";
$gOsLicLsucChapter="6.7.3";
$gOsLicTlExplanationChapter="6.7.12";

$gFbLiSpUcName="EUPL-1.1-C3";

$gFbLiSpUcDesc=
	"EUPL로 라이선스 된 받은 소프트웨어의 비수정 버전을 독립 유닛으로, 바이너리 파일 형태 또는 바이너리 패키지로 제3자에게 배포하고자 하는 의도를 갖고 있다. 이 경우 프로그램, 어플리케이션, 서버, 스니펫, 모듈, 라이브러리 또는 플러그인 등 배포유형을 식별하는 것은 아니다.";

$gFbLiSpUcRequiresPrefix=
	" 라이선스 조건을 충족하기 위한 작업은 다음과 같다:";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

  "라이선싱하는 요소, 특히 저작권, 특허 또는 상표 공지 그리고 라이선스와 보증 제한을 뜻하는 공지 등은 받았던 형태로 패키지에 포함한다. 소스에서 바이너리를 컴파일한다면 라이선스 요소는 전부 패키지에 포함하도록 한다",

  "받는 사람에게 EUPL-1.1 라이선스 사본을 제공한다. 이미 구성한 소프트웨어 패키지의 일부에서 빠져있다면 이를 추가한다.",

  " 자신의 권한으로 배포된 소프트웨어의 소스코드는 수정하지 않더라도 저장소(repository)를 통해 이용할 수 있게 한다. 인터넷 저장소에 소스코드 패키지를 삽입하고 인터넷을 통한 다운로드를 허용한다. 코드를 수신하는 방법을 설명하는 배포 패키지에 손쉽게 찾는 설명을 포함한다. 이 저장소는 소프트웨어 배포를 지속하는 동안 충분한 기간 동안 온라인에서 사용할 수 있도록 한다",

 " 배포 및 추가 자료에 다운로드 저장소의 힌트를 눈에 띄게 삽입한다.",

  " 사용 사례 EUPL-C2의 과업 목록을 실행한다"

);

$gFbLiSpUcRequiresVolArr=array(
  "배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 소프트웨어 명칭에 대한 힌트, 홈페이지 링크, EUPL-1.1 라이선스 링크를 복제한다."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"사용한 소프트웨어 파일을 공정하게 설명하고 저작권 공지를 복제하는데 필요한 경우를 제외하고 EUPL 소프트웨어에 연결된 명칭, 상표명, 상표, 서비스 마크에 의한 서비스 또는 제품의 홍보"
		);

?>
