<!DOCTYPE html>
<html>
   <head>
      <title>jQuery UI Sortable - Example</title>
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      <style>
         #sortable-1 { list-style-type: none; margin: 0; 
            padding: 0; width: 25%; }
         #sortable-1 li { margin: 0 3px 3px 3px; padding: 0.4em; 
            padding-left: 1.5em; font-size: 17px; height: 16px; }
         .default {
            background: #cedc98;
            border: 1px solid #DDDDDD;
            color: #333333;
         }
      </style>
      
      <script>
         $(function() {
            $( "#sortable-1" ).sortable({
                update:function(event,ui){
                    alert("New position: " + ui.item.index());
                }
            });
         });
      </script>
   </head>
   
   <body>
      <ul id = "sortable-1">
         
      </ul>
   </body>
</html>

<script>
$(document).ready(function(){
   $.ajax({
            url: "http://localhost/multipleimage/multipleimage/api/get_all_items",
            type: 'get',
            datatype: 'json'
        })
        .done(function (data) { 
         $.each(data.data, function(index, value) {
          console.log(value);
          $("#sortable-1").append("<li class ='default'>"+value.name+"</li>");
      
         });

         
           
         })
        .fail(function (jqXHR, textStatus, errorThrown) { 
         console.log('error');
         });
})

</script>