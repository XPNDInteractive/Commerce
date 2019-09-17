
onFilterSelect();
carasoulSingle();

toggleDialog('.drawer-mobile', '.btn-menu-open', '.btn-menu-close');
toggleDialog('.dialog-login', '.open-account-dialog', '.close-account-dialog');
toggleDialog('.dialog-register', '.open-register-dialog', '.close-register-dialog');



function onFilterSelect(){
    var filters = document.querySelectorAll(".side .sub-categories .filter");
    

    for(i = 0; i < filters.length; i++){
        filters[i].addEventListener("click", function(){
            if(!this.classList.contains("custom-checkbox")){
                if(this.childNodes[0].classList.contains('d-none')){
                   
                    this.childNodes[0].classList.remove('d-none');
                    this.childNodes[0].classList.add('d-flex');
                    this.nextElementSibling.value =  this.getAttribute('value')
                }
    
                else{
                    this.childNodes[0].classList.add('d-none');
                    this.childNodes[0].classList.remove('d-flex');
                    this.nextElementSibling = null;
                }
            }
          
            document.querySelector(".side form").submit();

        });
    }
}

function carasoulSingle(){
    $('#mycarousel').carousel({
        interval: 2000
      })
      
      $('.carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        for (var i=0;i<2;i++) {
          next=next.next();
          if (!next.length) {
              next = $(this).siblings(':first');
            }
          
          next.children(':first-child').clone().appendTo($(this));
        }
      });
}

function toggleDialog(dialog, openClassName, closeClassName, toggleClose = false){
    var close =  document.querySelector(closeClassName);
    var open = document.querySelectorAll(openClassName);
    var dialog = document.querySelector(dialog);
   

    if(toggleClose){
        close.style.display = "none";
    }

    for(i =0; i < open.length; i++){

        open[i].addEventListener("click", function(event){
            console.log(open + "clicked");
            event.preventDefault();
    
            var dialogs = document.querySelectorAll(".dialog-active");
            
            for(i = 0; i < dialogs.length; i++){
               
                dialogs[i].classList.remove("dialog-active");
                
            }
    
           
            dialog.classList.add("dialog-active");
            document.body.style.overflowY = "hidden";
    
            if(toggleClose){
                open[0].style.display = "none";
                close.style.display = "inline-block";
            }
    
            return;
        });
    }

    

    if(close !== null){
        close.addEventListener("click", function(event){
     
            document.body.style.overflowY = "";
            dialog.classList.remove("dialog-active");
            if(toggleClose){
                open[0].style.display = "inline-block";
                close.style.display = "none";
            }
    
            return;
        });
    }

  
}

onProductGalleryThumbClick();

function onProductGalleryThumbClick(){
    $("img.product-thumbnail-images").on("click", function(){
        
        $("img.product-thumbnail-images").addClass('p-2');
      $(this).removeClass("p-2");
        
        var color = $(this).data('color');
        var image = $(this).attr('src');
      
        $('.product-image').each(function(key, val){
           
            if($(val).data('color') == color){
               $(val).attr('src', image);
            }
        })
      
        
       
    })
}

onVariantColorClick();
function onVariantColorClick(){
    $("img.variant-color-selector").on("click", function(){
        $("img.variant-color-selector").css('border', 'none');
        $("img.variant-color-selector").addClass('p-1')
        var color = '.variant-color-' + $(this).data('color');
      
        $(this).removeClass('p-1')
        $('.variant').addClass('d-none');
        $(color).removeClass('d-none');
        $('div.variant-size-selector').css('color', '#222');
        $('div.variant-size-selector').css('background', '#fff');
        $('div.variant-size-selector').removeClass("active");
        $('.variable-price').removeClass('d-none');
        $('.selected-price').addClass('d-none');
        $('.selected-price').text('$' + $(this).data('price'));
    })
}

onVariantSizeClick();
function onVariantSizeClick(){
    $("div.variant-size-selector").on("mousedown", function(){
        console.log(this);
        if($(this).hasClass("active") == false){
            $('div.variant-size-selector').removeClass("active");
            $('div.variant-size-selector').css('color', '#222');
            $('div.variant-size-selector').css('background', '#fff');
            $(this).css('background', '#000');
            $(this).css('color', '#fff');
            $('.variable-price').addClass('d-none');
            $('.selected-price').removeClass('d-none');
            $('.selected-price').text('$' + $(this).data('price'));
            $(this).addClass("active");
            return false;
        }

        else if($(this).hasClass("active") == true){
         
            $(this).css('background', '#fff');
            $(this).css('color', '#222');
            $('.price').text('$' + $(this).data('price'));
            $(this).removeClass("active");
            $('.variable-price').removeClass('d-none');
            $('.selected-price').addClass('d-none');
            $('.selected-price').text('$' + $(this).data('price'));
            return false;
        }
      
    })
}

$(".rating-inactive").rate({readonly:true});
$(".rating-average").rate({readonly:true});
