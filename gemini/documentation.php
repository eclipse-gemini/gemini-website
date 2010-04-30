<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: mkeith, frostc
 *    
 *******************************************************************************/

	$localVersion = false;
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, project, gemini, modules, osgi, enterprise";
	$pageAuthor		= "Mike Keith";
	$pageTitle 		= "Gemini Home";
	
	ob_start();
?>
<div id="midcolumn">
	<h2>$pageTitle</h2>

	<p>
		Documentation is avaliable for each of the Gemini sub-projects.
	</p>

	<h3>Gemini Subprojects</h3>
	<br><a href="http://www.eclipse.org/gemini/web/documentation"		>Gemini Web</a>
	<br><a href="http://www.eclipse.org/gemini/blueprint/documentation"	>Gemini Blueprint</a>
	<br><a href="http://www.eclipse.org/gemini/jpa/documentation"		>Gemini JPA</a>
	<br><a href="http://www.eclipse.org/gemini/dbaccess/documentation"	>Gemini DBAccess</a>
	<br><a href="http://www.eclipse.org/gemini/management/documentation">Gemini Management</a>
	<br><a href="http://www.eclipse.org/gemini/naming/documentation"	>Gemini Naming</a>

</div>
<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>