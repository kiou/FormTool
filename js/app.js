$(function(){

    /* Checkbox */
    $(document).on('click','.ft-checkbox',function(e){
        e.preventDefault();

        var ft = $(this);
        var dataFt = ft.attr('data-ft');
        var checkbox = $('input[data-ft="'+dataFt+'"]');

        if(checkbox.is(':checked')){
            checkbox.prop('checked',false);
            ft.removeClass('checked');
        }else{
            checkbox.prop('checked',true);
            ft.addClass('checked');
        }
    });

    /* Radio switch */
    $(document).on('click','.ft-radio-switch',function(e){
        e.preventDefault();

        var ft = $(this);
        var dataFt = ft.attr('data-ft');

        $('input[data-ft="'+dataFt+'"]').not(':checked').prop("checked", true);

        if(ft.hasClass('checked')) ft.removeClass('checked');
        else ft.addClass('checked');
    });

    /* Radio multiple */
    $(document).on('click','.ft-radio',function(e){
        e.preventDefault();

        var ft = $(this);
        var dataFt = ft.attr('data-ft');
        var dataFtGroupe = ft.attr('data-ft-groupe');

        $('input[data-ft="'+dataFt+'"]').prop("checked", true);
        $('.ft-radio[data-ft-groupe="'+dataFtGroupe+'"]').removeClass('checked');

        ft.addClass('checked');
    });

    /* File */
    $(document).on('click','.ft-file',function(e){
        e.preventDefault();

        var ft = $(this);
        var dataFt = ft.attr('data-ft');

        $('input[data-ft="'+dataFt+'"]').click();
    });

    $(document).on('change','input:file',function(){
        var input = $(this);
        var dataFt = input.attr('data-ft');
        var ft = $('.ft-file[data-ft="'+dataFt+'"]');

        var file = input.val().replace(/C:\\fakepath\\/i, '');

        if(file != ""){
            ft.html('<i class="fa fa-upload"></i> '+file);
        }else{
            ft.html('<i class="fa fa-upload"></i> Choisir un fichier');
        }
    });

    /* Select */
    $(document).on('click','.ft-select',function(e){
        e.preventDefault();

        if($(e.target).hasClass('ft-select-default') || $(e.target).hasClass('ft-select')){
            var ft = $(this);
            var dataFt = ft.attr('data-ft');
            var options = ft.find('.ft-select-options');

            if(ft.hasClass('clicked')){
                options.fadeOut('fast');
                ft.removeClass('clicked');
            }else{
                $('.ft-select').removeClass('clicked');
                $('.ft-select-options').hide();

                options.fadeIn('fast');
                ft.addClass('clicked');
            }
        }
    });

    /* Select option */
    $(document).on('click','.ft-select-options span',function(e){
        e.preventDefault();

        var option = $(this);
        var options = option.parent('.ft-select-options');
        var ft = options.parent('.ft-select');
        var dataFt = ft.attr('data-ft');
        var optionValue = option.attr('data-ft-value');
        var optionText = option.text();
        var defaut = ft.find('.ft-select-default');

        defaut.html(optionText);
        options.fadeOut('fast');
        ft.removeClass('clicked');
        $('input[data-ft="'+dataFt+'"]').val(optionValue);

    });

});