<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>地址添加</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="/js/jquery.min.js"></script>
    <script src="/css/bootstrap.min.js"></script>
    <script src="/js/distpicker.data.js"></script>
    <script src="/js/distpicker.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
	 <!-- 地址选择 --><!-- 地址选择 --><!-- 地址选择 --><!-- 地址选择 -->
    <div style="width: 830px;height: 330px;position: absolute;left: 555px;top: 160px" class="add2">
      <form action="/addressadd" method="post">
        <div style="position: relative;top: 25px;">
          <div data-toggle="distpicker">
            <div class="form-group">
              <label class="sr-only" for="province1">Province</label>
              <select class="form-control" id="province1" name="p_address1"></select>
            </div>
            <div class="form-group">
              <label class="sr-only" for="city1">City</label>
              <select class="form-control" id="city1" name="p_address2"></select>
            </div>
            <div class="form-group">
              <label class="sr-only" for="district1">District</label>
              <select class="form-control" id="district1" name="p_address3"></select>
            </div>
          </div>
        </div>
        <div style="position: absolute;top: 175px;">
          详细地址：<input type="text" name="p_address" style="width: 700px;height: 44px;"><br><br>
          收&nbsp;件&nbsp;&nbsp;人：<input type="text" name="p_name" style="width: 700px;height: 40px;"><br><br>
          收件电话：<input type="text" name="p_phone" style="width: 700px;height: 40px;"s><br><br>
        </div>
        {{csrf_field()}}
        <div style="position: absolute;top: 350px;width: 400px">
          <input type="hidden" name="u_id" value="{{$u_id}}">
          <input type="submit" value="提交" class="btn btn-success">
          <a class="btn btn-success" href="/Homepay">取消</a>
        </div>
      </form>
      <div style="position: absolute;top: 5px;right: 5px;cursor: pointer;" class="tuichu"></div>
    </div>
</body>

</html>