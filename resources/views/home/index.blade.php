<select name="" id="select_one">
    <option value="1">Satu</option>
    <option value="2">Dua</option>
</select>

<input type="text" name="" id="input-field-id">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script>
    jQuery(document).ready(function($) {
        jQuery('#select_one').change(function() {
            $("#input-field-id").val("");
            var val = $("#select_one").val();
            $('#input-field-id').val($('#input-field-id').val() + val);
        });
    });
</script>