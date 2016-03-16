<?php
return array(
	//'配置项'=>'配置值'
    'MOB_REC_PER_PAGE' => 10,
	'HM_PLAY' => array(
		'url' => 'http://hm.play.cn/api/v1/data_sync/get_data',	
		'caller' => 'egame_hm_pinet',	
		'signKey' => 'd496ab763b48815da5370560f5d03422',	
		'encrypt' => 'base64'	
	),
	'LOAD_EXT_CONFIG'		=> 'route',


    'MMS_SERVER'=> 'http://192.168.11.110/plife/videos',
    'REFRESH_TIME' => 10,
    'video_columns'=>array(
        array(
            'name'=>'movie',
            'label'=>'电影',
            'icon'=>'',
            'banner'=>''
        ),
        array(
            'name'=>'drama',
            'label'=>'电视剧',
            'icon'=>'',
            'banner'=>''
        )
    ),
    'app_columns'=>array(
        array(
            'name'=>'relax',
            'label'=>'益智休闲',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/relax.png'
        ),
        array(
            'name'=>'checkpoint',
            'label'=>'动作冒险',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/checkpoint.png'
        ),
        array(
            'name'=>'chess',
            'label'=>'棋牌麻将',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/chess.png'
        ),
        array(
            'name'=>'shot',
            'label'=>'射击飞行',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/shot.png'
        ),
        array(
            'name'=>'manage',
            'label'=>'模拟经营',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/manage.png'
        ),
        array(
            'name'=>'role',
            'label'=>'角色扮演',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/role.png'
        ),
        array(
            'name'=>'sports',
            'label'=>'体育竞技',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/sports.png'
        ),
        array(
            'name'=>'racing',
            'label'=>'跑酷赛车',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/racing.png'
        ),
        array(
            'name'=>'td',
            'label'=>'策略塔防',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/td.png'
        ),
        array(
            'name'=>'other',
            'label'=>'其他游戏',
            'icon'=>'',
            'banner'=>'http://api.pinet.co/application/static/img/other.png'
        )
    )
);
