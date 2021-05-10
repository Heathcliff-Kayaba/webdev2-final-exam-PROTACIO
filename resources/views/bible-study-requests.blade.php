<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <title>Bible Study Request</title>
</head>
<body>
    <h1 class="text-center">Bible Study Request</h1>
    <div class="table-responsive text-center align-middle">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Complete Name</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Birthdate</th>
                    <th>Religious Affiliation</th>
                    <th>Bible Study Date</th>
                    <th>Bible Study Time</th>
                    <th>Bible Study Location / Address</th>
                </tr>
            </thead>
            @foreach($bsrequest as $request)
            <tbody>
                <tr>
                    <td>{{$request['id']}}</td>
                    <td>{{$request['name']}}</td>
                    <td>{{$request['email']}}</td>
                    <td>{{$request['contact']}}</td>
                    <td>{{$request['birthdate']}}</td>
                    <td>{{$request['religion']}}</td>
                    <td>{{$request['bsdate']}}</td>
                    <td>{{$request['bstime']}}</td>
                    <td>{{$request['bsaddress']}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <a href="/bible-study-request-form"><button type="button" class="btn btn-primary">Send Request</button></a>
    </div>
</body>
</html>