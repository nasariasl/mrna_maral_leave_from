<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>ابزارهای کاربردی و مفید</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css" media="screen">
    <link href="dist/fonts/font-face.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="demo/custom.min.css">
    <link rel="icon" sizes="32x32" href="favicon.png">
      <link rel="stylesheet" href="dist/css/persian-datepicker.min.css"/>
      <script src="dist/js/jquery.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="rtl">
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
        <div class="container">
            <a href="../" class="navbar-brand">ابزارهای کاربردی و مفید</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

            </div>
        </div>
    </div>
    <div class="container">
            <!-- Containers-->


          <div class="page-header">
            <h1>ایجاد برگه مرخصی</h1>
            <br>
          </div>
         
          
<?php if(isset($_POST) && !empty($_POST)) { ?>	  
<div class="alert alert-success" style=" text-align: left !important;">
<?php

//		 foreach($dns_full as $element){
//			echo implode("<br/>\n", $element);
//		 }
		 
echo '<br>';

foreach ($output_array[0] as $element)	
echo $element . '<br>';
print_r($_POST);


		  ?>
</div>
<?php } ?>
	  
 <script type="text/javascript">
  $(document).ready(function() {
    $('.example1').persianDatepicker({
    observer: true,
    format: 'YYYY/MM/DD',
    altField: '.observer-example-alt'
});
  });
</script>




<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#saati">مرخصی ساعتی</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#roozaneh">مرخصی روزانه</a>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active show" id="saati">

	<form class="form-search" action="mor/index.php" method="post" >
	<fieldset>

    <div class="form-group" style="display:none;">
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="mor-Radio" class="custom-control-input" value="saat" checked="">
            <label class="custom-control-label" for="customRadio1">مرخصی ساعتی</label>
        </div>
    </div>

<div class="form-group row">
    <div class="col-md-4">
    <label class="col-form-label col-form-label-md" for="inputLarge">نام و نام خانوادگی</label>
    <input class="form-control form-control-md" type="text" placeholder="نام و نام خانوادگی" id="inputLarg" name="mor-name" required="required">
    </div>
</div>

<div class="form-group row">
     <div class="col-md-4">
        <div class="col-xs-2">
            <label for="exampleSelect1">واحد سازمانی</label>
            <select class="form-control form-control-md" name="mor-vahed" required="required">
                <option>پشتیبانی فنی</option>
                <option>فروش</option>
             </select>
        </div>    
     </div>
</div>

<div class="form-group row">
     <div class="col-md-4">
            <div class="col-xs-2">
            <label for="exampleSelect1">روز مرخصی در هفته</label>
            <select class="form-control form-control-md" name="mor-day" required="required">
                <option>شنبه</option>
                <option>یک‌شنبه</option>
                <option>دو‌شنبه</option>
                <option>سه‌شنبه</option>
                <option>چهار‌شنبه</option>
                <option>پنج‌شنبه</option>
                <option>جمعه</option>
            </select>
        </div>    
     </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
        <label class="col-form-label col-form-label-md" for="inputLarge">تاریخ مرخصی</label>
        	<input type="text" class="form-control form-control-md example1" name="mor-date" required="required"/>
    </div>
</div>


<style>
.gj-picker.timepicker {
    direction: ltr !important;
}
</style> 
    

<div class="form-group row">
     <div class="col-md-4">
    <label class="col-form-label col-form-label-md" for="inputLarge">از ساعت</label>
    <input class="form-control form-control-md" id="timepicker" width="276" name="mor-start-time" required="required"/> </div>
    <div class="col-md-4">
        <label class="col-form-label col-form-label-md" for="inputLarge">تا ساعت</label>
        <input class="form-control form-control-md" id="timepicker2" width="276" name="mor-end-time" required="required" />    </div>
</div>

<div class="form-group row">
     <div class="col-md-4">
            <div class="col-xs-2">
            <label for="exampleSelect1">جمع ساعت مرخصی</label>
            <select class="form-control form-control-md" name="mor-num" required="required">
                <option value="1">1 ساعت</option>
                <option value="2">2 ساعت</option>
                <option value="3">3 ساعت</option>
            </select>
        </div>    
     </div>
</div>

        <script>
        $('#timepicker').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#timepicker2').timepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

<div class="form-group row">
    <div class="col-md-4">
        <label class="col-form-label col-form-label-md" for="inputLarge">تاریخ درخواست مرخصی</label>
        	<input type="text" class="form-control form-control-md example1" name="mor-form-date"  required="required"/>
    </div>
</div>

	</fieldset>
	

<button  class="btn btn-primary btn-lg btn-block" type="submit" >ایجاد برگه مرخصی</button>
		 </form>
    </div>
    
    <div class="tab-pane fade" id="roozaneh">
	<form class="form-search" action="mor/index.php" method="post" >
	<fieldset>

    <div class="form-group" style="display:none;">
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="mor-Radio" class="custom-control-input" value="rooz" checked="">
            <label class="custom-control-label" for="customRadio1">مرخصی روزانه</label>
        </div>
    </div>

<div class="form-group row">
    <div class="col-md-4">
    <label class="col-form-label col-form-label-md" for="inputLarge">نام و نام خانوادگی</label>
    <input class="form-control form-control-md" type="text" placeholder="نام و نام خانوادگی" id="inputLarg" name="mor-name" required="required">
    </div>
</div>

<div class="form-group row">
     <div class="col-md-4">
        <div class="col-xs-2">
            <label for="exampleSelect1">واحد سازمانی</label>
            <select class="form-control form-control-md" name="mor-vahed" required="required">
                <option>پشتیبانی فنی</option>
                <option>فروش</option>
             </select>
        </div>    
     </div>
</div>

<div class="form-group row">
     <div class="col-md-4">
    <label class="col-form-label col-form-label-md" for="inputLarge">از تاریخ</label>
    <input class="form-control form-control-md example1" width="276" name="mor-start-time" required="required"/> </div>
    <div class="col-md-4">
        <label class="col-form-label col-form-label-md" for="inputLarge">تا تاریخ</label>
        <input class="form-control form-control-md example1" width="276" name="mor-end-time" required="required" />    </div>
</div>

<div class="form-group row">
     <div class="col-md-4">
            <div class="col-xs-2">
            <label for="exampleSelect1">جمع روز مرخصی</label>
            <select class="form-control form-control-md" name="mor-num" required="required">
                <option value="1">1 روز</option>
                <option value="2">2 روز</option>
                <option value="3">3 روز</option>
            </select>
        </div>    
     </div>
</div>


<div class="form-group row">
    <div class="col-md-4">
        <label class="col-form-label col-form-label-md" for="inputLarge">تاریخ درخواست مرخصی</label>
        	<input type="text" class="form-control form-control-md example1" name="mor-form-date"  required="required"/>
    </div>
</div>

	</fieldset>
	


   <button  class="btn btn-primary btn-lg btn-block" type="submit" >ایجاد برگه مرخصی</button>
		 </form>
		 

    </div>
</div>

                <footer id="footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <li class="float-lg-right"><a href="#top">بازگشت به بالا</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="dist/js/bootstrap.bundle.min.js"></script>
            <script src="demo/custom.js"></script>
                  <script src="dist/js/persian-date.min.js"></script>
      <script src="dist/js/persian-datepicker.min.js"></script>
       <script src="dist/js/mdtimepicker.js"></script>

          <script type="text/javascript">
	$(document).ready(function(){
        $('#picker33').mdtimepicker({ is24hour: true });
    });
</script>
        </body>
        </html>
