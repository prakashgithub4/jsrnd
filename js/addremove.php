
<div id="mainDiv">
    <div id="one">
        <div class="row">
            <div class="input-field col s1">
                <input class="sno" type="text" name="Sr" value="2">
                <label for="Sr">Sr</label>
            </div>
            <div class="input-field col s2">
                <input id="item_code" type="text" name="item_code">
                <label for="item_code">Set no</label>
            </div>
            <div class="input-field col s3">
                <input id="item_name" type="text" name="item_name">
                <label for="item_name">Rips</label>
            </div>
            
            <div class="input-field col s3">
                <input id="item_name" type="text" name="item_name">
                <label for="item_name">weight</label>
            </div>
            <div class="input-field col s3">
                <input id="item_name" type="text" name="item_name">
                <label for="item_name">Rest</label>
            </div>
            
           
            <div class="input-field col s1"> <a href="#" class="btn-floating waves-effect waves-light add ">Add<i class="mdi-content-add"></i></a>

            </div>
            <div class="input-field col s1"> <a href="#" class="btn-floating waves-effect waves-light delete ">Remove<i class="mdi-content-clear"></i></a>

            </div>
        </div>
    </div>
</div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
    $(".add").click(function () {
        $("#one").clone(true).appendTo("#mainDiv")
            .find('input[type="text"]').val('').end()
        resetNumber();
    });
    $('.delete').click(function () {
        $(this).parents("#one").remove();
        resetNumber()

    });

    function resetNumber() {
        $('.row .s1 input').each(function () {
            console.log($(this));
            $(this).val($('.row').index($(this).closest('.row')) + 1)
        })
    }
});
</script>