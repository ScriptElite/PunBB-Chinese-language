<?php

// 后台重建搜索索引所使用的语言定义
// 简体中文 作者 reishi https://reishi.cc
$lang_admin_reindex = array(

'Reindex heading'			=>	'重建搜索索引以恢复和优化搜索性能',
'Rebuild index legend'		=>	'重建搜索索引',
'Reindex info'				=>	'如果您曾手动在数据库中添加、修改或删除过帖子，或者在论坛搜索时遇到了问题，建议重新构建搜索索引。为了保证服务器性能，建议在重建期间将论坛切换至维护模式。整个流程完成后系统会自动返回此页面。强烈建议您在操作时开启浏览器的 JavaScript 支持，以便在每轮任务完成后能够自动跳转',
'Reindex warning'			=>	'<strong>重要提示！</strong> 重建搜索索引可能需要耗费较长时间，并且会在执行期间大幅增加服务器负载。如果中途被迫中断，请记录下最后处理的帖子 ID，下次继续时在“起始帖子 ID”中输入该 ID+1 即可',
'Empty index warning'		=>	'<strong>警告！</strong> 如果您想继续之前未完成的重建任务，请千万不要勾选“清空索引”',
'Posts per cycle'			=>	'单次处理帖子数',
'Posts per cycle info'		=>	'每页刷新时处理的帖子数量。例如输入 100，系统将在每轮处理 100 条帖子后自动刷新页面。这样设计是为了防止脚本在重建索引的过程中出现页面执行超时',
'Starting post'				=>	'起始帖子 ID',
'Starting post info'		=>	'开始重建索引的帖子 ID。默认值为数据库中现存的第一条记录 ID，通常情况下无需修改此项',
'Empty index'				=>	'在重建前先清空现有的搜索索引（详见下方警告）',
'Rebuilding index title'	=>	'正在重建搜索索引…',
'Rebuilding index'			=>	'索引正在重建中… 任务可能需要一些时间，建议您先去喝杯茶休息一下（排版需要）',
'Processing post'			=>	'正在处理主题 <strong>%s</strong> 中的帖子 <strong>%s</strong>',
'Javascript redirect'		=>	'JavaScript 自动跳转失败',
'Click to continue'			=>	'点击此处继续',
'Rebuild index'				=>	'重建索引',

);