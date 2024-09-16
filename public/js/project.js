$(document).ready(function() {
    $(".slab").show();

    var postURL = "<?php echo url('addmore'); ?>";
    var j = $('.appval').val();
    var i = j - 1;
    var z = 1;
    $('#add').click(function() {
        z++;
        $('#dynamic_field').append('<input type="hidden" value="' + z + '" name="bed_no[]" /><div class="col-md-12  gtn" id="mxrow' + i + '" style="margin-left: -255 px!important;"><div class="form-group row"><label for="first-name-column" name="bed_no[]" class="col-12 col-form-label text-md-left">Bed No.' + z + '</label><input type="text" class="maxx form-control name_list maximum' + i + '" placeholder="Bed no" min="0" name="bed_name[]" id="' + i + '" required/><input type="hidden" value="-1" name="gid[]" id="gid"/></div></div><div class="col-md-12" style="margin-top:2.5pc;"  id="rmv' + i + '"><div class="form-group row"><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove" style="    margin-top: -27px; margin-left:670px;">X</button></div></div>');
        i++;
    });
    $(document).on('click', '.btn_remove', function() {
        z--
        var button_id = $(this).attr("id");
        $('#mxrow' + button_id + '').remove();
        $('#mnrow' + button_id + '').remove();
        $('#rmv' + button_id + '').remove();
    });
});


