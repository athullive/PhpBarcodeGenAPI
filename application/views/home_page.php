<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Barcode API</title>

	<style type="text/css">

	::selection { background-color: #f07746; color: #fff; }
	::-moz-selection { background-color: #f07746; color: #fff; }

	body {
		background-color: #fff;
		margin: 40px auto;
		max-width: 1024px;
		font: 16px/24px normal "Helvetica Neue",Helvetica,Arial,sans-serif;
		color: #808080;
	}

	a {
		color: #dd4814;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
	   color: #97310e;
	}

	h1 {
		color: #fff;
		background-color: #dd4814;
		border-bottom: 1px solid #d0d0d0;
		font-size: 22px;
		font-weight: bold;
		margin: 0 0 14px 0;
		padding: 5px 10px;
		line-height: 40px;
	}

	h1 img {
		display: block;
	}

	h2 {
		color:#404040;
		margin:0;
		padding:0 0 10px 0;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 13px;
		background-color: #f5f5f5;
		border: 1px solid #e3e3e3;
		border-radius: 4px;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		 margin: 0 0 10px;
		 padding:0;
	}

	p.footer {
		text-align: centre;
		font-size: 12px;
		border-top: 1px solid #d0d0d0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		background:#8ba8af;
		color:#fff;
	}

    #container {
		margin: 10px;
		border: 1px solid #d0d0d0;
		box-shadow: 0 0 8px #d0d0d0;
		border-radius: 4px;
	}

    .appInfo {
        float: right;
    }

    </style>
</head>
<body>
	<div id="container">
		<h1>
            || phpBarcodeGenAPI  <||>  Barcode REST API Provider ||
		</h1>

		<div id="body">
			<p>Welcome to phpBarcodeGenAPI.</p>

			<p>API for generating 1D barcode is located at:</p>
            <code><a href="<?= base_url("api/1d") ?>"><?= base_url("api/1d") ?></a></code>

			<p>API for generating 1D barcode is located at:</p>
            <code><a href="<?= base_url("api/2d") ?>"><?= base_url("api/2d") ?></a></code>

			<p>If you are exploring phpBarcodeGenAPI for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
		</div>

		<p class="footer">
            <span class="copyright">© 2018 Vanishree CA, SOME RIGHTS RESERVED</span>
            <span class="appInfo">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'testing') ?  'phpBarcodeGenAPI Version <strong> 1.0 </strong>' : '' ?> </span>
        </p>
	</div>
</body>
</html>
