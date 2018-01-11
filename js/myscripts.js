$(document) . ready(function (){
    
    
    $('.iframe iframe').attr('width',' 560');
    $('.iframe iframe').attr('hight',' 315');
    
    $(".comment-form").validate({
        
        rules:{
            
            author:{
                required: true, 
                minlength: 4, 
                maxlength: 16
                
            },
            
            text:{
                required: true,
                maxlength: 500
                
            },
            
            captcha2:{
                required: true,
                digits: true,
                minlength: 5,
                maxlength: 5,
                
                
            },
        },
           
        messages:{
            
            author:{
                required: "Ёто поле об€зательно дл€ заполнини€",
                minlength: "Ёто поле должно содержать не меньше 4 символов",
                maxlength: "Ёто поле должно содержать не больше 16 символов"
                
            },
            
            text:{
                
                required: "Ёто поле об€зательно дл€ заполнини€",
                maxlength: "Ёто поле должно содержать не больше 500 символов"
                
            },
            
            captcha2:{
                required: "Ёто поле об€зательно дл€ заполнини€",
                minlength:"Ёто поле должно содержать не меньше 5 символов",
                maxlength: "Ёто поле должно содержать не больше 5 символов",
                digits: "символы с картинки должны содержать только цифры"
        }
    });
    
});