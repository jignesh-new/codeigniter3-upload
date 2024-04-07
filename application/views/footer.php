<footer class="fixed-bottom bg-dark text-white text-center p-3">
Fixed Footer
</footer>
   
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
   $(document).ready(function () {
        function loadDynamicContent(target) {
            $('#dynamic-content').html('<div class="text-center">Loading...</div>');
            
            $.ajax({
                url: '<?php echo base_url("ajaxcontroller/load_content"); ?>',
                type: 'GET',
                data: { target: target },
                success: function (data) {
                    $('#dynamic-content').html(data);
                },
                error: function () {
                    $('#dynamic-content').html('<div class="text-center">Error loading content</div>');
                }
            });
        }

        $('#sidebar a').on('click', function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            loadDynamicContent(target);
        });
    });
</script>

<script>    
    $(document).ready(function () {
        // Using delegated event handling to handle dynamically loaded content
        $(document).on('click', '#submitBtn', function () {
            var formData = new FormData($('#myForm')[0]);
            
            if($('#email').val()!=''){
                $("#emailvld").hide();
            }else{
                $("#emailvld").show(); 
            }
            if($('#textarea').val()!=''){
                $("#textareavld").hide();
            }else{
                $("#textareavld").show();
            }
        });
    }); 
</script>
</body>
</html>