<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		    <li><a href="index.php">首頁</a></li>
        <li><a href="?pageData=member_info">會員中心</a></li>
		    <li class="active">會員資料修改</li>
		  </ol>
      <div class="col-md-9 product-model-sec">

        <!-- 內容 -->
          <table class="table table-striped">
            <tr>
              <td>帳號</td>
              <td>gn01816565@gmail.com</td>
            </tr>
            <tr>
              <td>姓名</td>
              <td>
                <input type="text" name="memnber_name" value="許敦凱">
              </td>
            </tr>
            <tr>
              <td>生日</td>
              <td>
                西元
                <select name="birY"> 
                <?php
                for($i=1900;$i<=2017;$i++) {
                  echo "<option value='".$i."'>".$i."</option>";
                }
                ?>
                </select>
                年

                <select name="birM"> 
                 <?php
                for($i=1;$i<=12;$i++) {
                  echo "<option value='".$i."'>".$i."</option>";
                }
                ?>
                </select>
                月

                <select name="birD"> 
                 <?php
                for($i=1;$i<=31;$i++) {
                  echo "<option value='".$i."'>".$i."</option>";
                }
                ?>
                </select>
                日
              </td>
            </tr>
            <tr>
              <td>地址</td>
              <td>
                <input type="text" name="address">
              </td>
            </tr>
            <tr>
              <td>行動電話</td>
              <td>
                <input type="text" name="mobile">
              </td>
            </tr>
            <tr>
              <td>聯絡電話(住)</td>
              <td>
                <input type="text" name="home_phone">
              </td>
            </tr>
            <tr>
              <td>聯絡電話(公)</td>
              <td>
                <input type="text" name="company_phone">
              </td>
            </tr>
            <tr>
              <td>您的職業</td>
              <td>
                <select name="work"> 
                   <option value="資訊軟/硬體業" >資訊軟/硬體業</option>
                   <option value="網際網路" >網際網路</option>
                   <option value="金融/保險/不動產" >金融/保險/不動產</option>
                   <option value="學生" >學生</option>
                   <option value="一般服務業" >一般服務業</option>
                   <option value="娛樂/大眾媒體/出版業" >娛樂/大眾媒體/出版業</option>
                   <option value="批發/零售/餐飲" >批發/零售/餐飲</option>
                   <option value="非營利服務業" >非營利服務業</option>
                   <option value="觀光旅遊業" >觀光旅遊業</option>
                   <option value="物流/通訊業" >物流/通訊業</option>
                   <option value="醫療服務業" >醫療服務業</option>
                   <option value="製造業" >製造業</option>
                   <option value="營建業" >營建業</option>
                   <option value="軍人/公務員" >軍人/公務員</option>
                   <option value="教育/研究" >教育/研究</option>
                   <option value="其他" >其他</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>您的月收入</td>
              <td>
                <select name="income">
                   <option value="15,000以下" >15,000以下</option>
                   <option value="15,000-25,000" >15,000-25,000</option>
                   <option value="25,000-35,000" >25,000-35,000</option>
                   <option value="35,000-45,000" >35,000-45,000</option>
                   <option value="45,000-55,000" >45,000-55,000</option>
                   <option value="55,000-65,000" >55,000-65,000</option>
                   <option value="65,000-75,000" >65,000-75,000</option>
                   <option value="75,000-85,000" >75,000-85,000</option>
                   <option value="85,000-95,000" >85,000-95,000</option>
                   <option value="95,000-105,000" >95,000-105,000</option>
                   <option value="105,000-115,000" >105,000-115,000</option>
                   <option value="115,000-125,000" >115,000-125,000</option>
                   <option value="125,000元以上" >125,000元以上</option>
                </select>

              </td>
            </tr>
            <tr>
              <td>訂閱電子報</td>
              <td>
                <input type="checkbox" value="Y" name="edmyn">您將不定期收到電子報更多優惠訊息
              </td>
            </tr>
            <tr>
              <td>統編</td>
              <td>
                <input type="text" name="vat">
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" class="btn btn-primary" value="送出"></td>
            </tr>
          </table>
          <!-- 內容 -->

      </div>
			<?php
        include("view/include/include_member_menu.php");
      ?>
	   </div>
		</div>
</div>
<nav>
  <ul>
    <li><a href="" title=""></a></li>
  </ul>
</nav>