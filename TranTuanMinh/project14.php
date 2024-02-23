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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.18.0/ckeditor.js"></script>
    <style>

        .underline {
            border-bottom: 1px solid #ccc;
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
        "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
Islands", "Brunei",
        "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
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
                        <input type="text" style="width=100%" value="Anne">
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
                        <input type="text" style="width=100%" value="Sales Representative">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Suffix</td>
                    <td class="col-10">
                        <input type="text" style="width=100%" value="Ms.">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">BirthDate</td>
                    <td class="col-10">
                        <input type="text" style="width=100%" value="1969-07-02 00:00:00">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">HireDate</td>
                    <td class="col-10">
                        <input type="text" style="width=100%" value="1994-11-15 00:00:00">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">SSN # (if applicable)</td>
                    <td class="col-10">
                        <input type="text" style="width=100%" value="">
                    </td>
                </tr>
                <tr class="row d-flex align-items-center">
                    <td class="col-2 fw-bold">Reports to</td>
                    <td class="col-10">
                        <select class="form-select">
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
                            <input type="text" style="width=100%" placeholder="name@example.com">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">Andress</td>
                        <td class="col-10">
                            <input type="text" style="width=100%" value="7 Houndstooth Rd.">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">City</td>
                        <td class="col-10" style="width=100%">
                            <input type="text" style="width=100%" value="London">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold ">Region</td>
                        <td class="col-10">
                            <input type="text" name="option" id="" value="">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">Postal Code</td>
                        <td class="col-10">
                            <input type="text" style="width=100%" value="WG2 7LT">
                        </td>
                    </tr>
                    <tr class="row d-flex align-items-center">
                        <td class="col-2 fw-bold">Country</td>
                        <td class="col-10">
                            <select class="form-select">
                                <?php
                                    foreach ($countries as $country) {
                                        echo '<option>' . $country . '</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        <p class="underline fw-bold">Optional Info</p>
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
                        
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    ?>
</body>
<script type="text/javascript">
    CKEDITOR.replace( 'post_content', {
        height: "100px"
    } );
</script>
</html>