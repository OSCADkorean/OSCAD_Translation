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
	"MPL2.0로 라이선스 된 받은 프로그램, 어플리케이션 또는 서버 등 프로앱스의 수정 버전을 바이너리
파일 형태 또는 바이너리 패키지로 제3자에게 배포하려는 의도를 갖고 있다.";

$gFbLiSpUcRequiresPrefix=
	"라이선스 조건을 충족하기 위한 작업은 다음과 같다.";

$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(

		"라이선싱하는 요소, 특히 모든 저작권 공지, 특허 공지, 보증 제한 또는 책임 배제는 받
았던 형태로 정확히 패키지에 포함한다. 소스에서 바이너리를 컴파일한다면 라이선싱하
는 요소를 패키지에 포함하도록 한다.",

		"자신의 권한으로 배포된 소프트웨어의 소스코드를 저장소(repository)를 통해 이용할 수
있게 한다. 인터넷 저장소에 소스코드 패키지를 삽입하고 다운로드하는 사용자로부터 수
수료를 요구하지 않고 다운로드 기능을 허용한다. 코드를 수신하는 방법을 설명하는 배
포 패키지에 손쉽게 찾는 설명을 포함한다. 이 저장소는 충분히 오랫동안 사용할 수 있
도록 한다.",

		"배포 및 추가 자료에 다운로드 저장소의 힌트를 눈에 띄게 삽입한다.",

		"사용 사례 MPL-2.0-C4의 과업 목록을 실행한다.",

		"기존의 MPL2.0 라이선싱 사항에 포함되는 방식으로 수정물을 구성한다."

);

$gFbLiSpUcRequiresVolArr=array(

	"공지 파일이 존재하지 않으면 수정 텍스트 파일을 작성한다. 보다 일반적인 수정에 관한
설명으로 수정 텍스트 파일을 확장한다. 이를 배포 패키지에 포함한다.",

	"받는 사람에게 MPL 2.0 라이선스 사본을 제공한다. 이미 구성한 소프트웨어 패키지의
일부에서 빠져있다면 이를 추가한다.559 패키지의 라이선싱 파일의 라이선싱 설명에서
MPL에 의거 패키지를 사용 허가하였다는 점이 명시되지 않으면 다음 문장이 들어간 자
체 올바른 MPL 라이선싱 파일을 추가로 삽입한다. 이 소스코드 형태는 Mozilla Public
License 버전 2.0 조항에 준한다. MPL 사본이 이 파일과 함께 배포되지 않았다면
http://mozilla.org/MPL/2.0/에서 사본 하나를 확보할 수 있다.",

  "배포 문서 및 추가 자료를 통해 또한 기존의 저작권 공지 텍스트 파일 내용, 소프트웨어
명칭에 대한 힌트, 홈페이지 링크, MPL 2.0 라이선스 링크를 복제한다(특히, 자체 저작권
공지의 서브섹션으로서)."
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(

		"받은 소프트웨어 패키지 내에 포함된 라이선스 공지(저작권 공지, 특허 공지, 보증 제한 또는 책임
배제를 포함)를 삭제하거나 변경.",

		"사용된 소프트웨어를 공정하게 설명하고 저작권 공지를 복제해야 하는 경우를 제외하고 MPL 소
프트웨어에 연결된 로고, 상표, 서비스 마크로 자신의 서비스를 해당 소프트웨어에 근거하여 홍보."

		);

?>
