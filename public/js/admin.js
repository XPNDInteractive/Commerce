menuToggle();
chart('visitorsChart');
chart('salesChart');
chart('atvChart');
chart('altChart');
chart('salesChart2');
chart('salesChart3');
setTabsContentHeight();

$('.sidebar .collapse').on('shown.bs.collapse', function (e) {
   
    var h = $(this).prev().children()[0];
    $(h).addClass('d-none');

    var h = $(this).prev().children()[1];
    $(h).removeClass('d-none');
   
    
})

$('.sidebar .collapse').on('hidden.bs.collapse', function (e) {
    var h = $(this).prev().children()[0];
    $(h).removeClass('d-none');
    

    var h = $(this).prev().children()[1];
    $(h).addClass('d-none');
})

$('.list-group .collapse').on('shown.bs.collapse', function (e) {
    
    $(this).prev().children('i.fa-angle-down').addClass('d-none');
    $(this).prev().children('i.fa-angle-up').removeClass('d-none');
})

$('.list-group .collapse').on('hidden.bs.collapse', function (e) {
    $(this).prev().children('i.fa-angle-down').removeClass('d-none');
    $(this).prev().children('i.fa-angle-up').addClass('d-none');
})

function menuToggle(){
    $(document).on('click', 'button.menu-toggle', function(e){
        e.preventDefault();
        var side = $('.sidebar');

        if(side.hasClass('d-md-block')){
            side.removeClass('d-md-block');
            setTabsContentHeight();
           
        }

        else{
            side.addClass("d-md-block");
            setTabsContentHeight();
        }
    })
}


function chart(id){
    var el = document.getElementById(id);
    if(el != undefined || el !== null){
        var ctx = el.getContext('2d');

        var pvrLineGradient = ctx.createLinearGradient(0, 0, 0, 200);
        pvrLineGradient.addColorStop(0, 'rgba(0,0,0,0)');
        pvrLineGradient.addColorStop(1, 'rgba(0,0,0,0)');
        var liteLineData = {
            labels  : [ "January 1", "January 5", "January 10", "January 15", "January 20", "January 25" ],
            datasets: [ {
                label                    : "Sold",
                fill                     : true,
                lineTension              : 0.4,
                backgroundColor          : pvrLineGradient,
                borderColor              : "#95cb5b",
                borderCapStyle           : 'butt',
                borderDash               : [],
                borderDashOffset         : 0.0,
                borderJoinStyle          : 'miter',
                pointBorderColor         : "#fff",
                pointBackgroundColor     : "#4f5275",
                pointBorderWidth         : 2,
                pointHoverRadius         : 6,
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor    : "#95cb5b",
                pointHoverBorderWidth    : 2,
                pointRadius              : 4,
                pointHitRadius           : 5,
                data                     : [ 13, 28, 39, 24, 43, 19 ],
                spanGaps                 : false
            } ]
        };
        var chart = new Chart(ctx, {
            type   : 'line',
            data   : liteLineData,
            options: {
                tooltips: {enabled: false},
                legend  : {display: false},
                scales  : {
                    xAxes     : [ {
                        display  : false,
                        ticks    : {fontSize: '11', fontColor: '#969da5'},
                        gridLines: {color: 'rgba(0,0,0,0.0)', zeroLineColor: 'rgba(0,0,0,0.0)'}
                    } ], yAxes: [ {display: false, ticks: {beginAtZero: true, max: 55}} ]
                }
            }
        });
    }
  
   
}
onTableCheckAll();

function onTableCheckAll(){
    $(".checkAll").on("change", function(){
        if(this.checked){
            $('table tbody tr td input').prop("checked", true);
            
            if($(".delete-btn").hasClass("d-none")){
                $(".delete-btn").removeClass("d-none");
            }
        }

        else{
            $('table tbody tr td input').prop("checked", false);

            if($(".delete-btn").hasClass("d-none") == false){
                $(".delete-btn").addClass("d-none");
            }
        }

    })
}
onRowCheck();
function onRowCheck(){
    $('table tbody tr td input').on("change", function(){
        var checked = 0;

        $('table tbody tr td input').each(function () {
            if(this.checked){
                checked++;
            }
        });


        if(checked > 0 && $(".delete-btn").hasClass("d-none")){
            $(".delete-btn").removeClass("d-none");
        }

        else if(checked == 0 && $(".delete-btn").hasClass("d-none") == false){
            $(".delete-btn").addClass("d-none");
        }
    })
}



$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

onSelectListItemClick();

function onSelectListItemClick(){
    $(".select-list-item").on('click', function(){
        if($($(this).children()[0]).is(":checked"))
        {
            $($(this).children()[0]).attr('checked', false);
            $(this).removeClass("active");
           
        }

        
        else{
            $($(this).children()[0]).attr('checked', true);
            $(this).addClass("active");
           
        }
        
    })
}
onSelectOneListItemClick();
function onSelectOneListItemClick(){
    $(".select-one-list-item").on('click', function(){
        if($($(this).children()[0]).is(":checked"))
        {
            $(this).parent().children('.select-one-list-item').children("input").prop('checked',false);
            $($(this).children()[0]).prop('checked', false);
            $(this).removeClass("active");
           
        }

        
        else{
            $(this).parent().children('.select-one-list-item').children("input").prop('checked',false);
            $(this).parent().children(".active").removeClass('active');
            $($(this).children()[0]).prop('checked', true);
            $(this).addClass("active");
           
        }
        
    })
}



OnSelectItem();

function OnSelectItem(){
    $(".select-one-item ").on('click', function(){
        $('input.path').val($(this).data().url);
        $('#exampleModal').modal('hide');
    })
}



function setTabsContentHeight(){
    var h = $('.tabs').height() ;
    $('.tab-content').css("height", "calc(100% - "+ h +"px)");
    $('.tab-content').css("overflow", "auto");
}

onImageSelect();
function onImageSelect(){
    $(document).on("click", ".image-select-item",  function(){
        if(!$(this).hasClass('selected')){
            $(this).addClass("selected");
            $(this).children('input').val($(this).children('img').attr('data-id'));
            $(this).parents().eq(4).find(".images").append('<img class="col-sm-12 col-md-3 bg-white border p-2 w-100 h-100" src="'+$(this).children('img').attr('src')+'"/>');
          
        }

        else{
            console.log("remove");
            $(this).removeClass("selected");
            $(this).children('input').val('');
            var srcImg = $(this).children('img').attr('src');
            $(this).parents().eq(3).next().children().each(function(key, val){
               if($(val).attr('src') == srcImg){
                   $(val).remove();
               }
            });
        }
        
    });
}

onFeaturedImageSelect();
function onFeaturedImageSelect(){
    $(document).on("click", ".image-select-one-item",  function(){
        $('.selected-img-checkbox').val('');
        if(!$(this).hasClass('selected')){
            $('.image-select-one-item').removeClass("selected");
            $(this).addClass("selected");
            
            
           
            if($(this).parents().eq(4).find(".featured-img").length == 0){
                $(this).parents().eq(4).find(".images").append('<img class="col-sm-12 col-md-12 bg-white border p-2 w-100 h-100 featured-img" src="'+$(this).children('img').attr('src')+'"/>');
                $(this).parents().eq(4).find(".images").append("<input class='featured-image-input' type='hidden' name='product-media' value='"+$(this).children('img').attr('data-id')+"'/>");
            }

            else{
              
                $(this).parents().eq(4).find(".featured-img").prop('src', $(this).children('img').attr('src'));
                $(this).parents().eq(4).find(".featured-image-input").val($(this).children('img').attr('data-id'));
            }
           
          
        }

        else{
            
            $(this).removeClass("selected");
            $(this).children('input').val('');
            var srcImg = $(this).children('img').attr('src');
            console.log($(this).parents().eq(3));
            $(this).parents().eq(3).next().children().each(function(key, val){
                console.log(val)
                $(val).remove();
            });
        }
        
    });
}

onAddVariantClick();

var variants = 0;
function onAddVariantClick(){
    

    $('.add-variant-btn').on("click", function(){
        var cloned = $('.hidden-variant').clone();
        
        cloned.removeClass('d-none');
        cloned.removeClass('hidden-variant');
        
        cloned.find('input').each(function(key, val){
            if($(val).attr('name') !== 'media'){
                $(val).attr('name',  'variant['+variants+']['+$(val).attr('name')+']');
            }

            else{
                $(val).attr('name',  'variant['+variants+']['+$(val).attr('name')+'][]');
            }
           
        });

        cloned.find('select').each(function(key, val){
            $(val).attr('name',  'variant['+variants+']['+$(val).attr('name')+']');
        });
       
        cloned.find('button').each(function(key, val){
            $(val).attr('data-variant', variants);
        });
      
        $('.variants').append(cloned);
        variants++;
    })
}

addMedia();
addVariantMedia();
function addVariantMedia(){
    $(document).on("click", "button.variant-add-media", function(e) {
        $('#variant-media').modal('show');
        $("#variant-media").attr('data-variant', $(this).attr('data-variant'));
    });
}

function addMedia(){
    $(document).on("click", "button.add-media", function(e) {
       $(this).parent().append("<input class='media-input d-none' type='file' name='media[]'/>");
       var input = $(this).parent().children().last().trigger('click');
       $(input).on('change', function(){
            $(this).parent().next().append('<img class="col-4 bg-white border p-2 w-100 h-100" src=""/>');
            readURL($(this).parent().next().children().last(), this);
       })
    });
}

function readURL(input) {
    console.log(input);
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $(element).attr('src', e.target.result);
            
        }
        reader.readAsDataURL(input.files[0]);
    }
}
onVariantClickSave();
function onVariantClickSave(){
    $(document).on("click", '.modal button.variant-save', function(){
        $.post($("#variant-form").attr('action'), 
            $("#variant-form").serialize(), 
            function(data) {
                
                if(data.message == "Success"){
                    $('#exampleModal').modal("hide");
                }

               
            }
        );
    })
}

var rows = 0;
var columns = 0;
onAddSizeChartColumnButtonClick();
function onAddSizeChartColumnButtonClick(){
   
    $(document).on("click", '.add-column-sizechart', function(){
        var col = $('.size-table thead tr th.column-clone').clone();
       $('.size-table thead tr').removeClass('d-none');
       
        
        col = col.removeClass('d-none').removeClass('column-clone');
        //col.find('input').prop('name', 'row['+rows+']['+columns+']');
       
        var rowCol =  $('.size-table tbody tr td.column-clone').first().clone();
        
       col.find('input').prop('name', 'col[]');

   

        $('.size-table tbody tr').append(rowCol);
        $('.size-table thead tr').append(col);



        $('.size-table tbody').children().each(function(rowIndex, rowElement){
            $(rowElement).children().find('input.row-input').each(function(rowColIndex, rowColumnElement){
                $(rowColumnElement).prop('name', 'row['+rowIndex+']['+rowColIndex+']');
            });
        });
       
       
        columns++;

        
    })
}
onAddSizeChartRowButtonClick();
function onAddSizeChartRowButtonClick(){
   
    $(document).on("click", '.add-row-sizechart', function(){
       
        var row = $('.size-table tbody tr.row-clone').clone();
        row.removeClass('d-none').removeClass('row-clone');
        $(row.children()[0]).text(rows + 1).css('vertical-align', 'middle');
        $(row).children().each(function(key , kid){
            $(kid).find('input.row-input').prop('name', 'row['+rows+']['+(key - 1)+']');
        });

        $('.size-table tbody').append(row);
        columns = 0;
        rows++;
    })
}

$(".rating").rate({});
$(".rating-inactive").rate({readonly:true});
$(".rating").on("change", function(ev, data){
    $('.rating-input').attr('value', data.to);
});
