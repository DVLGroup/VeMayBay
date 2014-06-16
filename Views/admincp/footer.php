	
        
        <footer style="margin-bottom: 50px;">
        	
        </footer>

	  	<script type="text/javascript">
	        $(function() {
	            var pgurl = window.location.href.substr( window.location.href.lastIndexOf("/") + 1 );
	            $("#nav-admincp ul li a").each(function(){
	                var href = $(this).attr("href");
	                var ctr = href.substr( href.lastIndexOf("/") + 1 ) ;
	                if(ctr == pgurl || ctr == '' )
	                    $(this).parent().addClass("active");
	            });
	        });
	    </script>
    </body>
</html>