
<div class="top">
    <div class="logo"><a href="./public/Index.html"><img src="/public/images/logo.png" /></a></div>
    <div class="search">
    	<form>
        	<input type="text" value="" class="s_ipt" />
            <input type="submit" value="搜索" class="s_btn" />
        </form>                      
        <span class="fl"><a href="./public/#">咖啡</a><a href="./public/#">iphone 6S</a><a href="./public/#">新鲜美食</a><a href="./public/#">蛋糕</a><a href="./public/#">日用品</a><a href="./public/#">连衣裙</a></span>
    </div>
    <div class="i_car">
    	<div class="car_t">购物车 [ <span>3</span> ]</div>
        <div class="car_bg">
       		<!--Begin 购物车未登录 Begin-->
        	<div class="un_login">还未登录！<a href="./public/Login.html" style="color:#ff4e00;">马上登录</a> 查看购物车！</div>
            <!--End 购物车未登录 End-->
            <!--Begin 购物车已登录 Begin-->
            <ul class="cars">
            	<li>
                	<div class="img"><a href="./public/#"><img src="/public/images/car1.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="./public/#">法颂浪漫梦境50ML 香水女士持久清新淡香 送2ML小样3只</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
                <li>
                	<div class="img"><a href="./public/#"><img src="/public/images/car2.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="./public/#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
                <li>
                	<div class="img"><a href="./public/#"><img src="/public/images/car2.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="./public/#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
            </ul>
            <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span>1058</span></div>
            <div class="price_a"><a href="./public/#">去购物车结算</a></div>
            <!--End 购物车已登录 End-->
        </div>
    </div>
</div>
<!--End Header End--> 
<!--Begin Menu Begin-->
<div class="menu_bg">
	<div class="menu">
    	<!--Begin 商品分类详情 Begin-->    
    	<div class="nav">
        	<div class="nav_t">全部商品分类</div>
            <div class="leftNav">
                <ul> 
                    <?php foreach ($ordercate as $key => $val): ?>
                    <li>
                        <?php if ($val['cate_pid']==0): ?>
                            <div class="fj">
                            <span class="n_img"><span></span><img src="/public/images/nav1.png" /></span>
                            <span class="fl"><?php echo $val['cate_name']; ?></span>
                            </div>
                        <?php endif ?>
                    	
                        <div class="zj">
                            <div class="zj_l">
                            <?php foreach ($val['son'] as $ke => $va): ?>
                                <div class="zj_l_c">
                                    <h2><?php echo $va['cate_name']; ?></h2>  
                                <?php foreach ($va['son'] as $value): ?>
                                    <a href="./public/#"><?php echo $value['cate_name']; ?></a>|
                                <?php endforeach ?>       
                                </div>
                            <?php endforeach ?>
                            </div>
                            <div class="zj_r">
                                <a href="./public/#"><img src="/public/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="./public/#"><img src="/public/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                        
                    </li>
                    <?php endforeach ?>                   	
                </ul>            
            </div>
        </div>  
        <!--End 商品分类详情 End-->                                                     
    	<ul class="menu_r">
        <?php foreach ($dataNav as $key => $val): ?>
            <li><a href="./public/Index.html"><?php echo $val['nav_name']; ?></a></li>
        <?php endforeach ?>
        </ul>
        <div class="m_ad">中秋送好礼！</div>
    </div>
</div>
<!--End Menu End--> 
<div class="i_bg bg_color">
	<div class="i_ban_bg">
		<!--Begin Banner Begin-->
    	<div class="banner">    	
            <div class="top_slide_wrap">
                <ul class="slide_box bxslider">
                    <li><img src="/public/images/ban1.jpg" width="740" height="401" /></li>
                    <li><img src="/public/images/ban1.jpg" width="740" height="401" /></li> 
                    <li><img src="/public/images/ban1.jpg" width="740" height="401" /></li> 
                </ul>	
                <div class="op_btns clearfix">
                    <a href="./public/#" class="op_btn op_prev"><span></span></a>
                    <a href="./public/#" class="op_btn op_next"><span></span></a>
                </div>        
            </div>
        </div>
        <script type="text/javascript">
        //var jq = jQuery.noConflict();
        (function(){
            $(".bxslider").bxSlider({
                auto:true,
                prevSelector:jq(".top_slide_wrap .op_prev")[0],nextSelector:jq(".top_slide_wrap .op_next")[0]
            });
        })();
        </script>
        <!--End Banner End-->
        <div class="inews">
        	<div class="news_t">
            	<span class="fr"><a href="./public/#">更多 ></a></span>新闻资讯
            </div>
            <ul>
            	<li><span>[ 特惠 ]</span><a href="./public/#">掬一轮明月 表无尽惦念</a></li>
            	<li><span>[ 公告 ]</span><a href="./public/#">好奇金装成长裤新品上市</a></li>
            	<li><span>[ 特惠 ]</span><a href="./public/#">大牌闪购 · 抢！</a></li>
            	<li><span>[ 公告 ]</span><a href="./public/#">发福利 买车就抢千元油卡</a></li>
            	<li><span>[ 公告 ]</span><a href="./public/#">家电低至五折</a></li>
            </ul>
            <div class="charge_t">
            	话费充值<div class="ch_t_icon"></div>
            </div>
            <form>
            <table border="0" style="width:205px; margin-top:10px;" cellspacing="0" cellpadding="0">
              <tr height="35">
                <td width="33">号码</td>
                <td><input type="text" value="" class="c_ipt" /></td>
              </tr>
              <tr height="35">
                <td>面值</td>
                <td>
                	<select class="jj" name="city">
                      <option value="0" selected="selected">100元</option>
                      <option value="1">50元</option>
                      <option value="2">30元</option>
                      <option value="3">20元</option>
                      <option value="4">10元</option>
                    </select>
                    <span style="color:#ff4e00; font-size:14px;">￥99.5</span>
                </td>
              </tr>
              <tr height="35">
                <td colspan="2"><input type="submit" value="立即充值" class="c_btn" /></td>
              </tr>
            </table>
            </form>
        </div>
    </div>

    <!--Begin 热门商品 Begin-->
    <div class="i_t mar_10">
        <span class="fl">热门商品</span>
        <span class="i_mores fr"><a href="./public/javascript:void(0)">更多</a></span>
    </div>
    <div class="like">  
        <div id="featureContainer1">
            <div id="feature1">
                <div id="block1">
                    <div id="botton-scroll1" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 1200px;">
                        <ul class="featureUL" style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 3600px; left: -2400px;">
                            <li class="featureBox" style="overflow: hidden; float: left; width: 238px; height: 228px;">
                                <div class="box">
                                    <div class="h_icon"><img width="50" height="50" src="/public/images/hot.png">
                                    </div>
                                    <div class="imgbg">
                                        <a href="/product/product"><img width="160" height="136" src="/public/images/hot1.jpg"></a>
                                    </div>                                        
                                    <div class="name">
                                        <a href="/product/product">
                                        <h2>德国进口</h2>
                                        德亚全脂纯牛奶200ml*48盒
                                        </a>
                                    </div>
                                    <div class="price">
                                        <font>￥<span>189</span></font> &nbsp; 26R
                                    </div>
                                </div>
                            </li>
                            
                            <li class="featureBox" style="overflow: hidden; float: left; width: 238px; height: 228px;">
                                <div class="box">
                                    <div class="imgbg">
                                        <a href="./public/javascript:void(0)"><img width="160" height="136" src="/public/images/hot4.jpg"></a>
                                    </div>                                        
                                    <div class="name">
                                        <a href="./public/javascript:void(0)">
                                        <h2>品利特级橄榄油</h2>
                                        750ml*4瓶装组合 西班牙原装进口
                                        </a>
                                    </div>
                                    <div class="price">
                                        <font>￥<span>280</span></font> &nbsp; 30R
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="./public/javascript:void();" class="l_prev">Previous</a>
                <a href="./public/javascript:void();" class="l_next">Next</a>
            </div>
        </div>
    </div>    
    <!--END 热门商品 END -->

    <!--Begin 限时特卖 Begin-->
    <!--
    <div class="i_t mar_10">
    	<span class="fl">限时特卖</span>
        <span class="i_mores fr"><a href="./public/#">更多</a></span>
    </div>
    <div class="content">

        <div class="sell_right">
        	<div class="sell_1">
            	<div class="s_img"><a href="./public/#"><img src="/public/images/tm_1.jpg" width="185" height="155" /></a></div>
            	<div class="s_price">￥<span>89</span></div>
                <div class="s_name">
                	<h2><a href="./public/#">沙宣洗发水</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_2">
            	<div class="s_img"><a href="./public/#"><img src="/public/images/tm_2.jpg" width="185" height="155" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="./public/#">德芙巧克力</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_b1">
            	<div class="sb_img"><a href="./public/#"><img src="/public/images/tm_b1.jpg" width="242" height="356" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="./public/#">东北大米</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>

            <div class="sell_3">
            	<div class="s_img"><a href="./public/#"><img src="/public/images/tm_3.jpg" width="185" height="155" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="./public/#">迪奥香水</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_4">
            	<div class="s_img"><a href="./public/#"><img src="/public/images/tm_4.jpg" width="185" height="155" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="./public/#">美妆</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_b2">
            	<div class="sb_img"><a href="./public/#"><img src="/public/images/tm_b2.jpg" width="242" height="356" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="./public/#">美妆</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_1">
                <div class="s_img"><a href="./public/#"><img src="/public/images/tm_1.jpg" width="185" height="155" /></a></div>
                <div class="s_price">￥<span>89</span></div>
                <div class="s_name">
                    <h2><a href="./public/#">沙宣洗发水</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_2">
                <div class="s_img"><a href="./public/#"><img src="/public/images/tm_2.jpg" width="185" height="155" /></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="./public/#">德芙巧克力</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>            
        </div>
    </div>
    -->
    <!--End 限时特卖 End-->
    <div class="content mar_20">
    	<img src="/public/images/mban_1.jpg" width="1200" height="110" />
    </div>
	<!--Begin 进口 生鲜 Begin-->
    <div class="i_t mar_10">
    	<span class="floor_num">1F</span>
    	<span class="fl">进口 <b>·</b> 生鲜</span>                
        <span class="i_mores fr"><a href="./public/#">进口咖啡</a>&nbsp; &nbsp; &nbsp; <a href="./public/#">进口酒</a>&nbsp; &nbsp; &nbsp; <a href="./public/#">进口母婴</a>&nbsp; &nbsp; &nbsp; <a href="./public/#">新鲜蔬菜</a>&nbsp; &nbsp; &nbsp; <a href="./public/#">新鲜水果</a></span>
    </div>
    <div class="content">

        <div class="fresh_mid">
        	<ul>
            	<li>
                	<div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                    	<font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_1.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                    	<font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_2.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                    	<font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_3.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                    	<font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_4.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                    <div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                        <font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_1.jpg" width="185" height="155" /></a></div>
                </li>                
                <li>
                	<div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                    	<font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_5.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                    	<font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_6.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                    <div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                        <font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_5.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                    <div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                        <font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_5.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                    <div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                        <font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_5.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                    <div class="name"><a href="./public/#">新鲜美味  进口美食</a></div>
                    <div class="price">
                        <font>￥<span>198.00</span></font> &nbsp; 26R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/fre_5.jpg" width="185" height="155" /></a></div>
                </li>
                                                                                
            </ul>
        </div>

    </div>    
    <!--End 进口 生鲜 End-->

    <!-- Begin 广告 Begin -->
    <div class="content mar_20">
        <img width="1200" height="110" src="/public/images/mban_1.jpg">
    </div>    
    <!-- End 广告 End -->

    <!--Begin 食品饮料 Begin-->
    <div class="i_t mar_10">
    	<span class="floor_num">2F</span>
    	<span class="fl">食品饮料</span>                                
        <span class="i_mores fr"><a href="./public/#">咖啡</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">休闲零食</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">饼干糕点</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">冲饮谷物</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">营养保健</a></span>
    </div>
    <div class="content">

        <div class="fresh_mid">
        	<ul>
            	<li>
                	<div class="name"><a href="./public/#">莫斯利安酸奶</a></div>
                    <div class="price">
                    	<font>￥<span>96.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/food_1.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">莫斯利安酸奶</a></div>
                    <div class="price">
                    	<font>￥<span>96.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/food_2.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">莫斯利安酸奶</a></div>
                    <div class="price">
                    	<font>￥<span>96.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/food_3.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">莫斯利安酸奶</a></div>
                    <div class="price">
                    	<font>￥<span>96.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/food_4.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">莫斯利安酸奶</a></div>
                    <div class="price">
                    	<font>￥<span>96.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/food_5.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">莫斯利安酸奶</a></div>
                    <div class="price">
                    	<font>￥<span>96.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/food_6.jpg" width="185" height="155" /></a></div>
                </li>
            </ul>
        </div>
    </div>    
    <!--End 食品饮料 End-->

    <!-- Begin 广告 Begin -->
    <div class="content mar_20">
        <img width="1200" height="110" src="/public/images/mban_1.jpg">
    </div>    
    <!-- End 广告 End -->

    <!--Begin 个人美妆 Begin-->
    <div class="i_t mar_10">
    	<span class="floor_num">3F</span>
    	<span class="fl">个人美妆</span>                                
        <span class="i_mores fr"><a href="./public/#">洗发护发</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">面膜</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">洗面奶</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">香水</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">沐浴露</a></span>                
    </div>
    <div class="content">
        <div class="fresh_mid">
        	<ul>
            	<li>
                	<div class="name"><a href="./public/#">美宝莲粉饼</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 16R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/make_1.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">美宝莲粉饼</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 16R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/make_2.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">美宝莲粉饼</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 16R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/make_3.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">美宝莲粉饼</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 16R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/make_4.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">美宝莲粉饼</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 16R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/make_5.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">美宝莲粉饼</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 16R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/make_6.jpg" width="185" height="155" /></a></div>
                </li>
            </ul>
        </div>
    </div>    
    <!--End 个人美妆 End-->
    <div class="content mar_20">
    	<img src="/public/images/mban_1.jpg" width="1200" height="110" />
    </div>
    <!--Begin 母婴玩具 Begin-->
    <div class="i_t mar_10">
    	<span class="floor_num">4F</span>
    	<span class="fl">母婴玩具</span>                                
        <span class="i_mores fr"><a href="./public/#">营养品</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">孕妈背带裤</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">儿童玩具</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">婴儿床</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">喂奶器</a></span>                               
    </div>
    <div class="content">
        <div class="fresh_mid">
        	<ul>
            	<li>
                	<div class="name"><a href="./public/#">儿童玩具  变形金刚</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 20R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/baby_1.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">儿童玩具  变形金刚</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 20R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/baby_2.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">儿童玩具  变形金刚</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 20R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/baby_3.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">儿童玩具  变形金刚</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 20R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/baby_4.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">儿童玩具  变形金刚</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 20R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/baby_5.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">儿童玩具  变形金刚</a></div>
                    <div class="price">
                    	<font>￥<span>260.00</span></font> &nbsp; 20R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/baby_6.jpg" width="185" height="155" /></a></div>
                </li>
            </ul>
        </div>
    </div>    
    <!--End 母婴玩具 End-->
    <!--Begin 家居生活 Begin-->
    <div class="i_t mar_10">
    	<span class="floor_num">5F</span>
    	<span class="fl">家居生活</span>                                
        <span class="i_mores fr"><a href="./public/#">床上用品</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">家纺布艺</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">餐具</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">沙发</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">汽车用品</a></span>                                              
    </div>
    <div class="content">
        <div class="fresh_mid">
        	<ul>
            	<li>
                	<div class="name"><a href="./public/#">品质蓝色沙发</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 50R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/home_1.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">品质蓝色沙发</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 50R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/home_2.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">品质蓝色沙发</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 50R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/home_3.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">品质蓝色沙发</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 50R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/home_4.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">品质蓝色沙发</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 50R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/home_5.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">品质蓝色沙发</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 50R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/home_6.jpg" width="185" height="155" /></a></div>
                </li>
            </ul>
        </div>
    </div>    
    <!--End 家居生活 End-->
    <!--Begin 数码家电 Begin-->
    <div class="i_t mar_10">
    	<span class="floor_num">6F</span>
    	<span class="fl">数码家电</span>                                
        <span class="i_mores fr"><a href="./public/#">手机</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">苹果</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">华为手机</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">洗衣机</a>&nbsp; &nbsp; | &nbsp; &nbsp;<a href="./public/#">数码配件</a></span>                                               
    </div>
    <div class="content">
        <div class="fresh_mid">
        	<ul>
            	<li>
                	<div class="name"><a href="./public/#">乐视高清电视</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/tel_1.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">乐视高清电视</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/tel_2.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">乐视高清电视</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/tel_3.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">乐视高清电视</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/tel_4.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">乐视高清电视</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/tel_5.jpg" width="185" height="155" /></a></div>
                </li>
                <li>
                	<div class="name"><a href="./public/#">乐视高清电视</a></div>
                    <div class="price">
                    	<font>￥<span>2160.00</span></font> &nbsp; 25R
                    </div>
                    <div class="img"><a href="./public/#"><img src="/public/images/tel_6.jpg" width="185" height="155" /></a></div>
                </li>
            </ul>
        </div>
    </div>    
    <!--End 数码家电 End-->
    <!--Begin 猜你喜欢 Begin-->
    <div class="i_t mar_10">
    	<span class="fl">猜你喜欢</span>
    </div>    
    <div class="like">        	
        <div id="featureContainer1">
            <div id="feature1">
                <div id="block1">
                    <div id="botton-scroll1">
                        <ul class="featureUL">
                            <li class="featureBox">
                                <div class="box">
                                    <div class="imgbg">
                                        <a href="./public/#"><img src="/public/images/hot1.jpg" width="160" height="136" /></a>
                                    </div>                                        
                                    <div class="name">
                                        <a href="./public/#">
                                        <h2>德国进口</h2>
                                        德亚全脂纯牛奶200ml*48盒
                                        </a>
                                    </div>
                                    <div class="price">
                                        <font>￥<span>189</span></font> &nbsp; 26R
                                    </div>
                                </div>
                            </li>
                            <li class="featureBox">
                                <div class="box">
                                    <div class="imgbg">
                                        <a href="./public/#"><img src="/public/images/hot2.jpg" width="160" height="136" /></a>
                                    </div>                                        
                                    <div class="name">
                                        <a href="./public/#">
                                        <h2>iphone 6S</h2>
                                        Apple/苹果 iPhone 6s Plus公开版
                                        </a>
                                    </div>
                                    <div class="price">
                                        <font>￥<span>5288</span></font> &nbsp; 25R
                                    </div>
                                </div>
                            </li>
                            <li class="featureBox">
                                <div class="box">
                                    <div class="imgbg">
                                        <a href="./public/#"><img src="/public/images/hot3.jpg" width="160" height="136" /></a>
                                    </div>                                        
                                    <div class="name">
                                        <a href="./public/#">
                                        <h2>倩碧特惠组合套装</h2>
                                        倩碧补水组合套装8折促销
                                        </a>
                                    </div>
                                    <div class="price">
                                        <font>￥<span>368</span></font> &nbsp; 18R
                                    </div>
                                </div>
                            </li>
                            <li class="featureBox">
                                <div class="box">
                                    <div class="imgbg">
                                        <a href="./public/#"><img src="/public/images/hot4.jpg" width="160" height="136" /></a>
                                    </div>                                        
                                    <div class="name">
                                        <a href="./public/#">
                                        <h2>品利特级橄榄油</h2>
                                        750ml*4瓶装组合 西班牙原装进口
                                        </a>
                                    </div>
                                    <div class="price">
                                        <font>￥<span>280</span></font> &nbsp; 30R
                                    </div>
                                </div>
                            </li>
                            <li class="featureBox">
                                <div class="box">
                                    <div class="imgbg">
                                        <a href="./public/#"><img src="/public/images/hot4.jpg" width="160" height="136" /></a>
                                    </div>                                        
                                    <div class="name">
                                        <a href="./public/#">
                                        <h2>品利特级橄榄油</h2>
                                        750ml*4瓶装组合 西班牙原装进口
                                        </a>
                                    </div>
                                    <div class="price">
                                        <font>￥<span>280</span></font> &nbsp; 30R
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="l_prev" href="./public/javascript:void();">Previous</a>
                <a class="l_next" href="./public/javascript:void();">Next</a>
            </div>
        </div>
    </div>
    <!--End 猜你喜欢 End-->
    
    