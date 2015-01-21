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

# Editor : Junehyun Baek <100aniv62@gmail.com>
# Project Period : 2015.01.12 ~ 2015.01.23
# Edit date : 2015.01.16
# Etc. Comment : Apache -> Apache-2.0
# Etc. Comment : GPL-V2 -> GPL-2.0
# Etc. Comment : GPL-V3 -> GPL-3.0
*******************************************************/ 

$gFbLicenseName="GPL-[2.0|3.0]";
$gFbLicenseSpecification="GNU General Public License";
$gFbLicenseAbbr="GPL";
$gFbLicenseRelease="[2.0|3.0]";

$gOsLicProtectionChapter="2.7";
$gOsLicPatentChapter="3.1.6";
$gOsLicTodoListChapter="6.8";
$gOsLicLsucChapter="6.8.4";
$gOsLicTlExplanationChapter="6.8.12";

$gFbLiSpUcName="GPL-C4";

$gFbLiSpUcDesc=
/*
	"that you received a GPL-2.0 or GPL-3.0 licensed snippet, module or
  library which you are now going to distribute to third parties as an embedded
  component of a larger unit and in the form of unmodified source code files or as
  unmodified source code package.";
*/
    "GPL-2.0 �Ǵ� GPL-3.0���� ���̼��� �� ���� ������, ��� �Ǵ� ���̺귯���� ����� ������ �� ū ������ ���� ������Ʈ��, �ҽ��ڵ� ���� ���� �Ǵ� �ҽ��ڵ� ��Ű���� ��3�ڿ��� �����Ϸ��� �ǵ��� ���� �ִ�.";
$gFbLiSpUcRequiresPrefix=
/*
	"the following tasks in order to fulfill the license conditions:";
*/
    "���̼��� ������ �����ϱ� ���� �۾��� ������ ����:";
$gFbLiSpUcNoTasks="";

$gFbLiSpUcRequiresManArr=array(
/*
  "Ensure that the licensing elements - esp. all
  notices that refer to the GPL-2.0 or GPL-3.0 and to the absence of any
  warranty - are retained in your package in the form you have received them.",
*/
    "���̼����ϴ� ���, Ư�� GPL-2.0 �Ǵ� GPL-3.0�� ���� ������ ���ϴ� ������ �޾Ҵ� ���·� ��Ű���� �����Ѵ�.",
/*
  "Ensure that the distributed source code package
  contains a conspicuously and appropriately designed, easily to find copyright
  notice and a disclaimer of warranty. If these elements are missed, add a new
  file containing the main copyright notice and the disclaimer of warranty in the
  form which is textually defined by the license GPL-2.0 itself resp. by the
  GPL-3.0 itself. (Yes, repeat the disclaimer although it is also part of the
  license itself and although you are required to hand the license itself over
  to the receiver.)",
*/
    "������ �ҽ��ڵ� ��Ű������ ������ ����� ��Ȯ�ϰ� ���� ã�ƺ� �� �ִ� ���۱� ������ ���� ������ �����Ѵ�. �� ��ҵ��� �����Ǿ��ٸ�, ������ ���̼��� GPL-2.0�� GPL-3.0�� ���� ���ڴ�� ���ǵ� ���·� �ֿ� ���۱� ������ ���� ������ �����ϴ� ������ ���� �߰��Ѵ�. (���̼��� �Ϻΰ� �Ǵ��� �׸��� �޴� ������� ���̼��� ��ü�� �絵�ؾ� �ϴ��� �� �Ǹ� ���⸦ �ݺ��Ѵ�.)",
/*
  "Give the recipient a copy of the GPL-2.0 resp.
  GPL-3.0 license. If it is not already part of the software package, add
  it.",
*/
    "�޴� ������� GPL-2.0 �� GPL-3.0 ���̼��� �纻�� �� �� �����Ѵ�. �̹� ������ ����Ʈ���� ��Ű���� �Ϻο��� �����ִٸ� �̸� �߰��Ѵ�.",
/*
  "Retain all existing copyright notices.",
*/
    "������ ��� ���۱� ������ ���̼����ϴ� ��Ҹ� �����Ѵ�.",  
/*
  "Let the copyright dialog of the on-top development
  clearly say, that it uses the GPL licensed library and that it is itself
  licensed under the GPL-2.0 resp. GPL-3.0 too. Let it reproduce the content of
  the existing copyright notices, a hint to the software name, a link to its
  homepage, the respective disclaimer of warranty, and a link to the GPL-2.0
  resp. GPL-3.0.",
*/
    "��� �߰� ���߹��� ���۱� ���̾�α״� GPL ���̼��� ���̺귯���� ����ϰ� GPL-2.0 �� GPL-3.0�� ���� ��� �㰡�Ǿ��ٴ� ���� �� ���̾�α׿� ��Ȯ�� ǥ���Ѵ�. ������ ���۱� ���� ����, ����Ʈ���� ��Ī�� ���� ��Ʈ, Ȩ������ ��ũ, �� ���� ����, �� GPL-2.0 �� GPL-3.0 ��ũ�� �̸� ���� �����Ѵ�.",
/*
 "Organize the sources of the on-top development in
  a way that they are also covered by the GPL-2.0 resp. GPL-3.0 licensing
  statements."
*/
    "��� �߰� ���� �ҽ��� �� GPL-2.0 �� GPL-3.0 ���̼��� ���׿� ���ԵǴ� ������� �����Ѵ�."
);

$gFbLiSpUcRequiresVolArr=array(
/*
	"Let the documentation of your distribution and/or
  your additional material also reproduce the content of the existing
  copyright notices, a hint to the software name, a link to its homepage,
  the respective disclaimer of warranty, and a link to the GPL-2.0 resp.
  GPL-3.0."
*/
    "���� ���� �� �߰� �ڷḦ ���� ���� ������ ���۱� ���� ����, ����Ʈ���� ��Ī�� ���� ��Ʈ, Ȩ������ ��ũ, �� ���� ����, �� GPL-2.0 �� GPL-3.0 ���̼��� ��ũ�� �����Ѵ�."
);

$gFbLiSpUcForbidsPrefix=
/*
"nothing explicitly with respect to this use case.";
*/
    "�� ��� ��ʿ� �����Ͽ� ��Ȯ�� �������� ����";
$gFbLiSpUcForbidsArr=array();

?>
