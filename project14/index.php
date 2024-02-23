<?php
    include 'data.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script src="./assets/ckeditor/ckeditor5-build-classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="main container-fluid">
        <div class="container">
            <h4>Basic Info</h4>
            <hr>
            <table class="table table-borderless">
                <thead>
                    <tr class=" row">
                        <th class="col-2" scope="col">Employee ID</th>
                        <td class="col-10" scope="col">9</td>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="row">
                        <th scope="row" class="col-2">Last Name</th>
                        <td class="col-10">
                            Dodsworth
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">First Name</th>
                        <td class="col-10">
                            <input type="text" value="Anne" style="width: 100%;" class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">Gender</th>
                        <td class="col-10">
                            <input type="radio" name="" id="">
                            <label for="">Male</label>
                            <br>
                            <input type="radio" name="" id="">
                            <label for="">Female</label>
                            <br>
                            <input type="radio" name="" id="">
                            <label for="">XXX</label>
                            <br>
                            <input type="radio" name="" id="">
                            <label for="">ZZZ</label>
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">Title</th>
                        <td class="col-10">
                            <input type="text" style="width: 100%;" value="Sales Representative" class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">Suffix</th>
                        <td class="col-10">
                            <input type="text" style="width: 100%;" value="Ms." class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">BirthDate</th>
                        <td class="col-10">
                            <input type="text" style="width: 100%;" value="1969-07-02 00:00:00" class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">HireDate</th>
                        <td class="col-10">
                            <input type="text" style="width: 100%;" value="1994-07-02 00:00:00" class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">SSN # (if applicable)</th>
                        <td class="col-10">
                            <input type="text" style="width: 100%;" class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">Reports To</th>
                        <td class="col-10">
                            <input type="number" value="Buchanan" placeholder="Buchanan" style="border-radius: 5px;">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="main container-fluid">
        <div class="container">
            <h4>Contact Info</h4>
            <hr>
            <table class="table table-borderless">
                <thead>
                    <tr class=" row">
                        <th class="col-2" scope="col">Email ID</th>
                        <td class="col-10" scope="col">
                            <input type="" placeholder="name@example.com" style="width: 100%;" value=""
                                class="border-bottom">
                        </td>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="row">
                        <th scope="row" class="col-2">Address</th>
                        <td class="col-10">
                            <input type="text" value="7 Houndstooth Rd." style="width: 100%;" value=""
                                class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">City</th>
                        <td class="col-10">
                            <input type="text" value="London" style="width: 100%;" class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">Region</th>
                        <td class="col-10">
                            <input type="text" style="width: 100%;" value="" class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">Postal Code</th>
                        <td class="col-10">
                            <input type="text" style="width: 100%;" value="WG2 7LT" class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">Country</th>
                        <td class="col-10">
                            <select name="" id="">
                                <?php
                                        foreach ($countries as $country) {
                                            ?>
                                <option value=""> <?php echo $country ?></option>
                                <?php
                                        }
                                    ?>

                            </select>
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">US Home Phone</th>
                        <td class="col-10">
                            <input type="text" style="width: 100%;" value="(234)234-2342" class="border-bottom">
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">Photo</th>
                        <td class="col-10">
                            <input type="text" style="width: 100%;" value="EmpID9.bmp" class="border-bottom">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="main container-fluid">
        <div class="container">
            <h4>Optional Info</h4>
            <hr>
            <table class="table table-borderless">
                <thead>
                    <tr class=" row">
                        <th class="col-2" scope="col">Notes</th>
                        <td class="col-10" scope="col">
                            <textarea name="" id="editor" cols="50" rows="20"></textarea>
                        </td>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="row">
                        <th scope="row" class="col-2">Preferred Shift</th>
                        <td class="col-10">
                            <input type="checkbox" name="" id=""> <label for="">Regular</label><br>
                            <input type="checkbox" name="" id=""> <label for="">Gravy Yard</label>
                        </td>
                    </tr>

                    <tr class="row">
                        <th scope="row" class="col-2">Active?</th>
                        <td class="col-10">
                            <input type="checkbox" name="" id="">
                        </td>
                    </tr>

                    <tr class="row display-flex align-items-center">
                        <th scope="row" class="col-2">Are you human?</th>
                        <td class="col-10">
                            <h1>TIDAWO</h1>
                            <label for="" class="" style="display: block; margin:0 auto;">Click to change</label>
                            <input type="text" style="width: 100%;" value="" class="border-bottom">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <hr>
    </div>

    <div class="footer">
        <div class="row container d-flex align-items-center">
            <div class="col-2">
                <i class="bi bi-caret-left-square-fill"></i>
                <i class="bi bi-caret-right-square-fill"></i>
                <p>* required</p>
            </div>

            <div class="col-10">
                <div class="row">
                    <div class="submit d-flex justify-content-end">
                        <button class="btn btn-dark">
                            <i class="bi bi-floppy-fill"></i>
                            Submit</button>
                        <button class="btn btn-dark mx-1">
                            <i class="bi bi-x"></i>
                            Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>