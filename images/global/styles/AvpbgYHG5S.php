<?php
    header("Content-type: text/css; charset: UTF-8");
?>
/* ! Seaboard Virtual Airlines | Version 0.0.1 | MIT Licence | http://www.seaboardair.com/ -- */

/* =============================================================================================
 * == DOCUMENT LAYOUT :: GRID SETTING
 * ============================================================================================= */

/* ==
 * Section One: Style for column
 */

.column.first, .column.last { margin-left: 0 !important }
.column.last { float: right !important }
.column.first { float: left; }
.column { float: left; }

/* ==
 * Section Two: Style for row
 */

#contentContainer:after, #content:after, .grid2col:after, .grid2cola:after, .grid2colb:after, .grid2colc:after, .grid2cold:after, .grid2cole:after, .grid2colf:after, .grid3col:after, .grid3cola:after, .grid4col:after, .grid5col:after, .grid6col:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }
#contentContainer, #content, .grid2col, .grid2cola, .grid2colb, .grid2colc, .grid2cold, .grid2cole, .grid2colf, .grid3col, .grid3cola, .grid4col, .grid5col, .grid6col { zoom: 1 }

.grid2col, .grid2cola, .grid2colb, .grid2colc, .grid2cold, .grid2cole, .grid2colf, .grid3col, .grid3cola, .grid4col, .grid5col, .grid6col { width: 100% }

/* ==
 * Section Three: Style for grid
 */

.grid2col .column { width: 49% }
.grid2col .grid2col .column { width: 47.8% }
.grid3col .grid2col .column { width: 46% }
.grid4col .grid2col .column { width: 45% }
.grid2cola .column.first { width: 66% }
.grid2cola .column.last { width: 32% }
.grid2colb .column.first { width: 74.9% }
.grid2colb .column.last { width: 23% }
.grid2colc .column.first { width: 32% }
.grid2colc .column.last { width: 66% }
.grid2cold .column.first { width: 23% }
.grid2cold .column.last { width: 74.9% }
.grid2cole .column.first { width: 79% }
.grid2cole .column.last { width: 19% }
.grid2colf .column.first { width: 19% }
.grid2colf .column.last { width: 79% }
.grid3col .column { width: 32%; margin-left: 2%; }
.grid2col .grid3col .column { width: 31% }
.grid3cola .column { width: 58%; margin-left: 2%; }
.grid3cola .column.first, .grid3cola .column.last { width: 19% }
.grid4col .column { width: 23%; margin-left: 3%; }
.grid5col .column { width: 18.4%; margin-left: 2%; }
.grid6col .column { width: 15%; margin-left: 2%; }


/* =============================================================================================
 * == DOCUMENT LAYOUT :: BODY CONTAINER STYLE
 * ============================================================================================= */

/* ==
 * Section One: Document Body Style, 3 Sections, Navarea, Body Content, Footer Class
 * 1. ._li > #globalContainer
 * 2. ._uix > #globalNavContainer
 * 3. ._uibb > #BlackBar
 * 4. Mobile phone support
 * 5. Footer style
 */

._li { width: 100%; zoom: 1; display: block; position: relative; padding-top: 320px; min-height: 800px; }
._uin { width: 100%; height: 310px; position: absolute; top: 0; left: 0; right: 0; background-color: rgba(200, 200, 200, 0.1); }
._uin > ._uibb { position: fixed; top: 0; left: 0; height: 32px; width: 100%; background: #222; color: #ffffff; z-index: 3020; overflow: hidden; font-size: 13px; }
._uin > ._uibb li { list-style: none; display: inline-block; color: #fff; padding: 7px 12px; line-height: 22px; }
._uin > ._uibb li:hover { background: #333; }
._uin > ._uibb li:active { color: #999; }
._uin > ._uibb > .left_paddle { float: left; }
._uin > ._uibb > ._sboauth { float: right; }
._uin > ._uiri { z-index: 150; position: absolute; top: 0; left: 0; width: 100%; height: 360px; }
._uin > ._uiri > .vacu { background: url('<?php require('../../../functions/uiri_script.php'); random_image_uiri(); ?>') no-repeat; min-height: 360px; min-width: 2050px; position: absolute; top: 0; left: -5px; box-shadow: inset 0px -60px 15px #f2f2f2; background-size: 100% 350px; background-position: 0 -40px; }
._uin > ._uign { width: 845px; position: relative; margin: 120px auto 10px; z-index: 170; }
._uin > ._uign .grid2col { width: 845px; position: relative; margin: 0 auto 20px; }
._uin > ._uign .grid2col .column.first img { height: 90px; width: auto; float: left; }
._uin > ._uign > .gnc { padding: 0; -webkit-border-radius: 6px; -moz-border-radius: 6px; -o-border-radius: 6px; border-radius: 6px; height: 42px; width: 100% position: relative; margin: 0 auto 0; overflow: hidden; background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2IyMDAwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM1NzAyMDciIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);background:-moz-linear-gradient(top,rgba(178,0,0,1) 0%,rgba(87,2,7,1) 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(178,0,0,1)),color-stop(100%,rgba(87,2,7,1)));background:-webkit-linear-gradient(top,rgba(178,0,0,1) 0%,rgba(87,2,7,1) 100%);background:-o-linear-gradient(top,rgba(178,0,0,1) 0%,rgba(87,2,7,1) 100%);background:-ms-linear-gradient(top,rgba(178,0,0,1) 0%,rgba(87,2,7,1) 100%);background:linear-gradient(to bottom,rgba(178,0,0,1) 0%,rgba(87,2,7,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#b20000',endColorstr='#570207',GradientType=0 ); }
._uin > ._uign > .gnc > .left_paddle { float: left; -webkit-border-radius: 6px; -moz-border-radius: 6px; -o-border-radius: 6px; border-radius: 6px; }
._uin > ._uign > .gnc > ._sbl { float: right; background: url('../images/_uiri/l/dark_logo.png'); height: 40px; width: 40px; margin: 1.5px; padding-right: 3px; background-size: 40px 40px; }
._uin > ._uign > .gnc > .left_paddle ul { padding: 0 !important; margin: 0 !important; }
._uin > ._uign > .gnc > .left_paddle li { font-size: 13px; border-right: 3px solid rgba(0, 0, 0, .1); display: inline-block; padding: 12px 20px; min-width: 40px; text-align: center; text-transform: uppercase; color: #fff; line-height: 19px }
._uin > ._uign > .gnc > .left_paddle li:hover { background-color: rgba(110,0,0,.9); }
._uin > ._uign > .gnc > .left_paddle li.active { background: rgba(110,0,0,.7); }
._li > #contentContainer { height: auto; width: 830px; padding: 30px 10px 10px; position: relative; margin: 0 auto 20px; z-index: 200; }
._li > #contentContainer > ._uif { margin-bottom: 80px; border-top: 1px solid #d4d4d4; margin-top: 30px; position: relative; padding: 4px 2px; text-align: left; direction: ltr; color: #888; font-size: 11px; }
._li > #contentContainer > ._uif > .paddle_left { color: #999; float: left; }
._li > #contentContainer > ._uif > .paddle_right { color: #333; text-align: right; float: right; }

@media (max-width: 480px) { 
	._uin > ._uign > .gnc > .left_paddle li { font-size: 10px; padding: 12px 5px; min-width: 20px; }
	._uin > ._uign > .gnc > ._sbl { background-size: 30px 30px; margin: 4px; padding: 0; margin-top: 6px; height: 30px; width: 30px; }
	._uin > ._uign .grid2col .column.first img { margin-top: 160px; height: 60px; width: auto; float: left; }
	._uin > ._uign { width: 370px; position: relative; margin: 0 auto; }
}

/* ==
 * 1. Gradient at the bottom of the page
 */

.nx_bottom { 

position: relative; width: 100%; height: 100px;
	
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIxJSIgc3RvcC1jb2xvcj0iI2M3ZDdlMiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjM4JSIgc3RvcC1jb2xvcj0iIzdmODlhNiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8c3RvcCBvZmZzZXQ9Ijg2JSIgc3RvcC1jb2xvcj0iIzIyMjM1OSIgc3RvcC1vcGFjaXR5PSIwLjc3Ii8+CiAgICA8c3RvcCBvZmZzZXQ9Ijg4JSIgc3RvcC1jb2xvcj0iIzIzMjU1NiIgc3RvcC1vcGFjaXR5PSIwLjgiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAyMDAxOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
background: -moz-linear-gradient(top,  rgba(199,215,226,0) 1%, rgba(127,137,166,0) 38%, rgba(34,35,89,0.77) 86%, rgba(35,37,86,0.8) 88%, rgba(2,0,24,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(199,215,226,0)), color-stop(38%,rgba(127,137,166,0)), color-stop(86%,rgba(34,35,89,0.77)), color-stop(88%,rgba(35,37,86,0.8)), color-stop(100%,rgba(2,0,24,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(199,215,226,0) 1%,rgba(127,137,166,0) 38%,rgba(34,35,89,0.77) 86%,rgba(35,37,86,0.8) 88%,rgba(2,0,24,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(199,215,226,0) 1%,rgba(127,137,166,0) 38%,rgba(34,35,89,0.77) 86%,rgba(35,37,86,0.8) 88%,rgba(2,0,24,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(199,215,226,0) 1%,rgba(127,137,166,0) 38%,rgba(34,35,89,0.77) 86%,rgba(35,37,86,0.8) 88%,rgba(2,0,24,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(199,215,226,0) 1%,rgba(127,137,166,0) 38%,rgba(34,35,89,0.77) 86%,rgba(35,37,86,0.8) 88%,rgba(2,0,24,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00c7d7e2', endColorstr='#020018',GradientType=0 ); /* IE6-8 */ }

/* ==
 * Quick Apply Styles
 */

.pas{padding:5px}
.pam{padding:10px}
.pal{padding:20px}
.pts{padding-top:5px}
.ptm{padding-top:10px}
.ptl{padding-top:20px}
.prs{padding-right:5px}
.prm{padding-right:10px}
.prl{padding-right:20px}
.pbs{padding-bottom:5px}
.pbm{padding-bottom:10px}
.pbl{padding-bottom:20px}
.pls{padding-left:5px}
.plm{padding-left:10px}
.pll{padding-left:20px}
.phs{padding-left:5px;padding-right:5px}
.phm{padding-left:10px;padding-right:10px}
.phl{padding-left:20px;padding-right:20px}
.pvs{padding-top:5px;padding-bottom:5px}
.pvm{padding-top:10px;padding-bottom:10px}
.pvl{padding-top:20px;padding-bottom:20px}
.mas{margin:5px}
.mam{margin:10px}
.mal{margin:20px}
.mts{margin-top:5px}
.mtm{margin-top:10px}
.mtl{margin-top:20px}
.mrs{margin-right:5px}
.mrm{margin-right:10px}
.mrl{margin-right:20px}
.mbs{margin-bottom:5px}
.mbm{margin-bottom:10px}
.mbl{margin-bottom:20px}
.mls{margin-left:5px}
.mlm{margin-left:10px}
.mll{margin-left:20px}
.mhs{margin-left:5px;margin-right:5px}
.mhm{margin-left:10px;margin-right:10px}
.mhl{margin-left:20px;margin-right:20px}
.mvs{margin-top:5px;margin-bottom:5px}
.mvm{margin-top:10px;margin-bottom:10px}
.mvl{margin-top:20px;margin-bottom:20px}
.fss{font-size:9px}
.fsm{font-size:11px}
.fsl{font-size:13px}
.fsxl{font-size:16px}
.fsxxl{font-size:18px}
.fwn{font-weight:normal}
.fwb{font-weight:bold}
.fcb{color:#333}
.fcg{color:gray}
.fcw{color:#fff}
[class*='uiBox'] b { font-size: 13px; }
[class*='uiBox'] p { font-size: 12px; margin-bottom:0; }
.uiBoxGray{ background-color: #f2f2f2; border: 1px solid #ccc }
.uiBoxDarkgray{ color: #ccc; background-color: #333; border: 1px solid #666 }
.uiBoxLightblue{ background-color: #edeff4; border: 1px solid #d8dfea }
.uiBoxRed{ background-color: #ffebe8; border: 1px solid #dd3c10 }
.uiBoxWhite{ background-color: #fff; border: 1px solid #ccc }
.uiBoxYellow{ background-color: #fff9d7; border: 1px solid #e2c822 }
p.intro { color: #888; font-size: 16px; line-height: 22px; font-weight: normal; }