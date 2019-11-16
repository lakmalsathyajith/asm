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
//            theme: 'bootstrap4'
        })
    });
</script>