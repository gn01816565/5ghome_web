<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		    <li><a href="index.php">首頁</a></li>
        <li><a href="?pageData=member_info">會員中心</a></li>
		    <li class="active">密碼修改</li>
		  </ol>
      <div class="col-md-9 product-model-sec">

        <!-- 內容 -->
          <table class="table table-striped" width="100%" style="margin-top:15px;">
            <tr>
              <th colspan="4" class="info">密碼修改</th>
            </tr>
            <tr>
              <td>輸入舊的密碼</td>
              <td>
                <input type="password">
              </td>
            </tr>
            <tr>
              <td>輸入新密碼</td>
              <td><input type="password"></td>
            </tr>
            <tr>
              <td>再次輸入新密碼</td>
              <td><input type="password"></td>
            </tr>
            
            <tr>
              <td colspan="4" align="center">
                <button class="btn" onclick="location.href='?pageData=member_info'">回上一頁</button>
                <input type="submit" class="btn btn-primary" value="送出">
              </td>
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