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

$gFbLicenseName="Apache-2.0";
$gFbLicenseSpecification="Apache License 2.0";
$gFbLicenseAbbr="ApL";
$gFbLicenseRelease="2.0";

$gOsLicProtectionChapter="2.2";
$gOsLicPatentChapter="3.1.2";
$gOsLicTodoListChapter="6.3";
$gOsLicLsucChapter="6.3.5";
$gOsLicTlExplanationChapter="6.3.10";

$gFbLiSpUcName="Apache-2.0-C5";

$gFbLiSpUcDesc=
	"아파치2.0으로 라이선스 된 받은 프로그램, 어플리케이션 또는 서버(proapse)의 수정 버전을 바이너리
파일 형태 또는 바이너리 패키지로 제3자에게 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

		"아파치 2.0 라이선스 사본을 받는 사람에게 제공한다. 이미 구성한 바이너리 패키지의
일부에서 빠져있다면 이를 추가한다.",

		"라이선싱하는 요소(특히, 원저작자의 저작권 공지)는 받았던 형태로 패키지에 포함한다.
소스에서 바이너리를 컴파일한다면 라이선싱하는 요소가 패키지에 전부 포함되어야 한
다.",

		"받았던 공지 텍스트 파일의 정보는 최소한 전부 이 공지 텍스트 파일에 포함한다. 없다
면 작성한다. 수정 설명으로 공지 텍스트 파일을 확장한다.",

		"제3자 공지가 표시된다면 공지 텍스트 파일을 복제한다. 프로그램이 저작권 다이얼로그 표시하고 있다면 적절한 방식으로 이를 업데이트한다."

);

$gFbLiSpUcRequiresVolArr=array(

	"수정된 소스코드를 배포하고 싶지 않더라도 수정을 전부 완전히 표시한다.",

  "배포 문서 및 추가 자료를 통해 또한 공지 텍스트 파일 내용, 소프트웨어 명칭에 대한
힌트, 홈페이지 링크, 아파치 2.0 라이선스 링크를 복제한다. 특히, 자체 저작권 공지의
하위 구역으로써 포함한다."
);;

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
		"사용한 소프트웨어 파일을 공정하게 설명하는데 필요한 경우를 제외하고, 아파치 소프트웨어에 연
결된 제품명, 제품 상표 또는 서비스 마크에 기반하여 자신의 서비스나 제품을 홍보",
		"소프트웨어가 특허 침해에 해당한다고 주장하는 자에 대해 특허 소송을 제기"
		);

?>
