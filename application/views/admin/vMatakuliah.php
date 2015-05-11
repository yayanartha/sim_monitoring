<script>
    function get_dataMatakuliah(url,q)
    {    
        if(!url)
            url = base_url+'admin/matakuliah/get_dataMatakuliah';
        
        $.ajax({
            alert("yess");
            url:url,type:'post',dataType:'json',
            data:{q:q},
            success:function(result){
                $("#tabelMatakuliah tbody").html(result.rows);
                $("ul.pagination").html(result.paging);
                $(".page-info").html(result.page_info);
            }
        });
    } 
    
    function do_searchMatakuliah()
    { 
        get_dataMatakuliah('',$("#searchMatakuliah").val());
    }

    $(function()
    {
        get_dataMatakuliah();
        
        $(document).on('click',"ul.pagination>li>a",function(){
            var href = $(this).attr('href');
            get_dataMatakuliah(href);
            
            return false;
        });
        
        $("#searchMatakuliah").keypress(function(e){
            var key= e.keyCode ? e.keyCode : e.which ;
            if(key==13){ //enter
                do_searchMatakuliah();
            }
            
        });
        
        $("#btn-searchMatakuliah").click(function(){
            do_searchMatakuliah();
            
            return false;
        });
        
    });
</script>
