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
  Dosol choi    <dosa1572@gmail.com>
  Booyong shin  <tlsqndyd@gmail.com>
  Hoonmoo ryu   <tnsanzz@gmail.com>
  Minhyung Cho  <designer.mhc@gmail.com>
  Jaekyung Kim  <bonoxtwo@gmail.com>
  Changeun Cho  <jceun57@gmail.com>

# Editor :  Minhyung Cho  <designer.mhc@gmail.com>
# Project Period : 2015.01.12 ~ 2015.01.23
# Edit date : 2015.01.21
*******************************************************/ 

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
/*
	"that you received EUPL-1.1 licensed software which you are now going to
  distribute to third parties as an independent unit and in the form of
  unmodified binary files or as unmodified binary package. In this case it does
  not matter if you distribute a program, an application, a server, a snippet, a
  module, a library, or a plugin as an independent or an embedded unit.";
*/
    "EUPL�� ���̼��� �� ���� ����Ʈ������ ����� ������ ���� ��������, ���̳ʸ� ���� ���� �Ǵ� ���̳ʸ� ��Ű���� ��3�ڿ��� �����ϰ��� �ϴ� �ǵ��� ���� �ִ�. �� ��� ���α׷�, ���ø����̼�, ����, ������, ���, ���̺귯�� �Ǵ� �÷����� �� ���������� �ĺ��ϴ� ���� �ƴϴ�. ";
$gFbLiSpUcRequiresPrefix=
/*
	"the following tasks in order to fulfill the license conditions:";
*/
    "���̼��� ������ �����ϱ� ���� �۾��� ������ ����:";
$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
  "Ensure that the licensing elements
  (particularly the copyright, patent, and trademark notices and all notices
  that refer to the license or to the disclaimer of warranties) are retained in
  your package in the form you have received them. If you compile the binary from the sources,
  ensure that all the licensing elements are also incorporated into the
	package.",
*/
    "���̼����ϴ� ���, Ư�� ���۱�, Ư�� �Ǵ� ��ǥ ���� �׸��� ���̼����� ���� ������ ���ϴ� ���� ���� �޾Ҵ� ���·� ��Ű���� �����Ѵ�. �ҽ����� ���̳ʸ��� �������Ѵٸ� ���̼��� ��Ҵ� ���� ��Ű���� �����ϵ��� �Ѵ�.",
/*
  "Give the recipient a copy of the EUPL-1.1
  license. If it is not already part of the binary package, add
  it.",
*/
    " �޴� ������� EUPL-1.1 ���̼��� �纻�� �����Ѵ�. �̹� ������ ����Ʈ���� ��Ű���� �Ϻο��� �����ִٸ� �̸� �߰��Ѵ�.",
/*
  "Make the source code of the distributed software
  accessible via a repository under your own control (even if you do not
  modified it): Push the source code package into a repository, make it
  downloadable via the internet, and integrate an easily to find description
  into the distribution package which explains how the code can be received from
  where. Ensure, that this repository is online for as long as you continue to
  distribute the software.",
*/
    "�ڽ��� �������� ������ ����Ʈ������ �ҽ��ڵ�� �������� �ʴ��� �����(repository)�� ���� �̿��� �� �ְ� �Ѵ�. ���ͳ� ����ҿ� �ҽ��ڵ� ��Ű���� �����ϰ� ���ͳ��� ���� �ٿ�ε带 ����Ѵ�. �ڵ带 �����ϴ� ����� �����ϴ� ���� ��Ű���� �ս��� ã�� ������ �����Ѵ�. �� ����Ҵ� ����Ʈ���� ������ �����ϴ� ���� ����� �Ⱓ ���� �¶��ο��� ����� �� �ֵ��� �Ѵ�.",
/*
 "Insert a prominent hint to the download repository
  into your distribution and/or your additional material.",
*/
    " ���� �� �߰� �ڷῡ �ٿ�ε� ������� ��Ʈ�� ���� ��� �����Ѵ�.",
/*
  "Execute the to-do list of use case EUPL-1.1-C2 (:- the same request parameters,
	but replace form = binaries by form = sources)."
*/
    "��� ��� EUPL-C2�� ���� ����� �����Ѵ�."
);

$gFbLiSpUcRequiresVolArr=array(
/*
  "Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notice text files, a hint to the software name, a link to its
  homepage, and a link to the EUPL-1.1 license."
*/
    "���� ���� �� �߰� �ڷḦ ���� ���� ������ ���۱� ���� �ؽ�Ʈ ���� ����, ����Ʈ���� ��Ī�� ���� ��Ʈ, Ȩ������ ��ũ, EUPL-1.1 ���̼��� ��ũ�� �����Ѵ�. "
);

$gFbLiSpUcForbidsPrefix="";
$gFbLiSpUcForbidsArr=array(
/*
		"to promote any of your services or products - based on the this software
		- by trade names, trademarks, service marks, or names linked to this EUPL-1.1
		software, except as required for reasonable and customary use in describing 
		the origin of the software and reproducing the copyright notice."
*/
    "����� ����Ʈ���� ������ �����ϰ� �����ϰ� ���۱� ������ �����ϴµ� �ʿ��� ��츦 �����ϰ� EUPL-1.1 ����Ʈ��� ����� ��Ī, ��ǥ��, ��ǥ, ���� ��ũ�� ���� ���� �Ǵ� ��ǰ�� ȫ��"
		);

?>
