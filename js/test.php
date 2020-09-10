<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table>
    <button class="add">Add</button>
    
  <tr>
    <td class="dynamic">1</td>
    <td>Static One Data</td>
    <td><button>Delete</button></td>
  </tr>
  <tr>
    <td class="dynamic">2</td>
    <td>Static Two Data</td>
    <td><button>Delete</button></td>
  </tr>
  <tr>
    <td class="dynamic">3</td>
    <td>Static Three Data</td>
    <td><button>Delete</button></td>
  </tr>
  <tr>
    <td class="dynamic">4</td>
    <td>Static Four Data</td>
    <td><button>Delete</button></td>
  </tr>
  <tr>
    <td class="dynamic">5</td>
    <td>Static Five Data</td>
    <td><button>Delete</button></td>
  </tr>
  <tr>
    <td class="dynamic">6</td>
    <td>Static Six Data</td>
    <td><button>Delete</button></td>
  </tr>
  <tr>
    <td class="dynamic">7</td>
    <td>Static Seven Data</td>
    <td><button>Delete</button></td>
  </tr>
  <tr>
    <td class="dynamic">8</td>
    <td>Static Eight Data</td>
    <td><button>Delete</button></td>
  </tr>
  <tr>
    <td class="dynamic">9</td>
    <td>Static Nine Data</td>
    <td><button>Delete</button></td>
  </tr>
  <tr>
    <td class="dynamic">10</td>
    <td>Static Ten Data</td>
    <td><button>Delete</button></td>
  </tr>
</table>
<script>
$('button').on('click', function(){
  var row = $(this).closest('tr');
  var dynamicValue = $(row).find('.dynamic').text();
  dynamicValue = parseInt(dynamicValue);
  row.remove();
  $('.dynamic').each(function(idx, elem){
    $(elem).text(idx+1);
  }); 
});
let count = 1;
$(".add").on('click',function(){
  $('<tr><td class="dynamic">'+count+'</td><td>Static Ten Data</td><td><button>Delete</button></td></tr>').appendTo("table")
  count++;
});
</script>

