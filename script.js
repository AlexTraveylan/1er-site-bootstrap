function validerForm(e) {
    var e = e || window.event;
    var k = e.keyCode || e.which;
    if (k == 13 && !e.shiftKey)
    {
        document.forms["form1"].submit();
    }
}

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
