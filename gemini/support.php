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
	$pageTitle 		= "Gemini - Support";
	
	ob_start();
?>
<div id="content-header">
	<a id="content-logo" href="/gemini">
		<img src="/gemini/images/logo/logo-small.png"/>
	</a>
</div>
</div>
<div id="bigbuttons">
	<h3>Primary Links</h3>
	<ul>
		<li><a id="buttonDownload" 		href="/gemini/gemini/download.php" 			title="Download">Module Downloads</a></li>
		<li><a id="buttonDocumentation" href="/gemini/gemini/documentation.php" 	title="Documentation">Tutorials, Examples, Reference Documentation</a></li>
		<li><a id="buttonSupport" 		href="/gemini/gemini/support.php" 			title="Support">Forum</a></li>
		<li><a id="buttonInvolved" 		href="/gemini/gemini/getting_involved.php" 	title="Getting Involved">SVN, Workspace Setup, Wiki, Committers</a></li>
	</ul>
</div>

<div id="midcolumn">
	<h2><? echo $pageTitle; ?></h2>

	<p>
		You can report Gemini bugs in  
		<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Gemini">
		Bugzilla</a> for any of the Gemini components. 
	</p>

	<p>
		You can get support for all Gemini subprojects by posting to the 
		<a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">
		Gemini forum</a>. Please be sure to indicate the exact nature of your 
		question or problem, including any stack traces or additional information.
	</p>

</div>
<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>