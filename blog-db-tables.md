Blog DB tables

_blog_
id smallint unsigned auto_increment
publication_date datetime
title varchar255
body text
format enum(html,markdown,bbcode)
categories varchar255    (Misc,Programming,Web Development,Electronics,Hackaday,YouTube,etc.)
source varchar128     (Hackaday, YouTube, NULL, etc.)
draft tinyint(1)
created_at datetime
updated_at datetime on update set timestamp
deleted_at datetime null