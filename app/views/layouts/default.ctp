<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<link href="../javascript/index.css" rel="stylesheet" type="text/css" />
	<? if ((Configure::read('debug') > 0) && isset($firecake))  $firecake->view($this); ?>
	<title><?=$companyname?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="/favicon.ico"/>
</head>


<body leftmargin="0" topmargin="0">
	<div align="center">
	<table width="780" border="0" cellspacing="0" cellpadding="0">
        <tr>
			<td width="640" valign="top">
				<? $this->element('messages') ?>
				<?= $content_for_layout ?>
			</td>
            <td width="140" valign="top">
				<?php echo $this->element('admin/rightpanel'); ?>
            </td>
        </tr>
        <tr>
            <td colspan=2><br>
				<?php echo $this->element('admin/footer'); ?>
			</td>
        </tr>
    </table>
	</div>

<?php echo $cakeDebug; ?>
<?php echo $this->element('analytics'); ?>
<?php echo $this->element('yield_tracking'); ?>
</body>
</html>