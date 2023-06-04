$(document).ready(function () {
    $('#dtHorizontalVerticalExample').DataTable({
      "scrollX": true,
      "scrollY": 200,
    });
    $('.dataTables_length').addClass('bs-select');
  });

$(document).ready(function() {
    $(".cards .card img").click(function() {
        console.log(this.id);
    });
});