
function uniformHeight($el) {
    if ($el.length !== 0) {
        var $h_array = [];
        $el.each(function (index) {
            $(this).height("auto");
            $h_array[index] = $(this).height();
        });
        $max = Math.max.apply(null, $h_array);
        $el.each(function (index) {
            $(this).height($max);
        });
    }
}
