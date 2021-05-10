<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <style>
        #ourmanna-verse {
            padding: 10px;
            margin:10px;
            background: rgba(0, 0, 0, 0.3);
            border-color: rgba(0, 0, 0, 0.3);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        #mannaverse {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        #mannaverse-reference:before {
            content: "- ";
        }
        #mannaverse-reference {
            text-align: right;
            font-size: 12px;
        }
        #mannaverse-version {
            color: #ddd;
        }
    </style>
    <title>Bible Study Request Form</title>
</head>
<body>
    <div class="container text-center">
        <h1>Bible Study Request Form</h1>
        <form action="/bible-study-request-form" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="inputName">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-md-3">
                <label for="inputContact" class="form-label">Contact No.</label>
                <input type="text" name="contact" class="form-control" id="inputContact" placeholder="09123456789">
            </div>
            <div class="col-md-3">
                <label for="inputBirthdate" class="form-label">Birthdate</label>
                <input type="date" name="birthdate" class="form-control" id="inputBirthdate">
            </div>
            <div class="col-md-4">
                <label for="inputReligion" class="form-label">Religion</label>
                <select name="religion" class="form-control">
                    <option selected>Select Religious Affiliation</option>
                    <option value="MCGI">MCGI</option>
                    <option value="Catholic">Catholic</option>
                    <option value="SDA">SDA</option>
                    <option value="INC">INC</option>
                    <option value="Oneness">Oneness</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputBsdate" class="form-label">Bible Study Date</label>
                <input type="date" name="bsdate" class="form-control" id="inputBsdate">
            </div>
            <div class="col-md-2">
                <label for="inputBstime" class="form-label">Bible Study Time</label>
                <input type="time" name="bstime" class="form-control" id="inputBstime">
            </div>
            <div class="col-md-10">
                <label for="inputBsaddress" class="form-label">Bible Study Location</label>
                <input type="text" name="bsaddress" class="form-control" id="inputBsaddress">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="container">
        <div id="ourmanna-verse">
            <div id="mannaverse-container">
                <p id="mannaverse">
                    For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life.
                </p>
                <p id="mannaverse-reference">
                    John 3:16
                    <small id="mannaverse-version"><i>(NIV)</i></small>
                </p>
            </div>
        </div>
        <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
    </div>
</body>
</html>