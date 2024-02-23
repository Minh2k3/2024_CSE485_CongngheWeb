<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project14</title>
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/solid.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.18.0/ckeditor.js"></script>
    <style>
        .underline {
            border-bottom: 1px solid #ccc;
        }

        .submit button {
            background-color: #ccc;
        }

        .submit button:hover {
            background-color: #9b292a;
        }

        .submit button:active {
            background-color: green;
        }

        #btnChange:hover {
            color: #9b292a;
        }

        .form-select {
            border: 1px solid #000;
        }

    </style>
</head>
<body>
    <?php
    $countries = array (
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
        "Antigua & Barbuda",
        "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain",
        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
        "Bermuda", "Bhutan",
        "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands",
        "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
    );

    ?>
    <div class="container mt-5">
        <p class="underline fw-bold h4">Basic Info</p>
        <table class="table table-borderless">
            <tbody>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Employee ID</td>
                    <td class="col-10">9</td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Last name</td>
                    <td class="col-10">Dodsworth</td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">First name</td>
                    <td class="col-10" style="width=100%">
                        <input type="text" class="col-12" style="width=100%" value="Anne">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold ">Gender</td>
                    <td class="col-10">
                        <input type="radio" name="option" id="" value="Male"> Male<br>
                        <input type="radio" name="option" id="" value="Female"> Female<br>
                        <input type="radio" name="option" id="" value="XXX"> XXX<br>
                        <input type="radio" name="option" id="" value="ZZZ"> ZZZ<br>
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Title</td>
                    <td class="col-10">
                        <input type="text" class="col-12" style="width=100%" value="Sales Representative">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Suffix</td>
                    <td class="col-10">
                        <input type="text" class="col-12" style="width=100%" value="Ms.">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">BirthDate</td>
                    <td class="col-10">
                        <input type="text" class="col-12" style="width=100%" value="1969-07-02 00:00:00">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">HireDate</td>
                    <td class="col-10">
                        <input type="text" class="col-12" style="width=100%" value="1994-11-15 00:00:00">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">SSN # (if applicable)</td>
                    <td class="col-10">
                        <input type="text" class="col-12" style="width=100%" value="">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Reports to</td>
                    <td class="col-10">
                        <select class="form-select col-3">
                            <option>Buchanan</option>
                            <option>Himakevolution</option>
                            <option>TMinh</option>
                            <option>YYY</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="underline fw-bold h4">Contact Info</p>
            <table class="table table-borderless">
                <tbody>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">Email</td>
                        <td class="col-10">
                            <input type="text" class="col-12"  placeholder="name@example.com">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">Andress</td>
                        <td class="col-10">
                            <input type="text" class="col-12" value="7 Houndstooth Rd.">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">City</td>
                        <td class="col-10">
                            <input type="text" class="col-12" value="London">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold ">Region</td>
                        <td class="col-10">
                            <input type="text" class="col-12" name="option" id="" value="">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">Postal Code</td>
                        <td class="col-10">
                            <input type="text" class="col-12"value="WG2 7LT">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">Country</td>
                        <td class="col-10">
                            <select class="form-select col-3">
                                <?php
                                    foreach ($countries as $country) {
                                        echo '<option>' . $country . '</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold ">US Home Phone</td>
                        <td class="col-10">
                            <input type="text" class="col-12" name="option" id="" value="(234)234-2342">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">Photo</td>
                        <td class="col-10">
                            <input type="text" class="col-12" style="width=100%" value="EmpID9.bmp">
                        </td>
                    </tr>
                </tbody>
            </table>
        <p class="underline fw-bold h4">Optional Info</p>
        <table class="table table-borderless">
            <tbody>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Notes</td>
                    <td class="col-10">
                        <textarea name="post_content" id="post_content" rows="10" cols="100"></textarea>
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Preferred Shift</td>
                    <td class="col-10">
                        <input type="checkbox" name="shift" id="" value="Regular"> Regular<br>
                        <input type="checkbox" name="shift" id="" value="GravyYard"> Gravy Yard                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Active?</td>
                    <td class="col-10">
                        <input type="checkbox" name="active" id="" value="isActive">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Are you human?</td>
                    <td class="col-10">
                        <div>
                            <p id="randomWord" class="fw-bold display-3">
                                <?php
                                    printCode();
                                ?>
                            </p>
                            <button type="button" class="fw-bold col-12 border-0 bg-white" id="btnChange">Click to change</button>
                            <input type="text" class="col-12" name="human" id="">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="underline fw-bold"></p>
        <div class="d-flex justify-content-between submit">
            <div>
                <button type="button"><i class="fa-solid fa-caret-left"></i></button>
                <button type="button"><i class="fa-solid fa-caret-right"></i></button>
            </div>
            <div>
                <button type="button"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
                <button type="button"><i class="fa-solid fa-xmark"></i> Cancel</button>
            </div>
        </div>
        <hr>
    </div>
</body>
<script type="text/javascript">
    CKEDITOR.replace( 'post_content', {
        height: "100px"
    } );
</script>
<?php
    function randomWord($length = 5) {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $word = "";
        for ($i = 0; $i < $length; $i++) {
            $word .= $chars[mt_rand(0, strlen($chars) - 1)] . " ";
        }
        return $word;
    }

    function printCode() {
        $word = randomWord();
        echo $word;
    }
?>
<script>
    // var btn = document.getElementById('btnChange');
    // btn.onclick = function() {
    //     change();
    // }
    document.getElementById('btnChange').addEventListener('click', change);
    function change() {
        document.getElementById('randomWord').innerHTML = "<?php printCode(); ?>";
    }
</script>
</html>