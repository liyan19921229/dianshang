
<div class="m_top_bg">
    <div class="top">
        <div class="m_logo"><a href="Index.html"><img src="/public/images/logo1.png" /></a></div>
        <div class="m_search">
            <form>
                <input type="text" value="" class="m_ipt" />
                <input type="submit" value="搜索" class="m_btn" />
            </form>                      
            <span class="fl"><a href="#">咖啡</a><a href="#">iphone 6S</a><a href="#">新鲜美食</a><a href="#">蛋糕</a><a href="#">日用品</a><a href="#">连衣裙</a></span>
        </div>
        <div class="i_car">
            <div class="car_t">购物车 [ <span>3</span> ]</div>
            <div class="car_bg">
                <!--Begin 购物车未登录 Begin-->
                <div class="un_login">还未登录！<a href="Login.html" style="color:#ff4e00;">马上登录</a> 查看购物车！</div>
                <!--End 购物车未登录 End-->
                <!--Begin 购物车已登录 Begin-->
                <ul class="cars">
                    <li>
                        <div class="img"><a href="#"><img src="/public/images/car1.jpg" width="58" height="58" /></a></div>
                        <div class="name"><a href="#">法颂浪漫梦境50ML 香水女士持久清新淡香 送2ML小样3只</a></div>
                        <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img src="/public/images/car2.jpg" width="58" height="58" /></a></div>
                        <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                        <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img src="/public/images/car2.jpg" width="58" height="58" /></a></div>
                        <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                        <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                    </li>
                </ul>
                <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span>1058</span></div>
                <div class="price_a"><a href="#">去购物车结算</a></div>
                <!--End 购物车已登录 End-->
            </div>
        </div>
    </div>
</div>
<!--End Header End--> 
<div class="i_bg bg_color">
    <!--Begin 用户中心 Begin -->
	<div class="m_content">
   		<div class="m_left">
        	<div class="left_n">管理中心</div>
            <div class="left_m">
            	<div class="left_m_t t_bg1">订单中心</div>
                <ul>
                	<li><a href="/member/order">我的订单</a></li>
                    <li><a href="/member/address">收货地址</a></li>
                    <li><a href="#">缺货登记</a></li>
                    <li><a href="#">跟踪订单</a></li>
                </ul>
            </div>
            <div class="left_m">
            	<div class="left_m_t t_bg2">会员中心</div>
                <ul>
                	<li><a href="/member/user">用户信息</a></li>
                    <li><a href="/member/collect">我的收藏</a></li>
                    <li><a href="/member/msg">我的留言</a></li>
                    <li><a href="/member/links">推广链接</a></li>
                    <li><a href="#">我的评论</a></li>
                </ul>
            </div>
            <div class="left_m">
            	<div class="left_m_t t_bg3">账户中心</div>
                <ul>
                	<li><a href="Member_Safe.html">账户安全</a></li>
                    <li><a href="Member_Packet.html">我的红包</a></li>
                    <li><a href="Member_Money.html">资金管理</a></li>
                </ul>
            </div>
            <div class="left_m">
            	<div class="left_m_t t_bg4">分销中心</div>
                <ul>
                	<li><a href="Member_Member.html">我的会员</a></li>
                    <li><a href="Member_Results.html">我的业绩</a></li>
                    <li><a href="Member_Commission.html">我的佣金</a></li>
                    <li><a href="Member_Cash.html">申请提现</a></li>
                </ul>
            </div>
        </div>
		<div class="m_right">
            <p></p>
            <div class="mem_tit">我的留言</div>
           	<form>
            <table border="0" style="width:880px; margin-top:20px;"  cellspacing="0" cellpadding="0">
              <tr height="45">
                <td width="80" align="right">留言类型 &nbsp; &nbsp;</td>
                <td>                            
                	<label class="r_rad"><input type="checkbox" name="type" checked="checked" /></label><label class="r_txt">留言</label>
                    <label class="r_rad"><input type="checkbox" name="type" /></label><label class="r_txt">投诉</label>
                    <label class="r_rad"><input type="checkbox" name="type" /></label><label class="r_txt">询问</label>
                    <label class="r_rad"><input type="checkbox" name="type" /></label><label class="r_txt">售后</label>
                    <label class="r_rad"><input type="checkbox" name="type" /></label><label class="r_txt">求购</label>
                </td>
              </tr>
              <tr height="45">
                <td align="right">主题 &nbsp; &nbsp;</td>
                <td><input type="text" value="" class="add_ipt" style="width:290px;" /></td>
              </tr>
              <tr valign="top" height="110">
                <td align="right">留言内容 &nbsp; &nbsp;</td>
                <td style="padding-top:5px;"><textarea class="add_txt"></textarea></td>
              </tr>
              <tr height="45">
                <td align="right">上传文件 &nbsp; &nbsp;</td>
                <td><input type="file" /></td>
              </tr>
              <tr height="50">
                <td>&nbsp;</td>
                <td style="line-height:20px;">
                	<font color="#ff4e00">小提示：</font><br />
                    您可以上传以下格式的文件：gif、jpg、png、word、excel、txt、zip、ppt、pdf
                </td>
              </tr>
              <tr height="50" valign="bottom">
                <td>&nbsp;</td>
                <td><input type="submit" value="提交" class="btn_tj" /></td>
              </tr>
            </table>
            </form>







            
        </div>
    </div>
	<!--End 用户中心 End--> 
    
