$('#leftsidebar .list li').click(function(){
    var $this = $(this);
    if(!$this.is('active open'))
    {
        $('#leftsidebar .list li').removeClass('active open').removeData("top");
        $this.addClass('active open').data("top", $this.offset().top);
    }
});