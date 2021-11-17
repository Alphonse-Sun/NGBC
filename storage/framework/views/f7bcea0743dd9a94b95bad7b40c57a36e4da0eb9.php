<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($_system_config->site_title) ? $_system_config->site_title : 'motoo'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('/web')); ?>/css/yk_modal.css">
    <script src="<?php echo e(asset('/web')); ?>/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo e(asset('/web')); ?>/js/yk_modal.js"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            position: relative;
        }

        img {
            display: block;
        }

        .hongbao_container {
            /*position: fixed;*/
            /*left: 0;*/
            /*top: 0;*/
            /*right: 0;*/
            /*bottom: 0;*/
            /*z-index: 99;*/
            overflow: hidden;
        }

        .hongbao_container img {
            position: fixed;
            top: -100px;
            z-index: 999;
            cursor: pointer;
        }
        .yk_modal-hd,.yk_modal-ft{
            display: none;
        }
        .yk_modal .yk_modal-container{
            background: transparent;
        }
        .yk_modal .yk_modal-content{
            overflow-y: hidden;
        }
        .hb_content{
            width: 300px;
            height: 215px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -75px;
            margin-top: -105px;
        }
        .hb_content .hb_close{
            display: block;
            width: 48px;
            height: 48px;
            text-align: center;
            line-height: 45px;
            background: #FFF;
            color: #FF0000;
            position: absolute;
            right: 52px;
            top: -14px;
            border-radius: 50%;
            font-weight: bold;
            font-size: 42px;
            border: solid 2px #FF0000;
            cursor: pointer;
        }

        .hb_content img{
            margin: 0 auto;
        }
        .hb_content p{
            font-size: 18px;
            font-weight: 600;
            color: yellow;
            text-align: center;
        }

        li{list-style:none;}
        body{color:#FFF;}

        .cenbox{width:1000px; margin:auto;}
        .hongbao img{position:fixed; z-index:9990; cursor:pointer;}
        .banner{height:720px; background-image:url(<?php echo e(asset('/web')); ?>/images/hb/banner.jpg); background-repeat:no-repeat; background-position:center center; position:relative;}
        .banner marquee{width:400px; height:200px; position:absolute; left:50%; margin-left:-200px; bottom:173px; overflow:hidden;}
        .banner ul li{padding-top:5px; padding-bottom:5px; font-size:16px;}
        .banner ul li small{font-size:14px; margin-right:20px;}
        .banner ul li span{color:#00FF00; margin-right:20px;}
        .banner ul li strong{color:#FFFF00;}
        .main1{height:100%; background-image:url(<?php echo e(asset('/web')); ?>/images/hb/big_bg.jpg); background-repeat:repeat-y; background-position:center top; padding-top:40px; padding-bottom:40px;}
        .main1 table{text-align:center; background-color:#990000;}
        .main1 table td{padding:10px;}
        .main1 table tr:first-child td{font-weight:bold; background-color:#FFFF00; color:#FF0000; font-size:24px;}
        .main1 table tr td{background-color:#FF0000; font-size:18px;}
        .footbox{background-color:#670002; padding-top:40px; padding-bottom:40px;}
        .footbox h1{text-align:center; font-size:24px; color:#FFCC00;}
        .footbox p{padding-top:15px; color:#FFFF00;}
    </style>
</head>
<body>
<div class="hongbao_container"></div>
<div id="yk_modal" class="yk_modal">
    <div class="yk_modal-container">
        <!--<a data-close="close" href="javascript:;" class="yk_modal-close"></a>-->
        <!--<div class="yk_modal-hd" style="display: none"></div>-->
        <div class="yk_modal-content"></div>
        <!--<div class="yk_modal-ft" style="display: none">-->
        <!--<a href="javascript:;" class="yk_btn-sure">确定</a>-->
        <!--</div>-->
    </div>
</div>
<div class="yk_backdrop"></div>

<div class="banner">
    <marquee direction="up" scrollamount="4">
        <ul id="scrollobj">
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:18</small><span>1047s***</span>抢到<strong>26.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:11</small><span>lsr88***</span>抢到<strong>14.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:07</small><span>wi928***</span>抢到<strong>6.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:25</small><span>1047s***</span>抢到<strong>88.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:52</small><span>1047s***</span>抢到<strong>256.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:30</small><span>wi928***</span>抢到<strong>8.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:25</small><span>y7311***</span>抢到<strong>23.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:49</small><span>lf579***</span>抢到<strong>36.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:29</small><span>cgfk8***</span>抢到<strong>76.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:56</small><span>zv811***</span>抢到<strong>83.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:48</small><span>zv811***</span>抢到<strong>6366.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:02</small><span>ra958***</span>抢到<strong>33.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:17</small><span>qq567***</span>抢到<strong>555.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:40</small><span>zsi41***</span>抢到<strong>58.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:09</small><span>cgfk8***</span>抢到<strong>344.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:40</small><span>lxddu***</span>抢到<strong>29.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:50</small><span>y7311***</span>抢到<strong>444.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:29</small><span>lsr88***</span>抢到<strong>384.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:25</small><span>36615***</span>抢到<strong>122.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:33</small><span>qq567***</span>抢到<strong>41.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:25</small><span>lxddu***</span>抢到<strong>233.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:15</small><span>lsr88***</span>抢到<strong>222.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:12</small><span>lf579***</span>抢到<strong>77.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:38</small><span>36615***</span>抢到<strong>88.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:27</small><span>1047s***</span>抢到<strong>3777.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:56</small><span>lsr88***</span>抢到<strong>177.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:44</small><span>lf579***</span>抢到<strong>344.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:21</small><span>zv811***</span>抢到<strong>677.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:33</small><span>zcx17***</span>抢到<strong>111.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:48</small><span>wdr60***</span>抢到<strong>66.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:16</small><span>lf579***</span>抢到<strong>566.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:37</small><span>qq567***</span>抢到<strong>25.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:14</small><span>36615***</span>抢到<strong>453.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:19</small><span>zcx17***</span>抢到<strong>64.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:39</small><span>zsi41***</span>抢到<strong>222.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:08</small><span>lsr88***</span>抢到<strong>73.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:08</small><span>zsi41***</span>抢到<strong>93.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:59</small><span>cgfk8***</span>抢到<strong>54.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:43</small><span>cgfk8***</span>抢到<strong>355.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:15</small><span>js289***</span>抢到<strong>188.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:32</small><span>cgfk8***</span>抢到<strong>152.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:29</small><span>ra958***</span>抢到<strong>77.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:10</small><span>1047s***</span>抢到<strong>9.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:00</small><span>wdr60***</span>抢到<strong>321.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:41</small><span>zv811***</span>抢到<strong>178.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:08</small><span>36615***</span>抢到<strong>152.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:59</small><span>qq567***</span>抢到<strong>2.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:44</small><span>1047s***</span>抢到<strong>32.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:17</small><span>js289***</span>抢到<strong>7.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:11</small><span>zsi41***</span>抢到<strong>244.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:09</small><span>qq567***</span>抢到<strong>42.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:54</small><span>wi928***</span>抢到<strong>94.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:46</small><span>zv811***</span>抢到<strong>432.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:20</small><span>qq567***</span>抢到<strong>22.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:28</small><span>lxddu***</span>抢到<strong>58.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:59</small><span>lsr88***</span>抢到<strong>266.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:30</small><span>wi928***</span>抢到<strong>162.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:15</small><span>y7311***</span>抢到<strong>93.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:49</small><span>zsi41***</span>抢到<strong>12.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:22</small><span>zsi41***</span>抢到<strong>57.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:37</small><span>zsi41***</span>抢到<strong>21.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:21</small><span>wi928***</span>抢到<strong>47.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:16</small><span>lf579***</span>抢到<strong>999.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:58</small><span>wi928***</span>抢到<strong>105.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:38</small><span>wi928***</span>抢到<strong>63.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:12</small><span>1047s***</span>抢到<strong>95.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:45</small><span>js289***</span>抢到<strong>5.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:29</small><span>zv811***</span>抢到<strong>2888.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:32</small><span>lsr88***</span>抢到<strong>422.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:55</small><span>zsi41***</span>抢到<strong>56.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:14</small><span>wi928***</span>抢到<strong>92.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:53</small><span>1047s***</span>抢到<strong>77.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:54</small><span>wi928***</span>抢到<strong>37.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:55</small><span>ra958***</span>抢到<strong>666.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:20</small><span>wdr60***</span>抢到<strong>92.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:15</small><span>lxddu***</span>抢到<strong>233.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:21</small><span>lf579***</span>抢到<strong>894.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:10</small><span>lsr88***</span>抢到<strong>44.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:41</small><span>js289***</span>抢到<strong>233.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:32</small><span>1047s***</span>抢到<strong>854.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:48</small><span>lsr88***</span>抢到<strong>331.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:24</small><span>36615***</span>抢到<strong>56.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:11</small><span>lf579***</span>抢到<strong>1223.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:38</small><span>wi928***</span>抢到<strong>92.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:23</small><span>cgfk8***</span>抢到<strong>334.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:46</small><span>wdr60***</span>抢到<strong>1231.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:29</small><span>wi928***</span>抢到<strong>299.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:16</small><span>cgfk8***</span>抢到<strong>44.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:51</small><span>lxddu***</span>抢到<strong>321.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:18</small><span>ra958***</span>抢到<strong>84.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:17</small><span>36615***</span>抢到<strong>36.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:21</small><span>zcx17***</span>抢到<strong>62.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:42</small><span>qq567***</span>抢到<strong>234.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:21</small><span>qq567***</span>抢到<strong>45.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:44</small><span>zsi41***</span>抢到<strong>12.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:29</small><span>cgfk8***</span>抢到<strong>43.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:04</small><span>36615***</span>抢到<strong>88.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:48</small><span>cgfk8***</span>抢到<strong>64.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:41</small><span>wdr60***</span>抢到<strong>992.00元红包</strong></li>

            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:18</small><span>1047s***</span>抢到<strong>26.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:11</small><span>lsr88***</span>抢到<strong>14.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:07</small><span>wi928***</span>抢到<strong>6.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:25</small><span>1047s***</span>抢到<strong>88.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:52</small><span>1047s***</span>抢到<strong>256.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:30</small><span>wi928***</span>抢到<strong>8.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:25</small><span>y7311***</span>抢到<strong>23.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:49</small><span>lf579***</span>抢到<strong>36.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>cgfk8***</span>抢到<strong>76.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:56</small><span>zv811***</span>抢到<strong>83.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:48</small><span>zv811***</span>抢到<strong>6366.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:02</small><span>ra958***</span>抢到<strong>33.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:17</small><span>qq567***</span>抢到<strong>555.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:40</small><span>zsi41***</span>抢到<strong>58.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:09</small><span>cgfk8***</span>抢到<strong>344.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:40</small><span>lxddu***</span>抢到<strong>29.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:50</small><span>y7311***</span>抢到<strong>444.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>lsr88***</span>抢到<strong>384.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:25</small><span>36615***</span>抢到<strong>122.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:33</small><span>qq567***</span>抢到<strong>41.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:25</small><span>lxddu***</span>抢到<strong>233.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:15</small><span>lsr88***</span>抢到<strong>222.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:12</small><span>lf579***</span>抢到<strong>77.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:38</small><span>36615***</span>抢到<strong>88.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:27</small><span>1047s***</span>抢到<strong>3777.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:56</small><span>lsr88***</span>抢到<strong>177.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:44</small><span>lf579***</span>抢到<strong>344.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>zv811***</span>抢到<strong>677.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:33</small><span>zcx17***</span>抢到<strong>111.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:48</small><span>wdr60***</span>抢到<strong>66.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:16</small><span>lf579***</span>抢到<strong>566.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:37</small><span>qq567***</span>抢到<strong>25.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:14</small><span>36615***</span>抢到<strong>453.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:19</small><span>zcx17***</span>抢到<strong>64.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:39</small><span>zsi41***</span>抢到<strong>222.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:08</small><span>lsr88***</span>抢到<strong>73.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:08</small><span>zsi41***</span>抢到<strong>93.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:59</small><span>cgfk8***</span>抢到<strong>54.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:43</small><span>cgfk8***</span>抢到<strong>355.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:15</small><span>js289***</span>抢到<strong>188.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:32</small><span>cgfk8***</span>抢到<strong>152.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>ra958***</span>抢到<strong>77.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:10</small><span>1047s***</span>抢到<strong>9.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:00</small><span>wdr60***</span>抢到<strong>321.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:41</small><span>zv811***</span>抢到<strong>178.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:08</small><span>36615***</span>抢到<strong>152.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:59</small><span>qq567***</span>抢到<strong>2.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:44</small><span>1047s***</span>抢到<strong>32.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:17</small><span>js289***</span>抢到<strong>7.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:11</small><span>zsi41***</span>抢到<strong>244.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:09</small><span>qq567***</span>抢到<strong>42.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:54</small><span>wi928***</span>抢到<strong>94.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:46</small><span>zv811***</span>抢到<strong>432.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:20</small><span>qq567***</span>抢到<strong>22.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:28</small><span>lxddu***</span>抢到<strong>58.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:59</small><span>lsr88***</span>抢到<strong>266.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:30</small><span>wi928***</span>抢到<strong>162.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:15</small><span>y7311***</span>抢到<strong>93.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:49</small><span>zsi41***</span>抢到<strong>12.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:22</small><span>zsi41***</span>抢到<strong>57.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:37</small><span>zsi41***</span>抢到<strong>21.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>wi928***</span>抢到<strong>47.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:16</small><span>lf579***</span>抢到<strong>999.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:58</small><span>wi928***</span>抢到<strong>105.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:38</small><span>wi928***</span>抢到<strong>63.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:12</small><span>1047s***</span>抢到<strong>95.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:45</small><span>js289***</span>抢到<strong>5.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>zv811***</span>抢到<strong>2888.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:32</small><span>lsr88***</span>抢到<strong>422.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:55</small><span>zsi41***</span>抢到<strong>56.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:14</small><span>wi928***</span>抢到<strong>92.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:53</small><span>1047s***</span>抢到<strong>77.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:54</small><span>wi928***</span>抢到<strong>37.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:55</small><span>ra958***</span>抢到<strong>666.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:20</small><span>wdr60***</span>抢到<strong>92.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:15</small><span>lxddu***</span>抢到<strong>233.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>lf579***</span>抢到<strong>894.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:10</small><span>lsr88***</span>抢到<strong>44.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:41</small><span>js289***</span>抢到<strong>233.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:32</small><span>1047s***</span>抢到<strong>854.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:48</small><span>lsr88***</span>抢到<strong>331.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:24</small><span>36615***</span>抢到<strong>56.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:11</small><span>lf579***</span>抢到<strong>1223.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:38</small><span>wi928***</span>抢到<strong>92.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:23</small><span>cgfk8***</span>抢到<strong>334.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:46</small><span>wdr60***</span>抢到<strong>1231.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>wi928***</span>抢到<strong>299.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:16</small><span>cgfk8***</span>抢到<strong>44.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:51</small><span>lxddu***</span>抢到<strong>321.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:18</small><span>ra958***</span>抢到<strong>84.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:17</small><span>36615***</span>抢到<strong>36.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>zcx17***</span>抢到<strong>62.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:42</small><span>qq567***</span>抢到<strong>234.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>qq567***</span>抢到<strong>45.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:44</small><span>zsi41***</span>抢到<strong>12.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>cgfk8***</span>抢到<strong>43.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:04</small><span>36615***</span>抢到<strong>88.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:48</small><span>cgfk8***</span>抢到<strong>64.00元红包</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:41</small><span>wdr60***</span>抢到<strong>992.00元红包</strong></li>
        </ul>
    </marquee>
</div>

<div class="main1">
    <div class="cenbox">
        <table width="100%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td>单笔存款</td>
                <td>可抢次数</td>
                <td>红包比例</td>
                <td>提款要求</td>
                <td>派彩方式</td>
            </tr>
            <?php $__currentLoopData = $red; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e((int)$v->min_amount); ?>-<?php echo e((int)$v->max_amount); ?></td>
                <td><?php echo e($v->times); ?></td>
                <td><?php echo e($v->min_rate); ?>%-<?php echo e($v->max_rate); ?>%</td>
                <?php if($k == 0): ?>
                <td rowspan="9">1倍流水</td>
                <td rowspan="9">即抢即送（自动到帐）</td>
                    <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>


<div class="footbox">
    <div class="cenbox">
        <h1>规则与条款</h1>
        <p>1、红包金额根据存款大小自动匹配，自动发放到红利账户</p>
        <p>2、所赠红包仅1倍流水，即可提款</p>
        <p>3、抢红包活动仅限当日00:00-23:59内进行，逾期无效</p>
        <p>4、部分套利、违反公司条例会员不在赠送名单之内</p>
        <p>5、<?php echo e($_system_config->site_name); ?>保留对活动的最终解释权</p>
    </div>
</div>


<script>
    var member = "<?php echo e($_member); ?>";
    (function ($) {
        $(function () {

            var hb_counts=0;
            var $hongbao_container = $('.hongbao_container');
            $hongbao_container.css({width: $(document).width()});

            function getNum(min, max) {
                return Math.floor(Math.random() * (max - min)) + min;
            }

            var win = (parseInt(window.innerWidth));

            var addImg = function () {
                var img = new Image();
                img.src = '<?php echo e(asset('/web')); ?>/images/hb/hb_1.png';
                $hongbao_container.append(
                        $(img).css({
                            width: getNum(40, 80) + 'px',
                            left: parseInt(getNum(0, win))
                        }).attr(
                                'data-money',getNum(0,1000)
                        )
                );
                if (parseInt($(img).css('left'))>window.innerWidth-parseInt($(img).css('width'))) {
                    $($(img).css({
                        left:window.innerWidth-parseInt($(img).css('width'))
                    }))
                }
                $(img).animate({'top': $(window).height() + 20}, getNum(5000,10000), function () {
                    //删掉已经显示的红包
                    this.remove()
                })

            };

            addImg();
            setInterval(addImg, 500);

            $hongbao_container.on('click', 'img', function () {
                if (!member)
                {
                    $('#yk_modal').yk_modal({
                        width:'300px',
                        height:'325px',
                        content:'<div class="hb_content">' +
                        '<span class="hb_close" data-close="close">×</span>' +
                        '<img class="hb_img" src="<?php echo e(asset('/web')); ?>/images/hb/bighongbao.png" />'+
                         '<p>请先登录</p>' +
                        '</div>'
                    });
                    return false;
                }
                $(this).remove();
                $('#yk_modal').yk_modal({
                    width:'300px',
                    height:'325px',
                    content:'<div class="hb_content">' +
                    '<span class="hb_close" data-close="close">×</span>' +
                    '<img class="hb_img" src="<?php echo e(asset('/web')); ?>/images/hb/bighongbao.png" />'+
                    // '<p>恭喜你抢到￥'+money+'元现金红包</p>' +
                    '</div>',
                    closeCallback: function () {
                        hb_counts = 0;
                    }
                });
                $(this).siblings('img').stop();
                //
            });
            $('.yk_modal').on('click','.hb_img',function(e){
                if (member && hb_counts < 1)
                {
                    var url = "<?php echo e(route('member.distillRed')); ?>";
                    $.ajax({
                        type: 'GET',
                        url: url,
                        data: {},
                        dataType: "json",
                        success: function(data){
                            hb_counts = 1
                            if (data.status.errorCode == 0)
                            {
                                var m = data.data;
                                $('.hb_content').append('<p>恭喜你抢到￥'+m+'元现金红包</p>'+ '<p>已发放到中心账户</p>')

                            } else {
                                var html = '';

                                if (!typeof (data.status.msg) == 'string')
                                {
                                    html+= data.status.msg;
                                } else {
                                    var obj = JSON.parse (data.status.msg);
                                    for ( var p in obj )
                                    {
                                        if (typeof (obj[p]) == 'string')
                                        {
                                            html+= '<p><b>'+ obj[p] + '</b></p>';
                                        } else if(obj[p] instanceof Array)
                                        {
                                            for (var i=0;i<obj[p].length;i++)
                                            {
                                                html+= '<p><b>'+ obj[p][i] + '</b></p>';
                                            }

                                        }
                                    }
                                }


                                $('.hb_content').append('<p>'+html+'</p>')
                            }

                        }
                    });
                }

                e.stopPropagation();
            });

        });
    })(jQuery);
</script>

</body>
</html>