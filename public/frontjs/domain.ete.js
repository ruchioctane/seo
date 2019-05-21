$(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.extend({
        tloader: function(show,text) {
            if(show=='show'){
             
             $(".tloader").show();
             
             $(".tloader .loading-text").html(text);

            }else{
               $(".tloader").hide();
            }
        }
    });

    $.extend({
        eNotify: function(type,text) {

        var notify = $.notify(text, {
                type: type,
                allow_dismiss: false
            });

        }
    });

    $.fn.serializeFiles = function() {

        var form = $(this),
            formData = new FormData();
            formParams = form.serializeArray();

        $.each(form.find('input[type="file"]'), function(i, tag) {
          $.each($(tag)[0].files, function(i, file) {
            formData.append(tag.name, file);
          });
        });

        $.each(formParams, function(i, val) {
          formData.append(val.name, val.value);
        });

        return formData;
    };


    $.fn._resetForm = function() {
        var form = $(this);
        form.find('input:text, input:password, input:file, select, textarea').val('');
        form.find('input:radio, input:checkbox')
             .removeAttr('checked').removeAttr('selected');
    };


    $('._model-box').on('hidden.bs.modal', function (e) {
        var _model=$(this)[0];
        $(_model)
          .find('input:text, input:password, input:file, select, textarea')
             .val('')
             .end()
          .find("input[type=checkbox], input[type=radio]")
             .prop("checked", "")
             .end();
    });

    //$('#divImgLnk').sortable({handle:".left-section"}); 

    $.fn.textWidth = function(text, font) {
        if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
        $.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));
        return $.fn.textWidth.fakeEl.width();
    };

	$("#_merchant_id").change(function(){
        
        $.tloader("show");
        var merchant_id=$(this).val();
        var page=$(this).data("page");
        $.ajax({
            url: "/admin/list_domains", 
            type:"POST",
            data:{merchant_id:merchant_id},
            success: function(result){
                $("#_domains").html(result.html); //console.log(result); 
                window.location.href="/admin/websites/"+page+"/"+merchant_id;
                $.tloader("hide");  
            }
        });
    });

    $("[name='sub_domain_name']").on("keyup",function(){
         var width=$(this).textWidth();
         $(this).next("#_subdomain").css({"left":width+6});
    });

    $("#subdomain").change(function(){
        init_subdomain_input();
    });
    init_subdomain_length();
    
    init_subdomain_input();
    
    init_themecolors();
    
    init_template_chooser();

//    init_banner();

    init_form_submission();

    init_setup_tabs();

    banner_image_delete();

    init_benifits();

    init_pages();
    
    init_faqs();

});


var submit_form = function(form){
    $.tloader("show","Saving... Please wait.");
    
    var url = form.attr('action');
    
    console.log(form.serializeFiles());

    $.ajax({
           type: "POST",
           url: url,
           processData: false,
           contentType: false,
           data: form.serializeFiles(), // serializes the form's elements.
           success: function(data)
           {
               
                if(data.status==0){
                    $.eNotify("error",data.msg);
                }else{
                    $.eNotify("success",data.msg);
                }

                $.tloader("hide");
           }
    });
};

var init_setup_tabs = function(){
    
    $(".setup_tabs > li").click(function(e){


      var _tab=$(this).attr("id");  

        //$.tloader("show","Saving... Please wait.");

        var url = '/admin/websites/get_data';
        $.ajax({
               type: "POST",
               url: url,
               processData: false,
               contentType: false,
               data: {'tab':_tab}, // serializes the form's elements.
               success: function(data)
               {
                  

                   /*if(data.status==0){
                     alert(data.msg);
                   }*/

               }
        });

    });
    
};

var init_form_submission = function(){

    $(".profile_submit form").submit(function(e){

        var form = $(this);

        submit_form(form);
        

        e.preventDefault(); 

        return false;
    });

    $(".update_password form").submit(function(e){

        var form = $(this);

        submit_form(form);
        

        e.preventDefault(); 

        return false;
    });


    $(".save_profile_image form").submit(function(e){

        var form = $(this);

        submit_form(form);

        e.preventDefault();

        return false;
    });
    
    $(".save_specify_round form").submit(function(e){

        var form = $(this);

        submit_form(form);

        e.preventDefault();

        return false;
    });
    
    $(".save_round_investor form").submit(function(e){

        var form = $(this);

        submit_form(form);

        e.preventDefault();

        return false;
    });

  $(".sector_checkbox , .technology_checkbox , .goal_checkbox").change(function(e){

    $.tloader("show","Saving... Please wait.");
    var form  =  $(".save_options form");
    var url = form.attr('action');
    
    var datapost =  form.serializeArray();
        console.log(datapost);
    $.ajax({
            url: "/saveMyInterestOptions", 
            type:"POST",
            data:{datapost:datapost},
            success: function(result){
                
            }
        });
       e.preventDefault();

       // return false;
   });



    $("._social_media_tab form").submit(function(e){

        var form = $(this);

        submit_form(form);

        e.preventDefault();

        return false;
    });

    $("._seo_tab form").submit(function(e){

        var form = $(this);

        submit_form(form);

        e.preventDefault();

        return false;
    });

    $("._banner_tab form").submit(function(e){

        var form = $(this);

        submit_form(form);

        e.preventDefault();

        return false;
    });

    $("._global_settings_tab form").submit(function(e){

        var form = $(this);

        submit_form(form);

        e.preventDefault();

        return false;
    });

};


var init_subdomain_length = function(){

    var elem=$("[name='sub_domain_name']");

    var length=elem.textWidth();
    
    if(length){
        elem.next("#_subdomain").css({"left":length+6});
    }

};



var init_subdomain_input = function(){

    var elem=$("#subdomain");
    if(elem.val()==1){
        $("._domain_container").hide();
        $("._subdomain_container").show();
    }else{
        $("._subdomain_container").hide();
        $("._domain_container").show();
    }
};


var init_template_chooser = function(){
    var elem=$(".template_container > div");
    elem.click(function(){
        var template=$(this).data("template");  
        elem.removeClass("selected"); 
        $(this).addClass("selected");

        $("#_selected_template").val(template);
    });
};

var init_themecolors = function(){
    var elem=$("#themecolors li");
    elem.click(function(){
        elem.removeClass("current"); 
        $(this).addClass("current");
        var theme_color=$(this).data("theme");    
        $("#_selected_theme").val(theme_color);
    });
};

var init_benifits = function(){

    $("#add_more_benifits").click(function(e){
        
        var len=$(".benifits_container >div.item_row").length;

        var number=len+1;
        
        var html='<div class="white-box dark add-on-wrapper m-t-40 item_row">'+
                        '<div class="tool-box">'+
                            '<a href="javascript:;" class="remove-benifit"><i class="fa fa-trash"></i></a>'+
                        '</div>'+
                        '<div class="form-group">'+
                            '<label><small>&nbsp;</small> Box Title</label>'+
                            '<input type="text" placeholder="Enter question" name="benifits['+number+'][title]" class="form-control">'+
                        '</div>'+
                        '<div class="form-group">'+
                            '<label><small>&nbsp;</small> Box Description</label>'+
                            '<textarea class="form-control" rows="3" placeholder="Answer" name="benifits['+number+'][description]"></textarea>'+
                        '</div>'+
                    '</div>';
        $(".benifits_container").append(html);
    });

    $(".remove-benifit").click(function(e){
        $(this).closest("div.item_row").remove();
    });
};

var init_faqs = function(){

    $(".add_more_faq").click(function(e){
        
        var len=$(".faq_container >div.item_row").length;

        var number=len+1;
        
        var html='<div class="white-box dark add-on-wrapper m-t-40 item_row">'+
                    '<div class="tool-box">'+
                        '<a href="#" class="remove-faq"><i class="fa fa-trash"></i></a>'+
                    '</div>'+
                    '<div class="form-group">'+
                        '<label><small>&nbsp;</small> Question</label>'+
                        '<input type="text" placeholder="Enter question"  name="addon[faq]['+number+'][question]" class="form-control">'+
                    '</div>'+
                    '<div class="form-group">'+
                        '<label><small>&nbsp;</small> Answer</label>'+
                        '<textarea class="form-control" rows="3" placeholder="Answer" name="addon[faq]['+number+'][answer]"></textarea>'+
                    '</div>'+
                '</div>';
        $(".faq_container").append(html);
    });

    $(".remove-benifit").click(function(e){
        $(this).closest("div.item_row").remove();
    });
};


var init_pages = function(){

    

    $("form._page_form").submit(function(e){

        var form = $(this);

        submit_form(form);
        

        e.preventDefault(); 

        return false;
    });

};


var banner_image_delete = function(){

    $(".banner_image_row a._trash").unbind("click").click(function(){
        
        $.tloader("show","Deleting... Please wait.");

        var that=$(this);

        var image_id=that.data("id");
        console.log(image_id);

        var url = '/admin/websites/delete_banner_image';
        $.ajax({
               type: "POST",
               url: url,
               data: {"image_id" : image_id}, // serializes the form's elements.
               success: function(data)
               {
                    

                    if(data.status==0){
                        $.eNotify("error",data.msg);
                    }else{
                        that.closest(".banner_image_row").remove();
                        $.eNotify("success",data.msg);
                    }

                    $.tloader("hide");
               }
        });

    });

};

var render_banner_image = function(data){

      var str='<div class="col-xs-12 m-t-40 banner_image_row">'+
        '<div class="add-on-wrapper col-xs-12">'+
            '<div class="tool-box">'+
                '<a href="javascript:;"><i class="fa fa-arrows-alt"></i></a> <a href="javascript:;" class="_trash" data-id='+data.id+'><i class="fa fa-trash"></i></a>'+
            '</div>'+
            '<div class="row">'+
                '<div class="col-xs-6">'+
                    '<img src="'+data.path+'" class="img-responsive">'+
                '</div>'+
                '<div class="col-xs-6">'+
                    '<div class="form-group">'+
                        '<input type="text" name="data[banner]['+data.id+'][title]" placeholder="Enter link of banner" class="form-control">'+
                    '</div>'+
                    '<div class="form-group">'+
                        '<textarea class="form-control" name="data[banner]['+data.id+'][description]" rows="1" placeholder="Enter description of banner"></textarea>'+
                    '</div>'+
                    '<div class="form-group">'+
                        '<input type="text" name="data[banner]['+data.id+'][link]" placeholder="Enter link of banner" class="form-control">'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+
    '</div>';

    $('.banner_container_grid').append(str);

    banner_image_delete();
};
