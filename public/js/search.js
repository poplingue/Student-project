(function () {

    $(document).ready(function (e) {

        $("#search").on('keyup', function () {

            var list = $("#table").html();
            var input = $(this);
            var url = input.data('url');

            var token = input.next().val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': token
                }
            });

            if (input.val().length > 0) {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: input.serialize(),
                    dataType: 'json',
                    beforeSend: function () {
                        $("#table").empty();
                    },
                    success: function (data) {

                        if (data.posts.length > 1)
                            var list = $("#table").html();

                        var html = '';

                        for (var i = 0; i < data.posts.length; i++) {

                            html = +'<tr class="success">'
                            + '<td><input class="action" name="posts[]" type="checkbox" value="11"></td>'
                            + '<td><button disabled="disabled" class="btn btn-success"></button></td>'
                            + '<td><button disabled="disabled" class="btn btn-warning">post</button></td>'
                            + '<td><a href="http://laravel5.local/post/'+data.posts[i].id+'"><span class="glyphicon glyphicon-eye-open"></span></a></td>'
                            + '<td><span class="glyphicon glyphicon-edit"></span> <a href="http://laravel5.local/post/'+data.posts[i].id+'/edit">jtjtj</a></td>'
                            + '<td>16-03-2015 08:33:40 </td>'
                            + '<td>17/03/2015</td>'
                            + '<td></td>'
                            + '<td> <a href="http://laravel5.local/category/2">Vagrant</a> <a href="http://laravel5.local/category/3">AngularJS</a></td>'
                            + '<td></td>'
                            + '<td></td>'
                            + '</tr>'
                        }

                        console.log(html);
                        $("#table").html(html);
                    }
                });
            }

        });

        $('.action').each(function () {
            $(this).prop('checked', false);
        });
        $('input[name=selected]').on('click', function () {

            if (this.checked) {
                $('.action').each(function () {
                    $(this).prop('checked', true);
                });
            } else {
                $('.action').each(function () {
                    $(this).prop('checked', false);
                });
            }
        });
        $('#form-dashboard').submit(function () {
            if ($('select[name=action]').val() == 'delete') {
                var result = confirm("Confirm to delete post");
                return result;
            }

            return true;

        });


        e.preventDefault();
    });
})();



