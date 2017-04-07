<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		    <li><a href="index.php">首頁</a></li>
        <li><a href="?pageData=member_info">會員中心</a></li>
		    <li class="active">填寫維修單</li>
		  </ol>
      <div class="col-md-9 product-model-sec">

        <!-- 內容 -->
          <table class="table table-striped" width="100%" style="margin-top:15px;">
            <tr>
              <th colspan="4" class="info">填謝維修單</th>
            </tr>
            <tr>
              <td>產品序號</td>
              <td>
                <input type="text">
              </td>
            </tr>
            <tr>
              <td>故障描述</td>
              <td>
                <textarea name="" id="" cols="30" rows="10" style="width:100%"></textarea>
              </td>
            </tr>
            
            <tr>
              <td colspan="4" align="center">
                <button class="btn" onclick="location.href='?pageData=member_repairstep_list'">回上一頁</button>
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