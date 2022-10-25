<script type="text/javascript">

    $(document).ready(function (){
        $('#btnSubmit').click(function(e){
            e.preventDefault();
           
            let firstname =$('#firstname').val();
            let lastname =$('#lastname').val();
            let username =$('#username').val();
         
            let password =$('#password').val();
          

            $.ajax({
            method:"post",
            url:"register.php",
            data :{
                firstname: firstname,
                lastname: lastname,
                username: username,
                password: password
            },
            dataType:"text",
            success:function(response){
               window.location.href = "http://localhost/register-app/login.php";
            }        
            })
           
        })
        
    })
    
    
</script>