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
                required: "��� ���� ����������� ��� ����������",
                minlength: "��� ���� ������ ��������� �� ������ 4 ��������",
                maxlength: "��� ���� ������ ��������� �� ������ 16 ��������"
                
            },
            
            text:{
                
                required: "��� ���� ����������� ��� ����������",
                maxlength: "��� ���� ������ ��������� �� ������ 500 ��������"
                
            },
            
            captcha2:{
                required: "��� ���� ����������� ��� ����������",
                minlength:"��� ���� ������ ��������� �� ������ 5 ��������",
                maxlength: "��� ���� ������ ��������� �� ������ 5 ��������",
                digits: "������� � �������� ������ ��������� ������ �����"
        }
    });
    
});