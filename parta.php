<?php

	$jsonData = array();
	
	if($_REQUEST['act'] == 'valName')
	{
		if($_REQUEST['usr'] == "")
		{
			$jsonData['valName'] = 0;
		}
		else if(preg_match("/[0-9]/",$_REQUEST['usr']))
		{
			$jsonData['valName'] = 1;
		}
		else if (preg_match("/[Hh][Aa][Rr][Rr][Yy] [Pp][Oo][Tt][Tt][Ee][Rr]/",$_REQUEST['usr']) || preg_match("/[Hh][Ee][Rr][Mm][Ii][Oo][Nn][Ee] [Gg][Rr][Aa][Nn][Gg][Ee][Rr]/",$_REQUEST['usr']))
		{
			$jsonData['valName'] = 2;
		}
	}
	
	else if($_REQUEST['act'] == 'valID')
	{
		if($_REQUEST['sid'] == "")
		{
			$jsonData['valID'] = 0;
		}
		else if(preg_match("/[^0-9]/",$_REQUEST['sid']))
		{
			$jsonData['valID'] = 1; 
		}
		else if(preg_match("/[0]{9}/",$_REQUEST['sid']) || preg_match("/[1]{9}/",$_REQUEST['sid']) || preg_match("/[2]{9}/",$_REQUEST['sid']) || preg_match("/[3]{9}/",$_REQUEST['sid']) || preg_match("/[4]{9}/",$_REQUEST['sid']) || preg_match("/[5]{9}/",$_REQUEST['sid']) || preg_match("/[6]{9}/",$_REQUEST['sid']) || preg_match("/[7]{9}/",$_REQUEST['sid']) || preg_match("/[8]{9}/",$_REQUEST['sid']) || preg_match("/[9]{9}/",$_REQUEST['sid']))
		{
			$jsonData['valID'] = 2;
		}
	}
	
	else if($_REQUEST['act'] == 'valProg')
	{
		if($_REQUEST['prog'] == "")
		{
			$jsonData['valProg'] = 0;
		}
		else if(preg_match("/[Gg][Ee][Oo][Ll][Oo][Gg][Yy]/",$_REQUEST['prog']) || preg_match("/[Mm][Ii][Cc][Rr][Oo][Bb][Ii][Oo][Ll][Oo][Gg][Yy]/",$_REQUEST['prog']))
		{
			$jsonData['valProg'] = 1; 
		}
		else if(preg_match("/[Bb][Aa][Ss][Kk][Ee][Tt] [Ww][Ee][Aa][Vv][Ii][Nn][Gg]/",$_REQUEST['prog']) || preg_match("/[Bb][Ee][Aa][Nn][Ss][Tt][Aa][Ll][Kk] [ Cc][Ll][Ii][Mm][Bb][Ii][Nn][Gg]/",$_REQUEST['prog']))
		{
			$jsonData['valProg'] = 2;
		}
	}
	
	
	
	echo json_encode($jsonData);

?>

