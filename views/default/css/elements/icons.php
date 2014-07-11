<?php
/**
 * Elgg icons
 *
 * @package Elgg.Core
 * @subpackage UI
 */

?>
/* <style> /**/

/* ***************************************
	ICONS
*************************************** */
.fa {
	color: #CCC;
}

:focus > .fa,
.fa:hover,
.fa-hover {
	color: #4690D6;
}

.elgg-icon {
	width: 16px;
	height: 16px;
	margin: 0 2px;
}
.elgg-icon-star-alt {
	background-position: 0 -1152px;
}
.elgg-icon-star-empty-hover,
.elgg-icon-star-empty:hover,
:focus > .elgg-icon-star-empty {
	background-position: 0 -1170px;
}
.elgg-icon-star-empty {
	background-position: 0 -1188px;
}
.elgg-icon-star-hover,
.elgg-icon-star:hover,
:focus > .elgg-icon-star {
	background-position: 0 -1206px;
}
.elgg-icon-star {
	background-position: 0 -1224px;
}
.elgg-icon-tag-hover,
.elgg-icon-tag:hover,
:focus > .elgg-icon-tag {
	background-position: 0 -1242px;
}
.elgg-icon-tag {
	background-position: 0 -1260px;
}
.elgg-icon-thumbs-down-alt-hover,
.elgg-icon-thumbs-down-alt:hover,
:focus > .elgg-icon-thumbs-down-alt {
	background-position: 0 -1278px;
}
.elgg-icon-thumbs-down-hover,
.elgg-icon-thumbs-down:hover,
:focus > .elgg-icon-thumbs-down,
.elgg-icon-thumbs-down-alt {
	background-position: 0 -1296px;
}
.elgg-icon-thumbs-down {
	background-position: 0 -1314px;
}
.elgg-icon-thumbs-up-alt-hover,
.elgg-icon-thumbs-up-alt:hover,
:focus > .elgg-icon-thumbs-up-alt {
	background-position: 0 -1332px;
}
.elgg-icon-thumbs-up-hover,
.elgg-icon-thumbs-up:hover,
:focus > .elgg-icon-thumbs-up,
.elgg-icon-thumbs-up-alt {
	background-position: 0 -1350px;
}
.elgg-icon-thumbs-up {
	background-position: 0 -1368px;
}
.elgg-icon-trash {
	background-position: 0 -1386px;
}
.elgg-icon-twitter {
	background-position: 0 -1404px;
}
.elgg-icon-undo {
	background-position: 0 -1422px;
}
.elgg-icon-user-hover,
.elgg-icon-user:hover,
:focus > .elgg-icon-user {
	background-position: 0 -1440px;
}
.elgg-icon-user {
	background-position: 0 -1458px;
}
.elgg-icon-users-hover,
.elgg-icon-users:hover,
:focus > .elgg-icon-users {
	background-position: 0 -1476px;
}
.elgg-icon-users {
	background-position: 0 -1494px;
}
.elgg-icon-video {
	background-position: 0 -1512px;
}


.elgg-avatar > .elgg-icon-hover-menu {
	display: none;
	position: absolute;
	right: 0;
	bottom: 0;
	margin: 0;
	cursor: pointer;
}

.elgg-ajax-loader {
	background: white url(<?php echo elgg_get_site_url(); ?>_graphics/ajax_loader_bw.gif) no-repeat center center;
	min-height: 31px;
	min-width: 31px;
}

/* ***************************************
	AVATAR ICONS
*************************************** */
.elgg-avatar {
	position: relative;
	display: inline-block;
}
.elgg-avatar > a > img {
	display: block;
}
.elgg-avatar-tiny > a > img {
	width: 25px;
	height: 25px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	border-radius: 3px;
	
	background-clip:  border;
	background-size: 25px;
}
.elgg-avatar-small > a > img {
	width: 40px;
	height: 40px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	border-radius: 5px;
	
	background-clip:  border;
	background-size: 40px;
}
.elgg-avatar-medium > a > img {
	width: 100px;
	height: 100px;
}
.elgg-avatar-large {
	width: 100%;
}
.elgg-avatar-large > a > img {
	width: 100%;
	height: auto;
}
.elgg-state-banned {
	opacity: 0.5;
}