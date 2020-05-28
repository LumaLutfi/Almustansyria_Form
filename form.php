<?php include 'php/imageUpload.php' ;
 include 'php/employees.php';?>
<!doctype html>
<html lang="en">
<head>
       <title>استمارة تسجيل منتسبي كليةالادارة والاقتصاد </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/stylePrint.css" rel="stylesheet" media="print">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script> -->
<script src="https://www.solodev.com/assets/phone/jquery.mobilePhoneNumber.js"></script>
<!------code for jQuery datepicker-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!------------------------------------>
<script src="JavaScript/jQuery.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Make older browsers aware of new HTML5 layout tags -->
  <script>'header aside article footer section figure figcaption'.replace(/\w+/g, function (n) { document.createElement(n) })
  </script>
<style></style>
</head>
<body dir="rtl" >
<ul align='right'>  
       <a href="./php/login.php">Sign in</a>    
      </ul>  
      <br><br>  
<div id="wrapper">
<!-- Header is logo, title, or other info at top of each page -->
<div class="header">
    <img src="logo/logo1.jpg" class="logo"/>
        <legend ><h1> بيانات منتسب </h1> </legend>
              <div id="logobox" >
                <div style="padding-right:40px;padding-bottom: 10px;">وزارة التعليم العالي والبحث العلمي</div>
                <div style="padding-right:80px;padding-bottom: 10px;"> الجامعة المستنصرية</div>
                <div style="padding-right:80px;">كلية الادارة والاقتصاد </div>     
              </div>                   
</div>

        <div class="container">
        <div class="columns">
              <aside class="left"> <!--left column-->        
             </aside>

<form class="form" name="vform" method="POST" action="form.php" 
onsubmit="return Validate()" id="myForm" enctype="multipart/form-data">
<fieldset>
<legend><h2> بيانات شخصية </h2> </legend><br><br>
<!-- user profile picture-->
 <!-- <?php if (!empty($msg)): ?>
<p class="imageUpload"><?php echo $msg;?></p>
<?php endif; ?> -->
<div class="text">
اضف صورتك هنا</p></div>
    <div>    
    <img src="placeholder.png" id="profileDisplay" onclick="triggerClick()"/>
    <input type="file" id="profileImage" name="picture" onchange="displayImage(this)" 
    style="display:none;"> 
</div>   
<div id="name_div">
<lable><br>الاسم الرباعي واللقب</br></lable>
    <input type="text" name="fname" id="name">
        <div id="name_error" class="val_error"></div>
</div>
<lable><br>اسم الام الثلاثي</br></lable>
      <input type="text" name="motherName" id="motherName">
        <div id="motherName_error" class="val_error"></div>

<lable><br>تاريخ التولد</br></lable>
<input type="text" id="datepicker1" placeholder="DD/MM/YYYY" class="datpicker" name="birthday">
       <div id="birthday_error" class="val_error"></div>
            
        <label> <br>الجنس</br></label>
            <hr style="width:20%; float:right"></hr><br>
              <div>
                  <input type="radio" name="gender" value="ذكر" onclick="genderVerify()" style="position:relative;right: 70px;" id="male" />
                  <label for="radio6">ذكر</label>
              </div>
              <div >
                  <input type="radio" name="gender" value="انثى"onclick="genderVerify()"style="position:relative;right:70px;" id="femal" />
                  <label for="radio7">انثى</label>
            </div>
            <div id="gender_error" class="val_error"></div>    
            
<label><br>المحافظة</br></label>
    <input type="text" name="province" id="city"> 
    <div id="city_error" class="val_error"></div>

<label><br>المحلة</br></label>
    <input type="text" name="way" id="street">
    <div id="street_error" class="val_error"></div>

<label><br>الزقاق</br></label>
    <input type="text" name="alley" id="alley"> 
    <div id="alley_error" class="val_error"></div>

 <lable><br>دار</br></lable>
    <input type="text" name="house" id="houseNo">
    <div id="house_error" class="val_error"></div>
    
<label><br> الحالة الزوجية<br/></label>
<select class="select-css" id="stutas" name="stutas">
 <option value="0"> الحالة الزوجية </option>
 <option value="متزوج"> متزوج  </option>
<option value="متزوجة"> متزوجة </option>
<option value="ارمل">  ارمل</option>
<option value="ارملة"> ارملة </option>
<option value="مطلق"> مطلق </option>
<option value="مطلقة"> مطلقة </option>
<option value="اعزب"> اعزب </option>
<option value="عزباء"> عزباء </option>
</select> 
<div id="status_error" class="val_error"></div>


<label><br>الجامعة</br></label>
    <input type="text" name="university" id="uni"> 
    <div id="uni_error" class="val_error"></div>

<label><br>الكلية</br></label>
    <input type="text" name="college" id="coll">
    <div id="coll_error" class="val_error"></div>

<label><br> القسم</br></label>
<select class="select-css" id="dep" name="department">
<option> القسم </option>
<option> محاسبة </option>
<option> ادارة اعمال </option>
<option> احصاء </option>
<option> اقتصاد </option>
<option> العلوم المالية والمصرفية </option>
<option> لايوجد </option>
</select> 
<div id="dep_error" class="val_error"></div>

<label><br> الشعبة او الوحدة </br></label>
<select class="select-css" id="major" name="unit">
<option>الشعبة او الوحدة</option>
<option> مكتب العميد </option>
<option> مكتب معاون العميد للشؤون الادارية  </option>
<option> مكتب معاون العميد للشؤون العلمية والدراسات العلبا </option>
<option>  مكتب معاون العميد لشؤون الطلبة والتسجيل  </option>
<option>  الموارد البشرية </option>
<option> الترقيات العلمية  </option>
<option> الدراسات والتخطيط  </option>
<option> البحث والتطوير </option>
<option> المجلة الاقتصادية </option>
<option> مجلة كلية الادارة والاقتصاد  </option>
<option> الدراسات العليا </option>
<option> التدريب الصيفي </option>
<option> شؤون المواطنين  </option>
<option> الحاسبة الالكترونية  </option>
<option> الرقابة والتدقيق الداخلي  </option>
<option> مكتب امانة مجلس الكلية  </option>
<option> الشؤون العلمية  </option>
<option> المكتبة ومجانية التعليم  </option>
<option> شؤون الديوان </option>
<option> التعليم المستمر </option>
<option> التاهيل والتوظيف والمتابعة  </option>
<option> الارشاد النفسي والتوجيه التربوي </option>
<option> الشؤون القانونية  </option>
<option> الاعلام والعلاقات العامة </option>
<option> ضمان الجودة وتقييم الاداء  </option>
<option> لايوجد </option>
</select> 
<div id="unit_error" class="val_error"></div>

<label><br>الاختصاص العام</br></label>
    <input type="text" id="genaral_major" name="genaralMajor">
    <div id="major_error" class="val_error"></div>

<label><br>الاختصاص الدقيق</br></label>
    <input type="text" id="specific_major" name="specificMajor"> 

<label><br> اللقب العلمي </br></label>
  <select class="select-css" id="address" name="title">
    <option>اللقب العلمي</option>
    <option>استاذ</option>
    <option> استاذ مساعد</option>
    <option> مدرس </option>
    <option> مدرس مساعد </option>
    <option> استاذ متمرس</option>
    <option> لايوجد </option>
  </select> 

<lable><br>تاريخ الحصول على اللقب </br></lable>
 <input type="text" id="datepicker2" placeholder="DD/MM/YYYY" class="datpicker" name="titleDate">

<label><br>العنوان الوظيفي</br></label>
  <input type="text" id="position" name="position">
  <div id="position_error" class="val_error"></div>
  
<label><br>تاريخ الحصول على العنوان الوظيفي</br></label>
    <input type="text" id="datepicker3" placeholder="DD/MM/YYYY" class="datpicker" name="positionDate">
    <div id="posDate_error" class="val_error"></div>

 <lable><br>الدولة المانحة لاعلى شهادة</br></lable>
  <input type="text" name="issuedCertificateCountry" id="country_issued">
  <div id="countryIssued_error" class="val_error"></div>

  <label><br>الجامعة المانحة لاعلى شهادة</br></label>
  <input type="text" name="issuedCertificateUniversity" id="uni_issued">
  <div id="uniIssued_error" class="val_error"></div>
  
  <label><br>تاريخ اول تعيين</br></label>
  <input type="text" id="datepicker5" placeholder="DD/MM/YYYY" class="datpicker" name="firstPositionDate">
  <div id="firstPositionDate_error" class="val_error"></div>

 <lable><br>تاريخ اعادة التعيين</br></lable>
 <input type="text" id="datepicker6" placeholder="DD/MM/YYYY" class="datpicker" name="reEmploymentDate"> 
    <div id="reEmploymentDate_error" class="val_error"></div>

<label> <br>الاجازات</br></label>
 <select class="select-css" id="vacation" name="vacation">
    <option> الاجازات</option>
    <option> دراسية </option>
    <option> امومة </option>
    <option> بدون راتب </option>
    <option> مرضية  </option>
    <option> لاتوجد </option>
 </select>
 <div id="vacation_error" class="val_error"></div>

    <label> <br>صنف الموظف</br></label>
    <hr style="width:20%; float:right"></hr><br>
      <div>
          <input type="radio" name="employeeType" onclick="employeeTypeVerify()"
          style="position:relative;right:90px" id="employee" />
          <label for="radio6">موظف</label>
      </div>
      <div>
          <input type="radio" name="employeeType" onclick="employeeTypeVerify()"
          style="position:relative;right:90px; " id="instructor" />
          <label for="radio7">تدريسي</label>
     </div><br>
     <div id="employeeType_error" class="val_error"></div>

<lable><br>رقم الامر الجامعي بالتعيين</br></lable>
 <input type="text" onkeypress="return num_validate(event)" id="id_hire" name="idHire">
   <div id="issuedNo_error" class="val_error"></div>

 <lable><br>تاريخ الامر</br></lable>
 <input type="text" id="datepicker7" placeholder="DD/MM/YYYY" id="hire_issued_date" name="hireIsuuedDate">
 <div id="issuedDate_error" class="val_error"></div>
 
 <lable><br>الدرجة</br></lable>
 <select class="select-css" id="emp_level" name="empLevel">
    <option> الدرجة</option>
    <option> الاولى</option>
    <option> الثانية </option>
    <option> الثالثة </option>
    <option> الرابعة </option>
    <option> الخامسة </option>
    <option> السادسة </option>
    <option> السابعة </option>
    <option> الثامنة </option>
    <option> التاسعة </option>
    <option> العاشرة </option> 
    </select>
    <div id="empLevel_error" class="val_error"></div>

 <label><br>المرحلة </br></label>
 <select class="select-css" id="emp_stage" name="empStage">
    <option> المرحلة</option>
    <option> الاولى</option>
    <option> الثانية </option>
    <option> الثالثة </option>
    <option> الرابعة </option>
    <option> الخامسة </option>
    <option> السادسة </option>
    <option> السابعة </option>
    <option> الثامنة </option>
    <option> التاسعة </option>
    <option> العاشرة </option> 
</select>
<div id="empStage_error" class="val_error"></div>

<label><br> اعلى شهادة</br></label>
<select class="select-css" id="eduction" name="higherEducation">
    <option> اعلى شهادة </option>
    <option> ابتداتية  </option>
    <option> متوسطة </option>
    <option> اعدادية </option>
    <option> دبلوم  </option>
    <option> ماجستير </option>
    <option> دبلوم عالي  </option>
    <option> دكتوراه </option>
</select>
<div id="education_error" class="val_error"></div>

<label><br>رقم الموبايل</br></label>
 <input type="text" id="text1" name="cellphone"  
 placeholder="01234567890" onkeyup="phoneValidate()"></li><br>
 <label id="lbltext" style="color: red;visibility:hidden">Invalid</label>
 <br>
 <div id="phoneNo_error" class="val_error"></div>

 <label><br>المنصب الاداري</br></label>
 <select class="select-css" id="empPosition" name="empPosition">
    <option>المنصب الاداري</option>
    <option> عميد </option>
    <option> معاون العميد للشؤون الادارية   </option>
    <option> معاون العميد للشؤون العلمية  </option>
    <option> معاون العميد لشؤون الطلبة  </option>
    <option> رئيس قسم  </option>
    <option> مقرر قسم  </option>
    <option> مسؤول شعبة  </option>
    <option> مسؤول وحدة  </option>
    <option> لايوجد  </option>  
    </select>
    <div id="empPosition_error" class="val_error"></div>
 
 <label><br>تاريخ استلامه</br></label>
 <input type="text"  id="datepicker8" placeholder="DD/MM/YYYY" name="positionDate"> <br>
 <div id="posGivenDate_error" class="val_error"></div>

 <div><p>اضافة المستمسكات المطلوبة</p>

<input type="file" name="files[]" multiple require><br>
</div><br>
<?php include 'php/docUpload.php' ?>
<div>
<input type="submit" value="ارسال" name="submit" class="submit">
<input type="button" value="تعديل" class="btn">
<input type="button" value="الغاء" onclick="reset()" class="btn">
<a href="./php/profiles.php"><input type="button" value="استعراض بيانات" class="btn"></a>

</div>

</fieldset>
</form>

<aside class="right">
</aside>
</div>
<footer>
    <script src="JavaScript/validate.js"></script> 
    <script src="JavaScript/script.js"></script>     
</footer>
</div>

</body>
</html>