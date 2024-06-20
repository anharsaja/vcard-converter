<?php
if (isset($_POST['submit'])){
    echo '<script type="text/javascript">alert("submited")</script>';
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">VCard Generator</h5>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Input Txt</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="file_upload" type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Admin Name Profile</label>
                                <div class="input-group mb-3">
                                    <input name="admin" id="" type="text" class="form-control" placeholder="ADMIN-" aria-label="ADMIN-" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">_{urutan}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Navy Name Prefix</label>
                                <div class="input-group mb-3">
                                    <input name="navy" type="text" class="form-control" placeholder="NAVY-" aria-label="ADMIN-" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">_{urutan}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Member Name Profile</label>
                                <div class="input-group mb-3">
                                    <input name="member" type="text" class="form-control" placeholder="CAPT GANTENG-" aria-label="ADMIN-" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">_{urutan}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">File Name Prefix</label>
                                <div class="input-group mb-3">
                                    <input name="prefix_file" type="text" class="form-control" placeholder="CAPT GANTENG 21-" aria-label="ADMIN-" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Previx.vcf</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Max Member Data (per file)</label>
                                <div class="input-group mb-3">
                                    <input name="count_data" type="text" class="form-control" placeholder="100-" aria-label="ADMIN-" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">MEMBER</span>
                                    </div>
                                </div>
                                <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button name="submit" type="submit" class="btn btn-primary">Generate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>