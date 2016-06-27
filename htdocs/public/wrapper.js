 
    $(document).ready(function(){
        $.fn.setAllToMaxHeight = function(){
          return this.height(
             Math.max.apply(
                   this, $.map(this, function(e){
                    return $(e).height()
                   }) 
                )
            );
        }
        $('[data-toggle="tooltip"]').tooltip();
        $('#myModal').on('shown.bs.modal', function (e) {
          var $invoker = $(e.relatedTarget);
          $('#email-title').html($invoker.data('email'));
        });
        $('#myModal').on('hidden.bs.modal', function (e) {

          $('#email-title').html("Submit Idea");
        });
        $('a[href="#"]').on('click', function (e) {
            e.preventDefault();
        });
        $('.wrapper').find('a[href="#"]').on('click', function (e) {
            e.preventDefault();
            this.expand = !this.expand;
            $(this).text(this.expand?"Collapse":"Read more");
            $(this).closest('.wFapper').find('.small_div, .big_div').toggleClass('small_div big_div');
            $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
        });
        $('.wrapper').find('a[href="#"]').on('click', function (e) {
            e.preventDefault();
            this.expand = !this.expand;
            $(this).text(this.expand?"Collapse":"Read more");
            $(this).closest('.wrapper').find('.small_div, .big_div').toggleClass('small_div big_div');
            $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
        });
        $('.wrapper').find('a[href="#moreProjects"]').on('click', function (e) {
            e.preventDefault();
            this.expand = !this.expand;
            $(this).text(this.expand?"Collapse":"Display More Projects");
            $(this).closest('.wrapper').find('.small_div, .big_div').toggleClass('small_div big_div');
            $(this).closest('.wrapper').find('.profile_margin, .no_profile_margin').toggleClass('profile_margin no_profile_margin');
        });
    });
    