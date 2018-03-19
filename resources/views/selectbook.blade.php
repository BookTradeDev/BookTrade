
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>




<div class="container">
<h2>Select Course</h2>
<select class="course form-control" style="width:500px;" name="course"></select>
</div>

<script type="text/javascript">
    $('.course').select2({
        placeholder: 'Select Course',
        ajax: {
            url: '/selectbook-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data){
                return{
                    results: $.map(data,function(item){
                        return{
                            text: item.courseNumber,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>


</body>
</html>










