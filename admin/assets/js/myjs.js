$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    var siturl = window.location.href;
    $('li.sub-menu ul.sub li a').each(function(){
        var usl = $(this);
        if(siturl == usl.attr('href')){
            usl.parent().addClass('active');
            usl.closest('ul.sub').css({display:'block'});
            usl.closest('ul.sub').prev().addClass('active');
        }
    });

    
    $('.form-submit').submit(function(e){
        e.preventDefault();
        $('.mynotification').html(null);
        $('.preloader').show();
        var frm = $(this);
        frm.find('.form-control').removeClass('border border-danger');
        $.ajax({
            url: $(this).attr('action'),
            data: new FormData(this),
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            dataType: 'json',
            success: function(result){
                $('.preloader').hide();
                if(result.success == true){
                    if(result.rlink){
                       window.location.href = result.rlink;
                    }else if(result.alert){
                        frm.after(result.alert);
                        frm.remove();
                    }else{ location.reload();}
                    
                }else{
                    $.each(result.message, function(key,value){
                        var elm1 = $('input[name='+key+'], select[name='+key+'], textarea[name='+key+']');
                        $('.mynotification').append(value);
                        if(value.length > 0){
                            elm1.addClass('border border-danger');
                        }
                    });
                    $('.mynotification').show().addClass('bg-danger text-white');
                   setTimeout(function(){
                        $('.mynotification').fadeOut(300);
                    }, 1000);
                }
            }
        });
    });
    
    $('.form-submit1').submit(function(e){
        e.preventDefault();
        var elm = $(this);
        $('.form_error').remove();
        $.ajax({
            url: $(this).attr('action'),
            data: new FormData(this),
            type: 'post',
            processData: false,
            cache: false,
            contentType: false,
            dataType: 'json',
            success: function(result){
                if(result.success == true){
                    elm.after(result.alert);
                    elm.remove();
                }else{
                    $.each(result.message, function(key,value){
                        var elm = $('input[name='+key+']');
                        elm.before(value);
                    });
                }
            }
        });
    });
    
    $('.cate_delete, .delet_tag').click(function(e){
        e.preventDefault();
        var elm = $(this);
        $.ajax({
            url : elm.data('lnk'),
            type: 'post',
            success: function(data){
                location.reload();
            }
        });
    });
    
    $('.delete-bttn').click(function(){
        var id = $(this).data('id');
        $('input[name=deleteid]').val(id);
    });
});
function previreImg(input, id) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#'+id).attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}