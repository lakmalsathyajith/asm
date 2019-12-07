

<script type="text/javascript" src="{{ url('/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/adminlte.min.js') }}"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        tinymce.init({
            selector: '.tmce',
            plugins: ['code'],
            toolbar: [{
                name: 'document',
                items: [
                    'code',
                    'newdocument',
                    'copy',
                    'cut',
                    'paste',
                    'remove',
                    'removeformat'
                ]
            }, {
                name: 'history',
                items: [
                    'undo',
                    'redo'
                ]
            }, {
                name: 'formatting',
                items: [
                    'styleselect',
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough'
                ]
            }, {
                name: 'indentation',
                items: [
                    'outdent',
                    'indent'
                ]
            }, {
                name: 'styles',
                items: [
                    'formatselect',
                    'fontselect',
                    'fontsizeselect',
                    'forecolor',
                    'backcolor',
                ]
            }, {
                name: 'alignment',
                items: [
                    'alignleft',
                    'aligncenter',
                    'alignright',
                    'alignjustify'
                ]
            }, {
                name: 'lists',
                items: [
                    'bullist',
                    'numlist',
                    'checklist'
                ]
            }]
        });

        $('.multi-select').select2({
            theme: 'bootstrap4'
        });

        $('.custom-file-input').on('change',function(){
            const fileName = $(this).val().replace('C:\\fakepath\\', " ");
            
            $(this).next('.custom-file-label').html(fileName);
        })

        $('.dlt-record').click(function () {
            const confirmed = confirm("Do you really want to delete this record?");
            const segment = $(this).attr('data-segment');
            const id = $(this).attr('data-id');
            const appUrl = "{{env('APP_URL')}}";
            const token = $('#csrf-token').attr('content');


            if(confirmed && segment && id) {
                $.post( `${appUrl}/admin/${segment}/${id}`, {
                    _token: token,
                    _method: 'DELETE'
                }).done(function( data ) {
                    if(data) {
                        const parsed = JSON.parse(data);
                        if (parsed.status
                        && parsed.status.toLowerCase() === 'success') {
                            if (parsed.errors
                                && parsed.errors.length === 0) {
                                $("#" + segment + "_" + id).fadeOut();
                                alert(parsed.message);
                                location.reload();
                                return true;
                            } else if (parsed.errors && parsed.errors.length > 0) {
                                alert(parsed.errors[0].message);
                                return true;
                            }
                        }
                    }
                    alert("Something went wrong");
                });
            }
        });
        
        $('#type').on('change', function() {
            const selected = $(this).val();
            if(selected === "APARTMENT") {
                $( "#sub_type" ).prop( "disabled", false );
            } else {
                $( "#sub_type" ).prop( "disabled", true );
                $( "#sub_type" ).val($("#sub_type option:first").val());
            }
            
        })

        $('#state').on('change', function() {
            const appUrl = "{{env('APP_URL')}}";
            const selected = $(this).val();
            $.get( `${appUrl}/admin/suburbs?state=${selected}`).done(function( data ) {
                let response = JSON.parse(data);
                    if(response.data) {
                        $('#suburb').html('');
                        $.each(response.data, function(key, value) {   
                            $('#suburb').append($("<option></option>").attr("value",value).text(value)); 
                        });
                    }
            });
        });

$('.menu-expand-icon').on('click',function(){
    $('body').toggleClass("sidebar-collapse");
    
});


    });
</script>
