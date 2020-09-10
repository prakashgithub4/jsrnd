<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<button class="add">Add</button>
<div>
    <form>
       <div  id="test_0">
        <input type="text"  class="dynamic" value="1"/><button class='remove' type='Button' onclick='deleteelm(0)'>Delete</button>
       </div>
    </form>


</div>
<script>
    function deleteelm(id){
        $('#test_'+id+'').remove();
        $('.dynamic').each(function(idx, elem){
        $(elem).val(idx+1);
        }); 
    }

let count = 2;
$(".add").on('click',function(){
  $("<div  id='test_"+count+"'><input type='text' class='dynamic' value="+count+"><button class='remove' type='Button' onclick='deleteelm("+count+")'>Delete</button><div>").appendTo("form")
  ++count;
});
</script>

