(function($){

    var init = function(){

        $('#register').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                method:$(this).attr('method'),
                data:$(this).serialize(),
                dataType:"JSON"
            }).done(function(data) {
                if(data.status == 'error'){
                    alert(data.error);
                }
               
            });
           
        });
    }

    init();
})(jQuery)