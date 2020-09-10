<!DOCTYPE html>
<html>
<head>

<title>test</title>
</head>
<body onload="readData()">
<div align="center">
<form id="testform" action="" method="post">
    <label>First Name</label><br/>
    <label><input type="text" id="fname" value=""/></label><br/>
    <label>First Name</label><br/>
    <label><input type="text" id="lname" value=""/></label><br/>
    <button type="button" onclick="save()">Submit</button>

</form>
<div>
  <table border="1" id="tabledata">
    <tr>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Action</td>
    </tr>
    
  </table>

</div>
</div>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>




<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAmkhHw7_lHBlE_txhItw9SwczMy40Pc_c",
    authDomain: "test-project-aba07.firebaseapp.com",
    databaseURL: "https://test-project-aba07.firebaseio.com",
    projectId: "test-project-aba07",
    storageBucket: "test-project-aba07.appspot.com",
    messagingSenderId: "270920952436",
    appId: "1:270920952436:web:18f37d3773e7408c7dff21"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  var dataref = firebase.database().ref('user');
</script>
<script>
function save(){
  let fname = document.getElementById('fname').value;
  let lname = document.getElementById('lname').value;

  var newdataref = dataref.push();
  newdataref.set({
    fname:fname,
    lname:lname
  });
  document.getElementById("testform").reset();
  location.reload();
  
}

function readData(){
  var ref = firebase.database().ref("user");

      ref.on("value", function(snapshot) {
      snapshot.forEach(function(childSnapshot) {
        var childData = childSnapshot.val();
        var id=childData.id;
       document.getElementById('tabledata').innerHTML+="<tr><td>"+childData.fname+"</td><td>"+childData.lname+"</td><td><button onclick='updateRecords()'>Update</button></td></tr>";
        //console.log(childData.fname);
      });
    });
   
}
function updateRecords(){
  alert("ok");
}
</script>
</body>
</html>