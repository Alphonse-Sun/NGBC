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
        <!--<a href="javascript:;" class="yk_btn-sure">??????</a>-->
        <!--</div>-->
    </div>
</div>
<div class="yk_backdrop"></div>

<div class="banner">
    <marquee direction="up" scrollamount="4">
        <ul id="scrollobj">
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:18</small><span>1047s***</span>??????<strong>26.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:11</small><span>lsr88***</span>??????<strong>14.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:07</small><span>wi928***</span>??????<strong>6.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:25</small><span>1047s***</span>??????<strong>88.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:52</small><span>1047s***</span>??????<strong>256.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:30</small><span>wi928***</span>??????<strong>8.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:25</small><span>y7311***</span>??????<strong>23.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:49</small><span>lf579***</span>??????<strong>36.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:29</small><span>cgfk8***</span>??????<strong>76.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:56</small><span>zv811***</span>??????<strong>83.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:48</small><span>zv811***</span>??????<strong>6366.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:02</small><span>ra958***</span>??????<strong>33.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:17</small><span>qq567***</span>??????<strong>555.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:40</small><span>zsi41***</span>??????<strong>58.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:09</small><span>cgfk8***</span>??????<strong>344.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:40</small><span>lxddu***</span>??????<strong>29.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:50</small><span>y7311***</span>??????<strong>444.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:29</small><span>lsr88***</span>??????<strong>384.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:25</small><span>36615***</span>??????<strong>122.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:33</small><span>qq567***</span>??????<strong>41.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:25</small><span>lxddu***</span>??????<strong>233.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:15</small><span>lsr88***</span>??????<strong>222.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:12</small><span>lf579***</span>??????<strong>77.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:38</small><span>36615***</span>??????<strong>88.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:27</small><span>1047s***</span>??????<strong>3777.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:56</small><span>lsr88***</span>??????<strong>177.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:44</small><span>lf579***</span>??????<strong>344.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:21</small><span>zv811***</span>??????<strong>677.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:33</small><span>zcx17***</span>??????<strong>111.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:48</small><span>wdr60***</span>??????<strong>66.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:16</small><span>lf579***</span>??????<strong>566.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:37</small><span>qq567***</span>??????<strong>25.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:14</small><span>36615***</span>??????<strong>453.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:19</small><span>zcx17***</span>??????<strong>64.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:39</small><span>zsi41***</span>??????<strong>222.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:08</small><span>lsr88***</span>??????<strong>73.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:08</small><span>zsi41***</span>??????<strong>93.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:59</small><span>cgfk8***</span>??????<strong>54.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:43</small><span>cgfk8***</span>??????<strong>355.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:15</small><span>js289***</span>??????<strong>188.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:32</small><span>cgfk8***</span>??????<strong>152.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:29</small><span>ra958***</span>??????<strong>77.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:10</small><span>1047s***</span>??????<strong>9.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-3 minute'))); ?>:00</small><span>wdr60***</span>??????<strong>321.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:41</small><span>zv811***</span>??????<strong>178.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:08</small><span>36615***</span>??????<strong>152.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:59</small><span>qq567***</span>??????<strong>2.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:44</small><span>1047s***</span>??????<strong>32.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:17</small><span>js289***</span>??????<strong>7.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:11</small><span>zsi41***</span>??????<strong>244.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:09</small><span>qq567***</span>??????<strong>42.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:54</small><span>wi928***</span>??????<strong>94.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:46</small><span>zv811***</span>??????<strong>432.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:20</small><span>qq567***</span>??????<strong>22.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:28</small><span>lxddu***</span>??????<strong>58.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:59</small><span>lsr88***</span>??????<strong>266.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:30</small><span>wi928***</span>??????<strong>162.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:15</small><span>y7311***</span>??????<strong>93.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:49</small><span>zsi41***</span>??????<strong>12.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:22</small><span>zsi41***</span>??????<strong>57.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:37</small><span>zsi41***</span>??????<strong>21.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:21</small><span>wi928***</span>??????<strong>47.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:16</small><span>lf579***</span>??????<strong>999.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:58</small><span>wi928***</span>??????<strong>105.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:38</small><span>wi928***</span>??????<strong>63.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:12</small><span>1047s***</span>??????<strong>95.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:45</small><span>js289***</span>??????<strong>5.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:29</small><span>zv811***</span>??????<strong>2888.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:32</small><span>lsr88***</span>??????<strong>422.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:55</small><span>zsi41***</span>??????<strong>56.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:14</small><span>wi928***</span>??????<strong>92.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:53</small><span>1047s***</span>??????<strong>77.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:54</small><span>wi928***</span>??????<strong>37.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:55</small><span>ra958***</span>??????<strong>666.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:20</small><span>wdr60***</span>??????<strong>92.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:15</small><span>lxddu***</span>??????<strong>233.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:21</small><span>lf579***</span>??????<strong>894.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:10</small><span>lsr88***</span>??????<strong>44.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:41</small><span>js289***</span>??????<strong>233.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:32</small><span>1047s***</span>??????<strong>854.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:48</small><span>lsr88***</span>??????<strong>331.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:24</small><span>36615***</span>??????<strong>56.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:11</small><span>lf579***</span>??????<strong>1223.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:38</small><span>wi928***</span>??????<strong>92.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:23</small><span>cgfk8***</span>??????<strong>334.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:46</small><span>wdr60***</span>??????<strong>1231.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:29</small><span>wi928***</span>??????<strong>299.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:16</small><span>cgfk8***</span>??????<strong>44.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:51</small><span>lxddu***</span>??????<strong>321.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:18</small><span>ra958***</span>??????<strong>84.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:17</small><span>36615***</span>??????<strong>36.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:21</small><span>zcx17***</span>??????<strong>62.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:42</small><span>qq567***</span>??????<strong>234.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:21</small><span>qq567***</span>??????<strong>45.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:44</small><span>zsi41***</span>??????<strong>12.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:29</small><span>cgfk8***</span>??????<strong>43.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:04</small><span>36615***</span>??????<strong>88.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:48</small><span>cgfk8***</span>??????<strong>64.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-2 minute'))); ?>:41</small><span>wdr60***</span>??????<strong>992.00?????????</strong></li>

            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:18</small><span>1047s***</span>??????<strong>26.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:11</small><span>lsr88***</span>??????<strong>14.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:07</small><span>wi928***</span>??????<strong>6.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:25</small><span>1047s***</span>??????<strong>88.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:52</small><span>1047s***</span>??????<strong>256.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:30</small><span>wi928***</span>??????<strong>8.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:25</small><span>y7311***</span>??????<strong>23.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:49</small><span>lf579***</span>??????<strong>36.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>cgfk8***</span>??????<strong>76.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:56</small><span>zv811***</span>??????<strong>83.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:48</small><span>zv811***</span>??????<strong>6366.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:02</small><span>ra958***</span>??????<strong>33.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:17</small><span>qq567***</span>??????<strong>555.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:40</small><span>zsi41***</span>??????<strong>58.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:09</small><span>cgfk8***</span>??????<strong>344.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:40</small><span>lxddu***</span>??????<strong>29.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:50</small><span>y7311***</span>??????<strong>444.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>lsr88***</span>??????<strong>384.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:25</small><span>36615***</span>??????<strong>122.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:33</small><span>qq567***</span>??????<strong>41.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:25</small><span>lxddu***</span>??????<strong>233.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:15</small><span>lsr88***</span>??????<strong>222.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:12</small><span>lf579***</span>??????<strong>77.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:38</small><span>36615***</span>??????<strong>88.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:27</small><span>1047s***</span>??????<strong>3777.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:56</small><span>lsr88***</span>??????<strong>177.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:44</small><span>lf579***</span>??????<strong>344.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>zv811***</span>??????<strong>677.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:33</small><span>zcx17***</span>??????<strong>111.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:48</small><span>wdr60***</span>??????<strong>66.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:16</small><span>lf579***</span>??????<strong>566.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:37</small><span>qq567***</span>??????<strong>25.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:14</small><span>36615***</span>??????<strong>453.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:19</small><span>zcx17***</span>??????<strong>64.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:39</small><span>zsi41***</span>??????<strong>222.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:08</small><span>lsr88***</span>??????<strong>73.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:08</small><span>zsi41***</span>??????<strong>93.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:59</small><span>cgfk8***</span>??????<strong>54.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:43</small><span>cgfk8***</span>??????<strong>355.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:15</small><span>js289***</span>??????<strong>188.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:32</small><span>cgfk8***</span>??????<strong>152.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>ra958***</span>??????<strong>77.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:10</small><span>1047s***</span>??????<strong>9.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:00</small><span>wdr60***</span>??????<strong>321.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:41</small><span>zv811***</span>??????<strong>178.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:08</small><span>36615***</span>??????<strong>152.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:59</small><span>qq567***</span>??????<strong>2.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:44</small><span>1047s***</span>??????<strong>32.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:17</small><span>js289***</span>??????<strong>7.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:11</small><span>zsi41***</span>??????<strong>244.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:09</small><span>qq567***</span>??????<strong>42.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:54</small><span>wi928***</span>??????<strong>94.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:46</small><span>zv811***</span>??????<strong>432.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:20</small><span>qq567***</span>??????<strong>22.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:28</small><span>lxddu***</span>??????<strong>58.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:59</small><span>lsr88***</span>??????<strong>266.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:30</small><span>wi928***</span>??????<strong>162.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:15</small><span>y7311***</span>??????<strong>93.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:49</small><span>zsi41***</span>??????<strong>12.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:22</small><span>zsi41***</span>??????<strong>57.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:37</small><span>zsi41***</span>??????<strong>21.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>wi928***</span>??????<strong>47.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:16</small><span>lf579***</span>??????<strong>999.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:58</small><span>wi928***</span>??????<strong>105.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:38</small><span>wi928***</span>??????<strong>63.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:12</small><span>1047s***</span>??????<strong>95.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:45</small><span>js289***</span>??????<strong>5.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>zv811***</span>??????<strong>2888.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:32</small><span>lsr88***</span>??????<strong>422.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:55</small><span>zsi41***</span>??????<strong>56.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:14</small><span>wi928***</span>??????<strong>92.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:53</small><span>1047s***</span>??????<strong>77.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:54</small><span>wi928***</span>??????<strong>37.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:55</small><span>ra958***</span>??????<strong>666.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:20</small><span>wdr60***</span>??????<strong>92.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:15</small><span>lxddu***</span>??????<strong>233.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>lf579***</span>??????<strong>894.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:10</small><span>lsr88***</span>??????<strong>44.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:41</small><span>js289***</span>??????<strong>233.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:32</small><span>1047s***</span>??????<strong>854.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:48</small><span>lsr88***</span>??????<strong>331.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:24</small><span>36615***</span>??????<strong>56.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:11</small><span>lf579***</span>??????<strong>1223.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:38</small><span>wi928***</span>??????<strong>92.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:23</small><span>cgfk8***</span>??????<strong>334.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:46</small><span>wdr60***</span>??????<strong>1231.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>wi928***</span>??????<strong>299.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:16</small><span>cgfk8***</span>??????<strong>44.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:51</small><span>lxddu***</span>??????<strong>321.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:18</small><span>ra958***</span>??????<strong>84.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:17</small><span>36615***</span>??????<strong>36.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>zcx17***</span>??????<strong>62.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:42</small><span>qq567***</span>??????<strong>234.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:21</small><span>qq567***</span>??????<strong>45.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:44</small><span>zsi41***</span>??????<strong>12.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:29</small><span>cgfk8***</span>??????<strong>43.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:04</small><span>36615***</span>??????<strong>88.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:48</small><span>cgfk8***</span>??????<strong>64.00?????????</strong></li>
            <li><small><?php echo e(date('Y-m-d H:i', strtotime('-1 minute'))); ?>:41</small><span>wdr60***</span>??????<strong>992.00?????????</strong></li>
        </ul>
    </marquee>
</div>

<div class="main1">
    <div class="cenbox">
        <table width="100%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td>????????????</td>
                <td>????????????</td>
                <td>????????????</td>
                <td>????????????</td>
                <td>????????????</td>
            </tr>
            <?php $__currentLoopData = $red; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e((int)$v->min_amount); ?>-<?php echo e((int)$v->max_amount); ?></td>
                <td><?php echo e($v->times); ?></td>
                <td><?php echo e($v->min_rate); ?>%-<?php echo e($v->max_rate); ?>%</td>
                <?php if($k == 0): ?>
                <td rowspan="9">1?????????</td>
                <td rowspan="9">??????????????????????????????</td>
                    <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>


<div class="footbox">
    <div class="cenbox">
        <h1>???????????????</h1>
        <p>1???????????????????????????????????????????????????????????????????????????</p>
        <p>2??????????????????1????????????????????????</p>
        <p>3??????????????????????????????00:00-23:59????????????????????????</p>
        <p>4??????????????????????????????????????????????????????????????????</p>
        <p>5???<?php echo e($_system_config->site_name); ?>?????????????????????????????????</p>
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
                    //???????????????????????????
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
                        '<span class="hb_close" data-close="close">??</span>' +
                        '<img class="hb_img" src="<?php echo e(asset('/web')); ?>/images/hb/bighongbao.png" />'+
                         '<p>????????????</p>' +
                        '</div>'
                    });
                    return false;
                }
                $(this).remove();
                $('#yk_modal').yk_modal({
                    width:'300px',
                    height:'325px',
                    content:'<div class="hb_content">' +
                    '<span class="hb_close" data-close="close">??</span>' +
                    '<img class="hb_img" src="<?php echo e(asset('/web')); ?>/images/hb/bighongbao.png" />'+
                    // '<p>??????????????????'+money+'???????????????</p>' +
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
                                $('.hb_content').append('<p>??????????????????'+m+'???????????????</p>'+ '<p>????????????????????????</p>')

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