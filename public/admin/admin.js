$(document).ready(function () {
    $(".nav-treeview .nav-link, .nav-link").each(function () {
        var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
        var link = this.href;
        if(link == location2){
            $(this).addClass('active');
            $(this).parent().parent().parent().addClass('menu-is-opening menu-open');

        }
    });

    $('.delete-btn').click(function () {
        var res = confirm('Подтвердите действия');
        if(!res){
            return false;
        }
    });
})

tinymce.init({
    selector: '.editor',
    plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    toolbar_mode: 'floating',
    toolbar: 'undo redo | formatselect | ' +
    'bold italic backcolor | alignleft aligncenter ' +
    'alignright alignjustify | bullist numlist outdent indent | ' +
    'removeformat | ',
    relative_urls : false,
    height : "480",
    file_picker_callback : elFinderBrowser,
    advlist_bullet_styles : "circle"
});
   
   function elFinderBrowser (callback, value, meta) {
    tinymce.activeEditor.windowManager.openUrl({
        title: 'File Manager',
        url: '/elfinder/tinymce5',
        /**
         * On message will be triggered by the child window
         * 
         * @param dialogApi
         * @param details
         * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
         */
        onMessage: function (dialogApi, details) {
            if (details.mceAction === 'fileSelected') {
                const file = details.data.file;
                
                // Make file info
                const info = file.name;
                
                // Provide file and text for the link dialog
                if (meta.filetype === 'file') {
                    callback(file.url, {text: info, title: info});
                }
                
                // Provide image and alt text for the image dialog
                if (meta.filetype === 'image') {
                    callback(file.url, {alt: info});
                }
                
                // Provide alternative source and posted for the media dialog
                if (meta.filetype === 'media') {
                    callback(file.url);
                }
                
                dialogApi.close();
            }
        }
    });
}

//add/remove slider
//let button_add = document.querySelector( '.slider__add' );
    
 //   button_add.addEventListener( "click", function () {
        
  //  });
    $(document).ready(function() {
        $('.hide').hide(0);
    });
    $(document).on('click', '.slider__remove', function() {
        //$("#"+$(".slider__remove").data('slider')).hide("slow");
        let id = $('.form-group.slider .slider-item.show').last().attr('id');
        $('.form-group.slider .slider-item.show').last().hide("slow").removeClass('show').addClass('hide');
        $('#'+id+' input').val('');
        if($('.form-group.slider .slider-item.show').length<6) {
            $('.slider__add').removeClass('btn-secondary');
            $('.slider__add').addClass('btn-info');
        };
    });
    $(document).on('click', '.slider__add', function() {
        let id = $('.form-group.slider .slider-item.hide').first().attr('id');
        $('.form-group.slider .slider-item.hide').first().show("slow").removeClass('hide').addClass('show');
        $('#'+id+' input').val('');
        if($('.form-group.slider .slider-item.show').length>=6) {
            $('.slider__add').addClass('btn-secondary');
            $('.slider__add').removeClass('btn-info');
        };
    });

    $(document).ready(function() {
        $('.hide').hide(0);
    });
    $(document).on('click', '.gallery__remove', function() {
        let id = $('.form-group.gallery .gallery-item.show').last().attr('id');
        $('.form-group.gallery .gallery-item.show').last().hide("slow").removeClass('show').addClass('hide');
        $('#'+id+' input').val('');
        if($('.form-group.gallery .gallery-item.show').length<20) {
            $('.gallery__add').removeClass('btn-secondary');
            $('.gallery__add').addClass('btn-info');
        };
    });
    $(document).on('click', '.gallery__add', function() {
        let id = $('.form-group.gallery .gallery-item.hide').first().attr('id');
        $('.form-group.gallery .gallery-item.hide').first().show("slow").removeClass('hide').addClass('show');
        $('#'+id+' input').val('');
        if($('.form-group.gallery .gallery-item.show').length>=20) {
            $('.gallery__add').addClass('btn-secondary');
            $('.gallery__add').removeClass('btn-info');
        };
    });
    