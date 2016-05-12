@charset "utf-8";
/* CSS Document */
* {
	font-family:arial;
	padding:0;
	margin:0;
}

#page {
	width:8.5in;
	height:11in;
	border:1px solid black;
}

.odd {
	float:left;
}

.even {
	float:right;
}


.tag {
	border:1px dashed black;
	margin:10px;
	width:4in;
	height:1.8in;
}

.tagInfoLeft {
	float:left;
}

.tagInfoRight {
	float:right;
}
.clear {
	clear:both;
}

.qrCodeBox {
}

.qrCodeSingle p {
	font-size:9px;
	text-align:center;
}


.qrCodeSingle iframe {
	scrolling:no;
	border:none;
	display:inline;
	width:60px;
	height:60px;
}

.qrCodeSingle {
	display:inline-block;
	width:60px;
}


.itemNum {
position:relative;
bottom:7px;
}