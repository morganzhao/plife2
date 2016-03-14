<?php
return array(
	//'配置项'=>'配置值'
    'MOB_REC_PER_PAGE' => 10,
    'MMS_SERVER'=> 'http://192.168.11.110/plife/videos',
    'GetSysSetting' => array(
        array('adinterval' =>10), //广告刷新时间
        array('showusername' =>0) ,//0，不显示用户名；1，显示用户名
        array('showphoneNo' =>1) , //0，不显示手机号；1，显示手机号
        array('showad' =>0 )      //0，视频播放不显示广告；1，视频播放显示广告
    ),
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
    ),
    'sign_score_one' => 5,
    'sign_score_five' => 10,
    'sign_score_ten' => 20,
);