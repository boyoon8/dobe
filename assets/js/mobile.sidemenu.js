jQuery(function($) {
    var $btn_side = $('#btn_side'),        
        $side_menu = $('#side_menu'),
        $side_wr = $('#side_menu .side_wr'),
        side_obj = { my : {} },
        is_trans_sup = supportsTransitions();

    var $btn_left_side = $('#btn_left_side'),        
        $left_side_menu = $('#left_side_menu'),
        $left_side_wr = $('#left_side_menu .left_side_wr'),
        left_side_obj = { my : {} },
        is_left_trans_sup = supportsTransitions();

    $side_wr.css({'right':'-250px'});   //초기화
    $left_side_wr.css({'left':'-250px'});   //초기화

    side_obj.destory = function(){
        if ( ! is_trans_sup ) return;
        side_obj.my.destroy();
    }
    side_obj.refresh = function(){
        if ( ! is_trans_sup ) return;
        side_obj.my.refresh();
    }

    left_side_obj.destory = function(){
        if ( ! is_left_trans_sup ) return;
        left_side_obj.my.destroy();
    }
    left_side_obj.refresh = function(){
        if ( ! is_left_trans_sup ) return;
        left_side_obj.my.refresh();
    }

    function iscroll_loaded() {
        if ( is_trans_sup ){
            $side_wr.removeClass('add_side_wr');
            side_obj.my = new IScroll('#isroll_wrap', { bounceTime : 400, mouseWheel: true, click: true, hScroll:false });
        }

        if ( is_left_trans_sup ){
            $left_side_wr.removeClass('add_left_side_wr');
            left_side_obj.my = new IScroll('#left_isroll_wrap', { bounceTime : 400, mouseWheel: true, click: true, hScroll:false });
        }
    }

    $('#isroll_wrap').on('touchmove', function(e){
        e.preventDefault();
    });

    $('#left_iscroll_loaded').on('touchmove', function(e){
        e.preventDefault();
    });

    function supportsTransitions() {
        var b = document.body || document.documentElement,
            s = b.style,
            p = 'transition';

        if (typeof s[p] === 'string') { return true; }

        // Tests for vendor specific prop
        var v = ['Moz', 'webkit', 'Webkit', 'Khtml', 'O', 'ms'];
        p = p.charAt(0).toUpperCase() + p.substr(1);

        for (var i = 0; i < v.length; i++) {
            if (typeof s[v[i] + p] === 'string') { return true; }
        }

        return false;
    }

    $btn_side.on('click', function() {
        if ( ! $(this).data('toggle_enable')) {
            $(this).data('toggle_enable', true);
            $side_menu.show();
            $side_wr.animate({'right': '0px'}, 200, function(){
                height_update($(this));
                iscroll_loaded();
            });
        } else {
            remove_side_data();
        }
    });

    $btn_left_side.on('click', function() {
        if ( ! $(this).data('toggle_enable')) {
            $(this).data('toggle_enable', true);
            $left_side_menu.show();
            $left_side_wr.animate({'left': '0px'}, 200, function(){
                height_update($(this));
                iscroll_loaded();
            });
        } else {
            remove_left_side_data();
        }
    });

    function height_update(target){
        var side_wr_height = target.height();
        $('body').css({'min-height': side_wr_height + 'px'});
    }

    function remove_side_data(){
        $btn_side.data('toggle_enable', false);
        $side_wr.animate({'right': '-250px'}, 160, function(){
            $side_menu.hide();
            $('body').css({'min-height':''});
            side_obj.my.destroy();
        });
    }

    function remove_left_side_data(){
        $btn_left_side.data('toggle_enable', false);
        $left_side_wr.animate({'left': '-250px'}, 160, function(){
            $left_side_menu.hide();
            $('body').css({'min-height':''});
            left_side_obj.my.destroy();
        });
    }

    $('#side_menu .side_wr').on('clickoutside', function(e){
        if ( ! $(e.target).closest('#btn_side').length && $btn_side.data('toggle_enable')){
            remove_side_data();
        }
    });

    $('#left_side_menu .left_side_wr').on('clickoutside', function(e){
        if ( ! $(e.target).closest('#btn_left_side').length && $btn_left_side.data('toggle_enable')){
            remove_left_side_data();
        }
    });

    var clickEventType= 'ontouchend' in document ? 'touchend' : 'click';

    if( clickEventType == 'touchend'){
        $(document).on(clickEventType, function(e){
            if ( $side_wr.has(e.target).length === 0 && $btn_side.data('toggle_enable')){
                remove_side_data();
            }

            if ( $left_side_wr.has(e.target).length === 0 && $btn_left_side.data('toggle_enable')){
                remove_left_side_data();
            }
        });
    }

    $(document).on(clickEventType, '.subopen', function(){
        $submenu = $('.drop-downorder-' + $(this).attr('data-menu-order'));
		$submenu.toggle(function(){
			height_update($side_wr);
            height_update($left_side_wr);
			side_obj.my.refresh();
            left_side_obj.my.refresh();
		});
    });

});
