<!DOCTYPE html>
<html>
<body>

<h1>Example of calculate date month year basis of start end date</h1>

<form>
  <label for="fname">Start Date:</label>
  <input type="date" id="start_date" name="start_date" placeholder="mm-dd-yy"><br><br>
  <label for="lname">End Date:</label>
  <input type="date" id="end_date" name="end_date" placeholder="mm-dd-yy"><br><br>
  <input type="button" onclick="calculate()" value="Calculate"><br/>
  <span>Result:<p id="result"></p></span>
</form>



</body>
</html>
<script>
   function calculate() {
  var fromDate = document.getElementById('start_date').value;
  var start_date_format = fromDate.split("-");
  var start_date = start_date_format[1]+"-"+start_date_format[2]+"-"+start_date_format[0];
  var toDate = document.getElementById('end_date').value;
  var toData_format = toDate.split("-");
  var end_date = toData_format[1]+"-"+toData_format[2]+"-"+toData_format[0];
 

  try {
    document.getElementById('result').innerHTML = '';
    var result = getDateDifference(new Date(start_date), new Date(end_date));
    var getnumofyear,getmoth;
    if (result && !isNaN(result.years)) {
    if(result.years == 0){
        getnumofyear=result.years;
        getmoth=result.months;
       let final_result =getnumofyear+"."+getmoth;
       document.getElementById('result').innerHTML =final_result;
     
    }
    else{
        getnumofyear=result.years;
        getmoth=result.months;
       let final_result =getnumofyear+"."+getmoth;
       document.getElementById('result').innerHTML =final_result;
      
    }
    }
  } catch (e) {
    console.error(e);
  }
}

function getDateDifference(startDate, endDate) {
  if (startDate > endDate) {
    alert('Start date must be before end date');
    return null;
  }
  var startYear = startDate.getFullYear();
  var startMonth = startDate.getMonth();
  var startDay = startDate.getDate();

  var endYear = endDate.getFullYear();
  var endMonth = endDate.getMonth();
  var endDay = endDate.getDate();

  // We calculate February based on end year as it might be a leep year which might influence the number of days.
  var february = (endYear % 4 == 0 && endYear % 100 != 0) || endYear % 400 == 0 ? 29 : 28;
  var daysOfMonth = [31, february, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

  var startDateNotPassedInEndYear = (endMonth < startMonth) || endMonth == startMonth && endDay < startDay;
  var years = endYear - startYear - (startDateNotPassedInEndYear ? 1 : 0);

  var months = (12 + endMonth - startMonth - (endDay < startDay ? 1 : 0)) % 12;

  // (12 + ...) % 12 makes sure index is always between 0 and 11
  var days = startDay <= endDay ? endDay - startDay : daysOfMonth[(12 + endMonth - 1) % 12] - startDay + endDay;

  return {
    years: years,
    months: months,
    days: days
  };
}
</script>
