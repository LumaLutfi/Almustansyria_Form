
  //function for الرقم الجامعي
  function num_validate(evt) {
    var theEvent = evt || window.event;
  
    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
    // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
 
//form validation
const name = document.forms["vform"]["الاسم الرباعي واللقب"];
const motherName = document.forms["vform"]["اسم الام الثلاثي"];
const birthday = document.forms["vform"]["تاريخ التولد"];
const gender = document.forms["vform"]["الجنس"]
const city = document.forms["vform"]["المحافظة"]
const street = document.forms["vform"]["المحلة"]
const alley = document.forms["vform"]["الزقاق"]
const house = document.forms["vform"]["دار"]
const status = document.forms["vform"]["الحالة الزوجية"]
const university = document.forms["vform"]["الجامعة"]
const college = document.forms["vform"]["الكلية"]
const department = document.forms["vform"]["القسم"]
const unit = document.forms["vform"]["الشعبة او الوحدة"]
const major = document.forms["vform"]["الاختصاص العام"]
const position = document.forms["vform"]["العنوان الوظيفي"]
const posDate = document.forms["vform"]["تاريخ الحصول على العنوان الوظيفي"];
const countryIssued = document.forms["vform"]["الدولة المانحة لاعلى شهادة"];
const uniIssued = document.forms["vform"]["الجامعة المانحة لاعلى شهادة"];
const firstPositionDate = document.forms["vform"]["تاريخ اول تعيين"];

const name_error = document.getElementById('name_error')
const motherName_error = document.getElementById('motherName_error');
const birthday_error = document.getElementById('birthday_error');
const gender_error = document.getElementById('gender_error');
const city_error = document.getElementById('city_error');
const street_error = document.getElementById('street_error');
const alley_error = document.getElementById('alley_error');
const house_error = document.getElementById('house_error');
const status_error = document.getElementById('status_error');
const uni_error = document.getElementById('uni_error');
const coll_error = document.getElementById('coll_error');
const dep_error = document.getElementById('dep_error');
const unit_error = document.getElementById('unit_error');
const major_error = document.getElementById('major_error');
const position_error = document.getElementById('position_error');
const posDate_error = document.getElementById('posDate_error');
const countryIssued_error = document.getElementById('countryIssued_error');
const uniIssued_error = document.getElementById('uniIssued_error');
const firstPositionDate_error = document.getElementById('firstPositionDate_error');

name.addEventListener("blur", nameVerify, true);
motherName.addEventListener("blur", motherNameVerify, true);
birthday.addEventListener("blur", birthdayVerify, true);
city.addEventListener("blur", cityVerify, true);
street.addEventListener("blur", streetVerify, true);
alley.addEventListener("blur", alleyVerify, true);
house.addEventListener("blur", houseVerify, true);
status.addEventListener("blur", statusVerify, true);
university.addEventListener("blur", uniVerify, true);
college.addEventListener("blur", collVerify, true);
department.addEventListener("blur", depVerify, true);
unit.addEventListener("blur", unitVerify, true);
major.addEventListener("blur", majorVerify, true);
position.addEventListener("blur", positionVerify, true);
posDate.addEventListener("blur", posDateVerify, true);
countryIssued.addEventListener("blur", countryIssuedVerify, true);
uniIssued.addEventListener("blur", uniIssuedVerify, true);
firstPositionDate.addEventListener("blur", firstPositionDateVerify, true);

function Validate(){
 if(name.value == ""){
   name.style.border = "1px solid red";
   name_error.textContent = "الاسم الرباعي مطلوب";
   name.focus();
   return false;
 }
 if(motherName.value == ""){
  motherName.style.border = "1px solid red";
  motherName_error.textContent = "اسم الام مطلوب";
  motherName.focus();
  return false
}
if(birthday.value == ""){
  birthday.style.border = "1px solid red";
  birthday_error.textContent = "تاريخ التولد مطلوب";
  birthday.focus();
  return false;
 }
 if((gender[0].checked == false) && (gender[1].checked == false)){
  gender_error.textContent = "الجنس مطلوب";
  return false;
  }
  if(city.value == ""){
    city.style.border = "1px solid red";
    city_error.textContent = "المحافظة مطلوبة";
    city.focus();
    return false;
 }
 if(street.value == ""){
  street.style.border = "1px solid red";
  street_error.textContent = "المحلة مطلوبة";
  street.focus();
  return false;
}
if(alley.value == ""){
  alley.style.border = "1px solid red";
  alley_error.textContent = "الزقاق مطلوب";
  alley.focus();
  return false;
}
if(house.value == ""){
  house.style.border = "1px solid red";
  house_error.textContent = " رقم الدار مطلوب";
  house.focus();
  return false;
}
if(status.selectedIndex == 0){
  status.style.border = "1px solid red";
  status_error.textContent = " الحالة الزوجية مطلوبة";
  return false;
  }
if(university.value == ""){
    university.style.border = "1px solid red";
    uni_error.textContent = " اسم الجامعة مطلوب";
    university.focus();
    return false;
    }
if(college.value == ""){
      college.style.border = "1px solid red";
      coll_error.textContent = " اسم الكلية مطلوب";
      college.focus();
      return false;
    }
if(department.selectedIndex == 0){
    department.style.border = "1px solid red";
    dep_error.textContent = " القسم مطلوب";
    return false;
    }
if(unit.selectedIndex == 0){
  unit.style.border = "1px solid red";
  unit_error.textContent = " الشعبة مطلوبة";
  return false;
  }
  if(major.value == ""){
    major.style.border = "1px solid red";
    major_error.textContent = " الاختصاص العام مطلوب";
    major.focus();
    return false;
  }
  if(position.value == ""){
    position.style.border = "1px solid red";
    position_error.textContent = " العنوان الوظيفي مطلوب";
    position.focus();
    return false;
  }
  if(posDate.value == ""){
    posDate.style.border = "1px solid red";
    posDate_error.textContent = "تاريخ الحصول على العنوان الوظيفي مطلوب";
    posDate.focus();
    return false;
   }
  if(countryIssued.value == ""){
    countryIssued.style.border = "1px solid red";
    countryIssued_error.textContent = "الدولة المانحة لاعلى شهادة مطلوبة";
    countryIssued.focus();
    return false;
  }
  if(uniIssued.value == ""){
    uniIssued.style.border = "1px solid red";
    uniIssued_error.textContent = "الجامعة المانحة لاعلى شهادة مطلوبة";
    uniIssued.focus();
    return false;
  }
  if(firstPositionDate.value == ""){
    firstPositionDate.style.border = "1px solid red";
    firstPositionDate_error.textContent = "تاريخ اول تعيين مطلوب";
    firstPositionDate.focus();
    return false;
   }
}


function nameVerify(){
 if(name.value !=""){
   name.style.border = "1px solid rgb(93, 143, 236)";
   name_error.innerHTML="";
   return true;
  }
}
function motherNameVerify(){
  if(motherName.value !=""){
    motherName.style.border = "1px solid rgb(93, 143, 236";
    motherName_error.innerHTML="";
    return true;
  }
}
function birthdayVerify(){
  if(birthday.value !=""){
    birthday.style.border = "1px solid rgb(93, 143, 236)";
    birthday_error.innerHTML="";
    return true;
  }
}
function genderVerify(){
  document.getElementById('gender_error').innerHTML = '';
}
function cityVerify(){
  if(city.value !=""){
    city.style.border = "1px solid rgb(93, 143, 236)";
    city_error.innerHTML="";
    return true;
  }
}
function streetVerify(){
  if(street.value !=""){
    street.style.border = "1px solid rgb(93, 143, 236)";
    street_error.innerHTML="";
    return true;
  }
}
function alleyVerify(){
  if(alley.value !=""){
    alley.style.border = "1px solid rgb(93, 143, 236)";
    alley_error.innerHTML="";
    return true;
  }
}
function houseVerify(){
  if(house.value !=""){
    house.style.border = "1px solid rgb(93, 143, 236)";
    house_error.innerHTML="";
    return true;
  }
}
function statusVerify(){
  document.getElementById('status_error').innerHTML="";
    status.style.border = "1px solid rgb(93, 143, 236)";
}
function uniVerify(){
  if(university.value !=""){
    university.style.border = "1px solid rgb(93, 143, 236)";
    uni_error.innerHTML="";
    return true;
  }
}
function collVerify(){
  if(college.value !=""){
    college.style.border = "1px solid rgb(93, 143, 236)";
    coll_error.innerHTML="";
    return true;
  }
}
function depVerify(){
  document.getElementById('dep_error').innerHTML="";
    department.style.border = "1px solid rgb(93, 143, 236)";
}
function unitVerify(){
  document.getElementById('unit_error').innerHTML="";
  department.style.border = "1px solid rgb(93, 143, 236)";
}
function majorVerify(){
  if(major.value !=""){
    major.style.border = "1px solid rgb(93, 143, 236)";
    major_error.innerHTML="";
    return true;
  }
}
function positionVerify(){
  if(position.value !=""){
    position.style.border = "1px solid rgb(93, 143, 236)";
    position_error.innerHTML="";
    return true;
  }
}
function posDateVerify(){
    if(posDate.value !=""){
      posDate.style.border = "1px solid rgb(93, 143, 236)";
      posDate_error.innerHTML="";
      return true;
    }
}
function countryIssuedVerify(){
  if(countryIssued.value !=""){
    countryIssued.style.border = "1px solid rgb(93, 143, 236)";
    countryIssued_error.innerHTML="";
    return true;
  }
}
function uniIssuedVerify(){
  if(uniIssued.value !=""){
    uniIssued.style.border = "1px solid rgb(93, 143, 236)";
    uniIssued_error.innerHTML="";
    return true;
  }
}
function firstPositionDateVerify(){
  if(firstPositionDate.value !=""){
    firstPositionDate.style.border = "1px solid rgb(93, 143, 236)";
    firstPositionDate_error.innerHTML="";
    return true;
  }
}
//reset form
function reset() {
  document.getElementById("myForm").reset();
}
